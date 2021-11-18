<?php include '../Yassine/crud_panier/updateP.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><h4>Commandes</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="panier.php"><h4>Panier</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="../Yassine/crud_panier/updateP.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">update</h4><hr><br>
		   <?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
           
           <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?> 

       <div class="form-group">
		     <label for="id_produit">nouveau ID du produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="id_produit" 
		           name="id_produit" 
                   value="<?=$row['id_produit']?>" 
		           >
		 </div>
           <div class="form-group">
		     <label for="qte_produit">nouveau Quantite de produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="qte_produit" 
		           name="qte_produit" 
		           value="<?=$row['qte_produit']?>"
		    >
		   </div>
           <div class="form-group">
		     <label for="prix_produit">nouveau prix du produit </label>
		     <input type="number" 
		           class="form-control" 
		           id="prix_produit" 
		           name="prix_produit" 
                   value="<?=$row['prix_produit']?>" >
                   </div> 

           <input type="number" 
		          name="id_produit"
		          value="<?=$row['id_produit']?>"
		          hidden >

           <button type="submit" 
		          class="btn btn-primary"
		          name="updateP">update</button>
		    <a href="afficheP.php" class="link-primary">liste des produits dans le panier</a>
        </form>
    </div>

 </body>
</html>