<?php
// src/Controller/API/AuthController.php

namespace App\Controller\API;

use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\User;
use App\Exception\UserException\UserException;

class AuthController extends AbstractController{
    /**
    * @Route(
    *    "/API/register",
    *    name="register"
    * )
    */
    public function register(Request $request, TranslatorInterface $translator, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager){
        $arguments = $request->query;
        if($arguments->has("name") && $arguments->has("email") && $arguments->has("password") && $arguments->has("repeatedPassword") && $arguments->has("dateBirth") && $arguments->has("phoneNumber")){
            $user = new User();
            try{
                $user->setName($arguments->get("name"));
                $user->setEmail($arguments->get("email"));
                $user->setPassword($arguments->get("password"), $userPasswordEncoder, $arguments->get("repeatedPassword"));
                $user->setDateBirthByString($arguments->get("dateBirth"));
                $user->setPhoneNumber($arguments->get("phoneNumber"));

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->json(["msg" => $user->getId()]);
            }catch(UserException $e){
                return $this->json(["msg" => $e->getMessage()]);
            }
        }else{
            return $this->json(["msg" => "TooFewArguments"]);
        }
    }
}
?>
