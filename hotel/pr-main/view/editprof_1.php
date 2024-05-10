<?php
include '../Controller/HotelC.php';
$hotelC = new HotelC();

$error = "";

$hotel = null;

if (
    isset($_POST["Nom"]) &&
    isset($_POST["Adresse"]) &&
    isset($_POST["Ville"]) &&
    isset($_POST["Code_postal"]) &&
    isset($_POST["Pays"]) &&
    isset($_POST["Tel"]) &&
    isset($_POST["Email"]) 
    
) {
    if (
        !empty($_POST['Nom']) &&
        !empty($_POST["Adresse"]) &&
        !empty($_POST["Ville"]) &&
        !empty($_POST["Code_postal"]) &&
        !empty($_POST["Pays"]) &&
        !empty($_POST["Tel"])&&
        !empty($_POST["Email"])
    ) {

        // Test if the user chose a new image or kept the old one
        if ($_FILES["image"]["size"] != 0) {
            // rename the image before saving to database
            $original_name = $_FILES["image"]["name"];
            $imageName = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES["image"]["tmp_name"], "./images/uploads/" . $imageName);
            // remove the old image from uploads directory
            unlink("./images/uploads/" . $_POST["image_old"]);
        } else {
            $imageName = $_POST["image_old"];
        }

        $hotel = new Hotel(
            null,
            $_POST["Nom"],
            $_POST["Adresse"],
            $_POST["Ville"],
            $_POST["Code_postal"],
            $_POST["Pays"],
            $_POST["Tel"],
            $_POST["Email"],
            $imageName
        );

        $hotelC->updatehotel($hotel, $_POST['id']);

        header('Location:listhotel.php');
    } else {
        $error = "Missing information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            $hotel = $hotelC->gethotel($_GET['id']); // Récupère les informations du professeur à mettre à jour
            if ($hotel) {
        ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="updatehotelModalLabel">Update hotel</h5>
                </div>
                <div class="modal-body">
                    <div id="error">
                        <?php echo $error; ?>
                    </div>
                    <form method="POST" id="updateForm" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="Nom" value="<?php echo $hotel['Nom']; ?>">
                            </div>
                            <div class="col">
                                <label class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="Adresse" value="<?php echo $hotel['Adresse']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Ville</label>
                                <input type="text" class="form-control" name="Ville" value="<?php echo $hotel['Ville']; ?>">
                            </div>
                            <div class="col">
                                <label class="form-label">Code_postal</label>
                                <input type="text" class="form-control" name="Code_postal" value="<?php echo $hotel['Code_postal']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Pays</label>
                                <input type="text" class="form-control" name="Pays" value="<?php echo $hotel['Pays']; ?>">
                            </div>
                            <div class="col">
                                <label class="form-label">Tel</label>
                                <input type="text" class="form-control" name="Tel" value="<?php echo $photel['Tel']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <input type="hidden" name="image_old" value="<?php echo $professeur['image']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <img src="./images/uploads/<?php echo $professeur['image']; ?>" alt="Professeur Image" style="max-width: 100px;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
        <?php
            } else {
                echo "hotel non trouvé.";
            }
        }
        ?>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
