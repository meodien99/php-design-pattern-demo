<?php

namespace Patterns\Builder;


class Product {
    protected $_type = '';
    protected $_color = '';
    protected $_size = '';

    public function setType($type){
        $this->_type = $type;
    }

    public function setColor($color){
        $this->_color = $color;
    }

    public function setSize($size){
        $this->_size = $size;
    }

    public function getType(){
        return $this->_type;
    }

    public function getSize(){
        return $this->_size;
    }

    public function getColor(){
        return $this->_color;
    }
} 