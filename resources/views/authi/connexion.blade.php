

<h4 class="modal-title" id="myModalLabel"> Connexion / Inscription </h4>

<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
 
<!-- Navigation -->

            <ul class="nav nav-tabs">
                <li class="active"><a href="#Login" data-toggle="tab">Connexion</a></li>
                <li><a href="#Registration" data-toggle="tab">Inscription</a></li>
            </ul>
<!-- Formulaires -->
            <div class="tab-content">
                <div class="tab-pane active" id="Login">

                    <form action="login_check" method="post" role="form" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="input-dark-bg" class="form-control" id="email1" placeholder="Email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="InputPassword1" class="col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="input-dark-bg" class="form-control" id="InputPassword1" placeholder="Mot de passe" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Connexion</button>
                                <a href="/forgot-password">Mot de passe oublié ?</a>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="tab-pane" id="Registration">

                    <form action="register_action" method="post" role="form" class="form-horizontal" id="registration" onsubmit="return false">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label for="pseudo" class="col-sm-2 control-label">Pseudo</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="pseudo" class="input-dark-bg" class="form-control" placeholder="Pseudo" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" /> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="input-dark-bg" class="form-control" id="password" placeholder="Mot de passe" required />
                                </div>
                                <span id="aideMdp"></span>
                            
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Confirmation Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" name="cpassword" class="input-dark-bg" class="form-control" id="cpassword" placeholder="Confirmation Mot de passe" required/></div>
                                <span id="infoMdp"></span>
                            
                        </div>

                        <div class="row">
                            
                            <div class="col-sm-12 col-md-12">
                                <input type="submit" class="btn btn-elegant btn-sm" id="bouton-panier" label="valider"></input>
                                
                                <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
