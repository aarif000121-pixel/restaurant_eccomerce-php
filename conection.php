<?php

$username = "root";
$password = "";
$servername = "localhost";
$dbname = "restaurant1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "hey is successfully connected";
} else {
    // echo "connection failed";
}

?>