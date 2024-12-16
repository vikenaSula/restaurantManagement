//Select element function

const selectELement = function(element){
   return document.querySelector(element);
};

let menuToggler = selectELement('.menu-toggle');
var head=selectELement('header');
 

menuToggler.addEventListener('click', function (){
	head.classList.toggle("open");
});

   //Lista animation
 var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
      },
       loop: true,
        autoplay: {
        delay: 500,
        disableOnInteraction: false,
      },
    });

//Scroll reveal
window.sr= ScrollReveal();

sr.reveal('.animate-left', {
	origin:'left',
	duration: 1000,
	distance: '25rem',
	delay: 300
});

sr.reveal('.animate-right',{
	origin:'right',
	duration: 1000,
	distance: '25rem',
	delay: 300
});

sr.reveal('.animate-top',{
	origin:'top',
	duration: 1000,
	distance: '25rem',
	delay: 600
});

sr.reveal('.animate-bottom',{
	origin:'bottom',
	duration: 1000,
	distance: '25rem',
	delay: 600
});

 //Info Lokal
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}