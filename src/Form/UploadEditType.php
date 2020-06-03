<?php

namespace App\Form;

use App\Entity\Child;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;



class UploadEditType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $people = $this->security->getUser();
        $families = $people->getFamilies($people);
        foreach ($families as $family) {
            $children = $family->getChildren();
        }
        
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('file', FileType::class, [
                'label' => 'Photo',
                'data_class' => null,
                'required' => false,
                'mapped' => false,
            ])
            ->add('child', EntityType::class, [
                'class' => Child::class,
                'choices' => $children,
            ])
            ->add('submit', SubmitType::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

