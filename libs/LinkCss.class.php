<?php
class LinkCss {

    private $url;
    private $rel;
    private $integrity;
    private $crossorigin;

    public function __construct($pUrl, $pRel, $pIntegrity, $pCrossorigin) {
        $this->url        = $pUrl;
        $this->rel        = $pRel;
        $this->integrity  = $pIntegrity;
        $this->crossorigin = $pCrossorigin;
    }

    public function __toString() {
        return '<link href="'.$this->url.'" rel="'.$this->rel.'" integrity="'.$this->integrity.'" crossorigin="'.$this->crossorigin.'">'."\n";
    }
}