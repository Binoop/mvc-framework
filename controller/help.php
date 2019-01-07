<?php
/*
 * Help Controller
 * Page        : help.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class Help extends Controller {

    function __construct() {
        parent::__construct();
      }
    
    function index(){
         $this->view = new view();
         $this->view->render('help/index');
     }
    
    public function Other($param = FALSE) {
        echo "This is a normal function<br>";
        
        if(!empty($param)){
            
            echo "This is a Parmeterised function<br>";
        }
        
        require 'model/help_model.php';
        $model  =   new help_Model;
    }

}