
<div class="container profile">
    <div class="row" id="profile">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="span12">
                <div class="well well-small clearfix">
                    <div class="span2">
                        <img src="{{URL::asset('/img/profil.jpg')}}" class="img-polaroid"/>
                    </div>

                    <div class="span4">
                        <h2>Lapinou</h2> 
                            <ul class="liste" class="unstyled">
                                <li>Lapinou@mail.com</li>
                                <li>Né(e) le 25 septembre 2000</li>
                                <li>Incription le 14 février 2011</li>
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
                            <input class="form-control" type="text" placeholder="Nom">
                        </div>   
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-users fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Prénom">
                        </div>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        
                        <div class="input-group margin-bottom-sm">    
                            <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                            <input type="text" id="date-picker" placeholder="Date de naissance">
                        </div>
                        
                        <div>
                            <button id="bouton-panier" id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Enregistrer</button>
                        </div>
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
                            <tr>
                                <th> N° commande </th>
                                <th> Titre </th>
                                <th class="text-right"> Date </th>
                                <th class="text-right"> Prix </th>
                            </tr>
                            <tr>
                                <td>#017990</td>
                                <td>Une fille parfaite</td>
                                <td class="text-right" title="Date"> 05/2017 </td>
                                <td class="text-right" title="Price"> 6,99 </td>
                            </tr>
                            <tr>
                                <td>#018384</td>
                                <td>Voyage au centre de la Terre</td>
                                <td class="text-right" title="Date"> 06/2017 </td>
                                <td class="text-right" title="Price"> 0,00 </td>
                            </tr>
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
                        <div class="comment-user"><i class="fa fa-book"></i> Une fille parfaite</div>
                            <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Le 24 juillet 2017</time>
                        <div class="comment-post">
                            <p id="resume"><br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <hr>
                        <div class="comment-user"><i class="fa fa-book"></i> Voyage au centre de la Terre</div>
                            <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Le 24 août 2017</time>
                        <div class="comment-post">
                            <p id="resume"><br />
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
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
                        <b>To do list </b>
                            <input type="checkbox" name="check" id="squaredThree" value="None" /><label for="squaredThree"> Oui </label>
                            <input type="checkbox" name="check" id="squaredThree" value="None" /><label for="squaredThree"> Non </label>
                        <br />
                        <b>Newletter</b>
                            <input type="checkbox" name="check" id="squaredThree" value="None" /><label for="squaredThree"> Oui </label>
                            <input type="checkbox" name="check" id="squaredThree" value="None" /><label for="squaredThree"> Non </label>
                        <br />
                            <button type="button" class="btn btn-elegant tooltips" data-toggle="tooltip" data-placement="top" title="Votre compte va être supprimé, vous ne pourrez plus y acceder.">Suppression de compte</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<script>$(document).ready(function(){
  $("#date-picker").datepicker({
    dateFormat: "yy-mm-dd",
    showButtonPanel: true,
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
    dateFormat: "mm/dd/yy", 
    firstDay: 1,
  });
});</script>



    


