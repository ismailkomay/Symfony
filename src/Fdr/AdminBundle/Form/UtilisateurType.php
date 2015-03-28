<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
class UtilisateurType extends AbstractType
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
            ->add('nom',null,array("attr"=>array("placeholder"=>"Nom","title"=>"Nom")))
            ->add('prenom',null,array("attr"=>array("placeholder"=>"Prenom","title"=>"Prenom")))
            ->add('login',null,array("attr"=>array("placeholder"=>"Login","title"=>"Login")))
            ->add('motDePasse','repeated', array('type' => 'password','invalid_message' => 'Les mots de passe entrés ne correspondent pas.','first_name' => "1_",'second_name' => "2_",))
            ->add('matricule',null,array("attr"=>array("placeholder"=>"Matriculet","title"=>"Matricule")))
            ->add('cin',null,array("attr"=>array("placeholder"=>"CIN","title"=>"CIN")))
            ->add('tel',null,array("attr"=>array("placeholder"=>"Tel.","title"=>"Tel")))
            ->add('email',null,array("attr"=>array("placeholder"=>"Email","title"=>"Email")))
            ->add('adresse',null,array("attr"=>array("placeholder"=>"Adresse","title"=>"Adresse")))
           ->add('depot',null,array("attr"=>array("placeholder"=>"Depot","title"=>"Depot")))
           ->add('role',null,array("attr"=>array("placeholder"=>"Role","title"=>"Un role")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_utilisateur';
    }
}
