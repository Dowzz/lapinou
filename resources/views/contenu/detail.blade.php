<?php
use App\Livre;
"variable get : ".$_GET["Id"];
$data= Livre::find($_GET["Id"]);
$couverture=$data->couverture;
$titre=$data->titre;
$auteur=$data->auteur;
$editeur=$data->editeur;
$parution=$data->parution;
$description=$data->description;
$genre=$data->genre;
$format=$data->format;
$notes=$data->notes;
$prix=$data->prix;
?>

<h1><?php echo $titre; ?></h1>
<img class="couv" src="<?php echo $couverture; ?>">
<p><?php echo $description; ?></p>
<p><?php echo $prix; ?></p>




