<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffiliateinfoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fname','text',array('required'=>true))
            ->add('lname','text',array('required'=>true))
            ->add('username','email',array('required'=>true))
            ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repeat Password'),
                ))
            ->add('email','email',array('required'=>true))
            ->add('state','text',array('required'=>true))
            ->add('country','text',array('required'=>true))
            ->add('zipcode','text',array('required'=>true))
            ->add('mobile','text',array('required'=>true))
            ->add('addedBy','text',array('required'=>true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'affiliateinfo';
    }
}
