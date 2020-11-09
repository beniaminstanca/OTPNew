<?php

namespace App\functions;

class Otp
{

    public $otp;

    public function __construct()
    {
        //
    }
    public function GenerateOtp()
    {
        $otp = "";
        $otp = rand(100000, 999999);
        return $otp;
    }
}
