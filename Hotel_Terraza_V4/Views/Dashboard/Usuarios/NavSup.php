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



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Usuario</th>
                                            <th>cedula</th>
                                            <th>correo</th>
                                            <th>celular</th>
                                            <th>rol</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Usuario</th>
                                            <th>cedula</th>
                                            <th>correo</th>
                                            <th>celular</th>
                                            <th>rol</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($this->model->usuario() as $u) : ?>

                                            <tr>
                                                <td><?php echo $u->id_usuario ?></td>
                                                <td><?php echo $u->nombres ?></td>
                                                <td><?php echo $u->cc ?></td>
                                                <td><?php echo $u->correo ?></td>
                                                <td><?php echo $u->cel ?></td>
                                                <td><?php echo $u->permiso ?></td>
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