<?php
$fn = $_POST['fname'];
$sn = $_POST['sname'];
$dob = $_POST['dob'];
$ema = $_POST['email'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$homeAddress = $_POST['homeAddress'];
$phoneNumber = $_POST['phoneNumber'];

include("dbcon.php");

$sql = "INSERT INTO user (firstname, surname, dateofbirth, email, skills, education, experience, phoneNumber, homeAddress)
VALUES ('$fn', '$sn', '$dob', '$ema', '$skills', '$education', '$experience', '$phoneNumber', '$homeAddress')";

//echo $sql;
mysqli_query($conn, $sql);

mysqli_close($conn);

echo "user_information inserted"
?>