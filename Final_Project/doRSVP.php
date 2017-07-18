<?php

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}



    include "dbConn.php";
    $validationMessages = "";
    $isValid = true;

    if(!isset($_POST['first']) || strlen($_POST['first'] == 0 )){
        $isValid = false;
        $validationMessages =
            $validationMessages."<span class='error'>Please provide a First Name</span>";
}

    if(!isset($_POST['last']) || strlen($_POST['last'] == 0 )){
        $isValid = false;
        $validationMessages =
            $validationMessages."<span class='error'>Please provide a Last Name</span>";
}

    if(!isset($_POST['email']) || strlen($_POST['email'] == 0 )){
        $isValid = false;
        $validationMessages =
            $validationMessages."<span class='error'>Please provide an Email Address</span>";
}

    if(!isset($_POST['attending']) || strlen($_POST['attending'] == 0 )){
        $isValid = false;
        $validationMessages =
            $validationMessages."<span class='error'>Please provide an answer! :)</span>";
}

    if(!$isValid){
        $_SESSION['registerMessage'] = $validationMessages;
        header("Location: /Final_Project/RSVP.php");
    }

    registerUser($_POST['first'], $_POST['last'], $_POST['email'], $_POST['attending']);

    Header("Location: /Final_Project/success.php");
?>
