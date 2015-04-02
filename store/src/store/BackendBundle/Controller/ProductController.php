<?php

// l'endroit ou je me déclare ma classe MainController
namespace store\BackendBundle\Controller;

// j'inclus la classe controller de symphony pour pouvoir hériter de cette classe
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ProductController
 * @package store\BackendBundle\Controller
 */
class ProductController extends Controller{

    /**
     * page list produit
     */
    public function listAction(){
        // je returne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
        return $this->render('storeBackendBundle:product:list.html.twig');

    }

    /**
     * view produit
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($id,$name){
        // je retourne ma vue view de produit ou je transmet l'id en vue
        return $this->render('storeBackendBundle:product:view.html.twig' ,array(
            'id' => $id,
            'name' => $name        )
    );
    }

}