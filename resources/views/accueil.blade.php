<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <script src="{{ elixir('js/all.js') }}"></script>

    

    <title>Lapibook</title>
</head>
<body>

<!--Header-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"><img class="logo" src="{{URL::asset('/img/logotest.jpg')}}"></div>
        <div class="col-md-5"><img class="lapibook" src="{{URL::asset('/img/lapibook.png')}}"></div>
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#myModal">Inscription / Connexion </button></div>
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#modal-panier">Panier</button></div>
    </div>
</div>

<!--Menu-->

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="accueil">Accueil<img id="maison" src="{{URL::asset('/img/home.png')}}"></img></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="#">Profil<span><img class="icone" src="{{URL::asset('/img/007-easter-bunny.png')}}"></img></span></a>
            </li>
            <li>
        <div class="panel-heading">
    <ul class="panel-title">
        <a class="titrage" data-toggle="collapse" href="#collapseOne">
          Catégories<span><img class="icone" src="{{URL::asset('/img/004-signs-1.png')}}"></img></span></a></ul>
        </div> 
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class ="liste">
                    <li><a href="#">Aventure / Action</a></li>
                    <li><a href="#">Classique</a></li>
                    <li><a href="#">Espionnage</a></li>
                    <li><a href="#">Fantastique</a></li>
                    <li><a href="#">Frisson / Terreur</a></li>
                    <li><a href="#">Guerre</a></li>
                    <li><a href="#">Jeunesse</a></li>
                    <li><a href="#">Historique</a></li>
                    <li><a href="#">Sentimentale</a></li>
                    <li><a href="#">Policier</a></li>
                    <li><a href="#">Roman</a></li>
                    <li><a href="#">Science-fiction</a></li>
                    <li><a href="#">Thriller</a></li>
                    <li><a href="#">Western</a></li>  
                </ul>
            </div>
        </div>
            </li> 
        <li><a href="#">Lapi'cation<span><img class="icone" src="{{URL::asset('/img/screen.png')}}"></img></span></a></li>               
        </ul>
        </div>
    </div>
</nav>


<!-- Large modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('connexion')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-panier" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    @include('panier')
            </div>
        </div>
    </div>
</div>

<!--Scroll article interaction-->



</body>
</html>