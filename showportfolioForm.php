<?php

include("dbcon.php");

$sql = "select * from user_info";
$result = mysqli_query($conn, $sql);

echo "<TABLE border='1'>";
echo "<TR><TH>First Name</TH><TH>Surname</TH><TH>Age</TH><TH>Gender</TH><TH>Email</TH><TH>Skills</TH><TH>Education</TH><TH>Experience</TH><TH>phoneNumber</TH><TH>Home Address</TH></TR>";

while ($row = mysqli_fetch_assoc($result)) {
    $fn = $row['Fname'];
    $sn = $row['Lname'];
    $age = $row['Age'];
    $gender = $row['Gender'];
    $Email = $row['Email'];
    $skills = $row['skills'];
    $education = $row['education'];
    $experience = $row['experience'];
    $homeAddress = $row['homeAddress'];
    $phoneNumber = $row['phoneNumber'];

    echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$age</TD><TD>$gender</TD><TD>$Email</TD><TD>$skills</TD><TD>$education</TD><TD>$experience</TD><TD>$phoneNumber</TD><TD>$homeAddress</TD></TR>";
}
echo "</TABLE>";


mysqli_close($conn);

?>

