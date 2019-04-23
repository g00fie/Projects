<?php

namespace App\Exception\UserException;

class WrongEmailValidationException extends UserException{
    public function __construct(){
        parent::__construct("WrongEmailValidationException");
    }
}