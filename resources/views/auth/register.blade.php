<div class="row">
    <div class="col-sm-12 col-md-12">
        <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Retour</button>
    </div>
</div>


<form action="{{ url('/register') }}" method="POST" role="form" class="form-horizontal" id="registration" onsubmit="return false">
    {{ csrf_field() }}
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input id="name" type="text" class="form-control" name="name"  placeholder="Pseudo" value="{{ old('name') }}" />
        </div>

        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input id="email" type="email" name="email" class="form-control"  placeholder="Email" value="{{ old('email') }}">
        </div>

        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input type="password" name="password" class="form-control" id="rpassword" placeholder="Mot de passe">
        </div>
        <div>
            <span id="aideMdp"></span>
        </div>
        
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
            <input type="password" name="password_confirmation" class="form-control" id="cpassword" placeholder="Confirmation Mot de passe">
        </div>

            <div id="textMdp">
            <span id="infoMdp"></span>
            </div>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                <input type="submit" class="btn btn-elegant btn-sm" id="bouton-panier" label="valider"></input>
            </div>
        </div>
</form>

