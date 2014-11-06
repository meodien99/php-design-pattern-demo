<?php
use \Patterns\Builder\ProductBuilder;
class ProductBuilderTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $builder \Patterns\Builder\ProductBuilder
     */
    protected $builder;

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
        $this->product = $this->getProductMock();

        foreach($this->productConfigs as $type => $value) {
            $this->product->{'set'.ucfirst($type)}($value);
        }

        $this->builder = new ProductBuilder($this->productConfigs);
    }

    public function testInstanceOf(){
        $this->assertInstanceOf('\Patterns\Builder\ProductBuilder', $this->builder);
        $this->assertInstanceOf('\Patterns\Builder\Product', $this->product);
    }

    public function testBuilderFunctionality(){
        $this->builder->build();
        $product = $this->builder->getProduct();

        //var_dump($product);
        //$this->assertEquals($this->product, $product);
    }

    private function getProductMock(){
        return $this->getMock('\Patterns\Builder\Product');
    }
} 