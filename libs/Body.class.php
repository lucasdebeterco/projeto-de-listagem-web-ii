<?php
class Body {

    private $class;
    private $aListElement = array();
    
    public function __construct($sClass) {
        $this->class = $sClass;
    }

    public function addElement($sElement) {
        $this->aListElement[] = $sElement;
    }

    public function __toString(){
        $sBody = "<body class=\"{$this->class}\">\n";
        foreach ($this->aListElement as $sItemListElement) {
            $sBody .= $sItemListElement;
        }
        $sBody .= "</body>\n";
        return $sBody;
    }
}