<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('login')
            ->add('motDePasse','repeated', array('type' => 'password','invalid_message' => 'Les mots de passe entrés ne correspondent pas.','first_name' => "password",'second_name' => "repassword",))
            ->add('matricule')
            ->add('cin')
            ->add('tel')
            ->add('email')
            ->add('adresse')
//            ->add('champSup1')
//            ->add('champSup2')
//            ->add('feuilleDeRoutes')
           ->add('depot')
           ->add('role')
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
