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
                                            <th>Celular</th>
                                            <th>Habitacion</th>
                                            <th>Inicio y Final</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Fecha de solicitud</th>
                                            <th>Cliente</th>
                                            <th>Cedula</th>
                                            <th>Correo</th>
                                            <th>Celular</th>
                                            <th>Habitacion</th>
                                            <th>Inicio y Final</th>
                                            <th>Estado</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($this->model->historico() as $r) : ?>

                                            <tr>
                                                <td><?php echo $r->creado ?></td>
                                                <td><?php echo $r->nombres ?></td>
                                                <td><?php echo $r->tipo_cc . " - " . $r->cc ?></td>
                                                <td><?php echo $r->correo ?></td>
                                                <td><?php echo $r->cel ?></td>
                                                <td><?php echo $r->num_habitaciones . " Habitaciones " . $r->habitacion ?></td>
                                                <td><?php echo $r->fecha_inicio . " hasta " . $r->fecha_fin ?></td>
                                                <?php if ($r->estado == 'aceptada') { ?>
                                                    <td><button class="btn btn-success"><?php echo $r->estado ?></button></td>
                                                <?php } else { ?>
                                                    <td><button class="btn btn-warning"><?php echo $r->estado ?></button></td>
                                                <?php } ?>

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