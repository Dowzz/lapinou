


<div class="panel">
    <h3 class="secu">Paiment sécurisé par carte</h3>
        <div class="form-group">
            <div class="col-md-12">
                <span>Payer en toute sécurité avec votre carte !</span>
                    <ul class="liste" class="cards">
                        <li class="visa hand">Visa</li>
                        <li class="mastercard hand">MasterCard</li>
                        <li class="amex hand">American Express</li>
                    </ul>
                    <div class="clearfix"></div>
            </div>
        </div>
        <div class="panel-body">
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-credit-card fa-fw"></i></span>       
                    <select id="demande" id="CreditCardType" class="form-control">
                        <option value="na" selected="">Type de carte :</option>
                        <option value="5">Visa</option>
                        <option value="6">MasterCard</option>
                        <option value="7">American Express</option>
                        <option value="8">Discover</option>
                    </select>                  
            </div>   
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-slack fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Numéro de la carte">
            </div>
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Date d'expiration (MM/AA)">
            </div>                            
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Cryptogramme visuel">
            </div>
            <?php 
            $userid = Auth::user()->id;
            ?>
            <p id="totalpaiement">Total a Payer : <?php echo Cart::total() ?> €</p>
            

            <div class="form-group col-md-12">
                <button id="bouton-panier2" type="submit" class="payOK btn btn-elegant">Paiement</button>
                <input type="hidden" id="userid" value="<?php echo $userid ?>">
            </div>
        </div> 
</div>
<script>
    $(".payOK").click(function() {    
        var userid = $("#userid").val();
        $.ajax({
            data:({userid:userid}),
            type:"post",
            url: "./paiementOK",
            });
    
}); 
</script>




