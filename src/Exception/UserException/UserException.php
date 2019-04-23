<?php

namespace App\Exception\UserException;

class UserException extends \Exception{
    public function __construct($message="UserException"){
        parent::__construct($message);
    }
}
