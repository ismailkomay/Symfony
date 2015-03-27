<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
class BonCarburantHuileType extends AbstractType
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
            ->add('lieu',null,array("attr"=>array("placeholder"=>"Lieu de bonCarburant","title"=>"Lieu de bonCarburant")))
            ->add('date','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('quantite','money',array('currency' => 'Lit', 'precision' => 2,"attr"=>array("placeholder"=>"Quantité de bonCarburant","title"=>"Quantité de bonCarburant")))
            ->add('montant', 'money', array('currency' => 'Dhs', 'precision' => 2,"attr"=>array("placeholder"=>"Montant de bonCarburant","title"=>"Montant de bonCarburant")))
            ->add('compteur','money',array('currency' => 'Km.', 'precision' => 2,"attr"=>array("placeholder"=>"Compteur avant le plein","title"=>"Compteur avant le plein")))
            ->add('feuilleDeRoute',null,array("placeholder"=>"Choisir la FDR associé","attr"=>array("title"=>"Choisir la FDR associé")))
            ->add('typeConsommation',null,array("placeholder"=>"Choisir un type de consommation","attr"=>array("title"=>"Saisir un autre document")))
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
