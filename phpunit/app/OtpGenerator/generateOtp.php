<?php
//require_once('../functions/Otp.php');
require_once('../functions/functions.php');

if (!empty($_REQUEST['userId'])) {

    //  $otp = new App\functions\Otp;

    //$OtpPass = $otp->GenerateOtp();
    $OtpPass = GenerateOtp();

    setcookie("otpCookie", $OtpPass, time() + 120);
}
header('Location: verifyOtp.php?&userId=' . $_REQUEST['userId']);
