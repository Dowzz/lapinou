<?php 
use App\User;
$admin=0;
?>
<div class="row" >
<nav id="marge" class="navbar navbar-toggleable navbar-inverse sidebar" role="navigation">
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
            <li class="">
            <a class="navbar-brand" href={{ url('/') }}>Bienvenue
            @if (Auth::user())
            {{ Auth::user()->name }}
            @endif
            </a>
            </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @if (Auth::user())
             <?php 
            $user = (Auth::user());
            $admin =$user->admin;
            ?>           
            <li class="ajax"><a href="contenu/profil">Profil<span><img class="icone" src="{{URL::asset('/img/007-easter-bunny.png')}}"></img></span></a>
            </li>
            <li class="ajax"><a href="contenu/publish">Publication<span><img class="icone" src="{{URL::asset('/img/publish.png')}}"></img></span></a>
            </li>
            @endif
            @if  ($admin=='1')
            <li class="ajax"><a href="contenu/admin">Administration<span><img class="icone" src="{{URL::asset('/img/admin.png')}}"></img></span></a>
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
                    <li class="ajax"><a class="cat" href="contenu.Amateur">Auteur amateur/indépendant</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Aventure">Aventure / Action</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Classique">Classique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Contes">Conte</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Dystopie">Dystopie</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Espionnage">Espionnage</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Fantastique">Fantastique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Horreur">Frisson / Terreur</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Gratuit">Gratuit</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Historique">Historique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Humour">Humour</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Jeunesse">Jeunesse</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Policier">Policier</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Science-fiction">Science-fiction</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Thriller">Thriller</a></li>
                    <li class="ajax"><a class="cat" href="contenu.Western">Western</a></li>  
                </ul>
            </div>
        </div>
            </li> 
        <li><a data-toggle="modal" data-target="#modal-lapication">Lapi'cation<span><img class="icone" src="{{URL::asset('/img/screen.png')}}"></img></span></a></li> 
        </ul>
        </div>
    </div>
</nav>
</div>