@include('ver2.fe.00_fiturmenu.01_headerver2')

<body>

    <!-- preloader -->
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> --}}
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Scroll-top-end-->
@include('ver2.fe.00_fiturmenu.03_header2ver2')

    <main class="main-area fix">
        <!-- slider-area -->
<section class="slider__area-two">
    <div class="swiper-container slider-active-two">
        <div class="swiper-wrapper">
            
            @php
                // 1. Kumpulkan SEMUA foto dari SEMUA data
                $semuaFoto = [];
                foreach($data as $b) {
                    $fotos = array_filter([$b->foto, $b->foto1, $b->foto2]);
                    
                    foreach($fotos as $f) {
                        if (str_starts_with($f, 'http://') || str_starts_with($f, 'https://')) {
                            $semuaFoto[] = $f;
                        } elseif (str_starts_with($f, 'assets/') || str_starts_with($f, '/assets/') || str_starts_with($f, 'uploads/')) {
                            $semuaFoto[] = '/' . ltrim($f, '/');
                        } else {
                            $semuaFoto[] = asset('storage/' . ltrim($f, '/'));
                        }
                    }
                }

                if (empty($semuaFoto)) {
                    $semuaFoto[] = '/assets/26_newversi/01_new/img/slider/h7_slider_bg_img03.jpg';
                }

                // 2. Acak semua foto
                shuffle($semuaFoto);
                
                // 3. Ambil SEMUA foto
                $fotoSemua = $semuaFoto; 
                
                // 4. Ambil foto pertama untuk tampilan awal
                $fotoPertama = $fotoSemua[0];
                
                // 5. Ubah array ke JSON
                $jsonSemuaFoto = json_encode($fotoSemua);
            @endphp

            {{-- LOOPING SEMUA DATA UNTUK TEKS --}}
            @foreach($data as $berita)
                <div class="swiper-slide slider__bg-two" data-background="/assets/26_newversi/01_new/img/slider/h7_slider_bg.jpg">
                    
                    <div class="slider__bg-three auto-change-bg" 
                        id="bg-slider-{{ $loop->index }}" 
                        data-fotos='{{ $jsonSemuaFoto }}' 
                        data-background="{{ $fotoPertama }}">
                    </div>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7">
                                <div class="slider__content-two">
                                    <!-- Font judul akan dikecilkan lewat CSS di bawah -->
                                    <h1 class="title">{{ Str::limit($berita->judulberita, 50) }}</h1>
                                    <p>{{ Str::limit(strip_tags($berita->keterangan), 120) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    
    <!-- Pagination -->
    <div class="slider__pagination"></div>
</section>

<!-- ========================================== -->
<!-- CSS UNTUK PAGINATION & PERKECIL FONT JUDUL -->
<!-- ========================================== -->
<style>
    /* 1. CSS Pagination (Hanya muncul 3 bulatan) */
    .slider__pagination {
        max-width: 110px !important; /* Lebar pas untuk 3 bulatan */
        overflow-x: auto !important; /* Bisa digeser */
        overflow-y: hidden !important;
        scrollbar-width: none; /* Sembunyikan scrollbar Firefox */
        -ms-overflow-style: none; /* Sembunyikan scrollbar IE/Edge */
        padding: 5px 0 !important;
        display: flex !important;
        align-items: center !important;
        gap: 4px !important; /* Jarak antar bulatan */
    }
    
    .slider__pagination::-webkit-scrollbar {
        display: none; /* Sembunyikan scrollbar Chrome/Safari */
    }
    
    .slider__pagination span {
        flex-shrink: 0 !important; /* Cegah bulatan jadi lonjong */
    }

    /* 2. Perkecil Font Judul Slider 10% */
    /* Ukuran asli adalah 60px, jika diperkecil 10% menjadi 54px */
    .slider__content-two .title {
        font-size: 54px !important; 
        line-height: 1.1 !important;
    }

    /* Penyesuaian untuk Tablet */
    @media (max-width: 1199.98px) {
        .slider__content-two .title {
            font-size: 48px !important; /* Asli 55px */
        }
    }

    /* Penyesuaian untuk HP */
    @media (max-width: 767.98px) {
        .slider__content-two .title {
            font-size: 40px !important; /* Asli 45px */
        }
    }
</style>

<!-- ========================================== -->
<!-- SCRIPT UNTUK FOTO OTOMATIS BERGANTI 2 DETIK-->
<!-- ========================================== -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const bgElements = document.querySelectorAll('.auto-change-bg');

        bgElements.forEach((el) => {
            const fotos = JSON.parse(el.getAttribute('data-fotos'));
            
            if (fotos.length > 0) {
                let currentIndex = 0;
                
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % fotos.length;
                    const newFoto = fotos[currentIndex];
                    
                    el.style.transition = "background-image 0.8s ease-in-out";
                    el.style.backgroundImage = `url('${newFoto}')`;
                    el.setAttribute('data-background', newFoto);
                }, 2000); // 2 detik
            }
        });
    });
