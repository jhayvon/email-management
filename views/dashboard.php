<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        nav {
            /* background-color: olive; */
            height: 100vh;
            min-width: 80px;
            display: inline-block;
        }

        main {
            width: 90%;
            height: 100vh;
            display: inline-block;
        }

        ul li a {
            height: 60px;
            /* background-color: aqua; */
            display: block;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
        }

        ul li a.active {
            background-color: silver;
            border-radius: 20px;
            color: white;
        }

        .card {
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- <div class="hide-nav fs-1" type="button">
        <span><i class="fa-solid fa-bars"></i></span>
    </div> -->
    <div class="container-lg container-md container-sm">

        <div class="row" style="height: 100vh;">
            <div class="col-auto border">
                <nav class="d-flex flex-column justify-content-between side-bar">
                    <ul class="list-unstyled">
                        <div class="d-flex justify-content-center my-5">
                            <img src="../assets/logo1.png" height="70" alt="">
                        </div>

                        <li>
                            <a href="dashboard.php" class="nav-item active">
                                <span class="mx-3"><i class="fa-solid fa-gauge"></i> dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pending.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-pen-to-square"></i> pending</span>
                            </a>
                        </li>
                        <li>
                            <a href="history.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-book"></i> history</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-danger">
                                <span class="ms-3"><i class="fa-solid fa-right-from-bracket"></i> logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col border-end">
                <nav class="navbar bg-light" style="height: 80px;">
                    <div class="container-fluid position-relative">
                        <span class="position-absolute end-0 mx-3 fs-5"><i class="fa-solid fa-user"></i>
                            von</span>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-12 col-sm-4 my-3">
                        <div class="card fs-5 shadow p-3 mb-5 bg-body rounded">
                            <span>pending</span>
                            <span class="d-block">2</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 my-3">
                        <div class="card fs-5 shadow p-3 mb-5 bg-body rounded">
                            <span>month approve</span>
                            <span class="d-block">2</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 my-3">
                        <div class="card fs-5 shadow p-3 mb-5 bg-body rounded">
                            <span>approve</span>
                            <span class="d-block">2</span>
                        </div>
                    </div>
                </div>

                <div class="fs-4">
                    <span class="border-bottom border-primary">
                        recent approved
                    </span>
                </div>

                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>request</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>jhayvon</td>
                                <td>create</td>
                                <td>11/11/22</td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>request</th>
                                <th>date</th>
                            </tr>
                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(".nav-item").on("click", function () {
        $(".nav-item.active").removeClass("active");
        $(this).addClass("active");
    });

    // $(".hide-nav").click(function () {
    //     $("nav").toggleClass("d-none");
    // });
</script>

</html>