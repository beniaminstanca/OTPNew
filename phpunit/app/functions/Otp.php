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
        //  if (!empty($_REQUEST['userId'])) {
        $otp = rand(100000, 999999);
        //setcookie("otpCookie", $otp, time() + 60);
        //}
        return $otp;
    }
}
