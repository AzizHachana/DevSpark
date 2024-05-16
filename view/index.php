<?php
include '../config.php';
include '../controller/PaysC.php';

$PaysC = new PaysC();
$Top4Pays = $PaysC->getTop4PaysByLikes();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <style>
	 .box {
    display: flex;
  }
  
  #checkbox {
    width: 65px;
    height: 65px;
    cursor: pointer;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    outline: none;
    background: white;
    position: relative;
  }
  #checkbox:hover {
    background: rgba(255, 255, 255, .7);
  }
  #checkbox::before {
    content: '\f1e0';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: 'font awesome 5 free';
    font-weight: 700;
    font-size: 1.5rem;
    color: rgb(41, 41, 41);
    transition: all 1.5s;
  }
  #checkbox:checked::before {
    content: '\f00d';
  }
  #checkbox:checked ~ .menu {
    width: 264px; /* 4 * 65 + 4 * 1 pour la bordure */
  }

  .menu {
    width: 0;
     display: flex;
    overflow: hidden;
    transition: all .5s;
  }
  .menu .menuItems {
    width: 65px;
    height: 65px;
    background: white;
    border-left: 1px solid rgb(165, 165, 165);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .menu .menuItems:hover {
    background: rgba(255, 255, 255, .7);
  }
  .menu .menuItems i {
    font-size: 1.8rem;
  }
  .fa-whatsapp {
    color: #25d366;
  }
  .fa-instagram {
    color: #c32aa3;
  }
  .fa-facebook {
    color: #273c75;
  }
  .fa-twitter {
    color: #1da1f2;
  }
  </style>
  
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Adventure Awaits<span>Travel Agency</span></a>
		 

	     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="eventFront.php" class="nav-link">Destination</a></li>
              <li class="nav-item"><a href="listV.php" class="nav-link">Hébèrgement</a></li>
	          <li class="nav-item "><a href="Blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item "><a href="contact.php" class="nav-link">Réclamations</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item cta"><a href="/vacation/Admin/pages/samples/login.php" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
		<div id="person-1" class="person">
			<img src="images/slider-man.png" alt="Person">
		  </div>
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	
           
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explorez le monde avec nous !</h1>
          </div>
        </div>
      </div>
    </div>

   
    


	<section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Les Meilleures Destinations</h2>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($Top4Pays as $pays) {
                ?>
                    <div class="col-md-3 ftco-animate">
                        <div class="project-destination">
                            <a href="./blog-single.php?id=<?php echo $pays['id'] ?>" class="img" style="background-image: url(../assets/img/uploads/<?php echo $pays['image']; ?>);">
                                <div class="text">
                                    <h3><?php echo $pays['NomP']; ?></h3>
                                    <span><i class="icon-thumbs-o-up mr-2"></i><?php echo $pays['likes']; ?> Likes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    
    

    

    <footer class="ftco-footer bg-bottom" style="background-image: url(../assets/img/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vacation</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                            <div class="box">
    <input type="checkbox"id="checkbox" />
    <div class="menu">
    <a href="https://api.whatsapp.com/send?phone=29992140" target="_blank">
      <div class="menuItems">
        <i class="fab fa-whatsapp"></i>
      </div>
    </a>
    <a href="https://www.instagram.com/share/url=http://localhost/vacation/view/index.php" target="_blank">
      <div class="menuItems">
        <i class="fab fa-instagram"></i>
      </div>
    </a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kids.nationalgeographic.com/geography/countries/article/egypt" target="_blank">
      <div class="menuItems" >
        <i class="fab fa-facebook"></i>
      </div>
    </a>
    <a href="https://twitter.com/intent/tweet?url=http://localhost/vacation/view/index.php" target="_blank">
      <div class="menuItems">
        <i class="fab fa-twitter"></i>
      </div>
    </a>
    </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Infromation</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                            <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                            <li><a href="#" class="py-2 d-block">Call Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Experience</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Adventure</a></li>
                            <li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
                            <li><a href="#" class="py-2 d-block">Beach</a></li>
                            <li><a href="#" class="py-2 d-block">Nature</a></li>
                            <li><a href="#" class="py-2 d-block">Camping</a></li>
                            <li><a href="#" class="py-2 d-block">Party</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
        
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>