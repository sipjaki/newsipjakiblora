@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

	<section class="portfolio-details">
		<div class="container" style="background-image: url(assets/00_dokmasjaki/03_datajakon/putihbaru.jpg);">
			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}

            @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none; margin-bottom:25px;"></iframe>
			<div class="portfolio-details-content">
                <div class="portfolio-details-content-title">
                    <h3>{!! $item->judul !!}</h3>
				</div><!-- portfolio-details-content-title -->
				<div class="portfolio-details-content-text">
                    <p style="text-align: justify" >
                {!! $item->keterangan !!}
                    </p>
                </div><!-- portfolio-details-content-text -->
			</div><!-- portfolio-details-content -->
            @endforeach
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
