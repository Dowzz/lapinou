<?php 
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

<div class="mini">
  <h1 class="line_effect">
    <span>Resultats de votre Recherche</span>
  </h1>
  <?php 
  use App\Livre;
  $query=$_GET["data"];
  $livre= Livre::where('titre','LIKE','%'.$query.'%')
                ->orwhere('auteur', 'LIKE', '%'.$query.'%')
                ->orwhere('editeur', 'LIKE', '%'.$query.'%')
                ->orwhere('format', 'LIKE', '%'.$query.'%')
                ->orderBy('id')->paginate();
if ($livre) {
  foreach ($livre as $l) {
  $id= $l->id;
  ?>
  <div class="view view-fifth">  
     <img class="couv" src=" <?php echo ($l->couverture); ?>"> 
     <div class="mask">  
     <h2><?php echo ($l->titre); ?></h2>  
     <p class="description"><?php echo tronquer($l->description);?></p>
     <a data-toggle="modal" href="#" data-target="#modal" class="LienModal" rel="<?php echo $id ?>">
        <div class="tagCloud">
          <span>
            <p>Lire la suite.</p>
          </span>
        </div>
     </a>
     </div> 
  </div>
  <?php
  }
}
else{
  ?>
  <h1><span>Desolé, nous n'avons pas reussi a trouvé le livre de vos rèves...</span></h1>
  <?php
}
  ?>

  <div id="modal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-text">
            <p>Chargement en cours...</p>
        </div> 
      </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<!-- Event modal -->

  <div class="mini">
    <h2 class="line_effect">
      <span>Les nouveautés</span>
    </h2>
  <?php 
  $livre= Livre::orderBy('id', 'desc')->take(10)->distinct()->get();
  foreach ($livre as $l) {
  $id= $l->id;
  ?>
    <div  class="view view-fifth">  
       <img class="couv" src=" <?php echo ($l->couverture); ?>"> 
       <div class="mask">  
       <h2><?php echo ($l->titre); ?></h2>  
       <p class="description"><?php echo tronquer($l->description);?></p>
       <a data-toggle="modal" href="#" data-target="#modal" class="LienModal" rel="<?php echo $id ?>">
          <div class="tagCloud">
            <span>
              <p>Lire la suite.</p>
            </span>
          </div>
       </a>
       </div> 
    </div>

  <?php
  }
  ?>
  </div>
 
 
  <div class="mini">
  <h2 class="line_effect">
  <span>Les meilleurs ventes</span>
  </h2>
  <?php 
  $livre= Livre::where ('prix', '>', 12)->take(10)->distinct()->get();
  foreach ($livre as $lp) {
  $id= $lp->id;
  ?>
    <div  class="view view-fifth">  
       <img class="couv" src=" <?php echo ($lp->couverture); ?>"> 
       <div class="mask">  
       <h2><?php echo ($lp->titre); ?></h2>  
       <p class="description"><?php echo tronquer($lp->description);?></p>
       <a data-toggle="modal" href="#" data-target="#modal" class="LienModal" rel="<?php echo $id ?>">
          <div class="tagCloud">
            <span>
              <p>Lire la suite.</p>
            </span>
          </div>
       </a>
       </div> 
    </div>
  <?php
  }
  ?>
  </div>
  <div class="mini">
  <h2 class="line_effect">
  <span>Notre sélection</span>
  </h2>
  <?php 
  $livre= Livre::where ('notes', '>=', 4)->take(10)->distinct()->get();
  foreach ($livre as $ln) {
  $id= $ln->id;
  ?>
    <div  class="view view-fifth">  
       <img class="couv" src=" <?php echo ($ln->couverture); ?>"> 
       <div class="mask">  
       <h2><?php echo ($ln->titre); ?></h2>  
       <p class="description"><?php echo tronquer($ln->description);?></p>
       <a data-toggle="modal" href="#" data-target="#modal" class="LienModal" rel="<?php echo $id ?>">
          <div class="tagCloud">
            <span>
              <p>Lire la suite.</p>
            </span>
          </div>
       </a>
       </div> 
    </div>
  <?php
  }
  ?>
  </div>
   <div></div> 
   <script>

    $(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-text").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"{{ url('/contenu/detail') }}",
            error:function(msg){
                $(".modal-text").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-text").fadeIn(1000).html(data);
            }
        });
    });      

    </script>

