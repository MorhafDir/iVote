<?php

class Verkiezing {
    private $verkiezingsID;
    private $naam;
    private $startDatum;
    private $eindDatum;

    public function __construct($verkiezingsID, $naam, $startDatum, $eindDatum) {
        $this->verkiezingsID = $verkiezingsID;
        $this->naam = $naam;
        $this->startDatum = $startDatum;
        $this->eindDatum = $eindDatum;
    }

    public function startVerkiezing() {
        echo "Verkiezing is gestart!";
    }

    public function eindigVerkiezing() {
        echo "Verkiezing is beëindigd!";
    }

    public function getStartDatum() {
        return $this->startDatum;
    }

    public function getEindDatum() {
        return $this->eindDatum;
    }
}

?>
