<?php

namespace App\Form\Platform;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
                'label' => 'Имя пользователя',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('email', EmailType::class, array(
                'label' => 'E-Mail',
                'label_attr' => [
                    'class' => 'control-label'
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ]
            ))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array(
                    'label' => 'Пароль',
                    'label_attr' => [
                        'class' => 'control-label'
                    ],
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control form-control-sm'
                    ]
                ),
                'second_options' => array(
                    'label' => 'Пароль повторно',
                    'label_attr' => [
                        'class' => 'control-label'
                    ],
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control form-control-sm'
                    ]
                ),
                'required' => false
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'Зарегистрироваться',
                'attr' => [
                    'class' => 'btn btn-sm btn-primary col-6 mx-auto',
                    'style' => 'display: block;'
                ]
            ])
//            ->add('firstName', TextType::class, array(
//                'label' => 'Имя',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => false,
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ))
//            ->add('middleName', TextType::class, array(
//                'label' => 'Отчество',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => false,
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ))
//            ->add('lastName', TextType::class, array(
//                'label' => 'Фамилия',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => false,
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ))
//            ->add('phoneNumber', TextType::class, array(
//                'label' => 'Телефон',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => false,
//                'attr' => [
//                    'class' => 'form-control'
//                ]
//            ))
//            ->add('dateOfBirth', DateType::class, array(
//                'label' => 'Дата рождения',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => false,
//                'widget' => 'single_text',
//                'format' => 'dd.MM.yyyy',
//                'attr' => [
//                    'class' => 'form-control fdatepicker'
//                ]
//            ))
//            ->add('sex', ChoiceType::class, array(
//                'label' => 'Пол',
//                'label_attr' => [
//                    'class' => 'control-label'
//                ],
//                'required' => true,
//                'attr' => [
//                    'class' => 'form-control custom-select'
//                ],
//                'choices'  => [
//                    'Мужской' => 'Мужской',
//                    'Женский' => 'Женский'
//                ]
//            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Platform\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'platform_registration_default';
    }
}
