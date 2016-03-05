<?php
session_start();

$dbhost = "ap-cdbr-azure-east-c.cloudapp.net";
$dbuser = "bdb658287f728a";
$dbpass = "ffc89916";
$dbname = "planning";

mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
	//User is already logged in.
} else {
	?>
You need to log in to view this page:

<form action='loginDo.php' method=POST>
<input type=text name='username' placeholder='Username...'/><br/>
Password: <input type=password name='password'/><br/>
<input type=submit value='submit'/>
</form>
	<?php
}
?>