<?php

class OtpTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function that_we_get_an_otp()
    {
        include 'App/functions/functions.php';
        $this->assertNotEmpty(GenerateOtp());
    }

    /** @test */
    public function that_we_get_an_userId()
    {
        $otp = new \App\functions\Otp;

        $this->assertEquals(strlen($otp->GenerateOtp()), '6');
    }
}
