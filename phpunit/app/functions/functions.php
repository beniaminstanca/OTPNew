<?php

function GenerateOtp()
{
    $otp = "";
    $otp = rand(100000, 999999);
    return $otp;
}
