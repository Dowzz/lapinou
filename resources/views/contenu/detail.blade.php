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
			<div class="wrap">
			<ul class="stars">
			<?php for ($i=1; $i <6 ; $i++) {
				if ($notes==$i) {
					?>
					<li class="current" title="<?php echo $i?>"></li>
					<?php 
				}
				else{
					?>
					<li title="<?php echo $i?>"></li>
					<?php
				} 	
			}
				   ?>
			</ul>
  			<input id="rating" type="hidden" class="required">
		</div>
		</div>
		<div class="col-md-6 genre">
			<p><?php echo $genre; ?></p>
			<p>Auteur : <?php echo $auteur; ?></p>
			<p>Editeur : <?php echo $editeur; ?></p>
			<p>Le <?php echo $parution; ?></p>
		</div>
		<input type="hidden" id="idbook" value="<?php echo $data->id ?> ">
		<div class="prix">
			<h1><?php echo $prix; ?> €</h1>
		</div>	
			<button type="submit" class="btn btn-default btn-detail">Ajouter au panier</button>
		</div>
		<div class="summaryText">
  			<a  id="show-more" class="show-less" href="#show-less">Fermer</a>
  			<a  id="show-less" class="show-more" href="#show-more">Ouvrir</a>
			<p class="synopsis"><?php echo $description; ?></p>
		</div>
<h4 class="line_effect">
    <span>Commentaires</span>
  </h4>
		<div class='comments'>
  			
  				<div class='inner'>
    				<div class='add-new'>
      					<input class='input your-name' placeholder='Votre nom' type='text'>
      					<textarea class='input your-msg' type='text' placeholder='Votre message'></textarea>
      					<button class="btn btn-default btn-msg">Envoyer</button>
    				</div>
  				</div>
		</div>
		<script>
			$('.stars').on('click', 'li', function() {
  var el = $(this);
  var note=$(this).attr("title");
  var bookid=$("#idbook").val();
  console.log(note, bookid);
  $.ajax({
      	data:({note:note, bookid}),
      	type:"post",
      	url: "./notation",
      });
  el.addClass('current').siblings().removeClass('current');
  $('#rating').val( el.attr('title') ); // save value
});
	</script>
