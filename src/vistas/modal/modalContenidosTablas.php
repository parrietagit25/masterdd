<?php 
session_start();
$modalDocu =1;
require_once("../../controladores/CcclientePjController.php");
$cCclienteController = new CcclienteController();

// JUNTA DIRECTIVA Y DIGNATARIOS. 
if (isset($_GET['guardar_temp_jdd'])) {
    $datos = $_POST;  
    $datos['jd_temp_id_session'] = session_id();

    $id_general = $cCclienteController->agregar_temp($datos);
    $obtener_registros_temp = $cCclienteController->obtener_pj_directiva_dignatarios_temp(session_id()); 

    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['jd_temp_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
        <td><input value="<?php echo $value['jd_temp_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
        <td><input value="<?php echo $value['jd_temp_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
        <td><input value="<?php echo $value['jd_temp_id']; ?>" name="pjdd_id[]" class="form-control"></td>
        <td><input value="<?php echo $value['jd_temp_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
        <td><input value="<?php echo $value['jd_temp_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_dd_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
    </tr>

<?php 
    
    }

}elseif(isset($_GET['eliminar_jdd'])){
    
    $id = $_GET['id'];
    
    ?>

<table class="table">
    <thead>
        <tr>
            <th>Nombre Completo</th>
            <th>Cargo</th>
            <th>Nacionalidad</th>
            <th>I.D.</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody id="contenido_junta_directiva">
        <?php 
        $obtener_registros_temp = $cCclienteController->obtener_pj_directiva_dignatarios_temp_id($id); 

        foreach ($obtener_registros_temp as $key => $value) { ?>
            <tr>
                <td><input value="<?php echo $value['jd_temp_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
                <td><input value="<?php echo $value['jd_temp_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
                <td><input value="<?php echo $value['jd_temp_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
                <td><input value="<?php echo $value['jd_temp_id']; ?>" name="pjdd_id[]" class="form-control"></td>
                <td><input value="<?php echo $value['jd_temp_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
                <td><input value="<?php echo $value['jd_temp_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
                <td><a href="#" onclick="eliminar_dd_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
            </tr>
        <?php } ?>
    </tbody>
</table> 



<?php }elseif(isset($_GET['eliminar_jdd_final'])){ 
        
        $id = $_GET['id'];
        $cCclienteController->eliminar_directiva_dignatarios_temp_id($id);
        $alerta = 3; 

            $obtener_registros_temp_final = $cCclienteController->obtener_pj_directiva_dignatarios_temp_id($id); 

            foreach ($obtener_registros_temp_final as $key => $value) { ?>
                <tr>
                    <td><input value="<?php echo $value['jd_temp_nombre_completo']; ?>" name="pjdd_nombre_completo[]" class="form-control"> </td>
                    <td><input value="<?php echo $value['jd_temp_cargo']; ?>" name="pjdd_cargo[]" class="form-control"></td>
                    <td><input value="<?php echo $value['jd_temp_nacionalidad']; ?>" name="pjdd_nacionalidad[]" class="form-control"></td>
                    <td><input value="<?php echo $value['jd_temp_id']; ?>" name="pjdd_id[]" class="form-control"></td>
                    <td><input value="<?php echo $value['jd_temp_correo']; ?>" name="pjdd_correo[]" class="form-control"></td>
                    <td><input value="<?php echo $value['jd_temp_direccion']; ?>" name="pjdd_direccion[]" class="form-control"></td>
                    <td><a href="#" onclick="eliminar_dd_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                    <input type="hidden" name="pjdd_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
                </tr>
            <?php } 
        
    }elseif(isset($_GET['guardar_temp_apoderados'])){ 

    $datos = $_POST;  
    $datos['a_temp_id_session'] = session_id();

    $id_general = $cCclienteController->agregar_temp_apoderados($datos);
    $obtener_registros_temp = $cCclienteController->obtener_pj_apoderados_temp(session_id()); 

    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="a_nombre_completo[]" class="form-control"> </td>
        <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="a_cargo[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="a_nacionalidad[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_id']; ?>" name="a_id[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_correo']; ?>" name="a_correo[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="a_direccion[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_a_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="a_telefono[]" value="<?php echo $value['a_temp_telefono']; ?>">
    </tr>

<?php 
    
    }
 }elseif(isset($_GET['eliminar_a_temp'])){ 
    
    $id = $_GET['id'];
    
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Cargo</th>
                <th>Nacionalidad</th>
                <th>I.D.</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="contenido_junta_directiva">
            <?php 
            $obtener_registros_temp = $cCclienteController->obtener_pj_apoderados_temp_id($id); 

            foreach ($obtener_registros_temp as $key => $value) { ?>
                <tr>
                    <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="a_nombre_completo[]" class="form-control"> </td>
                    <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="a_cargo[]" class="form-control"></td>
                    <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="a_nacionalidad[]" class="form-control"></td>
                    <td><input value="<?php echo $value['a_temp_id']; ?>" name="a_id[]" class="form-control"></td>
                    <td><input value="<?php echo $value['a_temp_correo']; ?>" name="a_correo[]" class="form-control"></td>
                    <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="a_direccion[]" class="form-control"></td>
                    <td><a href="#" onclick="eliminar_dd_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                    <input type="hidden" name="a_telefono[]" value="<?php echo $value['jd_temp_telefono']; ?>">
                </tr>
            <?php } ?>
        </tbody>
    </table> 


<?php } ?>