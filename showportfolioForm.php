<?php

include("dbcon.php");

$sql = "select * from user";
$result = mysqli_query($conn, $sql);
echo "<TABLE border='1'>";
echo "<TR><TH>First Name</TH><TH>Surname</TH><TH>Date of Birth</TH><TH>Email</TH><TH>Skills</TH><TH>Education</TH><TH>Experience</TH><TH>Phone Number</TH><TH>Home Address</TH></TR>";

while ($row = mysqli_fetch_assoc($result)) {
    $fn = $row['firstname'];
    $sn = $row['surname'];
    $dob = $row['dateofbirth'];
    $ema = $row['email'];
    $skills = $row['skills'];
    $education = $row['education'];
    $experience = $row['experience'];
    $homeAddress = $row['homeAddress'];
    $phoneNumber = $row['phoneNumber'];

    echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$dob</TD><TD>$ema</TD><TD>$skills</TD><TD>$education</TD><TD>$experience</TD><TD>$phoneNumber</TD><TD>$homeAddress</TD></TR>";
}
echo "</TABLE>";
mysqli_close($conn);

?>