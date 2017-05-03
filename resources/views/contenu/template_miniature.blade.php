<div class="mini">

<?php 

use App\Livre;
$livre= Livre::all();
foreach ($livre as $l) {
?>

    <div  class="view view-fifth">  
         <img class="couv" src=" <?php echo ($l->couverture); ?>"> 
         <div class="mask">  
         <h2><?php echo ($l->titre); ?></h2>  
         <p><?php echo ($l->description);?></p>
         <a href="#" >
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