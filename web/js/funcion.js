

function accion(valor) {

    if(window.innerWidth < 500){

        var elemento = document.getElementsByClassName(valor);
        var cantidad = elemento.length;

        for (var i = 0; i < cantidad; i++) {
            elemento[i].classList.toggle('aparece');
        }

    }
}

