<?php
/**
 * Created by PhpStorm.
 * ClassName: HelloWorldReceiver
 * User: JAN
 * Date: 14-9-22
 * Time: 上午11:25
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Concrete;

use DesignPattern\Command\Standard\ReceiverAbstract;

class HelloWorldReceiver extends ReceiverAbstract
{
    public function output($message)
    {
        echo $message;
    }

    public function input($message)
    {}
}