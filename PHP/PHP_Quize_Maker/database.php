<?php

// Connection Credentionals
$db_host = "localhost";
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = 'root';

// Create MySQLI Object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Erroor handling
if($mysqli->connect_error){
     printf("Connect failed:\n ", $mysqli->connect_error);
     exit();
}
