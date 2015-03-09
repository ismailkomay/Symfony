<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItineraireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $villes = array('casablanca'=>'Casablanca','rabat'=>'Rabat','khouribga'=>'Khouribga','titmelil'=>'Tit melil');
        $builder
            ->add('depart','choice',array('choices'=>$villes))
            ->add('arrivee','choice',array('choices'=>$villes))
            ->add('disponible')
            ->add('remarques','textarea',array('required'=>false))
//            ->add('champssupp1')
//            ->add('champssupp2')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Itineraire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_adminbundle_itineraire';
    }
}
