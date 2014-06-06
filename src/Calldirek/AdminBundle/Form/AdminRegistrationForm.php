<?php

namespace Calldirek\AdminBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Calldirek\UserBundle\Form\RegistrationForm as BaseRegistrationForm;


class AdminRegistrationForm extends BaseRegistrationForm
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('username', 'text', array('required' => true))
            ->add('email', 'email', array('required' => true))
            ->add('agentId', 'integer', array('required' => false))
            ->add('firstName', 'text', array('required' => true))
            ->add('lastName', 'text', array('required' => true))
            ->add('phoneNumber', 'text', array('required' => true))
            ->add('address', 'text', array('required' => true))
            ->add('city', 'text', array('required' => true))
            ->add('state', 'text', array('required' => true))
            ->add('zipCode', 'integer', array('required' => true))
        ;

    }
} 