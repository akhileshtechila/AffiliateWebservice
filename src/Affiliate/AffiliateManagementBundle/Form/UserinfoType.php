<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserinfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fName','text',array('required'=>true))
            ->add('lName','text',array('required'=>true))
            ->add('email','email',array('required'=>true))
            ->add('userName','text',array('required'=>true))
            ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repeat Password'),
                ))
         
            ->add('state','text',array('required'=>true))
            ->add('country','text',array('required'=>true))
            ->add('zipCode','text',array('required'=>true))
            ->add('mobile','text',array('required'=>true))
            ->add('userType','choice', array(
                    'choices' => array(
                        'admin' => 'admin',
                        'affiliate' => 'affiliate'
                    ),
                    'required' => false,
                    'empty_value' => 'Choose an option',
                    'empty_data' => null
                ))
            ->add('deviceToken','text',array('required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userinfo';
    }
}
