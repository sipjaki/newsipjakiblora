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
background: white;
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


            .badgekembali {
                background: linear-gradient(to right, #ffd100, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .green-button {
                background: linear-gradient(to right, white, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                border: none !important;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .green-button:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .bagdewa {
    background: linear-gradient(to right, white, white);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    border: 1px solid black !important; /* Menambahkan garis luar hitam 1px */
    display: inline-block;
    font-size: 12px;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

            .bagdewa:hover {
                background-color: lightblue;
                color: white;
                background: lightblue;
            }
</style>


{{-- =========================================================== --}}

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

{{-- -------------------------- --}}


<section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
    <div class="container">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >


	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container" style="margin-top: -100px;">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">
                        <div class="document-details">
							<div class="document-details-list">
                                <div class="button-container" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                                    <!-- Tombol di Kiri -->
                                    <button class="green-button">
                                        <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 10px; " loading="lazy">
                                        <i class="fas fa-file mr-2" style="margin-right: 5px;"></i>
                                        <span style="color: black; text-transform:uppercase">{{$title}} : {{$data->namabadanusaha}}</span>
                                    </button>

                                    <a href="https://wa.me/081321455855" target="_blank" style="text-decoration: none; margin-left: 700px; margin-right:10px;">
                                        <button class="bagdewa">
                                            <i class="fab fa-whatsapp" style="color: green; font-size:24px;"></i>
                                        </button>
                                    </a>

                                    <!-- Tombol di Kanan -->
                                    <a href="javascript:window.history.back()" style="text-decoration: none;">
                                        <button class="badgekembali">
                                            <i class="fas fa-arrow-circle-left" style="margin-right: 8px; color:red;"></i> KEMBALI
                                        </button>
                                    </a>
                                </div>


                                <div style="text-align: center; margin-top: 20px;">
                                    <img src="{{ asset('storage/' . $data->fototokobangunan) }}" alt="Foto Toko Bangunan" style="width: 350px; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 6px 12px rgba(0,0,0,0.2);">
                                    <p style="margin-top: 10px; font-weight: 600; color: black; font-family: 'Poppins', sans-serif; font-size: 18px;">
                                        Foto Badan Usaha Peralatan Bangunan
                                    </p>
                                </div>


                    <div class="table-wrapper" style="margin-top: 15px;">
                    <!-- Add this inside your HTML <head> for FontAwesome -->
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

                                <table  id="datakeluar" class="fl-table" style="width: 100%; border-collapse: collapse" class="fl-table">
                                    <thead>

                                        <tr>
                                            <th style="text-align:center; color: white; width:50px; background-color: #2e7d32;">
                                                <i class="fas fa-info-circle"></i>
                                            </th>
                                            <th colspan="11" style="text-align:left; color: white; background-color: #2e7d32; padding-left: 10px; width:300px;">
                                                Informasi
                                            </th>
                                            <th colspan="1" style="text-align:center; color: white; background-color: #2e7d32; width:25px;">:</th>
                                            <td colspan="12" style="text-align:left; background-color: #2e7d32; padding-left: 10px; color: white; width:1000px;">
                                                Keterangan
                                            </td>
                                        </tr>


                                        <tr>
                                            <th style="text-align:center; color: black; width:50px; background-color: white;">
                                                <i class="fas fa-map-marker-alt" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kecamatan -->
                                            </th>
                                            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                                                Kecamatan
                                            </th>
                                            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
                                            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                                                {{$data->kecamatanblora->kecamatanblora}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th style="text-align:center; color: black; width:50px; background-color: white;">
                                                <i class="fas fa-building" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nama Badan Usaha -->
                                            </th>
                                            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                                                Nama Badan Usaha
                                            </th>
                                            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
                                            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                                                {{$data->namabadanusaha}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th style="text-align:center; color: black; width:50px; background-color: white;">
                                                <i class="fas fa-id-card" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nomor Induk Berusaha -->
                                            </th>
                                            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                                                Nomor Induk Berusaha
                                            </th>
                                            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
                                            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                                                {{$data->nib}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th style="text-align:center; color: black; width:50px; background-color: white;">
                                                <i class="fas fa-phone-alt" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk No Telepon -->
                                            </th>
                                            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                                                No Telepon
                                            </th>
                                            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
                                            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                                                {{$data->notelepon}}
                                            </td>
                                        </tr>

                                    </thead>

                                </table>



<div class="table-wrapper">
    <table class="fl-table">
        <thead style="background: #ffd100">
            <tr>
                {{-- <th style="text-align:center" >No</th> --}}
                <th style="text-align:center" style="color: white" style="width: 25px" >No</th>
                <th style="text-align:center" style="color: white" style="width: 600px;"> Foto Peralatan/Alat Berat/Lainnya</th>
                <th style="text-align:center" style="color: white" style="width: 600px;"> Nama Peralatan</th>
                <th style="text-align:center" style="color: white" style="width: 600px;"> Rp.</th>
                <th style="text-align:center" style="color: white" style="width: 400px;"> Harga</th>
                <th style="text-align:center" style="color: white" style="width: 400px;"> Spesifikasi</th>
            </tr>
        </thead>
        <tbody>

        {{-- @php
            // Pastikan $data tidak null atau tidak terdefinisi
            $start = ($data && $data->currentPage()) ? ($data->currentPage() - 1) * $data->perPage() + 1 : 1;
        @endphp --}}

        {{-- @foreach ($subData as $item) --}}

        <tr>
            <td style="text-align: center; vertical-align: middle;">1</td>
            <td style="text-align: center">
                <img src="{{ asset('storage/' . $data->fototokobangunan) }}" alt="Foto Toko Bangunan" width="100">
            </td>
            <td style="text-align: center; vertical-align: middle;">Semen</td>
            <td style="text-align: center">Rp.</td>
            <td style="text-align: center; vertical-align: middle;">50.000</td>
            <td style="text-align: center; vertical-align: middle;">Keterangan Spesifikasi</td>
        </tr>

        <tr>
            <td style="text-align: center; vertical-align: middle;">1</td>
            <td style="text-align: center">
                <img src="{{ asset('storage/' . $data->fototokobangunan) }}" alt="Foto Toko Bangunan" width="100">
            </td>
            <td style="text-align: center; vertical-align: middle;">Paku</td>
            <td style="text-align: center">Rp.</td>
            <td style="text-align: center; vertical-align: middle;">5.000</td>
            <td style="text-align: center; vertical-align: middle;">Keterangan Spesifikasi</td>
        </tr>

        <tr>
            <td style="text-align: center; vertical-align: middle;">1</td>
            <td style="text-align: center">
                <img src="{{ asset('storage/' . $data->fototokobangunan) }}" alt="Foto Toko Bangunan" width="100">
            </td>
            <td style="text-align: center; vertical-align: middle;">Cat</td>
            <td style="text-align: center">Rp.</td>
            <td style="text-align: center; vertical-align: middle;">125.000</td>
            <td style="text-align: center; vertical-align: middle;">Keterangan Spesifikasi</td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle;">1</td>
            <td style="text-align: center">
                <img src="{{ asset('storage/' . $data->fototokobangunan) }}" alt="Foto Toko Bangunan" width="100">
            </td>
            <td style="text-align: center; vertical-align: middle;">Pasir</td>
            <td style="text-align: center">Rp.</td>
            <td style="text-align: center; vertical-align: middle;">345.000</td>
            <td style="text-align: center; vertical-align: middle;">Keterangan Spesifikasi</td>
        </tr>
        {{-- @endforeach --}}

        </tbody>
    </table>
    </div>




                    </div>
                                                </div><!-- document-details-list -->

                                            </div><!-- document-details -->
                                        </div><!-- document-details-inner -->


                                    </div><!-- col-lg-8 -->
                                </div><!-- row -->
                            </div><!-- container -->
                        </div><!--page-wrapper-->
                    </div><!--page-wrapper-->
                </div><!--page-wrapper-->
            </div><!--page-wrapper-->
        </div><!--page-wrapper-->
    </section><!-- department-details-section -->





                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


{{-- -------------------------- --}}





                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
