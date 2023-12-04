<?php
$fn = $_POST['Fname'];
$sn = $_POST['Lname'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$Email = $_POST['Email'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$homeAddress = $_POST['homeAddress'];
$phoneNumber = $_POST['phoneNumber'];

include("dbcon.php");

$sql = "INSERT INTO user_info (Fname, Lname, Age, Gender, Email, skills, education, experience, homeAddress, phoneNumber)
VALUES ('$fn', '$sn', '$age', '$gender', '$Email', '$skills', '$education', '$experience', '$homeAddress', '$phoneNumber')";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "user_info inserted";
?>