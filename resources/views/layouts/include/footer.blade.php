<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
<script src="{{ elixir('js/all.js') }}"></script>


<footer>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3> Contact </h3>
                    <ul>
                        <li> Lapibook </li>
                        <li> 7 rue des Carottes </li>
                        <li> 00 000 Rabbit City </li></br>
                        <li> 02 31 00 00 00 </li>
                        <li> <a href="#"> contact@lapibook.fr </a> </li>
                        
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3> Liens </h3>
                    <ul>
                        <li class="ajax"><a href="home">Accueil</a></li>
                        @if (Auth::check())
                            <li class="ajax"><a href="profil">Profil<span></span></a>
                            </li>
                        @endif                        
                        <li> <a data-toggle="modal" data-target="#myModal" href="#"> Connexion / Inscription </a> </li>              
                        <li> <a data-toggle="modal" data-target="#modal-lapication" href="lapibook"> Lapi'book </a> </li>
                        <li> <a data-toggle="modal" data-target="#modal-panier" href="panier"> Panier </a> </li>
                        <li> <a data-toggle="modal" data-target="#modal-pay" href="paiement"> Paiement </a> </li>
                        <li> <a data-toggle="modal" data-target="#modal-contact" href="contact"> Contactez-nous </a> </li>

                       
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h3> Mentions Légales </h3>
                    <ul>
                        <li> <a href="#"> Politique de confidentialité </a> </li>
                        <li> <a href="#"> CGV </a> </li>
                        <li> <a href="#"> Cookies </a> </li></br>
                        <li> Copyright © 2017, LAPIBOOK. All rights reserved. </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-header">
                    @include('modals.contact')
                </div>
            </div>
        </div>
    </div>
</footer>