<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10/30/17
 * Time: 8:42 AM
 */

namespace AppBundle\Forms\Signup;

class RegisterColleagueDTO
{
    public $colleagues;

    public function __construct($colleagues)
    {
        $this->colleagues = $colleagues;
    }
}