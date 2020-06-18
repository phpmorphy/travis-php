<?php

use Demo\Demo;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testTestMe()
    {
        $demo = new Demo();
        $this->assertEquals(3, $demo->testMe(1, 2));
    }
}
