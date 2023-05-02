
    </div> <!-- <<<< solo esta linea - incluido por el tema -->
    <script>
        $(document).ready(function () {
            $('#supertabla').DataTable();

            $("#summernote").summernote({
                height: 300, // Establece la altura del editor en píxeles
            });
        }); 
    </script>
    <script>
        tinymce.init({
            selector: '#mi-campo-de-texto'
        });

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
    </script>
        
        <!-- END layout-wrapper  incluido por el tema -->
        <?php include 'vistas/layouts/customizer.php'; ?>
        <?php include 'vistas/layouts/vendor-scripts.php'; ?>
        <!-- App js -->
        <script src="vistas/assets/js/app.js"></script>
    </body>
</html>