<?php
    session_start();
    $errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style2.css">
  </head>
  <body>
    <!-- Navigation Bar -->
    <?php include('navbar.php'); ?>
    <!-- End Of Navigation Bar -->

    <!-- Sign Up Section -->
    <div class="container second-div col-lg-6 col-md-6">
      <div class="py-5 my-5 rounded-3" id="signup-container">
        <div class="text-center">
          <h1>Sign-up</h1>
          <p>Kindly fill in the form below correctly.</p>
        </div>
        <div class="col-lg-6 mx-auto">
          <!-- form -->
          <form action="process.php" method="post" enctype="multipart/form-data">
            <div class="px-4">
              <label for="first-name">First Name</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><img src="./assets/img/elements.png" alt="" /></span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter full Name"
                  name="fullName"
                  id="first-name"
                />
                <?php if(isset($errors["fullName"])): ?>
                            <small class="text-danger"><?php echo $errors["fullName"] ?></small>
                        <?php endif; ?>
                </div>
              <label for="email">Email</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><img src="./assets/img/elements.png" alt="" /></span>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter Email Address"
                  name="email"
                  id="email"
                />
                <?php if(isset($errors["email"])): ?>
                            <small class="text-danger"><?php echo $errors["email"] ?></small>
                        <?php endif; ?>
                </div>
              <label for="password">Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><img src="./assets/img/elements.png" alt="" /></span>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Enter Password"
                  name="pwd"
                  id="password"
                />
                <?php if(isset($errors["pwd"])): ?>
                            <small class="text-danger"><?php echo $errors["pwd"] ?></small>
                        <?php endif; ?>
                </div>
              <label for="confirm-password">Confirm Password</label>
              <div class="input-group mb-3">
                <span class="input-group-text"><img src="./assets/img/elements.png" alt="" /></span>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Confirm Password"
                  name="confirmPwd"
                  id="confirm-password"
                />
                <?php if(isset($errors["confirmPwd"])): ?>
                            <small class="text-danger"><?php echo $errors["confirmPwd"] ?></small>
                        <?php endif; ?>
                </div>
              <button type="submit" class="btn w-100 mt-2" id="login-btn" name="submit-btn">Submit</button>
            </div>
          </form>
    </div>
                </div>
<!-- starting of footer nav -->
<?php include 'footer.php';?>
<!-- end footer -->
 
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <?php
        session_unset();
        session_destroy();
    ?>
  </body>
</html>
