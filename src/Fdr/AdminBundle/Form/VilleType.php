<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VilleType extends AbstractType
{    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $resolver->setDefaults(
                array(
            'choices' => array(
             'casa' => 'Casablanca',
             'Salé' => 'Salé',
             'rabat' => 'Rabat',
             'khouribga' => 'Khouribga',
             'titmelil' => 'tit Melil',
             'eljadida' => 'Eladida',
             'tanger' => 'Tanger',
             'elhoceima' => 'El Hoceima'
             )
                    )
                );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ville';
    }
    
    public function getParent()
    {
    return 'choice';
    }
    
}
