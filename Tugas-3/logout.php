<!-- 
Nama  : Adjie Laksana Ibrahim
NIM   : 11119008 
-->

<?php
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: index.php");
?>