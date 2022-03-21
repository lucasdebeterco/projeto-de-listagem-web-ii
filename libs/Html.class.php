<?php
class Html{
   
    private $lang;
    private $head;
    private $body;
    
    public function __construct($pLang, $pHead, $pBody) {
        $this->lang = $pLang;
        $this->head = $pHead;
        $this->body = $pBody;
    }

    public function __toString(){
        $sHtml = "<!DOCTYPE html>\n<html lang=\"{$this->lang}\">\n";
              
        $sHtml .= $this->head;
        $sHtml .= $this->body;
        
        $sHtml .= '</html>';
        return $sHtml;
    }


    
}
