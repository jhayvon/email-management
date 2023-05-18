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
    <title>Pending - Deped Laguna</title>
    <?php include "../html/favicon.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cuprum&subset=latin' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
     <link rel="stylesheet" href="../assets/css/modal.css">
    <link rel="stylesheet" href="../assets/css/mainer.css">
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
                            <a href="pending.php" class="nav-item active">
                                <span class="mx-3"><i class="fa-solid fa-pen-to-square"></i> Pending</span>
                            </a>
                        </li>
                        <li>
                            <a href="approve_track.php" class="nav-item">
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
                        <span class="position-absolute end-0 mx-3 fs-5"><i class="fa-solid fa-user"></i>
                            <?php echo $_SESSION['username'] ?>
                        </span>
                    </div>
                </nav>
                <div class="my-3"></div>
                <div class="row justify-content-center">
                    <table id="example" class="table">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>School Name</th>
                            <th>Request Type</th>
                            <th>Created at</th>
                            <th>Appointment / Advice</th>
                            <th>Action</th>
                        </thead>
                        <tbody>

                            <?php

                            include "../models/conn.php";

                            $query = "SELECT * FROM `request` WHERE status= 'Pending' ORDER BY created_at DESC";
                            $result = mysqli_query($conn, $query);

                            $num = 1;
                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                                    ?>

                                    <tr>
                                        <!-- ID -->
                                        <td>
                                            <?= $num ?>
                                        </td>

                                        <!-- Name -->
                                        <td>
                                            <?= $row['firstname'] . " " . $row['lastname'] ?>
                                        </td>

                                        <!-- School Name -->
                                        <td>
                                            <?= $row['school_name'] ?>
                                        </td>

                                        <!-- Request -->
                                        <td>
                                            <?= $row['request'] ?>
                                        </td>

                                        <!-- Status -->
                                        <!--   <td>
                                    <span style="color: darkred;"><?= $row['status'] ?></span>
                                </td> -->

                                        <!-- Date Created -->
                                        <td>
                                            <?php
                                            $timestamp = strtotime($row['created_at']);
                                            echo date("M j Y - h:i:A", $timestamp);
                                            ?>
                                        </td>

                                        <!-- Appointment / Advice -->
                                        <td>
                                            <a href="<?= $row['appointment'] ?>" target="_blank"><span class="mx-3"><i
                                                        class="fa-solid fa-arrow-right"></i>
                                                    <?= $row['appointment'] ?></a>
                                        </td>

                                        <!-- Action -->
                                        <td>
                                            <button value="<?= $row['id'] ?>" class="viewAll button btnView fa-solid fa-eye"
                                                type="button" data-bs-toggle="modal" data-bs-target="#viewAllModal"></button>

                                            <button value="<?= $row['id'] ?>" class="reply button btnReply fa-solid fa-pen"
                                                type="button" data-bs-toggle="modal" data-bs-target="#replyModal"></button>

                                            <button value="<?= $row['id'] ?>" type="button"
                                                class="approve button btnapprove fa-solid fa-check"></button>

                                            <button value="<?= $row['id'] ?>" type="button"
                                                class="reject button btnreject fa-solid fa-ban"></button>

                                        </td>

                                    </tr>

                                    <?php
                                    $num++;
                                }
                            }


                            ?>
                        </tbody>
                        <tfoot class="tfoot">
                            <th>#</th>
                            <th>Name</th>
                            <th>School Name</th>
                            <th>Request Type</th>
                            <th>Created at</th>
                            <th>Appointment / Advice</th>
                            <th>Action</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- view all Modal -->
    <div class="modal fade" id="viewAllModal" tabindex="-1" aria-labelledby="viewAllModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <table class="table" style="flex-column">
                        <thead class="text-white">
                            <tr>
                                <th colspan="2">School Details</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>School ID:</td>
                            <td><b><span id="schoolId"></b></span></td>
                        </tr>
                        <tr>
                            <td>School Name:</td>
                            <td><b><span id="schoolName"></b></td>
                        </tr>
                        <tr>
                            <td>District:</td>
                            <td><b><span id="district"></b></td>
                        </tr>
                        <tr>
                            <td>School Head:</td>
                            <td><b><span id="schoolHead"></b></td>
                        </tr>
                        <tr>
                            <td>Unit/Section:</td>
                            <td><b><span id="unit"></b></td>
                        </tr>




                        <thead class="text-white">
                            <tr>
                                <th colspan="2">Employee Details</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Employee Number: </span></td>
                            <td><b><span id="employeeNumber"></b></span></td>
                        </tr>
                        <tr>
                            <td>First Name:</td>
                            <td><b><span id="firstname"></b></td>
                        </tr>
                        <tr>
                            <td>Middle Name: </td>
                            <td><b><span id="middlename"></b></td>
                        </tr>
                        <tr>
                            <td> Last Name: </td>
                            <td><b><span id="lastname"></b></td>
                        </tr>
                        <tr>
                            <td>Personal Email: </td>
                            <td><b><span id="personalEmail"></b></td>
                        </tr>
                        <tr>
                            <td>DepEd Email: </td>
                            <td><b><span id="depedEmail"></b></td>
                        </tr>
                        <tr>
                            <td>Phone Number: </td>
                            <td><b><span id="phoneNumber"></b></td>
                        </tr>

                        <hr>

                        <thead class="text-white">
                            <tr>
                                <th colspan="2">Request Details</th>
                            </tr>
                        </thead>

                        <tr>
                            <td>Request Type:</td>
                            <td><b><span id="request"></b></span></td>
                        </tr>
                        <tr>
                            <td>Request Status:</td>
                            <td><b><span id="status" style="color: darkred;"></span></b></td>
                        </tr>

                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Modal -->
    <div class="container">
    <div class="row justify-content-center">
        <div id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
                <div class="tabbable">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item active">
                            <b class="tabs active" id="tab01">
                                <h6 class="font-weight-bold">Reply Panel</h6>
                             </b>
                        </li>
                    </ul>
                </div>

                    </div>

                     <div class="line"></div>

                    <div class="modal-body p-0">
                        <input type="text" id="id" class="d-none">
                       <div class="container1">
                            <fieldset class="show" id="tab011">
                                <div class="bg-light" >
                                    <h4 class="text-center mb-4 mt-0 pt-4">Account Creation Reply</h4>
                                    <div id="reply_create" class="reply1" style="word-wrap: break-word;">
                                    <form action="" method="post" id="formReply">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label"><b>Recipient:</b></label>
                                                    <input type="text" class="form-control" name="recipient-email" id="recipient-email" value=" ">
                                                </div>

                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label"><b>Message:</b></label>
                                                    <textarea class="form-control" name="message-text" id="message-text" rows="19" word-wrap> 
