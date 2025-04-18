<style>
    .pricing-section {
        padding: 20px;
        text-align: center;
    }
    .pricing-title {
        font-size: 32px;
        margin-bottom: 20px;
    }
    .pricing-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }
    .pricing-card {
        background: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 220px;
    }
    .pricing-card img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .pricing-card h4 {
        font-size: 16px;
        margin-top: 10px;
    }
    .pricing-card a {
        text-decoration: none;
        color: #007bff;
    }
    .pricing-card a:hover {
        text-decoration: underline;
    }
    @media (max-width: 768px) {
        .pricing-title {
            font-size: 24px;
        }
        .pricing-card {
            max-width: 180px;
            padding: 10px;
        }
        .pricing-card h4 {
            font-size: 14px;
        }
    }

    .modal-alert-pertanyaan {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed; /* Mengubah menjadi fixed agar tetap di atas */
    top: 0; /* Atur jarak dari atas */
    left: 0; /* Atur jarak dari kiri */
    width: 100%; /* Lebar penuh */
    height: 100%; /* Tinggi penuh */
    background-color: rgba(0, 0, 0, 0.5); /* Latar belakang semi-transparan */
    z-index: 9999; /* Pastikan z-index lebih tinggi dari elemen lain */
    }

    .modal-content-pertanyaan {
    background-color: white; /* Warna latar konten modal */
    padding: 20px;
    border-radius: 8px; /* Sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan untuk efek kedalaman */
    max-width: 400px; /* Lebar maksimal modal */
    width: 90%;
    z-index: 9999;/* Lebar responsif */
    }

            /* file: resources/css/custom.css atau langsung di style tag */
        .full-width-container {
        max-width: 80% !important;
        width: 80%;
        margin-top: 10px;
        }

        .table-wrapper {
        overflow-x: auto;
        border-radius: 15px;
        }

        .zebra-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #e5e7eb; /* Tailwind gray-200 */
        }

        .zebra-table th,
        .zebra-table td {
        padding: 12px 16px;
        border: 1px solid #e5e7eb;
        text-align: left;
        }

        .zebra-table thead {
        background-color: #f9fafb; /* Tailwind gray-50 */
        }

        .view-icon {
        color: #374151; /* Tailwind gray-700 */
        cursor: pointer;
        }

        table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }

        body {
          font-family: 'Poppins', sans-serif;
        }


        .btn-navy {
        background-color: #001f3f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        cursor: default;
        transition: all 0.3s ease;
    }

    .btn-navy:hover {
        background-color: white;
        color: black;
        border: 1px solid #001f3f;
    }

