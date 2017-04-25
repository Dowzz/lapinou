

@push('stylesheets')
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@endpush


<div class="row">
<nav class="navbar navbar-toggleable navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul>
            <li class="ajax">
            <a class="navbar-brand" href="home">Accueil</a>
            </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @if (Auth::check())
            <li class="ajax"><a href="profil">Profil<span><img class="icone" src="{{URL::asset('/img/007-easter-bunny.png')}}"></img></span></a>
            </li>
            @endif
            <li>
        <div class="panel-heading">
        <ul  class="panel-title">
        <a class="titrage" data-toggle="collapse" href="#collapseOne">
          Catégories<span><img class="icone" src="{{URL::asset('/img/004-signs-1.png')}}"></img></span></a></ul>
        </div> 
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class ="liste">
                    <li class="ajax"><a href="aventure">Aventure / Action</a></li>
                    <li class="ajax"><a href="classique">Classique</a></li>
                    <li class="ajax"><a href="espionnage">Espionnage</a></li>
                    <li class="ajax"><a href="fantastique">Fantastique</a></li>
                    <li class="ajax"><a href="frisson">Frisson / Terreur</a></li>
                    <li class="ajax"><a href="gratuit">Gratuit</a></li>
                    <li class="ajax"><a href="guerre">Guerre</a></li>
                    <li class="ajax"><a href="jeunesse">Jeunesse</a></li>
                    <li class="ajax"><a href="historique">Historique</a></li>
                    <li class="ajax"><a href="sentimentale">Sentimentale</a></li>
                    <li class="ajax"><a href="policier">Policier</a></li>
                    <li class="ajax"><a href="roman">Roman</a></li>
                    <li class="ajax"><a href="science-fiction">Science-fiction</a></li>
                    <li class="ajax"><a href="thriller">Thriller</a></li>
                    <li class="ajax"><a href="western">Western</a></li>  
                </ul>
            </div>
        </div>
            </li> 
        <li><a href="lapication" data-toggle="modal" data-target="#modal-lapication">Lapi'cation<span><img class="icone" src="{{URL::asset('/img/screen.png')}}"></img></span></a></li>               
        </ul>
        </div>
    </div>
</nav>
</div>