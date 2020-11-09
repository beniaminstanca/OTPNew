<?php


class OtpTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function that_we_get_an_otp_string()
    {
        $otp = new \App\functions\Otp;

        $this->assertEquals(strlen($otp->GenerateOtp()), '6');
    }
}
