<div class="container profile">
    <div class="row" id="profile">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="span12">
                <div class="well well-small clearfix">
                    <div class="span2">
                        <img src="{{URL::asset('/img/profil.jpg')}}" class="img-polaroid"/>
                    </div>

                    <div class="span4">
                        <h2>{{ Auth::user()->name }}</h2> 
                            <ul class="liste" class="unstyled">
                                <li>{{ Auth::user()->email }}</li>
                                <li>Né(e) le {{ Auth::user()->naissance->format('d/m/Y') }} </li>
                                <li>Inscrit le {{ Auth::user()->created_at->format('d/m/Y') }}</li>
                            </ul>
                    </div>

                    <div class="span6">
                        <ul class="inline stats">
                            <li class="livres">
                                <span>27</span>
                                    Livres
                            </li>
                            <li class="livres">
                                <span>12</span>
                                    Livres à lire
                            </li>
                            <li class="livres">
                                <span>15</span>
                                    Livres lus
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Mes informations personnelles</a>
                        </h4>
                    </div>  
                    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input id="nom" onfocusout="update(id)" class="form-control" type="text" placeholder="{{ Auth::user()->nom }}">
                            </div>   
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-users fa-fw"></i></span>
                                <input id="prenom" onfocusout="update(id)" class="form-control" type="text" placeholder="{{ Auth::user()->prenom }}">
                            </div>
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                <input id="email" onfocusout="update(id)" class="form-control" type="text" placeholder="{{ Auth::user()->email }}">
                            </div>
                            <input type="hidden" id="maj_id" value="{{ Auth::user()->id }}">
                            <div class="input-group margin-bottom-sm">    
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                <input onfocusout="update(id)"  type="text" id="naissance" class="form-control" placeholder="{{ Auth::user()->naissance->format('j-m-Y') }}">
                            </div>
                            <script>
                            function update(id) {
                            var x = document.getElementById(id).value;
                            var user=$("#maj_id").val();
                            console.log(x, id, user);
                                $.ajax({
                                    data:({id, x, user}),
                                    type:"post",
                                    url: "./majuser",
                                });
                            }
                            </script>
                        </div>
                    </div>
                </div>


            
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Mes commandes</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                     <table class="table table-xs">
                            <tr class="ligne">
                                <th> N° commande </th>
                                <th> Titre / Téléchargement </th>
                                <th class="text-right"> Date </th>
                                <th class="text-right"> Prix </th>
                            </tr>                            
                        <?php 
                        use App\recap;
                        use App\order;
                        use App\livre;
                        $userid=Auth::user()->id;
                        $recaps=recap::where("id_user", $userid)->orderBy('identifier', 'desc')->distinct()->get();
                        foreach ($recaps as $recap) {
                            $Norder = $recap->identifier;
                            ?><?php
                            $orders = order::where('Norder',$Norder)->orderBy('identifier', 'desc')->distinct()->get();
                                foreach ($orders as $order) {
                                    $idlivre=$order->id_livre;
                                    $livre=livre::where('id', $idlivre)->first();

                                    ?>
                                     <tr class="epais">
                                <td rowspan="2"><?php echo $Norder ?></td>
                                <td><?php echo $livre->titre ?></td>
                                <td class="text-right" title="Date"><?php echo $recap->created_at->format('d-m-Y') ?> </td>
                                <td class="text-right" title="Price"><?php echo number_format((float)$recap->totalttc, 2, '.', ''); ?> €</td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo $livre->link ?>">Télécharger le livre</a></td>
                            </tr>
                            <?php        
                                }
                        }
                        ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Mes avis</a>
                    </h4>
                </div>

                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                    <?php 
                    use App\commentaire;
                    $id_user=Auth::user()->id;
                    $coms=commentaire::where('id_user',$id_user)->get();
                    foreach ($coms as $com) {
                        $idlivre=$com->id_livre;
                        $livre=Livre::where('id', $idlivre)->first();
                        $titre=$livre['titre'];
                    ?>
                        <div class="newt" class="comment-user"><i class="fa fa-book"></i> <?php echo $titre; ?></div>
                        <div class="newt" class="comment-post">
                            <p id="resume"><br />
                                <?php echo $com->comment; ?>
                            </p>
                        </div>
                        <hr class="epais">
                        <?php 
                        }
                        ?>
                        </div>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Mes paramètres</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <b class="newt">To do list </b>
                        <?php $todo=Auth::user()->todo;?>
                            <input type="checkbox" name="checked" id="checkbox1" <?php if ($todo == 1){?> checked="checked" <?php } ?>/>
                        <script>
                            $('#checkbox1').change(function() {
                              var id_user=$("#maj_id").val();   
                              if ($(this).is(':checked')) {
                                var todo = 1;
                                var div=document.getElementById("texte");
                                div.textContent = "Todolist activée !";
                                var text = div.textCont
                              } else {
                                var todo = 0;
                                var div=document.getElementById("texte");
                                div.textContent = "Todolist Désactivée !";
                                var text = div.textCont
                              }
                              console.log(todo);
                                $.ajax({
                                data:({todo, id_user}),
                                type:"post",
                                url: "./majtodo",
                                }); 
                            });
                        </script>
                        <b class="newt">Newletter</b>
                            <input type="checkbox" name="checked" id="checkbox2" value="None" />
                            <div id=texte></div>
                        <script>
                            $('#checkbox2').change(function() {
                              if ($(this).is(':checked')) {
                                console.log('Checked');
                                var div=document.getElementById("texte");
                                div.textContent = "Merci pour votre souscription. Vous recevrez bientot votre première Newsletter !";
                                var text = div.textContent;
                              } else {
                                console.log('Unchecked');
                              } 
                            });
                        </script>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <button type="button" id="supprimer" class="btn btn-elegant tooltips" data-toggle="tooltip" data-placement="top" title="Votre compte va être supprimé, vous ne pourrez plus y acceder.">Suppression de compte</button>
  <script>
      $('#supprimer').click(function showConfirm()
            {   
                var user=$("#maj_id").val();
                var answer=confirm("Vous voulez vraiment nous quitter ?");
                if (answer==true)
                {
                    $.ajax({
                    data:({user}),
                    type:"post",
                    url: "./delaccount",
                    });
                    alert("Votre compte est désactivé.");

                    window.location="{{URL::to('/')}}";
                }
                else
                {
                    alert("Ouf ! Vous nous avez fait peur !");
                }
});
  </script>
<script>$(document).ready(function(){
  $("#naissance").datepicker({
    dateFormat: "yy-mm-dd",
    showButtonPanel: false,
    changeMonth: true,
    changeYear: true,
    closeText: "OK", 
    prevText: "Prec. ", 
    nextText: " Suiv.",
    currentText: "Aujourd'hui", 
    monthNames: ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"], 
    monthNamesShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jun", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"], 
    dayNames: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"], 
    dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"], 
    dayNamesMin: ["Di","Lu","Ma","Me","Je","Ve","Sa"], 
    weekHeader: "Wk", 
    firstDay: 1,
    yearRange: "c-100:c+100",
    onClose: function () {
        $(this).focus();  
        } 
    });
});
</script>




    


