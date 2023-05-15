
    </div> <!-- <<<< solo esta linea - incluido por el tema -->
    <script>

        function id_modal_edit_rec(id_edit){
            var id = id_edit;
            fetch('vistas/modal/modalVercCliente.php?editar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario').modal('show');
                document.querySelector('#contenido_modal_ccliente').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_modal_eliminar_rec(id_eli){
            var id = id_eli;
            fetch('vistas/modal/modalVercCliente.php?eliminar_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.cClienteFormulario_eliminar').modal('show');
                document.querySelector('#contenido_modal_ccliente_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function modal_portada_id(id_portada){
            var id = id_portada;
            fetch('vistas/modal/modalVercCliente.php?portada_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.portada_contenido').modal('show');
                document.querySelector('#contenido_modal_portada').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function modal_contrato_id(id_contrato){ 
            var id = id_contrato;
            fetch('vistas/modal/modalVercCliente.php?recaudos_contratos_formulario_cc=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.documentos_contenido').modal('show');
                document.querySelector('#contenido_modal_documentos').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_model_eli_rep(id_eliminar){
            var id = id_eliminar;
            fetch('vistas/modal/modalReporte.php?eliminar_reporte=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('#eliminar_reporte').modal('show');
                document.querySelector('#reporte_modal_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function mostrar_registro_nuevo(){
            
                document.querySelector("#registro_usuario").style.display="block";
            
        }

        function nombre_completo(){

            var primer_nombre = document.querySelector("#primer_nombre").value;
            var segundo_nombre = document.querySelector("#segundo_nombre").value;
            var apellido_paterno = document.querySelector("#apellido_paterno").value;
            var apellido_materno = document.querySelector("#apellido_materno").value;
            var apellido_casada = document.querySelector("#apellido_casada").value;
            var nombre_completo = document.querySelector("#nombre_completo_inp");

            document.querySelector("#nombre_completo_inp").value = primer_nombre + ' ' + segundo_nombre + ' ' + apellido_paterno + ' ' + apellido_materno + ' ' + apellido_casada;

        }

        function guardar_temp_jdd(){
            
            var temp_nombre_completo = document.querySelector("#jd_temp_nombre_completo").value;
            var temp_cargo = document.querySelector("#jd_temp_cargo").value;
            var temp_nacionalidad = document.querySelector("#jd_temp_nacionalidad").value;
            var temp_id = document.querySelector("#jd_temp_id").value;
            var temp_correo = document.querySelector("#jd_temp_correo").value;
            var temp_telefono = document.querySelector("#jd_temp_telefono").value;
            var temp_direccion = document.querySelector("#jd_temp_direccion").value;

            const data = new URLSearchParams({
            
                jd_temp_nombre_completo :temp_nombre_completo, 
                jd_temp_cargo :temp_cargo,
                jd_temp_nacionalidad :temp_nacionalidad,
                jd_temp_id :temp_id,
                jd_temp_correo :temp_correo,
                jd_temp_telefono :temp_telefono,
                jd_temp_direccion :temp_direccion
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_jdd=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva').modal('hide');
                document.querySelector('#contenido_junta_directiva').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
            
        }

        function eliminar_dd_temp(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_jdd=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva_eliminar').modal('show');
                document.querySelector('#contenido_modal_jdd_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function eliminar_dd_temp_final(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_jdd_final=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva_eliminar').modal('hide');
                document.querySelector('#contenido_junta_directiva').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function guardar_temp_apoderados(){

            console.log('pimba');
            
            var temp_nombre_completo = document.querySelector("#a_temp_nombre_completo").value;
            var temp_cargo = document.querySelector("#a_temp_cargo").value;
            var temp_nacionalidad = document.querySelector("#a_temp_nacionalidad").value;
            var temp_id = document.querySelector("#a_temp_id").value;
            var temp_correo = document.querySelector("#a_temp_correo").value;
            var temp_telefono = document.querySelector("#a_temp_telefono").value;
            var temp_direccion = document.querySelector("#a_temp_direccion").value;

            const data = new URLSearchParams({
            
                a_temp_nombre_completo :temp_nombre_completo, 
                a_temp_cargo :temp_cargo,
                a_temp_nacionalidad :temp_nacionalidad,
                a_temp_id :temp_id,
                a_temp_correo :temp_correo,
                a_temp_telefono :temp_telefono,
                a_temp_direccion :temp_direccion
            
            });

            fetch('vistas/modal/modalContenidosTablas.php?guardar_temp_apoderados=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                    },
                    body: data
                })
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.apoderados').modal('hide');
                document.querySelector('#apoderados_tabla').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
            
        }

        function eliminar_a_temp(id_eliminar){

            var id = id_eliminar;
            fetch('vistas/modal/modalContenidosTablas.php?eliminar_a_temp=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('.junta_directiva_eliminar').modal('show');
                document.querySelector('#contenido_modal_jdd_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });

        }

    </script>
        
        <!-- END layout-wrapper  incluido por el tema -->
        <?php include 'vistas/layouts/customizer.php'; ?>
        <?php include 'vistas/layouts/vendor-scripts.php'; ?>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweetalerts.init.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- App js -->
        <script src="vistas/assets/js/app.js"></script>
        <script>
            <?php if(isset($alerta) && $alerta == 1){ ?>
                setTimeout(document.getElementById("sa-success").click(), 2000);
            <?php }elseif(isset($alerta) && $alerta == 2){ ?> 
                setTimeout(document.getElementById("sa-close").click(), 2000);
            <?php }elseif(isset($alerta) && $alerta == 3){ ?> 
                setTimeout(document.getElementById("sa-error").click(), 2000);
            <?php } ?> 
        </script>
    </body>
</html>