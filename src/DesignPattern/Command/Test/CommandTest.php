<?php
/**
 * Created by PhpStorm.
 * ClassName: CommandTest
 * User: JAN
 * Date: 14-9-22
 * Time: 下午12:03
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Test;

use DesignPattern\Command\Concrete\CommandParser;
use DesignPattern\Command\Concrete\HelloWorldCommand;
use DesignPattern\Command\Concrete\HelloWorldReceiver;
use DesignPattern\Command\Concrete\Invoker;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    protected $invoker;

    protected $receiver;

    protected function setUp()
    {
        $this->invoker = new Invoker();
        $this->receiver = new HelloWorldReceiver(new CommandParser('hello --help'));
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloWorldCommand($this->receiver));
        $this->invoker->execute();
    }
} 