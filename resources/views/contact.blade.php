<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="modal-contact"> Contactez-nous </h4>  
</div>


<div class="modal-body">
    <div class="row">
        <div class="col-md-8" id="bordure">
 
<!-- Formulaires -->

                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                        <div class="row">
                            <div class="form-group">
                                <label for="pseudo" class="col-sm-3 control-label">Pseudo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input-dark-bg" class="form-control" placeholder="Pseudo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" />
                                </div>
                            </div>
       
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">N° de commande</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input-dark-bg" class="form-control" placeholder="N° de commande" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  for="subject" class="col-sm-3 control-label">Objet de la demande</label>
                                <div class="col-sm-8">
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
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="comment" class="col-sm-1 control-label">Commentaire</label>
                    <textarea id="comment" class="col-sm-5 control-label" class="form-control" id="comment" ></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
                            <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button>
                        </div>

                </div>
    </div>
</div>
