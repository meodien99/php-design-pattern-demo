<?php
use Patterns\Decoration\CDTrackListDecoratorCaps;
use Patterns\Decoration\CD;
class CDTrackListDecoratorCapsTest extends PHPUnit_Framework_TestCase{

    /**
     * @var $decorator \Patterns\Decoration\CDTrackListDecoratorCaps
     */
    protected $decorator;

    protected $tracksFromExternalSource = array('What It means', 'Brr', 'Goodbye');

    /**
     * @var $cd \Patterns\Decoration\CD;
     */
    protected $cd;

    public function testCapsFunctionality(){
        $this->cd = new CD();
        foreach($this->tracksFromExternalSource as $track) {
            $this->cd->addTrack($track);
        }

        $this->decorator = new CDTrackListDecoratorCaps($this->cd);
        $this->decorator->makeCaps();

//        print($this->cd->getTrackList());
    }

} 