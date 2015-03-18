<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeConsommationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','choice',array('choices'=>array('interne'=>'Interne','externe'=>'Externe')))
            ->add('agence','choice',array('choices'=>array('casa'=>'Agence Casa','marrakech'=>'Agence Marrakech','fes'=>'Agence Fes')))
            ->add('produit','choice',array('choices'=>array('gazoil'=>'Gazoil','essence'=>'Essence')))
            ->add('prixUnitaire', 'money', array('currency' => 'EUR', 'precision' => 2))
//            ->add('champSup1')
//            ->add('champSup2')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\TypeConsommation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_typeconsommation';
    }
}
