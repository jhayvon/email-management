<?php
//Session
	session_start();

	if (!isset($_SESSION["username"])) {
		header("Location: ../login.php");
		die();
	}
	include "../../models/conn.php";
//---------------------------------------------

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


	$emails = $_POST['recipient-email'];
	$bodyMsg = $_POST['message-text'];
	$details = nl2br($bodyMsg);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	
	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'yuiazaki3@gmail.com';
	$mail->Password = 'ilzxzvxumpnsnevy';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('yuiazaki3@gmail.com');
	 

	$mail->isHTML(true);

	$email = $emails;
	$mail->Subject = 'E-mail Request';
	$mail->Body = $details;

if($mail->addAddress($email)){//;
	$mail->send();
	header("location:sent.php");
}



?>