<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class VirtualMarketSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product_name','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('price','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field',
                                                                                'readOnly' => 'true' ) ) )
            ->add('place','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('discount','percent', array( 'required' => false, 'attr' => array ( 'class' => 'search-field',
                                                                                        'readOnly' => 'true') ) )
            ->add('valid_from','text', array( 'required' => false, 'attr' => array ( 'id' => 'field-from' , 'class' => 'search-field' ) ) )
            ->add('valid_till','text', array( 'required' => false, 'attr' => array ( 'id' => 'field-till' , 'class' => 'search-field' ) ) )
            ->add('sort_by','choice', array( 'required' => false, 'choices' => array( 'a' => 'alphabetical',
                                                                                    'p'=> 'price',
                                                                                    'd' => 'discount',
                                                                                    'v' => 'validity_date' ),
                                                                    'attr' => array ('class' => 'search-field' ) ) )
            ->add('search','submit');

    }

    public function getName()
    {
        return 'search';
    }
}