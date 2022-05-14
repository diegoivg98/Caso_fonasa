<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="mb-0 text-gray-800">Listado Consultas
                        <a href=" <?php echo base_url(); ?>consultas/addC" type="button" class="btn btn-primary">
                            <span class="fa fa-plus"></span> Agregar Consulta
                        </a>
                    </h5>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <!-- /.card-header -->
                <!-- /.card-body -->
                <br>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="mydatatable">
                            <thead>
                                <tr style="background-color: #f41e3c">
                                    <th scope="col">HOSPITAL</th>
                                    <th scope="col">CANT PACIENTES</th>
                                    <th scope="col">TIPO CONSULTA</th>
                                    <th scope="col">NOM ESPECIALISTA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($query)) : ?>
                                <?php foreach ($query as $row) : ?>
                                <tr>
                                    <td><?php echo $row->nom_hospital; ?></td>
                                    <td><?php echo $row->cant_pacientes; ?></td>
                                    <td><?php echo $row->nom_tipo; ?></td>
                                    <td><?php echo $row->nom_especialista; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
</div>
<!-- /.content-wrapper -->