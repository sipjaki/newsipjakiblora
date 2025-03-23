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
          {{-- <li>Documents</li> --}}
        </ul><!-- list-unstyled -->
      </div><!-- page-breadcrumbs -->
      <div class="page-banner-title">
        <h3 style="color: black; font-size:25px;">{{$title}}</h3>
      </div><!-- page-banner-title -->
    </div><!-- container -->
  </section><!--page-banner-->


  <section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
    <div class="container">
        <div class="row row-gutter-y-40">
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/asosiasi.png" class="img-fluid" alt="img-28" loading="lazy" style="width: 70%; padding:30px;">
                            <a href="/kecelakaankerjalist "></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Daftar Kecelakaan Kerja</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/kecelakaankerjalist">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->

            {{-- <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/pekerjaannontender.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/datajakon/paketpekerjaannontender"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Pekerjaan Non Tender</h4>
                        <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
                        <a href="/datajakon/paketpekerjaannontender">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4--> --}}

            {{-- <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/konsultantender.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/datajakon/paketkonsultasitender"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Konstruksi Konsultasi Tender</h4>
                        <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
                        <a href="/datajakon/paketkonsultasitender">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4--> --}}

            {{-- <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/konsultannontender.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/datajakon/paketkonsultasinontender"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Konstruksi Konsultasi Non Tender</h4>
                        <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
                        <a href="/datajakon/paketkonsultasinontender">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4--> --}}

            <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/agenda.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/404"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Data Statistik Kecelakaan Kerja</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/404">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->


        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
