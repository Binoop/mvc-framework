<?php
/*
 * Login Model
 * Page        : login_model.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */

class login_Model extends Model{
    
    public function __construct() {
        parent::__construct();
        
      
      }
    
    public function validateUser(){
        $username   =   $_GET['txtUserName'];
        $password   =   $_GET['txtPassword'];
        $sth        =   $this->db->prepare("Select * from erp_user where user_name like :username AND user_password like MD5(:password)");
        $sth->execute(array(":username"=>$username,":password"=>$password));
        $count      =   $sth->rowCount();
        if($count>0){
            @session::init();
            session::set('erpuser', $username);
            header('location:'.URL.'dashboard');
        }
        else{
            login::setStatus("seasdsads");
            header('location:'.URL.'login');
            
            
        }
        
    }
}