</script>     

<div class="brand__area-five">
    <div class="container">
        <div class="brand-item-wrap-two">
            <!-- Tambahkan id="brand-running" agar mudah ditarget oleh JS -->
            <div class="swiper-container brand-active fix" id="brand-running">
                <div class="swiper-wrapper">
                    
                    @php
                        $semuaFotoBrand = [];
                        foreach($data as $b) {
                            $fotos = array_filter([$b->foto, $b->foto1, $b->foto2]);
                            
                            foreach($fotos as $f) {
                                if (str_starts_with($f, 'http://') || str_starts_with($f, 'https://')) {
                                    $semuaFotoBrand[] = $f;
                                } elseif (str_starts_with($f, 'assets/') || str_starts_with($f, '/assets/') || str_starts_with($f, 'uploads/')) {
                                    $semuaFotoBrand[] = '/' . ltrim($f, '/');
                                } else {
                                    $semuaFotoBrand[] = asset('storage/' . ltrim($f, '/'));
                                }
                            }
                        }
                        shuffle($semuaFotoBrand);
                    @endphp

                    @foreach($semuaFotoBrand as $urlFoto)
                        <div class="swiper-slide" style="width: auto;"> <!-- Width auto agar tidak kaku -->
                            <div class="brand-item" style="padding: 0 10px;"> <!-- Jarak antar foto -->
                                <img src="{{ $urlFoto }}" alt="Foto Berita" style="width: 250px; height: 160px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Cek jika elemen brand-running ada
        var brandSlider = document.querySelector('#brand-running');
        
        if (brandSlider) {
            // Inisialisasi ulang Swiper khusus untuk running foto
            new Swiper(brandSlider, {
                slidesPerView: 'auto', // Menyesuaikan lebar gambar
                spaceBetween: 20,      // Jarak antar gambar (20px)
                loop: true,            // Selalu berulang tanpa henti
                speed: 5000,           // Kecepatan geser (makin besar makin lambat)
                allowTouchMove: false, // Opsional: mematikan geser manual (fokus ke running)
                autoplay: {
                    delay: 0,          // Delay 0 = langsung jalan tanpa jeda
                    disableOnInteraction: false,
                },
                freeMode: true,        // Membuat pergerakan lebih mulus (tidak kaku)
                freeModeMomentum: false,
            });
        }
    });
