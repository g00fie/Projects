<?php

namespace App\Helper;

class GRecaptcha{
    private const secretKey = "6LeZ9p8UAAAAAGGwkAptewMAwjIQ42s1CUft3ubh";

    protected $response;

    public function __construct(string $response){
        $this->response = $response;
    }

    public function verify(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=".GRecaptcha::secretKey."&response=".$this->response);
        $output = curl_exec($ch);
        $json = json_decode($output, true);
        curl_close($ch);

        return $json["success"];
    }
}
