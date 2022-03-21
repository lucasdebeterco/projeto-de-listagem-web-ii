<?php
class Link {

    private $url;
    private $texto;
    private $target;
    private $class;

    public function __construct($url,$texto,$target,$class) {
        $this->url = $url;
        $this->texto = $texto;
        $this->target = $target;
        $this->class = $class;
    }

    public function getUrl() {
        return $this->url;
    }

    public function __toString() {
        return '<a href="http://'.$this->url.'" target="'.$this->target.'" class="'.$this->class.'">'.$this->texto.'</a>';
    }
}