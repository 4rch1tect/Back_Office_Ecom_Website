<?php 

if (isset($_GET['ref'])) {
	include "../Yassine/db_config.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ref = validate($_GET['ref']);
    
	$sql = "SELECT * FROM commande WHERE ref=$ref";
    $result = mysqli_query($config, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: ../Yassine/afficheC.php");
    }
}
else if(isset($_POST['updateC'])){
include "../db_config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ref=validate($_POST["ref"]);
	$prix=validate($_POST["prix"]);
  $date_commande=validate($_POST["date_commande"]);


	if (empty($ref)) {
		header("Location: ../Yassine/affiche_updateC.php?ref=$ref &error= erreur ref commande&$user_data");
	}else if (empty($prix)) {       
		header("Location: ../Yassine/affiche_updateC.php?ref=$ref &error=erreur prix commande&$user_data");
    }else if (empty($date_commande)) {
		header("Location: ../Yassine/affiche_updateC.php?ref=$ref &error=erreur date commande&$user_data");
	}else {
       $sql = "UPDATE commande SET ref='$ref' , prix ='$prix' , date_commande='$date_commande' WHERE ref=$ref";
              
       $result = mysqli_query($config, $sql);
       if ($result) {
       	  header("Location: ../affiche_updateC.php?ref=$ref &success=successfully updated");
			 
       }else {
          header("Location: ../affiche_updateC.php?ref=$ref &error=unknown error occurred&$user_data");
       }
	}

}

?>







