<?php
use Patterns\Adapter\LogToConsole;
class LogToConsoleTest extends PHPUnit_Framework_TestCase {

    /**
     * @var $logger \Patterns\Adapter\LogToConsole
     */
    protected $logger;

    const EXPECT_STRING_ERROR = '404:Not Found';

    public function setUp(){
        $error = $this->getErrorObjectMock();
        $this->logger = new LogToConsole($error);

    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Adapter\LogToConsole', $this->logger);
    }

    public function testMockIsInstanceOfErrorObject(){
        $error = $this->getErrorObjectMock();
        $this->assertInstanceOf('\Patterns\Adapter\ErrorObject', $error);
    }

    public function testMockReturns(){
        $error = $this->getErrorObjectMock();
        $string = $error->getError();
        $this->assertSame(self::EXPECT_STRING_ERROR, $string);
    }

    public function testWrite(){
        $this->logger->write();


    }

    public function getErrorObjectMock(){
        return $mock = $this->getMock('\Patterns\Adapter\ErrorObject', null, array(self::EXPECT_STRING_ERROR));
    }
} 