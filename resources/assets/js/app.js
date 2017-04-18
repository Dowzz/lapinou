
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

