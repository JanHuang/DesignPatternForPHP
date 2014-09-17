<?php
/**
 * Created by PhpStorm.
 * ClassName: FactoryTest
 * User: JAN
 * Date: 14-9-17
 * Time: 下午5:55
 * Link: http://www.usource.cn
 */

namespace DesignPattern\Factory\Test;

use DesignPattern\Factory\FordFactory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCar()
    {
        $fordFactory = new FordFactory();
        $this->assertInstanceOf('ProductInterface', $fordFactory->create());
    }
} 