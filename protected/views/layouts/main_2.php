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
    <li> <a href="#" id="about"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">About me</span> <span class="descr">Know me</span> </span> </a> </li>
    <li> <a href="#projects" id="projects"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Projects</span> <span class="descr">My work</span> </span> </a> </li>
    <li> <a href="#" id="contact"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.png" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Contact</span> <span class="descr">Get in touch</span> </span> </a> </li>
    <li> <a href="#" id="blog"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt=""/> <span class="active"></span> <span class="wrap"> <span class="link">Blog</span> <span class="descr">Daily musings</span> </span> </a> </li>
  </ul>
</nav>
<section id="bg">
  <section id="overlay"></section>
  <a href="#" class="nextImageBtn" title="next"></a>
  <a href="#" class="prevImageBtn" title="previous"></a>
  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/1.jpg" id="bgimg" />
</section>
<div id="preloader"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ajax-loader_dark.gif" width="32" height="32" alt="" /></div>
<div id="toolbar"><a href="#" title="Maximize" onClick="ImageViewMode('full');return false"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/toolbar_fs_icon.png" width="50" height="50" alt="" /></a></div>
<div id="thumbnails_wrapper">
  <div id="outer_container">
    <div class="thumbScroller">
      <div class="container">
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/1.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/1.jpg" title="Title of this pic" alt="Title of this pic" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/2.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/2.jpg" title="Second Title" alt="Second Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/3.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/3.jpg" title="Third Title" alt="Third Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/4.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/4.jpg" title="Fourth Title" alt="Fourth Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/5.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/5.jpg" title="Fifth Title" alt="Fifth Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/6.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/6.jpg" title="Sixth Title" alt="Sixth Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/1.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/1.jpg" title="Title of this pic" alt="Title of this pic" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/2.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/2.jpg" title="Second Title" alt="Second Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/3.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/3.jpg" title="Third Title" alt="Third Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/4.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/4.jpg" title="Fourth Title" alt="Fourth Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/5.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/5.jpg" title="Fifth Title" alt="Fifth Title" class="thumb" /></a></div>
        </div>
        <div class="content">
          <div><a href="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/6.jpg"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gallery/thumbs/6.jpg" title="Sixth Title" alt="Sixth Title" class="thumb" /></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<article id="popupAbout" class="popupAbout">
  <div class="customScrollBox">
    <div class="container">
      <div class="content"> <a id="popupAboutClose"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" width="20" alt="" /></a>
        <h1>About: Lorem Ipsum</h1>
        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/200x150.png" alt="" class="image"/> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna. In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique.</p>
      </div>
    </div>
    <div class="dragger_container">
      <div class="dragger"></div>
    </div>
    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a> </div>
</article>
<!--
<article id="popupProjects" class="popupProjects">
  <div class="customScrollBox">
    <div class="container">
      <div class="content"> <a id="popupProjectsClose"><img src="images/cross.png" width="20" alt="" /></a>
        <h1>Projects: Lorem Ipsum</h1>
        <h2>Animation Studios(2005-2011)</h2>
        <p class="nomargin"><img src="images/200x150.png" alt="" class="image"/>Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. <br>
        </p>
        <div class="border"></div>
        <h2>Micro Computers(2000-2005)</h2>
        <p class="nomargin"><img src="images/200x150.png" alt="" class="image"/>Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis.<br />
        </p>
        <div class="border"></div>
        <h2>Software Company(1995-2000)</h2>
        <p><img src="images/200x150.png" alt="" class="image"/>Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis.<br />
        </p>
        <div class="border"></div>
      </div>
    </div>
    <div class="dragger_container">
      <div class="dragger"></div>
    </div>
    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a> </div>
</article>
-->
<article id="popupContact" class="popupContact">
  <div class="customScrollBox">
    <div class="container">
      <div class="content"> <a id="popupContactClose"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" width="20" alt="" /></a>
        <h1>Contact: Lorem Ipsum</h1>
        <p></p>
        <form method="post">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required placeholder="Name" />
          <label for="name">Subject:</label>
          <input type="text" name="subject" id="subject" required placeholder="Subject" />
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required placeholder="email@example.com" />
          <label for="message">Message:</label>
          <textarea name="message" id="message" required></textarea>
          <input type="submit" value="Send Message" />
        </form>
        <br />
        
        <div id="social-network"> <a href="#" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" alt="Facebook" /></a> <a href="#" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/flickr.png" alt="Flicker" /></a> <a href="#" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/linkedin.png" alt="Linkedin" /></a> <a href="#" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/myspace.png" alt="Myspace" /></a> <a href="#" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png" alt="Twitter" /></a> </div>
      </div>
    </div>
    <div class="dragger_container">
      <div class="dragger"></div>
    </div>
    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a> </div>
</article>
<article id="popupBlog" class="popupBlog">
  <div class="customScrollBox">
    <div class="container">
      <div class="content"> <a id="popupBlogClose"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cross.png" width="20" alt="" /></a>
        <h1>Blog</h1>
        <h2>Lorem ipsum</h2>
        <div class="date"><span class="day">24</span> <span class="month">May</span> <span class="year">2011</span> </div>
        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
        <div class="border"></div>
        <h2>Dolor sit amet</h2>
        <div class="date"><span class="day">22</span> <span class="month">May</span> <span class="year">2011</span> </div>
        <p>Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
        <div class="border"></div>
      </div>
    </div>
    <div class="dragger_container">
      <div class="dragger"></div>
    </div>
    <a class="scrollUpBtn" href="#"></a> <a class="scrollDownBtn" href="#"></a> </div>
</article>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/gallery.js"></script> 
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.0.0/backbone-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/scripts/app.js"></script>
</body>
</html>