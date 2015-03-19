<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IndisponibiliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chauffeur')
            ->add('motif','choice',array('choices'=>array('conge'=>'Congé','map'=>'Mise à pieds','cm'=>'Congé maladie','autre'=>'Autre')))
            ->add('datedebut','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('datefin','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
//            ->add('champssupp1')
//            ->add('champssupp2')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Indisponibilite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_indisponibilite';
    }
}
