<?php

namespace App\Exception\UserException;

class UserException extends \Exception{
    public function __construct($message="USER_EXCEPTION"){
        parent::__construct($message);
    }
}
