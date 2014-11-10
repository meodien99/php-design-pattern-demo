<?php
namespace Patterns\Facade;

use Patterns\Facade\CDUppercase;
class CDUppercaseTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var $cdUppercase \Patterns\Facade\CDUppercase
     */
    protected $cdUppercase;

    public function setUp(){
        $this->cdUppercase = new CDUppercase();
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Facade\CDUppercase', $this->cdUppercase);
    }

    public function testStringUpper(){
        $cd = $this->getCDMock();
        CDUppercase::makeString($cd, 'title');
        CDUppercase::makeString($cd, 'band');
        CDUppercase::makeArray($cd, 'tracks');

//        var_dump($cd);
    }

    private function getCDMock(){
        return $this->getMock('\Patterns\Facade\CD',null, array('Title','Band',['Hello', 'Hi', 'Hallo']));
    }
}