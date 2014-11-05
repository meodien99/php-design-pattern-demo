<?php
use Patterns\Adapter\ErrorObject;
class ErrorObjectTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $error \Patterns\Adapter\ErrorObject
     */
    protected $error;

    public function setUp(){
        $this->error = new ErrorObject("404:Not Found");
    }

    public function testInstanceOf() {
        $this->assertInstanceOf('\Patterns\Adapter\ErrorObject', $this->error);
    }

    public function testStringReturns(){
        $string = $this->error->getError();

        $this->assertSame("404:Not Found",$string);
    }
} 