<?php
/**
 * Created by PhpStorm.
 * ClassName: Car
 * User: JAN
 * Date: 14-9-17
 * Time: 下午6:32
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Factory;

use DesignPattern\Factory\Standard\ProductInterface;

class Car implements ProductInterface
{
    public function getName()
    {
        return 'Ford';
    }
} 