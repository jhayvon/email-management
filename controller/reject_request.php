<?php
session_start();

include "../models/conn.php";




if (isset($_POST['id'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $user = $_SESSION['username'];

    $qReject = "UPDATE request SET status='Rejected', approved_by='$user', updated_at = NOW() WHERE id = '$id'";
    $resultRej = mysqli_query($conn, $qReject);

    if ($resultRej) {
        $res = [
            "status" => 200,
            "message" => "Request Rejected!",
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            "status" => 400,
            "message" => "Rejection Cancelled!",
        ];
        echo json_encode($res);
        return;
    }
}
?>