<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PeageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numCarte')
            ->add('datePassage','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('montant', 'money', array('currency' => 'MAD', 'precision' => 2))
            ->add('feuilleDeRoute')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Peage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_peage';
    }
}
