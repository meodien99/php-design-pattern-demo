<?php
namespace Patterns\Decoration;

class CDTrackListDecoratorCaps {
    private $__cd;

    public function __construct(CD $cd){
        $this->__cd = $cd;
    }

    public function makeCaps() {
        foreach( $this->__cd->trackList as &$track) {
            $track = strtoupper($track);
        }
    }
} 