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
		<div class="container" style="margin-top: -150px;">
			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}
            {{-- @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none;"></iframe>
            @endforeach --}}
			{{-- <div class="portfolio-details-info">
				<div class="portfolio-details-info-item">
					<span>Category:</span>
					<p>Business</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Department:</span>
					<p>Finance and Economy</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Date:</span>
					<p>20 October, 2022</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Location:</span>
					<p>New York City</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item portfolio-details-info-socials">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div><!-- portfolio-details-info-socials -->
			</div><!--/.portfolio-details-info--> --}}
			<div class="portfolio-details-content">
				{{-- <div class="portfolio-details-content-title">
					<h3>Tupoksi DPUPR Pemerintah Kabupaten Blora</h3>
				</div><!-- portfolio-details-content-title --> --}}


<div style="background-color: #f9f9f9; padding: 30px; border-radius: 10px; max-width: 90%; margin: auto; font-family: 'Poppins', sans-serif;">
    <!-- Header -->
    <div style="background-color: #FFD100; padding: 15px; border-radius: 10px 10px 0 0; text-align: center; font-weight: 600; font-size: 22px;">
        DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH
    </div>

    <!-- Konten Tupoksi -->
    <div style="background-color: white; padding: 20px; border-radius: 0 0 10px 10px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
        <h3 style="color: #2E7D32; text-align: center; font-weight: 600; font-size: 24px; margin-bottom: 20px;">Tupoksi Jasa Konstruksi</h3>

        <ul style="padding-left: 20px; list-style-type: none; font-size: 16px;">
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Penyusunan Program:</strong> Rencana kerja dan kegiatan bina jasa konstruksi sebagai pedoman kerja tahunan.
            </li>
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Kebijakan Teknis:</strong> Menyusun bahan kebijakan sesuai peraturan perundang-undangan sebagai kajian pimpinan.
            </li>
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Sistem Informasi:</strong> Pelaksanaan sistem informasi jasa konstruksi untuk efisiensi.
            </li>
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Pengawasan & Pembinaan:</strong> Pengembangan badan usaha, pasar jasa konstruksi, dan evaluasi penyelenggaraan.
            </li>
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Penyuluhan & Bimtek:</strong> Melakukan pelatihan, penyuluhan, dan bimtek terkait jasa konstruksi.
            </li>
            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                <strong>📌 Laporan & Evaluasi:</strong> Monitoring dan evaluasi kegiatan pembinaan sebagai wujud transparansi.
            </li>
        </ul>
    </div>
</div>

<div class="portfolio-details-content-text">
    <p style="text-align: justify;">
        Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) Kabupaten Blora memiliki peran strategis dalam pembinaan jasa konstruksi guna mendukung pembangunan infrastruktur yang berkualitas. DPUPR bertugas menyusun kebijakan teknis, mengembangkan sistem informasi konstruksi, serta meningkatkan kapasitas badan usaha konstruksi agar lebih kompetitif dan profesional.
    </p>

    <p style="text-align: justify;">
        Selain itu, DPUPR juga berperan dalam pengawasan dan penjaminan mutu konstruksi, penyuluhan serta bimtek kepada para pelaku jasa konstruksi, serta pengembangan pasar dan kerja sama konstruksi. Dengan pendekatan berbasis regulasi dan inovasi, DPUPR terus berupaya menciptakan ekosistem konstruksi yang tertib, berdaya saing, dan mendukung pertumbuhan ekonomi Kabupaten Blora.
    </p>
</div>
			</div><!-- portfolio-details-content -->
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
