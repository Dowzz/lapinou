

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<h3 class="modal-titlep" id="myModalLabel"> Votre Panier</h3>
<div class="modal-body">
    <form class="form-horizontal" method="post" action="">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                <div class="scroll-container">
                <table class="cell">
                <tbody>
                    <?php
                     use App\livre;
                     foreach(Cart::content() as $row) {
                     	$rowid=$row->rowId;
                        $livre=livre::find($row->id);
                        $couv_livre=$livre->couverture;
                        $product_name=$livre->titre;
                        

                        ?>
					<thead value="<?php echo $row->rowId ?>">
                        <td rowspan="3"><img class="couv_livre" src="<?php echo $couv_livre ?>"/></td>
                        <td colspan="4" class="product"><h4><?php echo $product_name?></h4></td>
                    </tr>
                    <div class="row">
                        <td class="product">De <?php echo $livre->auteur ?></td>
                    </tr>
                    <input type="hidden" class="livre_id" value="<?php echo $livre->id ?>">
                    <tr>
                        <td></td>
                        <td class="taille"><?php echo $livre->prix; ?>€</td>
                        <td class="taille">x<?php echo $row->qty ?></td>
                        <td><img class="trash" src="{{URL::asset('/img/trash.png')}}"></td>
                    </tr>
                    </thead>

                    <?php }
                    ?>

                </tbody>
                </table>
                </div>                 
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
                    
                    <h4 id="added">Total <strong><?php echo Cart::subtotal(); ?> €</strong></h4>
                </div>
                
                <?php if(Auth::user())
                {
                    $user_id=Auth::user()->id;
                    $total=Cart::total();
                ?>
                <input type="hidden" id="totalttc" value="<?php echo $total; ?>">
                <input type="hidden" id="user_id" value="<?php echo $user_id?>">
                <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                <button id="bouton-panier2" type="button" class="btn btn-elegant paiement" data-toggle="modal" data-target="#modal-pay">Paiement</button>
                <?php }else {
                ?>
                <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6">
                <button id="bouton-panier2" id="open-panier" type="button"  class="btn btn-elegant" data-toggle="modal" data-target="#modal_connexion" class="close" data-dismiss="modal">Connexion</button>
                <p class="regle">Afin de régler votre commande, vous devez être connecté a votre compte.</p>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </form>
</div>

    <script>
    $(".trash").on('click', function (e) {
        $(this).closest("thead").fadeOut(500,function() {
            var rowid =$(this).attr('value');
            console.log(rowid);
            $.ajax({
                data:({rowid:rowid}),
                type:"post",
                url: "./deleterow",
            });
        $(this).remove();
        });
    });

    $('.paiement').click(function() {
        var user_id=$("#user_id").val();
        var cartid=$("tr").val();
        var id_livre=$(".livre_id").val();
        var totalttc=$("#totalttc").val();
        var product_name=$(".product-name").text();
        console.log(id_livre, totalttc, product_name);
                $.ajax({
                data:({ user_id, cartid, id_livre, totalttc, product_name}),
                type:"post",
                url: "./createorder",
                });
            }); 


    </script>

    <div class="modal" id="modal-pay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                @include('modals.paiement')                      
            </div>
        </div>
    </div>
</div>
    




