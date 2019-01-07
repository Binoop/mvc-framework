<?php

/*
 * Login Controller 
 * Page        : view.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class login extends Controller {
    /* */
    
    static $status;
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('login/index');
    }
    public function validateUser(){
        $this->model->validateUser();
    }
    public static function setStatus($status){
         self::$status=$status;
        
        
    }
    public static function getStatus(){
        return self::$status;
    }
    
}