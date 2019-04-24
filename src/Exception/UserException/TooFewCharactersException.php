<?php

namespace App\Exception\UserException;

class TooFewCharactersException extends UserException{
    public function __construct(){
        parent::__construct("TOO_FEW_CHARACTERS");
    }
}
