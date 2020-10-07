<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="<?= base_url('asset_dashboard/assets/js/plugins.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/main.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.sampledata.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/country/jquery.vmap.world.js') ?>"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-2JBCbWoMJPH+Uj7Wq5OLub8E5edWHlTM4ar/YJkZh3plwB2INhhOC3eDoqHm1Za/ZOSksrLlURLoyXVdfQXqwg==" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>

<script>
    var tampil = false;;
    function showAdd() {
        if (tampil) {
            $("#tabel").attr('class', 'col-12');
            $("#add").css('visibility', 'hidden');
            tampil = false;
        } else {
            $("#tabel").attr('class', 'col-8');
            $("#add").css('visibility', 'visible');
            tampil = true;
        }
    }
</script>

</body>

</html>