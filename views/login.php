<?php 
session_start();

if(isset($_SESSION["username"])){
  header("Location: dashboard.php");
  die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deped Laguna</title>
  <?php include "../html/favicon.php" ?>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap script -->
  <script rc="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- local style -->
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/css/logo.css">
</head>

<body>
  <?php include "../html/nav.php"?>
  <main>
    <div class="form-container border">
      <div class="text-center">
        <img src="../assets/avatar.jpg" class="rounded" height="100" width="100" alt="">
      </div>
      <p class="fs-4 text-center">Admin Portal</p>

      <form method="post" id="loginForm">

        <div class="my-3">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" class="form-control" placeholder="Username" autocomplete="off" required>
          <div id="unameError" class="form-text text-danger d-none">invalid username</div>
        </div>
        <div class="my-3">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Password" autocomplete="off" required>
          <div id="pwordError" class="form-text text-danger d-none">wrong password</div>
        </div>
        <div class="m-3 d-flex justify-content-center">
          <button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>
        </div>
      </form>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function () {
          // add onclick event
          $('#loginForm').on('submit', function (e) {
              e.preventDefault();
              const formData = new FormData(this);
              formData.append("submit", true);

              $.ajax({
                  url: "../controller/login_function.php",
                  type: "POST",
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function (response) {
                      const res = $.parseJSON(response);

                      if(res.status == 200){
                        window.location.href = 'dashboard.php';
                      }

                      if(res.status == 400){
                        if(res.unameError == true){
                          $("#unameError").removeClass("d-none");
                        }
                        if(res.pwordError == true){
                          $("#pwordError").removeClass("d-none");
                        }
                        // $("#message").text(res.message);
                      }
                  }
              });

          });
      });
    </script>
</body>
</html>