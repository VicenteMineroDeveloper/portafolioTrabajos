const dark = document.querySelector('#boton-acercaDeCambio');
const acercaDe = document.querySelector('.acercaDe');
let initialPosition = null;
dark.addEventListener('click', e =>{
    acercaDe.classList.toggle('acercaDeModoOscuro');
})

const darkMobile = (e) => {
    acercaDe.classList.toggle('acercaDeModoOscuro');
}

if (window.PointerEvent){
    window.addEventListener('touchend',darkMobile);
}
