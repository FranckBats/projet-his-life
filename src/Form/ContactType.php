<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('job')
            ->add('address')
            ->add('phone')
            ->add('email')
            ->add('family')
            ->add('submit', SubmitType::class, [
                'label' => 'enregistrer '
            ])
            ->setMethod('DELETE')
            ->add('deleteButton', SubmitType::class,[
                'label' => 'Supprimer',
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
