<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChauffeurType extends AbstractType
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
            ->add('tel')
            ->add('cin')
            ->add('adresse')
            ->add('dateembauche','date',array('years' => range(1990,2030)))
            ->add('typeconvention','choice',array('choices'=>array(
                'cdd'=>'CDD',
                'cdi'=>'CDI',
                'interim'=>'Interim',
                'autre'=>'Autre.'),
                ))
            //->add('champssupp1')
            ->add('etatContrat','choice',array('choices'=>array('ouvert'=>'Ouvert','resilie'=>'Résilié')))
           // ->add('feuilleDeRoutes')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Chauffeur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_chauffeur';
    }
}
