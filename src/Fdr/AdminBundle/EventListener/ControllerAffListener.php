<?php

namespace Fdr\AdminBundle\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
class ControllerAffListener implements EventSubscriberInterface
{
private $factory;

    public function __construct(FormFactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public static function getSubscribedEvents()
    {
        // Tells the dispatcher that you want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }
    
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        if (null === $data) {
            return;
        }
         $tab =explode("/",$_SERVER["REQUEST_URI"]);
        // check if the  object is not "new"
        if ($data->getId() and $tab[count($tab)-1]=="show") {
            //$form->add($this->factory->createNamed('secteur','textarea',null,array('choices'=>array('a'=>'aa'))));
            $form->add($this->factory->createNamed('id','text',null,array("auto_initialize"=>false,"attr"=>array("disabled"=>true,"Label"=>"Id","placeholder"=>"Identifiant ","title"=>"Identifiant dela feuille"))));
            /*$form->add($this->factory->createNamed('id', 'entity',null, array( 
                                                    'auto_initialize'=>false,
                                                   'multiple' => false,
                                                   'class' => 'FdrAdminBundle:Secteur',
                                                   'query_builder' => function(EntityRepository $er) {
                                                                         return $er->createQueryBuilder('g')
                                                                                     ->where('g.id=1');
                                                                                     })));*/
        }
}
}
