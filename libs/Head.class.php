<?php

class Head {
    private $aListElement = array();
    
    public function addElement($sElement) {
        $this->aListElement[] = $sElement;
    }

    public function __toString(){
        $sHead = "<head>\n";
        foreach ($this->aListElement as $sItemListElement) {
            $sHead .= $sItemListElement;
        }
        $sHead .= "</head>\n";
        return $sHead;
    }
}