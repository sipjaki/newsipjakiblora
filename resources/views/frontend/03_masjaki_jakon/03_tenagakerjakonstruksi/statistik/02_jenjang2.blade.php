
@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="font-size: 25px; color:black;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="department-details-section">
		<div class="container">
			<div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="department-details-imgbox">
                        <h4 class="department-details-title" style="font-size: 20px;">Wilayah Administrasi Pemerintah Kabupaten Blora Provinsi Jawa Tengah</h4>
						<img src="/assets/00_dokmasjaki/03_datajakon/petaindonesiabaru.png" alt="img-159">
						<a href="#"></a>
                    </div><!-- department-details-imgbox -->
                </div>
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="sidebar">
						<div class="sidebar-widget-list-inner">
							<ul>
								<li><a href="/datajakon/statistikaskktenagakerjabloralist"><i class="fa-solid fa-arrow-left-long"></i>Kembali</a></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Distribusi Data Tenaga Ahli<i class="fa-solid fa-database" style="margin-left: 10px;"></i></a></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Total Tenaga Ahli : {{$datacount}} <i class="fa-solid fa-users" style="margin-left: 10px;"></i></li>
							</ul><!-- ul -->
						</div><!-- sidebar-widget-list-inner -->
						<div class="sidebar-widget-list-inner">

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                              google.charts.load('current', {'packages':['table']});
                              google.charts.setOnLoadCallback(drawTable);

                              function drawTable() {
                                var data = new google.visualization.DataTable();
                                data.addColumn('string', 'Jenjang');
                                data.addColumn('number', 'Jumlah');

                                data.addRows([
                                    @foreach($statistikJenjang as $item)
                                        ['{{ $item['jenjang'] }}', {{ $item['jumlah'] }}],
                                    @endforeach
                                ]);

                                var table = new google.visualization.Table(document.getElementById('table_div'));
                                table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
                              }

                              setTimeout(() => {
                                    document.querySelectorAll('#table_div table').forEach((table) => {
                                        table.style.borderCollapse = 'collapse';
                                        table.style.width = '100%';
                                        table.style.boxShadow = '0px 4px 8px rgba(0, 0, 0, 0.1)';
                                        table.style.borderRadius = '8px';
                                        table.style.overflow = 'hidden';
                                    });

                                    document.querySelectorAll('#table_div th').forEach((th) => {
                                        th.style.backgroundColor = '#2ECC71';
                                        th.style.color = 'black';
                                        th.style.textTransform = 'uppercase';
                                        th.style.padding = '12px';
                                        th.style.textAlign = 'left';
                                    });

                                    document.querySelectorAll('#table_div tr:nth-child(even)').forEach((tr) => {
                                        tr.style.backgroundColor = '#ffffff';
                                    });

                                    document.querySelectorAll('#table_div tr:hover').forEach((tr) => {
                                        tr.style.backgroundColor = '#ffffff';
                                    });

                                    }, 500);

                            </script>

                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                google.charts.load('current', {'packages':['table']});
                                google.charts.setOnLoadCallback(drawTable);

                                function drawTable() {
                                    var data = new google.visualization.DataTable();
                                    data.addColumn('string', 'Jabatan Kerja');
                                    data.addColumn('number', 'Jumlah');
                                    data.addColumn('string', 'Persentase');

                                    data.addRows([
                                    @foreach($datastatistikJabatanKerja as $item)
                                        ['{{ $item['datajabatankerja'] }}', {{ $item['jumlah'] }}, '{{ $item['persentase'] }}%'],
                                    @endforeach
                                    ]);

                                    var table = new google.visualization.Table(document.getElementById('table_div'));

                                    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
                                }
                                </script>

                                <body>
                                    <div id="table_div"></div>
                                </body>



                        <div id="table_div"></div>
						</div><!-- sidebar-widget-list-inner -->
                        <div class="sidebar-widget-list-inner">

                            @include('frontend.00_approve.01_cssterpisah.statistikajenjang')


                        </div><!-- sidebar-widget-list-inner -->
						<div class="sidebar-widget sidebar-widget-card">
							<div class="sidebar-widget-card-icon">
								<i class="flaticon-question"></i>
							</div><!-- sidebar-widget-card-icon -->
							<div class="sidebar-widget-card-content">
                                <h3><a href="https://wa.me/6281321455855" target="_blank">Butuh Bantuan? Klik </a></h3>
								<p>
                                    Kami siap membantu! Klik di atas  untuk terhubung langsung dengan tim kami.</p>
							</div><!-- sidebar-widget-card-content -->
						</div><!-- sidebar-widget sidebar-widget-card -->
					</div><!--sidebar-->
				</div><!--col-12 col-lg-4 col-xl-4-->

                <div class="col-12 col-lg-8 col-xl-8">
					<div class="department-details-content-box">
						<h4 style="font-size: 20px;" class="department-details-title">{{$title}}</h4>


                        {{-- ISIAN DATA --}}
                        <div id="piechart" style="width: 900px; height: 500px;"></div>

                        <script type="text/javascript">
                            google.charts.load("current", {packages:["corechart"]});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Jabatan Kerja', 'Jumlah', { role: 'style' }],
                                    @foreach($statistikJabatanKerja as $item)
                                        ['{{ $item['jabatankerja'] }}', {{ $item['jumlah'] }}, 'color: #76A7FA'],  // Sesuaikan warna jika perlu
                                    @endforeach
                                ]);

                                var options = {
                                    title: 'Statistik Jabatan Kerja Berdasarkan Jenjang 2',  // Judul chart
                                    legend: { position: 'none' },
                                    pieSliceText: 'label',
                                    slices: {
                                        4: {offset: 0.2},
                                        12: {offset: 0.3},
                                        14: {offset: 0.4},
                                        15: {offset: 0.5},
                                    },
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>
                        </div><!-- department-details-content-box -->
                        <div class="department-details-box">


                            <p style="text-align: justify;">

                                Data ini menyajikan data mengenai Sertifikat Kompetensi Kerja (SKK) Tenaga Ahli Konstruksi berdasarkan jabatan kerja di lingkungan Pemerintah Kabupaten Blora, Provinsi Jawa Tengah. Data ini memberikan gambaran tentang kualifikasi, distribusi, dan kapasitas tenaga ahli yang berperan dalam mendukung pembangunan infrastruktur daerah. Dengan adanya informasi ini, diharapkan dapat menjadi referensi bagi pemerintah, pelaku industri konstruksi, serta masyarakat dalam perencanaan, pengelolaan, dan peningkatan kompetensi tenaga ahli konstruksi di Kabupaten Blora.
                            </p>

                            </div><!-- department-details-box -->


                </div><!-- col-lg-8 -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->

</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')

