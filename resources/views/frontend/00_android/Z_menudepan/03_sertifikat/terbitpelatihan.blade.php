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
@page {
    size: A4 landscape;
    margin: 0;
}

/* Responsiveness untuk HP */
@media screen and (max-width: 768px) {
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
}
</style>



@include('frontend.00_android.00_fiturmenu.header')
<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="certificate-container">
        <div class="header">
            <div class="header-content">
                <nav class="flex justify-between items-center">
                    <!-- Logo kiri -->
                    <div class="flex items-center gap-[10px]">
                        <a href="index.html" class="w-10 h-10 flex shrink-0">
                            <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                        </a>
                    </div>

                    <!-- Judul tengah -->
                    <div class="flex flex-col items-center justify-center text-center">
                        <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                    </div>

                    <!-- Logo kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </nav>

                <div class="title-box">
                    <h1 class="font-bold leading-[36px] text-center" style="color: black; font-size:20px;">
                        {{$title}}
                    </h1>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 px-4" style="margin-top:-100px;">
            <!-- Certificate Content 1 -->
            <div id="sertifikat-content-1" class="cert-card">
                <div class="cert-container">
                    <div class="cert-header" style="text-align: center;">
                        <div class="cert-logos">
                            <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora">
                            <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                        </div>
                    </div>

                    <hr class="cert-hr">

                    <div class="cert-title" style="margin-top: -10px;">
                        <h1 class="cert-h1">SERTIFIKAT</h1>
                        <h2 class="cert-h2">Nomor : DPUPR/BG/TKK/V/{{$data->id}}</h2>
                    </div>

                    <div class="cert-content">
                        <p style="text-align: center;">diberikan kepada</p>
                        <h2 class="cert-h2" style="text-align: center; margin: 20px 0;">{{ strtoupper($data->namalengkap) }}</h2>
                        <h3 class="cert-h3" style="text-align: center;">Sebagai</h3>
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

                    <div class="cert-signature">
                        <p style="margin: 0;"><strong>Kabupaten Blora, {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</strong></p>
                        <p style="margin: 0;"><strong>Plt. KEPALA DINAS <br> PEKERJAAN UMUM DAN PENATAAN RUANG</strong></p>
                        <p style="margin: 0;"><strong>KABUPATEN BLORA</strong></p>

                        <div style="display: flex; justify-content: flex-end; margin-right: -125px;">
                            <div style="position: relative; width: 400px; height: 100px;">
                                <img src="/assets/icon/ttdpahuda.png" alt="" width="250px;" style="position: absolute; top: 0; left: 0; z-index: 1;">
                                <img src="/assets/icon/ttdkabblora.png" alt="" width="115px;" style="position: absolute; top: 0; left: 50px; z-index: 2;">
                            </div>
                        </div>

                        <p style="margin: 0;"><strong>NIDZAMUDIN AL HUDAA, ST</strong></p>
                        <p style="margin: 0;">NIP. 19720326 200604 1 005</p>
                    </div>
                    <div class="ribbon-left"></div>
                    <div class="ribbon-text">
                        <h4 style="text-transform: uppercase;">{{ strtoupper($data->namalengkap) }}</h4>
                        <p>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                        <br>Diterbitkan Pada : {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</p>
                    </div>
                </div>
            </div>

            <!-- Certificate Content 2 -->
            <div id="sertifikat-content-2" class="cert-card">
                <div class="cert-container">
                    <div class="cert-header" style="text-align: center;">
                        <div class="cert-logos">
                            <img src="/assets/icon/logokabupatenblora.png" width="70" height="70" alt="Blora">
                            <img src="/assets/icon/pupr.png" width="70" height="70" alt="PUPR">
                        </div>
                    </div>

                    <hr class="cert-hr">

                    <div class="cert-title" style="margin-top: -10px;">
                        <h2 class="cert-h2" style="text-align: center; margin: 15px 0; font-weight:800;">
                            Agenda Pelatihan : <br>{{$data->agendapelatihan->namakegiatan}}
                        </h2>
                    </div>

                    <div class="cert-content">
                        <div class="table-container">
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th width="40%">Materi</th>
                                        <th width="30%">Narasumber</th>
                                        <th width="20%">Jam Pelajaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalJam = 0;
                                    @endphp
                                    @forelse ($datapelajaran as $key => $pelajaran)
                                    <tr class="table-row-hover">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $pelajaran->materi ?? 'Data Tidak Tersedia' }}</td>
                                        <td>{{ $pelajaran->narasumber ?? 'Data Tidak Tersedia' }}</td>
                                        <td style="text-align:center;">
                                            {{ $pelajaran->jampelajaran ?? 'Data Tidak Tersedia' }} Jam
                                        </td>
                                    </tr>
                                    @php
                                        $totalJam += (int) ($pelajaran->jampelajaran ?? 0);
                                    @endphp
                                    @empty
                                    <tr>
                                        <td colspan="4">Data tidak tersedia.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" style="text-align: right; font-weight: bold;">
                                            <i class="bi bi-calendar" style="margin-right: 8px;"></i>Total Jam Pelajaran :
                                        </td>
                                        <td style="text-align:center; font-weight: bold;">
                                            {{ $totalJam }} Jam
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="ribbon-left"></div>
                    <div class="ribbon-text">
                        <h4 style="text-transform: uppercase;">{{ strtoupper($data->namalengkap) }}</h4>
                        <p>Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora
                        <br>Diterbitkan Pada : {{ \Carbon\Carbon::parse($data->agendapelatihan->waktupelaksanaan)->locale('id')->isoFormat('D MMMM YYYY') }}</p>
                    </div>
                </div>
            </div>

            <!-- Download Button -->
            <div class="download-btn" onclick="downloadAllCertificates()">
                <i class="bi bi-download" style="margin-right: 8px;"></i>
                Download Semua Sertifikat (PDF)
            </div>
        </div>

        <!-- Hidden container for PDF generation -->
        <div id="pdf-generation-container" class="pdf-container"></div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        function downloadAllCertificates() {
            // Show loading state
            const btn = document.querySelector('.download-btn');
            const originalHtml = btn.innerHTML;
            btn.innerHTML = '<i class="bi bi-hourglass-split"></i> Membuat PDF...';
            btn.style.pointerEvents = 'none';

            // Create container for PDF generation
            const pdfContainer = document.getElementById('pdf-generation-container');
            pdfContainer.innerHTML = '';

            // Clone both certificate contents
            const cert1 = document.getElementById('sertifikat-content-1').cloneNode(true);
            const cert2 = document.getElementById('sertifikat-content-2').cloneNode(true);

            // Create pages for PDF
            const page1 = document.createElement('div');
            page1.className = 'pdf-page';
            page1.appendChild(cert1);

            const page2 = document.createElement('div');
            page2.className = 'pdf-page';
            page2.appendChild(cert2);

            // Add pages to container
            pdfContainer.appendChild(page1);
            pdfContainer.appendChild(page2);

            // PDF options
            const opt = {
                margin: [10, 10, 10, 10],
                filename: 'sertifikat_pelatihan.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: {
                    scale: 2,
                    logging: true,
                    useCORS: true,
                    allowTaint: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                },
                pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
            };

            // Generate PDF
            html2pdf()
                .set(opt)
                .from(pdfContainer)
                .save()
                .then(() => {
                    // Reset button state
                    btn.innerHTML = originalHtml;
                    btn.style.pointerEvents = 'auto';

                    // Clean up
                    pdfContainer.innerHTML = '';
                })
                .catch(err => {
                    console.error('Error generating PDF:', err);
                    btn.innerHTML = '<i class="bi bi-exclamation-triangle"></i> Error! Coba Lagi';
                    setTimeout(() => {
                        btn.innerHTML = originalHtml;
                        btn.style.pointerEvents = 'auto';
                    }, 2000);
                });
        }
    </script>



                    <br><br>


                            </div>


                    </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
