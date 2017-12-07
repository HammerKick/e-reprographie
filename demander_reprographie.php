<html>
<head>
<meta charset="utf-8">
<title>IUT DE VELIZY - Reprographie: Demande</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<body>
<nav class="nav navbar-default navbar-fixed-top">
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Accueil</a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="#">Se connecter</a>
	</li>
  <li class="nav-item">
    <a class="nav-link" href="demander_reprographie.php">Demander une impression</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Liste des impressions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Statistiques</a>
  </li>
</ul>
</nav>

<center>
<div class="jumbotron">
  <h1 class="display-5">Demander une impression</h1>
  <p class="lead">Remplissez ce formulaire pour faire votre demande</p>
  </p>
</div>

<form method='post' action='reception.php' enctype='multipart/form-data'>
  <div class="form-group">
    <label for="nomDuFichier">Nom du document <input type="text" class="form-control" name="titre"></label>
  </div>
  
  <div class="form-group">
	<label for="fichier">Fichier à imprimer <strong>(formats acceptés : .pdf, .txt ; taille max : 1 Mo)</strong> <input type="file" class="form-control" name="mon_fichier"></label>
  </div>
  
  <div class="form-group">
	<label for="departement">Département
	
	<select class="form-control" name="departement">
	<option>Informatique</option>
	<option>MMI</option>
	<option>GEII</option>
	<option>Autre</option></label>
	
	</select>
	</div>
  
  <div class="form-group">
	<label for="options">
	Couverture ? <input type="checkbox" name="couverture" id="couverture"><br>
	<label><strong>Couleurs :</strong></label> <input type="radio" name="papier" id="papierblanc"> <label id="papierblanc">Papier blanc</label> <input type="radio" name="papier" id="papiercouleur"> Papier couleur<br>
	<label><strong>Sens :</strong></label> <input type="radio" name="rectoverso" id="recto"> Recto seulement <input type="radio" name="rectoverso" id="lesdeux"> Recto/Verso
	<br><br>
	</label>
	
	<input type='hidden' name='MAX_FILE_SIZE' value='1048576' />
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>