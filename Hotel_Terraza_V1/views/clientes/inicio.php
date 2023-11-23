<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar La Reserva</title>
    <link rel="stylesheet" href="acces/css/registro.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:wght@300;400;500;600;700&display=swap">
    <style type="text/css">
        /* Agrega tus estilos aquí si es necesario */
    </style>
</head>
<body>
    <div class="container-form">
        <form id="registrationForm" method="POST" action="controllers/clientes.php">
            <h4 style="padding: 0px;">Registro de Visita</h4>
            <div class="information">
                <div class="info-childs">
                    <h2>FECHA DE INGRESO</h2>
                    <label for="bday">Fecha Ingreso:</label>
                    <input type="date" name="bday" id="bday" max="3030-12-31"><br>
                    <label for="bdey">Fecha Salida:</label>
                    <input type="date" name="bdey" id="bdey" min="2023-01-01"><br>  
                    <button type="button" id="validateButton">Validar</button>
                </div>
            </div>
            <div class="form-information hide">
                <div class="form-information-childs">
                    <!-- Agregamos el formulario de registro -->
                    <fieldset>
                        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                        <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese sus apellidos" required>
                        <label for="tipo_documento">Tipo de Documento:</label>
                        <select class="controls" name="tipo_documento" id="tipo_documento" required>
                            <option value="cc">Cédula de Ciudadanía (C.C.)</option>
                            <option value="nit">NIT</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="ex">Documento de Extranjería</option>
                        </select>
                        <input class="controls" type="text" name="numeroDocumento" id="numeroDocumento" placeholder="Ingrese su número de documento" required>
                        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo" required>
                        <input class="controls" type="tel" name="tel" id="tel" placeholder="Ingrese su numero movil" required>
                        <input class="controls" type="ubicacion" name="ubicacion" id="ubicacion" placeholder="De qué lugar nos visita" required>

                        <!-- Nuevos campos para la reserva -->
                        <label for="fechaInicio">Fecha de Inicio:</label>
                        <input type="date" name="fechaInicio" id="fechaInicio" required>
                        <label for="fechaFin">Fecha de Fin:</label>
                        <input type="date" name="fechaFin" id="fechaFin" required>
                        <label for="tipoHabitacion">Tipo de Habitación:</label>
                        <select name="tipoHabitacion" id="tipoHabitacion" required>
                            <option value="individual">Individual</option>
                            <option value="doble">Doble</option>
                            <!-- ... otras opciones ... -->
                        </select>

                        <p>Estoy de acuerdo con <a href="#">Términos y Condiciones</a></p>
                        <button class="botons" type="submit" name="Enviar">Enviar</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>

    <script src="acces/js/script.js"></script>
</body>
</html>


