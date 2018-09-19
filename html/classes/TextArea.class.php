<?php
require_once 'AbstractField.class.php';
class TextArea  extends AbstractField{
    private $name;
    private $label;
    private $content;

    public function __construct($label, $name, $content){
        $this->name = $name;
        $this->label = $label;
        $this->content = $content;
        $this->addClass('md-textarea form-control');
    }
    public function getHtml(){
        $html = "<div class='col-md'>";
        $html.=     "<div class='md-form mb-0'>";
        $html.=         "<textarea ";
        $html.=         isset($this->id)? "id='{$this->id}'": "";
        $html.=         $this->getType();
        $html.=         "name='{$this->name}'";
        $html.=         $this->getAttr();
        $html.=         ">";
        $html.=         $content;
        $html.=         "</textarea>"; // end md-form
        $html.=         "<label for='{$this->name}' class='font-weight-light'> {$this->label} </label>";
        $html.=     "</div>"; // end md-form
        $html.= "</div>"; // end col-md
        return $html;
    }

}