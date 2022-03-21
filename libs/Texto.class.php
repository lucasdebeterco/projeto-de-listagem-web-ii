<?php

class Texto {
    
    private $text;

    public function __construct($pText) {
        $this->text = $pText;
    }
    
    public function __toString() {
        return "{$this->text}";
    }

}