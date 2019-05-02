<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Class to generate contact form.
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class ContactType extends AbstractType{
    /**
     * Method to build a contact form.
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
                ],
            ])
            ->add("email", EmailType::class, [
                "attr" => [
                    "placeholder" => "EMAIL",
                    "placeholder" => "EMAIL",
                    "maxlength" => 180,
                ],
            ])
            ->add("message", TextareaType::class, [
                "attr" => [
                    "placeholder" => "MESSAGE",
                    "title" => "MESSAGE",
                ],
            ])
            ->add("SIGN_UP", SubmitType::class, [
                "attr" => [
                    "id" => "submitContact",
                ],
            ])
        ;
    }
}
