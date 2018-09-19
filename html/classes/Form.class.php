<?php
class Form
{
    private $controller;
    private $btnLabel;
    private $btnName;
    private $btnValue;
    private $rows = array();
    // public function __construct()
    // {
        
    // }
    public function __construct($controller)
    {
     $this->controller = $controller;   
    }

    public function addRow($row, $fields)
    {  
        if($this->rows[$row] == null){
            $this->rows[$row] = $fields;
        }else{
            $this->rows[$row] = array_push($this->rows[$row], $fields);
        }
    }
    public function addButtom($label,$value, $name= 'action'){
        $this->btnLabel = $label;
        $this->btnName = $name;
        $this->btnValue = $value;
    }
    private function getButtom()
    {
        $html = "<div class=\"float-right\">";
        $html .= "<button class=\"btn btn-success btn-md waves-effect waves-light\" name=\"{$this->btnName}\" id=\"{$this->btnName}\" type=\"submit\" value=\"{$this->btnValue}\">{$this->btnLabel}</button>";
        $html .= "</div>";
        return $html;
    }
    public function getRows(){
        $html = '';
        foreach ($this->rows as $key => $value) {
            // echo "Row $key <br>";
            $html .= "<div class='row'>";
            foreach($value as $field){
                // echo "field $field <br>";
                $html.= $field->getHtml();
            }
            $html .= "</div>"; // end row;
        }
        return $html;
    }
    public function getHtml()
    {
        $html = "<form class=\"\" method='POST'";
        if(isset($this->controller))
            $html.= "action='../../controller/principalController.php'";
        $html.= "/>";
        if(isset($this->controller))
            $html.= "<input type='hidden' name='class' value='{$this->controller}'/>";
        $html.= $this->getRows();
        $html.= $this->getButtom();
        $html.= "</form>";
        return $html;
    }
}
