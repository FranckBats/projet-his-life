<?php

namespace App\Form;

use App\Entity\Child;
use App\Entity\Family;
use App\Entity\People;
use App\Repository\FamilyRepository;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;



class ChildType extends AbstractType
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

        $builder
            ->add('lastname', null, [
                'label' => 'Nom',
                'constraints' => new NotBlank,
            ])
            ->add('firstname', null, [
                'label' => 'Prénom',
                'constraints' => new NotBlank,
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'Sexe',
                'choices' => [
                    'Fille' => 'Fille',
                    'Garçon' => 'Garçon',
                    'Autre' => 'Autre',
                 ],
                'expanded' => true,
            ])
            ->add('birthdate', BirthdayType::class, [
                'label' => 'Date anniversaire',
                'format' => 'dd MM yyyy',
                'placeholder' => [
                    'day' => 'Jour' , 'month' => 'Mois', 'year' => 'Année',
                ]
            ])
            ->add('picture', FileType::class, [
                'label' => 'Photo',
                'data_class' => null,
                'constraints' => [
                    new Image([
                        // on peut mettre une taille max ou min
                        ])
                ],
                'required' => false
            ])
            ->add('families', EntityType::class, [
                'label' => 'Famille',
                'class' => Family::class,
                'choices' => $families,
                'multiple' => true
                ])
                            
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter un enfant'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Child::class,
        ]);
    }
}
