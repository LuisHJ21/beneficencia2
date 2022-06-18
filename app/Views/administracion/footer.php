</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>/dist/js/pages/dashboard.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
 

 $('#example1').DataTable({
     
     "paging": true,
     "responsive": true,
     "ordering": false,
   "columnDefs":[{
       "targets": "_all",
       "sortable": false
   }],
     "language":{
       "sProcessing":     "Procesando...",
   "sLengthMenu":     "Mostrar _MENU_ registros",
   "sZeroRecords":    "No se encontraron resultados",
   "sEmptyTable":     "Ningún dato disponible en esta tabla",
   "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
   "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
   "sSearch":         "Buscar:",
   "sInfoThousands":  ",",
   "sLoadingRecords": "Cargando...",
   "oPaginate": {
       "sFirst":    "Primero",
       "sLast":     "Último",
       "sNext":     "Siguiente",
       "sPrevious": "Anterior"
   },
   "oAria": {
       "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
       "sSortDescending": ": Activar para ordenar la columna de manera descendente"
   },
   "buttons": {
       "copy": "Copiar",
       "colvis": "Visibilidad"
   }
   }
});






</script>




</body>
</html>
