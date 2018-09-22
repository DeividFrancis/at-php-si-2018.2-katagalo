<?php
abstract class AbstractField {
    
    private $id;
    private $attr = array();
    private $class = array();
    protected $type;
    
    public abstract function getHtml();
    public function addAttr($attr,$value)
    {
        
        if((isset($this->attr[$attr]))==false){
            $this->attr[$attr] = array($value);
        }else{
            array_push($this->attr[$attr], $value);
        }
    }

    public function addClass($klass){
        $this->addAttr("class", $klass);
    }

    public function setId($id){
    $this->id = $id;
    }

    public function setType($type){
        $this->type = $type;
    }
    public function gettype()
    {
        return "type= '{$this->type}' ";
    }

    protected function getAttr(){
        $html = '';
        foreach ($this->attr as $attr => $value) {
            $html .= "$attr = '";
            foreach ($value as $key => $v) {
                $html .= next($value)? $v." " : $v;
            }
            $html.="' ";
        }
        return $html;
    }


}