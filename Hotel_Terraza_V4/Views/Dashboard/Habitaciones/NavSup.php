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
                                            <th>habitacion</th>
                                            <th>cantidad actual</th>
                                            <th>detalles</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>habitacion</th>
                                            <th>cantidad actual</th>
                                            <th>detalles</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($this->model->habitacion() as $h) : ?>

                                            <tr>
                                                <td><?php echo $h->id_habitacion ?></td>
                                                <td><?php echo $h->habitacion ?></td>
                                                <td><?php echo $h->cantidad ?></td>
                                                <td><?php echo $h->detalles ?></td>
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