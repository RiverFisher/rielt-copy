<?php

namespace App\Form\RealProperty;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class RealPropertyImageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imageFile', FileType::class, array(
                'label' => false,
                'required' => true,
                'data_class' => null,
                'multiple' => true
            ))
        ;

        // adding this forces to use old file if there is no file uploaded
        $builder->get('imageFile')->addEventListener(FormEvents::PRE_SUBMIT,
            function (FormEvent $event) {
            if (null === $event->getData()) {
                $event->setData($event->getForm()->getData());
            }
        });
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null//'App\Entity\RealProperty\RealPropertyImage'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'real_property_image';
    }
}
