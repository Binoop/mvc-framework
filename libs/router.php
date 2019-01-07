<?php
/*
 * Router Page :- Provide Page Access To All Other Pages From Index
 * Page        : router.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 * 
 * PARAMETERS
 *          $url        -   Assign page from Address Bar
 *          $url[0]     -   Class Name
 *          $url[1]     -   Function Name
 *          $url[2]     -   Parameter
 *          $file       -   Assigning File
 */

class Router {
    /*
     *      Default Constructor
     */

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : NULL;                  // Ternary Condition To Assign Pages
        $url = rtrim($url, '/');                                           // Right Trim the preceeding slash  
        $url = explode('/', $url);                                         // Explode the Url 
        $file = 'controller/' . $url[0] . '.php';                          // Assigning File
//        print_r($url); 
        /*
         *      To Redirect Pages
         */
        if(empty($_SESSION['erpuser'])){
            require 'controller/login.php';
            $controller = new login();
            $controller->loadModel('login');
            if(isset($url[1]) && method_exists($controller,$url[1])){
                $controller->$url[1]();
            }else{
               
                $controller->index();
               
                include 'views/footer.php';
            }
            
            
            return false;
        }
        if (empty($url[0])) {
            require 'controller/index.php';
            $controller = new Index;                                        // Instantiating Object

            /*      Include Header           */
            include 'views/header.php';

            /*      Call Index Page          */
            $controller->index();

            /*      Include Footer           */
            include 'views/footer.php';
            return false;
        }

        /* Check If File Exists */
        if (file_exists($file)) {
            require $file;
            include 'views/header.php';
            $controller = new $url[0];
            $controller->index();
            $controller->loadModel($url[0]);
            include 'views/footer.php';
        } else {
            require 'controller/error.php';
            $controller = new Error;                                     // Instating the Error Object
            $controller->index();
            return false;
        }

        /* To Check if method and parameters are set */
        if (isset($url[1]) && !isset($url[2])) {

            $controller->$url[1]();                                      // Calling Default Function
        } else
        if (isset($url[1]) && isset($url[2])) {

            $controller->$url[1]($url[2]);                               // Calling Parmaterised Function
        }
    }

}