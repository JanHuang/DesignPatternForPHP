<?php
/**
 * Created by PhpStorm.
 * ClassName: Invoker
 * User: JAN
 * Date: 14-9-22
 * Time: 上午11:30
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Concrete;

use DesignPattern\Command\Standard\CommandInterface;

class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;

    /**
     * @param \DesignPattern\Command\Standard\CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * @return \DesignPattern\Command\Standard\CommandInterface
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     *
     */
    public function execute()
    {
        return $this->command->execute();
    }
} 