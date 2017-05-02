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
            <ul class="liste">
            <li>
            <a class="navbar-brand" href="{{ url('/') }}">Accueil</a>
            </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @if (Auth::check())
            <li class="ajax"><a href="admin">Administration<span><img class="icone" src="{{URL::asset('/img/admin.png')}}"></img></span></a>
            </li>
            <li class="ajax"><a href="profil">Profil<span><img class="icone" src="{{URL::asset('/img/007-easter-bunny.png')}}"></img></span></a>
            </li>
            @endif
            <li>
        <div class="panel-heading">
        <ul  class="panel-title">
        <a class="titrage" data-toggle="collapse" href="#collapseOne">
          Catégories</a><span><img class="icone" src="{{URL::asset('/img/004-signs-1.png')}}"></img></span></ul>
        </div> 
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class ="liste">
                    <li class="ajax"><a class="cat" href="template_miniature">Aventure / Action</a></li>
                    <li class="ajax"><a class="cat" href="template_miniature">Classique</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Conte</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Dystopie</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Espionnage</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Fantastique</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Frisson / Terreur</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Gratuit</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Humour</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Jeunesse</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Historique</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Policier</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Science-fiction</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Thriller</a></li>
                    <li class="ajax"><a class="cat"  href="template_miniature">Western</a></li>  
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