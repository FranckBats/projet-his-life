<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Family;
use App\Entity\People;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EvenementType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $people = $this->security->getUser();
        $families =$people->getFamilies($people);

        $builder
            ->add('name', null, [
                'label' => 'Nom',
                'constraints' => new NotBlank,
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Medical' => 'Médical',
                    'Scolaire' => 'Scolaire',
                    'Autre' => 'Autre',
                ],
               
            ])
            ->add('beginAt',  DateType::class, [
                // renders it as a single text box
                'label' => 'Commence le:',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker'],
                'format' =>  'dd/MM/yyyy'
            ])
            ->add('endAt',  DateType::class, [
                // renders it as a single text box
                'label' => 'Fini le:',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'js-datepicker'],
                'format' =>  'dd/MM/yyyy'
            ])
            //->add('people')
            ->add('family', EntityType::class, [
                'label' => 'Famille',
                'class' => Family::class,
                'choices' => $families,
                //'multiple' => true
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
