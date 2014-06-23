<?php

namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PartyType extends AbstractType
{
    private $choices;
        public function __construct( $choices ){
                $this->choices = $choices;
         }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('from','text', array( 'required' => false, 'attr' => array (
                                            'class' => 'search-field',
                                            'placeholder' => 'From') ) )
            ->add('till','text', array( 'required' => false, 'attr' => array (
                                            'class' => 'search-field',
                                            'placeholder' => 'Till') ) )
            ->add('organisers','choice', array( 'required' => false,
                                            'choices' => $this->choices ,
                                            'attr' => array (
                                            'class' => 'search-field',
                                             'placeholder' => 'Organisers') ) )
            ->add('search','submit');

    }





    public function getName()
    {
        return 'party_calendar';
    }
}