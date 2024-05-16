<?php

include '../components/connect.php';

if(isset($_GET['event_id'])){
   $event_id = $_GET['event_id'];
}else{
   $event_id = '';
   header('location:../view/review2.php');
}

if(isset($_POST['submit'])){

  
    $id = $_POST['id'];
     $user_id=7;
      $title = $_POST['title'];
      $title = filter_var($title, FILTER_SANITIZE_STRING);
      $description = $_POST['description'];
      $description = filter_var($description, FILTER_SANITIZE_STRING);
      $rating = $_POST['rating'];
      $rating = filter_var($rating, FILTER_SANITIZE_STRING);

      $verify_review = $conn->prepare("SELECT * FROM `reviews` WHERE event_id = ? AND user_id = ?");
      $verify_review->execute([$event_id,$user_id]);

      if($verify_review->rowCount() > 0){
         $warning_msg[] = 'Your review already added!';
      }else{
         $add_review = $conn->prepare("INSERT INTO `reviews`(id, event_id, user_id, rating, title, description) VALUES(?,?,?,?,?,?)");
         $add_review->execute([$id,$event_id, $user_id, $rating, $title, $description]);
         $success_msg[] = 'Review added!';
      }
      header('location:../view/review2.php');


   }else{
      $warning_msg[] = 'Please login first!';
   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Review</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../view/style2.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include '../components/header.php'; ?>
<!-- header section ends -->

<!-- add review section starts  -->

<section class="account-form">

   <form action="" method="post">
      <h3>Post Your Review</h3>
      <p class="placeholder">Review ID <span>*</span></p>
      <input type="number" name="id" required maxlength="50" placeholder="Enter review ID" class="box">
      <p class="placeholder">Review Title <span>*</span></p>
      <input type="text" name="title" required maxlength="50" placeholder="Enter review title" class="box">
      <p class="placeholder">Review Description</p>
      <textarea name="description" class="box" placeholder="Enter review description" maxlength="1000" cols="30" rows="10"></textarea>
      <p class="placeholder">Review Rating <span>*</span></p>
      <select name="rating" class="box" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>
      <input type="submit" value="Submit Review" name="submit" class="btn" >
      <a href="../view/review2.php" class="option-btn">Go Back</a>
   </form>

</section>

<!-- add review section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>


</body>
</html>
