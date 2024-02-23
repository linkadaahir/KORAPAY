<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
<form method="post">
	<?php 
		$bd = new PDO("mysql:host=localhost; dbname=test","root", "");
		//Si l'utilisateur clique sur connextion
		if(isset($_POST['connextion'])){
			//Si l'un des champs sont vide
			if(empty($_POST['login']) || empty($_POST['pass'])){
				echo "Vous devez entrer tous les champs pour vous connecter !!!<br>";
			}
			else{
				//on recupere les valeurs des champs
				$login = $_POST['login'];
				$pass = $_POST['pass'];
				//requete de selection
				$req = "SELECT nom_user FROM user WHERE login='".$login."' AND password='".$pass."'";
				//execution de la requete 
				$stm = $bd->query($req);
				//si il ya aumoins un resultat
				if($stm->rowcount()>0){
					$find = $stm->fetch();
					$user_name = $find['nom_user'];
					session_start(); 
					$_SESSION['user_name'] = $user_name;
					header("Location:accueil.php");
				}
				else{
					echo "Identifiant ou mot de passe incorrecte";
				}

			}
		}

	?>
	<input type="text" name="login" placeholder="login">
	<br><input type="password" name="pass" placeholder="password">
	<br><input type="submit" name="connextion">
</form>
</body>
</html>