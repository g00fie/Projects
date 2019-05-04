<?php

namespace App\Controller\API;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Swift_Mailer;
use Swift_Message;

use App\Helper\GRecaptcha;
use App\Entity\Email;

/**
 * Controller related with all API pages sending emails
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class MailController extends AbstractController{
    /**
     * Function to send email from contact form to "thepigmansuper@gmail.com"
     *
     * @Route(
     *    "/API/contact",
     *    name="contact"
     * )
     *
     * @param  Swift_Mailer $mailer Symfony Swift Mailer used to send email
     * @return JsonResponse         Returns JSON with bool parameter "success" to inform about success or failure
     */
    public function contact(Swift_Mailer $mailer, Request $request, ValidatorInterface $validator) : JsonResponse{
        $arguments = $request->request;
        if($arguments->has("recaptcha") && $arguments->has("message")){
            $gRecaptcha = new GRecaptcha($arguments->get("recaptcha"));
            if($gRecaptcha->verify() === false)
                return $this->json(["success" => false]);

            $email = new Email($arguments->get("message"), $arguments->get("name"), $arguments->get("email"));
            $errors = $validator->validate($email);
            if(count($errors) > 0)
                return $this->json(["success" => false]);

            $message = new Swift_Message("Contact Form");
            $message
                ->setFrom("maciej.bilinski.programming@gmail.com")
                ->setTo("thepigmansuper@gmail.com")
                ->setBody(
                    "From: ".$email->getFrom()."\n".$email->getMessage(),
                    "text/plain"
                )
            ;
            if($mailer->send($message))
                return $this->json(["success" => true]);
            return $this->json(["success" => false]);
        }else{
            return $this->json(["success" => false]);
        }
    }
}
?>
