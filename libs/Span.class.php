<?php

class Span implements InterfaceTag {
    
    private $span;
    private $styleCompleto;
    private $arrayStyle = [];
    
    function getStyleCompleto() {
        return $this->styleCompleto;
    }
    
    private function getArrayStyle() {
        return $this->arrayStyle;
    }
    
    public function getSpan() {
        $sStyle = '';
        if(count($this->getArrayStyle())) {
            foreach($this->getArrayStyle() as $oEstilo) {
                $sStyle .= "{$oEstilo['atributo']}: {$oEstilo['valor']};";
            }
            
            $this->setStyleCompleto($sStyle);
            $this->span = array_map([$this, 'setStyleSpan'], $this->span);
        }
        
        return implode('<br>', $this->span);
    }
    
    /**
     * {@inheritdoc}
     */
    public function setStyle($atributo, $valor) {
        $this->arrayStyle[] = ['atributo' => $atributo, 'valor' => $valor];
    }

    function setStyleCompleto($styleCompleto) {
        $this->styleCompleto = $styleCompleto;
    }
    
    public function setSpan($span) {
        $this->span[] = "<span style='%style' >{$span}</span>";
    }
    
    private function setStyleSpan($array) {
        $array = str_replace('%style', $this->getStyleCompleto(), $array);
        return $array;
    }

    public function __toString() {
        return $this->getSpan();
    }
    
}