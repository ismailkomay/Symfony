<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class ModificationType extends AbstractType
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
            ->add('motif',null,array("attr"=>array("placeholder"=>"Libelle","title"=>"Libelle")))
            ->add('dateMaj','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('utilisateur',null,array("placeholder"=>"Choisir un utilisateur","attr"=>array("title"=>"Choisir un utilisateur")))
            ->add('feuilleDeRoute',null,array("placeholder"=>"Choisir une feuille de route","attr"=>array("title"=>"Choisir une feuille de route")))
            ->add('remarque','textarea',array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Modification'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_modification';
    }
}
