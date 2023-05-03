<?php
if (isset($modalDocu) && $modalDocu == 1) {
    require_once("../../modelos/Globales.php");
}else{
    require_once("modelos/Globales.php");
}

class CcclienteController {

  private $tabla_cc_generales;
  private $tabla_cc_ocupacionales;
  private $tabla_ccc_declaracion;
  private $tabla_cc_referencias;
  private $tabla_cc_beneficiario;
  private $tabla_cc_terceros_autorizados;
  private $tabla_cc_personas_expuestas;
  private $tabla_cc_declaracion_jurada;
  private $tabla_cc_adjuntos;
  private $tabla_cc_uso_interno;
  private $tabla_paises;
  private $tabla_codigo;

    public function __construct() {
        $this->ModelGlobal = new ModelGlobal();
        $this->tabla_cc_generales = "cc_generales";
        $this->tabla_cc_ocupacionales = "cc_ocupacionales";
        $this->tabla_ccc_declaracion = "cc_declaracion";
        $this->tabla_cc_referencias = "cc_referencias";
        $this->tabla_cc_beneficiario = "cc_beneficiario";
        $this->tabla_cc_terceros_autorizados = "cc_terceros_autorizados";
        $this->tabla_cc_personas_expuestas = "cc_personas_expuestas";
        $this->tabla_cc_declaracion_jurada = "cc_declaracion_jurada";
        $this->tabla_cc_adjuntos = "cc_adjuntos";
        $this->tabla_cc_uso_interno = "cc_uso_interno";
        $this->tabla_paises = "paises";
        $this->tabla_codigo = "codigos";
    }

    public function obtenerUsuarios() {
        return $this->usuarioModel->obtenerUsuarios();
    }

    public function actualizarUsuario($datos) {
        
        if ($datos['password']== '') {
            unset($datos['password']);
        }else{
            $hashed_password = password_hash($datos['password'], PASSWORD_DEFAULT);
            $datos['password'] = $hashed_password; 
        }

        $id_user = $datos['id_usuario'];
        unset($datos['id_usuario']);

        $this->usuarioModel->actualizar($this->tabla_usuarios, $id_user, $datos);
    }

    public function eliminarUsuario($id) {
        $this->usuarioModel->eliminarUsuario($id);
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

    public function agregar_cc_cliente($datos){

        // principal

        $datos["fg_stat"]= 1;
        $datos["fg_id_user"] = $_SESSION["usuario"][0]["id"];
        $datos_generales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fg_') === 0) {
                $datos_generales[$key] = $value; 
            }
        }

        $ultimo_id = $this->ModelGlobal->agregar($this->tabla_cc_generales, $datos_generales);
        
        $datos["id_general"]= $ultimo_id;

        // ocupacion

        $datos_ocupacionales = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fo_') === 0) {
                $datos_ocupacionales[$key] = $value; 
            }
        }

        $datos_ocupacionales["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_ocupacionales, $datos_ocupacionales);

        // declaracion 

        $datos_declaracion = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fd_') === 0) {
                $datos_declaracion[$key] = $value; 
            }
        }

        $datos_declaracion["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_ccc_declaracion, $datos_declaracion);

        // referencias 

        $datos_referencias = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fr_') === 0) {
                $datos_referencias[$key] = $value; 
            }
        }

        $datos_referencias["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_referencias, $datos_referencias);

        // Beneficiario final 

        $datos_beneficiario = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fb_') === 0) {
                $datos_beneficiario[$key] = $value; 
            }
        }

        $datos_beneficiario["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_beneficiario, $datos_beneficiario);

        // Terceros autorizados

        $datos_terceros_autorizados = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'ft_') === 0) {
                $datos_terceros_autorizados[$key] = $value; 
            }
        }

        $datos_terceros_autorizados["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_terceros_autorizados, $datos_terceros_autorizados);

        // Personas expuestas

        $datos_personas_expuestas = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fp_') === 0) {
                $datos_personas_expuestas[$key] = $value; 
            }
        }

        $datos_personas_expuestas["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_personas_expuestas, $datos_personas_expuestas);

        // Declaracion jurada

        $datos_cc_declaracion_jurada = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdc_') === 0) {
                $datos_cc_declaracion_jurada[$key] = $value; 
            }
        }

        $datos_cc_declaracion_jurada["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_declaracion_jurada, $datos_cc_declaracion_jurada);

        // Adjuntos

        $datos_cc_adjuntos = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fdcad_') === 0) {
                $datos_cc_adjuntos[$key] = $value; 
            }
        }

        $datos_cc_adjuntos["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_adjuntos, $datos_cc_adjuntos);

        // uso interno

        $datos_cc_uso_interno = [];
        foreach ($datos as $key => $value) {
            if (strpos($key, 'fui_') === 0) {
                $datos_cc_uso_interno[$key] = $value; 
            }
        }

        $datos_cc_uso_interno["id_general"] = $ultimo_id;

        $this->ModelGlobal->sub_agregar($this->tabla_cc_uso_interno, $datos_cc_uso_interno);

    }

}