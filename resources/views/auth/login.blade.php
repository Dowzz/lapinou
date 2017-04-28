

<h4 class="modal-title" id="myModalLabel"> Connexion / Inscription </h4>

<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
<!-- Formulaires -->
            <div class="tab-content">
                <div class="tab-pane active" id="Login">

                    <form action="{{ url('/login') }}" method="post" role="form" class="form-horizontal">
                    {{ csrf_field() }}
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
                                 <label>
                                    <input type="checkbox" name="remember"> Se souvenir de moi
                                </label>
                            </div>
                        </div>
                         <div class="col-sm-12">
                                <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Connexion</button>
                                 <a  class="pull-right text-muted" href="" id="{{ url('/password/reset') }}">Mot de passe oublié ?</a>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <a href="" data-toggle="modal" data-target="#modal_inscription">Pas encore membre ?</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>


                    </form>

                </div>
                
                </div>
            </div>
        </div>
    </div>
