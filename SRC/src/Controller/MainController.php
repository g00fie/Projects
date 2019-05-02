<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Form\RegisterType;
use App\Form\ContactType;

/**
 * Main controller to render starting page.
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class MainController extends AbstractController{
    /**
    * Controller to render starting page for unlogged users.
    *
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
    *
    * @return Response Returns rendered by twig strating page.
    */
    public function index() : Response{
        $registerForm = $this->createForm(RegisterType::class);
        $contactForm = $this->createForm(ContactType::class);

        return $this->render("starting-page.html.twig", [
            "register" => $registerForm->createView(),
            "contact" => $contactForm->createView(),
        ]);
    }
}
?>
