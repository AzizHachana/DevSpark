<?php
include '../../config/connexion.php';
include '../../controller/reclamC.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulaire</title>
  <link rel="stylesheet" href="forum.css">
</head>
<body>
<div class="container">
  <!-- Logo -->
  <div class="logo">
    <a href="#"><img src="media/logobil3orth.png" alt="Logo"></a>
  </div>
  
  <!-- Items -->
  <div class="items">
    <a href="http://www.Home.com">Home</a>
    <a href="http://www.Discover.com">Discover</a>
    <a href="http://www.SpecialDeals.com">Special Deals</a>
    <a href="http://www.contact.com">Contact</a>
    <!-- Autres items -->
  </div>
  
  <!-- Login -->
  <div class="login">
    <button type="submit">Login</button>
    <button type="submit">Sign in</button>
  </div>
</div>
<div class="containeri" >
  <!-- Votre formulaire ici -->
  <form class="join-form" method="post">
    <h1 class="main-title">reclamation</h1>
    <div class="form-group">
      <label for="first-name">Sujet </label>
      <input type="text" id="sujet" name="sujet" >
    </div>
    <div class="form-group">
      <label for="last-name">description</label>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="date_reclamtion">date</label>
      <input type="date" id="date_reclamation" name="date_reclamation" >
    </div>


    <button type="submit" class="main-button" name="submit_Add" value="Add">Submit</button>
  </form>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez le formulaire
    const form = document.querySelector('.join-form');

    // Ajoutez un écouteur d'événements sur la soumission du formulaire
    form.addEventListener('submit', function(event) {
      // Empêcher l'envoi du formulaire par défaut
      event.preventDefault();

      // Récupérez les valeurs des champs
      const sujet = document.getElementById('sujet').value;
      const description = document.getElementById('description').value;
      const dateReclamation = document.getElementById('date_reclamation').value;

      // Récupérez la date d'aujourd'hui
      const today = new Date();
      const todayFormatted = today.toISOString().slice(0, 10);

      // Validez les champs
      if (sujet.trim() === '') {
        alert('Veuillez entrer un sujet.');
        return;
      }

      if (description.trim() === '') {
        alert('Veuillez entrer une description.');
        return;
      }

      if (dateReclamation !== todayFormatted) {
        alert('La date de réclamation doit être la date d\'aujourd\'hui.');
        return;
      }
      else
      form.submit();
      // Si toutes les validations sont réussies, soumettez le formulaire
      
    });
  });


</script>
</body>
</html>