</script>
<!-- agenda-area -->
<section class="agenda__area fix section-py-130" style="position: relative; overflow: hidden; z-index: 1;">
    
    <!-- BACKGROUND DENGAN EFEK PARALLAX -->
    <div class="agenda-bg-parallax" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('/assets/26_newversi/01_new/img/bg/backhijaubaru.jpeg'); background-size: cover; background-position: center; background-attachment: fixed; z-index: -1;">
        <!-- Overlay Gelap Hijau agar teks terbaca dan menyatu dengan tema -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(11, 122, 50, 0.85);"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-xl-7 col-lg-8">
                <div class="section__title white-title text-center mb-0">
                    <span class="sub-title" style="color: #A5D6A7;">AGENDA TERBARU</span>
                    <h2 class="title" style="color: #ffffff;">Pelatihan & Sertifikasi Jasa Konstruksi</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <!-- Container Swiper untuk Agenda -->
                <div class="swiper-container agenda-active">
                    <div class="swiper-wrapper pb-5">
                        
                        {{-- Looping SEMUA data gabungan --}}
                        @foreach($agendaGabungan as $agenda)
                            <div class="swiper-slide" style="height: auto;">
                                
                                <!-- CARD MURNI (Warna Hijau Gelap) -->
                                <div style="background: #0E2A12; border-radius: 15px; overflow: hidden; height: 100%; display: flex; flex-direction: column; border: 1px solid rgba(165, 214, 167, 0.2); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                                    
                                    <!-- 1. FOTO (Di paling atas, terpisah) -->
                                    <div style="width: 100%; position: relative;">
                                        @php
                                            $fotoAsli = $agenda->foto; 
                                            $urlFoto = '/assets/26_newversi/01_new/img/team/team_img01.png'; // Default
                                            if (!empty($fotoAsli)) {
                                                if (str_starts_with($fotoAsli, 'http://') || str_starts_with($fotoAsli, 'https://')) {
                                                    $urlFoto = $fotoAsli;
                                                } elseif (str_starts_with($fotoAsli, 'assets/') || str_starts_with($fotoAsli, '/assets/') || str_starts_with($fotoAsli, 'uploads/')) {
                                                    $urlFoto = '/' . ltrim($fotoAsli, '/');
                                                } else {
                                                    $urlFoto = asset('storage/' . ltrim($fotoAsli, '/'));
                                                }
                                            }
                                        @endphp
                                        <!-- Tag img murni -->
                                        <img src="{{ $urlFoto }}" alt="Foto Agenda" style="width: 100%; height: 220px; object-fit: cover; display: block;">
                                        
                                        <!-- Badge Label -->
                                        <div style="position: absolute; top: 15px; right: 15px; z-index: 2;">
                                            @if($agenda->tipe_agenda == 'Pelatihan')
                                                <span style="background: var(--tg-theme-primary); color: white; padding: 6px 12px; font-size: 12px; border-radius: 5px; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.3);">Pelatihan</span>
                                            @else
                                                <span style="background: #FFC107; color: #000; padding: 6px 12px; font-size: 12px; border-radius: 5px; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.3);">Sertifikasi</span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- 2. KONTEN TEKS (Di bawah foto) -->
                                    <div style="padding: 25px 20px; display: flex; flex-direction: column; flex-grow: 1;">
                                        
                                        <!-- Judul -->
                                        <h3 style="font-size: 18px; color: #ffffff; line-height: 1.5; margin-bottom: 15px; font-weight: 600;">
                                            {{ Str::limit($agenda->namakegiatan, 50) }}
                                        </h3>
                                        
                                        <!-- Lokasi -->
                                        <div style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 10px; color: #B8D8BA; font-size: 14px;">
                                            <i class="fas fa-map-marker-alt" style="color: #A5D6A7; margin-top: 3px;"></i>
                                            <span>{{ Str::limit($agenda->lokasi, 40) }}</span>
                                        </div>
                                        
                                        <!-- Tanggal -->
                                        <div style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 20px; color: #B8D8BA; font-size: 14px;">
                                            <i class="fas fa-calendar-alt" style="color: #A5D6A7; margin-top: 3px;"></i>
                                            <span>{{ $agenda->waktupelaksanaan }}</span>
                                        </div>

                                        <!-- Tombol Undangan -->
                                        <div style="margin-top: auto;">
                                            @if($agenda->tipe_agenda == 'Pelatihan' && $agenda->suratundangan)
                                                @php
                                                    $surat = $agenda->suratundangan;
                                                    $urlSurat = str_starts_with($surat, 'http') ? $surat : '/' . ltrim($surat, '/');
                                                @endphp
                                                <!-- Tombol Warna Putih Kehijauan -->
                                                <a href="{{ $urlSurat }}" target="_blank" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; padding: 10px; background: rgba(165, 214, 167, 0.15); color: #A5D6A7; text-decoration: none; border-radius: 8px; font-size: 14px; font-weight: 600; transition: 0.3s; border: 1px solid rgba(165, 214, 167, 0.3);" onmouseover="this.style.background='var(--tg-theme-primary)'; this.style.color='#fff'; this.style.borderColor='var(--tg-theme-primary)'" onmouseout="this.style.background='rgba(165, 214, 167, 0.15)'; this.style.color='#A5D6A7'; this.style.borderColor='rgba(165, 214, 167, 0.3)'">
                                                    <i class="fas fa-file-pdf"></i> Surat Undangan
                                                </a>
                                            @else
                                                <!-- Jika tidak ada surat, beri ruang kosong agar tinggi card sejajar -->
                                                <div style="height: 42px;"></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tombol Navigasi Kiri Kanan -->
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="agenda-nav-wrap d-flex gap-2">
                    <button class="agenda-button-prev" style="width: 50px; height: 50px; border-radius: 50%; border: none; background: var(--tg-theme-primary); color: white; font-size: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button class="agenda-button-next" style="width: 50px; height: 50px; border-radius: 50%; border: none; background: var(--tg-theme-primary); color: white; font-size: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.3);">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var agendaSlider = document.querySelector('.agenda-active');
        
        if (agendaSlider) {
            new Swiper(agendaSlider, {
                slidesPerView: 1,
                spaceBetween: 24,
                loop: false,
                grabCursor: true,
                navigation: {
                    nextEl: '.agenda-button-next',
                    prevEl: '.agenda-button-prev',
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    992: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 }
                }
            });
        }
    });
