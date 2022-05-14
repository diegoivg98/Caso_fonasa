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
                            FORMULARIO CONSULTAS
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata("error")) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                            </div>
                            <?php endif; ?>
                            <form action=" <?php echo base_url(); ?>pacientes/storeanciano" method="post">

                                <div class="mb-3">
                                    <label for="Pefil">SELECCIONE HOSPITAL:</label>
                                    <select name="id_hospital" id="hospital" class="form-control">
                                        <?php foreach ($hospital as $row) : ?>
                                        <option value=" <?php echo $row->id_hospital; ?> ">
                                            <?php echo $row->nom_hospital; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">CANTIDAD PACIENTES</label>
                                    <input placeholder="Ingrese cantidad pacientes" type="number" id="cant_pacientes"
                                        name="cant_pacientes" class="form-control">
                                    <?php echo form_error("cant_pacientes", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">ESPECIALISTA</label>
                                    <input onkeypress="return sololetras(event)"
                                        placeholder="Ingrese nombre del especialista" type="number"
                                        id="nom_especialista" name="nom_especialista" class="form-control">
                                    <?php echo form_error("nom_especialista", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="Pefil">SELECCIONE TIPO CONSULTA:</label>
                                    <select name="id_tipoconsulta" id="id_tipoconsulta" class="form-control">
                                        <?php foreach ($tipo_consulta as $row) : ?>
                                        <option value=" <?php echo $row->id_tipoconsulta; ?> ">
                                            <?php echo $row->nom_tipo; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <input readonly hidden value="DESOCUPADA" type="text" id="estado" name="estado"
                                        class="form-control">
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