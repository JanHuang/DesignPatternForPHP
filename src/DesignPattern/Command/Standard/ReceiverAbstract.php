<?php
/**
 * Created by PhpStorm.
 * ClassName: ReceiverInterface
 * User: JAN
 * Date: 14-9-22
 * Time: 上午11:24
 * Link: http://blog.segmentfault.com/janhuang
 */

namespace DesignPattern\Command\Standard;

/**
 * Class ReceiverAbstract
 * @package DesignPattern\Command\Standard
 */
abstract class ReceiverAbstract implements InputInterface, OutputInterface
{
    /**
     * @var CommandParserAbstract
     */
    protected $parser;

    /**
     * @param CommandParserAbstract $commandParserAbstract
     */
    function __construct(CommandParserAbstract $commandParserAbstract)
    {
        $this->parser = $commandParserAbstract;
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->parser->getCommand();
    }

    /**
     * @return mixed
     */
    public function getArgs()
    {
        return $this->parser->getArgs();
    }
} 