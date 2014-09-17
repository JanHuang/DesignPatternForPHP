<?php
/**
 * Created by PhpStorm.
 * ClassName: FordFactory
 * User: JAN
 * Date: 14-9-17
 * Time: 下午6:33
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Factory;

use DesignPattern\Factory\Standard\FactoryInterface;

class FordFactory implements FactoryInterface
{
    public function create()
    {
        return new Car();
    }
} 