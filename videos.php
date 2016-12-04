<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Ramesh Photography | Videos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/layout.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/favicon1.ico">
<link rel="icon" href="images/favicon1.ico" type="image/fav-icon">
  <!-- Chang URLs to wherever Video.js files will be hosted -->
<link href="video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
<!--<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>-->
<script src="jquery-1.5.1.min.js"></script>
 <script src="video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
<script>
    _V_.options.flash.swf = "video-js.swf";
</script>
<script>

var message="Sorry Guys .. I have Disable The Right Click :) ";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

</script>
</head>
<body data-spy="scroll" data-target="#nav-wrap">
<header class="mobile">
  <div class="row">
    <div class="col full">
      <div class="logo"> <a href="http://www.grameshphotography.in"><img alt="" src="images/logo.png"></a> </div>
      <nav id="nav-wrap"> <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a> <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
          <li><a href="http://www.grameshphotography.in">Home</a></li>
          <li><a href="http://www.grameshphotography.in/profile">Profile</a></li>
          <li><a href="http://www.grameshphotography.in/courses">Courses</a></li>
          <li><a href="http://www.grameshphotography.in/gallery">Gallery</a></li>
          <li class="active"><a href="http://www.grameshphotography.in/videos">Videos</a></li>
          <li><a href="http://www.grameshphotography.in/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<section id="about">
  <div class="row">
    <div class="col full">
      <div class="row section-head">
    <div class="col full">
      <h2>Video Gallery</h2>
      <p class="desc">This is what our workshop</p>
      <p class="intro"></p>
      <div class="g-6 offset-4">
  <video id="" class="video-js vjs-default-skin" controls preload="none" width="600" height="350" poster="video-img.jpg" data-setup="{}">
     <source src="add-shoot.mp4" type='video/mp4' /> 
     <source src="add-shoot.webm" type='video/webm' />
     <source src="add-shoot.ogv" type='video/ogg' />
  </video>
<!--
<iframe src="http://player.vimeo.com/video/40558553?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

<source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
    <!--<track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track>
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>-->

        </div>
      </div>
  </div>
 </div>
</div>
</section>

<footer>
  <div class="row">
    <div class="col g-7">
      <ul class="copyright">
        <li>Copyright &copy; <a href="http://www.grameshphotography.in/">G.RameshPhotography.in</a> | 2015</li>
      </ul>
    </div>
    <div class="col g-5 pull-right">
      <ul class="social-links">
       <li><a href="https://www.facebook.com/sharer/sharer.php?app_id=113869198637480&sdk=joey&u=https%3A%2F%2Fwww.facebook.com%2FLightsOnStudioPhotography&display=popup&ref=plugin&src=share_button" target="_blank" title="Facebook"><i class="icon-facebook"></i></a></li>
        <li><a href="https://twitter.com/grameshphoto" target="_blank" title="Twitter"><i class="icon-twitter"></i></a></li>
<!--    <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
        <li><a href="#"><i class="icon-linkedin"></i></a></li>
        <li><a href="#"><i class="icon-skype"></i></a></li>
        <li><a href="#"><i class="icon-rss-sign"></i></a></li>
-->      </ul>
    </div>
  </div>
</footer>
<!--<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/scrollspy.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.reveal.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/init.js"></script>
<script src="js/smoothscrolling.js"></script>-->
</body>
</html>