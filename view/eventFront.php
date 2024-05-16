<?php
include_once '../config.php';

include '../controller/EventC.php';
$c = new EventC();
$tab = $c->listEvents();
// Vérification si un fichier image a été envoyé
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"../assets/img/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }
 
 if (isset($_POST['Nom'], $_POST['Prix'])) {
  $nom = $_POST['Nom'];
  $prix = intval($_POST['Prix']); // Convert Prix to an integer
  $filteredTab = $c->searchEvents($nom, $prix);
  // Utiliser $filteredTab pour afficher les événements filtrés

  // Si des événements correspondants sont trouvés, mettez à jour $tab pour ne contenir que les événements filtrés
  if (!empty($filteredTab)) {
      $tab = $filteredTab;
  }
}
$eventsPerPage = 6; // Nombre d'événements par page
$totalEvents = count($tab); // Nombre total d'événements
$totalPages = ceil($totalEvents / $eventsPerPage); // Nombre total de pages
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Page actuelle, par défaut la première page

$start = ($page - 1) * $eventsPerPage;
$end=$start+$eventsPerPage; // Index de début pour extraire les événements de la page actuelle
$tab = array_slice($tab, $start, $eventsPerPage); // Extraire les événements de la page actuelle
$events = array();
foreach ($tab as $event) {
    $events[] = array(
        'Nom' => $event['Nom'],
        'DescriptionE' => $event['DescriptionE'],
        'start_lat' => $event['start_lat'],
        'start_lng' => $event['start_lng'],
        'end_lat' => $event['end_lat'],
        'end_lng' => $event['end_lng'],
        'waypoint_lat' => $event['waypoint_lat'],
        'waypoint_lng' => $event['waypoint_lng']
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
    <style>
    /* Style for the countdown timer container */
.countdown-container {
    text-align: center;
    margin-top: 20px; /* Adjust as needed */
}

/* Style for the countdown timer text */
.countdown-container p {
    font-size: 20px;
    margin-bottom: 10px;
}

/* Style for the countdown timer */
#countdown {
    display: inline-block;
    background-color: #333;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 24px;
}

/* Style for the countdown timer digits */
#countdown span {
    display: inline-block;
    width: 50px;
    text-align: center;
}


    </style>
    <style>
      /* Style for the hero section */
/* Style for the hero section */
.hero-wrap {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center center;
}

/* Style for the video slider */
.video-slider {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 100%;
}

.video-slide {
  flex: 1;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.video-slide.active {
  opacity: 1;
}

.video-slide video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

/* Style for the text */
/* Style for the text */
/* Style for the text */
.slider-text {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #fff;
}



.dots-container {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.dot {
  width: 10px;
  height: 10px;
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}

.dot.active {
  background-color: rgba(255, 255, 255, 0.9);
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
          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="eventFront.php" class="nav-link">Destination</a></li>
              <li class="nav-item"><a href="listV.php" class="nav-link">Hébèrgement</a></li>
	          <li class="nav-item "><a href="Blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item "><a href="contact.php" class="nav-link">Réclamations</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item cta"><a href="login.php" class="nav-link">Login</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap js-fullheight">
  <div class="video-slider">
    <div class="video-slide active">
      <video autoplay muted loop>
        <source src="../view/images/video1.mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-slide">
      <video autoplay muted loop>
        <source src="../view/images/video2.mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-slide">
      <video autoplay muted loop>
        <source src="../view/images/video3.mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-slide">
      <video autoplay muted loop>
        <source src="../view/images/video4.mp4" type="video/mp4">
      </video>
    </div>
    <!-- Add more video slides as needed -->
  </div>
  <div class="overlay"></div>
  <div class="container">
    <div class="slider-text">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Places to Travel</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Destination <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
  <div class="dots-container">
    <!-- Dots will be added here dynamically -->
  </div>
</section>

    <section class="ftco-section">
    	<div class="container">
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
    	</div>
    </section>

    


   
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Tour Destination</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($tab as $event): ?>
                <div class="col-md-4 ftco-animate">
                    <div class="project-wrap">
                        <a href="#" class="img" style="background-image: url(<?php echo "./images/uploads/".$event['image']; ?>);"></a>
                        <div class="text p-4">
                            <h3><a href="#"><?= $event['Nom']; ?></a></h3>
                            <span class="price"><?= $event['Prix']; ?>$</span>
                            <span class="date"><?= $event['DateE']; ?></span>
                            <ul class="details">
                                <li><span class="flaticon-tour"></span> Pays: <?= $event['Lieu']; ?></li>
                            </ul>
                            <div class="buttons">
                                <button type="button" class="btn btn-primary"><a href="../view/review.php?id_e=<?= $event['id']; ?>" style="color: white;">Review</a></button>
                                <button type="button" class="btn btn-primary"><a href="../view/addreservationE.php?id_e=<?= $event['id']; ?>" style="color: white;">Voir Détails</a></button>
                            </div>
                            <p class="countdown-info">Hurry up, event starts in</p>
                            <div class="countdown" data-date="<?= $event['DateE']; ?>"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




<div id="map"></div>



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
  const stars = document.querySelectorAll('.rating i');

stars.forEach(star => {
  star.addEventListener('click', () => {
    const rating = star.id.split('-')[1];
    document.getElementById('selected-rating').value = rating;
    // Update the visual display of the selected rating (optional)
  });
});

</script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var reservationLink = document.getElementById('reservationLink');
        var eventID;

        document.querySelectorAll('.btn.btn-primary').forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                eventID = event.target.closest('.project-wrap').dataset.id;
                reservationLink.href = `../view/addreservationE.php?id=${eventID}`;
            });
        });
    });
