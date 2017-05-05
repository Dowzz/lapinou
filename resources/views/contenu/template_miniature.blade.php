<div class="mini">

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
$livre= Livre::whereGenre($categorie)->get();
foreach ($livre as $l) {
    $id = ($l->id);
?>
    <div  class="view view-fifth">  
         <img class="couv" src=" <?php echo ($l->couverture); ?>"> 
         <div class="mask">  
         <h2><?php echo ($l->titre); ?></h2>  
         <p class="description"><?php echo tronquer($l->description);?></p>
         <a href="/contenu/detail?id=<?php echo $id?>">
            <div class="tagCloud">
              <span>
                <p>Lire la suite.
                </p>
              </span>
            </div>
         </a>
         </div> 
    </div>
   

<?php
}

?>
</div>
<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-side modal-top-right">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('contenu.detail')
            </div>
        </div>
    </div>
</div>
