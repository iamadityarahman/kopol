<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/dist/jquery.min.js"></script>

<script>
    window.jQuery || document.write('<script src="<?=base_url()?>assets/plugins/bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>

<!-- Bootstrap core JavaScript -->
<script src="<?=base_url()?>assets/plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?=base_url()?>assets/plugins/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $("#<?=$link?>").addClass('active')

        $('#example').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

<script>
    var map, marker, loc;
    loc = {lat: -7.962322, lng: 112.618351}
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: loc,
            zoom: 18
        });

        marker = new google.maps.Marker({
            position:  loc,
            map: map
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPXMBmMqLeLI4U1jgF2V9T7bz3duMSx9M&callback=initMap"
        async defer></script>