<?php

//Connect to databaase using MySQLI
$con = mysqli_connect("localhost", "root", "root", "Pchat");

//Test the connection
if (mysqli_connect_errno()) {
     die( "Failed to connect to MySQL: " .mysqli_connect_error());
}
