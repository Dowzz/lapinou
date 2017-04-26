<form accept-charset="UTF-8" role="form" action="{{ url('/reset') }}" method="post">
    <div class="form-group">
        <input type="email" name="email" class="form-control" value="$email">
        <label for="password" class="col-sm-2 control-label"  id="labelwhite">Mot de passe</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="input-dark-bg" class="form-control" id="password" placeholder="Mot de passe" required />
        </div>
        <span id="aideMdp"></span>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="token" value="$token">
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label"  id="labelwhite">Confirmation Mot de passe</label>
        <div class="col-sm-10">
            <input type="password" name="cpassword" class="input-dark-bg" class="form-control" id="cpassword" placeholder="Confirmation Mot de passe" required/>
        <div>
        <span id="infoMdp"></span>        
    </div>
    <div class="col-sm-12 col-md-12">
        <input type="submit" class="btn btn-elegant btn-sm" id="bouton-panier" label="valider"></input>
    </div>
</form>