const desplegarMenuBtn = document.querySelector(".icono-div");

const menuDesplegable = document.querySelector("#menu-desplegable");

const flecha = document.querySelector("#flecha-div");

const controlarMenu = false;

desplegarMenuBtn.addEventListener("click", desplegarMenu);
//alert("buenas");
function desplegarMenu(){
    menuDesplegable.classList.toggle("active");
    flecha.classList.toggle("arriba");
}


