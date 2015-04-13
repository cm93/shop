<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>admin</title>
        <meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
        <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS;?>normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS;?>demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS;?>component.css" />
            <script src="<?php echo JS_URL; ?>jquery-1.7.2.min.js"></script>
        <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800|Clicker+Script' rel='stylesheet' type='text/css'> -->
       
        <!--[if IE]>
        	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	</head>
    <script type="text/javascript">
        $(function(){
        $(".main-title").ready(function(e){
            $(".main-title").animate({left:'30%',opacity:'show'}, 1000);
        })
        $("#clock").ready(function(e){
            $("#clock").animate({bottom:'40%',opacity:'show'}, 1000);
        })
        $(".content").ready(function(e){
            $(".content").fadeTo(1000, 1);
        })
    })
    </script>
	<body>
		<div class="container demo-2" >
			<div class="content"  style="opacity:0">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas" ></canvas>
                    <iframe scrolling="no" frameBorder="no" id="clock" src="./clock"  style='width:50%;position:absolute;left:10%;bottom:0%;z-index:0;display:none;' ></iframe>
                    <h1 class="main-title" style="position:absolute;left:0%;display:none;transform:rotate(360deg);"></span></h1>
                    
                </div>

            </div>
		</div><!-- /container -->
        <div style="position:fixed;height:90px;width:100%;left:0;bottom:5px;z-index:999"><div class="footer-banner" style="width:728px; margin:0px auto"></div></div>           
        <script src="<?php echo JS;?>jquery.js"></script>
        <script src="<?php echo JS;?>rAF.js"></script>
        <script src="<?php echo JS; ?>demo-2.js"></script>
	</body>
</html>