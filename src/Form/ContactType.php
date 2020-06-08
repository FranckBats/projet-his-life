<?php

namespace App\Form;

use App\Entity\Family;
use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{

    private $security;

    public function __construct (Security $security)
    {
        $this->security = $security;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $people = $this->security->getUser();
       $families = $people->getFamilies($people);

        $builder
            ->add('name')
            ->add('job')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('family', EntityType::class, [
                'label' => 'Famille',
                'class' => Family::class,
                'choices' => $families,
            ])
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
