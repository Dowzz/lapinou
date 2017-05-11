<?php

	/*$livre = new Livre;
	$livre->title = '';
	$livre->etc etc 

	$livre->save;*/
?>
<div class="mini">
	<div class="span-ajout">
		<h3>Ajout d'un livre</h3>
		<div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-link fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="URL de couverture">
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-font fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Titre">
        </div> 
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Auteur">
        </div> 
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-file-text-o fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Editeur">
        </div> 
        <div class="input-group margin-bottom-sm"> 
            <span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>       
            <select id="demande" id="subject" name="subject" class="form-control" required="required">
            <option value="na" selected="">Genre :</option>
            <option value="aventure">Aventure / Action</option>
            <option value="classique">Classique</option>
            <option value="conte">Conte</option>
            <option value="dystopie">Dystopie</option>
            <option value="espionnage">Espionnage</option>
            <option value="fantastique">Fantastique</option>
            <option value="horreur">Horreur / Terreur / Frisson</option>
            <option value="gratuit">Gratuit</option>
            <option value="humour">Humour</option>
            <option value="jeunesse">Jeunesse</option>
            <option value="historique">Historique</option>
            <option value="policier">Policier</option>
            <option value="science-fiction">Science-fiction</option>
            <option value="thriller">Thriller</option>
            <option value="western">Western</option>
            </select>                  
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-comments-o fa-fw"></i></span>
            <textarea class="form-control" type="text" placeholder="Résumé"></textarea>
        </div> 
        <div class="input-group margin-bottom-sm"> 
            <span class="input-group-addon"><i class="fa fa-list fa-fw"></i></span>       
            <select id="demande" id="subject" name="subject" class="form-control" required="required">
            <option value="na" selected="">Format :</option>
            <option value="epub">Epub</option>
            <option value="multi">Multi</option>
            <option value="pdf">Pdf</option>
            </select>                  
        </div>   
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Date de parution">
        </div>
        <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-eur fa-fw"></i></span>
            <input class="form-control" type="text" placeholder="Prix du livre">
        </div> 
        <div>
            <button id="bouton-panier" id="check" type="button" class="btn btn-elegant" data-toggle="modal" data-target="#modal-pay">Enregistrer</button>
        </div>
	</div>
</div>

<div class="mini">
	<div class="span-recep">
		<h3>Reception demande de contact</h3>
		  	<div class="panel-body">
		  	<div class="col-md-6 reception">
                <div class="comment-user"><i class="fa fa-user"></i> Pseudo</div>
                <div class="comment-user"><i class="fa fa-envelope-o"></i> Mail</div>
                <div class="comment-user"><i class="fa fa-slack"></i> Commande</div>
            </div>  
            <div class="col-md-6 reception">  
                <div class="comment-user"><i class="fa fa-question"></i> Demande</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Le 10 mai 2017</time>
            </div>
          
            </div>        
                <p class="mail">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                    
                <hr>
            <div class="panel-body">
		  	<div class="col-md-6 reception">
                <div class="comment-user"><i class="fa fa-user"></i> Pseudo</div>
                <div class="comment-user"><i class="fa fa-envelope-o"></i> Mail</div>
                <div class="comment-user"><i class="fa fa-slack"></i> Commande</div>
            </div>  
            <div class="col-md-6 reception">  
                <div class="comment-user"><i class="fa fa-question"></i> Demande</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Le 10 mai 2017</time>
            </div>
          
            </div>        
                <p class="mail">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                
        	       
	</div>
</div>