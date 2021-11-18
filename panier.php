<!DOCTYPE html>
<html>
<head>
	<title>ajouter Panier</title>
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
      <a class="nav-item nav-link active" href="#"><h4>Panier</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="commande.php"><h4>Commandes</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="../Yassine/crud_panier/createP.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter panier</h4><hr><br>
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
		     <label for="id_produit">ID du produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="id_produit" 
		           name="id_produit" 
		           value="<?php if(isset($_GET['id_produit']))
		                           echo($_GET['id_produit']); ?>" 
		           placeholder="Enter ID du produit">
		 </div>
           <div class="form-group">
		     <label for="qte_produit">Quantite du produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="qte_produit" 
		           name="qte_produit" 
		           value="<?php if(isset($_GET['qte_produit']))
		                           echo($_GET['qte_produit']); ?>" 
		           placeholder="Enter la quantite de produit">
		   </div>
           <div class="form-group">
		     <label for="prix_produit">Prix du produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="prix_produit" 
		           name="prix_produit" 
		           value="<?php if(isset($_GET['prix_produit']))
		                           echo($_GET['prix_produit']); ?>" 
		           placeholder="Enter le prix du produit">
		   </div>

           <button type="submit" 
		          class="btn btn-primary"
		          name="createP">ajouter</button>
		    <a href="afficheP.php" class="link-primary">liste des paniers</a>
        </form>
    </div>

 </body>
</html>