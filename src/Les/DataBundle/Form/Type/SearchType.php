<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('arrondissement','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('cuisine','text', array( 'required' => false, 'attr' => array ( 'class' => 'search-field' ) ) )
            ->add('search','submit');

    }

    public function getName()
    {
        return 'search';
    }
}