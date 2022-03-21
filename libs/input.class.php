<?php
class Input {

    private $sType;
    private $sClass;
    private $sId;
    private $sPlaceholder;
    
    public function __construct($sType, $sClass, $sId, $sPlaceholder) {
        $this->sType = $sType;
        $this->sClass = $sClass;
        $this->sId = $sId;
        $this->sPlaceholder = $sPlaceholder;
    }

    public function __toString() {
        return '<input type="'.$this->sType.'" class="'.$this->sClass.'" id="'.$this->sId.'" placeholder="'.$this->sPlaceholder.'">';
    }
 }