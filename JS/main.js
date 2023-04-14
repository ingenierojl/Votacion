//document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var caja_trasera_login = document.querySelector(".caja__trasera-login");


    //FUNCIONES
    
function selectperc1()
{
    console.log("FUNCION SELECCIONAR JUAN PALACIOS");
     document.getElementById("r01").checked = true;
}

function selectperc2()
{
    console.log("FUNCION SELECCIONAR LUZ AMPARO ROJAS");
     document.getElementById("r02").checked = true;
}
function selectperc3()
{
    console.log("FUNCION SELECCIONAR JERONIMO CANO");
     document.getElementById("r03").checked = true;
}
function selectperc0()
{
    console.log("FUNCION SELECCIONAR VOTO BLANCO");
     document.getElementById("r00").checked = true;
}



function anchoPage(){

    if (window.innerWidth > 850){
        //caja_trasera_login.style.display = "block";
    }else{
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block"; 
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            caja_trasera_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            caja_trasera_login.style.display = "none";
        }
    }