
    </div> <!-- <<<< solo esta linea - incluido por el tema -->
    <script>

        function id_modal_edit_rec(id_edit){
            var id = id_edit;
            fetch('vistas/modal/modalUsuario.php?id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('#editar_contenido').modal('show');
                document.querySelector('#contenido_modal').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_model_eli_rec(id_eliminar){
            var id = id_eliminar;
            fetch('vistas/modal/modalUsuario.php?eliminar_usuario=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('#eliminar_contenido').modal('show');
                document.querySelector('#contenido_modal_eliminar').innerHTML = data;
                })
                .catch(function(error) {
                console.log('Error al obtener los detalles:', error);
                });
        }

        function id_modal_ver_rec(id_reporte){ 
            var id = id_reporte;
            fetch('vistas/modal/modalReporte.php?ver_reporte=1&id=' + id)
                .then(function(response) {
                return response.text();
                })
                .then(function(data) {
                    $('#ver_contenido_reporte').modal('show');
                document.querySelector('#contenido_modal_reporte').innerHTML = data;
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
            setTimeout(document.getElementById("sa-success").click(), 3000);
            <?php } ?>
        </script>
    </body>
</html>