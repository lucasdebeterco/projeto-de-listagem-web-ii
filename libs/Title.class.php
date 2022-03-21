<?php

class Title {
    
    private $text;

    public function __construct($pText) {
        $this->text = $pText;
    }
    
    public function __toString() {
        return "<title>{$this->text}</title>\n";
    }

}