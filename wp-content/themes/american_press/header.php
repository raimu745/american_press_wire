<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700&family=MuseoModerno:wght@500;700&family=Rajdhani:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
    <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>

    <title>Document</title>
     <!-- ************************************************************************ !-->

    <!-- ****                                                              **** !-->

    <!-- ****       ¤ Designed and Developed by  LEADconcept               **** !-->

    <!-- ****               http://www.leadconcept.com                     **** !-->

    <!-- ****                                                              **** !-->

    <!-- ************************************************************************ !-->
    <?php wp_head() ?>
    <style>
      .nav{
        margin-left: 300px;
      }  
     .nav li a{
        margin: 0 20px!important;
     }
     .nav li {
        font-size: 26px;
     }
    </style>
</head>
<body>
  
      <!-- top bar start -->
      <div class="container-fluid top_bar">
        <div class="container pl-lg-0 pr-lg-0">
            <div class="row">
                <div class="col-md-8 pl-lg-0 pr-lg-0 pl-md-0 ">
                    <div class="content">
                        <a class="top_bar_btn">Breaking</a>
                        <p>The Ash Wednesday Selfie Trend Has Patriots  Debating</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="socials">
                        <ul class="socials-list">
                            <li class="socials-list-item"><img src="assets/images/facebook.png" alt=""></li>
                            <li class="socials-list-item"><img src="assets/images/instagaram@4x.png" alt=""></li>
                            <li class="socials-list-item"><img src="assets/images/youtube.png" alt=""></li>
                            <li class="socials-list-item"><img src="assets/images/twitter.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- top bar end -->

<!-- navbar start  -->

<div class="container-fluid menu_bar_parent pl-lg-0 pr-lg-0">
    <!-- <?php echo $image = get_header_image();?> -->
    
    <a href="<?php echo site_url();?>"><img src="<?= $image = get_header_image();?>" alt=""></a>
<div class="container menu_bar ">
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container pl-lg-0 pr-lg-0">
        <a class="navbar-brand" href="index.html"><img src="./assets/images/logo.png" alt=""></a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">

        <?php wp_nav_menu(
            array('theme_location'=>'primary-menu','menu_class'=>'nav')
        );?>
         <li class="nav-item"><a href="#" class="nav-link openBtn" onclick="openSearchHero()"><i class='bx bx-search'></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class='bx bx-cart-alt'></i></a></li>
        <!-- <ul class="navbar-nav  mr-md-3">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="news.html" class="nav-link">News</a></li>
            <li class="nav-item"><a href="" class="nav-link">Article</a></li>
            <li class="nav-item"><a href="gallery.html" class="nav-link">Image Gallery</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Sport</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Entertainment</a></li>
          <li class="nav-item"><a href="#" class="nav-link openBtn" onclick="openSearchHero()"><i class='bx bx-search'></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class='bx bx-cart-alt'></i></a></li>
          <div class="mobile-search">
            <li class="nav-item"><a href="#" class="nav-link openBtn" onclick="openSearchHero()"><i class='bx bx-search'></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class='bx bx-cart-alt'></i></a></li>
          </div>
        </ul> -->
      </div>
    </div>
  </nav>
  

</div>
</div>
<!-- search bar modal open start -->
<div id="FullScreenOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearchHero()" title="Close Overlay">×</span>
    <div class="overlay-content">
      <form action="/action_page.php">
        <input type="text" placeholder="Name the thing you love, we find best price for you" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  

    
    
  
<!-- search bar modal open end -->



<!-- END nav -->


<!-- navbar end  -->  