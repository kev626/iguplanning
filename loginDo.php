<?php
session_start();

$dbhost = "ap-cdbr-azure-east-c.cloudapp.net";
$dbuser = "bdb658287f728a";
$dbpass = "ffc89916";
$dbname = "planning";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$username = mysqli_real_escape_string($connection, $_POST['username']);
$password = md5($_POST['password']);

$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' LIMIT 1;";
$result = mysqli_query($connection, $query);
if (mysqli_num_rows($result) == 1) {
	$_SESSION['loggedIn'] = true;
	$_SESSION['username'] = $username;
}
header('Location: /index.php');
?>