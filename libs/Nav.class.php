<?php

class Nav {

    private $aList = array();
    private $class;
    private $id;
    
    public function __construct($class,$id) {
        $this->setNav($class, $id);
    }
    
    public function setNav($class, $id){
        $this->class = $class;
        $this->id = $id;
    }

    public function addElementNav($sElement) {
        $this->aList[] = $sElement;
    }
    public function getNav(){
        $sScript = '<nav id='.$this->id.' class='.$this->class.'>';
        foreach ($this->aList as $sItemListElement) {
            $sScript .= $sItemListElement;
        }
        $sScript .= '</nav>';
        return $sScript;
    }
}