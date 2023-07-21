const desplegarMenuBtn = document.querySelector(".para-desplegable-div");

const menuDesplegable = document.querySelector("#menu-desplegable");

const flecha = document.querySelector("#flecha-div");

const controlarMenu = false;

desplegarMenuBtn.addEventListener("click", desplegarMenu);

function desplegarMenu(){
    menuDesplegable.classList.toggle("active");
    flecha.classList.toggle("arriba");
}

function redireccionarEditar() {

    window.location.href = "./edit-info.php";
}

