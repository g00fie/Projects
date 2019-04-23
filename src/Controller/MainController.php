<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController{
    /**
    * @Route("/", name="default")
    * @Route("/index", name="index")
    * @Route("/home", name="home")
    * @Route("/start", name="start")
    * @Route("/intro", name="intro")
    */
    public function index(){
        return $this->render("starting-page.html.twig");
    }
}
?>