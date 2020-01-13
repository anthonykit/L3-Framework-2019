<?php
namespace App\Entity;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
class Users
{
    /**
     * @var string
     * @Assert\NotBlank
     */
    private $UserName;
    private $password;


    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName): void
    {
        $this->UserName = $UserName;
    }


}