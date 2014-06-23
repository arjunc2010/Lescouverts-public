<?php


namespace Les\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType {
    private $choices = null ;
    public function __construct( $choices ){
        $this->choices = $choices;
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array( 'required' => true ) )
            ->add('category','choice', array( 'required' => true , 'choices' => $this->choices  ) )
            ->add('origin','text', array( 'required' => true ) )
            ->add('country','text', array( 'required' => true ) )
            ->add('pricePer','text', array( 'required' => true ) )
            ->add('quantityInitial','number', array( 'required' => true ) )
            ->add('desUnit','text', array( 'required' => true ) )
            ->add('price','number', array( 'required' => true ) )
            ->add('discount','percent', array( 'required' => true ) )
            ->add('validFrom','date', array( 'required' => true ) )
            ->add('validTill','date', array( 'required' => true ) )
            ->add('description','textarea', array( 'required' => true ) )
            ->add('submit','submit');

    }

    public function getName()
    {
        return 'rating';
    }
} 