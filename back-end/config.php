<?php

//database access data
$servername = "localhost";
$username = "userR";
$password = ")_Ufy(owYDrWOhzZ";
$dbname = "robot_control";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}