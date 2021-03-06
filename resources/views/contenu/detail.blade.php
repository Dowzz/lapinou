
<?php
use App\user;
use App\Livre;
use App\commentaire;
use App\commande;
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
	<?php if (Auth::user()){
		$id_user=Auth::user()->id;
	}else{
		$id_user=0;
	}
	?>
		<input type="hidden" id="user_id" value="<?php echo $id_user ?> ">
		<div class="prix">
			<h1><?php echo $prix; ?> €</h1>
		</div>
		<div id="notif"> </div>	
			<div class="col-md-6"><button type="button" class="btn btn-default btn-detail" id="addpanier">Ajouter au panier</button></div>
			<div class="col-md-6"><button type="button" class="btn btn-default btn-detail" id="addfav"><i class="fa fa-heart-o" aria-hidden="true"></i>  Ajout à la Todolist</button></div>
			
			<script>
			$('#addpanier').click(function() {
			  var id_livre=$("#idbook").val();
			  console.log(id_livre);
  				$.ajax({
		        data:({livre:id_livre}),
		        type:"post",
		        url: "./addpanier",
		        success: function(data){
		        	$("#notif").empty();
					$("#notif").append("Le livre a été ajouté a votre panier !");
					$('#notif').show(0).delay(1500).hide(200);	        	
		        }
			      });
  				function hidebox() { 
					document.getElementById("notif").visibility = "hidden";
				}
					setTimeout(hidebox(), 5000); 
				});	
			</script>
		</div>
		<div id="profile-description">
            <div class="text show-more-height">
                <p><?php echo $description ?></p>
            </div>
            <div class="show-more"><--- Lire la suite ---></div>
</div>
<h4 class="line_effect">
    <span>Commentaires</span>
</h4>
		<div class='comments'>
  			@if(Session::has('message'))
				            <div class="row">
				                <div class="col-md-12">
				                    <div class="alert alert-info">{{ Session::get('message') }}
				                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				                    </div>
				                </div>
				            </div>
            			@endif
  				<div class='inner'>
    				<div class='add-new'>
						@if (Auth::user())
							<?php $id_user=Auth::user()->id; ?>
	      					<input class='input your-name' placeholder="{{ Auth::user()->name }}" disabled/>
	      					<input type="hidden" id="iduser" value="<?php echo $id_user ?>" />
						@else 
						<?php $id_user='999';?>
							<input class='input your-name' placeholder="Anonymous" disabled/>
							<input type="hidden" id="iduser" value="<?php echo $id_user ?>" />
						@endif
						<?php $id_livre=$data->id; ?>
							<input class='input your-name' type="hidden" id="idlivre" value ="<?php echo $id_livre?>" />
							<input type="hidden" name="_token" value="{{csrf_token()}}" />
							<!--<p><?php echo $id_livre; echo $id_user;?></p>-->
	      					<textarea class='form-control2' id="commentaire" type='text' placeholder='Votre message' required></textarea>
	      					<button class="btn btn-msg" id="addcom">Envoyer</button>
    				</div>
  				</div>
  				  	<h4 class="line_effect"><span>Avis Clients</span></h4>
  						<div class="scroll-container">
  							<?php $coms=commentaire::where('id_livre', $id_livre)->get();
  								foreach ($coms as $com) {
			  						$user=$com->id_user;
			  						$iduser=user::where('id',$user)->first();
			  						$name=$iduser->name;?>
										<div class="add-new">
											<input class='input name' placeholder="<?php echo $name; ?>" disabled/>
  											<p class="coms">"<?php echo $com->comment; ?>"</p>
  										</div>
  							<?php
  							
  								}
  							?>
  						</div>
  		</div>

		<script>
		var user=$("#iduser").val();
 	 	var livre=$("#idlivre").val();
  		var comment=$("#commentaire").val();
		console.log(user,livre, comment );
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
  var id_user=$(this).attr("user");
  var id_livre=$(this).attr("livre");
  var comment=$("#commentaire").val();
  $.ajax({
        data:({user:user,livre:livre, comment:comment}),
        type:"post",
        url: "./addcomment",
        success: function(msg){
        	{ alert("Votre Commentaire a été enregistré ; merci !"); }
        }

      });
});
$("#addfav").on('click', function (e){
  var userid = $("#user_id").val();
  var data = $("#idbook").val();
  var title= $(".title").html();
  console.log(userid, data, title);
  $.ajax({
         data: ({userid:userid, todoText:title, data:data}),
         type: "get" ,
         url: "./insertodo",
         success: function(data){
		        	$("#notif").empty();
					$("#notif").append("Lelivre a été ajouté a votre Todolist");
					$('#notif').show(0).delay(1500).hide(200);	        	
		        }
         });
  if( title !== "") {
    $(".todoul").append("<li class=\"todoli\"><span class=\"todospan\"><i class='fa fa-trash'></i></span>" + title + "</li>");
    } 

});


    $(".show-more").click(function () {
        if($(".text").hasClass("show-more-height")) {
            $(this).text("(Fermer)");
        } else {
            $(this).text("(<--- Lire la suite --->)");
        }

        $(".text").toggleClass("show-more-height");
    });
</script>
