<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RoleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomRole')
            ->add('description')
           ->add('administrer') 
            ->add('cRUDFDR')
            ->add('cRUDFDRPanne')
            ->add('cRUDFDRAgence')
            ->add('cRUDClientCompeFDL')
            ->add('cRUDClientNonCompteFDL')
            ->add('affectationVehiculeAffr')
            ->add('cloturerFDR')
            ->add('cloturerFDRAffr')
            ->add('confRecDocCtm')
            ->add('confRecDocClient')
            ->add('editCompteur')
            ->add('pourcentageAssurance')
            ->add('cRUDClient')
            ->add('cRUDVehicule')
            ->add('cRUDChauffeur')
            ->add('cRUDUtilisateur')
            ->add('cRUDDepot')
            ->add('cRUDFiliale')
            ->add('cRUDManutentionnaire')
            ->add('cRUDIndisponibilite')
            ->add('cRUDItineraire')
            ->add('cRUDPrestation')
            ->add('cRUDTypePrestation')
            ->add('cRUDSecteur')
            ->add('cRUDTypeConsommation')
            ->add('cRUDSecteur')  
//            ->add('champSup1')
//            ->add('champSup2')
//            ->add('champSup3')
//            ->add('champSup4')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Role'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_role';
    }
}
