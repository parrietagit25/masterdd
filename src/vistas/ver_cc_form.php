<?php include 'cabeza.php'; ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PANAMA CAR RENTAL, S.A.</h4>
                        <div class="page-title-right">
                        </div>
                    </div>
                    <!-- tabs principal -->
                    <div class="col-xxl-12">
                        <h5 class="mb-3">VER LOS CLIENTES REGISTRADOS - POLÍTICA CONOZCA A SU CLIENTE</h5>
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Clientes Registrados</h5>
                                            </div>
                                            <div class="card-body">
                                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Codigo Dollar</th>
                                                            <th>Nombre completo</th>
                                                            <th>Vehiculo</th>
                                                            <th>Fecha de registro</th>
                                                            <th>Status</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($todos_registros_cc  as $key => $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value['exp_codigo_dollar']; ?></td>
                                                            <td><?php echo $value['exp_cliente']; ?></td>
                                                            <td><?php echo $value['vehiculo']; ?></td>
                                                            <td><?php echo $value['fg_fecha_log']; ?></td>
                                                            <td><?php echo $value['estado']; ?></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-file-2-fill"></i></button>
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light"><i class=" ri-file-copy-2-line"></i></button>
                                                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light"><i class=" ri-attachment-2"></i></button>
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end row-->
                            
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!--end col-->
        </div>
    </div><!-- end page title -->
</div>
<!-- End Page-content -->
</div><!-- cierra la franja de abajo  -->
<?php include 'layouts/footer.php'; ?>
<?php include 'pie.php'; ?>