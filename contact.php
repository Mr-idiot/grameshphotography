<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Ramesh Photography | Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/layout.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/favicon1.ico">
<link rel="icon" href="images/favicon1.ico" type="image/fav-icon">
<!--
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.reveal.js"></script>
<script src="js/gmaps.js"></script>
<script src="js/init.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/contact_form.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
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

<!--FB Share Code Starts-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--FB Share Code Starts-->

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
          <li><a href="http://www.grameshphotography.in/videos">Videos</a></li>
          <li class="active"><a href="http://www.grameshphotography.in/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<section id="conTact">
  <div class="row section-head">
    <div class="col full">
      <h2>Contact Us</h2>
      <p class="desc">Get in touch with us.</p>
    </div>
  </div>
  <div class="row">
    <div class="col g-4">
    	<fieldset id="contact_Form">
           <form id="form" method="post">
				 <p id="returnmessage"></p>
                <label>Name: <span class="required">*</span></label>
				<input type="text" id="name"/>
				<label>Email: <span class="required">*</span></label>
				<input type="text" id="email"/>
				<label>Contact No: <span class="required">*</span></label>
                <input type="text" id="contact"/>
				<label>Message: <span class="required">*</span></label>
                <textarea id="message"></textarea>
                <button class="submit" id="submit">Submit</button>
				<!--<input type="button" id="submit" class="submit" value="Send Message"/>-->
         </form>
     </fieldset>
      <!--<form name="contactForm" id="contactForm" method="post" action="#">
        <fieldset id="contact_Form">
          <div>
            <label for="contactName">Name <span class="required">*</span></label>
            <input name="contactName" type="text" id="contactName" size="35" value="">
          </div>
          <div>
            <label for="contactEmail">Email <span class="required">*</span></label>
            <input name="contactEmail" type="text" id="contactEmail" size="35" value="">
          </div>
          <div>
            <label for="contactSubject">Mobile <span class="required">*</span></label>
            <input name="contactMobile" type="text" id="contactMobile" size="10" value="">
          </div>
          <div>
            <label  for="contactMessage">Message <span class="required">*</span></label>
            <textarea name="contactMessage"  id="contactMessage" rows="7" cols="50"></textarea>
          </div>
          <div>
            <button class="submit">Submit</button>
            <span id="image-loader"> <img src="images/loader.gif" alt=""> </span> </div>
        </fieldset>
      </form>-->
      <div id="message-warning"></div>
      <div id="message-success"> <i class="icon-ok"></i>Your message was sent, thank you!<br>
      </div>
    </div>
    <aside class="col g-3">
      <h3>Contact Information</h3>
      <p>Mr. G.Ramesh (Director)<br>Ad.Photographer</p>
      <p> No.147, 1st floor,
(Opp.to Ashok Leyland Tower),
Mount Road, Little Mount,
Saidapet, Chennai - 600 015.
</p>
      <p> Phone: +91 89396 88777 <br>
        Email: contact@grameshphotography.in </p>
    </aside>
    <aside class="col g-5">
    <img src="images/profile/contact_image.jpg"/>
    </aside>
  </div>
</section>
<section id="map">
	<div id="gmap_canvas"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps/ms?msa=0&amp;msid=203349065286951361575.0004d79ef1d8b4ef292c1&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=13.014394,80.222833&amp;spn=0.003659,0.00456&amp;z=17&amp;iwloc=0004d7cd8dffafade7445&amp;output=embed"></iframe></div>
<!--<p class="map-error">Something went wrong... Unable to load map... Please try to enable javascript</p>
</section>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:100%;"><div id="gmap_canvas" style="height:400px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">map-embed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(13.0167754,80.22690310000007),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(13.0167754, 80.22690310000007)});infowindow = new google.maps.InfoWindow({content:"<b>Lights on studio | G.Ramesh</b><br/>No.144/11, 3rd floor, Baab Enclave,<br/> (Opp.to Ashok Leyland Tower), Mount Road,<br/> Little Mount, Saidapet, Chennai - 600 015.<br/> Phone: +91 89396 88777 <br/> Email: contact@grameshphotography.in" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>
-->
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
</body>
</html>