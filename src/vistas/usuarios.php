<?php  include 'cabeza.php'; ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PANAMA CAR RENTAL, S.A. </h4>
                        <div class="page-title-right">
                            <!--<ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Starter</li>
                            </ol>-->
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">REQUISITOS DEBIDA DILIGENCIA</button>
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl-delitos">DELITOS</button>
                            <!-- Full screen modal content debida deligencia -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">REQUISITOS DEBIDA DILIGENCIA</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15"></h6>
                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">TIPOS DE DEBIDA DILIGENCIA</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                </tr>
                                                <tr>
                                                    <td>Persona que no cumple criterios para ser considerado realizar sobre ella una debida diligencia ampliada o simplificada</td>
                                                </tr>
                                            </table>
                                            <br>
                                            <table class="table">
                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales considerados de medio y alto riesgo, previa clasificación de riesgo</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales que se involucren en compras múltiples, es decir, más de un auto por transacción de compraventa o que se dediquen habitual o profesionalmente al negocio de reventa de autos.</td>
                                                </tr>
                                                <tr>
                                                    <td>Clientes, terceros autorizados y/o beneficiarios finales que se identifiquen como personas expuestas políticamente (PEP), sus familiares cercanos o estrechos colaboradores.</td>
                                                </tr>
                                                <tr>
                                                    <td>Relaciones de negocio y operaciones con clientes de países, territorios o jurisdicciones de riesgo, o que supongan transferencia de fondos desde o hacia tales países, territorios 
                                                    o jurisdicciones, incluyendo en todo caso, aquellos países para por que el GAFI exige la aplicación de medidas de debida diligencia ampliada o reforzada.</td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                </tr>
                                                <tr>
                                                    <td>Beneficiarios finales y/o terceros autorizados dentro del cuarto grado de consanguinidad (padres, hijos, abuelos, nietos, hermanos, tíos, sobrinos y primos) respecto 
                                                    del cliente o el cónyuge del cliente, que realicen pagos parciales (abonos) al precio de venta del auto, a través de depósito directo, transferencias bancarias (ACH)
                                                    provenientes de bancos locales con licencia expedida por la Superintendencia de Bancos de Panamá, tarjeta de crédito, tarjeta de débito, por suma igual o 
                                                    inferior a B/.2,500.00, ya sea en una sola transacción o a través de transacciones sucesivas o múltiples, que en total sumen B/.2,500.00; siempre que se trate 
                                                    de ventas individuales. </td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">CLIENTE PERSONA NATURAL</td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte en el caso de extranjeros</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble</td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01)</td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si es independiente, empresario o emprendedor)</td>
                                                    <td>Declaración Jurada de Actividades (PCR-CUMP-EXCP02)</td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona que paga o abona)</td>
                                                    <td></td>
                                                </tr>

                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de segunda identificación (licencia de conducir, carné de seguro social, etc.)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Carta de referencia bancaria</td>
                                                    <td>Carta de referencia de proveedor o cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Información adicional sobre la procedencia de los fondos</td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que sustente evidencia de ingreso</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <br>
                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">EVIDENCIA DE INGRESOS</td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Asalariado: Carta de trabajo, última ficha de seguro social o último comprobante de pago</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Jubilado: Último talonario de pago</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Independiente formal: Copia de la Última Declaración Jurada de Rentas</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Empresario:Copia de la última Declaración Jurada de Rentas Persona Natural o Persona Jurídica</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Emprendedor: Copia de la Última Declaración Jurada de Rentas</td>
                                                    <td>Declaración Jurada de Actividades (PCR-CUMP-EXCP02)</td>
                                                </tr>
                                            </table>

                                            <br>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">Copia DE </td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Declaración Jurada para la aplicación de abonos o cancelaciones para la compra de auto por Familiares (PCR-CUMP-TE01) o Declaración 
                                                        Jurada para la aplicación de abonos o cancelaciones para la compra de auto por Terceros (PCR-CUMP-TE02)
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte en el caso de extranjeros</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble                             </td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01)</td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si es independiente, empresario o emprendedor)</td>
                                                    <td>Declaración Jurada de Actividades (PCR-CUMP-EXCP02)</td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona que paga o abona)</td>
                                                    <td></td>
                                                </tr>
                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de segunda identificación (licencia de conducir, carné de seguro social, etc.)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Carta de referencia bancaria</td>
                                                    <td>Carta de referencia de proveedor o cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Información adicional sobre la procedencia de los fondos</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que sustente evidencia de ingreso</td>
                                                    <td></td>
                                                </tr>
                                            </table>

                                            <table class="table">
                                                <tr>
                                                    <td style="background-color:#003193; color: white">BENEFICIARIO FINAL PERSONA NATURAL </td>
                                                    <td style="background-color:#BA2F25; color: white">Excepciones</td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#25851B; color: white">Debida diligencia básica</td>
                                                    <td>Solo en los casos que el cliente no pueda cumplir con el requisito</td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de la cédula de identidad o pasaporte en el caso de extranjeros</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de recibo de servicio público dentro de los últimos 3 meses a nombre del cliente o contrato de arrendamiento de bien inmueble</td>
                                                    <td>Declaración Jurada de Domicilio (PCR-CUMP-EXCP01)</td>
                                                </tr>
                                                <tr>
                                                    <td>Aviso de Operaciones o Licencia Comercial (si es independiente, empresario o emprendedor)</td>
                                                    <td>Declaración Jurada de Actividades (PCR-CUMP-EXCP02)</td>
                                                </tr>
                                                <tr>
                                                    <td>Evidencia de ingreso (si es la misma persona que paga o abona)</td>
                                                    <td></td>
                                                </tr>
                                                <tr style="background-color:#BA2F25; color: white">
                                                    <td>Debida diligencia ampliada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Copia de segunda identificación (licencia de conducir, carné de seguro social, etc.)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Carta de referencia bancaria</td>
                                                    <td>Carta de referencia de proveedor o cliente</td>
                                                </tr>
                                                <tr>
                                                    <td>Información adicional sobre la procedencia de los fondos</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color:#C7AA28; color: white">Debida diligencia simplificada</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Se exceptúan de aportar documento que sustente evidencia de ingreso</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- Full screen modal content delitos -->
                            <div class="modal fade bs-example-modal-xl-delitos" tabindex="-1" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">DELITOS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="fs-15">
                                                Conforme a lo establecido en el Código Penal de la República de Panamá, 
                                                los delitos precedentes del Blanqueo de Capitales, según la nueva reforma al 
                                                código penal del artículo 254 son los siguientes:
                                            </h6>
                                            <ul>
                                                <li>Soborno Internacional</li>
                                                <li>Delitos contra el derecho de autor y delitos conexos</li>
                                                <li>Contra los derechos de la propiedad industrial</li>
                                                <li>Tráfico ilícito de migrantes</li>
                                                <li>Trata de personas</li>
                                                <li>Tráfico de órganos</li>
                                                <li>Delitos contra el ambiente</li>
                                                <li>Delitos de explotación sexual comercial</li>
                                                <li>Delitos contra la personalidad jurídica del estado</li>
                                                <li>Delitos contra la seguridad jurídica de los medios electrónicos</li>
                                                <li>Estafa calificada</li>
                                                <li>Robo</li>
                                                <li>Delitos Financieros</li>
                                                <li>Secuestro</li>
                                                <li>Extorsión</li>
                                                <li>Homicidio por precio o recompensa</li>
                                                <li>Peculado</li>
                                                <li>Corrupción de servicios públicos</li>
                                                <li>Enriquecimiento injustificado</li>
                                                <li>Pornografía y corrupción de personas menores de edad</li>
                                                <li>Robo o tráfico internacional de vehículos y sus piezas o componentes</li>
                                                <li>Falsificación de documento en general</li>
                                                <li>Omisión o falsedad de la declaración aduanera del viajero respecto a dineros, valores o documentos negociables</li>
                                                <li>Falsificación de moneda y otros valores</li>
                                                <li>Delito contra el patrimonio histórico de la nación</li>
                                                <li>Delito contra la seguridad colectiva</li>
                                                <li>Terrorismo y Financiamiento del terrorismo</li>
                                                <li>Delitos relacionados con droga</li>
                                                <li>Piratería</li>
                                                <li>Delincuencia organizada</li>
                                                <li>Asociación Ilícita</li>
                                                <li>Pandillerismo</li>
                                                <li>Posesión y tráfico de armas y explosivos y apropiación y sustracción violenta de material ilícito</li>
                                                <li>Tráfico y receptación de cosas provenientes del delito</li>
                                                <li>Delitos de contrabando</li>
                                                <li>Defraudación aduanera</li>
                                                <li>Evasión Fiscal</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>

                    <!-- Modal para agregar-->
                    <div class="modal fade" id="registrarDocumentacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                            
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Nombre Completo</b></label>
                                        <input type="text" name="nombre" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Email</b></label>
                                        <input type="text" name="email" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Tipo Usuario</b></label>
                                        <select name="tipo_user" id="" class="form-control">
                                            <option value="">Seleccionar</option>
                                            <?php foreach ($tipos as $key => $value) { ?>
                                            <option value="<?php echo $value['tipo']; ?>"><?php echo $value['descripcion']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNombreCaso"> <b> Password</b></label>
                                        <input type="text" name="password" id="" class="form-control" required autocomplete="off">
                                    </div>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="registro_usuario">Registrar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!-- modal para editar -->
                    <div class="modal fade" id="editar_contenido" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="miVentanaModalLabel">Editar Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="contenido_modal">

                                </div>
                                    <!-- Agrega el elemento de loader 
                                    <div class="loader"></div>-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="editar_usuario">Editar</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!-- modal para Eliminar -->
                    <div class="modal fade" id="eliminar_contenido" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="miVentanaModalLabel" style="color:red;">Eliminar Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="contenido_modal_eliminar">

                                    </div>
                                        <!-- Agrega el elemento de loader 
                                        <div class="loader"></div>-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="eliminar_usuario">Eliminar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- modal para Eliminar email -->
                    <div class="modal fade" id="eliminar_recordatorio_email" tabindex="-1" role="dialog" aria-labelledby="miVentanaModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="miVentanaModalLabel" style="color:red;">Eliminar Recordatorio Email</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="segundo_contenido_eliminar">

                                    </div>
                                        <!-- Agrega el elemento de loader 
                                        <div class="loader"></div>-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="eliminar_recordatorio_email">Eliminar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="container">
                        <h1 class="my-4">Usuarios </h1>
                        <button style="margin:5px;" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#registrarDocumentacion">Registrar Usuario</button>
                        <br>
                        <table id="buttons-datatables" class="display table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Tipos de usuario</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($todos_registros_user as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($value["id"]); ?></td>
                                        <td><?php echo htmlspecialchars($value["nombre"]); ?></td>
                                        <td><?php echo htmlspecialchars($value["email"]); ?></td>
                                        <td><?php echo htmlspecialchars($value["tipo_user"]); ?></td>
                                        <td><?php if($value["stat"]==1){ echo '<span style="color:green">ON</span>'; }else{ echo '<span style="color:red">OFF</span>'; } ?></td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-icon waves-effect waves-light" onclick="modal_edit(<?php echo $value['id']; ?>, 'user')"><i class="ri-edit-line"></i></button>
                                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="modal_eliminar(<?php echo $value['id']; ?>, 'user', 'eliminar_contenido', 'contenido_modal_eliminar')"><i class="ri-delete-bin-5-line"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<?php include 'pie.php'; ?>