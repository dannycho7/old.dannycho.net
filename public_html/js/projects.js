//window.addEventListener('load',function(){slider(0,"start")},false); //have to wait for all the styles to be loaded before the 'getComputedStyle' will work
var slideindex = 0;
//x is either 1 or -1 when arrow clicking, based on left or right
//y is the number of the image slider id.
//if y is 0 this means the page just loaded, in which case we will make all of the intial imgs on top and everything else display none
//for implementation of this code contact me(danny cho) or read below.
//Wrap your images inside a div with class name 'slide-container', and id name 
//(using 1 as an example, but it's used to number the amount of slides there are) 'slide-container-1'
//your images should all have class 'slide', and the img you want to appear on top should have another class called 'initial-slide'
//arrows or buttons are up to the user. Make sure to use the parameters correctly.
function slider(x,y){
	var i = 0;
	if(document.getElementsByClassName("slide-container").length > 0){
		if(y=="start"){
			var slidelist = document.getElementsByClassName("slide-container");
			//sets the div to be the same height as the very first img. This helps when switching the images, so the content below doesn't move.
			for(i =0; i<slidelist.length;i++){//loops through every slideshow
				var slidecontainer=slidelist[i];
				var height = window.getComputedStyle(slidecontainer.getElementsByClassName("initial-slide")[0]).height; //height of each initial image slider
				slidecontainer.style.height=height;
			}
		}
		else{
			var slidername="slide-container-"+y;
			var slidecontainer = document.getElementById(slidername);
			var slides = slidecontainer.getElementsByClassName("slide");
			slideindex+=x;
			if(slideindex==slides.length){//if reached the end of the slide through right arrow
				slideindex=0;
			}
			else if(slideindex<0){ //if reached end of the slide through left arrow
				slideindex=slides.length-1;
			}
			for (i=0; i<slides.length; i++){ //loops through each img in a particular slide
				slides[i].style.display="none";
			}
			slides[slideindex].style.display="block";
		}
	}
}
