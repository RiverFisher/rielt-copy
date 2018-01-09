<?php

namespace App\Form\Platform;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContainerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text', TextType::class, array(
                'label' => 'Текст',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('containerImages', CollectionType::class, array(
                'entry_type' => ContainerImageType::class,
                'label' => false,
                'allow_add'  => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'Сохранить',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary col-6 mx-auto',
                    'style' => 'display: block;'
                ]
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Platform\Container'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'platform_container';
    }
}
