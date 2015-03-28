<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
class VehiculeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$subscriber = new ControllerAffListener($builder->getFormFactory());
        $builder->addEventSubscriber($subscriber);
        $builder
            ->add('tonnage', 'money', array('currency' => 'Tn.', 'precision' => 2))
            ->add('type','choice',array('choices'=>array('ctm'=>'CTM','autre'=>'Autre')))
            ->add('remorque')
//            ->add('disponibilite')
            ->add('vidange','money',array('currency' => 'Km.', 'precision' => 2,"attr"=>array("placeholder"=>"10000","title"=>"Vidange")))
            ->add('compteur','money',array('currency' => 'Km.', 'precision' => 2,"attr"=>array("placeholder"=>"5000","title"=>"Compteur actuel")))
            ->add('matricule')
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
            'data_class' => 'Fdr\AdminBundle\Entity\Vehicule'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_vehicule';
    }
}
