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
                background: linear-gradient(to right, green, green);
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
                background: linear-gradient(to right, navy, navy);
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

                        <section class="donate-section" style="background: linear-gradient(to bottom, green, #FFD100, white);">
                            <div class="container">
                                <div class="row row-gutter-30">
                                    <div class="col-lg-12">
                                                                            </div><!-- col-lg-12 -->
                                    <div class="col-xxl-12 col-lg-12">
                                        <div class="donate-box-inner" style="margin-top: -120px;">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}
                                                <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                                    <!-- Tombol dan kolom pencarian di kanan -->
                                                    <div style="display: flex; align-items: center;">

                                                        <a href="/datajakon/skktenagakerjablora" style="background: white;">
                                                            <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                                <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 15px;"></i> KEMBALI
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>

                                                </ul>

                                            <div class="centered-button" style="margin-top: -15px;">
                                                <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                                    <i class="fas fa-file mr-2" style="margin-right:5px;"></i> INFORMASI {{$title}} : {{$data->nama}}
                                                </button>

                                            </div>
                                            <form action="#" class="contact-form donation" method="post">
                                                <div class="row row-gutter-10">
                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-user mr-2" style="margin-right: 5px;"></i>Nama Lengkap</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nama}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-map-marker-alt mr-2" style="margin-right: 5px;"></i>Alamat</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->alamat}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-school mr-2" style="margin-right: 5px;"></i>Sekolah/Universitas</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->namasekolah->namasekolah}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-graduation-cap mr-2" style="margin-right: 5px;"></i>Jenjang Pendidikan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->jenjangpendidikan->jenjangpendidikan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-12 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-book mr-2" style="margin-right: 5px;"></i>Jurusan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->jurusan->jurusan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-calendar-alt mr-2" style="margin-right: 5px;"></i>Tahun Lulus</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tahunlulus}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-briefcase mr-2" style="margin-right: 5px;"></i>Jabatan Kerja</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->jabatankerja->jabatankerja}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-cogs mr-2" style="margin-right: 5px;"></i>Jenjang</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->jenjang->jenjang}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-pencil-alt mr-2" style="margin-right: 5px;"></i>LPS Penerbit</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->lpspenerbit->lpspenerbit}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-4">
                                                        <h6><i class="fas fa-calendar-check mr-2" style="margin-right: 5px;"></i>Tanggal Terbit</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tanggalterbit}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-4">
                                                        <h6><i class="fas fa-calendar-times mr-2" style="margin-right: 5px;"></i>Tanggal Habis</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tanggalhabis}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-4">
                                                        <h6><i class="fas fa-circle mr-2" style="margin-right: 5px;"></i>Status</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->statusterbit}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                                                </div><!-- row row-gutter-10 -->
                                            </form><!-- contact-form -->
                                        </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->

                                </div><!-- row -->
                            </div><!-- container -->
                        </section><!-- donate-section -->



                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


{{-- -------------------------- --}}





                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
