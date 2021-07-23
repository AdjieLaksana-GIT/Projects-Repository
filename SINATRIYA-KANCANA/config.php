<?php
/**
 * menggunakan mysqli untuk database
 */
 
$databaseHost = 'localhost';
$databaseName = 'sinatriyakancana';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>