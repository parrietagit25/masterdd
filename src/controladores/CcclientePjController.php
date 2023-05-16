<?php
if (isset($modalDocu) && $modalDocu == 1) {
    require_once("../../modelos/Globales.php");
}else{
    require_once("modelos/Globales.php");
}

class CcclienteController {

  private $tabla_cc_expediente;
  private $tabla_cc_pj_generales;
  private $tabla_cc_pj_declaracion_fuentes;
  private $tabla_cc_pj_representante_legal;
  private $tabla_cc_pj_propietarios;
  private $tabla_cc_declaracion_accionistas;
  private $tabla_cc_pj_beneficiario_final;
  private $tabla_cc_pj_terceros_autorizados;
  private $tabla_cc_pj_referencias;
  private $tabla_cc_pj_adjuntos;
  private $tabla_cc_pj_declaracion_jurada;
  private $tabla_cc_pj_uso_interno;
  private $tabla_cc_pj_personas_expuestas;
  private $tabla_cc_pj_directiva_dignatarios_temp;
  private $tabla_cc_pj_directiva_dignatarios;
  private $tabla_cc_pj_apoderados_temp;
  private $tabla_cc_pj_apoderados;
  private $tabla_cc_pj_general_bf_temp;
  
  private $tabla_cc_beneficiario;
  private $tabla_paises;
  private $tabla_codigo;

    public function __construct() {
        $this->ModelGlobal = new ModelGlobal();
        $this->tabla_cc_expediente = "cc_pj_expediente";
        $this->tabla_cc_pj_generales = "cc_pj_generales";
        $this->tabla_cc_pj_declaracion_fuentes = "cc_pj_declaracion_fuentes";
        $this->tabla_cc_pj_representante_legal = "cc_pj_representante_legal";
        $this->tabla_cc_pj_propietarios = "cc_pj_propietarios";
        $this->tabla_cc_declaracion_accionistas = "cc_pj_declaracion_accionista";
        $this->tabla_cc_pj_beneficiario_final = "cc_pj_beneficiario_final";
        $this->tabla_cc_pj_terceros_autorizados = "cc_pj_terceros_autorizados";
        $this->tabla_cc_pj_referencias = "cc_pj_referencias";
        $this->tabla_cc_pj_declaracion_jurada = "cc_pj_declaracion_jurada";
        $this->tabla_cc_pj_adjuntos = "cc_pj_adjuntos";
        $this->tabla_cc_pj_uso_interno = "cc_pj_uso_interno";
        $this->tabla_cc_pj_personas_expuestas = "cc_pj_perosnas_expuestas";
        $this->tabla_cc_pj_directiva_dignatarios_temp = "cc_pj_directiva_dignatarios_temp";
        $this->tabla_cc_pj_directiva_dignatarios = "cc_pj_directiva_dignatarios";
        $this->tabla_cc_pj_apoderados_temp = "cc_pj_apoderados_temp";
        $this->tabla_cc_pj_apoderados = "cc_pj_apoderados";
        $this->tabla_cc_pj_general_bf_temp = "cc_pj_generales_bf_temp";

        $this->tabla_paises = "paises";
        $this->tabla_codigo = "codigos";
    }

    public function obtener_pais(){
        return $this->ModelGlobal->obtenerTodos($this->tabla_paises);
    }

    public function obtener_genero(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in('01GEN', '02GEN', '03GEN')");    
    }

    public function obtener_estado_civil(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in('04ECL', '05ECL')");    
    }

    public function obtener_profesion(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%PRO'");
    }

    public function obtener_actividad_principal(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in ('77FUE', '78FUE', '79FUE', '80FUE', '81FUE')");
    }
    
