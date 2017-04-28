<div class="row">
    <div class="col-sm-12 col-md-12">
        <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Retour</button>
    </div>
</div>


<form action="{{ url('/register') }}" method="POST" role="form" class="form-horizontal" id="registration" onsubmit="return false">
{{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Pseudo</label>
        <div class="col-sm-10">
                    <input id="name" type="text" class="input-dark-bg" class="form-control" name="name" value="{{ old('name') }}" placeholder="Pseudo" />
            </div>
        </div>

    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Adresse mail</label>
            <div class="col-sm-10">
                <input id="email" type="email" name="email" class="input-dark-bg" class="form-control"  placeholder="Email" value="{{ old('email') }}" required /> 
            </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Mot de passe</label>   <div class="col-sm-10">
            <input type="password" name="password" class="input-dark-bg" class="form-control" id="password" placeholder="Mot de passe" required />
        </div>
        <span id="aideMdp"></span>

    </div>

    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Confirmation Mot de passe</label>
        <div class="col-sm-10">
            <input type="password" name="password_confirmation" class="input-dark-bg" class="form-control" id="cpassword" placeholder="Confirmation Mot de passe" required/></div>
        <span id="infoMdp"></span>

    </div>
    <div class="row">
    <div class="col-sm-12 col-md-12">
        <input type="submit" class="btn btn-elegant btn-sm" id="bouton-panier" label="valider"></input>
    </div>
</div>

</form>
