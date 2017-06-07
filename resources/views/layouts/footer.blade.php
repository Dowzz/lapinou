<footer>
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <h3> Contact </h3>
                <ul>
                    <li> Lapibook </li>
                    <li> 7 rue des Carottes </li>
                    <li> 00 000 Rabbit City </li></br>
                    <li> 02 31 00 00 00 </li>
                    <li><a href="#"> contact@lapibook.fr </a></li>
                </ul>
        </div>
        <div class="col-md-4 col-sm-4">
            
            <h3> Liens </h3>
            <div class="col-md-6">
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                        @if (Auth::check())
                            <li class="ajax"><a href="contenu/profil">Profil<span></span></a>
                            </li>
                            <li class="ajax"><a href="contenu/publish">Publication<span></span></a>

                        @endif                        
                    <li><a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal_connexion">Connexion</a></li>
                    </ul>
                    </div>
                    <ul>
                    <div class="col-md-6"></div> 
                    <li><a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal_inscription">Inscription</a></li>
                    <li><a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal-lapication"> Lapi'book </a></li>
                    <li><a class="curseur" id="open-panier" data-toggle="modal" data-backdrop="false" data-target="#modal-panier"> Panier </a></li>
                    <li><a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal-contact"> Contactez-nous </a></li>

                       
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3> Mentions Légales </h3>
                    <ul>
                        <li> <a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal-politique"> Politique de confidentialité </a> </li>
                        <li> <a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal-cgv"> CGV </a> </li>
                        <li> <a class="curseur" data-toggle="modal" data-backdrop="false" data-target="#modal-cookie"> Cookies </a> </li></br>
                        <li> Copyright © 2017, LAPIBOOK. All rights reserved. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" >
            <div class="modal-content">
                <div class="modal-header">
                    @include('modals.contact')
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-politique" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="bodymodal">
                @include('mentions.politique')
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-cgv" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="bodymodal">
                @include('mentions.cgv')
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-cookie" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="bodymodal">
                @include('mentions.cookie')
                </div>
                </div>
            </div>
        </div>
    </div>

</footer> 


