<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        nav {
            width: 256px;
            height: 100vh;
        }

        .nav-content ul li a {
            text-decoration: none;
            display: inline-block;
            margin: 10px 0;
        }

        .nav-content ul li:hover {
            background-color: black;
            color: white;
            border-radius: 10px;
        }

        .nav-content ul li a {
            color: inherit;

        }
    </style>
</head>

<body>
    <nav class="border">
        <div class="nav-head px-2">
            <h1>LOGO</h1>
        </div>
        <div class="nav-content">
            <ul class="list-unstyled">
                <li>
                    <a href="dashboard.php" class="mx-2"><i class="fa-solid fa-gauge"></i> DASHBOARD</a>
                </li>
                <li>
                    <a href="pending.php"><i class="fa-solid fa-pen-to-square mx-2"></i> PENDING</a>
                </li>
                <li>
                    <a href="history.php"><i class="fa-solid fa-book mx-2"></i> HISTORY</a>
                </li>
            </ul>
        </div>
        <div class="nav-foot">

        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>