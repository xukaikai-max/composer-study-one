<?php

namespace Xukai\Pro01\test;

use PHPUnit\Framework\TestCase;
use Xukai\Pro01\code\Hello;

class HelloTest extends TestCase
{
    public function testEchoNumber()
    {
        $obj = new Hello();
        $this->assertTrue(is_numeric($obj->echoNumber()));
    }
}
