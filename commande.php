<!DOCTYPE html>
<html>
<head>
	<title>ajouter commande</title>
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
            <form action="../Yassine/crud_commande/createC.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter commande</h4><hr><br>
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
		     <label for="ref">ref de commande</label>
		     <input type="number" 
		           class="form-control" 
		           id="ref" 
		           name="ref" 
		           value="<?php if(isset($_GET['ref']))
		                           echo($_GET['ref']); ?>" 
		           placeholder="Enter ref de commande">
		 </div>
           <div class="form-group">
		     <label for="prix">prix de la commande</label>
		     <input type="number" 
		           class="form-control" 
		           id="prix" 
		           name="prix" 
		           value="<?php if(isset($_GET['prix']))
		                           echo($_GET['prix']); ?>"
		           placeholder="Enter prix de commande">
		   </div>
           <div class="form-group">
		     <label for="date_commande">date de la commande</label>
		     <input type="date" 
		           class="form-control" 
		           id="date_commande" 
		           name="date_commande" 
		           value="<?php if(isset($_GET['date-commande']))
		                           echo($_GET['date_commande']); ?>" 
		           placeholder="Enter date de la commande">
		   </div>
           <button type="submit" 
		          class="btn btn-primary"
		          name="createC">ajouter</button>
		    <a href="afficheC.php" class="link-primary">liste des commandes</a>
        </form>
    </div>

 </body>
</html>