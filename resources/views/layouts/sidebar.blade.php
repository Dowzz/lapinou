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
                    <li class="ajax"><a class="cat" href="contenu.aventure">Aventure / Action</a></li>
                    <li class="ajax"><a class="cat" href="contenu.classique">Classique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.contes">Conte</a></li>
                    <li class="ajax"><a class="cat" href="contenu.dystopie">Dystopie</a></li>
                    <li class="ajax"><a class="cat" href="contenu.espionnage">Espionnage</a></li>
                    <li class="ajax"><a class="cat" href="contenu.fantastique">Fantastique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.horreur">Frisson / Terreur</a></li>
                    <li class="ajax"><a class="cat" href="contenu.gratuit">Gratuit</a></li>
                    <li class="ajax"><a class="cat" href="contenu.humour">Humour</a></li>
                    <li class="ajax"><a class="cat" href="contenu.jeunesse">Jeunesse</a></li>
                    <li class="ajax"><a class="cat" href="contenu.historique">Historique</a></li>
                    <li class="ajax"><a class="cat" href="contenu.policier">Policier</a></li>
                    <li class="ajax"><a class="cat" href="contenu.science-fiction">Science-fiction</a></li>
                    <li class="ajax"><a class="cat" href="contenu.thriller">Thriller</a></li>
                    <li class="ajax"><a class="cat" href="contenu.western">Western</a></li>  
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