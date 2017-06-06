@if (session('status'))
    <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('status') }}
    </div>
@endif

<?php 
use App\contact;
use App\user;
use App\publication;
?>

<div class="mini">
	<div class="span-ajout">
        <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1default" data-toggle="tab">Publication en attente</a></li>
                    <li><a href="#tab2default" data-toggle="tab">Demandes de Contact</a></li>
                    <li><a href="#tab3default" data-toggle="tab">AJout de livre</a></li>
                </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1default">
            <h2>Livres en attente de publications</h2>               
                <table class="cell">
                   <thead>
                       <th>Titre</th>
                       <th>Auteur</th>
                       <th>Publié par</th>
                    </thead>
                    <body>
                        
            <?php 
            $publish = publication::where('publiable',0)->get();
            foreach ($publish as $livre) {
                $id= $livre->id;
                $user = user::where('id', $id)->first();
               ?>
                        <tr>
                            <td><?php echo $livre->titre ?></td>
                            <td><?php echo $livre->auteur?></td>
                            <td><?php echo $user->email?></td>
                            <td><a data-toggle="modal" href="#" data-target="#modalinfos" class="LinkModal" rel="<?php echo $id ?>">Infos Supplémentaires</a></td>
                        </tr>
            <?php
            }
            ?>
                    </body>
                </table>
                <h2>Livres refusés</h2>               
                <table class="cell">
                   <thead>
                       <th>Titre</th>
                       <th>Auteur</th>
                       <th>Publié par</th>
                    </thead>
                    <body>
                        
            <?php 
            $publish = publication::where('publiable',2)->get();
            foreach ($publish as $livre) {
                $id= $livre->id;
                $user = user::where('id', $id)->first();
               ?>
                        <tr>
                            <td><?php echo $livre->titre ?></td>
                            <td><?php echo $livre->auteur?></td>
                            <td><?php echo $user->email?></td>
                            <td><a data-toggle="modal" href="#" data-target="#modalinfos" class="LinkModal" rel="<?php echo $id ?>">Infos Supplémentaires</a></td>
                        </tr>
            <?php
            }
            ?>
                    </body>
                </table>
                <div>
                <a href="pubclean"><button id="bouton-panier" class="btn btn-elegant">Nettoyer</button></a>
                </div>
            </div>

            <div class="tab-pane fade" id="tab2default">
                <div class="span-recep">
                    <h3>Reception demande de contact</h3>
                    <div class="scroll-container"> 
                    <?php                     
                    $contacts=contact::orderBy('created_at', 'desc')->distinct()->get();
                    foreach ($contacts as $contact) {
                        $client = user::where('email', $contact->mail)->first();
                        if (!empty($client)){
                            $client = '<i class="fa fa-star"></i>   Client';
                        }
                        ?>
                               
                        <div class="col-md-5 reception">
                            <div class="comment-user"><i class="fa fa-user"></i>   <?php echo $contact->pseudo ?>  </div>
                            <div class="comment-user"><i class="fa fa-envelope-o"></i>   <?php echo $contact->mail ?>  </div>
                            <div class="comment-user"><i class="fa fa-slack"></i>   <?php echo $contact->commande ?>  </div>
                        </div>  
                        <div class="col-md-5 reception">  
                            <div class="comment-user"><i class="fa fa-question"></i>   <?php echo $contact->objet ?>  </div>
                            <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i>   <?php echo $contact->created_at ?></time>
                            <div class="comment-user">  <?php echo $client ?>  </div><br />
                                </div>
                        <div class="col-md-2">
                            <a class="btn btn-elegants" href="mailto:<?php echo $contact->mail ?>" aria-label="mail">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-elegants" href="/deletecontact?id=<?php echo $contact->id ?>" aria-label="Delete">
                            <input type="hidden" id="idcontact" value="<?php echo $contact->id ?>">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-3 message">Message : </div>
                            <div class="col-md-12">        
                            <p class="mail">
                                "<?php echo $contact->demande ?>"
                            </p>
                        </div>
                        <hr>
                        <?php
                        } ?>
                        
                    </div>                     
                </div>
            </div>
            <div class="tab-pane fade" id="tab3default">
                <form id="logout-form" action="/livrestore" method="POST">
                    <h3>Demande de publication</h3>
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
    </div>
</div>

        <div id="modalinfos" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-text">
                    <p>Chargement en cours...</p>
                </div>
        </div>
    </div>
</div>




	

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

    $(".LinkModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-text").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"{{ url('/modals/publishmodal') }}",
            error:function(msg){
                $(".modal-text").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-text").fadeIn(1000).html(data);
            }
        });
    });   
</script>