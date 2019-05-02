<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Class to generate register form.
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class RegisterType extends AbstractType{
    /**
     * Method to build a register form.
     * @param  FormBuilderInterface $builder Interface to build a form.
     * @param  array                $options @inheritdoc
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("name", TextType::class, [
                "attr" => [
                    "placeholder" => "NAME",
                    "title" => "NAME",
                    "maxlength" => 255,
                ],
                "label_attr" => [
                    "icon_class" => "fa-user",
                ],
            ])
            ->add("email", EmailType::class, [
                "attr" => [
                    "placeholder" => "EMAIL",
                    "placeholder" => "EMAIL",
                    "maxlength" => 180,
                ],
                "label_attr" => [
                    "icon_class" => "fa-envelope",
                    "error" => [
                        "id" => "usedEmail",
                        "msg" => "USED_EMAIL",
                    ],
                ],
            ])
            ->add("phoneNumber", TelType::class, [
                "attr" => [
                    "placeholder" => "USER_PHONE_NUMBER",
                    "title" => "USER_PHONE_NUMBER",
                    "maxlength" => 9,
                    "minlength" => 9,
                    "pattern" => "[0-9]{9}",
                ],
                "label_attr" => [
                    "icon_class" => "fa-phone",
                ],
                "required" => false,
            ])
            ->add("dateBirth", DateType::class, [
                "attr" => [
                    "title" => "USER_DATE_BIRTH",
                ],
                "label_attr" => [
                    "icon_class" => "fa-birthday-cake",
                ],
                "required" => false,
                "widget" => "single_text",
            ])
            ->add("password", PasswordType::class, [
                "attr" => [
                    "placeholder" => "USER_PASSWORD",
                    "title" => "USER_PASSWORD",
                    "minlength" => 7
                ],
                "label_attr" => [
                    "icon_class" => "fa-lock",
                ],
            ])
            ->add("repeatedPassword", PasswordType::class, [
                "attr" => [
                    "placeholder" => "USER_REPEATED_PASSWORD",
                    "title" => "USER_REPEATED_PASSWORD",
                    "minlength" => 7
                ],
                "label_attr" => [
                    "icon_class" => "fa-lock",
                    "error" => [
                        "id" => "incorrectPassword",
                        "msg" => "INCORRECT_PASSWORD",
                    ],
                ],
            ])
            ->add("SIGN_UP", SubmitType::class, [
                "attr" => [
                    "id" => "submitRegister",
                ],
            ])
        ;
    }
}
