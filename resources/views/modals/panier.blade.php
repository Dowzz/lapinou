<script src="{{ asset('js/all.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
                   
                    <table cellspacing="10">
                    <tbody>
                        <?php
                         use App\livre;
                         foreach(Cart::content() as $row) {
                            $livre=livre::find($row->id);?>
                        <tr>
                            <td>
                                <div class="col-xs-2"><img class="img-responsive" src="<?php echo $livre->couverture ?>"/></div>
                                <div class="col-xs-10">
                                <h4 class="product-name"><strong><?php echo $livre->titre?></strong></h4><h4><small><?php echo $row->auteur ?></small></h4>
                                <input type="hidden" class="rowid" value="<?php echo $row->rowId ?>">
                            </div>
                            </td>
                            <td><div class="col-xs-2"><h4><?php echo $row->qty ?>ex.</h4></div></td>
                            <td><div class="col-xs-8"><?php echo $row->price; ?>€</div></td> 
                            <td> <div class="col-xs-2">                                    
                                        <img class="trash" src="{{URL::asset('/img/trash.png')}}"> 
                                        <script>
                                           $(".trash").on('click', function (e) {
                                              e.stopPropagation();
                                              $(this).closest("tr").fadeOut(500,function() {
                                                var rowid =$('.rowid').val();
                                                console.log(rowid);
                                                $.ajax({
                                                    data:({rowid:rowid}),
                                                    type:"post",
                                                    url: "./deleterow",
                                                  });
                                               $(this).remove();
                                              });
                                            }); 
                                        </script>                                  
                                </div></td>                           
                        </tr>
                        <?php }
                        ?>
                    </tbody>
                    </table>                 
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
                        <h4 id="addedclass="text-right">Total H.T. <strong><?php echo Cart::subtotal(); ?> €</strong></h4>
                        <h4 id="addedclass="text-right">Total <strong><?php echo Cart::total(); ?> €</strong></h4>
                    </div>
                    <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                        <button id="bouton-panier2" id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Paiement</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    




