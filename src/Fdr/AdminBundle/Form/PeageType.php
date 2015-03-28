<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class PeageType extends AbstractType
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
            ->add('numCarte',null,array("attr"=>array("placeholder"=>"Num. Carte","title"=>"Num. Carte")))
            ->add('datePassage','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('montant', 'money', array('currency' => 'Dhs', 'precision' => 2,"attr"=>array("placeholder"=>"Montant","title"=>"Montant")))
            ->add('feuilleDeRoute',null,array("placeholder"=>"Choisir la FDR associé","attr"=>array("title"=>"Choisir la FDR associé")))
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