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
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
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
            ->add('lastname')
            ->add('firstname')
            ->add('gender')
            ->add('birthdate', BirthdayType::class, [
                'label' => 'Date anniversaire',
                'placeholder' => [
                    'day' => 'Jour' , 'month' => 'Mois', 'year' => 'Année',
                ]
            ])
            ->add('picture')
            ->add('families', EntityType::class, [
                'class' => Family::class,
                'choices' => $families,
                'multiple' => true
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Child::class,
        ]);
    }
}
