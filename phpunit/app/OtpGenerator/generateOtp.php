<?php
require_once('../functions/Otp.php');

if (!empty($_REQUEST['userId'])) {

    $otp = new App\functions\Otp;

    $OtpPass = $otp->GenerateOtp();

    setcookie("otpCookie", $OtpPass, time() + 60);
}
header('Location: verifyOtp.php?&userId=' . $_REQUEST['userId']);
