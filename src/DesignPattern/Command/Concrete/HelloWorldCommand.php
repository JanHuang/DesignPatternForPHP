<?php
/**
 * Created by PhpStorm.
 * ClassName: HelloWorldCommand
 * User: JAN
 * Date: 14-9-22
 * Time: 上午11:25
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Concrete;

use DesignPattern\Command\Standard\CommandInterface;
use DesignPattern\Command\Standard\ReceiverAbstract;

/**
 * Class HelloWorldCommand
 * @package DesignPattern\Command\Concrete
 */
class HelloWorldCommand implements CommandInterface
{
    /**
     * @var ReceiverAbstract
     */
    protected $receiver;

    /**
     * @param ReceiverAbstract $receiverInterface
     */
    function __construct(ReceiverAbstract $receiverInterface)
    {
        $this->receiver = $receiverInterface;
    }

    public function execute()
    {
        $this->receiver->output($this->receiver->getCommand());
    }
} 