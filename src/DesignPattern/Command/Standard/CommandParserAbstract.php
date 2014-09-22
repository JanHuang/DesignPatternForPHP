<?php
/**
 * Created by PhpStorm.
 * ClassName: CommandParserAbstract
 * User: JAN
 * Date: 14-9-22
 * Time: 下午12:18
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Standard;

/**
 * Class CommandParserAbstract
 * @package DesignPattern\Command\Standard
 */
abstract class CommandParserAbstract
{
    /**
     * @var
     */
    protected $command;

    /**
     * @var
     */
    protected $args;

    /**
     * @param $command
     */
    function __construct($command)
    {
        $this->command = $command;
    }

    /**
     * @param mixed $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param mixed $args
     */
    public function setArgs($args)
    {
        $this->args = $args;
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->args;
    }
} 