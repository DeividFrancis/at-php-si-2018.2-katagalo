<?php
require_once 'AbstractField.class.php';
class Select  extends AbstractField{
    private $name;
    private $label;
    private $options = array();

    public function __construct($label, $name){
        $this->name = $name;
        $this->label = $label;
        $this->addClass('mdb-select md-form');
        // $this->options = array();
    }

    public function addOption($label, $value)
    {
        $this->options[$value] = $label;
    }

    private function getOpitons(){
        $html = "<option disabled selected> Selecione.. </option>";
        foreach ($this->options as $value => $option) {
            $html.= "<option value='$value'> $option </option>";
        }
        return $html;
    }

    public function getHtml(){
        $html = "<div class='col-md'>";
        $html.=     "<div class='md-form mb-0'>";
        $html.=         "<select ";
        $html.=         isset($this->id)? "id='{$this->id}'": "";
        $html.=         "type='text' name='{$this->name}'";
        $html.=         $this->getAttr();
        $html.=         ">";
        $html.=         $this->getOpitons();
        $html.=         "</select>";
        $html.=         "<label for='{$this->name}' class='font-weight-light'> {$this->label} </label>";
        $html.=     "</div>"; // end md-form
        $html.= "</div>"; // end col-md
        return $html;
    }

}