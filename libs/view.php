<?php

/*
 * View Controller 
 * Page        : view.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */
class View {
    function __construct() {
        
    }
    
    function  render($name){
       
        require 'views/'.$name.'.php';
    
        
    }

}