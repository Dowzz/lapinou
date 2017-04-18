<h4 class="modal-title" id="myModalLabel"> Connexion / Inscription </h4>

<div class="modal-body">
    <div class="row">
        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
 
<!-- Navigation -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#Login" data-toggle="tab">Connexion</a></li>
                <li><a href="#Registration" data-toggle="tab">Inscription</a></li>
            </ul>
<!-- Formulaires -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="input-dark-bg" class="form-control" id="email1" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1" class="col-sm-2 control-label">Mot de passe</label>
                                <div class="col-sm-10">
                                    <input type="password" class="input-dark-bg" class="form-control" id="InputPassword1" placeholder="Mot de passe" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Connexion</button>
                                    <a href="javascript:;">Mot de passe oublié ?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Pseudo</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="input-dark-bg" class="form-control" placeholder="Pseudo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" />
                                </div>
                            </div>
       
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Mot de passe</label>
                                <div class="col-sm-10">
                                    <input type="password" class="input-dark-bg" class="form-control" id="password" placeholder="Mot de passe" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
                                    <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-md-4">
            <div class="row text-center sign-with">
                <div class="col-md-12">
                    <h3>Inscription avec :</h3>
                </div>
                <div class="col-md-12">
                    <div class="btn-group btn-group-justified">
                        <a href="#" id="fbook" class="btn btn-lg">Facebook</a> 
                        <a href="#" id="gplus" class="btn btn-lg">Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
