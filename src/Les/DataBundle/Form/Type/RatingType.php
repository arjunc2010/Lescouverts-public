<?php
/**
 * Created by PhpStorm.
 * User: ACE1
 * Date: 6/11/14
 * Time: 9:03 PM
 */

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RatingType extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('service','choice', array( 'required' => true,
                        'choices' => array ( 1, 2, 3, 4 ,5 ,6 ,7 ,8 ,9 ,10 ) , 'attr' => array (
                    'class' => 'search-field')  ) )
            ->add('platter','choice', array( 'required' => true,
                        'choices' => array ( 1, 2, 3, 4 ,5 ,6 ,7 ,8 ,9 ,10 )  , 'attr' => array (
                    'class' => 'search-field') ) )
            ->add('quality','choice', array( 'required' => true,
                'choices' => array ( 1, 2, 3, 4 ,5 ,6 ,7 ,8 ,9 ,10 )  , 'attr' => array (
                    'class' => 'search-field') ) )
            ->add('submit','submit');

    }

    public function getName()
    {
        return 'rating';
    }
} 