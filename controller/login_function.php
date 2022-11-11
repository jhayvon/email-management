<?php

session_start();

include "../models/conn.php";

// get variables
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // create query
    // $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    // $result = mysqli_query($conn, $query);

    // check if uname exist
    $checkUname = "SELECT * FROM admin WHERE username = '$username' ";
    $unameResult = mysqli_query($conn, $checkUname); 
    if(mysqli_num_rows($unameResult) > 0){
        // check if uname password match with password 
        foreach($unameResult as $ures){
            $id = $ures["id"];
            $checkPassword = "SELECT * FROM admin WHERE id = '$id' ";
            $pwordResult = mysqli_query($conn, $checkPassword); 
            foreach($pwordResult as $pres){
                if($pres["password"] == $password){
                    $_SESSION['username'] = $username;
                    $res = [
                        'status' => 200,
                        'message' => "login success",
                    ];
                    echo json_encode($res);
                    return false;
                }
                if($pres["password"] != $password){
                    $res = [
                        'status' => 400,
                        'message' => "invalid password",
                        'pwordError' => true,
                    ];
                    echo json_encode($res);
                    return false;
                }

            }

        }
    }
    if(mysqli_num_rows($unameResult) < 1){
        $res = [
            'status' => 400,
            'message' => "invalid username",
            'unameError' => true,
        ];
        echo json_encode($res);
        return false;
    }



    // if(mysqli_num_rows($result) > 0){
    //     $res = [
    //         'status' => 200,
    //         'message' => "login success",
    //     ];
    //     echo json_encode($res);
    //     return false;
        // header("Location: ../views/login.php");
        // die();
    // }
    // if(mysqli_num_rows($result) < 1){
    //     $res = [
    //         'status' => 400,
    //         'message' => "login failed",
    //     ];
    //     echo json_encode($res);
    //     return false;
        // header("Location: ../views/login.php");
        // die();
    // }
    // else{
    //     $_SESSION["username"] = $username;
    //     header("Location: ../views/dashboard.php");
    //     die();
    // }
}


