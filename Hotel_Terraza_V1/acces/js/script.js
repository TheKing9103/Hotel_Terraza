document.addEventListener("DOMContentLoaded", function () {
    const validateButton = document.getElementById("validateButton");
    const registrationContainer = document.querySelector(".form-information");

    validateButton.addEventListener("click", async () => {
        // Aquí puedes realizar una solicitud AJAX para validar la disponibilidad de habitaciones
        // Simulación de una respuesta exitosa (habría que ajustar según la lógica real)
        const habitacionesDisponibles = true;

        if (habitacionesDisponibles) {
            // Si hay habitaciones disponibles, ocultar el formulario de validación y mostrar el formulario de registro
            document.querySelector(".information").style.display = "none";
            registrationContainer.style.display = "block";
        } else {
            // Manejar el caso en el que no hay habitaciones disponibles
            alert("Lo sentimos, no hay habitaciones disponibles en las fechas seleccionadas.");
        }
    });
});












