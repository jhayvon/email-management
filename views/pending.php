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
    <?php include "../html/favicon.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
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
    <div class="container-lg container-md container-sm">
        <div class="row">
            <div class="col-auto border">
                <nav class="d-flex flex-column justify-content-between side-bar">
                    <ul class="list-unstyled">
                        <div class="d-flex justify-content-center my-5">
                            <img src="../assets/logo1.png" height="70" alt="">
                        </div>

                        <li>
                            <a href="dashboard.php" class="nav-item">
                                <span class="mx-3"><i class="fa-solid fa-gauge"></i> dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="pending.php" class="nav-item active">
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
                <div class="my-3"></div>
                <div class="row">
                    <table id="example">
                        <thead>
                            <th>#</th>
                            <th>name</th>
                            <th>Appointment / Advice</th>
                            <th>request</th>
                            <th>action</th>
                            <th>created at</th>
                        </thead>
                        <tbody>
                            <?php

                            include "../models/conn.php";

                            $query = "SELECT * FROM `request` WHERE status='pending'";
                            $result = mysqli_query($conn, $query);
                            $num = 1;
                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                            ?>

                            <tr>
                                <td>
                                    <?= $num ?>
                                </td>
                                <td>
                                    <?= $row['firstname'] . " " . $row['lastname'] ?>
                                </td>
                                <td>
                                    <a href="<?= $row['appointment'] ?>" target="_blank">view</a>

                                </td>
                                <td>
                                    <?= $row['request'] ?>
                                </td>
                                <td>
                                    <button value="<?= $row['id'] ?>" class="viewAll btn text-primary" type="button"
                                        data-bs-toggle="modal" data-bs-target="#viewAllModal">view</button>
                                    <button value="<?= $row['id'] ?>" class="reply btn text-primary" type="button"
                                        data-bs-toggle="modal" data-bs-target="#replyModal">reply</button>
                                    <button value="<?= $row['id'] ?>" class="approve btn text-primary">approve</button>
                                </td>
                                <td>
                                    <?= $row['created_at'] ?>
                                </td>

                            </tr>

                            <?php
                                    $num++;
                                }
                            }


                            ?>
                        </tbody>
                        <tfoot>
                            <th>#</th>
                            <th>name</th>
                            <th>Appointment / Advice</th>
                            <th>request</th>
                            <th>action</th>
                            <th>created at</th>

                        </tfoot>
                    </table>

                </div>


            </div>
        </div>
    </div>

    <!-- view all Modal -->
    <div class="modal fade" id="viewAllModal" tabindex="-1" aria-labelledby="viewAllModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>School ID: <span id="schoolId"></span></p>
                    <p>School Name: <span id="schoolName"></span></p>
                    <p>District: <span id="district"></span></p>
                    <p>School Head: <span id="schoolHead"></span></p>
                    <p>Unit/Section: <span id="unit"></span></p>
                    <p>Employee Number: <span id="employeeNumber"></span></p>
                    <p>First Name: <span id="firstname"></span></p>
                    <p>Middle Name: <span id="middlename"></span></p>
                    <p>Last Name: <span id="lastname"></span></p>
                    <p>Personal Email: <span id="personalEmail"></span></p>
                    <p>Deped Email: <span id="depedEmail"></span></p>
                    <p>Phone Number: <span id="phoneNumber"></span></p>
                    <p>Request: <span id="request"></span></p>
                    <p>Status: <span id="status"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="replyModal" style="overflow: wrap;" tabindex="-1" aria-labelledby="replyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Replies</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="id" class="d-none">
                    <!-- reply for create -->
                    <div id="reply_create" class="" style="word-wrap: break-word;">
                        <p><b>Please click the link below for your feedback:</b></p>
                        <p>https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FF3PKV3tp4WQEaet16%3Ffbclid%3DIwAR1KBXO5ay-2w3fEp30u5SHovd6-j-GZNvKKEVkpUKskEXoSKPC2z9a7aYQ&h=AT3dctitvUghRBr_mkQZ5n8wnUKunCiEe05LSMSJnfXhCzCf4Le4LnJJXNy8U4PZarUhfuj3AIE9I-4m-xme4PjtL-UwXqCmUOvYrlBAMtQxvPKRx99puBrW9aOQihyS8aV330v24V53luk
                        </p>
                        <p><b>Your request for DepEd Gmail Account has been approved. You may now log-in to your
                                deped gmail account through this link
                                https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin
                                using the following details:</b></p>
                        <p style="margin-left: 40px;"><b>Username: <span class="reply_email"></span></b></p>
                        <p style="margin-left: 40px;"><b>Password: <span class="reply_password"></span></b></p>
                        <p><b>References:</b></p>
                        <p><b>Go to depedlaguna.com.ph > Issuances > Division Memorandum > DM 2018</b></p>
                        <p style="margin-left: 40px;"><b>DM 185 s.2018 Corrigendum to Division Memorandum No.
                                151 s.2018</b></p>
                        <p style="margin-left: 40px;"><b>DM 151 s.2018 Procedure for Deped Gmail Account
                                Request</b></p>
                        <p style="margin-left: 40px;"><b>Thank you and God bless.</b></p>
                    </div>
                    <button onclick="CopyToClipboard('reply_create')" class="btn btn-success mb-3">copy
                        creation</button>

                    <!-- reply for reset -->
                    <div id="reply_reset" class="" style="word-wrap: break-word;">
                        <p><b>Please click the link below for your feedback:</b></p>
                        <p>https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FF3PKV3tp4WQEaet16%3Ffbclid%3DIwAR1KBXO5ay-2w3fEp30u5SHovd6-j-GZNvKKEVkpUKskEXoSKPC2z9a7aYQ&h=AT3dctitvUghRBr_mkQZ5n8wnUKunCiEe05LSMSJnfXhCzCf4Le4LnJJXNy8U4PZarUhfuj3AIE9I-4m-xme4PjtL-UwXqCmUOvYrlBAMtQxvPKRx99puBrW9aOQihyS8aV330v24V53luk
                        </p>
                        <p><b>Your request for reset Account has been approved. You may now log-in to your deped
                                gmail account through this link
                                https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin
                                using the following details:</b></p>
                        <p style="margin-left: 40px;"><b>Username: <span class="reply_email"></span></b></p>
                        <p style="margin-left: 40px;"><b>Password: <span class="reply_password"></span></b></p>
                        <p><b>References:</b></p>
                        <p><b>Go to depedlaguna.com.ph > Issuances > Division Memorandum > DM 2018</b></p>
                        <p style="margin-left: 40px;"><b>DM 185 s.2018 Corrigendum to Division Memorandum No.
                                151 s.2018</b></p>
                        <p style="margin-left: 40px;"><b>DM 151 s.2018 Procedure for Deped Gmail Account
                                Request</b></p>
                        <p style="margin-left: 40px;"><b>Thank you and God bless.</b></p>
                    </div>
                    <button onclick="CopyToClipboard('reply_reset')" class="btn btn-success">copy reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mb-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../zoom.min.js"></script>
