<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/favicon.ico" />
<title>Explore CARAGA</title>

<!-- Bootstrap -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="vendor/animateit/animate.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/map/bootstrap.css">
    <!--base and elements-->
    <link href="css/custom1.css" rel="stylesheet">
    <!-- Responsive classes -->
    <link href="css/responsive.css" rel="stylesheet">
<!--Main styles-->
<link rel="stylesheet" type="text/css" href="css/map/main.css">
<link rel="stylesheet" type="text/css" href="css/map/adpative.css">
<link rel="stylesheet" type="text/css" href="css/map/pushy.css">
<!--fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--animation css-->
<link rel="stylesheet" type="text/css" href="css/map/animate.css">
<link rel="stylesheet" type="text/css" href="css/map/settings.css" media="screen">

    <!--  color -->
    <link href="css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">
   <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <!--VENDOR SCRIPT-->
    <script src="vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="vendor/plugins-compressed.js"></script>
</head>
<body onload="initialize()" class="wide inner_page innerpag">





  <!-- HEADER -->
  <header id="header" class="header-fullwidth">
    <div id="header-wrap">
      <div class="container">

        <!--LOGO-->
        <div id="logo">
          <a href="home.html" class="logo" data-dark-logo="images/caragalogo2.png">
            <img src="images/caragalogo2.png">
          </a>
        </div>
        <!--END: LOGO-->

        <!--MOBILE MENU -->
        <div class="nav-main-menu-responsive">
          <button class="lines-button x">
            <span class="lines"></span>
          </button>
        </div>
        <!--END: MOBILE MENU -->


        <!--NAVIGATION-->
        <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
          <div class="container">
            <nav id="mainMenu" class="main-menu mega-menu">
              <ul class="main-menu nav nav-pills">
                <li><a href="/">Home</a>
                </li>
                <li ><a href="">About</a></li>
                <li class="active"> <a href="/Provinces">Provinces </a>
                        <li ><a href="/Map">Explore</a></li>
                </li>


                </li>



                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!--END: NAVIGATION-->
      </div>
    </div>
  </header>
  <!-- END: HEADER -->

  <div class="container page_info">
  <div class="col_md_12">
  <h1>Culture</h1>
  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit leo. Sed arcu mauris, scelerisque vel auctor eget, bibendum eget turpis. Etiam vitae aliquam neque. Nam feugiat pharetra neque, at tristique ligula facilisis eget. Pellentesque risus ipsum, sollicitudin a sapien consequat, porttitor molestie erat. </p>
  </div>
  </div>
  <div class="container contant">
  <div class="row cont">
  <!-- Left column-->
  <div class="col-md-3 mobile_none sidebar">
  <div class="affix-top" id="myAffix" data-spy="affix" data-offset-top="30" data-offset-bottom="20">
  <ul class="places_cat">
  <li><a href="/Infos" class=""><i class="fa fa-info-circle"></i>Basic info</a></li>
  <li><a href="/Facts" class="	"><i class="fa fa-exclamation-circle"></i>Facts</a></li>
  <li><a href="/Natures" class=""><i class="fa fa-leaf"></i>Natures</a></li>
  <li><a href="/Culture" class="active"><i class="fa fa-male"></i>Culture</a></li>
  <li><a href="/TouristSpots" class=""><i class="fa fa-map-marker"></i>Tourist spots</a></li>

  </ul>
  </div>
  </div>
  <!--content-->
  <div class="col-md-9 basic">
  <div class="place_li_cont">
  <!--place style list-->
  <div class="pg style_list">
  <div class="con">
  <img src="images/caragapic2.jpg" alt="">
  <div class="content_li">
  <h2><a href="02.html">Fiesta</a><span></span></h2>
  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit leo. Sed arcu mauris, scelerisque vel auctor eget, bibendum eget turpis. Etiam vitae aliquam neque. Nam feugiat pharetra neque, at tristique ligula facilisis eget. Pellentesque risus ipsum, sollicitudin a sapien consequat, porttitor molestie erat. </span>

  </div>
  </div>
  </div>
  <!--Nature-->
  <div class="pg style_list">
  <div class="con">

  <div class="content_li2">
  <h2><a href="02.html">Culture blabla</a><span></span></h2>
  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit leo. Sed arcu mauris, scelerisque vel auctor eget, bibendum eget turpis. Etiam vitae aliquam neque. Nam feugiat pharetra neque, at tristique ligula facilisis eget. Pellentesque risus ipsum, sollicitudin a sapien consequat, porttitor molestie erat. </span>

  </div>
  </div>
  </div>

  </div>
  <!--morebtn-->
  <a href="#" class="more_btn">Load more</a>
<!--
#################################
- SCRIPT FILES -
#################################
-->
<!-- Theme Base, Components and Settings -->
<script src="js/theme-functions.js"></script>

<!-- Custom js file -->
<script src="js/custom.js"></script>
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/map/jquery.min.js"></script>
<!--scroll animate block-->
<script src="js/map/wow.min.js"></script>
<script type="text/javascript" src="js/map/all_scr.js"></script>
<script type="text/javascript" src="js/map/jflickrfeed.js"></script>
<!--Bootstrap js-->
<script src="js/map/bootstrap.min.js"></script>
<!--Map js-->
<script type="text/javascript" src="js/map/map_place.js"></script>
<script type="text/javascript" src="js/map/infobox.js"></script>
<!--Slider Revolution-->
<script type="text/javascript" src="js/map/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/map/jquery.themepunch.revolution.min.js"></script>
<!--Parallax-->
<script type="text/javascript" src="js/map/jquery.parallax-0.2-min.js"></script>
<!--Parallax bg-->
<script type="text/javascript">
"use strict";
$('#inb').parallax({
'elements': [
{
'selector': '#inb',
'properties': {
'x': {
'background-position-x': {
'initial': 0,
'multiplier': 0.03,
'invert': true
}
},
'y': {
'background-position-y': {
'initial': 30,
'multiplier': 0.03,
'invert': true
}
}
}
}
]
});
</script>
</body>
</html>
