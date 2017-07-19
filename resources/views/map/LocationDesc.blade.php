<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ezplore CARAGA</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/map/bootstrap.css">
    <!--base and elements-->
    <link href="css/custom1.css" rel="stylesheet">

<!--Main styles-->
<link rel="stylesheet" type="text/css" href="css/map/main.css">
<link rel="stylesheet" type="text/css" href="css/map/adpative.css">
<link rel="stylesheet" type="text/css" href="css/map/pushy.css">
<!--fonts-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--animation css-->
<link rel="stylesheet" type="text/css" href="css/map/animate.css">
<link rel="stylesheet" type="text/css" href="css/map/settings.css" media="screen">
   <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
</head>
<body onload="initialize()" class="inner_page innerpag">






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

  <div class="bg_parallax" id="inb">

  <div class="site-overlay"></div>
  <div id="container">

  <div class="container page_info">
  <div class="col_md_12">
  <img src="img/c_logo.jpg" alt="">
  <h1>Kafema Coffee Kitchen Rules</h1>
  <ul>
  <li><a href="#">Coffee shop</a></li>
  <li><a href="#">Gourment shop</a></li>
  <li><a href="#">Cafe</a></li>
  </ul>
  </div>
  </div>
  <div class="container contant">
  <div class="row cont">
  <!-- Left column-->
  <div class="col-md-3 mobile_none sidebar">
  <div>
  <!--map place point-->
  <div class="address">
  Mordovceva street, 6 (Up on"Semenovskaya"), 690091, Vladivostok
  <span></span>
  </div>
  <div id="map_place" class="map_place"></div>
  <!--Similar Place-->
  <div class="similar">
  <h3>Similar places:</h3>
  <div>
  <img src="img/avatar/ava_11.jpg" alt="#">
  <a href="#">Eataly NYC</a>
  <i class="fa fa-thumbs-o-up"></i>34 likes
  </div>
  <div>
  <img src="img/avatar/ava_12.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>123 likes
  </div>
  <div>
  <img src="img/avatar/ava_13.jpg" alt="#">
  <a href="#">Num Pang Sandwich Shop</a>
  <i class="fa fa-thumbs-o-up"></i>3 likes
  </div>
  <div>
  <img src="img/avatar/ava_14.jpg" alt="#">
  <a href="#">Dream Downtown</a>
  <i class="fa fa-thumbs-o-up"></i>456 likes
  </div>
  <div>
  <img src="img/avatar/ava_15.jpg" alt="#">
  <a href="#">Central Park</a>
  <i class="fa fa-thumbs-o-up"></i>698 likes
  </div>
  </div>
  </div>
  </div>
  <!--content-->
  <div class="col-md-9 basic">
  <!--Header section-->
  <div class="header_section">
  </div>
  <!--Phone info-->
  <div class="phone_email">
  <span><i class="fa fa-phone"></i>8 (423) 249-96-69</span>
  <span><i class="fa fa-globe"></i><a href="http://matart.ru">http://matart.ru</a></span>
  </div>
  <!--icon description block-->
  <div class="icon_descr_block">
  <div class="cols">
  <div class="icons id_orange"><span class="ic"><i class="fa fa-comments-o"></i></span><span class="num">1034</span></div>
  <div class="icons id_green"><span class="ic"><i class="fa fa-users"></i></span><span class="num">1034</span></div>
  <div class="icons id_blue"><span class="ic"><i class="fa fa-globe"></i></span><span class="num">1034</span></div>
  </div>
  <div class="bubble"><div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s<span></span></div></div>
  </div>
  <!--Features info-->
  <div class="features_block">
  <div>
  <ul>
  <li>Hours: <b>Closed until 8:00am</b></li>
  <li>Reservations: <b>No</b></li>
  <li>Menus: <b>Brunch</b></li>
  </ul>
  </div>
  <div>
  <ul>
  <li>Credit Cards: <b>Yes (incl. Visa & MasterCard)</b></li>
  <li>Wi-Fi: <b>Yes</b></li>
  <li>Outdoor Seating: <b>No</b></li>
  </ul>
  </div>
  </div>
  <!--Share this place btn and total visitors-->
  <div class="share_block">
  <div>
  <a href="#" class="btn btn-success">Share this place</a>
  </div>
  <div>
  <div>
  <span>Total Visitors</span>
  419 total
  </div>
  <div>
  <span>Total Visitors</span>
  419 total
  </div>
  </div>
  </div>
  <!--Check in-->
  <div class="check_in">
  <div>
  <a href="03.html">Vlad Mickh</a> likes this place. Your Swarm friend <a href="03.html">Mattew</a> has checked in here.
  <div class="users_group">
  <!--user-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_3.jpg" alt=""></a>
  <!--user-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_4.jpg" alt=""></a>
  </div>
  </div>
  </div>
  <!--Mobile visibli-->
  <div class="mobile_place">
  <div class="address">
  Mordovceva street, 6 (Up on"Semenovskaya"), 690091, Vladivostok</div>
  <div class="similar">
  <h3>Similar places:</h3>
  <div>
  <img src="img/avatar/ava_11.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>34 likes
  </div>
  <div>
  <img src="img/avatar/ava_12.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>123 likes
  </div>
  <div>
  <img src="img/avatar/ava_13.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>3 likes
  </div>
  <div>
  <img src="img/avatar/ava_14.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>456 likes
  </div>
  <div>
  <img src="img/avatar/ava_15.jpg" alt="#">
  <a href="#">Cafe "Oki-Doki"</a>
  <i class="fa fa-thumbs-o-up"></i>698 likes
  </div>
  </div>
  </div>
  <!--Flickr-->
  <div class="flickr_photo">
  <h4>Flickr stream</h4>
  <ul id="basicuse" class="thumbs"></ul>
  </div>
  <div class="reviews">
  <!--reviews-->
  <h4>145 Reviews:</h4>
  <!--review-->
  <div class="rev">
  <div class="user">
  <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_3.jpg" alt=""></a>
  </div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user">
  <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_4.jpg" alt=""></a>
  </div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_5.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_6.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_7.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_8.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! </div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_9.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage </div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_10.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...</div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_11.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly </div>
  </div>
  </div>
  <!--review end-->
  <!--review-->
  <div class="rev">
  <div class="user"> <!--user avatar-->
  <a href="03.html" class="user_avatars">
  <div class="user_go">
  <i class="fa fa-link"></i>
  </div>
  <img src="img/avatar/ava_12.jpg" alt=""></a></div>
  <div class="texts">
  <div class="head_rev"><a href="03.html">Mattew An</a> <span>12.09.2008</span></div>
  <div class="text_rev">Get a history lesson on possibly the world's most famous beverage -- and sample Coca-Cola products from around the globe! Kids will love it...</div>
  </div>
  </div>
  <!--review end-->
  <!--add comment-->
  <div class="add_comment">
  <h4>Add comment</h4>
  <textarea></textarea>
  <a href="#" class="btn btn-success">Add comment</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


<!--
#################################
- SCRIPT FILES -
#################################
-->
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
