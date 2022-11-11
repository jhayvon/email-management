<?php 

// $username = "admin";
// $password = "admin3";

// $username_list = ["admin", "admin1", "admin3",];
// $password_list = ["admin", "admin1", "admin3",];


// if(!in_array($username, $username_list)){
//     echo "invalid username";
//     return;
// }

// if(!in_array($password, $password_list)){
//     echo "invalid password";
//     return;
// }

// echo "valid account";

if(isset($_POST["something"])){
    if($_POST["something"] == "hello"){
        echo "you got the secret!";
        return;
    }
}


