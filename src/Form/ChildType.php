<?php

namespace App\Form;

use App\Entity\Child;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
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
                'constraints' => [
                    new Image([
                        // on peut mettre une taille max ou min
                    ])
                ]
             ])
            ->add('families', null, [
                'label' => 'Famille',
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
