const body = document.querySelector(".body"),
 	  nav  = document.querySelector(".nav"),
	  sliderOpen = document.querySelector(".sliderbarOpen"),
      sliderClose = document.querySelector(".sliderbarClose");

sliderOpen.addEventListener("click" , () =>{
 	nav.classList.add("active");
})