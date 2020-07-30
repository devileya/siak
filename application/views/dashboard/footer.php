<script src="<?= base_url('asset_dashboard/assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?= base_url('asset_dashboard/assets/js/plugins.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/main.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/chart-js/Chart.bundle.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/dashboard.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/widgets.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/jquery.vmap.sampledata.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/vector-map/country/jquery.vmap.world.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/datatables.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/jszip.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
<script src="<?= base_url('asset_dashboard/assets/js/lib/data-table/datatables-init.js') ?>"></script>

<script>
    var tampil = false;
    // ( function ( $ ) {
    //     "use strict";
    //
    //     jQuery( '#vmap' ).vectorMap( {
    //         map: 'world_en',
    //         backgroundColor: null,
    //         color: '#ffffff',
    //         hoverOpacity: 0.7,
    //         selectedColor: '#1de9b6',
    //         enableZoom: true,
    //         showTooltip: true,
    //         values: sample_data,
    //         scaleColors: [ '#1de9b6', '#03a9f5' ],
    //         normalizeFunction: 'polynomial'
    //     } );
    // } )( jQuery );


        function showAdd()
        {
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

        function addPrice() {
            $("#addPrice").before('<div class="row form-group">\n' +
                '                                    <div class="col-6 col-md-6"><input  type="text" id="nama_harga" name="nama_harga[]"\n' +
                '                                                                        placeholder="nama varian" class="form-control" required>\n' +
                '<!--                                        <small class="form-text text-muted">Masukan nama dan harga produk</small>-->\n' +
                '                                    </div>\n' +
                '                                    <div class="col-6 col-md-6"><input type="text" id="harga" name="harga[]"\n' +
                '                                                                        placeholder="harga" class="form-control" required>\n' +
                '<!--                                        <small class="form-text text-muted">Masukan nama dan harga produk</small>-->\n' +
                '                                    </div>\n' +
                '                                </div>')
        }

</script>

</body>
</html>
