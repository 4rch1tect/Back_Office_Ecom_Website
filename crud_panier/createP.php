<?php 

if (isset($_POST['createP'])) {
	include "../db_config.php";
    include "../Yassine/panier.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_produit = validate($_POST['id_produit']);
	$qte_produit = validate($_POST['qte_produit']);
    $prix_produit= validate($_POST['prix_produit']);

	$user_data = 'id_produit='.$id_produit. '&qte_produit='.$qte_produit .'&prix_produit='.$prix_produit;

	if (empty($id_produit)) {
		header("Location:  ../panier.php?error= erreur id_produit panier&$user_data");

	}else if (empty($qte_produit)) {
		header("Location:  ../panier.php?error=erreur qte_produit &$user_data");
	}
    else if (empty($prix_produit)) {
    header("Location:  ../panier.php?error=erreur prix_prdouit &$user_data");
    }
    else {
       $sql = "INSERT INTO panier(id_produit, qte_produit , prix_produit ) 
               VALUES('$id_produit', '$qte_produit','$prix_produit')";
       $result = mysqli_query($config, $sql);
    
       if ($result) {
       	  header("Location: ../panier.php?success=successfully created");
			 
       }else {
          header("Location: ../panier.php?error=error occurred&$user_data");
       }
	}

}
?>