<?php 

if (isset($_GET['id_produit'])) {
	include "config.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_produit = validate($_GET['id_produit']);
    
	$sql = "SELECT * FROM panier WHERE id_produit=$id_produit";
    $result = mysqli_query($config, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: afficheP.php");
    }
}
else if(isset($_POST['updateP'])){
include "db_config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_produit = validate($_POST['id_produit']);
	$qte_produit = validate($_POST['qte_produit ']);
    $prix_produit = validate($_POST['prix_produit']);


	if (empty($id_produit)) {
		header("Location:  affiche_updateP.php?error= erreur id_produit produit&$user_data");

	}else if (empty($qte_produit)) {
		header("Location:  affiche_updateP.php?error=erreur qte_produit &$user_data");
	}
else if (empty($prix_produit)) {
    header("Location:  affiche_updateP.php?error=erreur prix_produit &$user_data");
}
    else {
       $sql = "UPDATE  panier SET id_produit='$id_produit', qte_produit='$qte_produit', prix_produit='$prix_produit' WHERE id_poduit=$id_produitt ";
       $result = mysqli_query($config, $sql);
    
       if ($result) {
       	  header("Location: affiche_updateP.php?id_produit=$id_produit success=successfully updated");
			 
       }else {
          header("Location: affiche_updateP.php?id_produit=$id_produit error=error occurred&$user_data");
       }
	}

}

?>







