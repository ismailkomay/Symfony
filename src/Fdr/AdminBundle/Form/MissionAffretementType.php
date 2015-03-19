<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MissionAffretementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ecc')
            ->add('ect')
            ->add('ebl')
            ->add('espece')
            ->add('autredoc')
            ->add('valdeclassurance')
            ->add('bonlivraison')
            ->add('numexpedition')
            ->add('dateramassage','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('lieuramassage')
            ->add('nbrecolis')
            ->add('naturemarchandise')
            ->add('datelivraison','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('lieulivraison')
            ->add('montantfacture', 'money', array('currency' => 'MAD', 'precision' => 2))
            ->add('remise', 'percent', array('precision' => 2,'required'=>false))
            ->add('motifremise')
            ->add('montantregle')
            ->add('nombnq')
            ->add('numcheque')
            //->add('feuilleDeRoute')
            ->add('client')
            ->add('nomresponsable')
            ->add('telresponsable')
            ->add('remarques','textarea',array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\MissionAffretement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_missionaffretement';
    }
}
