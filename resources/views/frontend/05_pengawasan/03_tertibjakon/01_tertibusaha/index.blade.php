@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

<div class="page-wrapper">
  <section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
    <div class="container">
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
                            <img src="/assets/00_dokmasjaki/03_datajakon/daftar.png" class="img-fluid" alt="img-28" loading="lazy" style="width: 70%; padding:30px;" >
                            <a href="/tertibjasakonstruksilist"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Tertib Usaha</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/tertibjasakonstruksilist">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->
            <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/daftar.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/tertibjasakonstruksipemanfaatan"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Tertib Pemanfaatan</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/tertibjasakonstruksipemanfaatan">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->

            <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox" >
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/daftar.png"  class="img-fluid" alt="img-29"  loading="lazy" style="width:70%; padding:30px; ">
                            <a href="/tertibjasakonstruksipenyelenggaraan"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Tertib Penyelenggaraan</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/tertibjasakonstruksipenyelenggaraan">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Data</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->

            <div class="col-12 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/00_dokmasjaki/03_datajakon/statistika.png" class="img-fluid" alt="img-29"  loading="lazy" style="width: 70%; padding:30px;">
                            <a href="/statistiktertibjakonblora"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>Data Statistik Tertib Jakon</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/statistiktertibjakonblora">
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
