<?php

// l'endroit ou je me déclare ma classe MainController
namespace store\BackendBundle\Controller;

// j'inclus la classe controller de symphony pour pouvoir hériter de cette classe
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class StaticsController
 * @package store\BackendBundle\Controller
 */
class StaticsController extends Controller{

    /**
     * page contact
     */
   public function contactAction(){
       // je returne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
       return $this->render('storeBackendBundle:Statics:contact.html.twig');

   }
    public function aboutAction(){
        // je returne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
        return $this->render('storeBackendBundle:Statics:about.html.twig');

    }
    public function termsAction(){
        // je returne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
        return $this->render('storeBackendBundle:Statics:terms.html.twig');

    }
    public function conceptAction(){
        // je returne la vue contenue dans le dossier statics de mon bundle StoreBackendBundle
        return $this->render('storeBackendBundle:Statics:concept.html.twig');

    }


}