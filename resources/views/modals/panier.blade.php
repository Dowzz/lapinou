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
                                    <button id="shop" type="button" data-dismiss="modal" class="btn btn-elegant">
                                        <h6> Continue shopping</h6>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-2"><img class="img-responsive" src="{{URL::asset('/img/fille.png')}}">
                            </div>
                            <div class="col-xs-4">
                                <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control input-sm" value="1">
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
                                <h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-xs-4 col-lg-4 col-md-4 col-sm-4">
                                    <input type="text" class="form-control input-sm" value="1">
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
                                    <h5 id="added" class="text-center">Added items?</h5>
                                </div>
                                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <button id="shop" type="button" class="btn btn-elegant">
                                        Update cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <h4 id="addedclass="text-right">Total <strong>$50.00</strong></h4>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <button id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Paiement</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    




