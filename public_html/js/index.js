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
