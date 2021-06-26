<?php

//This is a php file for info about the arm.
include_once "config.php";

$arm_info = "";

$query = "SELECT * FROM last_move";

if(!($result = mysqli_query($conn, $query))){
        die("could not execut query");
    }

while($row = mysqli_fetch_assoc($result)){
    $arm_info .= $row['action'];
}


echo $arm_info;
?>