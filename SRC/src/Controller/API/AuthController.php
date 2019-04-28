<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

use App\Entity\User;
use App\Helper\GRecaptcha;

/**
 * Controller related with all API pages involved with Auth (Register, Login etc.).
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class AuthController extends AbstractController{
    /**
     * Function used to generate Register API Page. It needs 'name, email, password, recaptcha' sent by POST method. Optional arguments are 'dateBirth' and 'phoneNumber'.
     *
     * @Route(
     *    "/API/register",
     *    name="register"
     * )
     *
     * @param  Request                      $request             HTTP Request
     * @param  UserPasswordEncoderInterface $userPasswordEncoder Interface to hash password
     * @param  EntityManagerInterface       $entityManager       Interface to use database
     * @param  ValidatorInterface           $validator           Interface to validate User
     * @return JsonResponse                                      Returns JSON response with bool parameter 'success' and if User's email is used, with bool parameter 'used_email' set to true
    */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager, ValidatorInterface $validator) : JsonResponse{
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
            $user->eraseCredentials();
            
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
