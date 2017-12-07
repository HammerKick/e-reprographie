<?php
$FichierValide = TRUE;
$maxsize = $_POST['MAX_FILE_SIZE'];
$message = "fichier bien envoyé";
if(isset($_POST['couverture']))
{
	$couverture = $_POST['couverture'];
}
else
{
	$couverture = "none";
}

$papier = $_POST['papier'];
$rectoverso = $_POST['rectoverso'];

if ($_FILES['mon_fichier']['size'] > $maxsize) $message = "Le fichier est trop gros";

$extensions_valides = array( 'txt' , 'pdf' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
if (!in_array($extension_upload,$extensions_valides) ){$message = "mauvaise extension";}

echo $message;
echo "<br>";

$id_membre = 'test';
//$id_membre = $_POST[''];	//à changer afin de récupérer le nom du user
$titre = $_POST['titre']; //contient le titre de l'envoi de l'utilisateur

echo "id membre : ".$id_membre;
echo "<br>";
echo "titre : ".$titre;
echo "<br>";
echo "couverture : ".$couverture;
echo "<br>";
echo "papier : ".$papier;	// !!! renvoit toujours on
echo "<br>";
echo "rectoverso : ".$rectoverso;	// !!! renvoit toujours on

//******* Mettre ici l'envoi de données à la base

/*
//Relatif à l'ecriture dans un fichier

if(!file_exists ( "fichier/{$id_membre}" ) )
{
	mkdir("fichier/{$id_membre}", 0777, true);
}

$nom = "fichier/{$id_membre}/{$titre}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";
*/
?>