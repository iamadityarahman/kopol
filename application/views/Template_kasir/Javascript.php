<!-- jQuery 3 -->
<script src="<?=base_url()?>assets/plugins/jquery/dist/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Sparkline -->
<script src="<?=base_url()?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>assets/plugins/jquery-knob/dist/jquery.knob.min.js"></script>

<!-- daterangepicker -->
<script src="<?=base_url()?>assets/plugins/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->
<script src="<?=base_url()?>assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- Slimscroll -->
<script src="<?=base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="<?=base_url()?>assets/plugins/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/js/adminlte.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>assets/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/js/demo.js"></script>

<!-- datatables -->
<script src="<?=base_url()?>assets/plugins/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $("#<?=$link?>").addClass('active');

        $('#riwayat_transaksi').DataTable();
    })

    //Date picker
    $('#tanggal_lahir').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    })

    $('#tanggal_transfer').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    })
</script>