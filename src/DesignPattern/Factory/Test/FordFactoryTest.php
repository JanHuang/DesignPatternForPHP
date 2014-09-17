<?php
/**
 * Created by PhpStorm.
 * ClassName: FordFactoryTest
 * User: JAN
 * Date: 14-9-17
 * Time: 下午7:10
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Factory\Test;

use DesignPattern\Factory\Concrete\FordFactory;

class FordFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCarInstanceOfProduct()
    {
        $fordFactory = new FordFactory();
        $product = $fordFactory->create();
        $this->assertInstanceOf('DesignPattern\\Factory\\Standard\\ProductInterface', $product);
    }
}
 