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

            @foreach ($data as $item )

            <div class="col-6 col-lg-3 col-xl-3">
                <div class="service-two-card">
                    <div class="service-two-imgbox">
                        <div class="service-two-image" style="display: flex; justify-content: center;">
                            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-28" loading="lazy" style="width: 50%; padding:30px;">
                            <a href="/tokobangunanblora/{{$item->kecamatanblora}}"></a>
                        </div><!-- service-two-image -->
                    </div><!-- service-two-imgbox -->
                    <div class="service-two-card-content">
                        <h4>{{$item->kecamatanblora}}</h4>
                        {{-- <p>Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p> --}}
                        <a href="/tokobangunanblora/{{$item->kecamatanblora}}">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            <span>Lihat Toko Bangunan</span>
                        </a>
                    </div><!--service-two-card-content-->
                </div><!--service-two-card-->
            </div><!--col-12 col-lg-4 col-xl-4-->

            @endforeach

        </div><!-- row -->
    </div><!-- container -->
</section><!-- service-two-section -->


</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
