<?php
namespace Patterns\Facade;


class CD {
    public $tracks = [];
    public $band = '';
    public $title = '';

    public function __construct($title, $band, $tracks) {
        $this->title = $title;
        $this->band = $band;
        $this->tracks = $tracks;
    }



} 