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
            
            <div id="navigation">     
                <ul class="sf-menu" id="example">
		<!-- First List -->	
                    <li class="current">
				<a href="index">Home</a>
				<ul>
                                    <li class="current">
						<a href="help">Help</a>
                                    </li>
				</ul>
                        </li>
                <!-- Second List -->
                        <li>
                            <a href="#">home</a>
                            <ul>
                                <li>
                                    <a href="dashboard">DashBoard</a>
                                </li>
                            </ul>
                        </li>
                </ul>
            </div>
            <? echo session::get('erpuser'); ?>
            <div id="logout">
                <a href="<?php echo URL ?>logout"><img src="<?php echo URL ?>public/images/logout.png" alt="Logout"/></a>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Header Ends -->
        <div id="container">
         