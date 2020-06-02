<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Family;
use App\Entity\People;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventType extends AbstractType
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
                'expanded' => true,
            ])
            ->add('beginAt')
            ->add('endAt')
            //->add('people')
            ->add('family', EntityType::class, [
                'label' => 'Famille',
                'class' => Family::class,
                'choices' => $families,
                //'multiple' => true
            ])
            ->add ("submit", SubmitType::class, [
                'label' => 'Ajouter un événement'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
