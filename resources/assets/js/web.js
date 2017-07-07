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
