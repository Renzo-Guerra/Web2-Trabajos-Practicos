let FORMULARIO = document.getElementById("form");
let MENSAJE = document.getElementById("mensaje");

FORMULARIO.addEventListener("submit", function(e){
  e.preventDefault();
  let DATA = new URLSearchParams(new FormData(this));
  
  // Se valida la division por 0
  if((DATA.get("operacion") === "dividir") && (DATA.get("num2") === "0")){
    // Se muestra por pantalla un mensaje de error.
    MENSAJE.innerText = "No se puede dividir por cero...";    
    MENSAJE.classList.remove("bg-success");
    MENSAJE.classList.add("bg-danger");
  }else{
    // Llamamos a la funcion que hará la peticion AJAX
    calcularOperacion(DATA);
  }
});

async function calcularOperacion(DATA){
  try {
    // Creamos el path(url) que el router va a examinar, para luego llamar al archivo "operar.php", 
    // el cual llamará a "operaciones.php", y este finalmente devolvera el resultado de la operacion (Si todo salio bien) 
    let url = `${DATA.get("operacion")}/${DATA.get("num1")}/${DATA.get("num2")}`;
    
    let estatus = await fetch(url);
    if(estatus.ok){
      let respuesta = await estatus.text();
      // Asignamos la respuesta al contenedor y le asignamos los estilos correspondientes
      MENSAJE.innerText = respuesta;    
      MENSAJE.classList.remove("bg-danger");
      MENSAJE.classList.add("bg-success");
    } 
  } catch (error) {
    // Asignamos el texto al contenedor y le asignamos los estilos correspondientes
    MENSAJE.innerText = "No se puede dividir por cero...";    
    MENSAJE.classList.remove("bg-success");
    MENSAJE.classList.add("bg-danger");
  }
}