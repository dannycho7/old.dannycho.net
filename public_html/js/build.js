var scrolledon = false;
$(document).ready(function(){
	appear();
	$(window).on("scroll",function(){
		appear();
	})
;});

function appear(){
	var i = 0;
	if($("#projects").length){
		var winheight = $(window).height();
		var windowpos = $(window).scrollTop();
		var pos = $("#projects").offset().top;
		pos = pos - parseInt($("#projects").css("margin-top"))/2; //adjusts according to margin,since the margin isn't counted for in offset()
		var elemheight = $("#projects").height();
		elemheight = elemheight + parseInt($("#projects").css("margin-bottom"))/2;
		var elems = document.getElementsByClassName("proj-container-container");
		var h1pos = $("#projh1").offset().top+parseInt($("#projh1").css("margin-bottom"))+$("#projh1").height()+$(".proj-container-container").height()/2;
		if(((windowpos>pos && windowpos<(pos+elemheight))||(windowpos+winheight>pos)) && scrolledon === false){ //when projects gets scrolled on : if the top
			for(i=0; i<elems.length;i++){
				var sec = 4*i/10 + 0.6;
				elems[i].style.transition="all " + sec + "s ease";
				elems[i].style.webkittransition="all " + sec + "s ease";
				elems[i].style.transform="translate(0,0)";
				elems[i].style.opacity="1";
			}
			scrolledon=true;
		}
		if((windowpos>(pos+elemheight)||(windowpos<pos&&windowpos+winheight<h1pos))&&scrolledon===true){
			//when projects is no longer in view
			scrolledon=false;
			for(i=0; i<elems.length;i++){
				elems[i].style.transform="translate(0,40%)";
				elems[i].style.opacity="0";
			}
		}
	}
}

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
var revealed = false;
function reveal(){ //this method will change the class
	var menu = document.getElementById("container");
	revealed=true;
	if(getComputedStyle(menu).visibility=="hidden"){
		menu.style.visibility="visible";
		menu.style.opacity=1;
		document.getElementById("navigation").classList.toggle("gradientCntrl");
		document.getElementById("menuimg").style.display="none";
		document.getElementById("exit").style.display="inline-block";
	}
	else{
		document.getElementById("navigation").classList.toggle("gradientCntrl");
		menu.style.visibility="hidden";
		menu.style.opacity=0;
		document.getElementById("menuimg").style.display="inline-block";
		document.getElementById("exit").style.display="none";
	}
}

//runs when window gets resized
function menuswitch(){
	if(getComputedStyle(document.getElementById("menu-icon")).display=="none" && revealed){
		var menu = document.getElementById("container");
		menu.style.visibility="visible";
		menu.style.opacity=1;
		revealed=false;
	}
	if(getComputedStyle(document.getElementById("menuimg")).display=="inline-block" && getComputedStyle(document.getElementById("menu-icon")).display !="none"){
		var menu = document.getElementById("container");
		menu.style.visibility="hidden";
		menu.style.opacity=0;
		revealed = false;
	}
}

function showInfo(element, project_id){
	var content = element.parentNode;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4 && xhttp.status == 200){
			content.innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", "projects/" + project_id + "/description", true);
	xhttp.send();
}
