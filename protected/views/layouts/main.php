<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sport Angel</title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mCustomScrollbar.css" type="text/css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/pop-ups.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/nav.js"></script>
</head>
<body>
<div id="logo">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo2.png" />
</div>
<nav>
  <ul id="menu" class="menu">
    <li> <a href="#"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">About me</span> <span class="descr">Know me</span> </span> </a> </li>
    <li> <a href="#projects" > <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Projects</span> <span class="descr">My work</span> </span> </a> </li>
    <li> <a href="#new" class="popup"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Blog</span> <span class="descr">Daily musings</span> </span> </a>
    <li> <a href="#contact" class="popup"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.png" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Contact</span> <span class="descr">Get in touch</span> </span> </a> </li></li>
  </ul>
</nav>
<section id="bg">
  <section id="overlay"></section>
  <a href="#" class="nextImageBtn" title="next"></a>
  <a href="#" class="prevImageBtn" title="previous"></a>
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/1.jpg" id="bgimg" />
</section>
    <div class="pageView">
        
    </div>
<div id="preloader"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ajax-loader_dark.gif" width="32" height="32" alt="" /></div>
<div id="toolbar"><a href="#" title="Maximize" onClick="ImageViewMode('full');return false"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/toolbar_fs_icon.png" width="50" height="50" alt="" /></a></div>
<div id="thumbnails_wrapper">
  <div id="outer_container">
    <div class="thumbScroller">
      <div class="container">
        <div class="content">
          <div>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/1.jpg">
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/1.jpg" title="Title of this pic" alt="Title of this pic" class="thumb" />
              </a>
          </div>
        </div>
        <div class="content">
          <div>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/2.jpg">
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/2.jpg" title="Second Title" alt="Second Title" class="thumb" />
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<article id="popup" >
    <a id="popupClose"><img src="images/cross.png" width="20" alt="" /></a>
  <div class="customScrollBox">
    <div class="container">
      <div class="content"> 
        
      </div>
    </div>
    <div class="dragger_container">
      <div class="dragger"></div>
    </div>
    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a> </div>
</article>



<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/underscore.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/backbone.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/app.js"></script>
</body>
</html>