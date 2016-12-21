<?php

namespace MyApp\CarnetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('telephone','number')
            ->add('email','email', array('required' => false))
            ->add('siteweb','url', array('required' => false));
    }
    
    public function getName()
    {
        return 'contact';
    }    
}