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
    <button
        style="
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        "
        onclick="downloadCertificate()"
        onmouseover="this.style.backgroundColor='#fff'; this.style.color='#000';"
        onmouseout="this.style.backgroundColor='#28a745'; this.style.color='#fff';"
    >
        <i class="bi bi-download"></i> Download Sertifikat
    </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadCertificate() {
    // Buat elemen div untuk menampung konten yang akan di-download
    const element = document.createElement('div');

    // Tambahkan konten sertifikat (halaman 1)
    element.innerHTML += `
        <div style="width: 297mm; height: 210mm; padding: 20mm; page-break-after: always;">
            <div class="cert-container" style="border: 2px solid #000; padding: 20px; height: 100%; position: relative;">
                <div class="cert-header" style="text-align: center;">
                    <div class="cert-logos" style="margin-bottom: 10px;">
                        <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                        <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                    </div>
                </div>

                <hr style="margin-top: -5px; border: 1px solid #000;">

                <div class="cert-title" style="margin-top: -10px; text-align: center;">
                    <h1 style="font-size: 28px; margin-bottom: 5px;">SERTIFIKAT</h1>
                    <h2 style="font-size: 16px; margin-top: 0;">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
                </div>

                <div class="cert-content" style="margin-top: -20px;">
                    <p style="text-align: center; margin-top:-20px;">diberikan kepada</p>

                    <h2 style="text-align: center; margin: 20px 0; font-size: 28px;">{{ strtoupper($data->namalengkap) }}</h2>

                    <h3 style="text-align: center; margin-top:-20px; font-size: 18px;">Sebagai</h3>
                    <h2 style="text-align: center; margin: 15px 0; font-weight:800; font-size: 24px;">PESERTA</h2>
                    @php
                        $totalJam = 0;
                        foreach ($datapelajaran as $pelajaran) {
                            $totalJam += (int) ($pelajaran->jampelajaran ?? 0);
                        }
                    @endphp

                    <p style="text-align: justify; text-indent: 50px; margin: 0 50px; font-size: 16px;">
                        Kegiatan <span style="font-weight: bold;">{{ $data->agendapelatihan->namakegiatan }}</span>
                        yang diselenggarakan oleh {{ $data->agendapelatihan->asosiasimasjaki->namaasosiasi }}
                        pada tanggal {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                        di {{ $data->agendapelatihan->lokasi }} meliputi {{ $totalJam }} jam pelajaran.
                    </p>
                </div>

                <div class="cert-signature" style="position: absolute; bottom: 50px; right: 50px; text-align: right;">
                    <p style="margin: 0; font-size: 14px;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong> </p>
                    <p style="margin: 0; font-size: 14px;"><strong>Plt. KEPALA DINAS <br> PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                    <p style="margin: 0; font-size: 14px;"><strong>KABUPATEN BLORA</strong></p>

                    <div style="margin-top: 20px; margin-bottom: 10px;">
                        <div style="position: relative; width: 200px; height: 80px; margin-left: auto;">
                            <img src="/assets/icon/ttdpahuda.png" alt="" width="150px" style="position: absolute; top: 0; left: 0; z-index: 1;">
                            <img src="/assets/icon/ttdkabblora.png" alt="" width="70px" style="position: absolute; top: 0; left: 30px; z-index: 2;">
                        </div>
                    </div>

                    <p style="margin: 0; font-size: 14px;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                    <p style="margin: 0; font-size: 14px;">NIP. 19720326 200604 1 005</p>
                </div>
            </div>
        </div>
    `;

    // Tambahkan konten agenda pelatihan (halaman 2)
    element.innerHTML += `
        <div style="width: 297mm; height: 210mm; padding: 20mm;">
            <div class="cert-container" style="border: 2px solid #000; padding: 20px; height: 100%; position: relative;">
                <div class="cert-header" style="text-align: center;">
                    <div class="cert-logos" style="margin-bottom: 10px;">
                        <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora" style="margin-right: 2px;">
                        <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                    </div>
                </div>

                <hr style="margin-top: -5px; border: 1px solid #000;">

                <div class="cert-title" style="margin-top: -10px; text-align: center;">
                    <h2 style="text-align: center; margin: 15px 0; font-weight:800; font-size: 20px;">Agenda Pelatihan : <br>{{$data->agendapelatihan->namakegiatan}}</h2>
                </div>

                <div class="cert-content">
                    <div style="overflow: auto;">
                        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #000; padding: 8px; font-size: 14px;" width="10%">No</th>
                                    <th style="border: 1px solid #000; padding: 8px; font-size: 14px;" width="40%">Materi</th>
                                    <th style="border: 1px solid #000; padding: 8px; font-size: 14px;" width="30%">Narasumber</th>
                                    <th style="border: 1px solid #000; padding: 8px; font-size: 14px;" width="20%">Jam Pelajaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalJam = 0;
                                @endphp
                                @forelse ($datapelajaran as $key => $pelajaran)
                                <tr>
                                    <td style="border: 1px solid #000; padding: 8px; font-size: 14px; text-align: center;">{{ $key + 1 }}</td>
                                    <td style="border: 1px solid #000; padding: 8px; font-size: 14px;">{{ $pelajaran->materi ?? 'Data Tidak Tersedia' }}</td>
                                    <td style="border: 1px solid #000; padding: 8px; font-size: 14px;">{{ $pelajaran->narasumber ?? 'Data Tidak Tersedia' }}</td>
                                    <td style="border: 1px solid #000; padding: 8px; font-size: 14px; text-align: center;">
                                        {{ $pelajaran->jampelajaran ?? 'Data Tidak Tersedia' }} Jam
                                    </td>
                                </tr>
                                @php
                                    $totalJam += (int) ($pelajaran->jampelajaran ?? 0);
                                @endphp
                                @empty
                                <tr>
                                    <td colspan="4" style="border: 1px solid #000; padding: 8px; text-align: center;">Data tidak tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" style="border: 1px solid #000; padding: 8px; text-align: right; font-weight: bold; font-size: 14px;">
                                        <i class="bi bi-calendar" style="margin-right: 8px;"></i>Total Jam Pelajaran :
                                    </td>
                                    <td style="border: 1px solid #000; padding: 8px; text-align: center; font-weight: bold; font-size: 14px;">
                                        {{ $totalJam }} Jam
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div style="position: absolute; bottom: 30px; left: 0; right: 0; text-align: center;">
                    <h4 style="text-transform: uppercase; margin-bottom: 5px;">{{ strtoupper($data->namalengkap) }}</h4>
                    <p style="margin: 0; font-size: 14px;">
                        Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                        <br> Diterbitkan Pada : {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}
                    </p>
                </div>
            </div>
        </div>
    `;

    // Opsi untuk html2pdf
    const opt = {
        margin: 10,
        filename: 'Sertifikat_{{ str_replace(" ", "_", $data->namalengkap) }}.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' }
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

                          {{-- <div class="col-md-12">
    <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
        <button
            style="
                background-color: #28a745;
                color: white;
                padding: 12px 24px;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 10px;
                cursor: pointer;
                transition: all 0.3s ease;
            "
            onmouseover="this.style.backgroundColor='#fff'; this.style.color='#000';"
            onmouseout="this.style.backgroundColor='#28a745'; this.style.color='#fff';"
        >
            <i class="bi bi-download"></i> Download Sertifikat
        </button>
    </div>
</div> --}}


                        </div>
                    </div>

    @include('frontend.00_android.00_fiturmenu.keterangan')

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
