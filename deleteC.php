<?php  

if(isset($_GET['ref'])){
   include "db_config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ref = validate($_GET['ref']);

	$sql = "DELETE FROM commande
	        WHERE ref=$ref";
   $result = mysqli_query($config, $sql);
   if ($result) {
   	  header("Location: afficheC.php?success=successfully deleted");
   }else {
      header("Location: afficheC.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: afficheC.php");
}