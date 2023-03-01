let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

const $btnOcultar = document.querySelector("#menu-icon"),
	// $btnMostrar = document.querySelector("#cerrar"),
	$logo = document.querySelector("#lg");
    
    // $btnMostrar.addEventListener("click", () => {   
 	// $logo.style.display = "block";
    // });

    $btnOcultar.addEventListener("click", () => {
    	$logo.style.display = "none";
    });