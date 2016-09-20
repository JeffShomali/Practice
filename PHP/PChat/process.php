<?php

/**
 * include databse.php
 */
include 'database.php';

/**
 * if user submit the form
 * sanitize and initiate user and message variable
 */
if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

     //Set timezone
     date_default_timezone_get('America/New_York');
     $time = date('h:i:s a', time());

    /**
     * [Form validation]
     * if username not filled out or is empthy
     * if message not filled out or is empthy
     * returm to the last page and shows error
     * else passing sanitized variable and inserting into database
     * then if there is no error message return to the index page and show the result
     * @var [type]
     */
    if (!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error = "Please fill in name and message ";
        header("Location: index.php?error=".urlencode($error));
        exit();
    } else {
        $query = "INSERT INTO shouts(user,message, time) VALUES ('$user', '$message', '$time')";

        if (!mysqli_query($con, $query)) {
            die('Error: '.mysqli_errno($con));
        } else {
            header('Location: index.php');
            exit();
        }
    }
}
