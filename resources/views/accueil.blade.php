
<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@stack('stylesheets')
    

    <title>Lapibook</title>
</head>
<body>

<!--Header-->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"><img class="logo" src="{{URL::asset('/img/logotest.jpg')}}"></div>
        <div class="col-md-5"><img class="lapibook" src="{{URL::asset('/img/lapibook.png')}}"></div>
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#myModal">Inscription / Connexion </button></div>
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#modal-panier">Panier</button></div>
    </div>
</div>

<!--Menu-->
@include('sidebar')

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
    <div class="modal-dialog modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    @include('panier')
            </div>
        </div>
    </div>
</div>

<!--Miniature-->

@yield('content')
<footer>
@include('footer')
</footer>
</body>
</html>