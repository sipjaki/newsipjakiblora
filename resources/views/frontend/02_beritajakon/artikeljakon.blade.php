@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

	<section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
		<div class="container"
        style="
        background: white;
        max-width: 95%;
        margin: 30px auto;
        padding: 20px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 10;"
        >
			<div class="row">
				<div class="col-lg-8">

                    @foreach ($data->skip(0)->take(1) as $item)
                    <div class="news-details-box-image">
                        <div class="news-details-box-image-inner row">
                            <div class="col-md-12">
                                <img src="{{ asset('storage/' . $item->foto1) }}" class="img-fluid" alt="img-193" style="width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8 d-flex align-items-center justify-content-center">
                                <a href="#" class="news-details-box-date">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>

                    @endforeach

                </div><!-- col-lg-8 -->

				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar-form-content">

						</div><!-- sidebar-form-content -->
						<div class="sidebar-widget sidebar-widget-recent-post">
							<h4>Daftar Artikel Jakon Blora</h4>

                            @foreach ($data->skip(1)->take(7) as $item)

                            <div class="sidebar-recent-post">
								<div class="sidebar-recent-post-img">
                                    <img src="{{ asset('storage/' . $item->foto1) }}" alt="Gambar Pelatihan SKK Blora" width="200px" loading="lazy">
                                </div><!-- sidebar-recent-post-img -->
								<div class="sidebar-recent-post-content">
                                    <div class="sidebar-meta">
										<div class="sidebar-post-title">
											<h5><a href="/artikeljakon/{{$item->judul}}">{{$item->judul}}</a></h5>
										</div><!-- sidebar-post-title -->
									</div><!-- sidebar-meta -->
								</div><!-- sidebar-recent-post-content -->
							</div><!-- sidebar-recent-post -->


                            @endforeach


                        </div><!-- sidebar-widget sidebar-widget-recent-post -->

                        {{-- <div class="sidebar-widget sidebar-widget-recent-category">
							<div class="sidebar-widget-recent-category-box">
								<h4 class="section-title text-left">Categories</h4>
								<ul class="list-unstyled">
									<li><a href="news-details.html">City News<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Community<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Culture <i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Devlopement<i class="fa-solid fa-chevron-right"></i></a></li>
									<li><a href="news-details.html">Government<i class="fa-solid fa-chevron-right"></i></a></li>
								</ul><!-- list-unstyled -->
							</div><!-- sidebar-widget-recent-category-box -->
						</div><!-- sidebar-widget-one sidebar-widget-recent-category --> --}}
						{{-- <div class="sidebar-widget sidebar-widget-tag">
							<h4>Tags</h4>
							<div class="sidebar-widget-tag-inner">
								<a href="news-details.html">Culture</a>
								<a href="news-details.html">Government</a>
								<a href="news-details.html">City</a>
								<a href="news-details.html">Development</a>
								<a href="news-details.html">Life</a>
							</div><!-- sidebar-widget-tag-inner -->
						</div><!-- sidebar-widget sidebar-widget-tag --> --}}
					</div><!-- sidebar -->
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!--causes-one-section-->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
