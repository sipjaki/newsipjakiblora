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
          <li>Documents</li>
        </ul><!-- list-unstyled -->
      </div><!-- page-breadcrumbs -->
      <div class="page-banner-title">
        <h3 style="color: black;">{{$title}}</h3>
      </div><!-- page-banner-title -->
    </div><!-- container -->
  </section><!--page-banner-->
  <section class="document-section">
    <div class="container">
      <ul class="nav nav-pills" id="pills-tab" role="tablist">

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Pemerintah</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Presiden</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Menteri</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Keputusan Menteri</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Surat Edaran Menteri</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Referensi</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Daerah</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Gubernur</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Peraturan Walikota/Bupati</button>
        </li>

        <li class="nav-item" role="presentation" style="margin-top: 5px;">
          <button class="nav-link" id="pills-health-tab" data-bs-toggle="pill" data-bs-target="#pills-health" type="button" role="tab" aria-controls="pills-health" aria-selected="false"><i class="flaticon-police-badge-1"></i>Surat Keputusan</button>
        </li>

      </ul><!-- nav nav-pills -->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          <div class="row row-gutter-30">


@foreach ($data as $item )

<div class="col-xxl-4 col-xl-6">
    <div class="service-three-card">
        <div class="service-three-icon">
        <i class="flaticon-pdf"></i>
            </div><!-- service-three-icon -->
                <div class="service-three-card-content">
                            <h3><a href="/peraturan/menteri/{{$item->judul}}">{{$item->judul}}</a></h3>
                            <a href="/peraturan/menteri/{{$item->judul}}">
                            <p>{{$title}}</p>
                            <div class="service-three-detail">
                                    <span>Show Here</span><i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                                <i class="flaticon-pdf"></i>
                            </div><!-- service-three-detail -->
                        </div><!-- service-three-card-content -->
                    </div><!-- service-three-card -->
                </div><!-- col-xxl-4 col-xl-6 -->


@endforeach

          </div><!-- row -->
        </div><!-- tab-pane -->
        @include('frontend.00_approve.01_cssterpisah.paginator')
      </div><!-- tab-content -->
    </div><!-- container -->
  </section><!-- document-section  -->
</div><!--page-wrapper-->


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
