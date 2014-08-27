<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AffiliatePayReqType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('UserinfoRequestedBy', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo',
                    'property' => 'email',
                    'required' => false,
                    'empty_value' => 'Choose an option',
                    'query_builder' => function(EntityRepository $er) {
                return $er
                        ->createQueryBuilder('U')
                        ->select('U')
                        ->where("U.userType = 'affiliate'")                        
                      ;
                  },
                ))
                
                 ->add('UserinfoReleasedBy', 'entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Userinfo',
                    'property' => 'email',
                    'required' => false,
                    'empty_value' => 'Choose an option',
                    'query_builder' => function(EntityRepository $er) {
                return $er
                        ->createQueryBuilder('U')
                        ->select('U')
                        ->where("U.userType = 'admin'")                        
                      ;
                  },
                ))
               
                ->add('requestedAmt', 'text', array('required' => true))
                ->add('requestedDate', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-yyyy', 'read_only' => true))
                ->add('reqDescription', 'textarea', array('required' => true))
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
