<?php 

if (isset($_POST['createC'])) {
	include "db_config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ref = validate($_POST['ref']);
	$prix = validate($_POST['prix']);
    $date_commande = validate($_POST['date_commande']);

	$user_data = 'ref='.$ref. '&prix='.$prix. '&date_commande='.$date_commande;

	if (empty($ref)) {
		header("Location: commande.php?error= erreur ref commande &$user_data");
	}else if (empty($prix)) {
		header("Location: commande.php?error=erreur prix commande&$user_data");
    }else if (empty($date_commande)) {
		header("Location: commande.php?error=erreur date_commande commande&$user_data");
	}else {
       $sql = "INSERT INTO commande(ref, prix ,date_commande) 
               VALUES('$ref','$prix','$date_commande')";
       $result = mysqli_query($config, $sql);
       if ($result) {
       	  header("Location: commande.php?success=successfully created");
			 
       }else {
          header("Location: commande.php?error= error occurred&$user_data");
       }
	}

}
?>