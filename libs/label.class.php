<?php

class Label {

    private $texto;
    private $for;

    public function __construct($for,$texto) {
        $this->texto = $texto;
        $this->for = $for;
    }

    public function criaLabel() {
        return '<label for="'.$this->for.'">'.$this->texto.'</label>';
    }
}