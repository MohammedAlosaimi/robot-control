<?php

include_once "config.php";

$run = $_POST["run"];

echo "==== Moves Table ==== <br>";
//check if the database have data befor 
$sql = "SELECT * FROM moves WHERE id = 1";
//performe the query
$result = mysqli_query($conn,$sql);
//check the number of rows in the table, if zero, this this the first data insert
$count = mysqli_num_rows($result);


//if database have data before then update. otherwise insert     
if($count == 1) {
    $sql = "UPDATE moves SET run='$run' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully (run = " . $run .")";
    } else {
        echo "Error updating record: " . mysqli_error($conn) . " ";
    }
} else{
    $stop = 'stop';
    $sql = "INSERT INTO moves(run) VALUES ('$run')";

    if(mysqli_query($conn, $sql)){
        echo "Data has been successfully insert into the record (run = " . $run .")";
    } else {
        echo "Error inserting record: ". mysqli_error($conn) . ")";
    }
}

echo "<br>==== Last Move Table ====<br>";
//check if the database have data befor 
$sql = "SELECT * FROM last_move WHERE id = 1";
//performe the query
$result = mysqli_query($conn,$sql);
//check the number of rows in the table, if zero, this this the first data insert
$count = mysqli_num_rows($result);


//if database have data before then update. otherwise insert     
if($count == 1) {
    $sql = "UPDATE last_move SET action='$run' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully (last action = " . $run .")";
    } else {
        echo "Error updating record: " . mysqli_error($conn) . " ";
    }
} else{
    $sql = "INSERT INTO last_move(action) VALUES ('$run')";

    if(mysqli_query($conn, $sql)){
        echo "Data has been successfully insert into the record (last action = " . $run .")";
    } else {
        echo "Error inserting record: ". mysqli_error($conn) . ")";
    }
}
?>