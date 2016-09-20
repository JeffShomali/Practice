<?php

/**
 * Connect to databaase using MySQLi
 * @var [type]
 */
$con = mysqli_connect("localhost", "root", "root", "Pchat");

/**
 * Test the conncetion
 */
if (mysqli_connect_errno()) {
     die( "Failed to connect to MySQL: " .mysqli_connect_error());
}
