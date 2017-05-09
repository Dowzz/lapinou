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
	<h1 class="modal-title title"><?php echo $titre; ?></h1>
		<div class="row">
			<div class="col-md-6">
			<img class="couverture" src="<?php echo $couverture; ?>">
		</div>
		<div class="col-md-6 genre">
			<p><?php echo $genre; ?></p>
			<p>Auteur : <?php echo $auteur; ?></p>
			<p>Editeur : <?php echo $editeur; ?></p>
			<p>Le <?php echo $parution; ?></p>
		</div>
		<div class="wrap">
			<ul class="stars">
			    <li title="5"></li>
			    <li title="4"></li>
			    <li title="3"></li>
			    <li title="2"></li>
			    <li title="1"></li>
			</ul>
  			<input id="rating" type="hidden" class="required">
		</div>
		<div class="col-md-6 prix">
			<h1><?php echo $prix; ?> €</h1>
		</div>
			

		</div>
		<div class="summaryText">
  			<a  id="show-more" class="show-less" href="#show-less">Fermer</a>
  			<a  id="show-less" class="show-more" href="#show-more">Ouvrir</a>
				<p class="synopsis"><?php echo $description; ?></p>
		</div>
		
		



