<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="modal-contact"> Contactez-nous </h4>  
</div>


<div class="modal-body">    

<!-- Formulaires -->
    <div class="container">
        <div class="tab-pane" id="Registration">
            <form role="form" class="form-horizontal">           
                <div class="form-group">
                    <label for="pseudo" class="control-label">Pseudo</label>  
                        <input type="text" class="input-dark-bg" class="form-control" id="pseudo" placeholder="Pseudo" /></div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>                    
                        <input type="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" />                    
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">N° de commande</label>
                    
                        <input type="text" class="input-dark-bg" class="form-control" id="ncommande" placeholder="N° de commande" />                    
                </div>
                <div class="form-group">
                    <label  for="subject" class="control-label">Objet de la demande</label>        <select id="demande" id="subject" name="subject" class="form-control" required="required">
                            <option value="na" selected="">Selection de la demande :</option>
                            <option value="annulation">Modification / Annulation de la commande</option>
                            <option value="remboursement">Retour et Remboursement</option>
                            <option value="telechargement">Téléchargement d'un e-book</option>
                            <option value="lecture">Lecture d'un e-book</option>
                            <option value="loi">Loi informatique et libertés</option>
                            <option value="autre">Autre</option>
                        </select>                  
                </div>               
            </form>
        </div>
     <div  id="bordure">
    </div>
    <div class="form-group"> 
        <label for="comment" class="control-label">Commentaire</label>
        <textarea id="comment" class="control-label" class="form-control" id="comment" ></textarea>
    </div>
    <div class="row">
        <div class="col-sm-6"></div>            
                <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
                <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button>            
        </div>
    </div>
</div>
