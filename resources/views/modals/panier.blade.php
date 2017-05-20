<script src="{{ asset('js/all.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
                    <?php $content = Cart::content();
                    use App\livre;
                    foreach ($content as $row) {
                        $livre = livre::find($row->id);
                        ?>
                        <div class="row">
                            <div class="col-xs-2"><img class="img-responsive" src="<?php echo $livre->couverture ?>">
                            </div>
                            <div class="col-xs-4">
                                <h4 class="product-name"><strong><?php echo $livre->titre?></strong></h4><h4><small><?php echo $livre->auteur ?></h4>
                                <input type="hidden" id="rowid" value="<?php echo $row->rowId ?>">
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 text-right">
                                    <h5><strong><?php echo $livre->prix ?> €<span class="text-muted"></span></strong></h5>
                                </div>
                                <div class="col-xs-2">                                    
                                        <img id="trash" src="{{URL::asset('/img/trash.png')}}">                                   
                                    <script>
                                        $('#trash').click(function() {
                                            var rowid=$("#rowid").val();
                                            console.log(rowid);
                                              $.ajax({
                                              data:({rowid:rowid}),
                                              type:"post",
                                              url: "./deleterow",
                                             });
                                              
                                          });
                                    </script>  
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php                        
                    }
                    ?>
                        <div class="row">
                            <div class="text">
                                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <h5 id="added" class="text-center">Vous avez <?php echo Cart::count() ?> livre(s) dans le panier</h5>
                                </div>
                                <div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <a href="deletepanier"><button id="bouton-panier2" type="button" class="btn btn-elegant">Vider le panier
</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <h4 id="addedclass="text-right">Total <strong><?php echo Cart::total(); ?></strong></h4>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <button id="bouton-panier2" id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Paiement</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    




