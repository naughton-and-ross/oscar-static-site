<pre>
<?php
	
	$mysqli = new mysqli("localhost", "root", "", "educate-front");
	
	$name = $mysqli->real_escape_string($_POST['name']);
	$schoolName = $mysqli->real_escape_string($_POST['schoolName']);
	$schoolPop = $mysqli->real_escape_string($_POST['schoolPop']);
	$schoolLoc = $mysqli->real_escape_string($_POST['schoolLoc']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$personType = $mysqli->real_escape_string($_POST['personType']);
	$state = $mysqli->real_escape_string($_POST['state']);
	$actionReq = $mysqli->real_escape_string($_POST['actionReq']);
	
	$mysqli->query("INSERT INTO `inq` (name, schoolName, schoolPop, schoolLoc, email, personType, state, actionReq) VALUES ('$name', '$schoolName', '$schoolPop', '$schoolLoc', '$email', '$personType', '$state', '$actionReq')");	
?>
</pre>