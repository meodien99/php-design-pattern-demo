<?php

use Patterns\Builder\Product;
class ProductTest extends PHPUnit_Framework_TestCase {

    /**
     * @var $product \Patterns\Builder\Product
     */
    protected $product;

    protected $productConfigs = array(
        'type' => 'shirt',
        'size' => 'XL',
        'color' => 'red'
    );

    public function setUp(){
        $this->product = new Product();
    }

    public function testInitProductConfiguration(){
        foreach($this->productConfigs as $key => $value) {
            $this->product->{'set'.ucfirst($key)}($value);
        }

        $tmp = array(
            'type' => $this->product->getType(),
            'size' => $this->product->getSize(),
            'color' => $this->product->getColor()
        );
        $this->assertSame($tmp,$this->productConfigs);
        $this->assertSameSize($tmp,$this->productConfigs);
    }
}