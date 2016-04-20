<?php

use Dpd\Shipping\Base;

class Dpd_Shipping_BaseTest extends PHPUnit_Framework_TestCase {

    public function testBaseSetAction()
    {
        $base = new Base;
        $this->assertTrue($base->setAction('test'));
    }

}