<?php

//this php file to chech give josn file whiter the arm is on or off

include_once "config.php";

$sql = "SELECT run FROM moves WHERE id = 1";

$result = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);

$v = 'stop';


while($row = mysqli_fetch_assoc($result)){
    if($row['run'] == "start" || $row['run'] == "stop" ){
        $v = $row['run'];
    }
}

echo json_encode($v);
?>