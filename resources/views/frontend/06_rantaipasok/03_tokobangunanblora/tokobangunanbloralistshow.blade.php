<style>
    /* Import font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* Wrapper untuk tabel */
.table-wrapper {
overflow-x: auto;
max-width: 100%;
padding: 10px;
}

/* Style dasar tabel */
.fl-table {
width: 100%;
border-collapse: collapse;
font-family: 'Poppins', sans-serif; /* Font modern pemerintah */
font-size: 14px;
background: #fff; /* Tetap netral */
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
border-radius: 8px;
overflow: hidden;
}

/* Header styling */
.fl-table thead {
background: #2ECC71;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 0.5px;
color: black;
}

.fl-table th,
.fl-table td {
padding: 12px 15px;
text-align: left;
border-bottom: 1px solid #ddd;
}

/* Hover effect */
.fl-table tbody tr:hover {
background: rgba(0, 0, 0, 0.05);
}

/* Responsive styling */
@media (max-width: 768px) {
.fl-table thead {
display: none; /* Sembunyikan header di tampilan kecil */
}

.fl-table tr {
display: block;
margin-bottom: 10px;
border: 1px solid #ddd;
border-radius: 5px;
overflow: hidden;
}

.fl-table td {
display: block;
text-align: right;
font-size: 14px;
border-bottom: 1px solid #eee;
position: relative;
padding-left: 50%;
}

.fl-table td::before {
content: attr(data-label);
position: absolute;
left: 10px;
width: 45%;
font-weight: 600;
text-align: left;
}
}

/* Style untuk ikon view */
.view-icon {
color: #4CAF50;
cursor: pointer;
font-size: 18px;
}

.view-icon:hover {
color: #45a049;
}

</style>


@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-breadcrumbs">
				<ul class="list-unstyled">
					{{-- <li><a href="index.html">Home</a></li> --}}
					{{-- <li>Document-details</li> --}}
				</ul><!-- list-unstyled -->
			</div><!-- page-breadcrumbs -->
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{ $title }}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="department-details-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="sidebar">
						<div class="sidebar-widget-list-inner">
							<ul>

                                {{-- @include('frontend.00_approve.01_cssterpisah.peraturanjasakonstruksi') --}}
                                <li><a href="javascript:history.back()"><i class="fa-solid fa-arrow-left-long"></i> Kembali Ke Data Toko Bangunan</a></li>
                                <li><a href="#"><i class="fa-solid fa-store"></i> Nama : {{$data->namatokobangunan}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-map-marker-alt"></i> Kecamatan : {{$data->kecamatanblora->kecamatanblora}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-user"></i> Pemilik : {{$data->pemilik}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-location-arrow"></i> Alamat : {{$data->alamat}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-phone"></i> No Telepon : {{$data->notelepon}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-envelope"></i> Email : {{$data->email}}</a></li>
                                <li><a href="#"><i class="fa-solid fa-cogs"></i> Jenis Toko : {{$data->jenisprodukbangunan}}</a></li>

                            </ul><!-- ul -->
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

                    <div class="department-details-imgbox">
                        <iframe src="{{ asset('storage/' . $data->fototokobangunan) }}" width="100%" height="750" style="border: none;"></iframe>
                        {{-- <a href="assets/pdf/sample.pdf" target="_blank"></a> --}}
                    </div><!-- department-details-imgbox -->

                    <div class="department-details-content-box">
						<h4 class="department-details-title">{{ $data->namatokobangunan}}</h4>
					</div><!-- department-details-content-box -->
                    <div class="department-details-content-box">
						<h6 class="department-details-title">{{ $data->keterangan}}</h6>
					</div><!-- department-details-content-box -->

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->

    <section class="department-details-section" style="margin-top: -200px;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">

				</div><!--col-12 col-lg-4 col-xl-4-->
				<div class="col-lg-12">

                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bahan Material</th>
                                    <th>Satuan</th>
                                    <th>Rp.</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="No">1</td>
                                    <td data-label="Bahan Material">Pasir</td>
                                    <td data-label="Satuan">Meter Kubik</td>
                                    <td data-label="Satuan">Rp.</td>
                                    <td data-label="Harga" style="text-align: right"> 100.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">2</td>
                                    <td data-label="Bahan Material">Batu Bata</td>
                                    <td data-label="Satuan">Ribu</td>
                                    <td data-label="Satuan">Rp.</td>
                                    <td data-label="Harga" style="text-align: right"> 1.500</td>
                                </tr>
                                <tr>
                                    <td data-label="No">3</td>
                                    <td data-label="Bahan Material">Semen</td>
                                    <td data-label="Satuan">Karung</td>
                                    <td data-label="Satuan">Rp.</td>
                                    <td data-label="Harga" style="text-align: right"> 75.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">4</td>
                                    <td data-label="Bahan Material">Gipsum</td>
                                    <td data-label="Satuan">Plester</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 50.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">5</td>
                                    <td data-label="Bahan Material">Keramik</td>
                                    <td data-label="Satuan">Per Dus</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 450.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">6</td>
                                    <td data-label="Bahan Material">Cat Dinding</td>
                                    <td data-label="Satuan">Kaleng</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 120.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">7</td>
                                    <td data-label="Bahan Material">Paku</td>
                                    <td data-label="Satuan">Kilogram</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 30.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">8</td>
                                    <td data-label="Bahan Material">Tripleks</td>
                                    <td data-label="Satuan">Lembar</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 150.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">9</td>
                                    <td data-label="Bahan Material">Atap Zincalume</td>
                                    <td data-label="Satuan">Meter</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 200.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">10</td>
                                    <td data-label="Bahan Material">Kayu</td>
                                    <td data-label="Satuan">Meter</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 75.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">11</td>
                                    <td data-label="Bahan Material">Plafon PVC</td>
                                    <td data-label="Satuan">Meter Persegi</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 100.000</td>
                                </tr>
                                <tr>
                                    <td data-label="No">12</td>
                                    <td data-label="Bahan Material">Wiremesh</td>
                                    <td data-label="Satuan">Roll</td>
                                    <td data-label="Harga">Rp. </td>
                                    <td data-label="Harga" style="text-align: right"> 250.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- department-details-section -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
