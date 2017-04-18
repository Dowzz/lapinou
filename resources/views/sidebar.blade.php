

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
        <div class="navbar-header">
            <a class="navbar-brand" href="contenu">Accueil<img id="maison" src="{{URL::asset('/img/home.png')}}"></img></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="profil">Profil<span><img class="icone" src="{{URL::asset('/img/007-easter-bunny.png')}}"></img></span></a>
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
                    <li><a href="#">Gratuit</a></li>
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
        <li><a href="" data-toggle="modal" data-target="#modal-lapication">Lapi'cation<span><img class="icone" src="{{URL::asset('/img/screen.png')}}"></img></span></a></li>               
        </ul>
        </div>
    </div>
</nav>
</div>