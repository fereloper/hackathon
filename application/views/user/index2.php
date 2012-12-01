<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Crap Buster</title>
    
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="<?php echo $baseurl; ?>bootstrap/css/bootstrap-responsive.min.css" />
        <!-- gebo blue theme-->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>css/green.css" id="link_theme" />
        <!-- breadcrumbs-->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/jBreadcrumbs/css/BreadCrumb.css" />
        <!-- tooltips-->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/qtip2/jquery.qtip.min.css" />
        <!-- notifications -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/sticky/sticky.css" />
        <!-- code prettify -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/google-code-prettify/prettify.css" />    
        <!-- notifications -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/sticky/sticky.css" />    
        <!-- splashy icons -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>img/splashy/splashy.css" />
		<!-- colorbox -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>lib/colorbox/colorbox.css" />
			
        <!-- main styles -->
            <link rel="stylesheet" href="<?php echo $baseurl; ?>css/style.css" />
			
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans" />
	
        <!-- Favicon -->
            <link rel="shortcut icon" href="<?php echo $baseurl; ?>favicon.ico" />
		
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/ie.css" />
            <script src="js/ie/html5.js"></script>
			<script src="js/ie/respond.min.js"></script>
			<script src="lib/flot/excanvas.min.js"></script>
        <![endif]-->
		
     <script type="text/javascript" src="http://localhost/hackathon/Script/jquery-1.8.3.min.js"></script>
     <script type="text/javascript" src="http://localhost/hackathon/Script/common.js"></script>
    </head>
    
    <body>
    
    <div id="loading_layer" style="display:none"><img src="<?php echo $baseurl; ?>img/ajax_loader.gif" alt="" /></div>
    
    <div id="maincontainer" class="clearfix">
    <?php echo $header; ?>
    <div id="mssg-box">
        <?php if(isset($mssg)){ ?>
            <?php echo $mssg; ?>
        <?php } ?>
    </div>    
        
    
    <?php echo $content; ?>
    
    <?php echo $sidebar; ?>
    
    
    
    
          
    <script src="<?php echo $baseurl; ?>js/jquery.min.js"></script>
			<!-- smart resize event -->
			<script src="<?php echo $baseurl; ?>js/jquery.debouncedresize.min.js"></script>
			<!-- hidden elements width/height -->
			<script src="<?php echo $baseurl; ?>js/jquery.actual.min.js"></script>
			<!-- js cookie plugin -->
			<script src="<?php echo $baseurl; ?>js/jquery.cookie.min.js"></script>
			<!-- main bootstrap js -->
			<script src="<?php echo $baseurl; ?>bootstrap/js/bootstrap.min.js"></script>
			<!-- tooltips -->
			<script src="<?php echo $baseurl; ?>lib/qtip2/jquery.qtip.min.js"></script>
			<!-- jBreadcrumbs -->
			<script src="<?php echo $baseurl; ?>lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
			<!-- sticky messages -->
            <script src="<?php echo $baseurl; ?>lib/sticky/sticky.min.js"></script>
			<!-- fix for ios orientation change -->
			<script src="<?php echo $baseurl; ?>js/ios-orientationchange-fix.js"></script>
			<!-- scrollbar -->
			<script src="<?php echo $baseurl; ?>lib/antiscroll/antiscroll.js"></script>
			<script src="<?php echo $baseurl; ?>lib/antiscroll/jquery-mousewheel.js"></script>
			<!-- lightbox -->
            <script src="<?php echo $baseurl; ?>lib/colorbox/jquery.colorbox.min.js"></script>
            <!-- common functions -->
			<script src="<?php echo $baseurl; ?>js/gebo_common.js"></script>
			
			<!-- charts -->
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.resize.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.pie.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.curvedLines.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.orderBars.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.multihighlight.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/flot/jquery.flot.pyramid.min.js"></script>
			<script src="<?php echo $baseurl; ?>lib/moment_js/moment.min.js"></script>
			<!-- charts functions -->
			<script src="<?php echo $baseurl; ?>js/gebo_charts.js"></script>
    
			
    
    </div>
	</body>
</html>