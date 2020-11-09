<?php
$msg = "";
if ($_REQUEST['otpPassword'] == $_COOKIE["otpCookie"]) {
    $msg = "Welcome";
} else
    $msg = "Your password has expired!";

echo $msg;
