<?php
namespace Patterns\Command;


class BookStarsOnCommand extends BookCommand{

    public function execute(){
        $this->bookCommandee->setStarsOn();
    }
} 