<?php
use Patterns\Decoration\CD;
class CDTest extends PHPUnit_Framework_TestCase {

    /**
     * @var $cd \Patterns\Decoration\CD
     */
    protected $cd;

    protected $tracksFromExternalSource = array('What It means', 'Brr', 'Goodbye');

    public function setUp() {
        $this->cd = new CD();
    }

    public function testOutputTracks(){

        foreach ($this->tracksFromExternalSource as $track) {
            $this->cd->addTrack($track);
        }

//        print($this->cd->getTrackList());
        $this->assertEquals("1) What It means. 2) Brr. 3) Goodbye.", trim($this->cd->getTrackList()));
    }
} 