<?php
use Patterns\Adapter\LogToCSVAdapter;

class LogToCSVAdapterTest extends PHPUnit_Framework_TestCase{
    /**
     * @var $adapter \
     */
    protected $adapter;

    const ERROR_LOG_STRING = "404:Not Found";

    public function setUp(){
        $this->adapter = new LogToCSVAdapter(self::ERROR_LOG_STRING);
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Adapter\LogToCSVAdapter', $this->adapter);

        $this->assertInstanceOf('\Patterns\Adapter\ErrorObject', $this->adapter);
    }

    public function testOutput(){
        $this->assertSame('404',$this->adapter->getErrorNumber());

        $this->assertSame('Not Found', $this->adapter->getErrorText());
    }

} 