<script>

    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(".viewAll").on("click", function () {
        let id = $(this).val();

        $.ajax({
            type: "POST",
            url: "../controller/view_all.php",
            data: {
                "id": id,
            },
            success: function (response) {
                let res = $.parseJSON(response);
                if (res.status == 200) {
                    $("#schoolId").text(res.school_id);
                    $("#schoolName").text(res.school_name);
                    $("#district").text(res.district);
                    $("#schoolHead").text(res.school_head);
                    $("#unit").text(res.unit_section);
                    $("#employeeNumber").text(res.employee_number);
                    $("#firstname").text(res.firstname);
                    $("#middlename").text(res.middlename);
                    $("#lastname").text(res.lastname);
                    $("#personalEmail").text(res.personal_email);
                    $("#depedEmail").text(res.deped_email);
                    $("#phoneNumber").text(res.phone_number);
                    $("#request").text(res.request);
                    $("#status").text(res.request_status);
                }
            }
        });

    });

    $(".reply").on("click", function () {

        // set input #id value 
        $("#id").val($(this).val());

        // get the input #id value
        let id = $("#id").val();

        $.ajax({
            type: "POST",
            url: "../replies/create.php",
            data: {
                "id": id,
            },
            success: function (response) {
                let res = $.parseJSON(response);
                if (res.status == 200) {
                    $(".reply_email").text(res.username);
                    $(".reply_password").text(res.password);
                }
            }
        });


    });

    $(".approve").on("click", function () {
        let id = $(this).val();
        $.ajax({
            type: "POST",
            url: "../controller/approve_request.php",
            data: {
                "id": id,
            },
            success: function (response) {
                let res = $.parseJSON(response);
                if (res.status == 200) {
                    location.reload();
                }
            }
        });

    });

    function CopyToClipboard(containerid) {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById(containerid));
            range.select().createTextRange();
            document.execCommand("copy");
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById(containerid));
            window.getSelection().addRange(range);
            document.execCommand("copy");
        }
    }


</script>

</html>