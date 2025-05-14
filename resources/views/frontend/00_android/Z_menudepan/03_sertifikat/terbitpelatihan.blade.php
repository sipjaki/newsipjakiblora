<style>
                                        /* Styling untuk tabel */
                                        .custom-table {
                                            width: 100%;
                                            border-collapse: collapse;
                                            margin-top: 20px;
                                            font-size: 16px;
                                            border: 1px solid #ddd;
                                            border-radius: 10px; /* Border radius pada luar tabel */
                                            overflow: hidden; /* Supaya border-radius terlihat di sudut luar */
                                        }

                                        .custom-table th,
                                        .custom-table td {
                                            padding: 10px 20px;
                                            text-align: left;
                                            font-size: 16px;
                                        }

                                        /* Gradasi hijau dan emas untuk header */
                                        .custom-table thead tr th {
                                            background: linear-gradient(135deg, #4caf50, #ffb300); /* Gradasi hijau ke emas */
                                            color: white;
                                        }

                                        /* Hover effect pada row */
                                        .table-row-hover:hover {
                                            background-color: #f7fafc;
                                            transition: background-color 0.3s ease;
                                        }

                                        /* Styling row ganjil dan genap */
                                        .custom-table tr:nth-child(even) {
                                            background-color: #f9fafb;
                                        }

                                        .custom-table tr:nth-child(odd) {
                                            background-color: #ffffff;
                                        }

                                        .custom-table td {
                                            color: #333;
                                        }
                                    </style>
<style>
/* Font kaligrafi */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

.nama-sertifikat {
    font-family: 'Great Vibes', cursive;
    font-size: 16px;
    text-align: center;
    color: #bfa144;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    margin: 30px 0;
    letter-spacing: 1px;
}

.cert-container {
    width: 297mm;
    height: 210mm;
    background: linear-gradient(to right, #f1f8e9 0%, #f9f5e8 100%);
    border: 15px double #2e7d32;
    border-image: linear-gradient(45deg, #2e7d32, #d4af37, #2e7d32) 1;
    padding: 30px;
    box-shadow: 0 0 30px rgba(0,0,0,0.3);
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
    margin-left: 200px;
}

/* Ornamen latar belakang */
.cert-container::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path fill="%23d4af3780" d="M30,10 Q50,5 70,10 Q95,15 90,40 Q85,65 70,80 Q50,95 30,80 Q15,65 10,40 Q5,15 30,10 Z"/></svg>');
    opacity: 0.1;
    z-index: 0;
}

/* Pita kiri bawah */
.cert-container .ribbon-left {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #d4af37, #2e7d32);
    clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
    z-index: 2;
}

.ribbon-left {
    position: relative;
    background-color: #ffcc00;
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
}

.ribbon-text {
    margin-left: 20px;
    text-align: left;
    font-size: 16px;
    font-weight: 800;
}

/* Pita kanan bawah */
.cert-container .ribbon-right {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #b71c1c, #e53935);
    clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
    z-index: 2;
}

.cert-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.cert-logos {
    display: flex;
    justify-content: center;
    gap: 20px;
    filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.2));
    width: 100%;
    margin-bottom: 20px;
}

.cert-title {
    text-align: center;
    margin-bottom: 30px;
    position: relative;
    z-index: 1;
}

.cert-content {
    margin: 30px 0;
    line-height: 1.6;
    position: relative;
    z-index: 1;
    padding: 0 50px;
}

.cert-signature {
    text-align: right;
    margin-top: 40px;
    position: relative;
    z-index: 1;
}

.cert-footer {
    text-align: center;
    margin-top: 30px;
    font-size: 0.9em;
    color: #2e7d32;
    position: relative;
    z-index: 1;
}

.cert-h1 {
    font-size: 32px;
    margin: 0;
    color: #1b5e20;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    letter-spacing: 1px;
}

