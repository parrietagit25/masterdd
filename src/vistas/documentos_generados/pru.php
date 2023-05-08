<?php $modalDocu = 1; ?>
<?php require_once("../../controladores/CcClienteController.php"); ?>
<?php $cCclienteController = new CcclienteController(); ?>
<?php $id = $_GET['id']; ?>
<?php $expedienete = $cCclienteController->obtenerExpediente($id); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMARKET</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-black p-3">CONTROL DE ENTREGA DE EXPEDIENTES  DE VENTAS DE AUTOS</div>
            </div>
            <div class="col-sm-6">
                <div class="text-white p-3"><img src="../../assets/images/logonf.png" alt="" width="200"></div>
            </div>
            <div class="col-sm-6">
                <?php foreach ($expedienete as $key => $value) { ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>FECHA</td>
                            <td><?php echo $value['exp_fecha']; ?></td>
                        </tr>
                        <tr>
                            <td>CLIENTE</td>
                            <td><?php echo $value['exp_cliente']; ?></td>
                        </tr>
                        <tr>
                            <td>MARCA</td>
                            <td><?php echo $value['exp_marca']; ?></td>
                        </tr>
                        <tr>
                            <td>MODELO</td>
                            <td><?php echo $value['exp_modelo']; ?></td>
                        </tr>
                        <tr>
                            <td>AÑO</td>
                            <td><?php echo $value['exp_anio']; ?></td>
                        </tr>
                        <tr>
                            <td>PLACA</td>
                            <td><?php echo $value['exp_placa']; ?></td>
                        </tr>
                        <tr>
                            <td>CHASIS</td>
                            <td><?php echo $value['exp_chasis']; ?></td>
                        </tr>
                        <tr>
                            <td>MOTOR</td>
                            <td><?php echo $value['exp_motor']; ?></td>
                        </tr>
                        <tr>
                            <td>COLOR</td>
                            <td><?php echo $value['exp_color']; ?></td>
                        </tr>
                        <tr>
                            <td>CÓDIGO DOLLAR</td>
                            <td><?php echo $value['exp_codigo_dollar']; ?></td>
                        </tr>
                        <tr>
                            <td>N° INTELISIS</td>
                            <td><?php echo $value['exp_n_intelisis']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>