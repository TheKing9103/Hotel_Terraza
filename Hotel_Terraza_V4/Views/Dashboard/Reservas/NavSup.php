    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php require_once("Views/Dashboard/Modulos/Nav.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Hotel Terraza</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="breadcrumbs">

            <div class="col-sm-4">

            </div>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Reservaciones Pendientes</strong>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Fecha de solicitud</th>
                                                <th>Cliente</th>
                                                <th>Cedula</th>
                                                <th>Correo</th>
                                                <th>Lugar de visita</th>
                                                <th>Celular</th>
                                                <th>Habitacion</th>
                                                <th>Inicio y Final</th>
                                                <th>Accion</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Fecha de solicitud</th>
                                                <th>Cliente</th>
                                                <th>Cedula</th>
                                                <th>Correo</th>
                                                <th>Lugar de visita</th>
                                                <th>Celular</th>
                                                <th>Habitacion</th>
                                                <th>Inicio y Final</th>
                                                <th>Accion</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($this->model->reservacion() as $r) : ?>

                                                <tr>
                                                    <td><?php echo $r->creado ?></td>
                                                    <td><?php echo $r->nombres ?></td>
                                                    <td><?php echo $r->tipo_cc . " - " . $r->cc ?></td>
                                                    <td><?php echo $r->correo ?></td>
                                                    <td><?php echo $r->ubicacion ?></td>
                                                    <td><?php echo $r->cel ?></td>
                                                    <td><?php echo $r->num_habitaciones . " Habitaciones " . $r->habitacion ?></td>
                                                    <td><?php echo $r->fecha_inicio . " hasta " . $r->fecha_fin ?></td>
                                                    <td>
                                                        <a onclick="javascript:return confirm('¿Seguro que desea ACERPTAR esta reservacion?');" href="?c=Dashboard&a=reservacion&id_reservacion=<?php echo $r->id_reservacion ?>&nombres=<?php echo $r->nombres ?>&habitacion=<?php echo $r->habitacion ?>&num_habitaciones=<?php echo $r->num_habitaciones ?>&fecha_inicio=<?php echo $r->fecha_inicio ?>&fecha_fin=<?php echo $r->fecha_fin ?>&tipo_cc=<?php echo $r->tipo_cc ?>&cc=<?php echo $r->cc ?>&correo=<?php echo $r->correo ?>&cel=<?php echo $r->cel ?>&ubicacion=<?php echo $r->ubicacion ?>&creado=<?php echo $r->creado ?>&estado=aceptada" class="btn btn-success">
                                                            Reservar
                                                        </a>
                                                        <a onclick="javascript:return confirm('¿Seguro que desea RECHAZAR esta reservacion??');" href="?c=Dashboard&a=reservacion&id_reservacion=<?php echo $r->id_reservacion ?>&nombres=<?php echo $r->nombres ?>&habitacion=<?php echo $r->habitacion ?>&num_habitaciones=<?php echo $r->num_habitaciones ?>&fecha_inicio=<?php echo $r->fecha_inicio ?>&fecha_fin=<?php echo $r->fecha_fin ?>&tipo_cc=<?php echo $r->tipo_cc ?>&cc=<?php echo $r->cc ?>&correo=<?php echo $r->correo ?>&cel=<?php echo $r->cel ?>&ubicacion=<?php echo $r->ubicacion ?>&creado=<?php echo $r->creado ?>&estado=rechazada" class="btn btn-warning">
                                                            Rechazar
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->











        </div><!-- /#right-panel -->