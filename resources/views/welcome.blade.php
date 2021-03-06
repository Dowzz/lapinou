<!doctype html>
<html lang="fr">
<head>
<link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('/img/favicon.ico')}}">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=960, initial-scale=1, maximum-scale=1"/>
    <meta charset="utf-8" />
    <meta name="_token" content="{!! csrf_token() !!}"/>


    <title>Lapibook</title>
</head>
<body>
<div id="navbar">
@include('layouts.sidebar')
</div>

<!--Header-->
<?php 
use App\User;
use App\todolist;
$todo=0;
$todolist =0;
?>
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-0 col-sm-12"></div>
        <div id="logo" class="col-md-9 col-sm-12"><a href="{{ url('/') }}"><img class="logo" src="{{URL::asset('/img/Logo.png')}}"></a></div>
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" id="open-panier" href="#" data-toggle="modal" data-target="#modal-panier" data-backdrop="false">Panier</button></div>
        @if (Auth::user())
        <?php 
        $user = (Auth::user());
        $todo =$user->todo;
        $user_id = $user->id;
        view()->share('user_id', $user_id);
        ?>
        <div class="col-md-3 col-sm-12"><form id="logout-form" action="logout" method="POST" style="display: block;"><button class="btn btn-elegant"><input type="hidden" name="_token" value="{{csrf_token()}}">Deconnexion</button></form></div>
        @else
        <?php $user_id=0;?>
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" data-toggle="modal" data-backdrop="false" data-target="#modal_connexion">Connexion</button></div>
        @endif
        @if  ($todo=='1')
        <div class="col-md-3 col-sm-12"><button id="button" class="btn btn-elegant">Todo-List</button>
        </div>
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
@if(Session::has('achat'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                {{Session::get('achat')}}
            </div>
        </div>
    </div>
@endif




<!--Barre de recherche-->

<div class="flexsearch">
    <div class="flexsearch-wrapper">
        <form class="flexsearch-form" id="recherche">
            <div class="flexsearch-input-wrapper">
                <input class="flexsearch-input" type="search" placeholder="Recherche" name="search" required/>
            </div>
        </form>
    </div>
</div>
<!--Miniature-->

<div id="miniature">

</div>

<div class="container" id="dialog" title="Todo List">
@include ('modals.todolist')
</div>





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

<div class="modal" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('auth.register')
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal_forget" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include ('auth.passwords.email')
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-lapication" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('modals.lapication')    
            </div>
        </div>
    </div>
</div>

<div id="modal-panier" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content test">
            <p>Chargement en cours...</p>
        </div>
    </div>




<script src="{{ asset('js/all.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


<script type="text/javascript">

       $("#open-panier").click(function(oEvt){
    oEvt.preventDefault();
        $(".test").fadeIn(1000).html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
        $.ajax({
            type:"GET",
            url:"{{ url('panier') }}",
            error:function(msg){
                $(".test").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".test").fadeIn(1000).html((data));
            }
        });
    }); 

           
</script>








