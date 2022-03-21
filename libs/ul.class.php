<?php

class Ul {
    
    private $aLista = array();
    private $sClass;

    public function __construct($sClass) {
        $this->sClass = $sClass;
    }

    public function addElement(...$sAtributo) {
        $this->aLista = array_merge($this->aLista, $sAtributo);
    }

    public function __toString() {
        $sUl = '<ul class="'.$this->sClass.'">';
        foreach ($this->aLista as $sItemLista) {
            $sUl .= $sItemLista;
        }
        $sUl .= "</ul>\n";
        return $sUl;
    }
}
