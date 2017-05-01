<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <div id="modal">
    <div class="modal-title"><h4>Todo-List</h4>
    @include ('modals.todolist')
    <p id="modal-untrigger" data-buttonTitle="close modal">X</p>    
    </div>
    </div>

    <title>Lapibook</title>
</head>
<body>
<div id="navbar">
@include('layouts.sidebar')
</div>


           
<!--Header-->

<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-0 col-sm-12"></div>
        <div id="logo" class="col-md-9 col-sm-12"><a href="{{ url('/') }}"><img class="logo" src="{{URL::asset('/img/Logo.jpg')}}"></a></div>
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" data-toggle="modal" data-target="#modal-panier" data-backdrop="false">Panier</button></div>
        @if (Auth::user())
        <div class="col-md-3 col-sm-12"><form id="logout-form" action="logout" method="POST" style="display: block;"><button class="btn btn-elegant"><input type="hidden" name="_token" value="{{csrf_token()}}">Deconnexion</button></form></div>
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" id="modal-trigger" data-buttonTitle="Open Modal">Todo-List</button>
        </div>
        @else
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" data-toggle="modal" data-backdrop="false" data-target="#modal_connexion">Connexion</button></div>
        @endif
        
    </div>
</div>
@if (session('status'))
    <div class="alert alert-info">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session('status') }}
    </div>
@endif
@if(Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        {{Session::get('success')}}
                    </div>
                </div>
            </div>
            @endif
<!--Barre de recherche-->
<div class="flexsearch">
        <div class="flexsearch-wrapper">
            <form class="flexsearch-form">
                <div class="flexsearch-input-wrapper">
                    <input class="flexsearch-input" type="search" placeholder="Recherche" name="q">
                </div>
                <!--<input class="flexsearch-submit" type="submit" value="&#10140;"/>-->
            </form>
        </div>
</div>

<!-- Large modal -->
<div class="modal draggable fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-side modal-top-right">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('auth.login')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('auth.register')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_forget" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('auth.passwords.email')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-lapication" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('modals.lapication')    
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-panier" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('modals.panier')    
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-pay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('modals.paiement')  
                    
            </div>
        </div>
    </div>
</div>

@if (Auth::user())
<div class="row" style="text-align: center;">
    <h2>Bienvenue, {{ Auth::user()->name }}</h2>
</div>

@endif
<!--Miniature-->
<div id="miniature">

</div>
@yield('content')

<!--Footer-->
<div class="footer" id="footer">

@include('layouts.footer')

</div>

</body>
</html>
