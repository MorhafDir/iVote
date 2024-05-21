<?php

require_once '../model/Verkiezing.php';
class VerkiezingController {
    private $verkiezing;

    public function __construct($verkiezing) {
        $this->verkiezing = $verkiezing;
    }

    public function startVerkiezing() {
        $this->verkiezing->startVerkiezing();
    }

    public function eindigVerkiezing() {
        $this->verkiezing->eindigVerkiezing();
    }
}

?>
