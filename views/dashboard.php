<?php

use function PHPSTORM_META\type;

include "../models/conn.php";
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
    <title>Dashboard - Deped Laguna</title>
    <?php include "../html/favicon.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


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
            background-color: #0a5fc0;
            border-radius: 20px;
            color: white;
        }

        .card {
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            overflow: scroll;
        }

        .table>thead>tr>th {
            background-color: #0a5fc0;

        }
    </style>
</head>

<body>
    <!-- <div class="hide-nav fs-1" type="button">
        <span><i class="fa-solid fa-bars"></i></span>
    </div> -->
    <div class="container-fluid">

        <div class="row" style="height: 100vh;">
            <div class="col col-2 border">
                <nav class="d-flex flex-column justify-content-between side-bar">
                    <ul class="list-unstyled">
                        <div class="d-flex justify-content-center my-5">
                            <a href="dashboard.php"> <img src="../assets/logo4.png" height="155" alt=""></a>
                        </div>
                        <hr>
                        <li>
                            <a href="dashboard.php" class="nav-item active">
                                <span class="mx-3"><i class="fa-solid fa-gauge"></i> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pending.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-pen-to-square"></i> Pending</span>
                            </a>
                        </li>
                        <li>
                            <a href="approve_track.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-calendar"></i>Summary Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="history.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-book"></i> History</span>
                            </a>
                        </li>

                    </ul>

                    <ul class="list-unstyled">
                        <hr>
                        <li>
                            <a href="../controller/logout.php" class="text-danger">
                                <span class="ms-3"><i class="fa-solid fa-right-from-bracket"></i> logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <main>
            </div>
            <div class="col border-end">
                <nav class="navbar" style="height: 80px;">
                    <div class="container-fluid position-relative">
                        <span class="position-absolute end-0 mx-3 fs-5"><i class="fa-solid fa-user"></i>
                            <?php
                            echo $_SESSION["username"];
                            ?>
                        </span>
                    </div>
                </nav>

                <div class="row">

                    <div class="col-12 col-sm-4 my-3 ">
                        <div class="card text-center text-white bg-warning fs-5 shadow p-3 mb-5">
                            <span>
                                <h2><b>Pending</b></h2>
                            </span>
                            <h3>
                                <?php

                                $sql = "SELECT COUNT(id) AS accounts_count FROM request WHERE status = 'Pending'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row['accounts_count'];
                                    }
                                }

                                ?>
                            </h3>

                        </div>
                    </div>

                    <div class="col-12 col-sm-4 my-3 ">
                        <div class="card text-center text-white bg-success fs-5 shadow p-3 mb-5 ">
                            <span>
                                <h2><b>
                                        <?php echo date("F", time()); ?> Approve
                                    </b></h2>
                            </span>
                            <h3>
                                <?php

                                // query
                                $sql = "SELECT * FROM request WHERE status='Approved' OR status = 'Rejected'";
                                $result = $conn->query($sql);
                                $count = 0;
                                // loop & condition - date month = to this month
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $timestamp = strtotime($row['updated_at']);
                                        if (date("M Y", $timestamp) == date("M Y", time())) {
                                            $count++;
                                        }
                                    }
                                }
                                // display
                                echo $count;
                                ?>
                            </h3>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4 my-3 ">
                        <div class="card text-center text-white bg-success fs-5 shadow p-3 mb-5">
                            <span>
                                <h2><b>Total Approval</b></h2>
                            </span>
                            <h3>
                                <?php

                                $sql = "SELECT COUNT(id) AS accounts_count FROM request WHERE status = 'Approved'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row['accounts_count'];
                                    }
                                }

                                ?>
                            </h3>

                        </div>
                    </div>
                    <!--                    <div class="col-12 col-sm-4 my-3">
                        <div class="card text-center text-white bg-success fs-5 shadow p-3 mb-5">
                            <span><h2><b>Approve</b></h2></span>
                            <h3>
                            <?php
                            $sql = "SELECT COUNT(id) AS accounts_count FROM request";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['accounts_count'];
                                }
                            }
                            ?>
                            </h3>
                        </div>
                    </div> -->
                </div>

                <div class="fs-4 my-5">
                    <span class="">
                        <h1>
                            Recent Approved
                        </h1>
                        <hr>
                    </span>
                </div>
                <div class="row">

                    <table class="table" id="example">
                        <thead class="text-white">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Request</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <h3>
                                <?php
                                $sql = "SELECT * FROM request WHERE status = 'Approved' ORDER BY created_at DESC LIMIT 5 ";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                    </h3>

                                    <tr>
                                        <td>
                                            <?= $row['id'] ?>
                                        </td>
                                        <td>
                                            <?= $row['firstname'] . ' ' . $row['lastname'] ?>
                                        </td>
                                        <td>
                                            <?= $row['request'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            $timestamp = strtotime($row['created_at']);
                                            echo date("M j Y", $timestamp);
                                            ?>
                                        </td>

                                    </tr>


                                    <?php
                                    }
                                }

                                ?>

                        </tbody>
                        <!--            <tbody class="text-white">
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>request</th>
                                <th>date</th>
                            </tr>
                        </tbody>
 -->
                    </table>
                </div>


            </div>
        </div>
        </main>
    </div>

</body>


<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../zoom.min.js"></script>

<script>

    $(document).ready(function () {
        $('#example').DataTable({

        });


        $(".nav-item").on("click", function () {
            $(".nav-item.active").removeClass("active");
            $(this).addClass("active");
        });

        // $(".hide-nav").click(function () {
        //     $("nav").toggleClass("d-none");
        // });

    });

</script>

</html>