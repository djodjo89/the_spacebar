<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>RESERVATION.COM</title>
	<!--style de la page-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header id="headerPageConnexion">



		
	</header>


	<section id="sectionConnexion">
	
		<h2>Connexion</h2>

		<form action="connexion.php" method="POST">
			Login<input id="log" type="text" name="login">
			password<input id="pass" type="password" name="pass">
			<input type="submit" name="OK" value="OK">
		</form>
		
		<h2>INSCRIPTION</h2>
		
		<form action="inscription.php" method="POST">
			
			Votre Login<input id="loginInscription" type="text" name="loginInscription">
			Votre Mot de Passe<input id="passInscription" type="text" name="passInscription">
			<input type="submit" name="OK" value="OK">
		</form>

	</section>

	

</body>
</html>