</script>

<!-- statistics-area -->
<section class="services__area-five services__bg-three section-py-130" data-background="/assets/26_newversi/01_new/img/bg/h6_services_bg.jpg">
    <div class="container">
        <div class="row justify-content-center mb-50">
            <div class="col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">Data Statistik</span>
                    <h2 class="title">Statistik Jasa Konstruksi Kabupaten Blora</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container custom-container-two">
        <div class="row gutter-y-30 justify-content-center">
            
            <!-- Chart 1 -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services__item-six shine__animate-item" style="padding: 30px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <h3 class="title" style="font-size: 18px; margin-bottom: 20px; text-align: center;">Kualifikasi Tenaga Kerja</h3>
                    <div style="width: 100%; max-width: 200px;">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
            </div>

            <!-- Chart 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services__item-six shine__animate-item" style="padding: 30px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <h3 class="title" style="font-size: 18px; margin-bottom: 20px; text-align: center;">Klasifikasi BUJK</h3>
                    <div style="width: 100%; max-width: 200px;">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
            </div>

            <!-- Chart 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services__item-six shine__animate-item" style="padding: 30px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <h3 class="title" style="font-size: 18px; margin-bottom: 20px; text-align: center;">Proyek Berjalan</h3>
                    <div style="width: 100%; max-width: 200px;">
                        <canvas id="chart3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Chart 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="services__item-six shine__animate-item" style="padding: 30px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <h3 class="title" style="font-size: 18px; margin-bottom: 20px; text-align: center;">Penyedia Jasa</h3>
                    <div style="width: 100%; max-width: 200px;">
                        <canvas id="chart4"></canvas>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="services__bottom-content text-center mt-70">
            <p>Data diperbarui secara berkala oleh DPUPR Blora. <a href="#">Lihat Detail Statistik</a></p>
        </div>
    </div>
</section>
<!-- statistics-area-end -->

