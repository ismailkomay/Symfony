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
//            ->add('dateGeneree')
            ->add('dateDebutMission')
//            ->add('dateFinMission')
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
            ->add('vehicule')
            ->add('typePrestation')
            ->add('secteur')
            ->add('manutentionnaires')
            ->add('chauffeurs')
//            ->add('utilisateurs')
            ->add('depot')
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
