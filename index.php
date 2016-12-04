<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>Ramesh Photography | Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/layout.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/favicon1.ico">
<link rel="icon" href="images/favicon1.ico" type="image/fav-icon">
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header class="mobile">
  <div class="row">
    <div class="col full">
      <div class="logo"> <a href="http://www.grameshphotography.in"><img alt="" src="images/logo.png"></a> </div>
      <nav id="nav-wrap"> <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a> <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
          <li class="active"><a href="http://www.grameshphotography.in">Home</a></li>
          <li><a href="http://www.grameshphotography.in/profile">Profile</a></li>
          <li><a href="http://www.grameshphotography.in/courses">Courses</a></li>
          <li><a href="http://www.grameshphotography.in/gallery">Gallery</a></li>
          <li><a href="http://www.grameshphotography.in/videos">Videos</a></li>
          <li><a href="http://www.grameshphotography.in/contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<section id="intro">
  <div id="intro-slider" class="flexslider">
    <ul class="slides">
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_3.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_2.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_4.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_5.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_6.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_7.jpg"/>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col full">
            <div class="slider-text">
              <img src="images/banner/modeling_1.jpg"/>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<section id="portfolio">

  <div class="row section-head">
    <div class="col full">
      <h2>Our Projects</h2>
      <p class="desc">Check out our latest projects.</p>
      <p class="intro">Our creative photography unleashes different zones and our techniques ornament the targets to get clicked thoroughly with standards necessary. The portfolio presented here encompasses the various lanes of photography we got into and remarkably achieved our benchmarks. Our photographic bench marks in all areas will erstwhile frequently on our new pinnacles and standards will be set on all areas.</p>
    </div>
  </div>
  
  <div class="row">
    <div id="portfolio-wrapper">
    <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-08"><img src="images/portfolio/modeling_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/modelling">Modeling</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-01"><img src="images/portfolio/wedding_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/wedding">Premium Wedding</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-02"><img src="images/portfolio/food_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/food">Food</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-03"><img src="images/portfolio/commercial_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/commercial">Commercial</a></h5>
          </div>
        </div>
      </div>
      
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-05"><img src="images/portfolio/candid_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/candid">Candid</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-06"><img src="images/portfolio/wildlife_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/wildlife">Wildlife</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-07"><img src="images/portfolio/product_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/product">Product</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-04"><img src="images/portfolio/myfavorite_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/favorite">My Favorite</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

      
   <div class="row">
    <div id="portfolio-wrapper">
    		<div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-09"><img src="images/portfolio/kids_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/kids">Kids</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-10"><img src="images/portfolio/interior_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/interior">Interior</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-11"><img src="images/portfolio/industrial_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/industrial">Industrial</a></h5>
          </div>
        </div>
      </div>
      <div class="col portfolio-item">
        <div class="item-wrap"> <a href="#" data-reveal-id="modal-12"><img src="images/portfolio/panaroma_thumbnail.jpg" alt=""></a>
          <div class="portfolio-item-meta">
            <h5><a href="http://grameshphotography.in/panaroma">Panaroma</a></h5>
          </div>
        </div>
      </div>

    </div>
  </div>
              
  
  <div id="modal-01" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/wedding_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Wedding</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span> </div>
    <div class="link-box"> <a href="http://grameshphotography.in/wedding">View More</a> <a class="close-reveal-modal">Close</a> </div>
  </div>
  <div id="modal-02" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/food_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Food</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/food">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-03" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/commercial_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Commercial</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/commercial">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-04" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/myfavorite_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>My Favorite</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/favorite">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-05" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/candid_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Candid</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span> </div>
    <div class="link-box"> <a href="http://grameshphotography.in/candid">View More</a> <a class="close-reveal-modal">Close</a> </div>
  </div>
  <div id="modal-06" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/wildlife_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Wildlife</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/wildlife">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-07" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/product_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Product</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/product">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-08" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/modeling_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Modeling</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/modelling">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-09" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/kids_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Kids</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/kids">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-10" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/interior_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Interior</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/interior">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-11" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/industrial_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Industrial</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/industrial">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  <div id="modal-12" class="reveal-modal"> <img class="scale-with-grid" src="images/portfolio/modals/panaroma_thumbnail.jpg" alt="">
    <div class="description-box">
      <h4>Panaroma</h4>
      <!--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>-->
      <span class="categories"><i class="icon-tag"></i>Photography</span></div>
    <div class="link-box"> <a href="http://grameshphotography.in/panaroma">View More</a> <a class="close-reveal-modal">Close</a></div>
  </div>
  
</section>

<footer>
  <div class="row">
    <div class="col g-7">
      <ul class="copyright">
        <!--<li>Copyright &copy; 2015 Ramesh Photography</li>-->
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
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/scrollspy.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.reveal.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js"></script>
<script src="js/init.js"></script>
<script src="js/smoothscrolling.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

</body>
</html>