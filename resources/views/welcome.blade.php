<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=960, initial-scale=1, maximum-scale=1"/>
    <meta charset="utf-8" />



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
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant">Todo-List</button>
        <div id="dialog">
            @include ('modals.todolist')
        </div>
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
            </form>
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



<!--modals -->
<div class="modal fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style type="text/css">
#dialog{
    display: none;
    background-color: #9d9d9d;
}
.ui-widget-content{
    border:none;
    background:none; 
}

</style>







