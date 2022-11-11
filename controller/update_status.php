<?php 


include "../models/conn.php";

if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    
    $query = "UPDATE accounts SET status='approved' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if($result){
        $res = [
            'status' => 200,
            'message' => "updated success",
        ];
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            'status' => 400,
            'message' => "updated failed",
        ];
        echo json_encode($res);
        return false;
    }


}
