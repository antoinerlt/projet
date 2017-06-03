<!DOCTYPE html>
<html lang="fr" class="fond-bleu">
<head>
	<meta charset="UTF-8">
	<title>Connexion Session</title>
	<link rel="shortcut icon" type="image/png" href="image/logo/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-accueil.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,700" rel="stylesheet">
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body class="fond-eleve">
	<div class="container">
		<div class="row contenu-connexion">
			<div class="col-md-offset-4 col-md-4">
				<img src="image/perso-duo.svg" alt="personnage try agence" class="img responsive">
			</div>
		</div>
		<article id="nom-agence">
			<div class="row contenu-connexion">
				<div class="col-md-offset-3 col-md-6">
					<h3 class="h3-white"> PRÊT À TENTER L'EXPERIENCE ? </h3>
				</div>
			</div>
			<div class="row">
				<main class="connexion-session col-md-offset-3 col-md-6">
					<form class="form-horizontal">
						<fieldset>

						<!-- Form Name -->
						<legend class="titre-formulaire">Comment s'appelle ton agence ?</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="lien-session"></label>  
						  <div class="col-md-6">
						  <input id="nom-agence" name="nom-agence" type="text" placeholder="Nom de l'agence" class="form-control input-md" required="">
						    
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-8 control-label" for="rejoindre-session"></label>
						  <div class="col-md-4">
						    <button id="btn-confirm-name" name="rejoindre-session" class="btn btn-primary btn-eleve">Confirmer</button>
						  </div>
						</div>

						</fieldset>
					</form>
				</main>
			</div>
		</article>
		<article id="acces-session" class="active">
			<div class="row contenu-connexion">
				<div class="col-md-offset-3 col-md-6">
					<h3 class="h3-white">BIENVENUE JEUNE ENTREPRENEUR</h3>
				</div>
			</div>
			<div class="row">
				<main class="connexion-session col-md-offset-3 col-md-6">
					<form class="form-horizontal">
						<fieldset>

						<!-- Form Name -->
						<legend class="titre-formulaire">Rentre le lien de la session que ton professeur t’as partagé</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="lien-session"></label>  
						  <div class="col-md-6">
						  <input id="lien-session" name="lien-session" type="text" placeholder="Insérer le lien de la session " class="form-control input-md" required="">
						    
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-8 control-label" for="rejoindre-session"></label>
						  <div class="col-md-4">
						    <button id="btn-rejoindre-session" name="rejoindre-session" class="btn btn-primary btn-eleve">Accès session</button>
						  </div>
						</div>

						</fieldset>
					</form>
				</main>
			</div>
			
		</article>

	</div>
	<script type="text/javascript">
		var boutton = document.getElementById("btn-confirm-name");
		var current = document.getElementById("nom-agence");
		var next = document.getElementById("acces-session");

		boutton.addEventListener("click",change);

		function change (){
			current.classList.add("active");
			next.classList.remove("active");
		}
	</script>
</body>
</html>