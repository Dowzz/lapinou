

@push('stylesheets')
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@endpush
@push('scripts')
<script src="{{ elixir('js/all.js') }}"></script>
@endpush



<div class="row">
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="ajax" class="navbar-header">
            <a class="navbar-brand" href="home">Accueil<img id="maison" src="{{URL::asset('/img/home.png')}}"></img></a>
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
                    <li class="ajax"><a href="#">Espionnage</a></li>
                    <li class="ajax"><a href="#">Fantastique</a></li>
                    <li class="ajax"><a href="#">Frisson / Terreur</a></li>
                    <li class="ajax"><a href="#">Gratuit</a></li>
                    <li class="ajax"><a href="#">Guerre</a></li>
                    <li class="ajax"><a href="#">Jeunesse</a></li>
                    <li class="ajax"><a href="#">Historique</a></li>
                    <li class="ajax"><a href="#">Sentimentale</a></li>
                    <li class="ajax"><a href="#">Policier</a></li>
                    <li class="ajax"><a href="#">Roman</a></li>
                    <li class="ajax"><a href="#">Science-fiction</a></li>
                    <li class="ajax"><a href="#">Thriller</a></li>
                    <li class="ajax"><a href="#">Western</a></li>  
                </ul>
            </div>
        </div>
            </li> 
        <li><a href="lapication" data-toggle="modal" data-target="#modal-lapication">Lapi'cation<span><img class="icone" src="{{URL::asset('/img/screen.png')}}"></img></span></a></li>               
        </ul>
        </div>
    </div>
</nav>
<div class="main">
<!-- Content Here -->
</div>
</div>

