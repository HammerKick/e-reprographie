<?php
$FichierValide = TRUE;
$maxsize = $_POST['MAX_FILE_SIZE'];
$message = "fichier bien envoyé";

$couverture = $_POST['couverture'];
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

echo $id_membre;
echo "<br>";
echo $titre;
echo "<br>";
echo $couverture;
echo "<br>";
echo $papier;
echo "<br>";
echo $rectoverso;

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