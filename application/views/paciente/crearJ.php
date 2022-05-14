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
                            FORMULARIO Paciente
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata("error")) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                            </div>
                            <?php endif; ?>
                            <form action=" <?php echo base_url(); ?>pacientes/storejoven" method="post">

                                <div class="mb-3">
                                    <label for="Pefil">SELECCIONE HOSPITAL:</label>
                                    <select name="id_hospital" id="id_hospital" class="form-control">
                                        <?php foreach ($hospital as $row) : ?>
                                        <option value=" <?php echo $row->id_hospital; ?> ">
                                            <?php echo $row->nom_hospital; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">NOMBRE</label>
                                    <input onkeypress="return sololetras(event)"
                                        placeholder="Ingrese nombre del paciente" type="text" id="nombre" name="nombre"
                                        class="form-control">
                                    <?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">EDAD (16-40)</label>
                                    <input oninput="calpriori(),calriesgo()" min="16" max="40"
                                        placeholder="Ingrese edad del paciente" type="number" id="edad" name="edad"
                                        class="form-control">
                                    <?php echo form_error("edad", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">NUMERO HISTORIA CLINICA</label>
                                    <input readonly name="num_historiaclinica" id="num_historiaclinica" maxlength="16"
                                        size="16" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="Pefil">¿ES FUMADOR?:</label>
                                    <select onchange="carg(this)" ; onselect="calpriori()" name="fumador" id="fumador"
                                        class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">AÑOS FUMADOR</label>
                                    <input oninput="calpriori(),calriesgo()" min="0" max="99"
                                        placeholder="Ingrese cuantos años lleva fumando" type="number" id="años_fumador"
                                        name="años_fumador" class="form-control">
                                    <?php echo form_error("años_fumador", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="">PRIORIDAD</label>
                                    <input readonly oninput="calpriori(),calriesgo()" type="number" name="prioridad"
                                        id="prioridad" class="form-control">
                                    <?php echo form_error("prioridad", "<span class='help-block'>", "</span>"); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="">RIESGO</label>
                                    <input readonly type="number" name="riesgo" id="riesgo" class="form-control">
                                    <?php echo form_error("riesgo", "<span class='help-block'>", "</span>"); ?>
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

<script>
function randomNumber(len) {
    var randomNumber;
    var n = '';

    for (var count = 0; count < len; count++) {
        randomNumber = Math.floor(Math.random() * 10);
        n += randomNumber.toString();
    }
    return n;
}

document.getElementById("num_historiaclinica").value = randomNumber(9);
</script>

<script type="text/javascript">
function calpriori() {
    try {
        var fum = parseFloat(document.getElementById("fumador").value) || 0,
            afum = parseFloat(document.getElementById("años_fumador").value) || 0;

        if (fum == 1) {
            document.getElementById("prioridad").value = (afum / 4) + 2;
        } else {
            document.getElementById("prioridad").value = 2;
        }
    } catch (error) {}
}
</script>

<script type="text/javascript">
function calriesgo() {
    try {
        var edad = parseInt(document.getElementById("edad").value) || 0,
            priori = parseFloat(document.getElementById("prioridad").value) || 0;
        document.getElementById("riesgo").value = (edad * priori) / 100;
    } catch (error) {}
}
</script>

<script>
var input = document.getElementById('fumador');
var input2 = document.getElementById('años_fumador');

function carg(elemento) {
    d = elemento.value;

    if (d == "0") {
        input2.disabled = true;
        document.getElementById("años_fumador").value = 0;
        document.getElementById("prioridad").value = 2;
    } else {
        input2.disabled = false;
    }
}
</script>