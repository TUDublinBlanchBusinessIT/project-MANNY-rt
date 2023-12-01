<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$ema = $_POST['email'];

include("dbcon.php");

$sql = "INSERT INTO user (firstname, surname, dateofbirth, email)
VALUES ('$fn', '$sn', '$dob', '$ema')";

//echo $sql;
mysqli_query($conn, $sql);

mysqli_close($conn);

echo "user_information inserted"
?>