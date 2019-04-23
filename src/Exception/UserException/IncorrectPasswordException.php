<?php

namespace App\Exception\UserException;

class IncorrectPasswordException extends UserException{
    public function __construct(){
        parent::__construct("IncorrectPasswordException");
    }
}
