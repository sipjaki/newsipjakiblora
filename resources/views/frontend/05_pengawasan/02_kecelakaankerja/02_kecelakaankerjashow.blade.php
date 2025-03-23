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
                background: linear-gradient(to right, green, orange);
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
    <div class="container" style="background: #FFD100; border-radius:20px;">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >


	<section class="department-details-section" style="margin-top: -200px;" >
		<div class="container" style="margin-top: -100px;">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">
                        <div class="document-details">
							<div class="document-details-list">

                                <div class="centered-button" style="display: flex; justify-content: space-between; align-items: center; margin-top: 0px;">
                                    <!-- Tombol di kiri -->
                                    <button class="green-button">
                                        <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 10px;" loading="lazy">
                                        <i class="fas fa-file mr-2" style="margin-right: 5px;"></i>
                                        <span style="color: black;">{{$title}} : {{$data->namaperusahaan}}</span>
                                    </button>

                                    <!-- Tombol di kanan -->
                                    <a href="/kecelakaankerjalist">
                                        <button class="badgekembali">
                                            <i class="fas fa-arrow-circle-left" style="margin-right: 5px; color:red;"></i> KEMBALI
                                        </button>
                                    </a>
                                </div>


                                                        {{-- TABLE DATA  --}}
                                        </head>

                    <body>
                    <div class="table-wrapper" style="margin-top: 15px;">
                    <!-- Add this inside your HTML <head> for FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<table  id="datakeluar" class="fl-table" style="width: 100%; border-collapse: collapse" class="fl-table">
    <thead>

        <tr>
            <th style="text-align:center; color: white; width:50px; background-color: #2e7d32;">
                <!-- Add your icon here -->
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
                <i class="fas fa-briefcase" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nama Paket Pekerjaan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nama Paket Pekerjaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->namapaketpekerjaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-calendar" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Tahun -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Tahun
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->tahun}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-building" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nama Perusahaan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nama Perusahaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->namaperusahaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-users" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nama Tenaga Kerja -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nama Tenaga Kerja
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->namatenagakerja}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-map-marker-alt" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Lokasi Kecelakaan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Lokasi Kecelakaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->lokasikecelakaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-clock" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Waktu Kecelakaan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Waktu Kecelakaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{ \Carbon\Carbon::parse($data->waktukecelakaan)->isoFormat('D MMMM YYYY') }}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-info-circle" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Keterangan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Keterangan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->keterangan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-money-bill-wave" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Nilai Kerugian -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nilai Kerugian
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                Rp {{ number_format($data->nilaikerugian, 0, ',', '.') }}
            </td>
        </tr>


    </thead>
</table>
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
