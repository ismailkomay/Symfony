<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BonCarburantHuileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieu')
            ->add('date','date',array('years' => range(1990,2030)))
            ->add('quantite')
            ->add('montant', 'money', array('currency' => 'EUR', 'precision' => 2))
            ->add('compteur')
            //->add('champSup1')
            //->add('champSup2')
            ->add('feuilleDeRoute')
            ->add('typeConsommation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\BonCarburantHuile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_boncarburanthuile';
    }
}
