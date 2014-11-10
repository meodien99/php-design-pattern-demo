<?php
use Patterns\Delegate\Playlist;
class PlaylistTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $playlist \Patterns\Delegate\Playlist
     */
    protected $playlist;

    public function setUp(){
        $this->playlist = new Playlist();
    }

    public function testOriginalFunctionality(){
        $this->playlist->addSong('Hello', 'Brr');
        $this->playlist->addSong('Goodbye', 'Bye');

        //var_dump($this->playlist->getM3U());
        //print "\n";
        //var_dump($this->playlist->getPLS());
    }
} 