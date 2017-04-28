

<h4 class="modal-title" id="myModalLabel"> Connexion / Inscription </h4>

<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
<!-- Formulaires -->
            <div class="tab-content">
                <div class="tab-pane active" id="Login">

                    <form action="{{ url('/login') }}" method="post" role="form" class="form-horizontal">
                    {{ csrf_field() }}

                        <div class="input-group margin-bottom-sm">
                          <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                          <input class="form-control" type="text" placeholder="Email">
                        </div>

                        <div class="input-group margin-bottom-sm">
                          <span class="input-group-addon"><i class="fa fa-unlock-alt fa-fw"></i></span>
                          <input class="form-control" type="text" placeholder="Mot de passe">
                        </div>

                                <label>
                                    <input type="checkbox" name="remember"> Se souvenir de moi
                                </label>

                         <div class="col-sm-12">
                                <button type="submit" class="btn btn-elegant btn-sm" id="bouton-panier">Connexion</button>
                                 <a  class="pull-right text-muted" data-toggle="modal" data-target="#modal_forget" href="" id="{{ url('/password/reset') }}">Mot de passe oublié ?</a>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <a href="" data-toggle="modal" data-target="#modal_inscription"  data-backdrop="false">Pas encore membre ?</a>
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
