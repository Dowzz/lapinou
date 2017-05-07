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
         <a class="adam" data_id="<?php echo $id ?>">
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

  ;
  ?>
  <div id="dialog_noemie">
        <div class="content">
          @include ('contenu.detail')
        </div>
    </div>
  <script>

         $(function() {
            $( "#noemie" ).dialog({
                autoOpen: false,
               
                    show: {
                    effect: "blind",
                    duration: 400,
                    },

                    hide: {
                    effect: "explode",
                    duration: 400
                    }
            });

            $( ".adam" ).click(function() {
                $( "#dialog_noemie").dialog({
                    open: function(event, ui) {

                    }
                });
            });
        });
    </script>

    <style>
      #dialog_noemie
    {
      background-color: #9d9d9d;
      display:none;
    }
    </style>








