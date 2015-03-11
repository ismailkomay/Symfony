<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SecteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('type','choice',array('choices'=>array('secteur'=>'Secteur','ligne'=>'Ligne','itineraire'=>'Itineraire'))) 
            ->add('libelle')
            ->add('depart')
            ->add('arrivee')
            ->add('clients')
            ->add('remarques','textarea',array('required'=>false))                
//            ->add('champssupp1')
//            ->add('champssupp2')
//            ->add('clients')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Secteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_secteur';
    }
}
