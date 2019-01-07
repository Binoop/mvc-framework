<?php
/*
 * Database Controller
 * Page        : help.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */



class Database extends PDO{
    
    public function __construct() {
      try{
          parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
      }  
      catch (PDOException $error){
            echo "Oops !! Something Wrong";
      }
         
       
    
        
    }
}