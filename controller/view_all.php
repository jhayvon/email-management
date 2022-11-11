<?php

include "../models/conn.php";

if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "SELECT * FROM request WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            $res = [
                "status" => 200,
                "school_id" => 	$row['school_id'],
                "school_name" => 	$row['school_name'],
                "district" => 	$row['district'],
                "school_head" => 	$row['school_head'],
                "unit_section" => 	$row['unit_section'],
                "employee_number" => 	$row['employee_number'],
                "firstname" => 	$row['firstname'],
                "middlename" => 	$row['middlename'],
                "lastname" => 	$row['lastname'],
                "personal_email" => 	$row['personal_email'],
                "deped_email" => 	$row['deped_email'],
                "password" => 	$row['password'],
                "phone_number" => 	$row['phone_number'],
                "request" => 	$row['request'],
                "request_status" => 	$row['status'],
            ];
        }
        echo json_encode($res);
        return false;
    }
    else{
        $res = [
            "status" => 400,
        ];
        echo json_encode($res);
        return false;
    }

}