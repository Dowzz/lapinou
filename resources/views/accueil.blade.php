
<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8" />
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
@stack('stylesheets')
    

    <title>Lapibook</title>
</head>
<body>

            @if(Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                        {{Session::get('success')}}
                    </div>
                </div>
            </div>
            @endif
<!--Menu-->
@include('sidebar')

<!--Header-->
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6"><img class="logo" src="{{URL::asset('/img/Logo.jpg')}}"></div>
        @if (Auth::user())
        <div class="col-md-3"><form id="logout-form" action="logout" method="POST" style="display: block;"><button class="btn btn-elegant"><input type="hidden" name="_token" value="{{csrf_token()}}">Deconnexion</button><input type="hidden" name="_token" value="{{csrf_token()}}"></form></div> 
        @else
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#myModal">Inscription / Connexion</button></div>
        @endif
        <div class="col-md-3"><button class="btn btn-elegant" data-toggle="modal" data-target="#modal-panier">Panier</button></div>
    </div>
</div>



<!-- Large modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
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

<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            @include('contact')
        </div>
    </div>
</div>

<!--Miniature-->
<div id="miniature">

</div>


<!--Footer-->

@include('footer')

</body>
</html>