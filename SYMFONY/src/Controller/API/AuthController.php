<?php
// src/Controller/API/AuthController.php

namespace App\Controller\API;

use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager, ValidatorInterface $validator){
        $arguments = $request->request;
        if($arguments->has("name") && $arguments->has("email") && $arguments->has("password") && $arguments->has("recaptcha")){
            $gRecaptcha = new GRecaptcha($arguments->get("recaptcha"));
            if($gRecaptcha->verify() === false)
                return $this->json(["success" => false]);

            $user = new User($userPasswordEncoder, $arguments->get("name"), $arguments->get("email"), $arguments->get("password"));
            if($arguments->has("dateBirth"))
                $user->setDateBirth($arguments->get("dateBirth"));
            if($arguments->has("phoneNumber"))
                $user->setPhoneNumber($arguments->get("phoneNumber"));

            $errors = $validator->validate($user);
            if(count($errors) > 0)
                return $this->json(["success" => false]);

            try{
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->json(["success" => true]);
            }catch(UniqueConstraintViolationException $e){
                return $this->json(["success" => false, "used_email" => true]);
            }
        }else{
            return $this->json(["success" => false]);
        }
    }
}
?>
