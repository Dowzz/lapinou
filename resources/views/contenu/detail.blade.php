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
$id_livre=$data->id;
 
?>
	<h1 class="modal-title title"><?php echo $titre; ?></h1>
		<div class="row">
			<div class="col-md-6">
			<img class="couverture" src="<?php echo $couverture; ?>">
			<div class="wrap">
			<ul class="stars">
			<?php for ($i=5; $i >0 ; $i--) {
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
		<input type="hidden" id="idbook" value="<?php echo $id_livre ?> ">
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
    					<form id="adding" action="/addcomment" method="POST">
							@if (Auth::user())
							<?php $id_user=Auth::user()->id; ?>
	      					<input class='input your-name' placeholder="{{ Auth::user()->email }}" disabled/>
	      					<input type="hidden" id="user" value="<?php echo $id_user ?>" />
							@else 
							<input class='input your-name' placeholder="Anonymous" disabled/>
							<input type="hidden" id="user" value="0" />
							@endif
							<?php $id_livre=$data->id; ?>
							<input class='input your-name' type="hidden" id="livre" value ="<?php echo $id_livre?>" />
							<input type="hidden" name="_token" value="{{csrf_token()}}" />
	      					<textarea class='input your-msg' id="comment" type='text' placeholder='Votre message'></textarea>
	      					<button class="btn btn-msg" id="addcom" type="submit">Envoyer</button>
      					</form>
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
  $('#rating').val( el.attr('title') );
});

			$('#addcom').click(function() {
  var id_user=$("#user").val() ;
  var id_livre=$("#livre").val();
  var comment=$("#comment").text();
  console.log(id_user,id_book, comment );
  $.ajax({
      	data:({user:user,livre:livre, comment:comment}),
      	type:"post",
      	url: "./addcomment",
      });
});
	</script>
