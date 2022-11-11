<?php 

include "../models/conn.php";


if(isset($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        // create query
        $query = "DELETE FROM `accounts` WHERE id='$id'";
        $run_query = mysqli_query($conn, $query);
    
        if($run_query){
            $res = [
                'status' => 200,
                'message' => "delete successful",
            ];
            echo json_encode($res);
            return false;
        }
        else{
            $res = [
                'status' => 400,
                'message' => "delete failed",
            ];
            echo json_encode($res);
            return false;
        }
}