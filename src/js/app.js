const navegacion = document.querySelector("#navegacion");
const abrirMenu = document.querySelector("#abrir");
const cerrarMenu = document.querySelector("#cerrar");

abrirMenu.addEventListener("click", () => {

    navegacion.classList.add("nav-visible");

});

cerrarMenu.addEventListener("click", () => {

    navegacion.classList.remove("nav-visible");

});
