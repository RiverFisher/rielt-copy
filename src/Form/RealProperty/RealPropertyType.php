<?php

namespace App\Form\RealProperty;

use App\Entity\RealProperty\RealProperty;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RealPropertyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', EntityType::class, array(
                'label' => 'Тип недвижимости',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm custom-select'
                ],
                'class' => 'App\Entity\RealProperty\RealPropertyType',
                'choice_label' => 'name',
                'required' => true
            ))
            ->add('address', TextType::class, array(
                'label' => 'Адрес',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-control-sm controls',
                    'placeholder' => 'Введите адрес'
                ]
            ))
            ->add('originalAdText', TextType::class, array(
                'label' => 'Оригинальный текст объявления',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('area', TextType::class, array(
                'label' => 'Площадь',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('cost', IntegerType::class, array(
                'label' => 'Стоимость',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('purpose', ChoiceType::class, array(
                'label' => 'Цель подачи объявления',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'attr' => [
                    'class' => 'form-control form-control-sm custom-select'
                ],
//                'choices_as_values' => true,
                'required' => true,
                'choices' => array(
                    'Продажа'       => RealProperty::SALE,
                    'Аренда'        => RealProperty::LEASE,
                    'Новостройка'   => RealProperty::NEW_BUILDING
                )
            ))
            ->add('images', CollectionType::class, array(
                'entry_type' => RealPropertyImageType::class,
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
            'data_class' => 'App\Entity\RealProperty\RealProperty'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'real_property_real_property';
    }
}
