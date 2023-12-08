<?php

session_start();

$usr = $_POST['username'];
$passwd = $_POST['password'];

require('dbcon.php');

$conn= mysqli_connect($servername, $username, $password, $dbname, $port);

$sql = "select password from registeredUser where username='$usr'";

$result = mysqli_query($conn, $sql);

while($row = $result->fetch_assoc()) {
    $dB = $row['password'];
}

if ($dB == $pwd) {
    //echo "passwords match";
    $_SESSION['username'] = $usr;
    header('Location ; loggedin.html');
}
else {
    header('Location: loginTryAgain.html');
}

?>