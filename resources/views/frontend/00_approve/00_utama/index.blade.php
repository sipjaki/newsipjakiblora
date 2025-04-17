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

            <section class="pricing-section">
                <br><br>
                <h3 class="pricing-title">Analisa Harga Satuan Pekerjaan Kab Blora 2025</h3>
                <div class="pricing-container">
                    <div class="pricing-card">
                        <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="AHSP Konstruksi Umum">
                        <h4><a href="/hspkonstruksiumum">AHSP Konstruksi Umum</a></h4>
                    </div>
                    <div class="pricing-card">
                        <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="Satuan Harga Dasar">
                        <h4><a href="/satuanhargamaterial">Satuan Harga Dasar</a></h4>
                    </div>
                    <div class="pricing-card">
                        <img src="/assets/00_dokmasjaki/03_datajakon/analisisharga.png" alt="SHST Kab Blora 2025">
                        <h4><a href="/shstblora">SHST Kab Blora Tahun 2025</a></h4>
                    </div>
                </div>
            </section>


            {{-- <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);"> --}}
            <section class="news-details-section" style="background:white">
                <div class="container"  style="margin-top:-100px;">

                    <h3 class="pricing-title" style="text-align: center;">Berita Jakon</h3>
        <br>
                    <div class="row">
                        <div class="col-lg-7">

                            @foreach ($data->skip(0)->take(1) as $item)

                            <div class="news-details-box-image">
                                <div class="news-details-box-image-inner">
                                    <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="img-193">

                                    <a href="#" class="news-details-box-date">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</a>
                                </div><!-- news-details-box-image-inner -->
                            </div><!-- news-details-box-image -->

                            <br><br>
                            <div class="news-details-content-box" style="margin-left: 25px;">
                                <h4>{{$item->judulberita}}</h4>

                                @php
                                $wordLimit = 50;
                                $text = strip_tags($item->keterangan);
                                $excerpt = \Illuminate\Support\Str::words($text, $wordLimit, '...');
                            @endphp

                            <p style="text-align: justify">
                                {!! $excerpt !!}
                                @if(\Illuminate\Support\Str::wordCount($text) > $wordLimit)
                                {{-- <a href="{{ url('/beritajakon/' . \Illuminate\Support\Str::slug($item->judulberita)) }}" --}}
                                    <a href="{{ url('/beritajakon') }}"
                                    style="color: blue; text-decoration: none;">
                                    Selengkapnya &rarr;
                                    </a>

                                @endif
                            </p>


                            </div><!-- /.news-details-content-box -->

                            @endforeach

                        </div><!-- col-lg-8 -->

                        <div class="col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar-form-content">
                                    <div class="sidebar__item sidebar__item--search">
                                        <form action="#" class="sidebar__search">
                                            <label for="search" class="sr-only">Cari Berita</label><!-- sr-only -->
                                            <input type="text" placeholder="Cari Berita">
                                            <button type="submit" aria-label="search submit" class="thm-btn">
                                                <i class="flaticon-search-interface-symbol"></i>
                                            </button><!-- thm-btn -->
                                        </form><!-- sidebar__search -->
                                    </div><!-- sidebar__item -->
                                </div><!-- sidebar-form-content -->
                                <div class="sidebar-widget sidebar-widget-recent-post">
                                    <h4 class="pricing-title">Daftar Berita Jakon</h4>

                                    @foreach ($data->skip(1)->take(3) as $item)

                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-img">
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Pelatihan SKK Blora" width="200px" loading="lazy">
                                        </div><!-- sidebar-recent-post-img -->
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <span class="author" style="color: black;">
                                                            Penulis : <a href="news-details.html">Anam</a>
                                                        </span><!-- author -->
                                                    </div><!-- sidebar-meta-icon -->
                                                </div><!-- sidebar-meta-item -->
                                                <div class="sidebar-post-title">
                                                    <h6><a href="/beritajakon/{{$item->judulberita}}">{{$item->judulberita}}</a></h6>
                                                </div><!-- sidebar-post-title -->
                                            </div><!-- sidebar-meta -->
                                        </div><!-- sidebar-recent-post-content -->
                                    </div><!-- sidebar-recent-post -->


                                    @endforeach


                                </div><!-- sidebar-widget sidebar-widget-recent-post -->
                            </div><!-- sidebar -->
                        </div><!-- col-lg-4 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!--causes-one-section-->


            <section class="event-three-section" >
                <div class="event-section-outer">
                    <div class="container" style="margin-top:-200px;">

                        <h3 class="pricing-title" style="text-align: center;">Daftar Artikel Jakon</h3>

                        <br><br>
                        <div class="row row-gutter-y-30">

                            @foreach ($dataartikel->take(4) as $item)


        {{-- ----------------------------------------------------------------------- --}}
                        <div class="col-6 col-lg-6 col-xl-6">
                            <div class="event-card">
                                <div class="event-card-image">
                                    <div class="event-card-image-inner">

                                        <a href="{{ url('/artikeljakon') }}">
                                            <img src="{{ asset('storage/' . $item->foto1) }}" class="img-fluid" alt="Gambar" width="200px;">
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
                                    </div><!--event-card-image-->
                                    <div class="event-card-content">
                                        <div class="event-card-title">

                                            <a href="{{ url('/artikeljakon') }}"
                                            style="color: blue; text-decoration: none;">
                                            <h4>{{$item->judul}}</h4>
                                            </a>


                                        </div><!-- event-card-title -->
                                    </div><!--event-card-content-->
                                </div><!--event-card-->
                            </div><!--col-12 col-lg-6 col-xl-6-->
        {{-- ----------------------------------------------------------------------- --}}

        @endforeach

                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- event-section-outer -->
            </section><!--event-three-section-->
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