.cert-h2 {
    font-size: 20px;
    margin: 10px 0;
    color: #2e7d32;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

.cert-h3 {
    font-size: 16pt;
    margin: 5px 0;
    color: #1b5e20;
}

.cert-hr {
    border: none;
    height: 2px;
    background: linear-gradient(to right, transparent, #d4af37, #2e7d32, #d4af37, transparent);
    margin: 20px 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.cert-highlight {
    font-weight: bold;
    color: #1b5e20;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
}

.cert-border-decoration {
    position: absolute;
    width: 50px;
    height: 50px;
    background-color: #d4af37;
    opacity: 0.2;
    z-index: 0;
}

.cert-border-decoration:nth-child(1) {
    top: 20px;
    left: 20px;
    border-radius: 50% 50% 0 50%;
}

.cert-border-decoration:nth-child(2) {
    top: 20px;
    right: 20px;
    border-radius: 50% 50% 50% 0;
}

.cert-border-decoration:nth-child(3) {
    bottom: 20px;
    left: 20px;
    border-radius: 50% 0 50% 50%;
}

.cert-border-decoration:nth-child(4) {
    bottom: 20px;
    right: 20px;
    border-radius: 0 50% 50% 50%;
}

/* Untuk cetak */
/* @page {
    size: A4 landscape;
    margin: 0;
} */

/* Responsiveness untuk HP */
/* @media screen and (max-width: 768px) {
    .cert-container {
        transform: scale(0.5);
        transform-origin: top left;
        width: 170vw;
        height: 190vw;
        margin-left: 0;
        padding: 10px;
        box-shadow: none;
        border-width: 8px;
    }

    .cert-content {
        padding: 0 20px;
    }

    .nama-sertifikat {
        font-size: 12px;
    }

    .cert-h1 {
        font-size: 20px;
    }

    .cert-h2 {
        font-size: 16px;
    }

    .cert-h3 {
        font-size: 14px;
    }

    .cert-signature {
        font-size: 12px;
    }

    .cert-footer {
        font-size: 10px;
    }

    .ribbon-left, .ribbon-right {
        width: 60px;
        height: 25px;
    }

    .ribbon-text {
        font-size: 10px;
        margin-left: 10px;
    }
} */
</style>



@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama1.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">
                <nav class="pt-5 px-3 flex justify-between items-center">
                    <!-- Logo bagian kiri -->
                    <div class="flex items-center gap-[10px]">
                        <a href="index.html" class="w-10 h-10 flex shrink-0">
                            <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                        </a>
                    </div>

                    <!-- Judul bagian tengah -->
                    <div class="flex flex-col items-center justify-center text-center">
                        <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                        <br>
                        {{-- <p class="font-semibold text-xl text-white">{{$title}}</p> --}}
                      <div class="z-10" style="margin-top:25px; background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
            <h1 class="font-bold leading-[36px] text-center" style="color: black; font-size:20px;">
                {{$title}}
            </h1>
        </div>
                    </div>

                    <!-- Ikon bagian kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                    </a>
                </nav>
            </div>

                    <div class="flex flex-col gap-4 px-4" style="margin-top:-100px;">

                        <div id="sertifikat-content">

                            <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                <div class="col-md-12" style="height:250px;">
                 <div style="display: flex; justify-content: flex-start; width: 100%; overflow: auto; margin-left:-50px;">
                    <div style="transform: scale(0.3); transform-origin: top left;">
                        <div class="cert-container">
                            <div class="cert-header" style="text-align: center;">
                                <!-- Logo di atas -->
                                <div class="cert-logos" style="margin-bottom: 10px;">
                                    <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                                    <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                                </div>
                            </div>

                            <hr class="cert-hr" style="margin-top: -5px;">

                            <div class="cert-title" style="margin-top: -10px;">
                                <h1 class="cert-h1">SERTIFIKAT</h1>
                                <h2 class="cert-h2">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
                            </div>

                            <div class="cert-content" style="margin-top: -20p`x;">
                                <p style="text-align: center; margin-top:-20px;">diberikan kepada</p>

                                <h2 class="cert-h2" style="text-align: center; margin: 20px 0;">{{ strtoupper($data->namalengkap) }}</h2>
                                {{-- <h2 style="text-align: center; margin: 20px 0; font-size:28px;" >Miftahunnuril Anam, S.E</h2> --}}

                                <h3 class="cert-h3" style="text-align: center; margin-top:-20px;">Sebagai</h3>
                                <h2 class="cert-h2" style="text-align: center; margin: 15px 0; font-weight:800;">PESERTA</h2>
                                @php
                                    $totalJam = 0;
                                    foreach ($datapelajaran as $pelajaran) {
                                        $totalJam += (int) ($pelajaran->jampelajaran ?? 0);
                                    }
                                @endphp

                                <p style="text-align: justify; text-indent: 50px; margin: 0 50px;">
                                    Kegiatan <span class="cert-highlight">{{ $data->agendapelatihan->namakegiatan }}</span>
                                    yang diselenggarakan oleh {{ $data->agendapelatihan->asosiasimasjaki->namaasosiasi }}
                                    pada tanggal {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                                    di {{ $data->agendapelatihan->lokasi }} meliputi {{ $totalJam }} jam pelajaran.
                                </p>

                            </div>

                            <div class="cert-signature" style="margin-top: -10px;">
                                <p style="margin: 0;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong> </p>
                                <p style="margin: 0;"><strong>Plt. KEPALA DINAS <br> PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                                <p style="margin: 0;"><strong>KABUPATEN BLORA</strong></p>

                                <div style="display: flex; justify-content: flex-end; margin-right: -125px;"> <!-- Tambah ini -->
                                    <div style="position: relative; width: 400px; height: 100px;">
                                        <img src="/assets/icon/ttdpahuda.png" alt="" width="250px;" style="position: absolute; top: 0; left: 0; z-index: 1;">
                                        <img src="/assets/icon/ttdkabblora.png" alt="" width="115px;" style="position: absolute; top: 0; left: 50px; z-index: 2;">
                                    </div>
                                </div>

                                <p style="margin: 0;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                                {{-- <p>PEKBINA UTAMA MADYA</p> --}}
                                <p style="margin: 0;">NIP. 19720326 200604 1 005</p>
                            </div>
                            <div class="ribbon-left"></div>
                            {{-- <div class="ribbon-right"></div> --}}
                        </div>
                        </div>
                    </div>
                    </div>
                        <!--end::Quick Example-->
<br><br>

    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                    <div class="col-md-12" style="height:250px;">
                        <div style="display: flex; justify-content: flex-start; width: 100%; overflow: auto; margin-left:-50px;">
                            <div style="transform: scale(0.3); transform-origin: top left;">
                                <div class="cert-container">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quo voluptates quod labore quisquam perferendis earum. Quaerat facere aliquam dolores quisquam, inventore minima deserunt et necessitatibus laboriosam ab nobis eos exercitationem provident itaque, enim obcaecati recusandae eaque. Sit esse odio minima modi similique illum, ad ducimus, dicta perspiciatis quos autem quas dolor. Ratione reprehenderit, ea expedita a reiciendis, modi dolorum sequi voluptate quod natus saepe nulla dolores! Quam sapiente dolorum, officia laboriosam deserunt commodi, iste magnam non itaque placeat ab architecto reprehenderit, ipsa molestias corrupti voluptatem inventore maxime voluptate? Sit incidunt laudantium exercitationem quaerat distinctio magni molestias impedit reprehenderit, culpa nobis delectus, dolore aperiam eveniet, dolores quos asperiores assumenda ut! Voluptates dignissimos excepturi ipsum numquam adipisci sequi doloremque assumenda non similique deserunt pariatur dolore recusandae molestias, reiciendis, optio in quia, quasi nesciunt? Provident, error. Exercitationem quisquam reprehenderit, earum consectetur ipsum itaque, id voluptatem possimus aliquam esse nam. Et, quasi exercitationem! Molestiae, at. Asperiores velit eveniet reiciendis dolores tempora, consectetur animi. Numquam eveniet atque quo similique totam doloremque quaerat quis architecto at aliquam laudantium tempore saepe error, magnam debitis veritatis minima dolores nihil. Eveniet accusantium numquam, at blanditiis molestiae id ex, modi laudantium ad cupiditate architecto veritatis repellat. Voluptatibus dignissimos iure illum odio autem possimus quo tenetur perferendis necessitatibus, exercitationem cupiditate earum nulla laboriosam repudiandae obcaecati dicta quam quia nemo, aperiam amet quos! Doloribus ipsam perspiciatis quo, illo at voluptas animi sed alias recusandae veritatis quae deserunt aperiam cupiditate amet totam exercitationem atque deleniti sunt expedita sint? Aspernatur voluptatum modi error voluptates quasi excepturi magni dignissimos reiciendis quidem nostrum accusamus, maiores quo ratione minus quia alias, fugit quod. Est recusandae vero aliquid dicta ipsa maxime porro. Tempore perspiciatis at quae cumque provident neque minus praesentium, porro delectus excepturi explicabo ex, quam dolore itaque molestias magnam facilis architecto minima. Aspernatur neque odio provident optio in iure illum ducimus atque eaque adipisci ab vel, corrupti eos reiciendis a quae quaerat quis autem odit doloribus? Corrupti omnis asperiores dolore molestiae suscipit. Temporibus reiciendis veniam placeat magni, distinctio ad saepe aperiam nisi illum illo quasi dolor! Doloribus, quae? Accusantium natus deleniti repellat dolorum enim distinctio quas saepe dolorem nemo aspernatur alias perspiciatis cum, nostrum recusandae at cupiditate! Exercitationem ipsam culpa atque illum saepe illo amet aliquid assumenda reiciendis ab minima nam, recusandae magnam harum distinctio repudiandae ipsum est voluptatum nisi rerum. Maiores quidem inventore animi quod ab veniam tempora at repellendus laudantium! Eius reprehenderit voluptas omnis fuga porro aut nemo nobis id, ex dignissimos dolorum laboriosam aspernatur quae minima explicabo provident magnam? Tempora ipsam dolorum velit! Ea vitae laboriosam temporibus. Assumenda, nemo reiciendis possimus quibusdam provident est necessitatibus iusto sunt, error autem incidunt voluptates vero laborum reprehenderit nihil libero tempore magnam non, voluptatum voluptatibus id inventore cupiditate iure. A ut ipsum quaerat quod hic iste, vero soluta? Dolorem, ea ab accusamus ex vero eveniet repellat doloremque, vel unde illum esse corporis maiores quisquam quidem molestiae neque dolorum nostrum officia ratione. Omnis, labore nisi voluptate aspernatur quis harum iure, assumenda facilis quasi eum iste voluptatem aliquam ad distinctio, necessitatibus consequatur maiores voluptatibus aliquid sit itaque eaque cum dolorem velit! Deleniti sint, corrupti quaerat quia neque, dolorum consectetur quam laudantium soluta officiis repellat qui animi fugit iusto impedit nobis ratione molestiae labore consequatur eius nemo ut sed officia vitae. Praesentium nostrum quidem amet, voluptates officiis velit dolorum voluptate dolore nobis iusto cum itaque! Distinctio eveniet officiis minima, iusto tenetur architecto neque quo corrupti amet quod optio eum, reiciendis nostrum exercitationem dicta labore id? Necessitatibus, consectetur libero. Dolorem optio omnis aliquam, consequatur deserunt quos fugit, alias provident aperiam unde minus architecto eum esse dolores veniam quisquam doloremque non, culpa quae neque explicabo porro laudantium dolore. Voluptatem necessitatibus, asperiores voluptas quibusdam labore assumenda voluptates aut distinctio perspiciatis repellat soluta, incidunt nam corporis deleniti eligendi est. Explicabo eum et nulla nobis distinctio sapiente qui suscipit? Nihil possimus necessitatibus dolor vitae nemo corporis, illo exercitationem laborum nulla repudiandae neque eligendi earum temporibus qui laboriosam pariatur quisquam. Ad rem quisquam vitae? Laboriosam atque iusto optio ex nihil excepturi, accusamus rem quia eveniet exercitationem cum tempora omnis quisquam? Doloribus inventore excepturi iste, possimus quis nostrum suscipit placeat enim quae ducimus provident quo a assumenda nesciunt quidem amet cum accusantium. Eius repudiandae sit culpa velit corrupti optio tenetur porro, architecto eveniet molestias perspiciatis ipsam similique provident fuga itaque voluptate tempore asperiores nobis dolores atque delectus magnam, eaque soluta? Libero quisquam eum facilis eveniet, minus fugit, odio harum dolore cum deleniti autem inventore a delectus quasi. Eius perspiciatis unde facilis distinctio atque ipsa similique fugit dolores accusantium eos! Numquam qui odit repellendus dolor? Esse quam consequuntur maiores veniam nemo officiis, maxime accusantium qui soluta dicta placeat ut molestias laborum est et nesciunt saepe cumque pariatur ipsa deserunt dolor corrupti ab? Quis, officiis, beatae impedit ipsam omnis quas ullam quos, eligendi architecto ex vero exercitationem rerum distinctio nisi. Doloremque, corporis eius facere repudiandae sequi necessitatibus dicta facilis, provident repellendus accusamus vel commodi. Omnis reiciendis accusamus quibusdam, tempore id culpa doloremque expedita dolorem, repellendus aspernatur magnam optio facilis ipsa hic esse, quaerat ipsam fuga nostrum porro tenetur exercitationem! Amet explicabo voluptas odio, itaque labore illo aut minus necessitatibus? Maiores quidem magni temporibus tempore rem optio distinctio corporis nemo voluptatum vitae tenetur sequi iste minima adipisci facere debitis, in quas sunt? Veniam dolorem, officia facilis et blanditiis culpa quae natus ea. Illo fugiat ipsum natus perferendis minus, repellat obcaecati doloremque repudiandae! Id consequatur debitis laborum nesciunt, adipisci numquam fugiat laboriosam tempora animi, veritatis voluptatum pariatur veniam eius cumque voluptas. Ratione expedita incidunt tenetur, iure officiis quaerat adipisci amet voluptatum quibusdam earum tempore, consequuntur laboriosam! Nesciunt quidem expedita quo dolore ratione quaerat iusto, laborum ullam enim cupiditate optio corrupti repellat tempora rem sint possimus reiciendis! Et similique cumque sed commodi eligendi quidem a? Repellat cumque vitae modi voluptatibus eveniet laborum eligendi soluta! Delectus pariatur quisquam eaque officia dicta nesciunt dolores similique vel sed inventore deleniti, sequi vitae vero cum, earum ratione, esse odio possimus doloremque? Aspernatur corrupti ratione atque vel in, maiores inventore alias similique, nemo blanditiis qui vitae.</p>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
