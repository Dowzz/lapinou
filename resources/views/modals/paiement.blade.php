


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
        <form name="Form" action="/deletepanier2" method ="get" onsubmit="return validateForm()">
        <div class="panel-body">
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-credit-card fa-fw"></i></span>       
                    <select id="demande" name="answer_a" id="CreditCardType" class="form-control">
                        <option value="na" selected="">Type de carte :</option>
                        <option value="5">Visa</option>
                        <option value="6">MasterCard</option>
                        <option value="7">American Express</option>
                        <option value="8">Discover</option>
                    </select>                  
            </div>   
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-slack fa-fw"></i></span>
                <input class="form-control" name="answer_b" type="text" placeholder="Numéro de la carte">
            </div>
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                <input class="form-control" name="answer_c" type="text" placeholder="Date d'expiration (MM/AA)">
            </div>                            
            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>
                <input class="form-control" name="answer_d" type="text" placeholder="Cryptogramme visuel">
            </div>
            @if (Auth::user())
            <?php 
            $userid = Auth::user()->id;
            ?>
            @else
            <?php
            $userid=0;
            ?>
            @endif           
            <p id="totalpaiement">Total a Payer : <?php echo Cart::total() ?> €</p>
            

            <div class="form-group col-md-12">
                <button id="bouton-panier2" type="submit" class=" btn btn-elegant">Payer</button>
                <input type="hidden" id="userid" value="<?php echo $userid ?>">
            </div>
        </div> 
        </form>
</div>
<script>
function validateForm()
    {
    var a=document.forms["Form"]["answer_a"].value;
    var b=document.forms["Form"]["answer_b"].value;
    var c=document.forms["Form"]["answer_c"].value;
    var d=document.forms["Form"]["answer_d"].value;
    if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="")
        {
        alert("Merci de votre achat ! Vous trouverez vos nouveaux E-books dans profil, rubrique mes achats.");
        return false;
        }
    else{
        var userid = $("#userid").val();
        $.ajax({
            data:({userid:userid}),
            type:"post",
            url: "./paiementOK",
            success: function(msg){
            { alert("Merci de votre achat ! Vous trouverez vos nouveaux E-books dans Profil, rubrique \"mes achats\""); }
        }
            });
    }
    }


</script>




