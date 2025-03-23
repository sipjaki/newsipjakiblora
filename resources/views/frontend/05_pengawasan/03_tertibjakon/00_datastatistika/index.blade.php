
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

        <section class="department-details-section";>
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
								<li><a href="/datajakon/bujk"><i class="fa-solid fa-arrow-left-long"></i>Kembali</a></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Data Statistika<i class="fa-solid fa-database" style="margin-left: 10px;"></i></a></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Total Data Tertib Usaha : {{ $datajakon }}<i class="fa-solid fa-edit" style="margin-left: 10px;"></i></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Total Data Tertib Pemanfaaatan : {{ $datapemanfaatan }}<i class="fa-solid fa-edit" style="margin-left: 10px;"></i></li>
								<li style="text-align: center"><a style="text-align: center;" href="#">Total Data Tertib Penyelenggaraan : {{ $datapenyelenggaraan }}<i class="fa-solid fa-edit" style="margin-left: 10px;"></i></li>

                            </ul><!-- ul -->
                            <ul>
                                	{{-- <li style="text-align: center"><a style="text-align: center;" href="/statistiktertibusahajakon">Statistik Tertib Jakon Usaha<i class="fa-solid fa-dashboard" style="margin-left: 10px;"></i></li> --}}
                            </ul>
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
				<div class="col-lg-8">

					<div class="department-details-content-box">
						<h4 style="font-size: 20px;" class="department-details-title">{{$title}}</h4>

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                          google.charts.load("current", {packages:["corechart"]});
                          google.charts.setOnLoadCallback(drawChart);
                          function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                              ['Kategori', 'Persentase'],
                              ['Tertib Usaha',     {{ $persenJakon }}],
                              ['Tertib Pemanfaatan', {{ $persenPemanfaatan }}],
                              ['Tertib Penyelenggaraan',  {{ $persenPenyelenggaraan }}]
                            ]);

                            var options = {
                              title: 'Persentase Data Tertib Jasa Konstruksi',
                              is3D: true,
                              slices: {
                                0: { color: '#4285F4' },
                                1: { color: '#34A853' },
                                2: { color: '#FBBC05' }
                              }
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                            chart.draw(data, options);
                          }
                        </script>
                      </head>
                      <body>
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                      </body>

                    </div><!-- department-details-content-box -->

                </div><!-- col-lg-8 -->

                <div class="col-lg-12">
					<div class="department-details-box">
						<p style="text-align: justify;">
                            Data Statistika BUJK Kontraktor dan Konsultan Kabupaten Blora, Provinsi Jawa Tengah.

                            Ini adalah data statistika yang menunjukkan jumlah dan distribusi Badan Usaha Jasa Konstruksi (BUJK) kontraktor dan konsultan di Kabupaten Blora, Provinsi Jawa Tengah. Data ini memberikan gambaran mengenai perkembangan sektor konstruksi di daerah tersebut, termasuk sebaran usaha, kapasitas pelaku industri, serta perannya dalam mendukung pembangunan daerah. Dengan adanya data ini, diharapkan dapat menjadi acuan bagi pemerintah, pelaku usaha, dan masyarakat dalam perencanaan, pengawasan, serta peningkatan kualitas jasa konstruksi di Kabupaten Blora.</p>
					</div><!-- department-details-box -->

                </div>
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->

</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
