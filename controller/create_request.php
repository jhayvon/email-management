<?php

include "../models/conn.php";

// get variables
if(isset($_POST['add'])){
    $schoolId = mysqli_real_escape_string($conn, $_POST['schoolId']);
    $schoolName = mysqli_real_escape_string($conn, $_POST['schoolName']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $schoolHead = mysqli_real_escape_string($conn, $_POST['schoolHead']);
    $unit = mysqli_real_escape_string($conn, $_POST['unit']);
    $employeeNumber = mysqli_real_escape_string($conn, $_POST['employeeNumber']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $personalEmail = mysqli_real_escape_string($conn, $_POST['personalEmail']);
    $depedEmail = mysqli_real_escape_string($conn, $_POST['depedEmail']);
    $password = $lastname."1234";
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $target_dir = "../uploads/";
    $appointment = $target_dir . basename($_FILES["appointment"]["name"]);
    $requestType = mysqli_real_escape_string($conn, $_POST['requestType']);

    
    // create query
    $query = "INSERT INTO request (school_id,
                                   school_name,	
                                   district, 
                                   school_head, 
                                   unit_section, 
                                   employee_number, 
                                   firstname, 
                                   middlename, 
                                   lastname, 
                                   personal_email, 
                                   deped_email, 
                                   password,
                                   phone_number, 
                                   request, 
                                   appointment) 
    VALUES ('$schoolId',
            '$schoolName',
            '$district',
            '$schoolHead',
            '$unit',
            '$employeeNumber',
            '$firstname',
            '$middlename',
            '$lastname',
            '$personalEmail',
            '$depedEmail',
            '$password',
            '$phoneNumber',
            '$requestType',
            '$appointment')";
    $result = mysqli_query($conn, $query);

    if($result){
        // uplaod file to upload dir
        move_uploaded_file($_FILES["appointment"]["tmp_name"], $appointment);
        $res = [
            'status' => 200,
            'message' => "insert successful",
        ];
        echo json_encode($res);
        return;
    }else{
        $res = [
            'status' => 400,
            'message' => "insert failed",
        ];
        echo json_encode($res);
        return;
    }
}

