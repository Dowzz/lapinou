<<div class="mini">
  <h2 class="line_effect">
    <span>Les nouveautés</span>
  </h2>
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

use App\Livre;
$data=array();
$livre= Livre::whereGenre($categorie, 'desc')->get();
foreach ($livre as $l =>$i) {
  $id=$i->id;
  $data['id']=$i->id;
 ?><div  class="view view-fifth">  
         <img class="couv" src=" <?php echo ($i->couverture); ?>"> 
         <div class="mask">  
         <h2><?php echo ($i->titre); ?></h2>  
         <p class="description"><?php echo tronquer($i->description);?></p>
                 <a data-toggle="modal" href="#" data-target="#modal" class="LienModal" rel="<?php echo $id ?>">
            <div class="tagCloud">
              <span>
                <p>Lire la suite.
                </p>
              </span>
            </div>
         </a>
         </div> 
    </div>
<div id="modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p>Loading...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
 
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Event modal -->
<?php
}
?>
 
  <script>

        $(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"{{ url('/contenu/detail') }}",
            error:function(msg){
                $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-body").fadeIn(1000).html(data);
            }
        });
    });          
    </script>







