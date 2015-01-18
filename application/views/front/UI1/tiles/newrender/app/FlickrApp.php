<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Flickr App</title>
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />	

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/front/UI-1-media/UI1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/front/UI-1-media/UI1/css/Droptiles.css?v=14" />
    <link href="<?php echo base_url();?>media/front/UI-1-media/UI1/tiles/newrender/app/FlickrApp.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>media/front/UI-1-media/UI1/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/front/UI-1-media/UI1/js/jQuery.MouseWheel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/front/UI-1-media/UI1/js/AppCommon.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/front/UI-1-media/UI1/tiles/newrender/app/FlickrApp.js?v=14"></script>
    
</head>
<body>
    <div id="body">

        <div class="metro appnavbar">
            <ul>
                <li>
                    <a class="backbutton" href="javascript:closeApp()">
                        <img src="<?php echo base_url();?>media/front/UI-1-media/UI1/img/Metro-Back-48.png" alt="Go back to Dashboard" />
                    </a>
                </li>
                <li>
                    <h1 class="start">Flickr Photos</h1>
                </li>
            </ul>
        </div>

        <div class="appnavbar_space"></div>

        <div id="images">
        </div>
        
    </div>
</body>
</html>
