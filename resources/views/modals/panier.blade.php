<h4 class="modal-title" id="myModalLabel"> Votre Panier</h4>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--REVIEW ORDER-->
                <div class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <button type="button" data-dismiss="modal" class="btn btn-elegant btn-sm" id="bouton-panier2" label="">Continuer votre shopping
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-2"><img class="img-responsive" src="">
                            </div>
                            <div class="col-xs-4">
                                <h4 class="product-name"><strong>Titre</strong></h4><h4><small>Auteur</small>Format</h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6><strong>6,99<span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-xs-2">
                                    <button id="trash" type="button" class="btn btn-elegant">
                                        <img src="{{URL::asset('/img/trash.png')}}">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <h4 class="product-name"><strong>Titre</strong></h4><h4><small>Résumer</small></h4>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6><strong>0.00 <span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-lg-2 col-md-2">
                                   <button id="trash" type="button" class="btn btn-elegant">
                                        <img src="{{URL::asset('/img/trash.png')}}">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="text">
                                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <h5 id="added" class="text-center">Article(s) ajouté(s) ?</h5>
                                </div>
                                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <button id="bouton-panier2" type="button" class="btn btn-elegant">
                                        Actualisation du total
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <h4 id="addedclass="text-right">Total <strong>6,99 €</strong></h4>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <button id="bouton-panier2" id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Paiement</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    