    public function obtener_actividad_otras(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "in ('82FUE', '83FUE', '84FUE', '85FUE', '86FUE', '87FUE', '88FUE', '89FUE')");
    }

    public function obtener_forma_pago(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%FDP'");
    }

    public function obtener_limite(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%LIM'");
    }

    public function obtener_motodo_pago(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%MDP'");
    }

    public function obtener_profesion_personas_expuestas(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%PPEP'");
    }

    public function obtener_tipo_persona(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%TDPJ'");
    }

    public function obtener_sector_economico(){
        return $this->ModelGlobal->obtener_codigo($this->tabla_codigo, "like '%GBPJ'");
    }

    public function agregar_cc_cliente($datos){

        // principal

        $datos["stat"]= 1;
        $datos["id_user"] = $_SESSION["usuario"][0]["id"];
        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjgn_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_pj_generales, $datos_generales);
        
        $datos["id_general"]= $ultimo_id;

        // expediente - portada

        $datos_expediente = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjexp_') === 0) {
                $datos_expediente[$key] = $value; 
            }
        }

        $datos_expediente["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_expediente, $datos_expediente);

        // declaracion de fuentes

        $datos_declaracion = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjdf_') === 0) {
                $datos_declaracion[$key] = $value; 
            }
        }

        $datos_declaracion["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_declaracion_fuentes, $datos_declaracion);

        // Representante legal

        $datos_representante_legal = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjrl_') === 0) {
                $datos_representante_legal[$key] = $value; 
            }
        }

        $datos_representante_legal["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_representante_legal, $datos_representante_legal);  

        // JUNTA DIRECTIVA Y DIGNATARIOS.

        $datos_cc_pj_junta_directiva_dignatarios = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjdd_') === 0) {
                $datos_cc_pj_junta_directiva_dignatarios[$key] = $value; 
            }
        }

        $finalArrayda = [];

        foreach($datos_cc_pj_junta_directiva_dignatarios as $key => $subArray) {
            foreach($subArray as $index => $value) {
                $finalArrayda[$index][$key] = $value;
            }
        }

        foreach ($finalArrayda as $key => $value) {
            $finalArrayda[$key]["id_general"] = $ultimo_id;
            $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_directiva_dignatarios, $finalArrayda[$key]);
        }

        $id_sessiom = session_id();
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_pj_directiva_dignatarios_temp, " jd_temp_id_session = '".$id_sessiom."' ");

        // Propietarios

        $datos_cc_pj_propietarios = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjpr_') === 0) {
                $datos_cc_pj_propietarios[$key] = $value; 
            }
        }

        $datos_cc_pj_propietarios["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_propietarios, $datos_cc_pj_propietarios);

        // Declaracion de accionista

        $datos_cc_pj_declaracion_accionista = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjda_') === 0) {
                $datos_cc_pj_declaracion_accionista[$key] = $value; 
            }
        }

        $finalArrayda = [];

        foreach($datos_cc_pj_declaracion_accionista as $key => $subArray) {
            foreach($subArray as $index => $value) {
                $finalArrayda[$index][$key] = $value;
            }
        }

        foreach ($finalArrayda as $key => $value) {
            $finalArrayda[$key]["id_general"] = $ultimo_id;
            $this->ModelGlobal->sub_agregar($this->tabla_cc_declaracion_accionistas, $finalArrayda[$key]);
        }

        // Beneficiario final

        $datos_beneficiario_final = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjbf_') === 0) {
                $datos_beneficiario_final[$key] = $value; 
            }
        }

        $datos_beneficiario_final["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_beneficiario_final, $datos_beneficiario_final);

        // Terceros autorizados

        $datos_pj_terceros_autorizados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjtu_') === 0) {
                $datos_pj_terceros_autorizados[$key] = $value; 
            }
        }

        $datos_pj_terceros_autorizados["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_terceros_autorizados, $datos_pj_terceros_autorizados);
        
        // Personas expuestas politicamente

        $datos_personas_expuestas = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjpx_') === 0) {
                $datos_personas_expuestas[$key] = $value; 
            }
        }

        $datos_personas_expuestas["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_personas_expuestas, $datos_personas_expuestas);
        
        // referencias 

        $datos_referencias = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjrf_') === 0) {
                $datos_referencias[$key] = $value; 
            }
        }

        $finalArray = [];

        foreach($datos_referencias as $key => $subArray) {
            foreach($subArray as $index => $value) {
                $finalArray[$index][$key] = $value;
            }
        }
        foreach ($finalArray as $key => $value) {
            $finalArray[$key]["id_general"] = $ultimo_id;
            $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_referencias, $finalArray[$key]);
        }

        // Apoderados 

        $datos_apoderados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pja_') === 0) {
                $datos_apoderados[$key] = $value; 
            }
        }

        $finalArray = [];

        foreach($datos_apoderados as $key => $subArray) {
            foreach($subArray as $index => $value) {
                $finalArray[$index][$key] = $value;
            }
        }
        foreach ($finalArray as $key => $value) {
            $finalArray[$key]["id_general"] = $ultimo_id;
            $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_apoderados, $finalArray[$key]);
        }

        // Declaracion jurada

        $datos_cc_declaracion_jurada = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjdj_') === 0) {
                $datos_cc_declaracion_jurada[$key] = $value; 
            }
        }

        $datos_cc_declaracion_jurada["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_declaracion_jurada, $datos_cc_declaracion_jurada);

        // Adjuntos

        $datos_cc_adjuntos = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjad_') === 0) {
                $datos_cc_adjuntos[$key] = $value; 
            }
        }

        $datos_cc_adjuntos["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_adjuntos, $datos_cc_adjuntos);

        // uso interno

        $datos_cc_uso_interno = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'pjui_') === 0) {
                $datos_cc_uso_interno[$key] = $value; 
            }
        }

        $datos_cc_uso_interno["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_pj_uso_interno, $datos_cc_uso_interno);

        return $ultimo_id;

    }

    public function agregar_temp($datos){

        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'jd_temp') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_pj_directiva_dignatarios_temp, $datos_generales);

    }

    public function agregar_temp_apoderados($datos){
        
        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'a_temp_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_pj_apoderados_temp, $datos_generales);

    }

    public function agregar_temp_general_bf($datos){
        
        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'gbf_temp_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_pj_general_bf_temp, $datos_generales);

    }

    public function obtener_pj_directiva_dignatarios_temp($id_session){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_pj_directiva_dignatarios_temp, " jd_temp_id_session = '".$id_session."' ");
    }

    public function obtener_pj_directiva_dignatarios_temp_id($id){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_pj_directiva_dignatarios_temp, " id = $id ");
    }

    public function eliminar_directiva_dignatarios_temp_id($id){
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_pj_directiva_dignatarios_temp, "id = $id");
    }

    public function obtener_pj_apoderados_temp($id_session){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_pj_apoderados_temp, " a_temp_id_session = '".$id_session."' ");
    }
    
    public function obtener_pj_apoderados_temp_id($id){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_pj_apoderados_temp, " id = $id ");
    }

    public function eliminar_apoderados_temp_id($id){
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_pj_apoderados_temp, "id = $id");
    }

    public function obtener_pj_generales_bf_temp($id_session){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_pj_general_bf_temp, " gbf_temp_id_session = '".$id_session."' ");
    }

    public function subir_archivos($datos, $id_general){

        if (!empty($_FILES["fdc_firma"]) && $_FILES["fdc_firma"]["error"] == 0) {
            if (isset($_FILES["fdc_firma"])) {

                $ruta = "vistas/adjuntos/firma/";
                $file_name = basename($_FILES["fdc_firma"]["name"]);
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                $target_file = $ruta . $new_file_name;
                $uploadOk = 1;
                
                // Verifica si el archivo ya existe
                if (file_exists($target_file)) {
                    echo "El archivo ya existe.";
                    $uploadOk = 0;
                }
        
                // Intenta mover el archivo a la carpeta de destino

                if ($uploadOk == 1 && move_uploaded_file($_FILES["fdc_firma"]["tmp_name"], $target_file)) {

                    $where = "id_general = $id_general";
                    $datos = array('fdc_firma'=>$target_file);
                    $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, $where, $datos);

                } else {
                    echo "Error al subir el archivo.";
                }
            }
        }

        foreach ($_FILES as $key => $file) {
            if (!empty($file) && $file["error"] == 0) {
                $file_name = basename($file["name"]);
                if ($key == 'fdcad_documento_identidad') {

                    $ruta = "vistas/adjuntos/cedula/";

                }elseif($key == 'fdcad_recibo'){

                    $ruta = "vistas/adjuntos/recibo_contrato/";

                }elseif($key == 'fdcad_aviso_operaciones'){

                    $ruta = "vistas/adjuntos/aviso_licencia/";

                }elseif($key == 'fdcad_evidencia_ingresos'){

                    $ruta = "vistas/adjuntos/evidencia_ingreso/";
                }

                if (strpos($key, 'fdcad_') === 0) { 
                    $ruta = $ruta;
                    $file_name = basename($_FILES[$key]["name"]);
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                    $new_file_name = $id_general.'_'.uniqid() . "." . $file_ext;
                    $target_file = $ruta . $new_file_name;
                    $uploadOk = 1;
                    
                    // Verifica si el archivo ya existe
                    if (file_exists($target_file)) {
                        //echo "El archivo ya existe.";
                        $uploadOk = 0;
                    }
            
                    // Intenta mover el archivo a la carpeta de destino
                    if ($uploadOk == 1 && move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
                        $where = "id_general = $id_general";
                        $datos = array($key=>$target_file);
                        $this->ModelGlobal->actualizar($this->tabla_cc_adjuntos, $where, $datos);
                    } else {
                        //echo "Error al subir el archivo.";
                    }
                    
                }
            } else {
                //echo "No se ha seleccionado un archivo o el archivo está vacío.<br>";
            }
        }

    }

    public function obtenerRegistroClientes(){
        return $this->ModelGlobal->obtenerRegistroClientes();
    }

    public function obtenerGenerales($id){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_generales, "id = $id");
    }

    public function obtenerExpediente($id_expediente){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_expediente, "id_general = $id_expediente");
    }

    public function obtenerOcupacionales($id_ocupacional){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_ocupacionales, "id_general = $id_ocupacional");
    }

    public function obtenerDeclaracion($id_declaracion){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_ccc_declaracion, "id_general = $id_declaracion");
    }

    public function obtenerReferencias($id_referencia){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_referencias, "id_general = $id_referencia");
    } 

    public function obntenerBeneficiario($id_beneficiario){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_beneficiario, "id_general = $id_beneficiario");
    } 

    public function obtenerTerceros($id_terceros){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_terceros_autorizados, "id_general = $id_terceros");
    } 

    public function obtenerExpuestas($id_expuestas){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_personas_expuestas, "id_general = $id_expuestas");
    } 

    public function obtenerDeclaracionJurada($id_declaracion){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id_declaracion");
    } 

    public function ontenerDocumentosAdjuntos($id_documentos_adjuntos){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_adjuntos, "id_general = $id_documentos_adjuntos");
    } 

    public function obtenerUsoInterno($id_uso_intterno){
        return $this->ModelGlobal->obtenerRegistrosPorId($this->tabla_cc_uso_interno, "id_general = $id_uso_intterno");
    } 

    public function actualizar_cc_cliente($datos, $id){

        // principal

        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fg_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_generales, "id = $id", $datos_generales);

        // Portada

        $datos_expediente = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'exp_') === 0) {
                $datos_expediente[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_expediente, "id_general = $id", $datos_expediente);

        // ocupacion

        $datos_ocupacionales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fo_') === 0) {
                $datos_ocupacionales[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_ocupacionales, "id_general = $id", $datos_ocupacionales);

        // declaracion 

        $datos_declaracion = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fd_') === 0) {
                $datos_declaracion[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_ccc_declaracion, "id_general = $id", $datos_declaracion);

        // referencias 

        $datos_referencias = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fr_') === 0) {
                $datos_referencias[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_referencias, "id_general = $id", $datos_referencias);

        // Beneficiario final 

        $datos_beneficiario = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fb_') === 0) {
                $datos_beneficiario[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_beneficiario, "id_general = $id", $datos_beneficiario);

        // Terceros autorizados

        $datos_terceros_autorizados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'ft_') === 0) {
                $datos_terceros_autorizados[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_pj_terceros_autorizados, "id_general = $id", $datos_terceros_autorizados);

        // Personas expuestas

        $datos_personas_expuestas = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fp_') === 0) {
                $datos_personas_expuestas[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_personas_expuestas, "id_general = $id", $datos_personas_expuestas);

        // Declaracion jurada

        $datos_cc_declaracion_jurada = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdc_') === 0) {
                $datos_cc_declaracion_jurada[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_declaracion_jurada, "id_general = $id", $datos_cc_declaracion_jurada);

        // uso interno

        $datos_cc_uso_interno = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fui_') === 0) {
                $datos_cc_uso_interno[$key] = $value; 
            }
        }

        $this->ModelGlobal->actualizar($this->tabla_cc_uso_interno, "id_general = $id", $datos_cc_uso_interno);
    
    }

    public function eliminar_cc_cliente($id){

        // principal
        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_generales, "id = $id");

        // Portada

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_expediente, "id_general = $id");

        // ocupacion

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_ocupacionales, "id_general = $id");

        // declaracion 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_ccc_declaracion, "id_general = $id");

        // referencias 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_referencias, "id_general = $id");

        // Beneficiario final 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_beneficiario, "id_general = $id");

        // Terceros autorizados

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_terceros_autorizados, "id_general = $id");

        // Personas expuestas

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_personas_expuestas, "id_general = $id");

        // Declaracion jurada

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id");

        // uso interno

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_uso_interno, "id_general = $id");

        // adjuntos 

        $this->ModelGlobal->eliminarRegistrosPorId($this->tabla_cc_declaracion_jurada, "id_general = $id");

    }

}