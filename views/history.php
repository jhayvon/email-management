<?php 

session_start();

if(!isset($_SESSION["username"])){
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>

<body>
    <?php include "../html/nav.php"?>
    <div class="container">
        <nav>
            <ul>
                <li class="mb-3">
                    <a href="dashboard.php">dashboard</a>
                </li>
                <li class="mb-3">
                    <a href="pending.php">pending</a>
                </li>
                <li class="mb-3">
                    <a href="history.php">history</a>
                </li>
                <li class="mb-3">
                    <a href="../controller/logout.php">logout</a>
                </li>
            </ul>
        </nav>
        <main>
            <table id="example">
                <thead>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>request</th>
                    <th>action</th>
                    <th>approved at</th>
                    <th>approved by</th>
                </thead>
                <tbody>
                <?php
                include "../models/conn.php";

                $query = "SELECT * FROM `request` WHERE status='approved'";
                $result = mysqli_query($conn, $query);
                $num = 1;
                if(mysqli_num_rows($result)>0){
                    foreach($result as $row){
                        ?>
                        
                        <tr>
                            <td><?= $num ?></td>
                            <td><?= $row['firstname']." ".$row['lastname'] ?></td>
                            <td>
                                <a href="<?= $row['appointment'] ?>" target="_blank">view</a>
                                
                            </td>
                            <td><?= $row['request'] ?></td>
                            <td>
                                <button value="<?= $row['id'] ?>" class="viewAll btn text-primary" type="button" data-bs-toggle="modal" data-bs-target="#viewAllModal">view</button>
                            </td>
                            <td><?= $row['updated_at'] ?></td>
                            <td><?= $row['approved_by'] ?></td>

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
                    <th>email</th>
                    <th>request</th>
                    <th>action</th>
                    <th>approved at</th>
                    <th>approved by</th>

                </tfoot>
            </table>
        </main>
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

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(".viewAll").on("click", function(){
        let id = $(this).val();

        $.ajax({
            type: "POST",
            url: "../controller/view_all.php",
            data: {
                "id": id,
            },
            success: function (response) {
                let res = $.parseJSON(response);
                if(res.status == 200){
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
    
</script>

</html>