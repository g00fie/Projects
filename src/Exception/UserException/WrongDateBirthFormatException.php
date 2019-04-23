<?php

namespace App\Exception\UserException;

class WrongDateBirthFormatException extends UserException{
    public function __construct(){
        parent::__construct("WrongDateBirthFormatException");
    }
}
