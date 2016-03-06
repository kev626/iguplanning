<?php
session_start();

$dbhost = "ap-cdbr-azure-east-c.cloudapp.net";
$dbuser = "bdb658287f728a";
$dbpass = "ffc89916";
$dbname = "planning";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
	//User is already logged in.
	echo "Welcome! <a href='logout.php'>Logout</a>

<form action='sendTwitter.php' method=POST>
Remind the team of an event
When? <input type=date name='date'/><br/>
Where? <input type=text name='where'/><br/>
<input type=submit value='Remind the team!'/>
</form>

	";
} else {
	?>
You need to log in to view this page:

<form action='loginDo.php' method=POST>
<input type=text name='username' placeholder='Username...'/><br/>
Password: <input type=password name='password'/><br/>
<input type=submit value='Login'/>
</form>
	<?php
}
?>