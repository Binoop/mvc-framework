<?php
/*
 * Main Controller 
 * Page        : help.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class Controller {

   function __construct() {
        $this->view = new view;
   }
    
   public function loadModel($name){
            $modelName  =   $name."_model";
            $pathname   =  "model/".$modelName.".php";
            
            if(file_exists($pathname)){
                require $pathname; 
                $this->model = new $modelName();
            }
    }    
}
