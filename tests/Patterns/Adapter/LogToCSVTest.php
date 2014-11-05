<?php
use Patterns\Adapter\LogToCSV;
class LogToCSVTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $log \Patterns\Adapter\LogToCSV
     */
    protected $log;

    /**
     * @var $mock \Patterns\Adapter\LogToCSVAdapter
     */
    private $mock;
    const ERROR_STRING = "404:Not found";

    public function setUp(){
        $this->mock = $this->getErrorObjectAdapterMock();
        $this->log = new LogToCSV($this->mock);
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Adapter\LogToCSV', $this->log);
    }

    public function testOutput(){
        $this->assertInstanceOf('\Patterns\Adapter\LogToCSVAdapter', $this->mock);

        if(file_exists(LogToCSV::CSV_LOCATION)){
            unlink(LogToCSV::CSV_LOCATION);
        }

        $this->log->write();

        $this->assertFileExists(LogToCSV::CSV_LOCATION);
    }

    private function getErrorObjectAdapterMock(){
        return $this->getMock('\Patterns\Adapter\LogToCSVAdapter', null, array(self::ERROR_STRING));
    }
}