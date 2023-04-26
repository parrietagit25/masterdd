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
            <div class="col-6 ms-md-auto">
                <img src="vistas/img/logonf.png" alt="" width="400" style="float:right">
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
            <div class="container">
                <div class="row">
                    <h3>DECLARACIÓN DE FUENTE Y ORIGEN DE LOS FONDOS</h3>
                    <p>DECLARO QUE LOS FONDOS PARA EFECTUAR LA TRANSACCIÓN DE COMPRAVENTA PROVIENEN DE FUENTES LÍCITAS Y PROPIAS DETALLADAS A CONTINUACIÓN Y 
                        QUE NO REALIZARÉ O ADMITIRÉ QUE SE EFECTÚEN PAGOS A NOMBRE MÍO O DE LA PERSONA QUE REPRESENTO CON FONDOS PROVENIENTES DE ACTIVIDADES 
                        ILÍCITAS, NI EFECTUARÉ TRANSACCIONES DESTINADAS A TALES ACTIVIDADES O A FAVOR DE PERSONAS RELACIONADAS A LAS MISMAS</p>
                    <div class="col-3">
                        <b>Actividad Principal</b>
                        <select name="actividad_principal" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">Asalariado</option>
                            <option value="2">Jubilado</option>
                            <option value="3">Independiente Formal</option>
                            <option value="4">Empresario</option>
                            <option value="5">Emprendedor</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Otras Fuentes</b>
                        <select name="otras_fuentes" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">Comisiones</option>
                            <option value="2">Ganancias</option>
                            <option value="3">Herencia</option>
                            <option value="4">Ingresos por actividad económica</option>
                            <option value="5">Negocio propio</option>
                            <option value="3">Préstamo personal</option>
                            <option value="4">Retirado</option>
                            <option value="5">Salarios</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Limite de compra</b>
                        <select name="limite_compra" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">10k - 25k</option>
                            <option value="2">25k - 50k</option>
                            <option value="3">50k - 100k</option>
                            <option value="4">100k - 150k</option>
                            <option value="5">150k - 250k</option>
                            <option value="3">250k - 1M</option>
                            <option value="4">1M - 10M</option>
                            <option value="5"> > 10M </option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Forma de Pago</b>
                        <select name="forma_pago" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">Contado</option>
                            <option value="2">Financiado</option>
                            <option value="3">Financiado al 100%</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Metodo de Pago 1</b>
                        <select name="forma_pago" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">ACH</option>
                            <option value="2">Deposito Bancario</option>
                            <option value="3">Yappi</option>
                            <option value="1">Cheque</option>
                            <option value="2">Tarjeta de debito</option>
                            <option value="3">Tarjeta de Credito</option>
                            <option value="3">Financiado al 100%</option>
                            <option value="3">Carta promesa de pago</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Metodo de Pago 2</b>
                        <select name="forma_pago" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="1">ACH</option>
                            <option value="2">Deposito Bancario</option>
                            <option value="3">Yappi</option>
                            <option value="1">Cheque</option>
                            <option value="2">Tarjeta de debito</option>
                            <option value="3">Tarjeta de Credito</option>
                            <option value="3">Financiado al 100%</option>
                            <option value="3">Carta promesa de pago</option>
                        </select>
                    </div>
                  
                </div>
            </div>
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

            <div class="container">
                <div class="row">
                    <h3>REFERENCIAS</h3>
                    <h5>Referencia Bancarias</h5>
                    <div class="col-3">
                        <b>Nombre o razon social</b>
                        <input type="text" name="razon_social" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Actividad</b>
                        <input type="text" name="actividad" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Relacion con cliente</b>
                        <input type="text" name="relacion_cliente" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Telefono</b>
                        <input type="text" name="telefono" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Correo electronico</b>
                        <input type="text" name="correo_electronico" id="" class="form-control">
                    </div>
                    <h5>Referencias personales o comerciales(clientes o proveedores)</h5>
                    <div class="col-3">
                        <b>Nombre o razon social</b>
                        <input type="text" name="razon_social" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Actividad</b>
                        <input type="text" name="actividad" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Relacion con cliente</b>
                        <input type="text" name="relacion_cliente" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Telefono</b>
                        <input type="text" name="telefono" id="" class="form-control">
                    </div>
                    <div class="col-3" style="">
                        <b>Correo electronico</b>
                        <input type="text" name="correo_electronico" id="" class="form-control">
                    </div>
                </div>
            </div>
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
            <div class="container">
                <div class="row">
                    <h3>BENEFICIARIO FINAL</h3>
                    
                    <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, 
                        UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS 
                        FINALES DE LAS PERSONAS JURÍDICAS</p>
                    <div class="col-3">
                        <b>¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</b>
                        <b>Cliente</b>
                        <input type="radio" name="cliete_tercero" id="" value="">
                        <b>Tercero</b>
                        <input type="radio" name="cliete_tercero" id="" value="">
                    </div>
                    <div class="col-3">
                        <b>Relacion con el cliente</b><br>
                        <b>Familiar</b>
                        <input type="radio" name="relacion_familiar_tercero" id="" value="">
                        <b>Tercero</b>
                        <input type="radio" name="relacion_familiar_tercero" id="" value="">
                    </div>
                    <div class="col-3">
                        <b>Detalle relacion</b>
                        <input type="text" name="relacion_detalle" id="" class="form-control">
                    </div>
                    
                    <div class="container">
                    <div class="row">
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
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <b>Profesion</b>
                            <input type="text" name="profesion" id="" class="form-control">
                        </div>
                        <div class="col-3">
                            <b>Ocupacion</b>
                            <input type="text" name="ocupacion" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Lugar de trabajo</b>
                            <input type="text" name="lugrar_trabajo" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Direccion de trabajo</b>
                            <textarea name="direccion_trabajo" id="" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                </div>
            </div>
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

            <div class="container">
                <div class="row">
                    <h3>BENEFICIARIO FINAL</h3>
                    
                    <p>EN ESTE ÚLTIMO CASO, COMPLETE CON LOS DATOS DEL BENEFICIARIO FINAL DE LA TRANSACCIÓN. DE SER PERSONA JURÍDICA, 
                        UTILIZAR EL FORMULARIO DE DEBIDA DILIGENCIA PERSONA JURÍDICA PCR-CUMP-FORM02 Y LA DECLARACIÓN JURADA DE BENEFICIARIOS 
                        FINALES DE LAS PERSONAS JURÍDICAS</p>
                    <div class="col-3">
                        <b>¿EL AUTO SERÁ TRASPASADO A NOMBRE DEL CLIENTE O DE UN TERCERO?</b>
                        <b>Cliente</b>
                        <input type="radio" name="cliete_tercero" id="" value="">
                        <b>Tercero</b>
                        <input type="radio" name="cliete_tercero" id="" value="">
                    </div>
                    <div class="col-3">
                        <b>Relacion con el cliente</b><br>
                        <b>Familiar</b>
                        <input type="radio" name="relacion_familiar_tercero" id="" value="">
                        <b>Tercero</b>
                        <input type="radio" name="relacion_familiar_tercero" id="" value="">
                    </div>
                    <div class="col-3">
                        <b>Detalle relacion</b>
                        <input type="text" name="relacion_detalle" id="" class="form-control">
                    </div>
                    
                <div class="container">
                    <div class="row">
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
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <b>Profesion</b>
                            <input type="text" name="profesion" id="" class="form-control">
                        </div>
                        <div class="col-3">
                            <b>Ocupacion</b>
                            <input type="text" name="ocupacion" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Lugar de trabajo</b>
                            <input type="text" name="lugrar_trabajo" id="" class="form-control">
                        </div>
                        <div class="col-3" style="">
                            <b>Direccion de trabajo</b>
                            <textarea name="direccion_trabajo" id="" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            
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
            <h3> PERSONAS EXPUESTAS POLÍTICAMENTE (PEPS)</h3>
            <p>
            LAS PERSONAS EXPUESTAS POLÍTICAMENTE SON LAS PERSONAS NACIONALES O EXTRANJERAS QUE CUMPLEN FUNCIONES PÚBLICAS DESTACADAS DE ALTO NIVEL O CON MANDO Y 
            JURISDICCIÓN EN UN ESTADO, COMO (PERO SIN LIMITARSE) LOS JEFES DE ESTADO O DE UN GOBIERNO, LOS POLÍTICOS DE ALTO PERFIL, LOS FUNCIONARIOS GUBERNAMENTALES, 
            JUDICIALES O MILITARES DE ALTA JERARQUÍA, LOS EJECUTIVOS DE EMPRESAS O CORPORACIONES ESTATALES LOS FUNCIONARIOS PÚBLICOS QUE OCUPEN POSICIONES DE ELECCIÓN 
            POPULAR, ENTRE OTROS QUE EJERZAN LA TOMA DE DECISIONES EN LAS ENTIDADES PÚBLICAS; PERSONAS QUE CUMPLEN  O A QUIÉNES SE LES HA CONFIADO FUNCIONES IMPORTANTES 
            POR UNA ORGANIZACIÓN INSTITUCIONAL, COMO LOS MIEMBROS DE LA ALTA GERENCIA, ES DECIR DIRECTORES, SUBDIRECTORES Y MIEMBROS DE LA JUNTA DIRECTIVA O FUNCIONES EQUIVALENTES.
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <b>¿ES EL CLIENTE, EL BENEFICIARIO FINAL O EL TERCERO AUTORIZADO UN PEP, FAMILIAR CERCANO O ESTRECHO COLABORADOR DE UN PEP?</b><br>
                        <b>SI</b>
                        <input type="radio" name="beneficiario" id="" value="">
                        <b>NO</b>
                        <input type="radio" name="beneficiario" id="" value="">
                    </div>
                    <div class="col-3">
                        <b>Nombre Completo</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Cargo Actual</b>
                        <select name="cargo_actual" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="S">Soltero</option>
                            <option value="C">Casado</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Otro</b>
                        <select name="otro" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="S">Soltero</option>
                            <option value="C">Casado</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Fecha cargo actual</b>
                        <input type="date" name="fecha" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Cargo Anterior</b>
                        <select name="otro" id="" class="form-control">
                            <option value="">Seleccinar</option>
                            <option value="S">Soltero</option>
                            <option value="C">Casado</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <b>Fecha cargo anterior</b>
                        <input type="date" name="fecha_anterior" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Comentarios</b>
                        <textarea name="comentario" id="" class="form-control"></textarea>
                    </div>
                </div>
            </div>
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
            <h3> DECLARACIÓN JURADA</h3>
            <p>
            DECLARO QUE LA INFORMACIÓN ANTERIOR ES VERAZ Y HA SIDO PROPORCIONADA EN CUMPLIMIENTO DE LO ESTABLECIDO POR LAS LEYES Y REGULACIONES RELACIONADAS CON 
            LA PREVENCIÓN DEL BLANQUEO DE CAPITALES, FINANCIAMIENTO DEL TERRORISMO Y FINANCIAMIENTO DE LA PROLIFERACIÓN DE ARMAS DE DESTRUCCIÓN MASIVA DE LA REPÚBLICA 
            DE PANAMÁ. ACEPTO PROPORCIONAR CUALQUIER INFORMACIÓN Y/O DOCUMENTACIÓN ADICIONAL A LA DESCRITA EN EL PRESENTE FORMULARIO, QUE PANAMA CAR RENTAL, S.A. REQUIERA 
            PARA LA APLICACIÓN DE LAS MEDIDAS DE DEBIDA DILIGENCIA.							
            </p>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <b>Nombre Completo</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Fecha</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Firma (igual que en el docuemnto de identidad)</b>
                        <input type="file" name="firma" id="" class="form-control">
                    </div>
                </div>
            </div>
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
            <h3> DOCUMENTOS</h3>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <b>Copia de cedula o pasaporte(para extranjeros)</b>
                        <input type="file" name="documento_identidad" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Recibo de servicio publico dentro de los ultimos 3 meses o contrato de arrendamiento</b>
                        <input type="file" name="recibo" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Aviso de operaciones o licencia comercial</b>
                        <input type="file" name="aviso_operaciones" id="" class="form-control">
                    </div>
                    <div class="col-3">
                        <b>Evidencia de ingresos(deacuerdo con el perfil financiero)</b>
                        <input type="file" name="evidencia_ingresos" id="" class="form-control">
                    </div>
                </div>
            </div>

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

            <h3> PARA USO INTERNO DE PANAMA CAR RENTAL, S.A.</h3>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <b>Nombre y apellidos del vendedor</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Aprobacion</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Fecha</b>
                        <input type="date" name="fecha_" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Nombre y apellidos del encargado de sucursal</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Aprobacion</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Fecha</b>
                        <input type="date" name="fecha_" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Nombre y apellidos del analista de cumplimiento</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Aprobacion</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Fecha</b>
                        <input type="date" name="fecha_" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Nombre y apellidos del gerente de venta de autos(solo para peps)</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Aprobacion</b>
                        <input type="text" name="nombre_completo" id="" class="form-control">
                    </div>
                    <div class="col-4">
                        <b>Fecha</b>
                        <input type="date" name="fecha_" id="" class="form-control">
                    </div>
                </div>
            </div>

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
            <p>PANAMA CAR RENTAL, S.A. ES SUJETO OBLIGADO NO FINANCIERO DE ACUERDO CON LA LEY 124 DE 7 DE ENERO DE 2020 "QUE CREA LA 
                SUPERINTENDENCIA DE SUJETOS NO FINANCIEROS Y DICTA OTRAS DISPOSICIONES", LA LEY 23 DEL 27 DE ABRIL DE 2015 "QUE ADOPTA 
                MEDIDAS PARA PREVENIR EL BLANQUEO DE CAPITALES, EL FINANCIAMIENTO DEL TERRORISMO Y DEL FINANCIAMIENTO DE LA PROLIFERACIÓN 
                DE ARMAS DE DESTRUCCIÓN MASIVA Y OTRAS DISPOSICIONES", SUS MODIFICACIONES Y DEMÁS REGLAMENTACIONES</p>
            <br>
            <p>
            AUTOMARKET SEMINUEVOS SE REFIERE A LA MARCA BAJO LA CUAL PANAMA CAR RENTAL, S.A. OFRECE SUS PRODUCTOS Y SERVICIOS. EL NOMBRE 
            “AUTOMARKET SEMINUEVOS” Y SU LOGOTIPO ES UNA MARCA REGISTRADA DE PROPIEDAD DE SEMINUEVOS, S.A. LA SOCIEDAD SEMINUEVOS, S.A. NO 
            TIENE RELACIÓN COMERCIAL Y/O CONTRACTUAL NI PRESTA SERVICIOS A LOS CLIENTES DE PANAMA CAR RENTAL, S.A. 
            </p>
            <!-- FIN DE LA ONCEABA OPCION -->
        </div>
        </div>
    </div>

    </div>
    <br>
    
    <input type="button" class="btn btn-primary" style="width:100%;" value="Guardar">

</div>


<?php include 'pie.php'; ?>