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
        if((isset($this->rows[$row])) == false){
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
        $html = "<div class=\"text-center float-right col-md-6 d-block small mt-2\">";
        $html .= "<button class=\"btn btn-success btn-block btn-md\" name=\"{$this->btnName}\" id=\"{$this->btnName}\" type=\"submit\" value=\"{$this->btnValue}\">{$this->btnLabel}&nbsp;&nbsp;<i class=\"fas fa-check fa-lg\"></i></button>";
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
