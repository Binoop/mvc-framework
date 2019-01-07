<?php
/*
 * Login Screen 
 * Page        : index.php
 * Created By  : Binoop
 * Created On  : 2/7/2013  
 * Project Name: Erp
 */
?>

<html>
    <head>
        <link   rel="stylesheet" href="<?php echo URL; ?>public/css/css.css" type="text/css" />
        <link   rel="stylesheet" href="<?php echo URL; ?>public/css/superfish.css" type="text/css"/>
        <script src="<?php echo URL; ?>public/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>public/js/script.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>public/js/superfish.js" type="text/javascript"></script>
        <script src="<?php echo URL; ?>public/js/hoverIntent.js" type="text/javascript"></script>
    </head>
    <body> 
        <!-- Header -->
        <div id="header">
            <div id="logo">
                    <img src="<?php echo URL ?>/public/images/logo.png" alt="Logo"/>
            </div>
        </div>
<div id="container">

    <div id="login_form">
        <form action="<?php echo URL; ?>login/validateUser" method="get" id="frmLogin" name="frmLogin">
            <table>
                <tr>
                    <td> <label><strong>User Name</strong></label></td>
                </tr>
                <tr>
                    <td><input type="text" class="loginField" id="txtUserName" name="txtUserName"/></td>
                </tr>
                <tr>
                    <td><label><strong>Password</strong></label></td>
                </tr>
                <tr>
                    <td><input type="password" class="loginField" id="txtPassword" name="txtPassword"/></td>
                </tr>
                <tr>
                    <td><span><?php  ?></span></td>
                </tr>

                <tr>
                    <td><input type="image" id="btnLoginSubmit" name="btnLoginSubmit" src="<?php echo URL; ?>/public/images/loginbtn.gif" />   </td>
                </tr>


            </table>

        </form>

    </div>
