<?php
$sql = "update candidates 
set totalvotes = totalvotes + 1
where Lname = '$lname' && Fname = '$fname'";
$lname = $_REQUEST['Lname'];
$fname = $_REQUEST['Fname'];




//database connection
include('dbConnect.php');



if ($conn->query($sql) === TRUE) {
    header('location: successfully.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:successfully.php');
?>  