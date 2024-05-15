<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>About</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
      <link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/cart.css">

   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">

   </div>
   <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand">
         <a class="logo" href="index.html">
            <img src="images/logo.png" class="logo">
         </a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="donate.php">Donate</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="news.html">News</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="mission.html">Our Mission</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
               <div class="search_icon"><a href="panier.php"><img src="images/shop-icon.png" class="search_icon"></a>
               </div>
               <button class="donate_btn" type="submit"><a href="AccountUser.php">Your Account</a></button>
            </form>
      </div>
   </nav>
   <!-- header section end -->
   <!-- about section start -->
            <?php   //include_once($_SERVER['DOCUMENT_ROOT'] . '/vacation/View/afficherPanier.php'); ?>

            <!--#####################################################################-->
            <main class="page">
               <section class="shopping-cart dark">
                  <div class="container">
                     <div class="block-heading">
                        <h2>Shopping Cart</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor
                           in, mattis vitae leo.</p>
                     </div>
                     <div class="content">
                        <div class="row">
                        <?php   include_once($_SERVER['DOCUMENT_ROOT'] . '/vacation/View/afficherPanier.php'); ?>

                        </div>
                     </div>
                  </div>
               </section>
            </main>
            <!--#####################################################################-->

   <!-- about section end -->
   <!-- footer section start -->
   < <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
               <div class="footer_logo"><img src="images/footer-logo.png" class="logo"></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <h4 class="footer_taital">NAVIGATION</h4>
               <div class="footer_menu_main">
                  <div class="footer_menu_left">
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="donate.php">Donate</a></li>
                           <li><a href="contact.html">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer_menu_right">
                     <div class="footer_menu">
                        <ul>
                           <li><a href="about.html">About</a></li>
                           <li><a href="news.html">News</a></li>
                           <li><a href="mission.html">Our Mission</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <h4 class="footer_taital">NEWS</h4>
               <p class="footer_text">Generators on the Internet</p>
               <p class="footer_text">Tend to repeat predefined</p>
               <p class="footer_text">Chunks as necessary, making</p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
               <h4 class="footer_taital">address</h4>
               <p class="footer_text">Ave NW, Washington</p>
               <p class="footer_text">+01 1234567890</p>
               <p class="footer_text">demo@gmail.com</p>
            </div>
         </div>
         <div class="footer_section_2">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-3">
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-8 col-md-8 col-lg-9">
                  <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                  <button type="button" class="get_bt">SUBSCRIBE</button>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <!-- sidebar -->
      <!-- javascript -->
      <!--<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>-->
</body>

</html>