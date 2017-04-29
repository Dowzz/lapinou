<h4 class="modal-title" id="myModalLabel"> Connexion </h4>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <form action="{{ url('/login') }}" method="post" role="form" class="form-horizontal">
                        {{ csrf_field() }}

                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <input type="email" name="email" id="email" class=" form-control" type="text" " placeholder="Email">
                        </div>
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
                            <input type="password" name="password" id="lpassword"  class="form-control" type="password" placeholder="Mot de passe">
                        </div>
                        <label>
                            <input type="checkbox" name="remember"> Se souvenir de moi
                        </label>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Connexion</button>
                        </div>
                            <a  class="pull-right text-muted" data-toggle="modal" data-target="#modal_forget" href="" id="{{ url('/password/reset') }}">Mot de passe oublié ?</a><br /> 
                        
                        </form>
                        <hr>
                        <div id="Inscription">
                            <h4>Inscription</h4>
                        </div>
                            <p>Pas encore membre ? <a href="" data-toggle="modal" data-target="#modal_inscription"  data-backdrop="false">Inscrivez-vous</a></p>
                        
                    </div>         
                </div>
            </div>
        </div>
    </div>
