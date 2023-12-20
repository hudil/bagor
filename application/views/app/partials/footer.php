<footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © 2023 Bagor <span class="d-none d-sm-inline-block"> - Sate Komoh</span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <script src="<?= base_url(); ?>assets/app/dflip/js/libs/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/app/dflip/js/dflip.min.js" type="text/javascript"></script>
        <script>

            jQuery(function ($) {

                var customButtonFunction = function (event) {
                    alert("Custom Button Works");
                };

                //We add the function in Global Defaults so that all flipbooks in the page act same.
                DFLIP.defaults.onReady = function (flipbook) {

                    var customButton = jQuery('<div class="df-ui-btn btn btn-danger df-ui-custom-button1">Akhiri</div>');
                    customButton.on("click", customButtonFunction);
                    flipbook.ui.more.after(customButton);

                };

            });

        </script>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url(); ?>assets/app/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/node-waves/waves.min.js"></script>

        <!-- form advanced -->
        <script src="<?= base_url(); ?>assets/app/libs/select2/js/select2.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/spectrum-colorpicker2/spectrum.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/admin-resources/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    
        <script src="<?= base_url(); ?>assets/app/js/pages/form-advanced.init.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Peity chart-->
        <script src="<?= base_url(); ?>assets/app/libs/peity/jquery.peity.min.js"></script>

        <!-- Plugin Js-->
        <script src="<?= base_url(); ?>assets/app/libs/chartist/chartist.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <script src="<?= base_url(); ?>assets/app/js/pages/dashboard.init.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/jszip/jszip.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url(); ?>assets/app/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url(); ?>assets/app/js/pages/datatables.init.js"></script> 

        <script src="<?= base_url(); ?>assets/app/js/app.js"></script>

        <script src="<?= base_url(); ?>assets/app/chart/chart.js"></script>

        <script>
            $(document).on("click", ".catatan", function () {
                var catatan = $(this).data('catatan');
                $(".modal-body p").html( catatan );
            });
        </script>

        <script>
            $(document).ready(function() {
                // chart
                const ctx = document.getElementById('grapikkematangan');
                var coloR = [];
                var dynamicColors = function() {
                    var r = Math.floor(Math.random() * 255);
                    var g = Math.floor(Math.random() * 255);
                    var b = Math.floor(Math.random() * 255);
                    return "rgb(" + r + "," + g + "," + b + ")";
                };
                
                for (let i = 0; i < 33; i++) {
                    coloR.push(dynamicColors());
                }


                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?= (isset($opd) ? $opd : '') ?>],
                        datasets: [{
                            label: 'Nilai Kematangan',
                            backgroundColor: coloR,
                            data: [<?php echo $total; ?>],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                min: 0,
                                max: 55
                            }
                        }
                    }
                });
                // endchart

                $("#tahun_dashabord").change(function(){
                    $.ajax({
                        url: "<?= base_url('dashboardverif/getdata') ?>",
                        type: 'POST',
                        dataType: 'JSON',
                        data:  {tahun:$('#tahun_dashabord option:selected').val()},
                        success : function(total) {
                            var formatbaru = (Math.round(total.total_keseluruhan * 100) / 100).toFixed(2);
                            var kematangan = "-";
                            $('#nilaikopas').text(formatbaru);

                            if (total >= 10 && total < 20) {
                                kematangan = "Sangat Rendah";
                            } else if (total > 19 && total < 29) {
                                kematangan = "Rendah";
                            } else if (total > 28 && total < 38) {
                                kematangan = "Sedang";
                            } else if (total > 37 && total < 47) {
                                kematangan = "Tinggi";
                            } else if (total > 46 && total < 56) {
                                kematangan = "Sangat Tinggi";
                            } else {
                                kematangan = "-";
                            }

                            $('#kematangankopas').text(kematangan);
                            var total = total.total.split(",");
                            // update chart
                            myChart.data.datasets[0].data = total;
                            myChart.update();
                        },
                    });

                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#tahun_dashabord2").change(function() {
                    var tahun = $('#tahun_dashabord2 option:selected').val();
                    $.ajax({
                        url: "<?= base_url('dashboard/getdata') ?>",
                        type: 'POST',
                        dataType: 'JSON',
                        data:  {tahun: tahun},
                        success : function(result) {
                            var formatbaru = (Math.round(result.total_nilai * 100) / 100).toFixed(2);
                            var kematangan = result.tingkat_kematangan;
                            $('#nilaiopd').text(formatbaru);

                            $('#kematanganopd').text(kematangan);
                        }
                    });

                });
            });
        </script>

    </body>

</html>