<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ShopInformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('email','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('phone','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('fax','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('road','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('city','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('country','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('pincode','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('save','submit');

    }

    public function getName()
    {
        return 'search';
    }
}