$(document).ready(function(){
	iconresize();
});
function iconresize(){
	if(document.getElementById("photo-album-icon")){
		var lineheight=parseInt($("p").css("line-height"));
		document.getElementById("photo-album-icon").style.height=lineheight+"px";
	}
}
window.addEventListener("resize", function(){
	iconresize();
},false);

function showPhoto(str){
	var	xhttp = new XMLHttpRequest();
	$("html, body").animate({
		scrollTop: $("#content-container").offset().top - "80"
	}, 400);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.body.innerHTML = this.responseText;
			if(str != ""){
				window.history.pushState({}, "Danny's Personal Site", "photos?folder=" + str);
			}
			else{
				window.history.pushState({}, "Danny's Personal Site", "photos");
			}
		}
	};
	xhttp.open("GET","photos?folder=" + str,true);
	xhttp.send();	
}