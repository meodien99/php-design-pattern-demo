<?php
namespace Patterns\Delegate;


class NewPlaylist {
    private $__songs;
    private $__typeObject;

    public function __construct($type) {
        $this->__songs = array();
        $object = "{$type}Playlist";
        $this->__typeObject = new $object;
    }

    public function addSong($location, $title) {
        $song = array('location' => $location, 'title' => $title);
        $this->__songs[] = $song;
    }

    public function getPlaylist(){
        $playlist = $this->__typeObject->getPlaylist($this->__songs);

        return $playlist;
    }
} 