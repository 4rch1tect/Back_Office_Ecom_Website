<?php include "../Yassine/crud_panier/readP.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Recherche par Id</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Back Office</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>


<body>
    
<div class="container">
<div class="box">
			<h4 class="display-4 text-center">Recherche</h4><br>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input  type="submit" value="Recherche" name="submit">



<?php

$config = new PDO("mysql:host=localhost;dbname=leflef",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $config->prepare("SELECT * FROM panier WHERE id_produit = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table  class="table table-striped">
        <thead>
			<tr>
				<th>Id</th>
				<th>Quantite</th>
                <th>Prix</th>

			</tr>
			<tr>
            </thead>
				<td><?php echo $row->id_produit; ?></td>
				<td><?php echo $row->qte_produit;?></td>
                <td><?php echo $row->prix_produit;?></td>

			</tr>
            
		</table>

        <a href="afficheP.php" class="link-primary">Return</a>
<?php 
	}
		
		else{
			?> <br> <?php 

            echo "id n'existe pas";?>         <br>
            <a href="afficheP.php" class="link-primary">Return</a> <?php
		}
}

?>

</form>

</div>
</div>
</body>
</html>