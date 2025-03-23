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
	<section class="contact-section">
		<div class="container">
			<div class="row">

				<div class="col-lg-12">
                    <form action="/kritikdansaran" class="contact-form contact-form-validated" method="post">
                        <div class="row row-gutter-10">
                            <!-- Nama Lengkap -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-user"></i> <span class="label-text">Nama Lengkap</span>
                                    </span>
                                    <input type="text" id="namalengkap" class="input-text" placeholder="Isi Data ..." name="namalengkap" aria-required="true">
                                </div>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-phone"></i> <span class="label-text">Nomor Telepon</span>
                                    </span>
                                    <input type="text" id="notelepon" class="input-text" placeholder="Nomor WhatsApp ..." name="notelepon" aria-required="true">
                                </div>
                            </div>

                            <!-- Pekerjaan -->
                            <div class="col-12 col-lg-6">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-briefcase"></i> <span class="label-text">Pekerjaan</span>
                                    </span>
                                    <input type="text" id="pekerjaan" class="input-text" placeholder="Isi Data ...." name="pekerjaan" aria-required="true">
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="col-12 col-lg-12">
                                <div class="input-group">
                                    <span class="input-icon">
                                        <i class="fas fa-comment"></i> <span class="label-text">Kritik dan Saran</span>
                                    </span>
                                    <textarea name="keterangan" id="keterangan" placeholder="Tuliskan Kritik atau Saran Anda ... " class="input-text" aria-required="true"></textarea>
                                </div>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 col-lg-12 text-center">
                                <button class="btn btn-primary">Kirim Kritik & Saran</button>
                            </div>
                        </div>
                    </form>

				</div><!-- col-lg-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- contact-section -->
	<div class="contact-gmap-section">
		<div class="container">
			<div class="responsive-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.628066692034!2d111.4085298!3d-6.977182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77411bc797c1ed%3A0x5ddba5997190e35c!2sDinas%20Pekerjaan%20Umum%20dan%20Penataan%20Ruang%20(DPUPR)%20Kabupaten%20Blora!5e0!3m2!1sen!2sid!4v1710156789012"
                    width="100%"
                    height="250"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

<style>
.responsive-map {
    position: relative;
    padding-bottom: 40%; /* Rasio lebih kecil (sebelumnya 56.25%) */
    height: 0;
    overflow: hidden;
}

.responsive-map iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

</style>
		</div><!-- container -->
	</div><!-- contact-gmap-section -->
	<div class="cta-four-section">
		<div class="container">
			<div class="cta-four-inner">
				<div class="row row-gutter-y-20 ">
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-help"></i>
							<div class="cta-four-content-box">
								<span>Ada Pertanyaan?</span>
								<p>(0296) 531004</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-3 -->
					<div class="col-12 col-md-6 col-lg-6 col-xl-3">
						<div class="cta-four-content">
							<i class="flaticon-envelope-3"></i>
							<div class="cta-four-content-box">
								<span>Kirim Email</span>
								<p>konstruksi@masjakidpuprblora.co.id</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-md-6 col-lg-6 col-xl-3 -->
					<div class="col-12 col-lg-6 col-xl-4">
						<div class="cta-four-content">
							<i class="flaticon-location-pin"></i>
							<div class="cta-four-content-box">
								<span>Lokasi Kami</span>
								<p>Jl. Nusantara No.62, Jetis, Kauman, Kec. Blora
                                    Kabupaten Blora 58214 Provinsi Jawa Tengah</p>
							</div><!-- cta-four-content-box -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-4 -->
					<div class="col-12 col-lg-6 col-xl-2">
						<div class="cta-four-content">
							<div class="cta-four-widget-socials">
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="https://wa.me/6281321455855"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
							</div><!-- cta-four-widget-socials -->
						</div><!-- cta-four-content -->
					</div><!-- col-12 col-lg-6 col-xl-2 -->
				</div><!-- row -->
			</div><!-- cta-four-inner -->
		</div><!-- container -->
	</div><!-- cta-four-section -->
</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
