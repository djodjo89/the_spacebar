<?php
session_start();
$connect = mysqli_connect("localhost", $_SESSION['login'], $_SESSION['pass'] , "equipemontreuil2");

?>
<!DOCTYPE html lang="fr">
	<html lang="fr">
		<head>
			<title>FeedTheCoffee</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/style.css"/>
			<link rel="stylesheet" type="text/css" href="../css/stylePagePrincipale.css"/>
		</head>
		<body>
			<header>
				<h1> Nous aimons tous le café</h1>
				<?php echo"<p id=\"txtConnexion\">Connecté en tant que : ".$_SESSION['login']."</p>";?>
			  	</script>
			</header>
			<nav>
			
			</nav>
			<section>

				<h2>NOS PAYS PRODUCTEURS</h1>
				
								<TR>
					<th>PAYS</th>
			
					<TH COLSPAN=2>1974</TH>
					<TH COLSPAN=2>1984</TH>
					<TH COLSPAN=2>1994</TH>
					<TH COLSPAN=2>2004</TH>
					<TH COLSPAN=2>2013</TH>
					
				</TR>

				<?php
					$requet = "select * from pays";
					print("<table>");
						if ($result = $connect ->query($requet)){

							while ($obj = $result->fetch_object()){
								
							    print("<tr><td>".$obj->nomPays."</td><td>".$obj->capitale."</td><td>".$obj->nbHabitant."</td><td>".$obj->surfacePays."</td><td>".$obj->quantiteCafeRobusta."</td><td>".$obj->quantiteCafeArabica."</td><td><img class=\"imgTab\" src=\"../img/".$obj->lienImage."\" alt=\"image\"/></td></tr>");
						}

					}
					print("</table>");				

				?>
				
			</section>			
			<footer>
				<p>Numéro d'équipe : Montreuil 2 </p> 
				<p> Composée de Alloune Ayoub, Mezdari Nael, Hippolyte Picard, Uy Alexandre, Salablab Wassim et Simion Mathys</p>
				<p><a href="aPropos.html"> A propos </a></p>
			</footer>
		</body>
	</html>



