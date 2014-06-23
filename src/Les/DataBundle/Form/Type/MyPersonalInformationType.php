<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MyPersonalInformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name_of_restaurant','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('first_name','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('family_name','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('address','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('telephone_1','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('telephone_2','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('email','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('save','submit');

    }

    public function getName()
    {
        return 'myPersonalInformation';
    }
}