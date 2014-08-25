<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AffiliatePayReqType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('Admin', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Admin',
                    'property' => 'email',
                    'required' => true,
                    'empty_value' => 'Choose an option',
                ))
                ->add('Affiliateinfo', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Affiliateinfo',
                    'property' => 'email',
                    'required' => true,
                    'empty_value' => 'Choose an option',
                ))
                ->add('requestedAmt', 'text', array('required' => true))
                ->add('requestedDate', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-yyyy', 'read_only' => true))
                ->add('description', 'textarea', array('required' => true))
//                ->add('reqStatus','text',array('required'=>true))
                ->add('reqStatus', 'choice', array(
                    'choices' => array(
                        'Pending' => 'Pending',
                        'Done' => 'Done',
                        'Partial Payment' => 'Partial Payment',
                        'Final Payment' => 'Final Payment'
                    ),
                    'required' => false,
                    'empty_value' => 'Choose an option',
                    'empty_data' => null
                ))
                ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Affiliate\AffiliateManagementBundle\Entity\AffiliatePayReq'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'affiliatepayreq';
    }

}
