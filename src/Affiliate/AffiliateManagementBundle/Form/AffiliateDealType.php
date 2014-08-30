<?php

namespace Affiliate\AffiliateManagementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AffiliateDealType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('Userinfo', 'entity', array(
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
            ->add('Deal','entity', array(
                    'class' => 'Affiliate\AffiliateManagementBundle\Entity\Deal',
                    'property' => 'dName',
                    'required' => true,
                    'empty_value' => 'Choose an option',
                ))
            ->add('description','textarea',array( 'required' => true ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Affiliate\AffiliateManagementBundle\Entity\AffiliateDeal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'affiliatedeal';
    }
}
