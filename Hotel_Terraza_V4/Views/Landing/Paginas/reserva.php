<link href="Assets/Css/Fondo_Dashboard.css" rel="stylesheet">
<div class="container-fluid"><br><br>
    <div class="row d-flex justify-content-center">

        <div class="col col-sm-3"><br><br>
            <div class="card rounded-5">
                <br>

                <form action="procesar_reserva.php" method="post">
                    <label class="form-label" for="nombres">Nombres: </label><br>
                    <input class="form-control" type="text" id="nombres" name="nombres" required><br>

                    <label class="form-label" for="apellidos">Apellidos:</label><br>
                    <input class="form-control" type="text" id="apellidos" name="apellidos" required><br>

                    <label class="form-label" for="documento">Tipo de Documento:</label><br>
                    <select class="form-control" id="documento" name="documento" required>
                        <option value="" disabled selected>Seleccione el tipo de documento</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="cedula ciudadania">cedula de ciudadania</option>
                        <option value="cedula extranjeria">cedula extranjeria </option>
                        <!-- Agrega más opciones según los tipos de documentos que necesites -->
                    </select><br>

                    <label class="form-label" for="numero_documento">Número de Documento:</label><br>
                    <input class="form-control" type="text" id="numero_documento" name="numero_documento" required><br>

                    <label class="form-label" for="correo">Correo:</label><br>
                    <input class="form-control" type="email" id="correo" name="correo" required><br>

                    <label class="form-label" for="direccion">Dirección:</label><br>
                    <input class="form-control" type="text" id="direccion" name="direccion" required><br>

                    <label for="tipo_habitacion">Tipo de Habitación:</label>
                    <select class="form-control" name="tipo_habitacion" id="tipo_habitacion" required>
                        <option selected disabled value="">selecciona una habitacion</option>
                        <?php foreach ($this->model->habitacion() as $p) :
                        ?>
                            <option value="<?php echo $p->habitacion ?>"><?php echo $p->habitacion . " " . $p->detalles; ?></option>
                        <?php endforeach;
                        ?>
                    </select>

                    <label class="form-label" for="num_habitaciones">Número de Habitaciones:</label><br>
                    <input class="form-control" type="number" id="num_habitaciones" name="num_habitaciones" required><br>

                    <input class="form-control btn btn-success" type="submit" class="btn btn-outline-dark" value="Reservar">
                </form>

                <br>
            </div>
        </div>
    </div>
</div>