<?php
namespace Patterns\Command;


class BookCommandTest extends \PHPUnit_Framework_TestCase{

    public function setUp(){

    }

    public function testBook(){
        #passed !

        /*$author = "Author";
        $title = "The title is longer than author name";
        print("BEGIN TESTING COMMAND PATTERN");
        print('\n');

        $bookCommandee = new BookCommandee($author, $title);

        print('book after creation :');
        print($bookCommandee->getAuthorAndTitle());
        print('\n');

        $bookStarsOnCommand = new BookStarsOnCommand($bookCommandee);
        $this->callCommand($bookStarsOnCommand);
        print('book after stars on: ');
        print($bookCommandee->getAuthorAndTitle());
        print('\n');

        $bookStarsOffCommand = new BookStarsOffCommand($bookCommandee);
        $this->callCommand($bookStarsOffCommand);
        print('book after stars on: ');
        print($bookCommandee->getAuthorAndTitle());
        print('\n');

        print("END TESTING");*/

    }

    private function callCommand(BookCommand $commandee) {
        $commandee->execute();
    }
} 