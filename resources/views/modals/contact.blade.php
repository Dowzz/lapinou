<h4 class="modal-title" id="modal-contact"> Contactez-nous 
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</h4>
    <div class="modal-body">
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Pseudo">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-slack fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Numéro de commande">
        </div>
        <div class="input-group margin-bottom-sm">        
            <select id="demande" id="subject" name="subject" class="form-control" required="required">
            <option value="na" selected="">Selection de la demande :</option>
            <option value="annulation">Modification / Annulation de la commande</option>
            <option value="remboursement">Retour et Remboursement</option>
            <option value="telechargement">Téléchargement d'un e-book</option>
            <option value="lecture">Lecture d'un e-book</option>
            <option value="loi">Loi informatique et libertés</option>
            <option value="autre">Autre</option>
            </select>                  
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-comments-o fa-fw"></i></span>
                <textarea class="form-control" type="text" placeholder="Commentaire"></textarea>
        </div>            
        <div class="form-group">
            <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
            <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button> 
        </div>
    </div>

