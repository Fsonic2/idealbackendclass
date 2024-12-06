<?php
session_start();
$errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea Backend Dev</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>
<body>
      <!-- Navigation Bar -->
     <?php include 'navbar.php' ;?>  
    <!-- End Of Navigation Bar -->
    
    <div class="section">
      <div class="container first-div pt-5">
      
      </div>
    </div>
<!-- starting of footer nav -->
<?php include 'footer.php';?>
<!-- end footer -->
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<?php 
session_destroy();
session_unset();
?>

</body>
</html>