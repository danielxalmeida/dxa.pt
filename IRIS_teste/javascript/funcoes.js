function voltAtras() {
    window.history;
    window.history.go(-1);
}
function mudaToggler() {
    let icone = document.getElementById("mudarbotao");
    let aberto = document.querySelector(".aberto");
    if (aberto) {
        icone.classList.remove("aberto");
        icone.classList.toggle("fechado");
    } else {
        icone.classList.remove("fechado");
        icone.classList.toggle("aberto");
    }
}
function dropMenu() {
    menu.scrollIntoView();
    setTimeout(abrirMenu, 700);
}
function abrirMenu() {
    let abrir = document.querySelector("#livros");
    abrir.click();
}
function verMais(){
    var campo1 = document.getElementById("completo");
    var campo2 = document.getElementById("abreviado");
    var campo3 = document.querySelector(".ver-mais");

    campo2.classList.toggle("d-none");
    campo3.classList.toggle("d-none");
    campo1.classList.toggle("d-none");
    campo1.scrollIntoView();
}
function mostrar(campo,icon){
    var pass;
    switch(campo){
        case 1: pass = document.querySelector("input[name='atual']");break;
        case 2: pass = document.querySelector("input[name='nova']");break;
        case 3: pass = document.querySelector("input[name='confirma']");break;
        case 4: pass = document.querySelector("input[name='password']");break;
        default: pass="";
    }
    pass.setAttribute("type","text");
    icon.classList.toggle("bi-eye");
    icon.classList.toggle("bi-eye-slash-fill");
}
function ocultar(campo,icon){
    var pass;
    switch(campo){
        case 1: pass = document.querySelector("input[name='atual']");break;
        case 2: pass = document.querySelector("input[name='nova']");break;
        case 3: pass = document.querySelector("input[name='confirma']");break;
        case 4: pass = document.querySelector("input[name='password']");break;
        default: pass="";
    }
    pass.setAttribute("type","password");
    icon.classList.toggle("bi-eye");
    icon.classList.toggle("bi-eye-slash-fill");
}