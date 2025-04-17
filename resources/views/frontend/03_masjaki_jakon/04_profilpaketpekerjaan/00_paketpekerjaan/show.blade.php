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
    background: linear-gradient(to right, #ffd100, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                border: none !important;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
                text-transform: uppercase;
            }

            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }

            .green-button {
                background: linear-gradient(to right, green, green, #ffd100);
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
                                            </ul>



                                            <div class="display: flex; justify-content: space-between;" style="margin-top: -15px;">


                                                <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                                                    <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                                    <i class="fas fa-file mr-2" style="margin-right:5px;"></i> INFORMASI {{$title}} : <span style="font-weight: bold;">{{$data->namapekerjaan}}</span>

                                                </button>


                                            </div>

                                            <form action="#" class="contact-form donation" method="post">
                                                <div class="row row-gutter-10">
                                                    <div class="col-lg-4">
                                                        <h6><i class="fas fa-briefcase mr-2" style="margin-right: 5px;"></i>Jenis Pekerjaan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->profiljenispekerjaan->jenispekerjaan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-8">
                                                        <h6><i class="fas fa-cogs mr-2" style="margin-right: 5px;"></i>Nama Pekerjaan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->namapekerjaan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-calendar mr-2" style="margin-right: 5px;"></i>Tahun Pelaksanaan</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->tahunpilihan->tahunpilihan}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-3 -->

                                                    <div class="col-lg-6">
                                                        <h6><i class="fas fa-building mr-2" style="margin-right: 5px;"></i>Penyedia</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->cvptpenyedia}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-12 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-id-card mr-2" style="margin-right: 5px;"></i>NIB</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->nib}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-dollar-sign mr-2" style="margin-right: 5px;"></i>Nilai Kontrak</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="Rp. {{ number_format($data->nilaikontrak, 0, ',', '.') }}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-file-signature mr-2" style="margin-right: 5px;"></i>Kontrak</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->karakteristikkontrak}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-play mr-2" style="margin-right: 5px;"></i>Mulai</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->bulanmulai}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-3">
                                                        <h6><i class="fas fa-stop mr-2" style="margin-right: 5px;"></i>Selesai</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->bulanselesai}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->

                                                    <div class="col-lg-12">
                                                        <h6><i class="fas fa-calendar-check mr-2" style="margin-right: 5px;"></i>Dinas</h6>
                                                        <input type="text" id="fname" class="input-text" placeholder="{{$data->dinas}}" name="fname" aria-required="true" readonly>
                                                    </div><!-- col-lg-6 -->
                                                </div><!-- row row-gutter-10 -->



                                            </form><!-- contact-form -->

                                            <div style="display: flex; align-items: right;">
                                                <a href="javascript:history.back()" style="background: white;">
                                                    <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                                        <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 15px; color:red;"></i> KEMBALI
                                                    </button>
                                                </a>
                                            </div>


                                        </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->

                                </div><!-- row -->
                            </div><!-- container -->
                        </section><!-- donate-section -->

                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


<style>
.progress-cards {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 20px 0;
    flex-wrap: wrap;
    position: relative;
}

.progress-card {
    position: relative;
    width: 18%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.progress-step {
    position: relative;
}

.circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #e0e0e0;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    font-weight: bold;
    font-size: 18px;
}

.line {
    width: 100%;
    height: 3px;
    background-color: #e0e0e0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    animation: animateLine 1.5s ease-in-out forwards;
}

.completed .circle {
    background-color: green;
}

.in-progress .circle {
    background-color: orange;
}

.step-title {
    margin-top: 10px;
    font-weight: bold;
}

.step-status {
    margin-top: 5px;
    font-size: 14px;
    color: #777;
}

.completed .line {
    background-color: green;
    opacity: 1;
}

.in-progress .line {
    background-color: orange;
    opacity: 1;
}

.progress-card:last-child .line {
    display: none;
}

@keyframes animateLine {
    0% {
        width: 0;
        opacity: 1;
    }
    100% {
        width: 100%;
        opacity: 1;
    }
}

/* Warna untuk status yang berbeda */
.progress-step.completed .circle {
    background-color: green;
}

.progress-step.in-progress .circle {
    background-color: orange;
}

.progress-step.not-started .circle {
    background-color: #e0e0e0; /* Abu-abu */
}

.progress-step.cancelled .circle {
    background-color: red;
}

.line.completed {
    background-color: green;
}

.line.in-progress {
    background-color: orange;
}

.line.not-started {
    background-color: #e0e0e0; /* Abu-abu */
}

.line.cancelled {
    background-color: red;
}


</style>


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->




{{-- -------------------------- --}}





                    @include('frontend.00_approve.01_cssterpisah.footer1')
                    @include('frontend.00_approve.01_cssterpisah.footer')
