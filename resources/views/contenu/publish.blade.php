@if (session('status'))
    <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('status') }}
    </div>
@endif



<div class="mini">
	<div class="span-ajout">
    <form id="logout-form" action="/dempublish" method="POST">
		<h3>Ajout d'un livre</h3>
        <?php 
        $userid = Auth::user()->id;
        ?>
        <input type="hidden" name="id_user" value="<?php echo $userid ?>">   
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-link fa-fw"></i></span>
            <input class="form-control" name="couverture" type="text" placeholder="URL de couverture">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-font fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Titre" name="titre">
        </div> 
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Auteur" name="auteur">
        </div> 
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-file-text-o fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Editeur" name="editeur">
        </div> 
        <div class="input-group margin-bottom-sm"> 
            <span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>       
            <select id="demande" id="subject" name="genre" name="subject" class="form-control" required="required">
            <option value="na" selected="">Genre :</option>
            <option value="amateur">Auteur Amateur/indépendant</option>
            <option value="aventure">Aventure / Action</option>
            <option value="classique">Classique</option>
            <option value="conte">Conte</option>
            <option value="dystopie">Dystopie</option>
            <option value="espionnage">Espionnage</option>
            <option value="fantastique">Fantastique</option>
            <option value="horreur">Horreur / Terreur / Frisson</option>
            <option value="gratuit">Gratuit</option>
            <option value="humour">Humour</option>
            <option value="jeunesse">Jeunesse</option>
            <option value="historique">Historique</option>
            <option value="policier">Policier</option>
            <option value="science-fiction">Science-fiction</option>
            <option value="thriller">Thriller</option>
            <option value="western">Western</option>
            </select>                  
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-comments-o fa-fw"></i></span>
            <textarea class="form-control" type="text" placeholder="Résumé" name="description"></textarea>
        </div> 
        <div class="input-group margin-bottom-sm"> 
            <span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>       
            <select id="demande" id="subject" name="format" name="subject" class="form-control" required="required">
            <option value="na" selected="">Format :</option>
            <option value="epub">Epub</option>
            <option value="multi">Multi</option>
            <option value="pdf">Pdf</option>
            </select>                  
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <input class="form-control" type="text" id="date-picker" name="parution" placeholder="Date de parution">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-eur fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Prix du livre" name="prix">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-eur fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Lien de Téléchargement" name="link">
        </div>  
        <div>
            <button id="bouton-panier"  type="submit" class="btn btn-elegant">Enregistrer</button>
        </div>
        </form>
	</div>
</div>
<h2 class="line_effect">
    <span>Mes publications</span>
  </h2>
  <table class="cell">
        <thead>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Status</th>
        </thead>
        <body>
            <tr>
<?php
use App\publication; 
$user= Auth::user()->id;
$livres = publication::where('user', $user)->get();
foreach ($livres as $livre) {   ?> 
        <td><?php echo $livre->titre ?></td>
        <td><?php echo $livre->auteur ?></td>
        <td><?php if ($livre->publiable == 0){
                    echo "En cours de validation";
                    }
                    elseif($livre->publiable == 1){
                        echo "Livre Validé";
                        }
                    else{
                        echo "Livre refusé";
                        } ?></td>
        </tr>
    <?php
}
?>
            
        </body>
    </table>






<script>

    $(document).ready(function(){
  $("#date-picker").datepicker({
    dateFormat: "yy-mm-dd",
    showButtonPanel: false,
    changeMonth: true,
    changeYear: true,
    closeText: "OK", 
    prevText: "Prec", 
    nextText: "suiv",
    currentText: "aujourdhui", 
    monthNames: ["Janvier","Fevrier","Mars","Avril","Mai","Juin",
            "Juillet","Aout","Septembre","Octobre","Novembre","Decembre"], 
    monthNamesShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jun", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"], 
    dayNames: ["dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"], 
    dayNamesShort: ["dim", "lun", "mar", "mer", "jeu", "ven", "Sam"], 
    dayNamesMin: ["di","lu","ma","me","je","ve","Sa"], 
    weekHeader: "Wk",  
    firstDay: 1,

  });
});     
</script>