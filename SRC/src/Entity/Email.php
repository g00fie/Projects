<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entity to send email
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class Email{

    /**
     * Optional sender's email
     * @var ?string
     *
     * @Assert\Email()
     * @Assert\Length(
     *  max = 180,
     * )
     */
    protected $email;

    /**
     * Optional sender's name
     * @var ?string
     *
     * @Assert\Length(
     *  max = 255,
     * )
     */
    protected $name;

    /**
     * Message
     * @var string
     */
    protected $message;

    public function __construct(string $message, ?string $name=NULL, ?string $email=NULL){
        $this
            ->setMessage($message)
            ->setName($name)
            ->setEmail($email)
        ;
    }

    /**
     * Get formatted sender
     * @return [type] [description]
     */
    public function getFrom(){
        $str = "";
        if(!is_null($this->name))
            $str = $this->name;
        if(!is_null($this->email))
            $str .= " <$this->email>";

        return $str;
    }

    /**
     * Get the value of sender's email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of sender's email
     *
     * @param ?string email
     *
     * @return self
     */
    public function setEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of sender's name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of sender's name
     *
     * @param ?string name
     *
     * @return self
     */
    public function setName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of Message
     *
     * @param string message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

}
