<?php

namespace Les\DataBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class FeedbackType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('text','textarea', array( 'required' => true, 'attr' => array (
                'class' => 'search-field',
                'placeholder' => 'Leave a comment') ) )
            ->add('submit','submit');

    }

    public function getName()
    {
        return 'feedback';
    }
} 