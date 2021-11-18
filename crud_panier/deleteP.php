<?php  

if(isset($_GET['id_produit'])){
   include "../db_config.php";  
    include "../Yassine/afficheP.php";


    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id_produit = validate($_GET['id_produit']);

	$sql = "DELETE FROM panier
	        WHERE id_produit=$id_produit";
   $result = mysqli_query($config, $sql);
   if ($result) {
   	  header("Location: ../afficheP.php?success=successfully deleted");
   }else {
      header("Location: ../afficheP.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../afficheP.php");
}