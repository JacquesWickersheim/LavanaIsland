<?php

namespace App\Form;

use App\Entity\Concess;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConcessType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Le Nom du véhicule',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('type', TextType::class, [
                'label' => 'Le Type de véhicule',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('prix', TextType::class, [
                'label' => 'Le Prix du véhicule',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('vitesse_max', TextType::class, [
                'label' => 'La Vitesse maximum du véhicule',
                'attr' =>  [
                    'class' => 'form-control'
                ]
            ])
            ->add('puissance', TextType::class, [
                'label' => 'La puissance du véhicule',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Concess::class,
        ]);
    }
}
