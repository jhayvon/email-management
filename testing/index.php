<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- add name trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNameModal">
  add name
</button>
<!-- add name modal -->
<div class="modal fade" id="addNameModal" tabindex="-1" aria-labelledby="addNameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formAddName">
        <div class="modal-body">
            <input type="text" name="name" id="name">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">add name</button>
        </div>
    </form>
    </div>
  </div>
</div>

<!-- edit name modal -->
<div class="modal fade" id="editNameModal" tabindex="-1" aria-labelledby="editNameModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="formEditName">
        <div class="modal-body">
            <input type="text" name="id" id="editId" class="editId">
            <input type="text" name="name" id="editName" class="editName">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">add name</button>
        </div>
    </form>
    </div>
  </div>
</div>

<table class="table" id="nameTable">
    <thead>
        <th>name</th>
        <th>action</th>

    </thead>
    <tbody>
        <?php 
        include "../models/conn.php";

        $query = "SELECT * FROM testing";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){

            foreach($result as $res){
            ?>
                <tr>
                    <td><?= $res["name"] ?></td>
                    <td>
                        <button type="button" class="delete" value="<?= $res["id"] ?>">delete</button>
                        <button type="button" class="view" data-bs-toggle="modal" data-bs-target="#editNameModal" value="<?= $res["id"] ?>">edit</button>
                    </td>
                </tr>
            <?php
            }

        }
        ?>
    </tbody>
    <tfoot>
        <th>name</th>
        <th>action</th>

    </tfoot>
</table>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $("#formAddName").on("submit", function(e){
        e.preventDefault();
        $("#addNameModal").modal("toggle");

        const formData = new FormData(this);
        formData.append("submit", true);

        $.ajax({
            type: "POST",
            url: "function.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                const res = $.parseJSON(response);
                if(res.status == 200){
                    console.log(res.message);
                    $("#nameTable").load(location.href + " #nameTable");

                }
                else{
                    console.log(res.message);
                }
            }
        });

    });
    $(".delete").on("click", function(e){
        const id = $(this).val();
        
        $.ajax({
            type: "POST",
            url: "function.php",
            data: {
                "id": id,
                "delete": true,
            },
            success: function (response) {
                const res = $.parseJSON(response);
                if(res.status == 200){
                    console.log(res.message);
                    $("#nameTable").load(location.href + " #nameTable");
                }
                else{
                    console.log(res.message);
                }
            }
        });
    });

    $(".view").on("click", function(e){
        const id = $(this).val();
        
        $.ajax({
            type: "POST",
            url: "function.php",
            data: {
                "id": id,
                "view": true,
            },
            success: function (response) {
                const res = $.parseJSON(response);
                if(res.status == 200){
                    console.log(res.name.name);
                    $("#editId").val(res.name.id);
                    $("#editName").val(res.name.name);
                }
                else{
                    console.log(res.message);
                }
            }
        });
    });

    $("#formEditName").on("submit", function(e){
        e.preventDefault();
        $("#editNameModal").modal("toggle");
        const formData = new FormData(this);
        formData.append("edit", true);

        $.ajax({
            type: "POST",
            url: "function.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                const res = $.parseJSON(response);
                if(res.status == 200){
                    console.log(res.message);

                    $("#nameTable").load(location.href + " #nameTable");

                }
                else{
                    console.log(res.message);

                    $("#nameTable").load(location.href + " #nameTable");
                }
            }
        });
    });

</script>
</body>
</html>