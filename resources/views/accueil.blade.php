
<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@stack('stylesheets')
    

    <title>Lapibook</title>
</head>
<body>
<div id="navbar">
@include('sidebar')
</div>
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
<!--Menu-->


<!--Header-->
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-0 col-sm-12"></div>
        <div id="logo" class="col-md-9 col-sm-12"><a href="accueil"><img class="logo" src="{{URL::asset('/img/Logo.jpg')}}"></a></div>
        @if (Auth::user())
        <div class="col-md-3 col-sm-12"><form id="logout-form" action="logout" method="POST" style="display: block;"><button class="btn btn-elegant"><input type="hidden" name="_token" value="{{csrf_token()}}">Deconnexion</button></form></div> 
        @else
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" data-toggle="modal" data-target="#myModal">Inscription / Connexion</button></div>
        @endif
        <div class="col-md-3 col-sm-12"><button class="btn btn-elegant" data-toggle="modal" data-target="#modal-panier" data-backdrop="false">Panier</button></div>
    </div>
</div>

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

<div class="modal fade" id="modal-lapication" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    @include('lapication')
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-panier" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    @include('panier')
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-pay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
                
                    @include('paiement')
            </div>
        </div>
    </div>
</div>


<!--Miniature-->
<div id="miniature">

</div>


<!--Footer-->
<div class="footer" id="footer">

@include('footer')
</div>
</body>
</html>