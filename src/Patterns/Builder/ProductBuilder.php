<?php

namespace Patterns\Builder;


class ProductBuilder {

    protected $_product = null;
    protected $_configs = array();

    public function __construct($configs){
        $this->_product = new Product();
        $this->_configs = $configs;
    }

    public function build(){
        foreach($this->_configs as $type => $value) {
            $this->_product->{'set'.ucfirst($type)}($value);
        }
    }

    public function getProduct(){
        return $this->_product;
    }
} 