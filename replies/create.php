<?php

include "../models/conn.php";

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $query = "SELECT * FROM `request` WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $row){
            $res = [
                "status" => 200,
                "message" => "select success",
                "username" => $row['deped_email'],
                "password" => $row['password']
            ];
            echo json_encode($res);
            return;
        }
    }
}

?>

<!-- <p><b>Please click the link below for your feedback:</b></p>
<p>https://l.facebook.com/l.php?u=https%3A%2F%2Fforms.gle%2FF3PKV3tp4WQEaet16%3Ffbclid%3DIwAR1KBXO5ay-2w3fEp30u5SHovd6-j-GZNvKKEVkpUKskEXoSKPC2z9a7aYQ&h=AT3dctitvUghRBr_mkQZ5n8wnUKunCiEe05LSMSJnfXhCzCf4Le4LnJJXNy8U4PZarUhfuj3AIE9I-4m-xme4PjtL-UwXqCmUOvYrlBAMtQxvPKRx99puBrW9aOQihyS8aV330v24V53luk</p>
<p><b>Your request for DepEd Gmail Account has been approved. You may now log-in to your deped gmail  account through this link  https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin  using the following details:</b></p>
<p style="margin-left: 40px;"><b>Username:</b></p>
<p style="margin-left: 40px;"><b>Password:</b></p>
<p><b>References:</b></p>
<p><b>Go to depedlaguna.com.ph > Issuances > Division Memorandum > DM 2018</b></p>
<p style="margin-left: 40px;"><b>DM 185 s.2018 Corrigendum to Division Memorandum No. 151 s.2018</b></p>
<p style="margin-left: 40px;"><b>DM 151 s.2018 Procedure for Deped Gmail Account Request</b></p>
<p style="margin-left: 40px;"><b>Thank you and God bless.</b></p> -->