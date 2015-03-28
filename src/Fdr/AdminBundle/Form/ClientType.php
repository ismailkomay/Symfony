<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class ClientType extends AbstractType
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
            ->add('nom',null,array("attr"=>array("placeholder"=>"Nom","title"=>"Lieu de bonCarburant")))
            ->add('prenom',null,array("attr"=>array("placeholder"=>"Prenom","title"=>"Prenom")))
            ->add('tel',null,array("attr"=>array("placeholder"=>"Téléphone","title"=>"Téléphone")))
            ->add('adresse',null,array("attr"=>array("placeholder"=>"Adresse","title"=>"Adresse")))
            ->add('cin',null,array("attr"=>array("placeholder"=>"CIN","title"=>"CIN")))
            ->add('email',null,array("attr"=>array("placeholder"=>"Email","title"=>"Email")))
            ->add('fax',null,array("attr"=>array("placeholder"=>"Fax","title"=>"Fax")))
            ->add('nomentreprise',null,array("attr"=>array("placeholder"=>"Nom d'entreprise","title"=>"Nom d'entreprise")))
            ->add('encompte')
            ->add('clientaffret')
            ->add('clientramass')
            ->add('numcompte',null,array("attr"=>array("placeholder"=>"Num. compte","title"=>"Num. compte")))
            ->add('secteurs')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_client';
    }
}
