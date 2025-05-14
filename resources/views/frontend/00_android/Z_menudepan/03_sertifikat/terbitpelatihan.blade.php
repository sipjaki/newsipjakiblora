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

                        <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
    <button onclick="downloadCertificate()" style="background-color: #28a745; color: white; padding: 12px 24px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; display: flex; align-items: center; gap: 10px; cursor: pointer; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#fff'; this.style.color='#000';" onmouseout="this.style.backgroundColor='#28a745'; this.style.color='#fff';">
        <i class="bi bi-download"></i> Download Sertifikat
    </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadCertificate() {
    // Hitung total jam pelajaran terlebih dahulu
    let totalJam = 0;
    const materiPelatihan = [
        @foreach($datapelajaran as $pelajaran)
        {
            materi: `{{ $pelajaran->materi ?? 'Data Tidak Tersedia' }}`,
            narasumber: `{{ $pelajaran->narasumber ?? 'Data Tidak Tersedia' }}`,
            jam: {{ (int)($pelajaran->jampelajaran ?? 0) }}
        },
        @php
            $totalJam += (int)($pelajaran->jampelajaran ?? 0);
        @endphp
        @endforeach
    ];
    totalJam = {{ $totalJam }};

    const element = document.createElement('div');
    element.style.width = '100%';
    element.style.fontFamily = "'Times New Roman', serif";

    // Halaman 1 - Sertifikat
    const page1 = document.createElement('div');
    page1.style.width = '297mm';
    page1.style.height = '210mm';
    page1.style.padding = '15mm';
    page1.style.boxSizing = 'border-box';
    page1.style.pageBreakAfter = 'always';
    page1.style.position = 'relative';
    page1.style.overflow = 'hidden';

    page1.innerHTML = `
        <div style="width:100%; height:100%; border:2px solid #000; padding:20px; position:relative;">
            <!-- Header -->
            <div style="text-align:center; margin-bottom:10px;">
                <img src="/assets/icon/logokabupatenblora.png" style="height:70px; display:inline-block; margin:0 15px;">
                <img src="/assets/icon/pupr.png" style="height:70px; display:inline-block; margin:0 15px;">
            </div>

            <hr style="border:1px solid #000; margin:5px 0 15px 0;">

            <!-- Judul -->
            <div style="text-align:center;">
                <h1 style="font-size:28px; margin:0 0 5px 0; font-weight:bold;">SERTIFIKAT</h1>
                <h2 style="font-size:16px; margin:0;">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
            </div>

            <!-- Konten -->
            <div style="text-align:center; margin-top:20px;">
                <p style="margin:5px 0;">diberikan kepada</p>
                <h2 style="font-size:28px; margin:10px 0; text-transform:uppercase;">{{ $data->namalengkap }}</h2>
                <h3 style="font-size:18px; margin:5px 0;">Sebagai</h3>
                <h2 style="font-size:24px; font-weight:bold; margin:10px 0;">PESERTA</h2>

                <div style="margin:20px 40px; text-align:justify; text-indent:50px; font-size:16px; line-height:1.5;">
                    Kegiatan <strong>{{ $data->agendapelatihan->namakegiatan }}</strong>
                    yang diselenggarakan oleh {{ $data->agendapelatihan->asosiasimasjaki->namaasosiasi }}
                    pada tanggal {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                    di {{ $data->agendapelatihan->lokasi }} meliputi ${totalJam} jam pelajaran.
                </div>
            </div>

            <!-- Tanda Tangan -->
            <div style="position:absolute; bottom:40px; right:40px; text-align:right;">
                <p style="margin:3px 0; font-size:14px;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong></p>
                <p style="margin:3px 0; font-size:14px;"><strong>Plt. KEPALA DINAS</strong></p>
                <p style="margin:3px 0; font-size:14px;"><strong>PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                <p style="margin:3px 0; font-size:14px;"><strong>KABUPATEN BLORA</strong></p>

                <div style="margin:10px 0; width:200px; height:80px; position:relative; margin-left:auto;">
                    <img src="/assets/icon/ttdpahuda.png" style="width:150px; position:absolute; top:0; left:0;">
                    <img src="/assets/icon/ttdkabblora.png" style="width:70px; position:absolute; top:0; left:30px;">
                </div>

                <p style="margin:3px 0; font-size:14px;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                <p style="margin:3px 0; font-size:14px;">NIP. 19720326 200604 1 005</p>
            </div>
        </div>
    `;

    // Halaman 2 - Agenda
    const page2 = document.createElement('div');
    page2.style.width = '297mm';
    page2.style.height = '210mm';
    page2.style.padding = '15mm';
    page2.style.boxSizing = 'border-box';
    page2.style.position = 'relative';
    page2.style.overflow = 'hidden';

    page2.innerHTML = `
        <div style="width:100%; height:100%; border:2px solid #000; padding:20px; position:relative;">
            <!-- Header -->
            <div style="text-align:center; margin-bottom:10px;">
                <img src="/assets/icon/logokabupatenblora.png" style="height:70px; display:inline-block; margin:0 15px;">
                <img src="/assets/icon/pupr.png" style="height:70px; display:inline-block; margin:0 15px;">
            </div>

            <hr style="border:1px solid #000; margin:5px 0 15px 0;">

            <!-- Judul -->
            <div style="text-align:center; margin-bottom:20px;">
                <h2 style="font-size:20px; margin:5px 0; font-weight:bold;">Agenda Pelatihan :</h2>
                <h3 style="font-size:18px; margin:5px 0;">{{ $data->agendapelatihan->namakegiatan }}</h3>
            </div>

            <!-- Tabel -->
            <div style="margin-top:10px;">
                <table style="width:100%; border-collapse:collapse; font-size:14px;">
                    <thead>
                        <tr>
                            <th style="border:1px solid #000; padding:8px; text-align:center; width:10%;">No</th>
                            <th style="border:1px solid #000; padding:8px; text-align:left; width:45%;">Materi</th>
                            <th style="border:1px solid #000; padding:8px; text-align:left; width:30%;">Narasumber</th>
                            <th style="border:1px solid #000; padding:8px; text-align:center; width:15%;">Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        ${materiPelatihan.map((item, index) => `
                            <tr>
                                <td style="border:1px solid #000; padding:8px; text-align:center;">${index + 1}</td>
                                <td style="border:1px solid #000; padding:8px;">${item.materi}</td>
                                <td style="border:1px solid #000; padding:8px;">${item.narasumber}</td>
                                <td style="border:1px solid #000; padding:8px; text-align:center;">${item.jam} Jam</td>
                            </tr>
                        `).join('')}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" style="border:1px solid #000; padding:8px; text-align:right; font-weight:bold;">Total Jam Pelajaran :</td>
                            <td style="border:1px solid #000; padding:8px; text-align:center; font-weight:bold;">${totalJam} Jam</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Footer -->
            <div style="position:absolute; bottom:30px; left:0; right:0; text-align:center;">
                <h4 style="text-transform:uppercase; margin:5px 0; font-size:16px;">{{ $data->namalengkap }}</h4>
                <p style="margin:3px 0; font-size:14px;">
                    Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora<br>
                    Diterbitkan Pada : {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                </p>
            </div>
        </div>
    `;

    element.appendChild(page1);
    element.appendChild(page2);

    // Konfigurasi PDF
    const opt = {
        margin: 0,
        filename: 'Sertifikat_{{ str_replace(" ", "_", $data->namalengkap) }}.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: {
            scale: 2,
            useCORS: true,
            letterRendering: true,
            allowTaint: true
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'landscape',
            compress: true
        },
        pagebreak: { mode: ['avoid-all', 'css'] }
    };

    // Generate PDF
    html2pdf().set(opt).from(element).save();
}
</script>



                    </div>
                    </div>
                    </div>
                    </div>
                        <!--end::Quick Example-->



                        </div>
                    </div>

    @include('frontend.00_android.00_fiturmenu.keterangan')

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
