<?php
/*
 * DasH Board Controller 
 * Page        : view.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class Dashboard extends Controller {
    function __construct() {
        parent::__construct();
        
        $this->view->js="sadasd";
     }
    public function index() {
        $this->view->render('dashboard/index');
    }
    
}