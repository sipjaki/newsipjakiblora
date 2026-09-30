@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        {{-- ---------------------------------------------------------------------- --}}
        @include('backend.00_administrator.00_baganterpisah.04_navbar')
        {{-- ---------------------------------------------------------------------- --}}

        @include('backend.00_administrator.00_baganterpisah.03_sidebar')

        <!--begin::App Main-->
        <main class="app-main">

            <section style="background: linear-gradient(to bottom, #ffffff, #ffffff); width: 100%; min-height: 100vh;">

                <!--begin::App Content Header-->
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row">
                            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                            @include('backend.00_administrator.00_baganterpisah.11_alert')
                        </div>
                    </div>
                </div>

                <br>

                <div class="container-fluid">
                    <div class="row" style="margin-right: 10px; margin-left: 10px;">

                        <div class="card mb-4">

                            <!--begin::Card Header-->
                            <div class="card-header">
                                @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                                <!--begin::Toolbar-->
                                <div class="card-toolbar">

                                    <!-- Tampilkan data -->
                                    <div class="toolbar-entries">
                                        <label for="entries">Tampilkan data :</label>
                                        <select id="entries" onchange="updateEntries()">
                                            <option value="10"   {{ ($perPage ?? 10) == 10   ? 'selected' : '' }}>10</option>
                                            <option value="25"   {{ ($perPage ?? 10) == 25   ? 'selected' : '' }}>25</option>
                                            <option value="50"   {{ ($perPage ?? 10) == 50   ? 'selected' : '' }}>50</option>
                                            <option value="75"   {{ ($perPage ?? 10) == 75   ? 'selected' : '' }}>75</option>
                                            <option value="100"  {{ ($perPage ?? 10) == 100  ? 'selected' : '' }}>100</option>
                                            <option value="150"  {{ ($perPage ?? 10) == 150  ? 'selected' : '' }}>150</option>
                                            <option value="200"  {{ ($perPage ?? 10) == 200  ? 'selected' : '' }}>200</option>
                                            <option value="500"  {{ ($perPage ?? 10) == 500  ? 'selected' : '' }}>500</option>
                                            <option value="1000" {{ ($perPage ?? 10) == 1000 ? 'selected' : '' }}>1000</option>
                                            <option value="2000" {{ ($perPage ?? 10) == 2000 ? 'selected' : '' }}>2000</option>
                                        </select>
                                    </div>

                                    <!-- Filter Tahun -->
                                    <div class="toolbar-entries">
                                        <label for="filterTahun">Tahun :</label>
                                        <select id="filterTahun" onchange="filterTahun()">
                                            <option value="">Semua Tahun</option>
                                            @foreach(($daftarTahun ?? []) as $th)
                                                <option value="{{ $th }}" {{ ($tahun ?? '') == $th ? 'selected' : '' }}>
                                                    {{ $th }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Search -->
                                    <div class="toolbar-search">
                                        <input type="search" id="searchInput"
                                            placeholder="Cari Badan Usaha ...."
                                            value="{{ $search ?? '' }}"
                                            onkeyup="searchTable()">
                                        <i class="bi bi-search"></i>
                                    </div>

                                    <script>
                                        function updateEntries() {
                                            let selectedValue = document.getElementById("entries").value;
                                            let url = new URL(window.location.href);
                                            url.searchParams.set("perPage", selectedValue);
                                            window.location.href = url.toString();
                                        }

                                        function filterTahun() {
                                            let tahun = document.getElementById("filterTahun").value;
                                            let url = new URL(window.location.href);

                                            if (tahun) {
                                                url.searchParams.set("tahun", tahun);
                                            } else {
                                                url.searchParams.delete("tahun");
                                            }
                                            window.location.href = url.toString();
                                        }

                                        function searchTable() {
                                            let input = document.getElementById("searchInput").value;
                                            let tahun = document.getElementById("filterTahun")?.value || "";

                                            fetch(`/bebujkkonstruksi?search=${encodeURIComponent(input)}&tahun=${encodeURIComponent(tahun)}`)
                                                .then(response => response.text())
                                                .then(html => {
                                                    let parser = new DOMParser();
                                                    let doc = parser.parseFromString(html, "text/html");
                                                    let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                                    document.querySelector("#tableBody").innerHTML = newTableBody;
                                                })
                                                .catch(error => console.error("Error fetching search results:", error));
                                        }
                                    </script>

                                    <!-- Tombol Kembali -->
                                    <a href="/bebujkjakon" class="button-modern button-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                        </svg>
                                        Kembali
                                    </a>

                                    <a href="/bebujkkonstruksiblora" class="button-modern button-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M2 2.5A1.5 1.5 0 0 1 3.5 1h9A1.5 1.5 0 0 1 14 2.5v11a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5v-11zM3.5 2a.5.5 0 0 0-.5.5V5h10V2.5a.5.5 0 0 0-.5-.5h-9zM3 6v2h3V6H3zm4 0v2h6V6H7zM3 9v2h3V9H3zm4 0v2h6V9H7zm-4 3v1.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V12H3z"/>
                                        </svg>
                                        Data Dasar
                                    </a>

                                    <!-- Download Excel -->
                                    <button onclick="exportTableToExcel('tabelBujkkonstruksi', 'data_bujkkonstruksi')" class="button-berkas button-xl">
                                        <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                                    </button>

                                    <!-- Tambah Data -->
                                    <a href="/bebujkkonstruksi/create" class="button-baru button-xl">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                        Tambah Data
                                    </a>

                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card Header-->


                            <!--begin::Card Body-->
                            <div class="card-body p-0">
                                <div class="table-responsive table-wrapper">

                                    <table id="tabelBujkkonstruksi" class="zebra-table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 75px; text-align:center;"><i class="bi bi-list-ol"></i> No</th>
                                                <th style="width: 250px; text-align:center;"><i class="bi bi-people-fill"></i> Asosiasi</th>
                                                <th style="width: 250px; text-align:center;"><i class="bi bi-building"></i> Badan Usaha</th>
                                                <th style="width: 2000px; text-align:center;"><i class="bi bi-geo-alt-fill"></i> Alamat</th>
                                                <th style="width: 350px; text-align:center;"><i class="bi bi-telephone-fill"></i> No Telepon</th>
                                                <th style="width: 350px; text-align:center;"><i class="bi bi-envelope-fill"></i> Email</th>
                                                <th style="width: 150px; text-align:center;"><i class="bi bi-credit-card-2-front"></i> NIB</th>
                                                <th style="width: 200px; text-align:center;"><i class="bi bi-person-badge-fill"></i> PJU</th>
                                                <th style="width: 300px; text-align:center;"><i class="bi bi-file-earmark-text"></i> No Akte</th>
                                                <th style="width: 250px; text-align:center;"><i class="bi bi-calendar-date"></i> Tanggal</th>
                                                <th style="width: 300px; text-align:center;"><i class="bi bi-person-lines-fill"></i> Notaris</th>
                                                <th style="width: 300px; text-align:center;"><i class="bi bi-patch-check-fill"></i> Pengesahan</th>
                                                <th style="width: 200px; text-align:center;"><i class="bi bi-tags-fill"></i> Sub Klasifikasi</th>
                                                <th style="width: 200px; text-align:center;"><i class="bi bi-tags-fill"></i> Berkas</th>
                                                <th style="width: 300px; text-align:center;"><i class="bi bi-tags-fill"></i> Di Buat Oleh</th>

                                                {{-- ✅ KOLOM STATUS – RINCIAN JUMLAH --}}
                                                <th class="status-col" style="width: 200px; text-align:center;">
                                                    <i class="bi bi-shield-check"></i> Status Sub
                                                </th>

                                                <th style="width: 400px; text-align:center;"><i class="bi bi-tools"></i> Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tableBody">
                                            @forelse ($data as $item)
                                                <tr class="align-middle">

                                                    {{-- No --}}
                                                    <td style="text-align: center;">{{ $loop->iteration }}</td>

                                                    {{-- Asosiasi --}}
                                                    <td style="text-align: center;">
                                                        @if($item->asosiasimasjaki && $item->asosiasimasjaki->namaasosiasi)
                                                            {{ $item->asosiasimasjaki->namaasosiasi }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Diupdate</button>
                                                        @endif
                                                    </td>

                                                    {{-- Badan Usaha --}}
                                                    <td style="text-align: left;">
                                                        @if($item->namalengkap)
                                                            {{ $item->namalengkap }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- Alamat --}}
                                                    <td style="text-align: left; word-wrap: break-word;">
                                                        @if($item->alamat)
                                                            {{ $item->alamat }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- No Telepon --}}
                                                    <td style="text-align: center;">
                                                        @if($item->no_telepon)
                                                            {{ $item->no_telepon }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- Email --}}
                                                    <td style="text-align: left;">
                                                        @if($item->email)
                                                            {{ $item->email }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- NIB --}}
                                                    <td style="text-align: center;">
                                                        @if($item->nomorindukberusaha)
                                                            {{ $item->nomorindukberusaha }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- PJU --}}
                                                    <td style="text-align: left;">
                                                        @if($item->pju)
                                                            {{ $item->pju }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- No Akte --}}
                                                    <td style="text-align: center;">
                                                        @if($item->no_akte)
                                                            {{ $item->no_akte }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- Tanggal --}}
                                                    <td style="text-align: center;">
                                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}
                                                    </td>

                                                    {{-- Notaris --}}
                                                    <td style="text-align: left;">
                                                        @if($item->nama_notaris)
                                                            {{ $item->nama_notaris }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- Pengesahan --}}
                                                    <td style="text-align: left;">
                                                        @if($item->no_pengesahan)
                                                            {{ $item->no_pengesahan }}
                                                        @else
                                                            <button class="button-berkas">Data Belum Di Update</button>
                                                        @endif
                                                    </td>

                                                    {{-- Sub Klasifikasi --}}
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <a href="{{ url('/bebujkkonstruksi/showsubklasifikasi/' . $item->namalengkap) }}">
                                                            <button class="button-berkas">
                                                                <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                            </button>
                                                        </a>
                                                    </td>

                                                    {{-- Berkas --}}
                                                    <td style="text-align: center;">
                                                        @if($item->uploadberkas && file_exists(public_path('storage/' . $item->uploadberkas)))
                                                            <button class="button-berkas"
                                                                data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                            </button>

                                                            <!-- Modal Preview -->
                                                            <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                            <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                            <span style="margin: 0 5px;">:</span>
                                                                            <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <iframe src="{{ asset('storage/' . $item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @elseif($item->uploadberkas)
                                                            <button class="button-berkas"
                                                                data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                                <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
                                                            </button>

                                                            <!-- Modal Preview -->
                                                            <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                            <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                                            <span style="margin: 0 5px;">:</span>
                                                                            <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">Berkas Sertifikasi</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <iframe src="{{ asset($item->uploadberkas) }}" frameborder="0" width="100%" height="600px"></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @else
                                                            <button class="button-merah" disabled>Tidak Ada Berkas</button>
                                                        @endif
                                                    </td>

                                                    {{-- Dibuat Oleh --}}
                                                    <td style="text-align: center;">
                                                        @if($item->user?->name)
                                                            {{ $item->user?->name }}
                                                        @else
                                                            <button class="button-hitam">Admin Tidak Ada</button>
                                                        @endif
                                                    </td>

                                                    {{-- ✅ STATUS SUB – RINCIAN JUMLAH --}}
                                                    <td class="status-col" style="text-align: center; vertical-align: middle;">

                                                        @if(($item->status_total ?? 0) > 0)

                                                            <div class="status-detail">

                                                                {{-- BERLAKU --}}
                                                                <span class="status-mini status-mini-berlaku"
                                                                      title="Berlaku: {{ $item->status_berlaku }}">
                                                                    <i class="bi bi-check-circle-fill"></i>
                                                                    <span class="status-mini-label">Berlaku</span>
                                                                    <strong>{{ $item->status_berlaku }}</strong>
                                                                </span>

                                                                {{-- TIDAK BERLAKU --}}
                                                                <span class="status-mini status-mini-tidak"
                                                                      title="Tidak Berlaku: {{ $item->status_tidak }}">
                                                                    <i class="bi bi-x-circle-fill"></i>
                                                                    <span class="status-mini-label">Tidak</span>
                                                                    <strong>{{ $item->status_tidak }}</strong>
                                                                </span>

                                                                {{-- SUSPEND --}}
                                                                <span class="status-mini status-mini-suspend"
                                                                      title="Suspend: {{ $item->status_suspend }}">
                                                                    <i class="bi bi-pause-circle-fill"></i>
                                                                    <span class="status-mini-label">Suspend</span>
                                                                    <strong>{{ $item->status_suspend }}</strong>
                                                                </span>

                                                            </div>

                                                            {{-- TOTAL --}}
                                                            <div class="status-total">
                                                                <i class="bi bi-collection-fill"></i>
                                                                Total <strong>{{ $item->status_total }}</strong> sub
                                                            </div>

                                                        @else
                                                            <span class="button-baru status-pill status-belum">
                                                                <i class="bi bi-dash-circle-fill"></i>
                                                                Belum Ada Sub
                                                            </span>
                                                        @endif

                                                    </td>

                                                    {{-- Aksi --}}
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <a href="/bebujkkonstruksi/show/{{ $item->namalengkap }}" class="button-baru" title="Show">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <a href="/bebujkkonstruksi/update/{{ $item->id }}" class="button-berkas" title="Update">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="button-merah delete-trigger" title="Delete"
                                                            data-judul="{{ $item->id }}">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr class="empty-row">
                                                    <td colspan="17">
                                                        <div class="empty-state">
                                                            <div class="empty-icon">
                                                                <i class="bi bi-inbox"></i>
                                                            </div>
                                                            <h5 class="empty-title">Data Tidak Ditemukan</h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!--end::Card Body-->

                            @include('backend.00_administrator.00_baganterpisah.07_paginations')

                            <br><br>

                            <!--begin::Modal Konfirmasi Hapus (Custom - seragam modal Logout)-->
                            <div class="logout-modal-overlay" id="deleteModal">
                                <div class="logout-modal">

                                    <div class="logout-modal-header">
                                        <img
                                            src="/assets/icon/jakonnew.png"
                                            alt="Logo"
                                            class="logout-modal-logo"
                                            width="100"
                                        >

                                        <h3 class="logout-modal-title">
                                            Hapus Data ?
                                        </h3>
                                    </div>

                                    <div class="logout-modal-body">
                                        <p class="logout-modal-message">
                                            Yakin ingin menghapus data ?
                                        </p>
                                    </div>

                                    <div class="logout-modal-footer">

                                        <button
                                            type="button"
                                            class="button-modern"
                                            id="cancelDelete"
                                        >
                                            <i class="bi bi-x-lg"></i>
                                            <span>Batal</span>
                                        </button>

                                        <form id="deleteForm" method="POST" action="" class="m-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button-merah">
                                                <i class="bi bi-trash"></i>
                                                <span>Hapus</span>
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                            <!--end::Modal Konfirmasi Hapus (Custom)-->

                            <script>
                            (function() {
                                'use strict';

                                document.addEventListener('DOMContentLoaded', function() {

                                    var deleteModal = document.getElementById('deleteModal');
                                    var cancelBtn   = document.getElementById('cancelDelete');
                                    var deleteForm  = document.getElementById('deleteForm');
                                    var itemName    = document.getElementById('itemName');

                                    // Semua tombol Hapus di kolom Aksi → tampilkan modal
                                    document.querySelectorAll('.delete-trigger').forEach(function(btn) {
                                        btn.addEventListener('click', function(e) {
                                            e.preventDefault();

                                            var id = this.getAttribute('data-judul');

                                            if (itemName) itemName.innerText = id;

                                            if (deleteForm) {
                                                deleteForm.action = "/bebujkkonstruksi/delete/" + encodeURIComponent(id);
                                            }

                                            if (deleteModal) {
                                                deleteModal.classList.add('active');
                                                document.body.style.overflow = 'hidden';
                                            }
                                        });
                                    });

                                    // Tombol Batal → tutup modal
                                    if (cancelBtn) {
                                        cancelBtn.addEventListener('click', function() {
                                            deleteModal.classList.remove('active');
                                            document.body.style.overflow = '';
                                        });
                                    }

                                    // Klik overlay → tutup
                                    if (deleteModal) {
                                        deleteModal.addEventListener('click', function(e) {
                                            if (e.target === deleteModal) {
                                                deleteModal.classList.remove('active');
                                                document.body.style.overflow = '';
                                            }
                                        });
                                    }

                                    // ESC → tutup
                                    document.addEventListener('keydown', function(e) {
                                        if (e.key === 'Escape' && deleteModal && deleteModal.classList.contains('active')) {
                                            deleteModal.classList.remove('active');
                                            document.body.style.overflow = '';
                                        }
                                    });

                                });
                            })();
                            </script>

                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!--end::Container-->

            </section>

        </main>
        <!--end::App Main-->

    </div>
    <!--end::App Wrapper-->

    @include('backend.00_administrator.00_baganterpisah.02_footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
        function exportTableToExcel(tableID, filename = '') {
            var table = document.getElementById(tableID);
            var wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
            return XLSX.writeFile(wb, filename + '.xlsx');
        }
    </script>

</body>
</html>