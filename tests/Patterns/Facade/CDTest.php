<?php
namespace Patterns\Facade;
use Patterns\Facade\CD;
class CDTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var $cd \Patterns\Facade\CD
     */
    protected $cd;

    public function setUp(){
        $this->cd = new CD("Title", "Band", ['What it means', 'Brrr', 'Goodbye'] );
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Facade\CD', $this->cd);

//        var_dump($this->cd);
    }
}