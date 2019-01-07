<?php
/* 
 * Help Controller
 * Page        : index.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class Error extends Controller{

    function __construct() {
        parent::__construct();
    }

    function index(){
         $this->view->render('error/index');
        
    }    
}