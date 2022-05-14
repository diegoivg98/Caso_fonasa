<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h5 class="mb-0 text-gray-800">Modificar Hospital</h5>
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
                    <?php if ($this->session->flashdata("error")) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                    </div>
                    <?php endif; ?>

                    <form action=" <?php echo base_url(); ?>hospitales/update " method="post">

                        <div class="mb-3">
                            <input hidden readonly type="text" id="nom_hospital" name="nom_hospital"
                                class="form-control" value="<?php echo $hospital->id_hospital; ?>">
                            <?php echo form_error("id_hospital", "<span class='help-block'>", "</span>"); ?>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">NOMBRE HOSPITAL</label>
                            <input placeholder="Ingrese el nombre del hospital" type="text" id="nom_hospital"
                                name="nom_hospital" class="form-control" value="<?php echo $hospital->nom_hospital; ?>">
                            <?php echo form_error("nom_hospital", "<span class='help-block'>", "</span>"); ?>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">DIRECCION</label>
                            <input placeholder="Ingrese la direccion del hospital" type="text" id="direccion"
                                name="direccion" class="form-control" value="<?php echo $hospital->direccion; ?>">
                            <?php echo form_error("direccion", "<span class='help-block'>", "</span>"); ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">ACTUALIZAR</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /.card -->
</div>
<!-- /.content-wrapper -->