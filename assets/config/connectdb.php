<?php
ob_start();

$servername = "us-cdbr-east-04.cleardb.com";
$username = "be6058053ae4f9";
$password = "eff72a60";
$dbname = "heroku_09135cfc50249a8";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Error: " . mysqli_error($con));

mysqli_set_charset($conn, "utf8");

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connected Error";
}
?>