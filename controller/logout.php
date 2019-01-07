<?php
/*
 * logout Model
 * Page        : logout.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class logout extends controller{
        
    function __construct(){
     
    }
    function index(){
         @session::destroy();
         header('location:'.URL);
         
    }
  
    
}