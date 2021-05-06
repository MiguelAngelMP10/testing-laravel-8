<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $result =  Email::validate('mmunozpozos@gmail.com');
        $this->assertTrue($result);
        $result =  Email::validate('mmunozpozos@@gmail.com');
        $this->assertFalse($result);
    }
}