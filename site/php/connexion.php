<?php  //Connexion à la base de donnée
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass']= $_POST['pass'];

//$_SESSION['strConnect']= ["feedthecofee", $_SESSION['login'], $_SESSION['pass'] ,"site"];

$_SESSION['connect'] = mysqli_connect("localhost", $_SESSION['login'], $_SESSION['pass'] , "site");

if (!$_SESSION['connect']){
	echo"Ereur";

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="0; URL='pagePrincipale.php'"/>
</head>
<body>

</body>
</html>


