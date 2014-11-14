<?php
namespace Patterns\Command;


abstract class BookCommand {

    protected $bookCommandee;

    function __construct(BookCommandee $bookCommandee){
        $this->bookCommandee = $bookCommandee;
    }

    abstract function execute();
} 