</style>
{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

    <section class="main-slider">
        <div class="main-slider-swiper owl-carousel owl-theme">
            @foreach ($dataheaderberanda as $item)
            <div class="item">
                <!-- Bright Background Image -->
                <div class="item-slider-bg" style="background-image: url('{{ asset('storage/' . $item->header) }}');"></div>

                <!-- Vibrant Text Content -->
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-8 col-md-10 mx-auto text-center">
                            <div class="slider-content">
                                <h4 class="slider-title animated fadeInDown">
                                    {!! $item->judul !!}
                                </h4>
                                <!-- Optional Bright Button -->
                                <!-- <a href="#" class="btn btn-vibrant btn-lg mt-4 animated fadeInUp">
                                    Selengkapnya
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <style>
        .main-slider {
            position: relative;
            height: 100vh;
            max-height: 800px;
            overflow: hidden;
        }

        .item-slider-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 1;
            /* Brighten the image */
            filter: brightness(1.1);
        }

        .slider-content {
            position: relative;
            z-index: 2;
        }

        .slider-title {
            font-size: 3rem;
            font-weight: 800;
            color: #fff;
            text-shadow:
                0 0 10px rgba(255,255,255,0.3),
                0 0 20px rgba(255,255,255,0.2),
                0 0 5px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        .btn-vibrant {
            background: linear-gradient(45deg, #FF9A8B, #FF6B95, #FF8E53);
            border: none;
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255,105,149,0.4);
        }

        @media (max-width: 992px) {
            .slider-title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .slider-title {
                font-size: 2rem;
                padding: 0 15px;
            }
            .main-slider {
                height: 70vh;
            }
        }
    </style>

<section class="pricing-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Analisa Harga Satuan Pekerjaan Kab Blora 2025</h2>
            <div class="section-divider"></div>
        </div>

        <div class="pricing-container">
            <!-- Card 1 -->
            <div class="pricing-card">
                <div class="card-image">
                    <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="AHSP Konstruksi Umum" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/hspkonstruksiumum">AHSP Konstruksi Umum</a>
                    </h3>
                    <a href="/hspkonstruksiumum" class="card-button">Lihat Detail</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="pricing-card">
                <div class="card-image">
                    <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="Satuan Harga Dasar" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/satuanhargamaterial">Satuan Harga Dasar</a>
                    </h3>
                    <a href="/satuanhargamaterial" class="card-button">Lihat Detail</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="pricing-card">
                <div class="card-image">
                    <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="SHST Kab Blora 2025" loading="lazy">
                </div>
                <div class="card-body">
                    <h3 class="card-title">
                        <a href="/shstblora">SHST Kab Blora Tahun 2025</a>
                    </h3>
                    <a href="/shstblora" class="card-button">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .pricing-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .section-divider {
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #4a90e2, #6a5acd);
        margin: 0 auto;
    }

    .pricing-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .pricing-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .card-image {
        height: 180px;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .pricing-card:hover .card-image img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 18px;
        margin-bottom: 15px;
        color: #333;
    }

    .card-title a {
        color: inherit;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .card-title a:hover {
        color: #4a90e2;
    }

    .card-button {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(to right, #4a90e2, #6a5acd);
        color: white;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .card-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(74, 144, 226, 0.4);
    }

    @media (max-width: 768px) {
        .pricing-container {
            grid-template-columns: 1fr;
        }

        .section-title {
            font-size: 24px;
        }
    }
</style>

<section class="news-section" style="background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Berita Jakon</h2>
            <div class="section-divider"></div>
        </div>

        <div class="row">
            <!-- Main News Article -->
            <div class="col-lg-7">
                @foreach ($data->skip(0)->take(1) as $item)
                <article class="featured-article">
                    <div class="article-image">
                        <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="{{ $item->judulberita }}" loading="lazy">
                        <span class="article-date">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</span>
                    </div>

                    <div class="article-content">
                        <h3 class="article-title">{{ $item->judulberita }}</h3>

                        @php
                            $wordLimit = 50;
                            $text = strip_tags($item->keterangan);
                            $excerpt = \Illuminate\Support\Str::words($text, $wordLimit, '...');
                        @endphp

                        <p class="article-excerpt" style="font-family: 'Poppins', sans-serif;">
                            {!! $excerpt !!}
                        </p>

                        @if(\Illuminate\Support\Str::wordCount($text) > $wordLimit)
                        <a href="{{ url('/beritajakon') }}" class="read-more">
                            Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                        @endif
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Sidebar -->
            <div class="col-lg-5">
                <aside class="news-sidebar">
                    <!-- Search Form -->

                    <!-- Recent News List -->
                    <div class="sidebar-widget recent-news">
                        <h4 class="widget-title" style="font-family: 'Poppins', sans-serif;"><span style="font-family: 'Poppins', sans-serif;">Daftar Berita Jakon</span></h4>

                        @foreach ($data->skip(1)->take(3) as $item)
                        <div class="news-item">
                            <div class="news-thumbnail">
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judulberita }}" loading="lazy">
                            </div>
                            <div class="news-info">
                                <span class="news-author" style="font-family: 'Poppins', sans-serif;">Penulis: Anam</span>
                                <h5 class="news-title" style="font-family: 'Poppins', sans-serif;">
                                    <a href="/beritajakon/{{ $item->judulberita }}"><span style="font-family: 'Poppins', sans-serif;">{{ $item->judulberita }}</span></a>
                                </h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<style>
    .news-section {
        padding: 60px 0;
        background-color: white;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 32px;
        color: #333;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .section-divider {
        width: 80px;
        height: 3px;
        background: linear-gradient(to right, #4a90e2, #6a5acd);
        margin: 0 auto;
    }

    /* Featured Article */
    .featured-article {
        margin-bottom: 40px;
    }

    .article-image {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .article-image img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }

    .article-image:hover img {
        transform: scale(1.03);
    }

    .article-date {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: rgba(0,0,0,0.7);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 14px;
    }

    .article-content {
        padding: 25px 15px 0;
    }

    .article-title {
        font-size: 24px;
        margin-bottom: 15px;
        color: #333;
        line-height: 1.3;
    }

    .article-excerpt {
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .read-more {
        color: #4a90e2;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .read-more:hover {
        color: #2a70c2;
    }

    .read-more i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .read-more:hover i {
        transform: translateX(3px);
    }

    /* Sidebar Styles */
    .news-sidebar {
        padding-left: 30px;
    }

    .search-form {
        position: relative;
        margin-bottom: 30px;
    }

    .search-form .form-control {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid #ddd;
        border-radius: 30px;
        font-size: 14px;
    }

    .search-btn {
        position: absolute;
        right: 5px;
        top: 5px;
        background: linear-gradient(to right, #4a90e2, #6a5acd);
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
    }

    .widget-title {
        font-size: 20px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        color: #333;
    }

    /* Recent News Items */
    .news-item {
        display: flex;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .news-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .news-thumbnail {
        flex: 0 0 100px;
        margin-right: 15px;
    }

    .news-thumbnail img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
    }

    .news-info {
        flex: 1;
    }

    .news-author {
        font-size: 12px;
        color: #777;
        display: block;
        margin-bottom: 5px;
    }

    .news-title {
        font-size: 16px;
        margin: 0;
        line-height: 1.4;
    }

    .news-title a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .news-title a:hover {
        color: #4a90e2;
    }

    @media (max-width: 991px) {
        .news-sidebar {
            padding-left: 0;
            margin-top: 40px;
        }
    }

    @media (max-width: 767px) {
        .section-title {
            font-size: 26px;
        }

        .article-title {
            font-size: 20px;
        }

        .news-item {
            flex-direction: column;
        }

        .news-thumbnail {
            margin-right: 0;
            margin-bottom: 15px;
        }
    }
</style>

<section class="event-three-section">
    <div class="event-section-outer">
        <div class="container" style="margin-top:-200px;">
            <h3 class="pricing-title" style="text-align: center; font-family: 'Poppins', sans-serif;">Daftar Artikel Jakon</h3>
            <br><br>

            <div class="row row-gutter-y-30">
                @foreach ($dataartikel->take(4) as $item)
                <div class="col-6 col-lg-6 col-xl-6">
                    <div class="event-card">
                        <div class="event-card-image">
                            <div class="event-card-image-inner">
                                <a href="{{ url('/artikeljakon') }}">
                                    <img src="{{ asset('storage/' . $item->foto1) }}" class="img-fluid" alt="Gambar" width="200px">
                                </a>

                                <div class="event-card-meta">
                                    <div class="event-meta-number">
                                        <a href="/404">
                                            <span><i class="fas fa-download"></i></span>
                                        </a>
                                    </div><!-- event-meta-number -->

                                    <div class="event-meta-date">
                                        <span>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</span>
                                    </div><!-- event-meta-date -->
                                </div><!-- event-card-meta -->
                            </div><!-- event-card-image-inner -->
                        </div><!-- event-card-image -->

                        <div class="event-card-content">
                            <div class="event-card-title">
                                <a href="{{ url('/artikeljakon') }}" style="color: blue; text-decoration: none;">
                                    <h4 style="font-family: 'Poppins', sans-serif;">{{ $item->judul }}</h4>
                                </a>
                            </div><!-- event-card-title -->
                        </div><!-- event-card-content -->
                    </div><!-- event-card -->
                </div><!-- col-6 col-lg-6 col-xl-6 -->
                @endforeach
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- event-section-outer -->
</section><!-- event-three-section -->

<!-- Wrapper Background Section -->
<section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">


   <!-- Konten Data -->
    <div class="full-width-container mx-auto px-4 pb-10">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
            <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                <div style="width: 100%; max-width: 500px;"> <!-- Optional max-width buat tampilan elegan -->
                    <button type="button" style="
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        gap: 10px;
                        padding: 12px 20px;
                        font-size: 16px;
                        font-family: 'Poppins', sans-serif;
                        border: 1px solid #28a745;
                        background-color: #28a745;
                        color: white;
                        border-radius: 6px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        width: 100%;
                    "
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                    >
                        <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                        {{ $title }}
                    </button>
                </div>
            </div>



        @if (session('logout'))
            <div class="modal-alert-pertanyaan">
                <div class="modal-content-pertanyaan">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 20px;">
                    <p style="color: black;">Pemerintah Kabupaten Blora</p>
                    <div class="success-text" style="font-size: 18px;">
                        {{ session('logout') }} <!-- Pesan flash ditampilkan di sini -->
                        <button type="button" class="btnalert-view" onclick="document.querySelector('.modal-alert-pertanyaan').style.display='none';" style="float: right;">
                            &times;
                        </button>
                    </div>
                    <br>
                    <button class="button-text" style="color: white;">{{ session('logout') }}</button>
                </div>
            </div>
        @endif




            <section class="event-three-section" style="margin-top: -200px;">
                <div class="event-section-outer">
                    <div class="container d-flex justify-content-center">
                        <div style="position: relative; width: 100%; max-width: 1280px; padding-bottom: 56.25%;">
                            <iframe src="https://www.youtube.com/embed/IP3whQNdlZM"
                                title="Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                            </iframe>
                        </div>
                    </div> <!-- container -->
                </div> <!-- event-section-outer -->
            </section> <!-- event-three-section -->

        <br><br>

        <section class="cta-two-section">
            <div class="container">
                <div class="cta-two-section-inner">
                    <div class="row align-items-center">
                        <div class="col-xl-5">
                            <div class="cta-two-title d-flex align-items-center">
                                <div class="cta-two-card-content">
                                    <h3 class="cta-title">Klik Kami</h3>
                                </div>
                                <a href="/kritikdansaran">
                                    <div class="cta-two-card-icon" style="transition: color 0.3s ease, transform 0.3s ease;">
                                        <i class="flaticon-envelope-2" style="color: inherit;"></i>
                                    </div>
                                </a>

                                <style>
                                    a:hover .cta-two-card-icon {
                                        color: #ffd100;
                                        transform: scale(1.1);
                                    }
                                </style>
                                <div class="cta-two-card-content">
                                    <h3 class="cta-title">Untuk Kritik dan Saran</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 text-end">
                            <a href="form-kritik-saran.html" class="btn btn-primary btn-lg" role="button" aria-label="Buka Form Kritik dan Saran">
                                Form Saran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
    </div>
    <br><br><br>

</section>


<div class="progress-wrap">
          <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
          </svg>
      </div>
      <!-- back to top end -->

    </div>



@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
