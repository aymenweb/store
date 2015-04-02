<?php

// l'endroit ou je me déclare ma classe MainController
namespace store\BackendBundle\Controller;

// j'inclus la classe controller de symphony pour pouvoir hériter de cette classe
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CmsController
 * @package store\BackendBundle\Controller
 */
class CmsController extends Controller{

    /**
     * page category
     */
    public function listAction(){
        // je retourne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
        return $this->render('storeBackendBundle:cms:list.html.twig');

    }

    /**
     * @param $id
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id,$name)
    {
        return $this->render('storeBackendBundle:cms:view.html.twig', array(
                'id' => $id,
                'name' => $name )
        );
    }

}