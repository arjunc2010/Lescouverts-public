<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class MyInformationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number_of_reservations','integer', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('name','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('address','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('cuisine','text', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('menu_price_min','number', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('menu_price_max','number', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('meal_price_min','number', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('meal_price_max','number', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('payment_visa','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('payment_master','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('payment_ticket','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('vacation_period_start','date', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' , 'format' => 'MM-dd' ) ) )
            ->add('vacation_period_end','date', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('servicing_hour_start','time', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('servicing_hour_end','time', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('mon1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('mon2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('mon3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('tue1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('tue2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('tue3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('wed1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('wed2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('wed3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('thur1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('thur2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('thur3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('fri1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('fri2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('fri3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sat1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sat2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sat3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sun1','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sun2','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('sun3','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )

            ->add('terrace','checkbox', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('guides','textarea', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('languages','textarea', array( 'required' => true, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('save','submit');

    }

    public function getName()
    {
        return 'myInformation';
    }
}