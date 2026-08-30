console.log("JavaScript conectado correctamente.");
// Evento click
const botonConoceme = document.getElementById("botonConoceme");
const mensajeConoceme = document.getElementById("mensajeConoceme");

if (botonConoceme) {

    botonConoceme.addEventListener("click", function() {

        mensajeConoceme.textContent =
            "¡Gracias por visitar mi portafolio! Espero que disfrutes conociendo mi trabajo.";

    });

}


// Evento submit
const formularioContacto = document.getElementById("formularioContacto");
const mensajeFormulario = document.getElementById("mensajeFormulario");

if (formularioContacto) {

    formularioContacto.addEventListener("submit", function(evento) {

        evento.preventDefault();

        mensajeFormulario.textContent =
            "¡Gracias por contactarme! Tu mensaje ha sido recibido.";

    });

}
