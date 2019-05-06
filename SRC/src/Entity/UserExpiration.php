<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserExpiration
 *
 * @ORM\Table(name="user_expiration", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_UNIQUE", columns={"user_id"}), @ORM\UniqueConstraint(name="code_UNIQUE", columns={"code"})})
 * @ORM\Entity
 */
class UserExpiration
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=6, nullable=true, options={"fixed"=true})
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="mistakes", type="integer", nullable=false)
     */
    private $mistakes = 0;
    
    public function __construct(){}
    
    public function __construct(int $userId){
        $this->userId = $userId;
        $this->generateCode();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): UserExpiration
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
    
    public static function generateCode() : string{
        return "AAAAAA";
    }

    public function getMistakes(): ?int
    {
        return $this->mistakes;
    }

    public function setMistakes(int $mistakes): self
    {
        $this->mistakes = $mistakes;

        return $this;
    }

    public function addMistake() : int{
        $this->mistakes++;
        return $this->mistakes;
    }
}
