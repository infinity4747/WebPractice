var sliderIndex=1;
showSlider(sliderIndex);
function plusSlide(n) {
	showSlider(sliderIndex+=n);
}
function currentSlide(n) {
	showSlider(sliderIndex=n);
}
function showSlider(n) {
	var i;
	var slides=document.getElementsByClassName("myslide");
	var number=document.getElementsByClassName("number");

	if(n>slides.length){
		sliderIndex=1;
	}
	if(n<1){
		sliderIndex=slides.length;
	}
	for (i = 0;i<slides.length;i++){
		number[i].style.display="none";
		slides[i].style.display="none";
	}
	slides[sliderIndex-1].style.display="block";
}
	