<div class="row">
    <div class="col-sm-12 col-md-12">
        <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Retour</button>
    </div>
</div>


<form action="{{ url('/register') }}" method="POST" role="form" class="form-horizontal" id="registration" onsubmit="return false">
    {{ csrf_field() }}
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Pseudo">
        </div>

        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Email">
        </div>

        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input class="form-control" type="password" placeholder="Mot de passe">
            <span id="aideMdp"></span>
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input class="form-control" type="password" placeholder="Confirmation Mot de passe">
            <span id="infoMdp"></span>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <input type="submit" class="btn btn-elegant btn-sm" id="bouton-panier" label="valider"></input>
            </div>
        </div>
</form>
