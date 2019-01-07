<?php
/* 
 * Index Controller
 * Page        : index.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index(){
           $this->view->render('index/index');
    }

}