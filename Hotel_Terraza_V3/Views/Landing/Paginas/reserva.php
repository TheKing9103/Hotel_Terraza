
<link href="Assets/Css/Fondo_Dashboard.css" rel="stylesheet">
<div class="container-fluid"><br><br>
	<div class="row d-flex justify-content-center">
    
		<div class="col col-sm-2"><br><br>
			<div class="card rounded-5">
				<br>

                <form action="procesar_reserva.php" method="post">
    <label for="nombres">Nombres: </label><br>
    <input type="text" id="nombres" name="nombres" required><br>
    
    <label for="apellidos">Apellidos:</label><br>
    <input type="text" id="apellidos" name="apellidos" required><br>
    
    <label for="documento">Tipo de Documento:</label><br>
    <select id="documento" name="documento" required>
        <option value="">Seleccione el tipo de documento</option>
        <option value="Pasaporte">Pasaporte</option>
        <option value="cedula ciudadania">cedula de ciudadania</option>
        <option value="cedula extrangeria">cedula extrangeria </option>
        <!-- Agrega más opciones según los tipos de documentos que necesites -->
    </select><br>
    
    <label for="numero_documento">Número de Documento:</label><br>
    <input type="text" id="numero_documento" name="numero_documento" required><br>
    
    <label for="correo">Correo:</label><br>
    <input type="email" id="correo" name="correo" required><br>
    
    <label for="direccion">Dirección:</label><br>
    <input type="text" id="direccion" name="direccion" required><br>
    
    <label for="tipo_habitacion">Tipo de Habitación:</label><br>
    <input type="text" id="tipo_habitacion" name="tipo_habitacion" required><br>
    
    <label for="num_habitaciones">Número de Habitaciones:</label><br>
    <input type="number" id="num_habitaciones" name="num_habitaciones" required><br>
    
    <input type="submit" class="btn btn-outline-dark" value="Reservar">
</form>

				<br>
			</div>
		</div>
	</div>
</div>