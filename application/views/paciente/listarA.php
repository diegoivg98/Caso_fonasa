<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
                  <h5 class="mb-0 text-gray-800">Listado Paciente-Adulto
                  <a href=" <?php echo base_url();?>pacientes/addanciano" type="button" class="btn btn-primary">
            <span class="fa fa-plus"></span> Agregar Paciente</a>
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
                  <th scope="col">NOMBRE</th>
                  <th scope="col">EDAD</th>
                  <th scope="col">NHC</th>
                  <th scope="col">HOSPITAL</th>
                  <th scope="col">DIETA</th>
                  <th scope="col">PRIORIDAD</th>
                  <th scope="col">RIESGO</th>
                </tr>
              </thead>
              <tbody>
              <?php if(!empty($query3)):?>
                  <?php foreach($query3 as $row):?>
                    <tr>
                      <td><?php echo $row->nombre;?></td>
                      <td><?php echo $row->edad;?></td>
                      <td><?php echo $row->num_historiaclinica;?></td>
                      <td><?php echo $row->nom_hospital;?></td>
                      <td><?php echo $row->tiene_dieta;?></td>
                      <td><?php echo $row->prioridad;?></td>
                      <td><?php echo $row->riesgo;?></td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.content-wrapper -->