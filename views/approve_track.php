<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    die();
}
include "../models/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending - Deped Laguna</title>
    <?php include "../html/favicon.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cuprum&subset=latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">


    <style>
        nav {
            /* background-color: olive; */
            height: 100vh;
            min-width: 80px;
            display: inline-block;
        }

        .navbar {
            min-width: 80px;
        }

        main {
            width: 90%;
            height: 100vh;
            display: inline-block;
        }

        div .borderIn {
            border-radius: 5px;
            border-style: none;
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

            width: 100%;

        }

        table .id {
            background-color: #0a5fc0;
        }

        .table>thead {
            background-color: #0a5fc0;
            text-align: center;
            color: white;
        }

        .table>thead>tr>td {
            background-color: #0a5fc0;
            text-align: center;
            color: white;
        }

        .table>tbody>tr>td {
            background-color: whitesmoke;
            text-align: center;
            color: black;
            font-style: bold;
        }

        .tfoot {
            background-color: #0a5fc0;
            text-align: center;
            color: white;
        }

        button {
            border: 5px;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            cursor: pointer;
            border-radius: 5px;
            background-color: #0a5fc2;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .button:hover {
            background-color: #0a5fc0;
            color: white;
        }


        .btnapprove {
            background-color: green;
        }

        .btndel {
            background-color: red;
        }

        .btnReply {
            background-color: darkcyan;
        }

        .btnView {
            background-color: blue;
        }

        .btnClose {
            background-color: red;
            color: white;
        }

        span .id {
            align-items: center;

            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-2 border">
                <nav class="d-flex flex-column justify-content-between side-bar">
                    <ul class="list-unstyled">
                        <div class="d-flex justify-content-center my-5">
                            <a href="dashboard.php"> <img src="../assets/logo4.png" height="155" alt=""></a>
                        </div>
                        <hr>
                        <li>
                            <a href="dashboard.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-gauge"></i> Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pending.php" class="nav-item ">
                                <span class="mx-3"><i class="fa-solid fa-pen-to-square"></i> Pending</span>
                            </a>
                        </li>
                        <li>
                            <a href="approve_track.php" class="nav-item active">
                                <span class="mx-3"><i class="fa-solid fa-calendar"></i> Summary Report</span>
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
                                <span class="ms-3"><i class="fa-solid fa-right-from-bracket"></i> Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col borderIn">
                <nav class="navbar" style="height: 80px;">
                    <div class="container-fluid position-relative">
                        <span class="position-absolute end-0 mx-5 fs-5"><i class="fa-solid fa-user"></i>
                            <?php echo $_SESSION['username'] ?>
                        </span>
                    </div>
                </nav>
                <div class="my-3"></div>
                <div class="row justify-content-center">
                    <table id="example" class="table">
                        <thead>
                            <th>Month</th>
                            <th>Create</th>
                            <th>Suspend</th>
                            <th>Delete</th>
                            <th>Reset Password</th>
                            <th>Transfer</th>
                            <th>Change of Status</th>
                            <th>Total</th>
                        </thead>
                        <tbody>

                            <tr>
                                <th>January</th>

                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-01-01 00:00:00' AND '2023-01-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>


                            </tr>

                            <tr>
                                <th>February</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-02-01 00:00:00' AND '2023-02-28 23:59:59' ) ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                            </tr>

                            <tr>

                                <th>March</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-03-01 00:00:00' AND '2023-03-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <th>April</th>


                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-30 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved' OR `status` = 'Rejected') AND (`updated_at` BETWEEN '2023-04-01 00:00:00' AND '2023-04-31 23:59:59')";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>May</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-05-01 00:00:00' AND '2023-05-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>




                            </tr>
                            <tr>
                                <th>June</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-06-01 00:00:00' AND '2023-06-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>July</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved' )";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') AND (`status` = 'Approved')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-07-01 00:00:00' AND '2023-07-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>August</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-08-01 00:00:00' AND '2023-08-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>September</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-09-01 00:00:00' AND '2023-09-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>October</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-10-01 00:00:00' AND '2023-10-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>November</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-11-01 00:00:00' AND '2023-11-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>
                            <tr>
                                <th>December</th>
                                <!-- Create -->
                                <td>
                                    <?php

                                    $queryCreate = "SELECT COUNT(request) FROM `request` WHERE (request = 'Create') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $create = mysqli_query($conn, $queryCreate);

                                    $cc = mysqli_fetch_array($create);
                                    echo $cc[0];
                                    ?>

                                </td>

                                <!-- Suspend   -->
                                <td>
                                    <?php
                                    $querySus = "SELECT COUNT(request) FROM `request` WHERE (request = 'Suspend') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $susp = mysqli_query($conn, $querySus);

                                    $sus = mysqli_fetch_array($susp);
                                    echo $sus[0];
                                    ?>
                                </td>


                                <!-- Delete -->
                                <td>
                                    <?php
                                    $querydel = "SELECT COUNT(request) FROM `request` WHERE (request = 'Delete') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $delete = mysqli_query($conn, $querydel);

                                    $dele = mysqli_fetch_array($delete);
                                    echo $dele[0];
                                    ?>


                                </td>

                                <!-- Reset Password    -->
                                <td>
                                    <?php
                                    $queryRp = "SELECT COUNT(request) FROM `request` WHERE (request = 'Reset Password') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $resPas = mysqli_query($conn, $queryRp);

                                    $rs = mysqli_fetch_array($resPas);
                                    echo $rs[0];
                                    ?>

                                </td>


                                <!-- Transfer -->
                                <td>

                                    <?php

                                    $queryTrans = "SELECT COUNT(request) FROM `request` WHERE (request = 'Transfer') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $trans = mysqli_query($conn, $queryTrans);

                                    $tr = mysqli_fetch_array($trans);
                                    echo $tr[0];
                                    ?>

                                </td>

                                <!-- Change of Status    -->
                                <td>

                                    <?php
                                    $queryCoS = "SELECT COUNT(request) FROM `request` WHERE (request = 'Change of Status') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') AND (`status` = 'Approved' OR `status` = 'Rejected')";

                                    $Change = mysqli_query($conn, $queryCoS);

                                    $cos = mysqli_fetch_array($Change);
                                    echo $cos[0];
                                    ?>
                                </td>


                                <!-- Total -->
                                <td>
                                    <?php
                                    $queryTotal = "SELECT COUNT(request) FROM `request` WHERE (`status` = 'Approved') AND (`updated_at` BETWEEN '2023-12-01 00:00:00' AND '2023-12-31 23:59:59') ";

                                    $jTotal = mysqli_query($conn, $queryTotal);

                                    $jt = mysqli_fetch_array($jTotal);
                                    echo $jt[0];
                                    ?>
                                </td>

                            </tr>

                            <?php
                            // $num++;
                            // }
                            // }
                            

                            ?>
                        </tbody>
                        <tfoot class="tfoot">
                            <th>Month</th>
                            <th>Create</th>
                            <th>Suspend</th>
                            <th>Delete</th>
                            <th>Reset Password</th>
                            <th>Transfer</th>
                            <th>Change of Status</th>
                            <th>Total</th>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
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
<script src="sweetalert2/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="../zoom.min.js"></script>

<script>

    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            bSort: false,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    })

</script>

</html>