<?php  include 'cabeza.php'; ?>

<div class="container">
    <br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-6 text-left ms-md-auto">
                <b>PANAMA CAR RENTAL, S.A.</b></br>
                POLÍTICA CONOZCA A SU CLIENTE</br>
                FORMULARIO DE DEBIDA DILIGENCIA CLIENTE PERSONA NATURAL</br>
                CÓDIGO: PCR-CUMP-FORM01</br>
                VERSIÓN 01-2023
            </div>
            <div class="col-6 ms-md-auto" style="">
                <img src="vistas/img/logonf.png" alt="" width="400">
            </div>
            <!-- inicio del frmulario -->

            <hr>

            <div class="col-6 text-left ms-md-auto">
                <b>Cliente Nuevo</b> <br>
               <input type="button" class="btn btn-primary" value="Cliente nuevo" onclick="mostrar_registro_nuevo();">
            </div>
            <div class="col-6 ms-md-auto" style="">
                <b>Actualizacion de datos</b> 
                <select name="actualizar_cliente " id="" class="form-control">
                    <option value="">Seleccinar</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div id="registro_usuario" style="display:none; margin-top:20px;">
    

    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            DATOS GENERALES
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                
                <!-- PRIMERA OPCION DEL ACORDEON -->

                <div class="container">
                    <div class="row">
                        <h3>Datos Generales</h3>
                        <div class="col-3">
                            <b>Primer Nombre</b>
                            <input type="text" name="primer_nombre" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Segundo Nombre</b>
                            <input type="text" name="segundo_nombre" id="" class="form-control">
                        </div>
                        <div class="col-3">
                            <b>Apellido Paterno</b>
                            <input type="text" name="apellido_paterno" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Apellido Materno</b>
                            <input type="text" name="apellido_materno" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Apellido de casada</b>
                            <input type="text" name="apellido_materno" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <b>Pais de Nacimiento</b>
                            <select name="pais_nacimineto" id="" class="form-control">
                                <option value="">Seleccinar</option>
                            </select>
                        </div>
                        <div class="col-3" style="">
                            <b>Fecha de nacimineto</b>
                            <input type="date" name="fecha_nacimineto" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Nacionalidad</b>
                            <input type="text" name="nacionaidad" id="" class="form-control">
                        </div>
                        <div class="col-3">
                            <b>Genero</b>
                            <select name="genero" id="" class="form-control">
                                <option value="">Seleccinar</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <b>Estado Civil</b>
                            <select name="estado_civil" id="" class="form-control">
                                <option value="">Seleccinar</option>
                                <option value="S">Soltero</option>
                                <option value="C">Casado</option>
                            </select>
                        </div>
                        <div class="col-3" style="">
                            <b>Cedula / N# Pasaporte</b>
                            <input type="text" name="cedula" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Pais de Residencia</b>
                            <select name="pais_residencia" id="" class="form-control">
                                <option value="">Seleccinar</option>
                            </select>
                        </div>
                        <div class="col-3" style="">
                            <b>Direccion residencial</b>
                            <textarea name="direccion_residencial" class="form-control"></textarea>
                        </div>
                        <div class="col-3">
                            <b>Pais de Residencia Fiscal</b>
                            <select name="pais_residencia_fiscal" id="" class="form-control">
                                <option value="">Seleccinar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <b>Correo Electronico</b>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="col-3">
                            <b>Telefono Residencial</b>
                            <input type="text" name="telefono_residencia" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Telefono Movil</b>
                            <input type="text" name="telefono_movil" id="" class="form-control">
                        </div>
                    </div>
                </div>

                 <!-- FIN PRIMERA OPCION DEL ACORDEON -->

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            DATOS OCUPACIONALES
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- SEGUNDA OPCCION -->
            <div class="container">
                <div class="row">
                    <h3>Datos Ocupacionales</h3>
                    <div class="col-3">
                        <b>Profesion</b>
                        <input type="text" name="profesion" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Ocupacion</b>
                        <input type="text" name="ocupacion" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Agente Inmobiliario</b>
                        <input type="text" name="agente_inmobiliario" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Lugar de trabajo</b>
                        <input type="text" name="lugar_tabajo" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Direccion de Trabajo</b>
                        <textarea type="text" name="direccion_trabajo" id="" class="form-control"></textarea>
                    </div>
                    <div class="col-3">
                        <b>Correo Electronico del trabajo</b>
                        <input type="text" name="correo_trabajo" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Telefono del trabajo</b>
                        <input type="text" name="lugar_tabajo" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Nombre del Negocio (Empresario e independientes)</b>
                        <input type="text" name="nombre_negocio" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Aviso de operaciones (Empresario e independientes)</b>
                        <textarea type="text" name="aviso_operaciones" id="" class="form-control"></textarea>
                    </div>
                    <div class="col-3">
                        <b>Licita con el estado</b>
                        <input type="text" name="licita_estado" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>En caso de ser afirmativo, pais o paises con el que licita</b>
                        <input type="text" name="pais_licita" id="" class="form-control">
                    </div>
                </div>
            </div>
            <!-- FIN DE LA SEGUNDA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            DECLARACIÓN DE FUENTE Y ORIGEN DE LOS FONDOS
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- TERCERA OPCION -->
            <!-- FIN DE LATERCERA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            REFERENCIAS
        </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- CUARTA OPCION -->
            <!-- FIN DE LACUARTA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            BENEFICIARIO FINAL
        </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- QUINTA OPCION -->
            <!-- FIN DE QUINTA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            TERCEROS AUTORIZADOS
        </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- SEXTA OPCION -->
            <!-- FIN DE SEXTA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            PERSONAS EXPUESTAS POLÍTICAMENTE (PEPS)
        </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- SECTIMA OPCION -->
            <!-- FIN DE LA SECTIMA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            DECLARACIÓN JURADA
        </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- OCTAVA OPCION -->
            <!-- FIN DE LA OCTAVA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            ADJUNTAR LOS SIGUIENTES DOCUMENTOS E INFORMACIÓN DE SOPORTE
        </button>
        </h2>
        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- NOVENA OPCION -->
            <!-- FIN DE LA NOVENA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.
        </button>
        </h2>
        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- DECIMA OPCION -->
            <!-- FIN DE LA DECIMA OPCION -->
        </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
            AVISO LEGAL
        </button>
        </h2>
        <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <!-- ONCEABA OPCION -->
            <!-- FIN DE LA ONCEABA OPCION -->
        </div>
        </div>
    </div>

    </div>

</div>


<?php include 'pie.php'; ?>