</script>
<script>
 // Update the countdown for each event
document.querySelectorAll('.countdown').forEach(function(countdown) {
    var eventDate = new Date(countdown.dataset.date).getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = eventDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown
        countdown.innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            countdown.innerHTML = "EXPIRED";
        }
    }, 1000);
});

</script>
<script>
// JavaScript for the video slider
const videoSlider = document.querySelector('.video-slider');
const videos = document.querySelectorAll('.video-slide');
const dotsContainer = document.querySelector('.dots-container');

let currentIndex = 0;

function playVideo(index) {
  videos.forEach((video, i) => {
    if (i === index) {
      video.classList.add('active');
      video.querySelector('video').play();
    } else {
      video.classList.remove('active');
      video.querySelector('video').pause();
    }
  });
  updateDots(index);
}

function updateDots(index) {
  const dots = document.querySelectorAll('.dot');
  dots.forEach((dot, i) => {
    if (i === index) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}

function goToVideo(index) {
  currentIndex = index;
  playVideo(currentIndex);
}

// Create dots based on the number of videos
videos.forEach((video, i) => {
  const dot = document.createElement('div');
  dot.classList.add('dot');
  dot.addEventListener('click', () => goToVideo(i));
  dotsContainer.appendChild(dot);
});

// Auto play next video every 5 seconds
setInterval(() => {
  currentIndex++;
  if (currentIndex >= videos.length) {
    currentIndex = 0;
  }
  playVideo(currentIndex);
}, 5000);

// Initial video play
playVideo(currentIndex);

</script>
<script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 51.5074, lng: -0.1278}, // Default center at London
                zoom: 5
            });

            var events = [
                {
                    start_lat: 48.8566,
                    start_lng: 2.3522,
                    end_lat: 41.9028,
                    end_lng: 12.4964,
                    waypoint_lat: 40.4168,
                    waypoint_lng: -3.7038
                },
                // Add more events here...
            ];

            events.forEach(function(event) {
                var start = {lat: event.start_lat, lng: event.start_lng};
                var end = {lat: event.end_lat, lng: event.end_lng};
                var waypoint = {lat: event.waypoint_lat, lng: event.waypoint_lng};

                // Display markers for start, end, and waypoint
                var startMarker = new google.maps.Marker({
                    position: start,
                    map: map,
                    title: 'Start'
                });

                var endMarker = new google.maps.Marker({
                    position: end,
                    map: map,
                    title: 'End'
                });

                var waypointMarker = new google.maps.Marker({
                    position: waypoint,
                    map: map,
                    title: 'Waypoint'
                });

                // Create a Polyline for the route
                var routeCoordinates = [
                    start,
                    waypoint,
                    end
                ];

                var route = new google.maps.Polyline({
                    path: routeCoordinates,
                    geodesic: true,
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 2
                });

                // Set the Polyline to be visible on the map
                route.setMap(map);

                // Create info window for the event
                var infoWindow = new google.maps.InfoWindow({
                    content: 'Event description here...'
                });

                // Add click listener to display info window
                startMarker.addListener('click', function() {
                    infoWindow.setContent('Start: ' + event.start_lat + ', ' + event.start_lng);
                    infoWindow.open(map, startMarker);
                });

                endMarker.addListener('click', function() {
                    infoWindow.setContent('End: ' + event.end_lat + ', ' + event.end_lng);
                    infoWindow.open(map, endMarker);
                });

                waypointMarker.addListener('click', function() {
                    infoWindow.setContent('Waypoint: ' + event.waypoint_lat + ', ' + event.waypoint_lng);
                    infoWindow.open(map, waypointMarker);
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
