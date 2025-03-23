<style>
    .download-btn {
            background-color: #001f3f;
            color: white;
            border: 2px solid #001f3f;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Efek Hover */
        .download-btn:hover {
            background-color: white !important;
            color: #001f3f !important;
            border: 2px solid #001f3f !important;
        }
</style>

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
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="news-details-box-image">
						<div class="news-details-box-image-inner">
                            <img src="{{ asset('storage/' . $data->foto) }}" class="img-fluid" alt="img-193">

                            <a href="news-details.html" class="news-details-box-date">{{ \Carbon\Carbon::parse($data->waktupelaksanaan)->translatedFormat('l, d F Y') }}
                            </a>
						</div><!-- news-details-box-image-inner -->
					</div><!-- news-details-box-image -->

					{{-- <div class="news-details-meta-box">
						<div class="news-details-meta-box-inner">
							<span class="author">
								by<a href="news-details.html">Admin</a>pdatab
							</span><!-- author -->
							<span class="comment">
								<a href="news-details.html">02 Comments</a>
							</span><!-- comment -->
						</div><!-- news-details-meta-box-inner -->
					</div><!-- news-details-meta-box --> --}}
<br><br>
                    <div class="news-details-content-box" style="margin-left: 25px;">
						<h4>
                                {{$data->namakegiatan}}
                        </h4>

                        <p>{{$data->isiagenda}}
                        </p>



                    </div><!-- /.news-details-content-box -->



                    {{-- <div class="news-details-comment-form">
						<h3>Leave a Comment</h3>
						<form class="contact-form contact-form-validated" action="assets/inc/sendemail.php" method="post">
							<div class="row row-gutter-10">
								<div class="col-12 col-lg-6">
									<input type="text" class="input-text" placeholder="Your name" name="name" aria-required="true">
								</div><!-- col-12 col-lg-6 -->
								<div class="col-12 col-lg-6">
									<input type="email"  class="input-text" placeholder="Email address" name="email" aria-required="true">
								</div><!-- col-12 col-lg-6 -->
								<div class="col-12 col-lg-12">
									<textarea name="message" placeholder="Write a message" class="input-text " aria-required="true"></textarea>
								</div><!-- col-12 col-lg-12 -->
								<div class="col-12 col-lg-12">
									<button class="btn btn-primary">Submit Comment</button>
								</div><!-- col-12 col-lg-12 -->
							</div><!-- row -->
						</form><!-- contact-form -->
					</div><!-- news-details-comment-form --> --}}


                </div><!-- col-lg-8 -->
				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar-form-content">
							<div class="sidebar__item sidebar__item--search">
                                <div style="display: flex; justify-content: center; gap: 20px; padding: 20px;">
                                    <a href="/agendapembinaan">
                                        <button class="download-btn" style="padding: 12px 24px; font-size: 16px; border-radius: 8px;">
                                            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Kembali
                                        </button>
                                    </a>

                                    <a href="/404">
                                        <button class="download-btn" style="padding: 12px 24px; font-size: 16px; border-radius: 8px;">
                                            <i class="fas fa-file-alt" style="margin-right: 8px;"></i> Daftar
                                        </button>
                                    </a>
                                </div>


							</div><!-- sidebar__item -->
						</div><!-- sidebar-form-content -->

						<div class="sidebar-widget sidebar-widget-recent-post">

    <h4><i class="fas fa-building"></i> Penyelenggara</h4>
    <div class="sidebar-recent-post">
        <div class="sidebar-recent-post-content">
            <div class="sidebar-meta">
                <div class="sidebar-meta-item">
                    <div class="sidebar-meta-icon">
                        <p style="font-size:18px;">{{$data->penyelenggara}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><i class="fas fa-calendar-alt"></i> Waktu Pelaksanaan</h4>
    <div class="sidebar-recent-post">
        <div class="sidebar-recent-post-content">
            <div class="sidebar-meta">
                <div class="sidebar-meta-item">
                    <div class="sidebar-meta-icon">
                        <p style="font-size:18px;">{{ \Carbon\Carbon::parse($data->waktupelaksanaan)->translatedFormat('d F Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><i class="fas fa-map-marker-alt"></i> Lokasi</h4>
    <div class="sidebar-recent-post">
        <div class="sidebar-recent-post-content">
            <div class="sidebar-meta">
                <div class="sidebar-meta-item">
                    <div class="sidebar-meta-icon">
                        <p style="font-size:18px;">{{$data->lokasi}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><i class="fas fa-users"></i> Jumlah Peserta</h4>
    <div class="sidebar-recent-post">
        <div class="sidebar-recent-post-content">
            <div class="sidebar-meta">
                <div class="sidebar-meta-item">
                    <div class="sidebar-meta-icon">
                        <p style="font-size:18px;">{{$data->jumlahpeserta}} Peserta</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><i class="fas fa-info-circle"></i> Keterangan</h4>
    <div class="sidebar-recent-post">
        <div class="sidebar-recent-post-content">
            <div class="sidebar-meta">
                <div class="sidebar-meta-item">
                    <div class="sidebar-meta-icon">
                        <p style="font-size:18px;">{{$data->keterangan}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
