<?php

namespace Calldirek\UserBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationForm extends BaseType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('username', 'text', array('required' => true))
            ->add('email', 'email', array('required' => true))
            ->add('agentId', 'integer', array('required' => true))
            ->add('firstName', 'text', array('required' => true))
            ->add('lastName', 'text', array('required' => true))
            ->add('phoneNumber', 'text', array('required' => true))
            ->add('address', 'text', array('required' => true))
            ->add('city', 'text', array('required' => true))
            ->add('state', 'text', array('required' => true))
            ->add('zipCode', 'integer', array('required' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Calldirek\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'calldirek_user_registration';
    }
}
