<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

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
                    <div class="card">
                        <div class="card-header">
                            FORMULARIO HOSPITAL
                        </div>
                        <div class="card-body">
                            <form action=" <?php echo base_url(); ?>hospitales/store" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">NOMBRE</label>
                                    <input placeholder="Ingrese el nombre del hospital" type="text" id="nom_hospital"
                                        name="nom_hospital" class="form-control">
                                    <?php echo form_error("nom_hospital", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">DIRECCION</label>
                                    <input placeholder="Ingrese la direccion del hospital" type="text" id="direccion"
                                        name="direccion" class="form-control">
                                    <?php echo form_error("direccion", "<span class='help-block'>", "</span>"); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">INGRESAR</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
</div>
<!-- /.content-wrapper -->