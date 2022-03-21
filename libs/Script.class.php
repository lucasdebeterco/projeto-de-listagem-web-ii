<?php

class Script{

    private $aList = array();
    private $type;
    
    public function __construct($type) {
        $this->setScript($type);
    }
    
    public function setScript($type){
        $this->type = $type;
    }

    public function addElementScript($sElement) {
        $this->aList[] = $sElement;
    }
    public function getScript(){
        $sScript = '<script type='.$this->type.'>';
        foreach ($this->aList as $sItemListElement) {
            $sScript .= $sItemListElement;
        }
        $sScript .= '</script>';
        return $sScript;
    }
}