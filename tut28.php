<?php session_start(); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

$_SESSION['name'] = "Bryan";
$_SESSION['age'] = 38;
$_SESSION['userid'] = "yes";
?>

<a href="session.php">click here</a>
</body>
</html>
