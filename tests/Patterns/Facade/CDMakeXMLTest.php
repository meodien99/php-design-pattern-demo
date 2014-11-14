<?php
namespace Patterns\Facade;

use Patterns\Facade\CDMakeXML;
use Patterns\Facade\CDUppercase;
class CDMakeXMLTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var $xml \Patterns\Facade\CDMakeXML;
     */
    protected $xml;

    public function setUp(){
        $this->xml = new CDMakeXML();
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Facade\CDMakeXML', $this->xml);
    }

    public function testXMLFunctionality(){
        $cd = $this->getCDMock();
        CDUppercase::makeString($cd, 'title');
        CDUppercase::makeString($cd, 'band');
        CDUppercase::makeArray($cd, 'tracks');

//        print(CDMakeXML::create($cd));
    }

    private function getCDMock(){
        return $this->getMock('\Patterns\Facade\CD', null, ['title','band',['Hallo','Hi','Hello']]);
    }

}