<?php
use App\user;
use App\publication;
"variable get : ".$_GET["Id"];
$data= publication::find($_GET["Id"]);
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
function tronquer($description)
{
    //nombre de caractères à afficher
    $max_caracteres=180;
    // Test si la longueur du texte dépasse la limite
    if (strlen($description)>$max_caracteres)
    {    
        // Séléction du maximum de caractères
        $description = substr($description, 0, $max_caracteres);
        // Récupération de la position du dernier espace (afin déviter de tronquer un mot)
        $position_espace = strrpos($description, " ");    
        $description = substr($description, 0, $position_espace);    
        // Ajout des "..."
        $description = $description."...";
    }
    return $description;
}
?>
	<h1 class="modal-title title"><?php echo $titre; ?></h1>
		<div class="row">
			<div class="col-md-6">
			<img class="couverture" src="<?php echo $couverture; ?>">
				<div class="wrap">
  					<input id="rating" type="hidden" class="required">
				</div>
			</div>
			<input type="hidden" id="idbook" value="<?php echo $id_livre ?> ">
		<div class="col-md-6 genre">
			<p><?php echo $genre; ?></p>
			<p>Auteur : <?php echo $auteur; ?></p>
			<p>Editeur : <?php echo $editeur; ?></p>
			<p>Le <?php echo $parution; ?></p>
			<div class="prix">
			<h4><?php echo $prix; ?> €</h4>
		</div>
		<div class="summaryText">
  			<a  id="show-more" class="show-less" href="#show-less">Fermer</a>
  			<a  id="show-less" class="show-more" href="#show-more">Ouvrir</a>
			<p class="synopsis"><?php echo $description; ?></p>
		</div>
		</div>
		
			<button type="button" class="btn btn-default" id="validpub">Valider</button>
			<button type="button" class="btn btn-default" id="refuspub">Refuser</button>
		</div>


		<script>
		$('#validpub').click(function() {
			  var id_livre=$("#idbook").val();
			  console.log(id_livre);
  				$.ajax({
		        data:({livre:id_livre}),
		        type:"post",
		        url: "./validpub",
		        success: function(data){
		        	$("#notif").empty();
					$("#notif").append("Le livre a été validé !");
					$('#notif').show(0).delay(1500).hide(200);	        	
		        }
			      });
  				function hidebox() { 
					document.getElementById("notif").visibility = "hidden";
				}
					setTimeout(hidebox(), 5000); 
				});

		$('#refuspub').click(function() {
			  var id_livre=$("#idbook").val();
			  console.log(id_livre);
  				$.ajax({
		        data:({livre:id_livre}),
		        type:"post",
		        url: "./refuspub",
		        success: function(data){
		        	$("#notif").empty();
					$("#notif").append("Le livre a été refusé !");
					$('#notif').show(0).delay(1500).hide(200);	        	
		        }
			      });
  				function hidebox() { 
					document.getElementById("notif").visibility = "hidden";
				}
					setTimeout(hidebox(), 5000); 
				});

					</script>
			
		


