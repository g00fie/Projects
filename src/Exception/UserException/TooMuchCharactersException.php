<?php

namespace App\Exception\UserException;

class TooMuchCharactersException extends UserException{
    public function __construct(){
        parent::__construct("TOO_MUCH_CHARACTERS");
    }
}
