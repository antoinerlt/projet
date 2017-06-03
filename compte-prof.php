<!DOCTYPE html>
<html lang="fr" class="fond-rouge">
<head>
	<head>
	<meta charset="UTF-8">
	<title>Compte Professeur Try Agence</title>
	<link rel="shortcut icon" type="image/png" href="image/logo/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-accueil.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,700" rel="stylesheet">
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="fond-prof">
	<main class="compte-prof">
	  <img src="image/logo/tryagence-logo.svg" alt="logo try agence" class="logo">
	  <article class="compte">
	  		<div class="block-head">
	  			<h3 class="profil">Profil</h3>
	  			<a href="connexion-prof.html" class="btn btn-primary btn-prof">Créer une session</a>
	  		</div>
	  		<div class="block-compte">
		  		<div class="col-md-offset-4 col-md-5">
		  			<img src="image/web-deus.svg" alt="dieu des agences" class="image-profil">
		  		</div>
				<div class="form-group">
				 	<label class="col-md-offset-4 col-md-4 control-label" for="mdp"> Nom</label>  
				  		<div class="col-md-offset-4 col-md-4">
				  			<input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">
				  		</div>
				</div>
				<div class="form-group">
				 	<label class="col-md-offset-4 col-md-4 control-label" for="mdp">Prénom</label>  
				  		<div class="col-md-offset-4 col-md-4">
				  			<input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md" required="">
				  		</div>
				</div>
				<div class="form-group">
				 	<label class="col-md-offset-4 col-md-4 control-label" for="mdp">Adresse mail</label>  
				  		<div class="col-md-offset-4 col-md-4">
				  			<input id="mail" name="mail" type="text" placeholder="Adresse mail" class="form-control input-md" required="">
				  		</div>
				</div>
				<div class="form-group">
				 	<label class="col-md-offset-4 col-md-4 control-label" for="mdp">Mot de passe</label>  
				  		<div class="col-md-offset-4 col-md-4">
				  			<input id="mdp" name="mdp" type="text" placeholder="Mot de passe" class="form-control input-md" required="">
				  		</div>
				</div>
				<div class="form-group">
				 	<label class="col-md-offset-4 col-md-4 control-label" for="mdp">Ville</label>  
				  		<div class="col-md-offset-4 col-md-4">
				  			<input id="ville" name="ville" type="text" placeholder="Ville" class="form-control input-md" required="">
				  		</div>
				</div>
				<div class="form-group">
	  				<label class="col-md-offset-4 col-md-4 control-label" for="modifier"></label>
	  				<div class="col-md-4">
	    					<button id="modifier-prof" name="modifier" class="btn btn-primary btn-prof-interaction">Modifier</button>
	  				</div>
				</div>
	  		</div>
	  </article>
	</main>
</body>
</html>