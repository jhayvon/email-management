<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deped Laguna</title>
    <link rel="icon" href="assets/logo1.png">
    <link rel="stylesheet" href="assets/css/logo.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- bootstrap cdn css only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid d-flex justify-content-start">
            <a href="index.php"><img src="assets/logo1.png" width="60" height="60" alt="logo"></a>
            <div class="navbar-brand mx-3 fs-4" href="index.php">DEPED LAGUNA</a>
        </div>
    </nav>
    <main>
        <div class="btn-container border mt-3">
            <div class="mb-3">
                <p class="fs-4">REQUEST EMAIL ACCOUNT</p>
                <a href="views/req_email.php" class="btn btn-large btn-primary index-btn fs-6">
                    <i class="fa-solid fa-arrow-right"></i> Request
                </a>
            </div>
            <div class="mb-3">
                <p class="fs-4">ADMIN PORTAL</p>
                <a aria-disabled="true" href="views/login.php" class="btn btn-large btn-primary index-btn fs-6">
                    <i class="fa-solid fa-lock"></i> Login
                </a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>