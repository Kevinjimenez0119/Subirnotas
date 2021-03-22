

/* Menú Superior */
let _estadoMenuSuperior = 0;
let _SUPERIOR=0;

const contenedor_menu_superior = document.getElementById("menu-superior");

function abrirMenu(){
    if(screen.width<=950){
        console.log("Entro");
        if (_SUPERIOR == 0 || _SUPERIOR == 1) {
			contenedor_menu_superior.classList.add("visible");
			if (_SUPERIOR == 1) {
				contenedor_menu_superior.classList.remove("ocultar");
			}
			_SUPERIOR = 2;
		} else {
			contenedor_menu_superior.classList.add("ocultar");
			contenedor_menu_superior.classList.remove("visible");
			_SUPERIOR = 1;
		}
    }

}

/**
 * Función media query menu superior.
 */
function abrirMenuSuperior() {
	if (screen.width > 950) {

		if (_estadoMenuSuperior == 1) {
			if (_SUPERIOR == 1) {
				contenedor_menu_superior.classList.remove("ocultar");
			}
			contenedor_menu_superior.classList.add("visible");
			_SUPERIOR = 2;
			_estadoMenuSuperior = 0;
		}
	} else {
		if (_estadoMenuSuperior == 0) {
			contenedor_menu_superior.classList.add("ocultar");
			contenedor_menu_superior.classList.remove("visible");
			_SUPERIOR = 1;
			_estadoMenuSuperior = 1;
		}
	}
}


/*******************************
 ******** Intervalos *********** 
 *******************************/
/**
 * Intervalo de la función media query menu superior.
 */
setInterval('abrirMenuSuperior()', 100);