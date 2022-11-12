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
                    <a href="dashboard.php" class="">dashboard</a>
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
            <div class="card text-center mb-5">
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="card text-center text-white bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Pending</h5>
                        <p class="card-text h1 ">
                            
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center text-white bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Current Month Approved</h5>
                        <p class="card-text h1 ">34</p>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center text-white bg-success" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Overall Approved</h5>
                        
                        <p class="card-text h1 ">34</p>
                        
                                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center text-white bg-primary" style="width: 18rem; height: 4rem;" type="button">
                <div class="card-body">
                    <p>Download current month report</p>
                </div>
            </div>
        </main>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
        $('#approvedTable').DataTable();
    });
    
    function copy() {
        var range = document.createRange();
        range.selectNode(document.querySelector(".reply"));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect
        
    }

    $(".btnApprove").on("click", function () { 

        let id = $(this).val();
        $.ajax({
            type: "POST",
            url: "../controller/update_status.php",
            data: {
                id: id,
            },
            success: function (response) {
                let res = $.parseJSON(response);
                if(res.status == 200){
                    console.log(res.message);
                    $("#example").load(location.href + " #example");
                }
                else{
                    console.log(res.message);
                }
            }
        });
        // copy();
        // $('#approveModal').modal('toggle');
        // $.ajax({
        //     type: "POST",
        //     url: "../controller/update_status.php",
        //     data: {
        //         id: id,
        //     },
        //     success: function (response) {
        //         let res = $.parseJSON(response);
        //         // $("#example").load(location.href + " #example");

        //     }
        // });
     });

    //  $(".btnDelete").on("click", function(){
    //     let id = $(this).val();
    //     $.ajax({
    //         type: "POST",
    //         url: "../controller/delete_account.php",
    //         data: {
    //             "id": id,
    //         },
    //         success: function (response) {
    //             let res = $.parseJSON(response);
    //             if(res.status == 200){
    //                 console.log(res.message);
    //                 $("#example").load(location.href + " #example");
    //             }
    //             else{
    //                 console.log(res.message);
    //             }
    //         }
    //     });
    //  });
</script>

</html>