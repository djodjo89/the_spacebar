    <?php
    session_start();
    $connect = mysqli_connect("172.16.97.25", $_SESSION['login'], $_SESSION['pass'] , "site");
        
    $login = $_POST['loginInscription'];
    $pass = $_POST['passInscription'];
    
    $requet = "INSERT INTO utilisateur values ('oui',100,'oui','oui','oui','oui') ";
    
    if ($result = $connect ->query($requet)){
        print ("yes");
    }
    
 
    ?>
    
