document.addEventListener("DOMContentLoaded", function () {

    const formulario = document.getElementById("formularioEquipo");

    formulario.addEventListener("submit", function (evento) {

        const nombre = document.getElementById("nombre").value.trim();
        const tipo = document.getElementById("tipo").value.trim();
        const marca = document.getElementById("marca").value.trim();
        const modelo = document.getElementById("modelo").value.trim();
        const numeroSerie = document.getElementById("numero_serie").value.trim();
        const estado = document.getElementById("estado").value.trim();

        let errores = [];

        // Validar campos vacíos
        if (
            nombre === "" ||
            tipo === "" ||
            marca === "" ||
            modelo === "" ||
            numeroSerie === "" ||
            estado === ""
        ) {
            errores.push("Todos los campos son obligatorios.");
        }

        // Validar longitud del nombre
        if (nombre.length < 3 || nombre.length > 50) {
            errores.push("El nombre debe tener entre 3 y 50 caracteres.");
        }

        // Validar longitud de marca
        if (marca.length < 2 || marca.length > 30) {
            errores.push("La marca debe tener entre 2 y 30 caracteres.");
        }

        // Validar número de serie
        if (numeroSerie.length < 5 || numeroSerie.length > 30) {
            errores.push("El número de serie debe tener entre 5 y 30 caracteres.");
        }

        // Validar que el número de serie no tenga espacios
        if (numeroSerie.includes(" ")) {
            errores.push("El número de serie no debe contener espacios.");
        }

        // Validar estado
        const estadosPermitidos = [
            "Activo",
            "En mantenimiento",
            "Baja"
        ];

        if (!estadosPermitidos.includes(estado)) {
            errores.push(
                "El estado debe ser: Activo, En mantenimiento o Baja."
            );
        }

        // Mostrar errores
        if (errores.length > 0) {

            evento.preventDefault();

            alert(errores.join("\n"));
        }

    });

});