<?php
namespace Patterns\Delegate;

class Playlist {

    private $__songs;

    public function __construct(){
        $this->__songs = array();
    }

    public function addSong($location, $title) {
        $song = array('location'=>$location, 'title'=>$title);
        $this->__songs[] = $song;
    }

    public function getM3U(){
        $m3u = "#EXTM3U\n\n";

        foreach ($this->__songs as $song) {
            $m3u .= "#EXTINF:-1, {$song['title']}\n";
            $m3u .= "{$song['location']}\n";
        }

        return $m3u;
    }

    public function getPLS(){
        $pls = "[playlist]\n NumberOfEntries=" . count($this->__songs). "\n\n";

        foreach ($this->__songs as $songCount => $song){
            $counter = $songCount + 1;
            $pls .= "File{$songCount} = {$song['location']}\n";
            $pls .= "Title{$songCount} = {$song['title']}\n";
            $pls .= "Length{$counter} = -1\n\n";
        }

        return $pls;
    }
} 