<!-- SCRIPT CHART.JS -->
<!-- Pastikan library Chart.js dimuat. Letakkan di bagian bawah sebelum </body> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Konfigurasi Warna Hijau Blora
        const primaryColor = 'rgba(19, 168, 71, 0.6)'; // Hijau Utama
        const primaryBorder = 'rgba(19, 168, 71, 1)';
        const secondaryColor = 'rgba(11, 122, 50, 0.6)'; // Hijau Gelap
        const secondaryBorder = 'rgba(11, 122, 50, 1)';
        const yellowColor = 'rgba(255, 212, 0, 0.6)'; // Kuning Emas Logo
        const yellowBorder = 'rgba(255, 212, 0, 1)';
        const blueColor = 'rgba(67, 160, 71, 0.6)'; // Hijau Segar
        const blueBorder = 'rgba(67, 160, 71, 1)';

        // Opsi Umum Radar Chart
        const commonOptions = {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: false // Sembunyikan legenda agar lebih bersih
                }
            },
            scales: {
                r: {
                    angleLines: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    pointLabels: {
                        font: {
                            size: 11,
                            family: 'Poppins'
                        },
                        color: '#343C4D'
                    },
                    ticks: {
                        display: false, // Sembunyikan angka di tengah
                        min: 0
                    }
                }
            }
        };

        // 1. Chart Kualifikasi Tenaga Kerja
        new Chart(document.getElementById('chart1'), {
            type: 'radar',
            data: {
                labels: ['Jenjang 4', 'Jenjang 5', 'Jenjang 6', 'Jenjang 7', 'Jenjang 8', 'Jenjang 9'],
                datasets: [{
                    label: 'Jumlah',
                    data: [120, 85, 60, 40, 25, 10],
                    backgroundColor: primaryColor,
                    borderColor: primaryBorder,
                    borderWidth: 2,
                    pointBackgroundColor: primaryBorder,
                }]
            },
            options: commonOptions
        });

        // 2. Chart Klasifikasi BUJK
        new Chart(document.getElementById('chart2'), {
            type: 'radar',
            data: {
                labels: ['Kecil', 'Non-Kecil', 'Spesialis', 'Terintegrasi', 'Konsultan', 'Kontraktor'],
                datasets: [{
                    label: 'Jumlah',
                    data: [80, 30, 15, 10, 45, 55],
                    backgroundColor: secondaryColor,
                    borderColor: secondaryBorder,
                    borderWidth: 2,
                    pointBackgroundColor: secondaryBorder,
                }]
            },
            options: commonOptions
        });

        // 3. Chart Proyek Berjalan
        new Chart(document.getElementById('chart3'), {
            type: 'radar',
            data: {
                labels: ['Jalan', 'Jembatan', 'Gedung', 'Irigasi', 'SDA', 'Permukiman'],
                datasets: [{
                    label: 'Jumlah',
                    data: [15, 8, 12, 10, 5, 7],
                    backgroundColor: yellowColor,
                    borderColor: yellowBorder,
                    borderWidth: 2,
                    pointBackgroundColor: yellowBorder,
                }]
            },
            options: commonOptions
        });

        // 4. Chart Penyedia Jasa
        new Chart(document.getElementById('chart4'), {
            type: 'radar',
            data: {
                labels: ['Lokal', 'Nasional', 'Asing', 'BUMN', 'Swasta', 'Koperasi'],
                datasets: [{
                    label: 'Jumlah',
                    data: [100, 20, 2, 5, 65, 10],
                    backgroundColor: blueColor,
                    borderColor: blueBorder,
                    borderWidth: 2,
                    pointBackgroundColor: blueBorder,
                }]
            },
            options: commonOptions
        });
    });
</script>

        <!-- blog-post-area -->
        <section class="blog__post-area-six section-py-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-50">
                            <span class="sub-title">Our Latest Blogs</span>
                            <h2 class="title">Our expert team will help you to Grow Business</h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item-four shine__animate-item">
                            <div class="blog__post-thumb-four shine__animate-link">
                                <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/blog/blog_post03.jpg" alt=""></a>
                                <a href="blog.html" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-four">
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/images/testi_avatar01.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Participate In Staff Meetings Dedicated To
                                        Strategically</a></h2>
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/comment.svg" alt="" class="injectable">
                                            <a href="blog-details.html">Comment: 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item-four shine__animate-item">
                            <div class="blog__post-thumb-four shine__animate-link">
                                <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/blog/blog_post04.jpg" alt=""></a>
                                <a href="blog.html" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-four">
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/images/testi_avatar02.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Sketchnotes And Key Takea ways From Smashin</a>
                                </h2>
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/comment.svg" alt="" class="injectable">
                                            <a href="blog-details.html">Comment: 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item-four shine__animate-item">
                            <div class="blog__post-thumb-four shine__animate-link">
                                <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/blog/blog_post06.jpg" alt=""></a>
                                <a href="blog.html" class="blog__post-tag-two">Business</a>
                            </div>
                            <div class="blog__post-content-four">
                                <div class="blog__post-author">
                                    <a href="blog-details.html"><img src="/assets/26_newversi/01_new/img/images/testi_avatar03.png" alt="img"></a>
                                    <span>By <a href="blog-details.html">Doman Smith</a></span>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Modern CSS Tooltips And Speech Bubbles</a></h2>
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/calendar.svg" alt="" class="injectable"> Oct 21, 2025
                                        </li>
                                        <li>
                                            <img src="/assets/26_newversi/01_new/img/icons/comment.svg" alt="" class="injectable">
                                            <a href="blog-details.html">Comment: 15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->
    </main>
    <!-- main-area-end -->


@include('ver2.fe.00_fiturmenu.02_footerver2')
