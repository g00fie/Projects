<?php
// src/Controller/API/AuthController.php

namespace App\Controller\API;

use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

use App\Entity\User;
use App\Exception\UserException\UserException;
use App\Helper\GRecaptcha;

class AuthController extends AbstractController{
    /**
    * @Route(
    *    "/API/register",
    *    name="register"
    * )
    */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager){
        $arguments = $request->request;
        if($arguments->has("name") && $arguments->has("email") && $arguments->has("password") && $arguments->has("recaptcha")){
            $gRecaptcha = new GRecaptcha($arguments->get("recaptcha"));
            if($gRecaptcha->verify() === false)
                return $this->json(["success" => false]);

            $user = new User();
            try{
                $user->setName($arguments->get("name"));
                $user->setEmail($arguments->get("email"));
                $user->setPassword($arguments->get("password"), $userPasswordEncoder);
                $user->setDateBirthByString($arguments->has("dateBirth") ? $arguments->get("dateBirth") : NULL);
                $user->setPhoneNumber($arguments->has("phoneNumber") ? $arguments->get("phoneNumber") : NULL);

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->json(["success", true]);
            }catch(UserException $e){
                return $this->json(["success" => false]);
            }catch(UniqueConstraintViolationException $e){
                return $this->json(["success" => false, "used_email" => true]);
            }
        }else{
            return $this->json(["success" => false]);
        }
    }
}
?>
