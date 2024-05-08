<?php

include '../components/connect.php';

if(isset($_GET['id_e'])){
   $event_id = $_GET['id_e'];
}else{
   $event_id = '';
   header('location:all_events.php');
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Event</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include '../components/header.php'; ?>
<!-- header section ends -->

<!-- view events section starts  -->

<section class="view-event">

   <div class="heading"><h1>Event Details</h1> <a href="eventFront.php" class="inline-option-btn" style="margin-top: 0;">All Events</a></div>

   <?php
      $select_event = $conn->prepare("SELECT * FROM `events` WHERE id = ? LIMIT 1");
      $select_event->execute([$event_id]);
      if($select_event->rowCount() > 0){
         while($fetch_event = $select_event->fetch(PDO::FETCH_ASSOC)){

        $total_ratings = 0;
        $rating_1 = 0;
        $rating_2 = 0;
        $rating_3 = 0;
        $rating_4 = 0;
        $rating_5 = 0;

        $select_ratings = $conn->prepare("SELECT * FROM `reviews` WHERE event_id = ?");
        $select_ratings->execute([$fetch_event['id']]);
        $total_reviews = $select_ratings->rowCount();
        while($fetch_rating = $select_ratings->fetch(PDO::FETCH_ASSOC)){
            $total_ratings += $fetch_rating['rating'];
            if($fetch_rating['rating'] == 1){
               $rating_1 += $fetch_rating['rating'];
            }
            if($fetch_rating['rating'] == 2){
               $rating_2 += $fetch_rating['rating'];
            }
            if($fetch_rating['rating'] == 3){
               $rating_3 += $fetch_rating['rating'];
            }
            if($fetch_rating['rating'] == 4){
               $rating_4 += $fetch_rating['rating'];
            }
            if($fetch_rating['rating'] == 5){
               $rating_5 += $fetch_rating['rating'];
            }
        }

        if($total_reviews != 0){
            $average = round($total_ratings / $total_reviews, 1);
        }else{
            $average = 0;
        }
        
   ?>
   <div class="row">
      <div class="col">
         <img src="./images/uploads//<?= $fetch_event['image']; ?>" alt="" class="image">
         <h3 class="title"><?= $fetch_event['Nom']; ?></h3>
      </div>
      <div class="col">
         <div class="flex">
            <div class="total-reviews">
               <h3><?= $average; ?><i class="fas fa-star"></i></h3>
               <p><?= $total_reviews; ?> reviews</p>
            </div>
            <div class="total-ratings">
               <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span><?= $rating_5; ?></span>
               </p>
               <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span><?= $rating_4; ?></span>
               </p>
               <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span><?= $rating_3; ?></span>
               </p>
               <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <span><?= $rating_2; ?></span>
               </p>
               <p>
                  <i class="fas fa-star"></i>
                  <span><?= $rating_1; ?></span>
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="heading"><h1>User's Reviews</h1> <a href="addreview.php?event_id=<?= $fetch_event['id']; ?>" class="inline-btn" style="margin-top: 0;">Add Review</a></div>
   <?php
         }
      }else{
         echo '<p class="empty">Event is missing!</p>';
      }
   ?>

</section>

<!-- view events section ends -->

<!-- reviews section starts  -->

<section class="reviews-container">

   

   <div class="box-container">

   <?php
      $select_reviews = $conn->prepare("SELECT * FROM `reviews` WHERE event_id = ?");
      $select_reviews->execute([$event_id]);
      if($select_reviews->rowCount() > 0){
         while($fetch_review = $select_reviews->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box" <?php if($fetch_review['user_id'] == 7){echo 'style="order: -1;"';}; ?>>
      <?php
         $select_user = $conn->prepare("SELECT * FROM `unityuser` WHERE id_u = ?");
         $select_user->execute([$fetch_review['user_id']]);
         while($fetch_user = $select_user->fetch(PDO::FETCH_ASSOC)){
      ?>
      <div class="user">
        
         <div>
            <p><?= $fetch_user['nom']; ?></p>
            <span><?= $fetch_user['email']; ?></span>
         </div>
      </div>
      <?php }; ?>
      <div class="ratings">
         <?php for($i = 1; $i <= 5; $i++){ ?>
            <p <?php if($fetch_review['rating'] >= $i){echo 'style="background:var(--main-color);"';}; ?>><i class="fas fa-star"></i> <span><?= $fetch_review['rating']; ?></span></p>
         <?php }; ?>
      </div>
      <h3 class="title"><?= $fetch_review['title']; ?></h3>
      <?php if($fetch_review['description'] != ''){ ?>
         <p class="description"><?= $fetch_review['description']; ?></p>
      <?php }; ?>  
      <?php if($fetch_review['user_id'] ==7){ ?>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="delete_id" value="<?= $fetch_review['id']; ?>">
            <a href="update_review.php?get_id=<?= $fetch_review['id']; ?>" class="inline-option-btn">Edit Review</a>
            <input type="submit" value="Delete Review" class="inline-delete-btn" name="delete_review" onclick="return confirm('Delete this review?');">
         </form>
      <?php }; ?>   
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">No reviews added yet!</p>';
      }
   ?>

   </div>

</section>

<!-- reviews section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

<?php include '../components/alers.php'; ?>

</body>
</html>
