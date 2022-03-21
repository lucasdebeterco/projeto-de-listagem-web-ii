<?php

class audio {
    
    private $sources   = [];
    private $atributos = [];
    private $styles    = [];
    private $width;
    private $height;

    public function __construct($iWidth, $iHeight){
        $this->width  = $iWidth;
        $this->height = $iHeight;
    }

    public function addSource($sSrc, $sType){
        $this->sources[] = '<source src="'.$sSrc.'" type="'.$sType.'">';
    }

    public function setStyle($sAtributo, $sValor){
        $this->styles[] = $sAtributo . ":". $sValor;
    }

    public function addAtributo($atributo){
        $this->atributos[] = $atributo;
    }

    public function getStyles(){
        $sString = '';
        foreach($this->styles as $style){
            $sString .= $style.';';
        }
        return $sString;
    }

    public function getSources(){
        $sString = '';
        foreach($this->sources as $source){
            $sString .= $source;    
        }
        return $sString;
    }

    public function getAtributos(){
        $sString = '';
        foreach($this->atributos as $atributo){
            $sString .= $atributo .' ';
        }
        return $sString;
    }

    public function __toString(){
        $sString = '<audio width="%s" height="%s" style="%s" %s > $s </audio>';
        return sprintf($sString, $this->width, $this->height, $this->getStyles(), $this->getAtributos(), $this->getSources());
    }
}