<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\User;
use App\Form\RegisterType;

class MainController extends AbstractController{
    /**
    * @Route(
    *    "/{_locale}/",
    *    requirements={"_locale": "pl|en"},
    *    name="main-page"
    * )
    *
    * @Route(
    *    "/",
    *    name="main-page-default-locale"
    * )
    *
    * @Route(
    *    "/{_locale}/home",
    *    requirements={"_locale": "pl|en"},
    *    name="home"
    * )
    *
    * @Route(
    *    "/home",
    *    name="home-default-locale"
    * )
    */
    public function index(){
        $form = $this->createForm(RegisterType::class);

        return $this->render("starting-page.html.twig", [
            "register" => $form->createView()
        ]);
    }
}
?>
