<?php 


include "../models/conn.php";

if(isset($_POST["submit"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $query = "INSERT INTO testing (name) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    
    if($result){
        $res = [
            "status" => 200,
            "message" => "insert success!",
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            "status" => 400,
            "message" => "insert failed!",
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST["delete"])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $query = "DELETE FROM testing WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    
    if($result){
        $res = [
            "status" => 200,
            "message" => "delete success!",
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            "status" => 400,
            "message" => "delete failed!",
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST["view"])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $query = "SELECT * FROM testing WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $name = mysqli_fetch_array($result);
    if($result){
        $res = [
            "status" => 200,
            "message" => "delete success!",
            "name" => $name,
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            "status" => 400,
            "message" => "delete failed!",
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST["edit"])){
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);

    $query = "UPDATE testing SET name ='$name' WHERE id='$id'";
    
    $result = mysqli_query($conn, $query);
    if($result){
        $res = [
            "status" => 200,
            "message" => "update success!",
            "name" => $name,
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            "status" => 400,
            "message" => "update failed!",
        ];
        echo json_encode($res);
        return;
    }
}