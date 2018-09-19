<?php
require_once 'AbstractField.class.php';
class Field  extends AbstractField{
    private $name;
    private $label;

    public function __construct($label, $name, $type = 'text'){
        $this->name = $name;
        $this->label = $label;
        $this->setType($type);
        $this->addClass('form-control');
    }
    public function getHtml(){
        $html = "<div class='col'>";
        $html.=     "<div class='md-form mt-0'>";
        $html.=         "<input ";
        $html.=         isset($this->id)? "id='{$this->id}'": "";
        $html.=         $this->getType();
        $html.=         "name='{$this->name}'";
        $html.=         $this->getAttr();
        $html.=         "/>";
        $html.=         ($this->type !== 'hidden')?"<label for='{$this->name}' class='font-weight-light'> {$this->label} </label>": "";
        $html.=     "</div>"; // end md-form
        $html.= "</div>"; // end col-md
        return $html;
    }

}