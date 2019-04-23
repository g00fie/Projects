<?php

namespace App\Exception\UserException;

class WrongPhoneNumberFormatException extends UserException{
    public function __construct(){
        parent::__construct("WrongPhoneNumberFormatException");
    }
}
