<?php

include_once "config.php";

$runvalue = $_POST["run"];

//check if the database have data befor 
$sql = "SELECT * FROM run WHERE id = 1";
//performe the query
$result = mysqli_query($conn,$sql);
//check the number of rows in the table, if zero, this this the first data insert
$count = mysqli_num_rows($result);


//if database have data before then update. otherwise insert     
if($count == 1) {
    $sql = "UPDATE run SET on_off='$runvalue' WHERE id=1";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully (Run = " . $runvalue .")";
    } else {
        echo "Error updating record: ". mysqli_error($conn);
    }
} else{
    $sql = "INSERT INTO run(on_off) VALUES ('$runvalue')";

    if(mysqli_query($conn, $sql)){
        echo "Data has been successfully insert into the record (Run = " . $runvalue .")";
    } else {
        echo "Error inserting record: ". mysqli_error($conn);
    }
}
?>