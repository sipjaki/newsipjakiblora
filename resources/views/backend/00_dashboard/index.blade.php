@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')

<!-- Page Wrapper -->
<div class="col-sm-9 col-xs-12 content pl-0">

    <div class="row mb-0" style="margin-top:20px;">
        <div class="font-bold col-sm-8">
            <div class="btn btn-warning mb-4" style="width: 100%; text-align: center;">
                <h5 class="mb-0 bc-header">Dashboard Halaman Data Sipjaki Pemerintah Kabupaten Bandung</h5>
            </div>
        </div>

    </div>

    <div class="container">
        <?php
        $dataPoints1 = [
            ["label" => "2015", "y" => 112.242],
            ["label" => "2016", "y" => 107.231],
            ["label" => "2017", "y" => 114.444],
            ["label" => "2018", "y" => 120.032],
            ["label" => "2019", "y" => 154.563],
            ["label" => "2020", "y" => 143.234],
            ["label" => "2021", "y" => 155.084],
            ["label" => "2022", "y" => 160.098],
            ["label" => "2023", "y" => 162.452],
            ["label" => "2024", "y" => 163.009],
        ];
        $dataPoints2 = [
            ["label" => "2015", "y" => 30],
            ["label" => "2016", "y" => 24],
            ["label" => "2017", "y" => 30],
            ["label" => "2018", "y" => 60],
            ["label" => "2019", "y" => 93],
            ["label" => "2020", "y" => 75],
            ["label" => "2021", "y" => 98],
            ["label" => "2022", "y" => 132],
            ["label" => "2023", "y" => 122],
            ["label" => "2024", "y" => 30],
        ];
        ?>
        <script>
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: ""
                    },
                    axisY: {
                        includeZero: true
                    },
                    legend: {
                        cursor: "pointer",
                        verticalAlign: "center",
                        horizontalAlign: "right",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                        type: "column",
                        name: "Kecelakaan Kerja",
                        indexLabel: "{y}",
                        yValueFormatString: "#0 Orang",
                        showInLegend: true,
                        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                    }, {
                        type: "column",
                        name: "Sertifikasi Pekerja",
                        indexLabel: "{y}",
                        yValueFormatString: "#0 orang",
                        showInLegend: true,
                        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();

                function toggleDataSeries(e) {
                    e.dataSeries.visible = (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) ? false : true;
                    chart.render();
                }
            }
        </script>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </div>

    // <!-- Dashboard Widget -->
    <div class="mt-1 mb-3 button-container">
        <div class="row pl-0">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                <div class="bg-theme border shadow rounded">
                    <div class="p-2 text-center">
                        <h5 class="mb-0 mt-2 text-light"><small><strong>DATA KONSTRUKSI</strong></small></h5>
                        <div class="text-center text-light">SEGERA HADIR</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                <div class="bg-success border shadow rounded">
                    <div class="p-2 mb-1 text-center">
                        <h5 class="mb-0 mt-2 text-light"><small><strong>DATA TENAGA KERJA</strong></small></h5>
                        <div class="text-center text-light">SEGERA HADIR</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                <div class="bg-danger border shadow rounded">
                    <div class="p-2 text-center">
                        <h5 class="mb-0 mt-2 text-light"><small><strong>DATA PEMBINA KONSTRUKSI</strong></small></h5>
                        <div class="text-center text-light">SEGERA HADIR</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    // <!-- /Dashboard Widget -->

    @include('backend.00_dashboard.part.menufooter')

</div>
// <!-- Main Content -->

@include('backend.00_dashboard.part.footer')
