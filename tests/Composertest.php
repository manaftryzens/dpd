<?php

use Test\Composer\Base;

class Test_Composer_BaseTest extends PHPUnit_Framework_TestCase {

    public function testBaseSetAction()
    {
        $base = new Base;
        $this->assertTrue($base->setAction('test'));
    }

}