<?php
// l'endroit ou je me déclare ma classe MainController
namespace store\BackendBundle\Controller;
// j'inclus la classe controller de symphony pour pouvoir hériter de cette classe
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package store\BackendBundle\Controller
 */
class MainController extends Controller{

    /**
     * Dashbord on backend
     */
    public function indexAction()
    {
        return $this->render('storeBackendBundle:Main:index.html.twig');
    }
}