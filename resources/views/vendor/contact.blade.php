<h4 class="modal-title" id="myModalLabel"> Contactez-nous </h4>

<div class="modal-body">
    <div class="row">
        <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
 
<!-- Navigation -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#Login" data-toggle="tab">Connexion</a></li>
                <li><a href="#Registration" data-toggle="tab">Inscription</a></li>
            </ul>
<!-- Formulaires -->

                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Pseudo</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="input-dark-bg" class="form-control" placeholder="Pseudo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="input-dark-bg" class="form-control" id="email" placeholder="Email" />
                                </div>
                            </div>
       
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">N° commande</label>
                                <div class="col-sm-10">
                                    <input type="text" class="input-dark-bg" class="form-control" placeholder="Pseudo" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Objet de la demande</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Selection de la demande :</option>
                                        <option value="annulation">Modification / Annulation de la commande</option>
                                        <option value="remboursement">Retour et Remboursement</option>
                                        <option value="telechargement">Téléchargement d'un e-book</option>
                                        <option value="lecture">Lecture d'un e-book</option>
                                        <option value="loi">Loi informatique et libertés</option>
                                        <option value="autre">Autre</option>
                                    </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-elegant btn-sm" id="bouton-panier">Valider</button>
                                    <button type="button" class="btn btn-danger btn-sm" class="close" data-dismiss="modal" id="bouton-panier">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
        </div>
    </div>
</div>
