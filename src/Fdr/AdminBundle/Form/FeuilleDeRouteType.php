<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FeuilleDeRouteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateGeneree','datetime',array('date_widget' => "single_text", 'time_widget' => "single_text",'read_only' => true,'disabled' => true,'with_seconds'=>true))
            ->add('dateDebutMission','datetime',array('date_widget' => "single_text", 'time_widget' => "single_text"))
           ->add('dateFinMission','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('nombreManutention')
            ->add('nombreManutentionChauf1')
            ->add('nombreManutentionChauf2')
            ->add('nomManExterne1')
            ->add('nomManExterne2')
            ->add('compteurReel')
//            ->add('compteurFinal')
//            ->add('etat')
//            ->add('calcDiffKm')
//            ->add('calcKmParcourus')
//            ->add('calcNbRepas')
//            ->add('calcNbPetitDej')
//            ->add('calcNbDecoucher')
//            ->add('calcQuantite')
//            ->add('calcMontantCarburant')
//            ->add('calcMontantPeage')
//            ->add('calcNbJours')
//            ->add('primeRemorque')
            ->add('remarques')
//            ->add('agentSaisie')
//            ->add('operationnel')
//            ->add('surveillant')
//            ->add('champSup1')
//            ->add('champSup2')
//            ->add('champSup3')
//            ->add('champSup4')
            ->add('vehicule',null,array('attr'=>array('placeholder' => 'Choisir ...')))
            ->add('typePrestation',null,array("attr"=>array("onchange"=>"changerPrestation()","required"=>true,'placeholder' => 'Choisir ...')))
            ->add('secteur',null,array("attr"=>array("required"=>true,'placeholder' => 'Choisir ...')))
          //  ->add('client',null,array('attr'=>array('placeholder' => 'Choisir ...')))
            ->add('manutentionnaires')
            ->add('chauffeurs')
//            ->add('utilisateurs')
            ->add('filiale')
            ->add('depot')
            ->add('missionaffretement','choice')
  //          ->add('cloture')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\FeuilleDeRoute'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_feuillederoute';
    }
}
