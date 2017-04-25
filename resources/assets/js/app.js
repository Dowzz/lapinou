
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
// NE PAS TOUCHER AU DESSUS 

//affichage dynamique (footer qui remonte)
$("#miniature").load("home");

$(document).ready(function(){
	$(".ajax a").click(function(){
		page=$(this).attr("href");
		$.ajax({
			url:page,
			cache:false,
			success:function(html){
				afficher(html);
			},
			error:function(XMLHttpRequest,textStatus, errorThrown){
				alert(textStatus);
			}
		})
		return false;
	});
});

function afficher(data){
$("#miniature").slideUp(500,function(){
	$("#miniature").empty();
	$("#miniature").append(data);
	$("#miniature").slideDown(1000);
})
}
//test

    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});

	
var password1 = $("#password");
var password2 = $("#cpassword");
var form = $("#registration");

password1.on("input", function(e) {
    var mdp = e.target.value; // Valeur saisie dans le champ mdp
    var message = "Erreur : mot de passe trop court";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    var chiffre= false;

    if (mdp.length >= 8) {
    message = "mot de passe correct";
    couleurMsg = "green"; // Longueur suffisante => couleur verte
	}
    if (mdp.length <= 6) {
        message = "Erreur : mot de passe trop facile";
        couleurMsg = "orange"; // Longueur moyenne => couleur orange
    }
	for (var i = 0; i < mdp.length; i++) {
		if(!isNaN(mdp[i])){
			chiffre= true;
		}
	}
	if(chiffre== false){
		message = "Erreur : le mot de passe ne contient aucun chiffre";
		couleurMsg = "red";
		bool = false;
    }
     

    var aideMdpElt = document.getElementById("aideMdp");

    aideMdpElt.textContent = message; // Texte de l'aide
    aideMdpElt.style.color = couleurMsg; // Couleur du texte de l'aide

});


password2.on("input", function(e) {
	    var password1 = $("#password");
	    var form = $("#registration");
	    var mdp1 = password1.val();//NAME ??
	    var mdp2 = e.target.value;

	    var message = "Erreur : les mots de passe saisis sont différents";
	    var couleurMsg = "red";
	    var bool1 = false; 


	    
	    //console.log("--------------------");
	    //console.log(mdp1.localeCompare(mdp2));
	    if (!mdp1.localeCompare(mdp2)) {
	        message = "Mot de passe OK";
	        couleurMsg = "green";
	        form.attr("onsubmit", "return true");
	    }
	    else{
	    	message = "Erreur : les mots de passe saisis sont différents";
	    	form.attr("onsubmit", "return false");
	    }

	    var aide = document.getElementById("infoMdp");
	    aide.textContent = message;
	    aide.style.color = couleurMsg;
	    e.preventDefault();

});

//switch mot de passe 

$(document).ready(function() {
  $('#oubli').click(function(e) {
    e.preventDefault();
    $('div#login').toggle('500');
  });
  $('#access').click(function(e) {
    e.preventDefault();
    $('div#login').toggle('500');
  });
});




