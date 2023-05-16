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
    <tbody>
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
        <?php } 
        
    }elseif(isset($_GET['guardar_temp_apoderados'])){ 

    $datos = $_POST;  
    $datos['a_temp_id_session'] = session_id();

    $id_general = $cCclienteController->agregar_temp_apoderados($datos);
    $obtener_registros_temp = $cCclienteController->obtener_pj_apoderados_temp(session_id()); 

    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="pja_nombre_completo[]" class="form-control"> </td>
        <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="pja_cargo[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="pja_nacionalidad[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_id']; ?>" name="pja_id[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_correo']; ?>" name="pja_correo[]" class="form-control"></td>
        <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="pja_direccion[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_a_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="pja_telefono[]" value="<?php echo $value['a_temp_telefono']; ?>">
    </tr>

<?php }

 }elseif(isset($_GET['eliminar_a_temp'])){ 
    
    $id = $_GET['id'];
    $obtener_registros_temp = $cCclienteController->obtener_pj_apoderados_temp_id($id); ?>

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
    <tbody>

    <?php foreach ($obtener_registros_temp as $key => $value) { ?>
        <tr>
            <td><input value="<?php echo $value['a_temp_nombre_completo']; ?>" name="pja_nombre_completo[]" class="form-control"> </td>
            <td><input value="<?php echo $value['a_temp_cargo']; ?>" name="pja_cargo[]" class="form-control"></td>
            <td><input value="<?php echo $value['a_temp_nacionalidad']; ?>" name="pja_nacionalidad[]" class="form-control"></td>
            <td><input value="<?php echo $value['a_temp_id']; ?>" name="pja_id[]" class="form-control"></td>
            <td><input value="<?php echo $value['a_temp_correo']; ?>" name="pja_correo[]" class="form-control"></td>
            <td><input value="<?php echo $value['a_temp_direccion']; ?>" name="pja_direccion[]" class="form-control"></td>
            <td><a href="#" onclick="eliminar_a_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
            <input type="hidden" name="pja_telefono[]" value="<?php echo $value['a_temp_telefono']; ?>">
        </tr>
    <?php } ?>
    </tbody> 
</table>

 <?php }elseif(isset($_GET['eliminar_a_temp_final'])){ 
            
            $id = $_GET['id'];
            $cCclienteController->eliminar_apoderados_temp_id($id);
            $alerta = 3; 
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

    <?php }  

    }elseif(isset($_GET['guardar_temp_generales_bf'])){

        $datos = $_POST;  
        $datos['gbf_temp_id_session'] = session_id();
    
        $id_general = $cCclienteController->agregar_temp_general_bf($datos);
        $obtener_registros_temp = $cCclienteController->obtener_pj_generales_bf_temp(session_id()); 
    
        foreach ($obtener_registros_temp as $key => $value) { ?>
    
        <tr>
            <td><input value="<?php echo $value['gbf_temp_nombre_completo']; ?>" name="gbf_nombre_completo[]" class="form-control"> </td>
            <td><input value="<?php echo $value['gbf_temp_participacion']; ?>" name="gbf_participacion[]" class="form-control"></td>
            <td><input value="<?php echo $value['gbf_temp_nacionalidad']; ?>" name="gbf_nacionalidad[]" class="form-control"></td>
            <td><input value="<?php echo $value['gbf_temp_profesion']; ?>" name="gbf_profesion[]" class="form-control"></td>
            <td><input value="<?php echo $value['gbf_temp_correo_electronico']; ?>" name="gbf_correo_electronico[]" class="form-control"></td>
            <td><a href="#" onclick="eliminar_generales_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
            <input type="hidden" name="gbf_telefono[]" value="<?php echo $value['gbf_temp_telefono']; ?>">

            <input type="hidden" name="gbf_genero[]" value="<?php echo $value['gbf_temp_genero']; ?>">
            <input type="hidden" name="gbf_identificacion[]" value="<?php echo $value['gbf_temp_identificacion']; ?>">
            <input type="hidden" name="gbf_pais_nacimiento[]" value="<?php echo $value['gbf_temp_pais_nacimiento']; ?>">
            <input type="hidden" name="gbf_fecha_nacimiento[]" value="<?php echo $value['gbf_temp_fecha_nacimiento']; ?>">
            <input type="hidden" name="gbf_pais_residencia[]" value="<?php echo $value['gbf_temp_pais_residencia']; ?>">
            <input type="hidden" name="gbf_pais_residencia_fiscal[]" value="<?php echo $value['gbf_temp_pais_residencia_fiscal']; ?>">
            <input type="hidden" name="gbf_lugar_trabajo[]" value="<?php echo $value['gbf_temp_lugar_trabajo']; ?>">
            <input type="hidden" name="gbf_domicilio_personal[]" value="<?php echo $value['gbf_temp_domicilio_personal']; ?>">
        </tr>
    
    <?php }

    }elseif (isset($_GET['eliminar_generales_bf'])) {
        
        $id = $_GET['id'];
        $obtener_registros_temp = $cCclienteController->obtener_pj_generales_bf_temp_id($id);
        
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Participación</th>
                    <th>Nacionalidad</th>ó
                    <th>Profesión</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($obtener_registros_temp as $key => $value) { ?>
                <tr>
                    <td><input value="<?php echo $value['gbf_temp_nombre_completo']; ?>" name="gbf_nombre_completo[]" class="form-control"> </td>
                    <td><input value="<?php echo $value['gbf_temp_participacion']; ?>" name="gbf_participacion[]" class="form-control"></td>
                    <td><input value="<?php echo $value['gbf_temp_nacionalidad']; ?>" name="gbf_nacionalidad[]" class="form-control"></td>
                    <td><input value="<?php echo $value['gbf_temp_profesion']; ?>" name="gbf_profesion[]" class="form-control"></td>
                    <td><input value="<?php echo $value['gbf_temp_correo_electronico']; ?>" name="gbf_correo_electronico[]" class="form-control"></td>
                    <td><a href="#" onclick="eliminar_generales_bf_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php } ?>
            </tbody> 
        </table>
        
 <?php }elseif (isset($_GET['eliminar_generales_bf_final'])) {

    $id = $_GET['id'];
    $cCclienteController->eliminar_generales_bf_temp_final($id);
    $alerta = 3;
    $obtener_registros_temp = $cCclienteController->obtener_pj_generales_bf_temp(session_id()); 
    
    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['gbf_temp_nombre_completo']; ?>" name="gbf_nombre_completo[]" class="form-control"> </td>
        <td><input value="<?php echo $value['gbf_temp_participacion']; ?>" name="gbf_participacion[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbf_temp_nacionalidad']; ?>" name="gbf_nacionalidad[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbf_temp_profesion']; ?>" name="gbf_profesion[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbf_temp_correo_electronico']; ?>" name="gbf_correo_electronico[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_generales_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="gbf_telefono[]" value="<?php echo $value['gbf_temp_telefono']; ?>">

        <input type="hidden" name="gbf_genero[]" value="<?php echo $value['gbf_temp_genero']; ?>">
        <input type="hidden" name="gbf_identificacion[]" value="<?php echo $value['gbf_temp_identificacion']; ?>">
        <input type="hidden" name="gbf_pais_nacimiento[]" value="<?php echo $value['gbf_temp_pais_nacimiento']; ?>">
        <input type="hidden" name="gbf_fecha_nacimiento[]" value="<?php echo $value['gbf_temp_fecha_nacimiento']; ?>">
        <input type="hidden" name="gbf_pais_residencia[]" value="<?php echo $value['gbf_temp_pais_residencia']; ?>">
        <input type="hidden" name="gbf_pais_residencia_fiscal[]" value="<?php echo $value['gbf_temp_pais_residencia_fiscal']; ?>">
        <input type="hidden" name="gbf_lugar_trabajo[]" value="<?php echo $value['gbf_temp_lugar_trabajo']; ?>">
        <input type="hidden" name="gbf_domicilio_personal[]" value="<?php echo $value['gbf_temp_domicilio_personal']; ?>">
    </tr>

<?php }

 }elseif (isset($_GET['guardar_temp_bf_persona_juridica'])) {

    $datos = $_POST;  
    $datos['gbfpj_temp_id_session'] = session_id();

    $id_general = $cCclienteController->agregar_temp_general_bf_pj($datos);
    $obtener_registros_temp = $cCclienteController->obtener_pj_beneficiarios_finales(session_id()); 

    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['gbfpj_temp_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
        <td><input value="<?php echo $value['gbfpj_temp_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbfpj_temp_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbfpj_temp_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
        <td><input value="<?php echo $value['gbfpj_temp_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_pj_beneficiario_generales_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="gbfpj_porcentaje_participacion[]" value="<?php echo $value['gbfpj_temp_porcentaje_participacion']; ?>">
        <input type="hidden" name="gbfpj_sector_economico[]" value="<?php echo $value['gbfpj_temp_sector_economico']; ?>">
        <input type="hidden" name="gbfpj_direccion[]" value="<?php echo $value['gbfpj_temp_direccion']; ?>">
        <input type="hidden" name="gbfpj_tipo_pj[]" value="<?php echo $value['gbfpj_temp_tipo_pj']; ?>">
    </tr>

<?php }
    
 }elseif (isset($_GET['eliminar_generales_bf_pj'])) { 
 
    $id = $_GET['id'];
    $obtener_registros_temp = $cCclienteController->obtener_pj_beneficiarios_finales_id($id); ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre de accionista</th>
                <th>fecha de contitucion</th>
                <th>Pais de constitucion</th>ó
                <th>telefono</th>
                <th>ruc</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($obtener_registros_temp as $key => $value) { ?>
            <tr>
                <td><input value="<?php echo $value['gbfpj_temp_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
                <td><input value="<?php echo $value['gbfpj_temp_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
                <td><input value="<?php echo $value['gbfpj_temp_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
                <td><input value="<?php echo $value['gbfpj_temp_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
                <td><input value="<?php echo $value['gbfpj_temp_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
                <td><a href="#" onclick="eliminar_pj_beneficiario_generales_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody> 
    </table>

 <?php }elseif (isset($_GET['eliminar_generales_bf_pj_final'])) {

$id = $_GET['id'];
$cCclienteController->eliminar_generales_bf_pj_temp_final($id);
$alerta = 3;
$obtener_registros_temp = $cCclienteController->obtener_pj_beneficiarios_finales(session_id()); 

foreach ($obtener_registros_temp as $key => $value) { ?>

<tr>
    <td><input value="<?php echo $value['gbfpj_temp_nombre_completo_accionista']; ?>" name="gbfpj_nombre_completo_accionista[]" class="form-control"> </td>
    <td><input value="<?php echo $value['gbfpj_temp_fecha_constitucion']; ?>" name="gbfpj_fecha_constitucion[]" class="form-control"></td>
    <td><input value="<?php echo $value['gbfpj_temp_pais_constitucion']; ?>" name="gbfpj_pais_constitucion[]" class="form-control"></td>
    <td><input value="<?php echo $value['gbfpj_temp_telefono']; ?>" name="gbfpj_telefono[]" class="form-control"></td>
    <td><input value="<?php echo $value['gbfpj_temp_ruc']; ?>" name="gbfpj_ruc[]" class="form-control"></td>
    <td><a href="#" onclick="eliminar_pj_beneficiario_generales_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
    <input type="hidden" name="gbfpj_porcentaje_participacion[]" value="<?php echo $value['gbfpj_temp_porcentaje_participacion']; ?>">
    <input type="hidden" name="gbfpj_sector_economico[]" value="<?php echo $value['gbfpj_temp_sector_economico']; ?>">
    <input type="hidden" name="gbfpj_direccion[]" value="<?php echo $value['gbfpj_temp_direccion']; ?>">
    <input type="hidden" name="gbfpj_tipo_pj[]" value="<?php echo $value['gbfpj_temp_tipo_pj']; ?>">
</tr>

<?php }
    
 }elseif (isset($_GET['guardar_propietario_temp_bf'])) {

    $datos = $_POST;  
    $datos['pjpbj_temp_id_session'] = session_id();

    $id_general = $cCclienteController->agregar_temp_propietarios_bf($datos);
    $obtener_registros_temp = $cCclienteController->obtener_propietarios_beneficiarios_finales(session_id()); 

    foreach ($obtener_registros_temp as $key => $value) { ?>

    <tr>
        <td><input value="<?php echo $value['pjpbj_temp_nombre_completo']; ?>" name="pjpbj_nombre_completo[]" class="form-control"> </td>
        <td><input value="<?php echo $value['pjpbj_temp_nacionalidad']; ?>" name="pjpbj_nacionalidad[]" class="form-control"></td>
        <td><input value="<?php echo $value['pjpbj_temp_profesion_oficio']; ?>" name="pjpbj_profesion_oficio[]" class="form-control"></td>
        <td><input value="<?php echo $value['pjpbj_temp_correo']; ?>" name="pjpbj_correo[]" class="form-control"></td>
        <td><input value="<?php echo $value['pjpbj_temp_porcentaje_participacion']; ?>" name="pjpbj_porcentaje_participacion[]" class="form-control"></td>
        <td><a href="#" onclick="eliminar_pj_propietario_bf_temp(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
        <input type="hidden" name="pjpbj_genero[]" value="<?php echo $value['pjpbj_temp_genero']; ?>">
        <input type="hidden" name="pjpbj_cedula_pasaporte[]" value="<?php echo $value['pjpbj_temp_cedula_pasaporte']; ?>">
        <input type="hidden" name="pjpbj_pais_nacimineto[]" value="<?php echo $value['pjpbj_temp_pais_nacimiento']; ?>">
        <input type="hidden" name="pjpbj_fecha_nacimiento[]" value="<?php echo $value['pjpbj_temp_fecha_nacimiento']; ?>">
        <input type="hidden" name="pjpbj_pais_residencia[]" value="<?php echo $value['pjpbj_temp_pais_residencia']; ?>">
        <input type="hidden" name="pjpbj_pais_residencia_fiscal[]" value="<?php echo $value['pjpbj_temp_pais_residencia_fiscal']; ?>">
        <input type="hidden" name="pjpbj_lugar_trabajo[]" value="<?php echo $value['pjpbj_temp_lugar_trabajo']; ?>">
        <input type="hidden" name="pjpbj_telefono[]" value="<?php echo $value['pjpbj_temp_telefono']; ?>">
        <input type="hidden" name="pjpbj_domicilio_laboral[]" value="<?php echo $value['pjpbj_temp_domicilio_laboral']; ?>">
        <input type="hidden" name="pjpbj_domicilio_personal[]" value="<?php echo $value['pjpbj_temp_domicilio_personal']; ?>">
        <input type="hidden" name="pjpbj_entidad_participa[]" value="<?php echo $value['pjpbj_temp_entidad_participa']; ?>">
    </tr>

<?php }
    
 }elseif (isset($_GET['eliminar_propietario_bf_pj'])) {

    $id = $_GET['id'];
    $obtener_registros_temp = $cCclienteController->obtener_propietarios_beneficiarios_finales_id($id); ?>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Porcentaje</th>
                <th>Nacionalidad</th>
                <th>Profesión</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($obtener_registros_temp as $key => $value) { ?>
            <tr>
                <td><input value="<?php echo $value['pjpbj_temp_nombre_completo']; ?>" class="form-control"> </td>
                <td><input value="<?php echo $value['pjpbj_temp_porcentaje_participacion']; ?>" class="form-control"></td>
                <td><input value="<?php echo $value['pjpbj_temp_nacionalidad']; ?>" class="form-control"></td>
                <td><input value="<?php echo $value['pjpbj_temp_profesion_oficio']; ?>" class="form-control"></td>
                <td><input value="<?php echo $value['pjpbj_temp_correo']; ?>" class="form-control"></td>
                <td><a href="#" onclick="eliminar_propietario_bf_temp_final(<?php echo $value['id']; ?>)" class="btn btn-danger">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody> 
    </table>
    
 <?php } ?>