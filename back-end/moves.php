<?php

include_once "config.php";

$move = $_POST["moves"];

echo "==== Moves Table ====";
//check if the database have data befor 
$sql = "SELECT * FROM moves WHERE id = 1";
//performe the query
$result = mysqli_query($conn,$sql);
//check the number of rows in the table, if zero, this this the first data insert
$count = mysqli_num_rows($result);


//if database have data before then update. otherwise insert     
if($count == 1) {
    $sql = "UPDATE moves SET move='$move' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully (move = " . $move .")";
    } else {
        echo "Error updating record: " . mysqli_error($conn) . " ";
    }
} else{
    $stop = 'stop';
    $sql = "INSERT INTO moves(run, move) VALUES ('$stop', '$move')";

    if(mysqli_query($conn, $sql)){
        echo "Data has been successfully insert into the record (move = " . $move .")";
    } else {
        echo "Error inserting record: ". mysqli_error($conn) . ")";
    }
}

echo "==== Last Move Table ====";
//check if the database have data befor 
$sql = "SELECT * FROM last_move WHERE id = 1";
//performe the query
$result = mysqli_query($conn,$sql);
//check the number of rows in the table, if zero, this this the first data insert
$count = mysqli_num_rows($result);


//if database have data before then update. otherwise insert     
if($count == 1) {
    $sql = "UPDATE last_move SET action='$move' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully (last action = " . $move .")";
    } else {
        echo "Error updating record: " . mysqli_error($conn) . " ";
    }
} else{
    $sql = "INSERT INTO last_move(action) VALUES ('$move')";

    if(mysqli_query($conn, $sql)){
        echo "Data has been successfully insert into the record (last action = " . $move .")";
    } else {
        echo "Error inserting record: ". mysqli_error($conn) . ")";
    }
}
?>