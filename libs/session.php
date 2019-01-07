<?php
/*
 * Session Page:
 * Page        : session.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */
class Session{
    
    public static function init(){
         session_start();
    }
    
    public static function set($key,$value){
         $_SESSION[$key]=$value;
    }
    
    public static function get($key){
         return $_SESSION[$key];
    }
    
    public static function destroy(){
         session_destroy();
    } 
    
}