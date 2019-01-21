<?php

namespace AppBundle\Form;

use AppBundle\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class AddressType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('firstname')
                ->add('lastname')
                ->add('street')
                ->add('number')
                ->add('zip')
                ->add('city')
                ->add('country', CountryType::class, [
                    'placeholder' => 'Choose a country',
                ])
                ->add('phone')
                ->add('birthday', DateType::class, array(
                        'widget' => 'single_text',
                        'format' => 'yyyy-MM-dd',
                    ))
                ->add('email', EmailType::class)
                ->add('picture', FileType::class,  array('data_class' => null, 'required' => false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Address'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_address';
    }


}
