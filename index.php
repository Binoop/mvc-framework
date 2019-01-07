<?php
/*
 * Index Page  : Main Index Page
 * Page        : index.php
 * Created by  : Binoop  
 * Created On  : 4/7/2013
 * Project     : Erp   
 */

session_start();
require 'libs/router.php';
require 'libs/controller.php';
require 'libs/model.php';
require 'libs/view.php';

// Libaray File
require 'libs/database.php';
require 'libs/session.php';

require 'config/path.php';
require 'config/database.php';

$app = new Router();
?>