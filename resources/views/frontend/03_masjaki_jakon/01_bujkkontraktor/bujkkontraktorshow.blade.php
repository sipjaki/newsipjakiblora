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
background: #ffd100;
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

            .menusub-button {
                background: linear-gradient(to right, #ffd100, #FFD100);
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
            .menusub-button:hover {
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

                        <section class="donate-section" style="background: linear-gradient(to bottom, green, #FFD100, white);">
                            <div class="container">
                                <div class="row row-gutter-30">
                                    <div class="col-lg-12">
                                                                            </div><!-- col-lg-12 -->
                                    <div class="col-xxl-12 col-lg-12">
                                        <div class="donate-box-inner" style="margin-top: -85px;">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}
                                                <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                                    {{-- <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"> --}}
                                                    <!-- Tombol dan kolom pencarian di kanan -->
                                                        <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                                            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                                            <i class="fas fa-file mr-2" style="margin-right:5px;"></i> <span style="color: black;">INFORMASI BUJK KONSTRUKSI : {{$data->namalengkap}}</span>
                                                        </button>
                                                        <a href="/datajakon/bujkkontraktor" style="background: white;">
                                                            <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                                <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 15px; color:red;"></i> <span style="color: black;">KEMBALI</span>
                                                            </button>
                                                        </a>


                                                </div>

                                                </ul>

                                            <div class="centered-button" style="margin-top: -15px;">

                                            </div>
                                            <form action="#" class="contact-form donation" method="post">
                                                <div class="row row-gutter-10">
                                                    <div class="col-lg-8">
                                                        <h6><i class="fas fa-user mr-2" style="margin-right: 5px;"></i>Nama Pemilik </h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->namalengkap}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-4">
                                                        <h6><i class="fas fa-phone-alt mr-2" style="margin-right: 5px;"></i>No Telepon</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_telepon}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->


                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i>Alamat</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->alamat}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-12 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-envelope mr-2" style="margin-right: 5px;"></i>Email</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->email}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-id-card mr-2" style="margin-right: 5px;"></i>Nomor Induk Berusaha</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nib}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    {{-- <div class="col-lg-6">
                                                        <h6><i class="fas fa-user-tie mr-2" style="margin-right: 5px;"></i>Penanggung Jawab Umum</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->pju}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-file-alt mr-2" style="margin-right: 5px;"></i>No Akte</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_akte}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-calendar mr-2" style="margin-right: 5px;"></i>Tanggal</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tanggal}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-pencil-alt mr-2" style="margin-right: 5px;"></i>Notaris</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nama_notaris}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-check-circle mr-2" style="margin-right: 5px;"></i>No Pengesahan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->no_pengesahan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 --> --}}
                                                                                </div><!-- row row-gutter-10 -->
                                            </form><!-- contact-form -->
                                        </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->

                                </div><!-- row -->
                            </div><!-- container -->
                        </section><!-- donate-section -->



	<section class="department-details-section" style="margin-top: -200px;">
		<div class="container">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">


                        <div class="document-details">
							<div class="document-details-list">
                                <div class="centered-button" style="margin-top: -15px">
                                    <button class="menusub-button" style="margin-bottom:10px; text-transform:uppercase">
                                        <i class="fas fa-building mr-2" style="margin-right:5px;"></i><span style="color: black;">SUB KLASIFIKASI LAYANAN : {{$data->namalengkap}}</span>
                                    </button>

                                </div>


                                                        {{-- TABLE DATA  --}}
                                        </head>

                    <body>
                    <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                {{-- <th style="text-align:center" >No</th> --}}
                                <th style="text-align:center" style="color: black" >No</th>
                                {{-- <th style="text-align:center" style="color: black">Nama Pengurus</th> --}}
                                <th style="text-align:center" style="color: black" >Sub Klasifikasi Layanan</th>
                                <th style="text-align:center" style="color: black" >Kode</th>
                                <th style="text-align:center" style="color: black" >Kualifikasi</th>
                                <th style="text-align:center" style="color: black">Penerbit</th>
                                <th style="text-align:center" style="color: black">Tanggal Terbit</th>
                                <th style="text-align:center" style="color: black">Masa Berlaku</th>
                                {{-- <th style="text-align:center" style="color: black">Nama PSJK</th> --}}
                                {{-- <th style="text-align:center" style="color: black">Sub Kualifikasi Badan Usaha</th> --}}
                                </tr>
                        </thead>
                        <tbody>

                        {{-- @php
                            // Pastikan $data tidak null atau tidak terdefinisi
                            $start = ($data && $data->currentPage()) ? ($data->currentPage() - 1) * $data->perPage() + 1 : 1;
                        @endphp --}}

                        @foreach ($subData as $item)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                            {{-- <td>{{$item->nama_pengurus}}</td> --}}
                            <td>{{$item->sub_klasifikasi_layanan}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->kualifikasi}}</td>
                            <td>{{$item->penerbit}}</td>
                            <td>{{$item->tanggal_terbit}}</td>
                            <td>{{$item->masa_berlaku}}</td>
                            {{-- <td>{{$item->nama_psjk}}</td> --}}
                            {{-- <td>{{$item->sub_kualifikasi_bu}}</td> --}}
                        </tr>
                        @endforeach

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
