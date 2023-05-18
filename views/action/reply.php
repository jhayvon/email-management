<?php
//Session
	session_start();

	if (!isset($_SESSION["username"])) {
		header("Location: ../login.php");
		die();
	}
	include "../../models/conn.php";
//---------------------------------------------//

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	
	$emails = $_POST['recipient-email'];
	$bodyMsg = $_POST['message-text'];
	$details = nl2br($bodyMsg);
	
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

if($mail->addAddress($email)) {
	// echo $_POST['id']."";
	if (isset($_POST['id'])) {

		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$user = $_SESSION['username'];

	
		$query = "UPDATE request SET status='Approved', approved_by='$user', updated_at = NOW() WHERE id = '$id'";
		$result = mysqli_query($conn, $query);
	
	}
	$mail->send();
	header("location:sent.php");
}

?>