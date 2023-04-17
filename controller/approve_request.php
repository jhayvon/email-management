<?php
session_start();

include "../models/conn.php";



if (isset($_POST['id'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user = $_SESSION['username'];

    $query = "UPDATE request SET status='Approved', approved_by='$user', updated_at = NOW() WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $res = [
            "status" => 200,
            "message" => "update success",
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            "status" => 400,
            "message" => "update failed",
        ];
        echo json_encode($res);
        return;
    }
}
?>