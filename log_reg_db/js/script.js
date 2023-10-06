//variables
var logReg_helper = document.getElementById("log-reg__ayudante");
var logReg_user = document.getElementById("log-reg__usuario")
var container_user_helper = document.querySelector(".contenedor__usuario-ayudante");
var form_helper = document.querySelector(".formulario__ayudante");
var form_user = document.querySelector(".formulario__usuario");
var backbox_user = document.querySelector(".caja__trasera-usuario");
var backbox_helper = document.querySelector(".caja__trasera-ayudante");
var reg_helper = document.querySelectorAll("#reg__ayudante");
var reg_user = document.querySelectorAll("#reg__usuario");
var logHelper_bt = document.getElementById("iniciar__sesion-ayudante");
var text_helper = document.querySelector(".texto__ayudante");
var logUser_bt = document.getElementById("iniciar__sesion-usuario");
var text_user = document.querySelector(".texto__usuario");


//activadores
document.getElementById("btn__iniciar-ayudante").addEventListener("click", helper);
document.getElementById("btn__iniciar-usuario").addEventListener("click", user);
logReg_helper.addEventListener("click", formHelper);
logReg_user.addEventListener("click", formUser);
window.addEventListener("resize", widthPage);

//funciones
function widthPage(){
    if(window.innerWidth > 850){
        backbox_user.style.display = "block";
        backbox_helper.style.display = "block";
    }else{
        backbox_helper.style.display = "block";
        backbox_helper.style.opacity = "1";
        backbox_user.style.display = "none";
        form_user.style.display = "block";
        form_helper.style.display = "none";
        container_user_helper.style.left = "0px";
    }
}

function user(){
    if(window.innerWidth > 850){
        form_user.style.display = "block";
        container_user_helper.style.left = "10px";
        form_helper.style.display = "none";
        backbox_helper.style.opacity = "1";
        backbox_user.style.opacity = "0";
    }else{
        form_user.style.display = "block";
        container_user_helper.style.left = "0px";
        form_helper.style.display = "none";
        backbox_helper.style.display = "block";
        backbox_user.style.display = "none";
        backbox_helper.style.opacity = "1";
    }
    
}

function helper(){
    if(window.innerWidth > 850){
        form_helper.style.display = "block";
        container_user_helper.style.left = "410px";
        form_user.style.display = "none";
        backbox_helper.style.opacity = "0";
        backbox_user.style.opacity = "1";
    }else{
        form_helper.style.display = "block";
        container_user_helper.style.left = "0px";
        form_user.style.display = "none";
        backbox_helper.style.display = "none";
        backbox_user.style.display = "block";
        backbox_user.style.opacity = "1";
    }
    
} 

function formHelper(){
    if (logReg_helper.innerHTML == `Enviar Solicitud <i class="fa-solid fa-arrow-right"></i>`){
        for(var i = 0; i < reg_helper.length; i++){
            reg_helper[i].style.display = "block";
        }
        logHelper_bt.style.display = "none";
        text_helper.innerText = "Ya estas registrado como ayudante?";
        logReg_helper.innerHTML = `Ingresa <i class="fa-solid fa-arrow-right"></i>`;
    }else{
        for(var i = 0; i < reg_helper.length; i++){
            reg_helper[i].style.display = "none";
        }
        logHelper_bt.style.display = "block";
        text_helper.innerText = "Quieres convertirte en ayudante?";
        logReg_helper.innerHTML = `Enviar Solicitud <i class="fa-solid fa-arrow-right"></i>`;
    }
}

function formUser(){
    if (logReg_user.innerHTML == `Registrate <i class="fa-solid fa-arrow-right"></i>`){
        for (var i = 0; i < reg_user.length; i++){
            reg_user[i].style.display = "block";
        }
        logUser_bt.style.display = "none";
        text_user.innerText = "Ya tienes una cuenta?";
        logReg_user.innerHTML = `Inicia Sesión <i class="fa-solid fa-arrow-right"></i>`;
    }else{
        for (var i = 0; i < reg_user.length; i++){
            reg_user[i].style.display = "none";
        }
        logUser_bt.style.display = "block";
        text_user.innerText = "No tienes una cuenta aún?";
        logReg_user.innerHTML = `Registrate <i class="fa-solid fa-arrow-right"></i>`;
    }
}