<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\HomePageConsult;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('phoneNumber')
            ->add('project',ChoiceType::class, [
        'choices' => [
            'Your Choice' => 'Your Choice',
            'Montefiore Manali, Manali' => 'Montefiore Manali, Manali',
            'TruHaven City Gate, Shimla' => 'TruHaven City Gate, Shimla',
            'City Square, Sector 127, Mohali' => 'City Square, Sector 127, Mohali',
            'TruHaven Parivaas, Zirakpur Patiala Highway, Banur' => 'TruHaven Parivaas, Zirakpur Patiala Highway, Banur',
            'TruHaven Shopping Square, Patiala Highway, Zirakpur' => 'TruHaven Shopping Square, Patiala Highway, Zirakpur',
            'City of Dreams Mohali, Landran Kharar Highway, Sector 127, Mohali' => 'City of Dreams Mohali, Landran Kharar Highway, Sector 127, Mohali',
        ]
    ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
