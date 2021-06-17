<!-- 
Nama  : Adjie Laksana Ibrahim
NIM   : 11119008
-->

<?php

    $usernamelogin = 'admin';
    $passwordlogin = 'password123';


    session_start();


    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: sukses.php");
    } 
    else {
        header("Location: login.php");
   }
?>