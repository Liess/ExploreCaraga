<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Explore CARAGA</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/map/bootstrap.css">
    <!--base and elements-->
    <link href="css/custom1.css" rel="stylesheet">
    <link href="css/custom2.css" rel="stylesheet">
<!--Main styles-->
<link rel="stylesheet" type="text/css" href="css/map/main.css">

<!--fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--animation css-->
<link rel="stylesheet" type="text/css" href="css/map/animate.css">
   <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
</head>
<body onload="initialize()" class="inmap innerpage">






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
                <li><a href="index.html"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="">About</a></li>
                <li><a href="">Explore</a></li>
                <li class="dropdown"> <a href="#">Provinces </a>
                </li>
                    <li class="dropdown"> <a href="#">Officials </a>

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

<div id="container">

<!--categori menu-->
<div class="container-fluid menu mobile">
<div class="row">
<div class="col-md-12">
<i class="fa fa-times" id="close_menu"></i>
<ul>
<li><a href="javascript:toggleMarkers('Shop');" class="shop"><i class="fa fa-shopping-cart"></i></a></li>
<li><a href="javascript:toggleMarkers('Cinema');" class="cinema"><i class="fa fa-film"></i></a></li>
<li><a href="javascript:toggleMarkers('Club');" class="club"><i class="fa fa-beer"></i></a></li>
<li><a href="javascript:toggleMarkers('Cafe');" class="cafe"><i class="fa fa-cutlery"></i></a></li>
<li><a href="javascript:toggleMarkers('Sport');" class="sport"><i class="fa fa-futbol-o"></i></a></li>
<li><a href="javascript:toggleMarkers('Port');" class="port"><i class="fa fa-life-ring"></i></a></li>
<li><a href="javascript:toggleMarkers('Bank');" class="bank"><i class="fa fa-university"></i></a></li>
<li><a href="javascript:toggleMarkers('Showplace');" class="showplace"><i class="fa fa-eye"></i></a></li>
<li><a href="javascript:toggleMarkers('Park');" class="park"><i class="fa fa-leaf"></i></a></li>
<li class="mobile_menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<!--map-->
<div id="map" class="map"></div>
<!--/map-->
<!--
#################################
- SCRIPT FILES -
#################################
-->
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/map/jquery.min.js"></script>
<!--Bootstrap js-->
<script src="js/map/bootstrap.min.js"></script>
<!--Map js-->
<script type="text/javascript" src="js/map/map.js"></script>
<script type="text/javascript" src="js/map/infobox.js"></script>

</body>
</html>