Please click the link below for your feedback:
                                                        
https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FF3PKV3tp4WQEaet16%3Ffbclid%3DIwAR1KBXO5ay-2w3fEp30u5SHovd6-j-GZNvKKEVkpUKskEXoSKPC2z9a7aYQ&h=AT3dctitvUghRBr_mkQZ5n8wnUKunCiEe05LSMSJnfXhCzCf4Le4LnJJXNy8U4PZarUhfuj3AIE9I-4m-xme4PjtL-UwXqCmUOvYrlBAMtQxvPKRx99puBrW9aOQihyS8aV330v24V53luk

Your request for (--Request Type--) has been approved. You may now log-in to your deped gmail account through this link: https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin
Using the following credentials:

                            Username:
                            Password:

Go to depedlaguna.com.ph > Issuances > Division Memorandum > DM 2018 DM 185 s.2018 Corrigendum to Division Memorandum No.151 s.2018 DM 151 s.2018 Procedure for Deped Gmail Accoun Request.
Thank you and God bless.                            
                                                    </textarea>
                                                </div>
                                                
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="send" class="btnEmail btn-primary">Send Email</button>
                            </div>
                                    </form>
                                    </div>

                                </div>
                            </fieldset>
                    </div> 
                    </div>
                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="../zoom.min.js"></script>

<script>

    


    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
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
                    $("#recipient-email").val(res.email);
                }
            }
        });
    });

    $(".btnEmail").on("click", function () {

        let id = $("#id").val();  
        let email = $("#recipient-email").val();
        let message = $("#message-text").val();
        let url = "action/reply.php";

        $.ajax({
            type: "POST",
            url: url,
            data: {
                "id": id,
                "email": email,
                "message": message
                },
                success: function (response) {
                    let res = $.parseJSON(response);
                    if (res.status == 200) {
                        $("#email-sent").text("Email Sent");
                        $("#email-sent").show();
                    }
                }
                
        });
    });


    $(".approve").on("click", function () {
        if (confirm("Approve Request? ")) {
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
                        setTimeout(function () { location.reload() }, 1500);
                    }
                }
            });
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Request Approved',
                showConfirmButton: false,
                timer: 1500
            });
        } else {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Approval Cancelled!',
                showConfirmButton: false,
                timer: 1500
            })
        }

    });

    $(".reject").on("click", function () {
        if (confirm("Reject Request? ")) {
            let id = $(this).val();
            $.ajax({
                type: "POST",
                url: "../controller/reject_request.php",
                data: {
                    "id": id,
                },
                success: function (response) {
                    let res = $.parseJSON(response);
                    if (res.status == 200) {
                        setTimeout(function () { location.reload() }, 2000);
                    }
                }
            });
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Request Rejected',
                showConfirmButton: false,
                timer: 2000
            });
        } else {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Rejection Cancelled!',
                showConfirmButton: false,
                timer: 2000
            })
        }

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
    };

    $(document).ready(function(){
        $(".tabs").click(function(){
                    $(".tabs").removeClass("active");
                    $(".tabs h6").removeClass("font-weight-bold");
                    $(".tabs h6").addClass("text-muted");
                    $(this).children("h6").removeClass("text-muted");
                    $(this).children("h6").addClass("font-weight-bold");
                    $(this).addClass("active");
                    current_fs = $(".active");
                    next_fs = $(this).attr('id');
                    next_fs = "#" + next_fs + "1";
                    $("fieldset").removeClass("show");
                    $(next_fs).addClass("show");

                    current_fs.animate({}, {
                    step: function() {
                    current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                    });
                    next_fs.css({
                    'display': 'block'
                });
            }
        });
    });
});

</script>

</html>

