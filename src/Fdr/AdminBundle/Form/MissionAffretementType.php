<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MissionAffretementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('dateGeneree','datetime',array('date_widget' => "single_text", 'time_widget' => "single_text",'read_only' => true,'disabled' => true,'with_seconds'=>true))
            ->add('ecc')
            ->add('ect')
            ->add('ebl')
            ->add('espece')
            ->add('autredoc',null,array("attr"=>array("placeholder"=>"Autre document","title"=>"Saisir un autre document")))
            ->add('valdeclassurance','money',array('required'=>false,'currency' => 'DHs', 'precision' => 2,'pattern'=>'([0-9]*\.[0-9]+|[0-9]+|[0-9]*\,[0-9]+)',"attr"=>array("placeholder"=>"Valeur assurance","title"=>"Valeur assurance")))
            ->add('bonlivraison',null,array("attr"=>array("placeholder"=>"Bon de livraison","title"=>"Bon de livraison")))
            ->add('numexpedition',null,array("attr"=>array("placeholder"=>"Num. Expédition","title"=>"Numéro d'expdition")))
            ->add('dateramassage','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text","attr"=>array("placeholder"=>"Saisir la date de ramassage","title"=>"Saisir la date de ramassage")))
            ->add('lieuramassage',null,array("attr"=>array("placeholder"=>"Lieu ramassage","title"=>"Lieu de ramassage")))
            ->add('nbrecolis',null,array("attr"=>array("placeholder"=>"Nombre des colis","title"=>"Nombre des colis")))
            ->add('naturemarchandise',null,array("attr"=>array("placeholder"=>"Nature marchandise","title"=>"Nature marchandise")))
            ->add('datelivraison','datetime', array('date_widget' => "single_text", 'time_widget' => "single_text","attr"=>array("placeholder"=>"Saisir la date de liivraison","title"=>"Saisir la date de livraison")))
            ->add('lieulivraison',null,array("attr"=>array("placeholder"=>"Lieu livraison","title"=>"Lieu de livraison")))
            ->add('montantfacture', 'money', array('currency' => 'DHs', 'precision' => 2,'pattern'=>'([0-9]*\.[0-9]+|[0-9]+|[0-9]*\,[0-9]+)',"attr"=>array("placeholder"=>"Montant Facturé","title"=>"Montant Facturé")))
            ->add('remise', 'percent', array('precision' => 2,'required'=>false,"attr"=>array("placeholder"=>"Remise","title"=>"Remise en %")))
            ->add('motifremise',null,array("attr"=>array("placeholder"=>"Motif de remise","title"=>"Motif de remise")))
            ->add('montantregle')
            ->add('nombnq',null,array("attr"=>array("placeholder"=>"Nom de banque","title"=>"Nom de banque")))
            ->add('numcheque',null,array("attr"=>array("placeholder"=>"Numéro chèque","title"=>"Numéro chèque")))
            //->add('feuilleDeRoute')
            ->add('client',null,array("attr"=>array("placeholder"=>"Choisir ----","title"=>"Choisir un client")))
            ->add('nomresponsable',null,array("attr"=>array("placeholder"=>"Nom responsable","title"=>"Nom du responsable")))
            ->add('telresponsable',null,array("attr"=>array("placeholder"=>"Tel. responsable","title"=>"Tel. du responsable")))
            //->add('remarques','textarea',array('required'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\MissionAffretement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_missionaffretement';
    }
}
