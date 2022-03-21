<?php

class Form {

    private $aLista = array();
    private $sAction;
    private $sMethod;
    private $sClass;

    public function __construct($sAction, $sMethod, $sClass) {
        $this->sAction = $sAction;
        $this->sMethod = $sMethod;
        $this->sClass = $sClass;
    }

    public function addForm($sAtributo) {
        $this->aLista[] = $sAtributo;
    }

    public function __toString() {
        $sForm = '<form action="'.$this->sAction.'" method="'.$this->sMethod.'" class="'.$this->sClass.'">';
        foreach ($this->aLista as $sItemLista) {
            $sForm .= $sItemLista;
        }
        $sForm .= '</form>';
        return $sForm;
    }
}