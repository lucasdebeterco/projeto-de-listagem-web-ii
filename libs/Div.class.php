<?php

class Div {
    
    private $class;
    private $aListElement = array();
    
    public function addElement($sElement) {
        $this->aListElement[] = $sElement;
    }

    public function __construct($pClass) {
        $this->class = $pClass;
    }
    
    public function __toString() {
        $div = "<div class=\"{$this->class}\">\n";
        foreach ($this->aListElement as $sItemListElement) {
            $div .= $sItemListElement;
        }
        $div .= "</div>\n";
        return $div;
    }
    
}