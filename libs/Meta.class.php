<?php
class Meta {
    
    private $charset;
    private $httpEquiv;
    private $content;
    private $name;
    
    public function __construct($pCharset, $pName=null, $pHttpEquiv=null, $pContent=null) {
        $this->charset = $pCharset;
        $this->httpEquiv = $pHttpEquiv;
        $this->content = $pContent;
        $this->name = $pName;

    }
    
    public function __toString() {
        $tag = "<meta";
        (isset($this->charset))?$tag.=" charset=\"{$this->charset}\"":"";
        (isset($this->httpEquiv))?$tag.=" http-equiv=\"{$this->httpEquiv}\"":"";
        (isset($this->content))?$tag.=" content=\"{$this->content}\"":"";
        (isset($this->name))?$tag.=" name=\"{$this->name}\"":"";

        $tag .= ">\n";

        return $tag;
    }

}