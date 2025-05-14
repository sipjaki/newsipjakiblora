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

                    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                    <div class="col-md-12" style="height:250px;">
                        <div style="display: flex; justify-content: flex-start; width: 100%; overflow: auto; margin-left:-50px;">
                            <div style="transform: scale(0.3); transform-origin: top left;">
                                <div class="cert-container">

                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab alias magnam totam, nam doloremque et, ducimus laudantium quisquam error eius nisi pariatur accusamus eum qui facere molestiae, perspiciatis velit consequuntur non adipisci? Odio itaque rerum excepturi magni aliquid, non laudantium ducimus debitis laboriosam, libero iste minima dolore asperiores numquam illo nemo. Vel sed excepturi quaerat dolor tempora eveniet inventore voluptatibus aliquam, odio hic, id eius temporibus neque nesciunt, tenetur perferendis labore maiores. Consectetur iusto ullam, delectus rem molestiae nulla pariatur fuga enim voluptate sunt itaque assumenda eligendi nesciunt et ipsam similique error dignissimos animi asperiores maxime, iure repellendus, architecto cumque! Voluptatibus, voluptatem dolores. Magni delectus molestias enim nesciunt reprehenderit quibusdam quis ullam doloribus, placeat perferendis sint saepe consequuntur exercitationem eos tenetur animi dolorum illum. Accusamus, exercitationem? Asperiores maxime mollitia quidem recusandae at maiores fugiat dignissimos expedita, magni amet quae accusantium eaque aperiam, nemo sit tempora. Tempore voluptatem excepturi assumenda at tenetur ullam nobis explicabo ducimus iste nemo? Vitae enim rem aut quo sequi nulla suscipit est iusto tenetur vel! Consequatur tempore nam nulla. In similique magni adipisci natus, quaerat, sapiente cum harum suscipit earum, mollitia hic ut voluptatibus beatae quasi optio quisquam sit vero accusantium? Totam molestiae blanditiis eligendi explicabo perferendis excepturi id doloribus quisquam nam? Dignissimos, provident quis vero cumque officiis eius esse reprehenderit consequatur! Exercitationem hic natus architecto atque deserunt dolore ad! Quam dolorem dolor sunt saepe est hic voluptate natus, eum, itaque quos ab quaerat velit a perspiciatis. Modi, molestias nulla. Sunt distinctio accusamus vero architecto maiores libero necessitatibus quidem. Nostrum tempora non fuga officia suscipit voluptas nisi doloribus rerum nesciunt. Ipsam eos harum eveniet quo adipisci cupiditate ex omnis voluptas ut aliquid, nemo totam fugiat earum sint itaque praesentium vitae, deserunt fugit nihil iste qui? Voluptatibus ad vitae dolor deserunt expedita odio maiores explicabo voluptatem aliquam hic nesciunt repellat aliquid doloremque consequatur quaerat ab nulla, iste alias! Odit tempora a similique exercitationem tenetur distinctio nostrum, ipsam, impedit molestiae cum magnam dolorem provident. Illum accusantium placeat sapiente esse quaerat incidunt perferendis laudantium ex earum, aliquam vero inventore aspernatur? Aperiam itaque dolorem asperiores nemo aut saepe tempore! Eum cum enim distinctio. Nulla iste eum dolores. Commodi explicabo natus quis eius iure, mollitia inventore obcaecati nemo rem quas ipsam eligendi aperiam sed magnam reiciendis debitis consequuntur pariatur tempore dolore. Cumque rem, labore explicabo ducimus, quo eveniet blanditiis, similique reiciendis repellendus quam error! Assumenda numquam maxime commodi aspernatur nam, velit neque eligendi dignissimos doloremque dicta aperiam consequuntur earum officiis soluta quis error eaque veritatis sequi harum esse doloribus adipisci in quia reiciendis. Sint vitae sit consectetur repudiandae tenetur molestias, ex saepe dolore debitis ea nobis deleniti culpa, et sunt temporibus veniam! Officiis mollitia tempora tenetur at fuga nesciunt, error dolorem! Praesentium ratione delectus magni, maiores nihil voluptates libero quia quibusdam officiis expedita mollitia facilis reprehenderit ipsa. Illum eaque, ipsa quis repellat cupiditate quod voluptatibus praesentium animi odio assumenda quam autem adipisci, facilis, nisi nihil. Voluptate numquam consequuntur aliquid debitis dicta laborum earum, aliquam culpa dolore velit commodi, porro, cum vitae voluptatem facilis hic itaque eius magnam. Obcaecati libero laudantium velit officia? Saepe, aut tempore. Similique atque dignissimos, harum quam sit provident fuga quos. Laboriosam nulla ratione veniam quis nesciunt nemo quos rem tenetur, esse reprehenderit id aspernatur sit, eos consequuntur. Dolores iusto nobis officia, itaque minus quasi repellendus, perspiciatis quibusdam sunt hic vel laborum quis iure! Sit nam minus impedit error eos consequuntur sunt. Consequatur, nisi unde aliquid, inventore eius asperiores reiciendis assumenda dolores ea similique quam in natus nihil id expedita animi veritatis dolor tenetur autem vero necessitatibus. Hic officia eligendi ea iure sapiente dolorum laudantium, iusto quae deleniti vel consequuntur nisi mollitia dolorem, architecto tempore pariatur facere iste eaque sit necessitatibus distinctio similique aliquid repudiandae ratione! Reprehenderit illo dicta eos, totam obcaecati architecto animi corporis amet delectus consequatur nesciunt quo soluta sint nemo nulla quis aliquam iusto. Voluptatem ex quis inventore exercitationem dolore deleniti, delectus voluptate impedit, nisi distinctio quaerat suscipit iusto placeat alias odit officiis molestiae numquam ut odio, labore fugiat nemo doloremque. Ipsam sunt nostrum in libero quas exercitationem consectetur est voluptates doloremque animi at hic minus debitis repellendus blanditiis dolorum et nulla, excepturi obcaecati. Adipisci eius animi quo vitae accusantium placeat officiis pariatur, vero veniam molestiae optio unde consequatur soluta maxime sed est nesciunt eum aut corporis blanditiis porro neque et! Ut quis dolorem, tempore modi laborum id consequatur nobis sed eveniet deserunt obcaecati, pariatur illum provident architecto! Distinctio laudantium inventore blanditiis quae, laboriosam perspiciatis dolorum! Non repellat voluptas vitae maiores perferendis! Asperiores voluptates, corporis doloremque est deserunt amet, eaque, placeat vero in eligendi officiis. Maxime dolorem aliquid minima dignissimos, facere assumenda quos quis ut illo architecto, labore nostrum incidunt iste magnam quia, nisi pariatur dolorum officiis! Expedita accusamus itaque neque deleniti, ipsum nam tempora quisquam. Modi pariatur tenetur nulla rem, accusantium repellat voluptate illo minima atque. Magni eius accusantium, porro quasi alias quae voluptatum nostrum, beatae voluptatibus tempore atque libero ipsa totam, accusamus labore commodi. Eius dolores dolorum alias laborum, velit explicabo porro amet aliquid inventore consequatur in iste non odit libero nihil cupiditate soluta blanditiis dolore molestiae consectetur necessitatibus fuga! Eaque possimus blanditiis inventore reprehenderit impedit vitae officiis, totam odio ipsa odit commodi minus? Voluptatem hic alias beatae itaque qui numquam odit facilis totam natus ab rerum, dolorem repudiandae adipisci repellendus quaerat consequatur harum autem non fuga magnam fugiat aperiam libero quasi velit. Nam iste, possimus accusantium error, aperiam, nihil ipsum ipsam mollitia ab atque quia inventore illo officia nobis rerum hic vero rem eveniet odio! Explicabo voluptatibus ducimus, quis in ut dolor suscipit iusto totam porro nam ea sint molestiae neque consectetur ratione maxime natus fugiat sunt! Ab quasi, obcaecati doloremque dignissimos fugiat ea unde perferendis eos dolore quis quibusdam, provident nesciunt, error et. Ipsam quam neque voluptatibus eius architecto. A, sed animi perferendis doloremque officiis, maiores nihil neque, aspernatur magni labore sit ratione maxime culpa tenetur blanditiis eos magnam fuga quibusdam! Possimus a unde sed cum eos fugiat ducimus ea tenetur odio? Autem, cum! Aperiam velit quos similique ea voluptatibus quisquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>


                    </div>
                        <!--end::Quick Example-->
<br><br>


                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
