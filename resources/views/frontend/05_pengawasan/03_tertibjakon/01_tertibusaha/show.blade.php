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
                background: linear-gradient(to right, green, #ffd100);
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


	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container" style="margin-top: -100px;">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">
                        <div class="document-details">
							<div class="document-details-list">

                                <div class="centered-button" style="display: flex; justify-content: space-between; align-items: center; margin-top: 15px;">
                                    <!-- Tombol di kiri -->
                                    <button class="green-button">
                                        <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 10px;" loading="lazy">
                                        <i class="fas fa-file mr-2" style="margin-right: 5px;"></i>
                                        <span style="color: black;">{{$title}} : {{$data->namabadanusaha}}</span>
                                    </button>

                                    <!-- Tombol di kanan -->
                                    <a href="/tertibjasakonstruksilist">
                                        <button class="badgekembali">
                                            <i class="fas fa-arrow-circle-left" style="margin-right: 5px; color:red;"></i> KEMBALI
                                        </button>
                                    </a>
                                </div>



                                                        {{-- TABLE DATA  --}}
                                        </head>

                    <body>
                    <div class="table-wrapper" style="margin-top: 20px;">
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
        <i class="fas fa-clipboard-list" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Status Penyedia -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Status Penyedia
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        {{$data->penyediastatustertibjakon->penyedia}}
    </td>
</tr>

        <tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-hammer" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Status Penyedia -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Nama Pekerjaan
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        {{$data->namapekerjaan}}
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
        <i class="fas fa-user-tie" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk PJBU -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        PJBU
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        {{$data->pjbu}}
    </td>
</tr>
{{--
<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-hard-hat" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Konstruksi -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Konstruksi
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Jenis ->
        <button class="btn {{ $data->sesuai_jenis == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->sesuai_jenis}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-hard-hat" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Konstruksi Sifat -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Konstruksi - Sifat
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Sifat ->
        <button class="btn {{ $data->sesuai_sifat == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->sesuai_sifat}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-hard-hat" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Konstruksi Kualifikasi -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Konstruksi - Kualifikasi
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Kualifikasi ->
        <button class="btn {{ $data->sesuai_klasifikasi == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->sesuai_klasifikasi}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-hard-hat" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Konstruksi Layanan -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Konstruksi - Layanan
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Layanan ->
        <button class="btn {{ $data->sesuai_layanan == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->sesuai_layanan}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-cogs" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Usaha Pasar -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Usaha - Pasar
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Pasar ->
        <button class="btn {{ $data->segmentasipasar_bentuk == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->segmentasipasar_bentuk}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-cogs" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Kesesuaian Kegiatan Usaha Kualifikasi -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Kesesuaian Kegiatan Usaha - Kualifikasi
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Kualifikasi ->
        <button class="btn {{ $data->segmentasipasar_kualifikasi == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->segmentasipasar_kualifikasi}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-certificate" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Pemenuhan Persyaratan SBU -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Pemenuhan Persyaratan - SBU
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        SBU ->
        <button class="btn {{ $data->syarat_SBU == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->syarat_SBU}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-certificate" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Pemenuhan Persyaratan NIB -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Pemenuhan Persyaratan - NIB
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        NIB ->
        <button class="btn {{ $data->syarat_NIB == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->syarat_NIB}}
        </button>
    </td>
</tr>

<tr>
    <th style="text-align:center; color: black; width:50px; background-color: white;">
        <i class="fas fa-wrench" style="font-size:20px; margin-right:8px;"></i> <!-- Ikon untuk Pelaksanaan Pengembangan Status -->
    </th>
    <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
        Pelaksanaan Pengembangan
    </th>
    <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
    <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
        Status ->
        <button class="btn {{ $data->pelaksanaanpengembangan == 'TERTIB' ? 'btn-success' : 'btn-danger' }}">
            {{$data->pelaksanaanpengembangan}}
        </button>
    </td>
</tr> --}}

    </thead>
</table>

<br>

<style>
    .sifatjakon {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Poppins', sans-serif; /* Font modern pemerintah */
        text-align: center;
        /* font-family: Arial, sans-serif; */
    }

    .sifatjakon th, .sifatjakon td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    .sifatjakon thead {
        background-color: green; /* Hijau */
        color: white;
        border-radius: 20px;
    }

    .sifatjakon th[colspan] {
        background-color: green; /* Hijau tua */
    }

    .sifatjakon tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Abu-abu muda */
    }

    .sifatjakon tbody tr:hover {
        background-color: #c8e6c9; /* Hijau muda saat hover */
    }

    .sifatjakon td[rowspan] {
        background-color: white; /* Kuning */
        font-weight: bold;
    }
</style>

<table class="sifatjakon">
<thead>
    <tr>
        <th colspan="4">Kesesuaian Kegiatan Konstruksi</th>
        <th colspan="2">Kesesuaian Jasa Konstruksi & Segmentasi Pasar Jasa Konstruksi</th>
        <th colspan="2">Pemenuhan Syarat Usaha</th>
        <th rowspan="2">Pelaksanaan Pengembangan Usaha
        </th>
    </tr>
    <tr>
        <th>Jenis</th>
        <th>Sifat</th>
        <th>Klasifikasi</th>
        <th>Layanan</th>
        <th>Bentuk</th>
        <th>Kualifikasi</th>
        <th>SBU</th>
        <th>NIB</th>
    </tr>
</thead>
<tbody>
    <tr>

        @php
        $kesesuaian = $data->surattertibjakonusaha1->kesesuaian ?? 'Surat Belum Di Buat';
        $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
        $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
        $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
    @endphp

    <td style="text-align: center;">
        <button
            style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
        >
            <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
            {{ $tertibStatus }}
        </button>
    </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->sesuai_sifat == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->sesuai_sifat }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->sesuai_klasifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->sesuai_klasifikasi }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->sesuai_layanan == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->sesuai_layanan }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->segmentasipasar_bentuk == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->segmentasipasar_bentuk }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->segmentasipasar_kualifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->segmentasipasar_kualifikasi }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->syarat_SBU == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->syarat_SBU }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->syarat_NIB == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->syarat_NIB }}
            </button>
        </td>

        <td>
            <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer;
                background-color: {{ $data->pelaksanaanpengembangan == 'BELUM TERTIB' ? 'red' : 'blue' }};">
                {{ $data->pelaksanaanpengembangan }}
            </button>
        </td>

        {{-- <td>{{$data->sesuai_jenis}}</td> --}}
        {{-- <td>{{$data->sesuai_sifat}}</td> --}}
        {{-- <td>{{$data->sesuai_klasifikasi}}</td> --}}
        {{-- <td>{{$data->sesuai_layanan}}</td> --}}
        {{-- <td>{{$data->segmentasipasar_bentuk}}</td> --}}
        {{-- <td>{{$data->segmentasipasar_kualifikasi}}</td> --}}
        {{-- <td>{{$data->syarat_SBU}}</td> --}}
        {{-- <td>{{$data->syarat_NIB}}</td> --}}
        {{-- <td>{{$data->pelaksanaanpengembangan}}</td> --}}
        {{-- <td>1</td> --}}
    </tr>

</tbody>
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
