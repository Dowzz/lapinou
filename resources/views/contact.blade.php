<h4 class="modal-title" id="modal-contact"> Contactez-nous <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></h4>
<div class="modal-body">
    <div class="row">
        <form class="col-md-12"> 
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                <label for="pseudo" class="control-label">Pseudo</label>
                <input type="text" class="input-dark-bg" class="form-control" id="pseudo" placeholder="pseudo" />
                </div>
                <div class="form-group">
                <label for="email" class="control-label">Email</label>                    
                <input type="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" />                    
                </div>
                <div class="form-group">
                <label for="password" class="control-label">N° de commande</label> 
                <input type="text" class="input-dark-bg" class="form-control" id="ncommande" placeholder="N° de commande" />                    
                </div>
                <div class="form-group">
                <label  for="subject" class="control-label">Objet de la demande</label>        
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
            </div>
    
            <div class="col-md-6">
                <div class="form-group"> 
                <label for="comment" class="control-label">Commentaire</label>
                <textarea class="input-dark-bg" id="comment" class="control-label" class="form-control" id="comment" ></textarea>
                </div>
                <div class="form-group">
                   <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
                   <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button> 
                </div>
            </div>
        </div>
    </form>
</div>
