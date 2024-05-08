<?php
include_once '../config.php';

include 'C:/xampp/htdocs/eventC/controller/EventC.php';
$c = new EventC();
$tab = $c->listEvents();

// Prepare an array to hold the events data with only the required fields
$events = array();
foreach ($tab as $event) {
    $events[] = array(
        'Nom' => $event['Nom'],
        'DescriptionE' => $event['DescriptionE'],
        'latitude' => $event['latitude'],
        'longitude' => $event['longitude']
    );
    
}

// Encode the events data to JSON format
$events_json = json_encode($events);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AdventureAwaits</title>
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
    <title>Event Map</title>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Vacation<span>AdventureAwaits</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="destination.html" class="nav-link">Destination</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">Book Now</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Places to Travel</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-1.jpg);">
        				<div class="text">
        					<h3>Singapore</h3>
        					<span>8 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-2.jpg);">
        				<div class="text">
        					<h3>Canada</h3>
        					<span>2 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-3.jpg);">
        				<div class="text">
        					<h3>Thailand</h3>
        					<span>5 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="#" class="img" style="background-image: url(images/place-4.jpg);">
        				<div class="text">
        					<h3>Autralia</h3>
        					<span>5 Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
    <form action="" method="post" class="search-property-1">
        <div class="row">
            <div class="col-lg align-items-end">
                <div class="form-group">
                    <label for="Nom">Tour Name</label>
                    <div class="form-field">
                        <div class="icon"><span class="ion-ios-search"></span></div>
                        <input type="text" name="Nom" class="form-control" placeholder="Search place">
                    </div>
                </div>
            </div>
            <div class="col-lg align-items-end">
                <div class="form-group">
                    <label for="Prix">Price Limit</label>
                    <div class="form-field">
                        <div class="icon"><span class="ion-ios-search"></span></div>
                        <input type="number" name="Prix" class="form-control" placeholder="Enter price limit">
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-end">
                <div class="form-group">
                    <div class="form-field">
                        <input type="submit" value="Search" class="form-control btn btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


   
    
</script>
<div id="map"></div>
<script>
    var events = <?php echo $events_json; ?>;
</script>


</div>
</section>

           
        	
<!-- Pagination -->
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <?php if ($page > 1): ?>
                    <li><a href="eventFront.php?page=<?php echo $page - 1; ?>">&lt;</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li <?php if($i == $page) echo 'class="active"'; ?>>
                    <a href="eventFront.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if ($page < $totalPages): ?>
                    <li><a href="eventFront.php?page=<?php echo $page + 1; ?>">&gt;</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
    <?php  ?>
    <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Vacation</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var reservationLink = document.getElementById('reservationLink');
        var eventID;

        document.querySelectorAll('.btn.btn-primary').forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                eventID = event.target.closest('.project-wrap').dataset.id;
                reservationLink.href = `../view/addreservation.php?id=${eventID}`;
            });
        });
    });
</script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 51.5074, lng: -0.1278}, // Centre par défaut à Londres
            zoom: 10
        });

        var events = <?php echo json_encode($events); ?>;
        events.forEach(function(event) {
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(event['latitude']), lng: parseFloat(event['longitude'])},
                map: map,
                title: event['Nom']
            });

            var infoWindow = new google.maps.InfoWindow({
                content: '<h3>' + event['Nom'] + '</h3><p>' + event['DescriptionE'] + '</p>'
            });
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        });
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOVYRIgupAurZup5y1PRh8Ismb1A3lLao&libraries=places&callback=initMap" async defer></script>
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
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
