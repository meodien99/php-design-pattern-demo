<?php
namespace Patterns\Adapter;
class ErrorObject {

    private $_error;

    public function __construct($error) {
        $this->_error = $error;
    }

    public function getError(){
        return $this->_error;
    }
} 