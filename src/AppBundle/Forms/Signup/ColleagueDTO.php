<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10/30/17
 * Time: 8:36 AM
 */

namespace AppBundle\Forms\Signup;


class ColleagueDTO
{
    public $hpr;
    public $name;
    public $email;
    public $userId;
    public $createdAt;

    public function __construct(int $hpr = 0,string $name = "",string $email = "",int $userId = 0)
    {
        $this->hpr = $hpr;
        $this->name = $name;
        $this->email = $email;
        $this->userId = $userId;
        $this->createdAt = new \DateTime();
    }
}