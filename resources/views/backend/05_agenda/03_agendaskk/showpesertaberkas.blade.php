@include('backend.00_administrator.00_baganterpisah.01_header')

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    @include('backend.00_administrator.00_baganterpisah.04_navbar')
    @include('button')
    @include('backend.00_administrator.00_baganterpisah.03_sidebar')

    <main class="app-main">
        <section class="bg-3d-pattern">

            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                        @include('backend.00_administrator.00_baganterpisah.11_alert')
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row" style="margin-right:10px; margin-left:10px;">
                    <div class="card card-3d mb-4">
                        <div class="card-header card-header-custom">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                            <div style="display:flex; justify-content:flex-end; margin-bottom:5px; flex-wrap:wrap; gap:8px;">

                                @canany(['super_admin', 'admin'])
                                    <a href="{{ url()->previous() }}">
                                        <button class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                            </svg>
                                            Kembali
                                        </button>
                                    </a>
                                @endcanany

                                @canany(['super_admin', 'admin', 'lsppenerbit'])
                                    <form action="{{ route('peserta.downloadSemua', $datapeserta->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="button-berkas button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M.5 9.9v2.6c0 .6.5 1 1 1h13c.6 0 1-.4 1-1V9.9c0-.5-.4-1-1-1s-1 .5-1 1v1.6H2.5V9.9c0-.5-.5-1-1-1s-1 .5-1 1z"/>
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3.182-3.182a.5.5 0 1 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.172 7.964a.5.5 0 1 0-.708.708l3.182 3.182z"/>
                                            </svg>
                                            Download Berkas .zip/.rar Peserta
                                        </button>
                                    </form>
                                @endcanany

                                @can('pekerja')
                                    <a href="/hakaksespekerjaberkas">
                                        <button class="button-modern button-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
                                            </svg>
                                            Kembali
                                        </button>
                                    </a>
                                @endcan

                                @can('lsppenerbit')
                                    <button class="button-modern button-md" onclick="history.back();">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right:8px;">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                        </svg>
                                        Kembali
                                    </button>
                                @endcan

                                <button class="button-baru button-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        <path fill-rule="evenodd" d="M14 14s-1-1.5-6-1.5S2 14 2 14s1-4 6-4 6 4 6 4z"/>
                                    </svg>
                                    Nama Peserta : {{ $datapeserta->user->name ?? 'Nama Lengkap Belum Diisi !!' }}
                                </button>
                            </div>
                        </div>

                        <div class="container form-modern">
                            <h5>Status Verifikasi Berkas Anda !</h5>
                            <div id="checkpoint-container" class="timeline-container"></div>
                            <div class="control-panel">
                                <div class="status-info" id="current-status"></div>
                            </div>
                        </div>

                        <script>
                        const checkpointData = [
                            { id: 1, name: 'Dokumen Masuk', status: 'completed',
                              time: '<?php echo isset($datapeserta->created_at) ? $datapeserta->created_at : date("Y-m-d H:i:s") ?>', message: '' },
                            { id: 2, name: 'Verifikasi Berkas', status: 'pending',
                              time: '<?php echo isset($datapeserta->verifikasipu_time) ? $datapeserta->verifikasipu_time : "" ?>', message: 'Menunggu verifikasi DPUPR' },
                            { id: 3, name: 'Verifikasi DPUPR', status: 'pending',
                              time: '<?php echo isset($datapeserta->verifikasipu_time) ? $datapeserta->verifikasipu_time : "" ?>', message: 'Menunggu verifikasi DPUPR' },
                            { id: 4, name: 'Verifikasi LSP', status: 'pending',
                              time: '<?php echo isset($datapeserta->verifikasilps_time) ? $datapeserta->verifikasilps_time : "" ?>', message: 'Menunggu Verifikasi LSP' },
                            { id: 5, name: 'Sertifikat Terbit', status: 'pending',
                              time: '<?php echo isset($datapeserta->verifikasihadirsertifikasi_time) ? $datapeserta->verifikasihadirsertifikasi_time : "" ?>', message: 'Terbit' }
                        ];

                        function updateCheckpointStatus() {
                            checkpointData[0].status = 'completed';
                            checkpointData[0].message = '';
                            if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'lolos') {
                                checkpointData[1].status = 'completed';
                                checkpointData[1].message = 'Berkas lolos';
                            } else if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'dikembalikan') {
                                checkpointData[1].status = 'rejected';
                                checkpointData[1].message = 'Berkas dikembalikan';
                            }
                            if ('<?php echo isset($datapeserta->verifikasipu) ? $datapeserta->verifikasipu : "" ?>' === 'lolos') {
                                checkpointData[2].status = 'completed';
                                checkpointData[2].message = 'Telah diverifikasi oleh DPUPR';
                            }
                            if ('<?php echo isset($datapeserta->verifikasilps) ? $datapeserta->verifikasilps : "" ?>' === '1' ||
                                '<?php echo isset($datapeserta->verifikasilps) ? $datapeserta->verifikasilps : "" ?>' === 'true') {
                                checkpointData[3].status = 'completed';
                                checkpointData[3].message = 'Telah diverifikasi oleh LSP';
                            }
                            if ('<?php echo isset($datapeserta->verifikasihadirsertifikasi) ? $datapeserta->verifikasihadirsertifikasi : "" ?>' === '1' ||
                                '<?php echo isset($datapeserta->verifikasihadirsertifikasi) ? $datapeserta->verifikasihadirsertifikasi : "" ?>' === 'true') {
                                checkpointData[4].status = 'completed';
                                checkpointData[4].message = 'Sertifikat telah diterbitkan';
                            }
                        }

                        function renderCheckpoints() {
                            const container = document.getElementById('checkpoint-container');
                            container.innerHTML = '';
                            const timeline = document.createElement('div');
                            timeline.className = 'timeline-horizontal';

                            checkpointData.forEach((checkpoint, index) => {
                                const wrapper = document.createElement('div');
                                wrapper.className = 'checkpoint-wrapper';
                                const dotContainer = document.createElement('div');
                                dotContainer.className = 'dot-connector-container';
                                const dot = document.createElement('div');
                                dot.className = `dot ${checkpoint.status}`;
                                dot.textContent = checkpoint.id;
                                dotContainer.appendChild(dot);
                                if (index < checkpointData.length - 1) {
                                    const connector = document.createElement('div');
                                    connector.className = `connector ${checkpoint.status === 'completed' ? 'active' : ''}`;
                                    dotContainer.appendChild(connector);
                                }
                                const content = document.createElement('div');
                                content.className = 'checkpoint-content';
                                const name = document.createElement('div');
                                name.className = 'checkpoint-name';
                                name.textContent = checkpoint.name;
                                content.appendChild(name);
                                const message = document.createElement('div');
                                message.className = 'message';
                                message.textContent = checkpoint.message;
                                content.appendChild(message);
                                if (checkpoint.time && checkpoint.time.trim() !== '' && checkpoint.time !== '0000-00-00 00:00:00') {
                                    const formattedTime = formatTime(checkpoint.time);
                                    if (formattedTime) {
                                        const time = document.createElement('div');
                                        time.className = 'time';
                                        if (checkpoint.status === 'completed') time.textContent = `Selesai: ${formattedTime}`;
                                        else if (checkpoint.status === 'rejected') time.textContent = `Dikembalikan: ${formattedTime}`;
                                        else time.textContent = `Terakhir diperbarui: ${formattedTime}`;
                                        content.appendChild(time);
                                    }
                                }
                                wrapper.appendChild(dotContainer);
                                wrapper.appendChild(content);
                                timeline.appendChild(wrapper);
                            });
                            container.appendChild(timeline);
                            updateCurrentStatus();
                        }

                        function formatTime(dateString) {
                            try {
                                if (!dateString || dateString.trim() === '' || dateString === '0000-00-00 00:00:00') return null;
                                const date = new Date(dateString);
                                if (isNaN(date.getTime())) {
                                    const pattern = /^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/;
                                    const match = dateString.match(pattern);
                                    if (match) {
                                        const [_, y, m, d, h, i, s] = match;
                                        const nd = new Date(y, m - 1, d, h, i, s);
                                        if (!isNaN(nd.getTime())) {
                                            return nd.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                                        }
                                    }
                                    return null;
                                }
                                return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric', hour: '2-digit', minute: '2-digit' });
                            } catch (e) { console.error(e); return null; }
                        }

                        function updateCurrentStatus() {
                            const statusInfo = document.getElementById('current-status');
                            let currentStatus = '', currentMessage = '';
                            for (let i = checkpointData.length - 1; i >= 0; i--) {
                                if (checkpointData[i].status === 'completed' || checkpointData[i].status === 'rejected') {
                                    currentStatus = checkpointData[i].name;
                                    currentMessage = checkpointData[i].message;
                                    break;
                                }
                            }
                            if (!currentStatus) {
                                for (let i = 0; i < checkpointData.length; i++) {
                                    if (checkpointData[i].status === 'pending') {
                                        currentStatus = checkpointData[i].name;
                                        currentMessage = checkpointData[i].message;
                                        break;
                                    }
                                }
                            }
                            if (currentStatus) {
                                statusInfo.innerHTML = `<strong>Status saat ini:</strong> ${currentStatus}<br><em>${currentMessage}</em>`;
                            }
                        }

                        document.addEventListener('DOMContentLoaded', () => {
                            updateCheckpointStatus();
                            renderCheckpoints();
                        });
                        </script>

                        <hr>

                        <!-- ============ HALAMAN 1 ============ -->
                        <div class="halaman-pertama">
                            <br>
                            <h5>I. IDENTITAS PESERTA</h5>

                            <div class="form-modern table-responsive">
                                <table class="zebra-table table-striped">
                                    <tr>
                                        <td class="col-no">1</td>
                                        <td class="col-label">Nama Lengkap</td>
                                        <td class="col-sep">:</td>
                                        <td class="col-value">{{ ucwords(strtolower($datapeserta->user->name ?? 'Nama lengkap Belum Diisi')) }}</td>
                                        <td class="col-foto">
                                            <div style="margin-top:10px;">
                                                @if($datapeserta->uploadfoto && file_exists(public_path('storage/' . $datapeserta->uploadfoto)))
                                                    <img src="{{ asset('storage/' . $datapeserta->uploadfoto) }}" alt="Pas Foto" style="width:100%; max-height:300px; object-fit:contain;">
                                                @elseif($datapeserta->uploadfoto)
                                                    <img src="{{ asset($datapeserta->uploadfoto) }}" alt="Pas Foto" style="width:100%; max-height:300px; object-fit:contain;">
                                                @else
                                                    <p style="color:red; font-weight:600;">Data Tidak Di Temukan !</p>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="form-modern table-responsive">
                                <table class="zebra-table table-striped">
                                    <tr><td class="text-center">2</td><td>Jabatan Kerja</td><td class="text-center">:</td><td>{{$datapeserta->jabatankerja->jabatankerja ?? '-'}}</td></tr>
                                    <tr><td class="text-center">3</td><td>Tempat Lahir</td><td class="text-center">:</td><td>{{$datapeserta->tempatlahir ?? '-'}}</td></tr>
                                    <tr><td class="text-center">4</td><td>Jenis Kelamin</td><td class="text-center">:</td><td>{{$datapeserta->jeniskelamin ?? '-'}}</td></tr>
                                    <tr><td class="text-center">5</td><td>KTP/KITAS</td><td class="text-center">:</td><td>{{$datapeserta->nik ?? '-'}}</td></tr>
                                    <tr><td class="text-center">6</td><td>Alamat</td><td class="text-center">:</td><td>{{$datapeserta->alamat ?? '-'}}</td></tr>
                                    <tr><td class="text-center">7</td><td>Telepon</td><td class="text-center">:</td><td>{{$datapeserta->notelepon ?? '-'}}</td></tr>
                                    <tr><td class="text-center">8</td><td>Email</td><td class="text-center">:</td><td>{{$datapeserta->email ?? '-'}}</td></tr>
                                    <tr><td class="text-center">9</td><td>Jenjang Pendidikan</td><td class="text-center">:</td><td>{{$datapeserta->jenjangpendidikan->jenjangpendidikan ?? '-'}}</td></tr>
                                    <tr><td class="text-center">10</td><td>Sekolah/Universitas</td><td class="text-center">:</td><td>{{$datapeserta->namasekolah->namasekolah ?? '-'}}</td></tr>
                                    <tr><td class="text-center">11</td><td>Tahun Lulus</td><td class="text-center">:</td><td>{{$datapeserta->tahunlulus ?? '-'}}</td></tr>
                                    <tr><td class="text-center">12</td><td>Tahun Bimtek</td><td class="text-center">:</td><td>{{$datapeserta->tahunpilihan->tahunpilihan ?? '-'}}</td></tr>
                                </table>
                            </div>

                            <br>
                            <h5>II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h5>

                            <div class="form-modern table-responsive">
                                <table class="zebra-table table-striped">
                                    <tr>
                                        <td class="text-center">KTP/KITAS*</td>
                                        <td class="text-center">Foto</td>
                                        <td class="text-center">Ijazah</td>
                                    </tr>
                                    <tr>
                                        @foreach(['uploadktp', 'uploadfoto', 'uploadijazah'] as $field)
                                            <td class="text-center">
                                                <div style="margin-top:10px;">
                                                    @if($datapeserta->$field && file_exists(public_path('storage/' . $datapeserta->$field)))
                                                        <iframe src="{{ asset('storage/' . $datapeserta->$field) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                    @elseif($datapeserta->$field)
                                                        <iframe src="{{ asset($datapeserta->$field) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                    @else
                                                        <p style="color:red; font-weight:600;">Data Tidak Di Temukan !</p>
                                                    @endif
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td class="text-center">Pengalaman Kerja</td>
                                        <td class="text-center">NPWP</td>
                                        <td class="text-center">Daftar Riwayat Hidup</td>
                                    </tr>
                                    <tr>
                                        @foreach(['uploadpengalaman', 'uploadnpwp', 'uploaddaftarriwayathidup'] as $field)
                                            <td class="text-center">
                                                <div style="margin-top:10px;">
                                                    @if($datapeserta->$field && file_exists(public_path('storage/' . $datapeserta->$field)))
                                                        <iframe src="{{ asset('storage/' . $datapeserta->$field) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                    @elseif($datapeserta->$field)
                                                        <iframe src="{{ asset($datapeserta->$field) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                    @else
                                                        <p style="color:red; font-weight:600;">Data Tidak Di Temukan !</p>
                                                    @endif
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr><td class="text-center">Surat Kebenaran Data</td></tr>
                                    <tr>
                                        <td class="text-center">
                                            <div style="margin-top:10px;">
                                                @if($datapeserta->uploadkebenarandata && file_exists(public_path('storage/' . $datapeserta->uploadkebenarandata)))
                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                @elseif($datapeserta->uploadkebenarandata)
                                                    <iframe src="{{ asset($datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="500px" style="transform:scale(0.8); transform-origin:top left; width:125%;"></iframe>
                                                @else
                                                    <p style="color:red; font-weight:600;">Data Tidak Di Temukan !</p>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- ============ HALAMAN 2 ============ -->
                        <div class="halaman-kedua">
                            <h5>III. NAMA ASOSIASI DAN KESEDIAAN MENGIKUTI BIMBINGAN TEKNIS</h5>

                            <div class="form-modern table-responsive">
                                <table class="zebra-table table-striped">
                                    <tr>
                                        <td class="text-center">Nama Utusan</td>
                                        <td class="text-center">{{$datapeserta->namaasosiasi ?? '-'}}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="form-modern table-responsive">
                                <table class="zebra-table table-striped">
                                    <tr>
                                        <td class="text-center">MEMPUNYAI SKK ?</td>
                                        <td class="text-center">MEMPUNYAI AKUN SIKI/ E-SIMPAN ?</td>
                                        <td class="text-center">MEMPUNYAI PORTAL PUPR ?</td>
                                        <td class="text-center">BERSEDIA MEMATUHI PERATURAN</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{$datapeserta->punyaskk ?? '-'}}</td>
                                        <td class="text-center">{{$datapeserta->punyasiki ?? '-'}}</td>
                                        <td class="text-center">{{$datapeserta->portalpupr ?? '-'}}</td>
                                        <td class="text-center">{{$datapeserta->siappatuh ?? '-'}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
{{-- 
                        <div class="hide-on-mobile" style="display:flex; justify-content:flex-end; padding:10px;">
                            <button class="button-berkas button-md" id="downloadPDF">
                                <i class="bi bi-download" style="margin-right:5px;"></i>
                                <span>Download PDF</span>
                            </button>
                        </div> --}}

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

                        <script>
                        document.getElementById("downloadPDF").addEventListener("click", function () {
                            const { jsPDF } = window.jspdf;
                            const pdf = new jsPDF("p", "mm", "a4");
                            const margin = 20;
                            const pdfWidth = 210 - 2 * margin;

                            const page1 = document.querySelector(".halaman-pertama");
                            const page2 = document.querySelector(".halaman-kedua");

                            function addPageContent(element, yOffset, addNewPage = false) {
                                return new Promise((resolve) => {
                                    html2canvas(element, { scale: 2, scrollY: -window.scrollY }).then((canvas) => {
                                        if (addNewPage) pdf.addPage();
                                        const imgData = canvas.toDataURL("image/png");
                                        const imgWidth = pdfWidth;
                                        const imgHeight = (canvas.height * imgWidth) / canvas.width;
                                        pdf.addImage(imgData, "PNG", margin, yOffset, imgWidth, imgHeight);
                                        resolve();
                                    });
                                });
                            }

                            addPageContent(page1, margin).then(() => {
                                addPageContent(page2, margin, true).then(() => {
                                    pdf.save("{{$datapeserta->user->name ?? 'Nama Lengkap Belum Diisi'}}");
                                });
                            });
                        });
                        </script>

                        @canany(['super_admin', 'admin', 'pekerja'])
                            <hr>
                            @if ($datapeserta->verifikasipu === 'dikembalikan')
                                <div style="display:flex; justify-content:center; align-items:center; margin-top:20px;">
                                    <div style="display:flex; align-items:center; gap:15px;">
                                        <p style="margin:0;">Silahkan Lakukan Perbaikan Data <i class="bi bi-arrow-right"></i></p>
                                        <a href="/perbaikandataskk/{{$datapeserta->id}}">
                                            <button class="button-baru button-md">
                                                <i class="bi bi-pencil-square"></i> Perbaikan Data
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endcanany

                        <hr>

                        {{-- FORM VALIDASI --}}
                        <form action="{{ route('validasidokumenpesertaskk', $datapeserta->id) }}" method="POST" id="formValidasiPeserta">
                            @csrf
                            @method('PUT')

                            <div class="card-body p-0">
                                <div class="form-modern table-responsive" style="overflow-x:auto; white-space:nowrap;">
                                    <table class="zebra-table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width:400px; text-align:left;">Dokumen</th>
                                                <th class="text-center">Lihat</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $daftarDokumen = [
                                                    // SKK Saudara — TANPA validasi (skip_validasi = true)
                                                    ['field' => 'skkanda', 'label' => 'SKK Saudara', 'modal' => 'SKK', 'validasi' => null, 'skip_validasi' => true],
                                                    // Dokumen lain — tetap punya validasi
                                                    ['field' => 'uploadktp',                'label' => 'Foto KTP',             'modal' => 'KTP',                'validasi' => 'validasi_ktp'],
                                                    ['field' => 'uploadfoto',               'label' => 'Pas Foto 3 x 4',       'modal' => 'Foto',               'validasi' => 'validasi_foto'],
                                                    ['field' => 'uploadijazah',             'label' => 'Ijazah',               'modal' => 'Ijazah',             'validasi' => 'validasi_ijazah'],
                                                    ['field' => 'uploadpengalaman',         'label' => 'Pengalaman',           'modal' => 'Pengalaman',         'validasi' => 'validasi_pengalaman'],
                                                    ['field' => 'uploadkebenarandata',      'label' => 'Surat Kebenaran Data', 'modal' => 'KebenaranData',      'validasi' => 'validasi_kebenarandata'],
                                                    ['field' => 'uploadnpwp',               'label' => 'NPWP',                 'modal' => 'NPWP',               'validasi' => 'validasi_npwp'],
                                                    ['field' => 'uploaddaftarriwayathidup', 'label' => 'Riwayat Hidup',        'modal' => 'DaftarRiwayatHidup', 'validasi' => 'validasi_daftarriwayathidup'],
                                                ];
                                            @endphp

                                            @foreach ($daftarDokumen as $dok)
                                            @php
                                                $statusVal    = !empty($dok['validasi']) ? ($datapeserta->{$dok['validasi']} ?? null) : null;
                                                $modalId      = 'modal' . $dok['modal'] . $datapeserta->id;
                                                $skipValidasi = !empty($dok['skip_validasi']);
                                            @endphp
                                            <tr>
                                                <th style="text-align:left;">
                                                    <i class="bi bi-file-earmark-text-fill"></i> {{ $dok['label'] }}
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="button-berkas button-md"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#{{ $modalId }}">
                                                        <i class="bi bi-eye"></i> Lihat
                                                    </button>
                                                </td>
                                                <td class="text-center">
                                                    @if ($skipValidasi)
                                                        {{-- SKK Saudara: TANPA checklist, hanya keterangan --}}
                                                        <div class="custom-status-info">
                                                            <i class="bi bi-info-circle-fill"></i>
                                                            Berkas Screenshoot SKK Saudara
                                                        </div>
                                                    @else
                                                        {{-- Dokumen lain: tetap ada checklist --}}
                                                        @canany(['pekerja', 'lsppenerbit'])
                                                            @if ($statusVal === 'tidak_sesuai')
                                                                <div class="custom-status tidak_sesuai"><span class="custom-box"></span>Silahkan Lakukan Perbaikan</div>
                                                            @elseif ($statusVal === 'sesuai')
                                                                <div class="custom-status sesuai"><span class="custom-box"></span>Berkas Anda Sudah Sesuai</div>
                                                            @else
                                                                <div class="custom-status pending"><span class="custom-box"></span>Sedang Di Verifikasi DPUPR, Silahkan Menunggu !</div>
                                                            @endif
                                                        @endcanany
                                                        @canany(['super_admin', 'admin'])
                                                            <div style="display:flex; justify-content:center; gap:15px;">
                                                                <label class="custom-status {{ $statusVal == 'sesuai' ? 'sesuai' : '' }}" data-status="sesuai">
                                                                    <input type="radio" name="{{ $dok['validasi'] }}" value="sesuai" {{ $statusVal == 'sesuai' ? 'checked' : '' }} style="display:none;">
                                                                    <span class="custom-box"></span>Sesuai
                                                                </label>
                                                                <label class="custom-status {{ $statusVal == 'tidak_sesuai' ? 'tidak_sesuai' : '' }}" data-status="tidak_sesuai">
                                                                    <input type="radio" name="{{ $dok['validasi'] }}" value="tidak_sesuai" {{ $statusVal == 'tidak_sesuai' ? 'checked' : '' }} style="display:none;">
                                                                    <span class="custom-box"></span>Tidak Sesuai
                                                                </label>
                                                            </div>
                                                        @endcanany
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <br><br>

                            @can('pekerja')
                                <div class="mb-3">
                                    <label class="form-label-modern" style="color:navy;"><i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas</label>
                                    <div class="form-control" style="min-height:120px; white-space:pre-wrap; background-color:#f8f9fa;">
                                        {{ $datapeserta->catatanvalidasi ?? '-' }}
                                    </div>
                                </div>
                            @endcan

                            @canany(['super_admin', 'admin'])
                                <div class="mb-3">
                                    <label for="catatanvalidasi" class="form-label-modern">
                                        <i class="bi bi-card-text me-1"></i> Catatan Keterangan Berkas
                                    </label>
                                    <textarea name="catatanvalidasi" id="catatanvalidasi" class="form-control" rows="8" placeholder="Tulis catatan jika diperlukan...">{{ old('catatanvalidasi', $datapeserta->catatanvalidasi ?? '') }}</textarea>
                                </div>

                                <div style="display:flex; justify-content:flex-end; margin-bottom:20px;">
                                    <button class="button-baru button-md" type="button" data-bs-toggle="modal" data-bs-target="#modalSimpanValidasi">
                                        <i class="bi bi-save" style="margin-right:6px;"></i> Simpan Validasi
                                    </button>
                                </div>
                            @endcanany
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

{{-- ════════════════════════════════════════════════════════════════ --}}
{{-- SEMUA MODAL DI LUAR APP-WRAPPER (agar tidak flicker)            --}}
{{-- ════════════════════════════════════════════════════════════════ --}}

@php
    $daftarDokumenModal = [
        ['field' => 'skkanda',                  'label' => 'SKK Saudara',          'modal' => 'SKK'],
        ['field' => 'uploadktp',                'label' => 'Foto KTP',             'modal' => 'KTP'],
        ['field' => 'uploadfoto',               'label' => 'Pas Foto 3 x 4',       'modal' => 'Foto'],
        ['field' => 'uploadijazah',             'label' => 'Ijazah',               'modal' => 'Ijazah'],
        ['field' => 'uploadpengalaman',         'label' => 'Pengalaman',           'modal' => 'Pengalaman'],
        ['field' => 'uploadkebenarandata',      'label' => 'Surat Kebenaran Data', 'modal' => 'KebenaranData'],
        ['field' => 'uploadnpwp',               'label' => 'NPWP',                 'modal' => 'NPWP'],
        ['field' => 'uploaddaftarriwayathidup', 'label' => 'Riwayat Hidup',        'modal' => 'DaftarRiwayatHidup'],
    ];
@endphp

{{-- Modal Konfirmasi Simpan Validasi --}}
@canany(['super_admin', 'admin'])
<div class="modal fade modal-confirm-validasi" id="modalSimpanValidasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-shield-check" style="margin-right:8px; color:#13A847;"></i>
                    Konfirmasi Validasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon">
                    <i class="bi bi-question-circle"></i>
                </div>
                <h5 class="confirm-title">Simpan Validasi Berkas?</h5>
                <p class="confirm-text">
                Tindakan ini akan mengubah status verifikasi.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                </button>
                <button type="button" class="button-baru button-md" onclick="submitFormValidasi()">
                    <i class="bi bi-check-lg" style="margin-right:4px;"></i> Ya, Simpan
                </button>
            </div>
        </div>
    </div>
</div>
@endcanany

{{-- Modal preview semua dokumen (termasuk SKK) --}}
@foreach ($daftarDokumenModal as $dok)
    @php
        $filePath  = $datapeserta->{$dok['field']};
        $modalId   = 'modal' . $dok['modal'] . $datapeserta->id;
        $ext       = $filePath ? strtolower(pathinfo($filePath, PATHINFO_EXTENSION)) : '';
        $isPdf     = $filePath && $ext === 'pdf';
        $isImage   = $filePath && in_array($ext, ['jpg','jpeg','png']);
        $fileExist = $filePath && file_exists(public_path('storage/' . $filePath));
        $fileUrl   = $fileExist ? asset('storage/' . $filePath) : ($filePath ? asset($filePath) : null);
    @endphp
    <div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2" alt="Blora">
                    <img src="/assets/icon/pupr.png" width="25" class="me-2" alt="PUPR">
                    <h5 class="modal-title">Dokumen {{ $dok['label'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    @if($fileUrl)
                        @if($isPdf)
                            <iframe src="{{ $fileUrl }}" frameborder="0" width="100%" height="750px"></iframe>
                        @elseif($isImage)
                            <img src="{{ $fileUrl }}" alt="{{ $dok['label'] }}" style="max-width:100%; max-height:750px; object-fit:contain;">
                        @else
                            <p style="color:red; font-weight:bold;">Format file tidak dikenali.</p>
                        @endif
                    @else
                        <p style="color:red; font-weight:bold;">Data Tidak Ditemukan !</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
function submitFormValidasi() {
    document.getElementById('formValidasiPeserta').submit();
}

// Sinkronisasi visual label custom-status dengan radio yang ter-check
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('label.custom-status').forEach(function (label) {
        const input = label.querySelector('input[type="radio"]');
        if (!input) return;

        if (input.checked) {
            label.classList.add(input.value === 'sesuai' ? 'sesuai' : 'tidak_sesuai');
        }

        input.addEventListener('change', function () {
            if (!input.checked) return;
            const groupName = input.name;
            document.querySelectorAll('input[name="' + groupName + '"]').forEach(function (r) {
                const lbl = r.closest('label.custom-status');
                if (lbl) lbl.classList.remove('sesuai', 'tidak_sesuai');
            });
            label.classList.add(input.value === 'sesuai' ? 'sesuai' : 'tidak_sesuai');
        });
    });
});
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')