<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>
<?php 
session_start();
echo $_SESSION['user_name'];
 ?>
</body>
</html>