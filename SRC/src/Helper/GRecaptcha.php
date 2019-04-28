<?php

namespace App\Helper;

/**
 * Class to help with verify Google Recaptcha v2 Invisible.
 * @author Maciej Biliński <thepigmansuper@gmail.com>
 */
class GRecaptcha{
    /**
     * It's a secret key from Google. No one should know it.
     * @var String
     */
    private const secretKey = "6LeZ9p8UAAAAAGGwkAptewMAwjIQ42s1CUft3ubh";

    /**
     * It's a response from Google when user submit the form. It is needed to verify.
     * @var String
     */
    public $response;

    /**
     * Public constructor to prepare class to verify form
     * @param string $response @see GRecaptcha::$response
     */
    public function __construct(String $response){
        $this->response = $response;
    }

    /**
     * Public function which use curl to get JSON from Google to verify form.
     * @return bool
     */
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
