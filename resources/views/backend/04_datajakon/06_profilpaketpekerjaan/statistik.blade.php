<style>
    table {
        table-layout: fixed;
        width: 100%;
    }

    td {
        padding: 10px;
        vertical-align: top;
        word-wrap: break-word;
    }

    .isi-berita {
        max-width: 600px;
        word-wrap: break-word;
        white-space: normal;
        overflow-wrap: break-word;
    }
</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        @include('backend.00_administrator.00_baganterpisah.04_navbar')
        @include('backend.00_administrator.00_baganterpisah.03_sidebar')
        @include('button')

        <!--begin::App Main-->
        <main class="app-main">
            <section style="background: linear-gradient(to bottom, #a8e6a1, #ffffff); width: 100%; min-height: 100vh;" loading="lazy">
                <!--begin::App Content Header-->
                <div class="app-content-header">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                        <div class="row">
                            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                            @include('backend.00_administrator.00_baganterpisah.11_alert')
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>

                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="putih row" style="margin-right: 10px; margin-left:10px;">
                        <!-- /.card -->
                        {{-- <div class="card mb-4">
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-briefcase" style="margin-right: 8px;"></i>
                                        Jenis Pekerjaan
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-kanban" style="margin-right: 8px;"></i>
                                        Status Pekerjaan
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-cash-stack" style="margin-right: 8px;"></i>
                                        Sumber Dana
                                    </button>
                                </a>

                                <a href="/404">
                                    <button class="button-baru">
                                        <i class="bi bi-calendar-event" style="margin-right: 8px;"></i>
                                        Tahun Pelaksanaan
                                    </button>
                                </a>
                            </div>
                        </div> --}}

                        <div class="card-header">
                            @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                             {{-- <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer; text-align:right;">
                                <option value="10">10 </option>
                                <option value="25">25 </option>
                                <option value="50">50 </option>
                                <option value="75">75 </option>
                                <option value="100">100 </option>
                                <option value="150">150 </option>
                                <option value="200">200 </option>
                                <option value="250">250 </option>
                                <option value="500">500 </option>
                                <option value="1000">1.000 </option>
                                <option value="1500">1.500 </option>
                                <option value="2000">2.000 </option>
                                <option value="2500">2.500 </option>
                                <option value="5000">5.000 </option>
                            </select>
                        </div>
 --}}
                                                <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/bepaketpekerjaan?search=${input}`)
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


      {{-- <div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Paket Pekerjaan ...."
           onkeyup="searchTable()"
           style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
    <i class="bi bi-search"
       style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
</div> --}}
                                <a href="/bepaketpekerjaanrekap">
                                  <button class="button-modern">
                                    <i class="bi bi-clipboard-data" style="margin-right: 8px;"></i>
                                    Rekap
                                    </button>
                                </a>
                                <a href="/statistikprofilpekerjaan">
                                    <button class="button-modern">
                                    <i class="bi bi-bar-chart-line" style="margin-right: 8px;"></i>
                                    Statistik
                                    </button>
                                </a>

                                <a href="/bepaketpekerjaan">
                                    <button class="button-modern">
                                    <i class="bi bi-database" style="margin-right: 8px;"></i>
                                    Data Lengkap
                                    </button>
                                </a>

{{-- <button onclick="exportTableToExcel('tablePaket', 'data_profilpaketpekerjaan')" class="button-modern">
    <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
</button> --}}

<script>

    function exportTableToExcel(tableID, filename = '') {
    let table = document.getElementById(tableID);
    let tableHTML = "<table>" + table.innerHTML + "</table>"; // hanya ambil isi thead+tbody

    filename = filename ? filename + '.xls' : 'excel_data.xls';

    let downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);

    downloadLink.href = 'data:application/vnd.ms-excel,' + encodeURIComponent(tableHTML);
    downloadLink.download = filename;
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

</script>



                                <a href="/bepaketpekerjaancreate">
                                    <button class="button-baru">
                                        <i class="fa fa-plus" style="margin-right: 8px;"></i>
                                        Buat Baru
                                    </button>
                                </a>
                            </div>
                        </div>

<div class="container mt-4" style="font-family: 'Poppins', sans-serif;">

    <!-- Tombol Navigasi Statistik -->
    <div class="d-flex flex-wrap gap-2 mb-4 justify-content-center">
    <button class="button-modern">
        <i class="bi bi-briefcase-fill me-2"></i> Jumlah Paket Pekerjaan {{$data_totalpekerjaan}}
    </button>
    <button class="button-modern statistik-btn" data-target="statistik1">
        <i class="bi bi-briefcase-fill me-2"></i> Jenis Pekerjaan
    </button>
    <button class="button-modern statistik-btn" data-target="statistik2">
        <i class="bi bi-card-checklist me-2"></i> Status Pekerjaan
    </button>
    <button class="button-modern statistik-btn" data-target="statistik3">
        <i class="bi bi-cash-stack me-2"></i> Sumber Dana
    </button>

    <button class="button-modern statistik-btn" data-target="statistik4">
    <i class="bi bi-calendar2-week-fill me-2"></i> Tahun Pelaksanaan
    </button>

    <button class="button-modern statistik-btn" data-target="statistik5">
        <i class="bi bi-geo-alt-fill me-2"></i> Satuan Kerja
    </button>
    {{-- <button class="button-modern statistik-btn" data-target="statistik6">
        <i class="bi bi-bar-chart-fill me-2"></i> Progres
    </button> --}}
</div>


    <!-- Konten Statistik 1 -->
    <div id="statistik1" class="statistik-content">
        <div class="text-center mt-3">
    <button type="button" class="btn btn-outline-success"
            data-bs-toggle="modal" data-bs-target="#modalStatistikTahunPelaksanaan"
            style="font-family:'Poppins',sans-serif; font-weight:600; font-size:14px;">
        <i class="bi bi-calendar3 me-2"></i> Lihat Statistik Data Jenis Pekerjaan
    </button>
</div>

<!-- Modal Statistik Tahun Pelaksanaan -->
<div class="modal fade" id="modalStatistikTahunPelaksanaan" tabindex="-1" aria-labelledby="modalStatistikTahunPelaksanaanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content" style="border-radius:16px; font-family:'Poppins', sans-serif; font-size:16px;">

      <!-- Header -->
      <div class="modal-header" style="background:#1a3c34; color:white; border-top-left-radius:16px; border-top-right-radius:16px;">
        <h5 class="modal-title" id="modalStatistikTahunPelaksanaanLabel" style="font-size:16px;">
          <i class="bi bi-calendar3 me-2"></i> Statistik Jenis Paket Pekerjaan
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body" style="font-size:16px;">
        <div class="table-responsive">
          <table class="table table-bordered align-middle text-center" style="font-size:16px;">
            <thead style="background:#f3f4f6; color:#1a3c34; font-weight:600;">
              <tr>
                <th style="width: 5%;">No</th>
                <th style="text-align:left;">Jenis Pekerjaan</th>
                <th>Jumlah Paket</th>
                <th>Persentase</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data_statistik->sortByDesc('jumlah')->values() as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td style="text-align: left;">{{ $item['jenis'] }}</td>
                <td style="font-weight:600; color:#1a3c34;">{{ $item['jumlah'] }} Paket</td>
                <td>{{ number_format($item['persentase'], 1) }}%</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size:16px;">
          <i class="bi bi-x-circle me-1"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

        <h6><i class="bi bi-bar-chart-line"></i> Statistik Jenis Pekerjaan</h6>
       <div class="row text-center">
    @foreach($data_statistik as $item)
    <div class="col-md-2 col-sm-4 col-6 mb-4">
        <div class="stats-card h-100">
            <div class="stats-content d-flex flex-column align-items-center justify-content-center p-3">
                <div class="stats-icon-box mb-2" style="width:60px; height:60px; border-radius:12px; background:#1a3c34; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-briefcase-fill" style="color:white; font-size:24px;"></i>
                </div>
                <div class="stats-info text-center">
                    <p class="stats-title" style="font-size:14px; font-weight:600; margin-bottom:4px; color:#333;">
                        {{ $item['jenis'] }}
                    </p>
                    <p style="font-weight:700; font-size:16px; margin:0; color:#1a3c34;">
                        <span class="stats-count" data-target="{{ $item['jumlah'] }}">0</span> Paket Pekerjaan
                    </p>
                    <div class="stats-percentage mt-1" style="font-size:12px; color:#1a3c34;">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>{{ number_format($item['persentase'], 1) }}%</span>
                    </div>
                    <div class="stats-progress-wrap mt-2" style="width:100%; height:6px; background:#eee; border-radius:4px;">
                        <div class="stats-progress-bar"
                             style="width: {{ $item['persentase'] }}%; height:100%; background:#1a3c34; border-radius:4px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>

    <!-- Konten Statistik 2 -->
    <div id="statistik2" class="statistik-content" style="display:none;">
        <h6><i class="bi bi-clipboard-data"></i> Statistik Status Pekerjaan</h6>
        <div class="row justify-content-center">
    @foreach($data_totalstatuspekerjaan as $item)
    <div class="col-md-6 col-sm-12 mb-4">
        <div class="stats-card h-100">
            <div class="stats-content d-flex align-items-center p-3">
                <div class="stats-icon-box me-3"
                     style="width:70px; height:70px; border-radius:14px; background:#1a3c34; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-briefcase-fill" style="color:white; font-size:28px;"></i>
                </div>
                <div class="stats-info w-100">
                    <p class="stats-title mb-1" style="font-size:16px; font-weight:600; color:#333;">
                        {{ $item['jenis'] }}
                    </p>
                    <p style="font-weight:700; font-size:18px; margin:0; color:#1a3c34;">
                        <span class="stats-count" data-target="{{ $item['jumlah'] }}">0</span> Paket Pekerjaan
                    </p>
                    <div class="stats-percentage mt-1" style="font-size:13px; color:#1a3c34;">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>{{ number_format($item['persentase'], 1) }}%</span>
                    </div>
                    <div class="stats-progress-wrap mt-2" style="height:6px; background:#eee; border-radius:4px;">
                        <div class="stats-progress-bar"
                             style="width: {{ $item['persentase'] }}%; height:100%; background:#1a3c34; border-radius:4px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


    </div>

    <!-- Konten Statistik 3 -->
    <div id="statistik3" class="statistik-content" style="display:none;">
        <h6><i class="bi bi-cash-stack"></i> Statistik Sumber Dana</h6>
   <div class="row justify-content-center">
    @foreach($data_sumberdana as $item)
    <div class="col-md-6 col-sm-12 mb-4">
        <div class="stats-card h-100">
            <div class="stats-content d-flex align-items-center p-3">
                <div class="stats-icon-box me-3"
                     style="width:70px; height:70px; border-radius:14px; background:#1a3c34; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-briefcase-fill" style="color:white; font-size:28px;"></i>
                </div>
                <div class="stats-info w-100">
                    <p class="stats-title mb-1" style="font-size:16px; font-weight:600; color:#333;">
                        {{ $item['jenis'] }}
                    </p>
                    <p style="font-weight:700; font-size:18px; margin:0; color:#1a3c34;">
                        <span class="stats-count" data-target="{{ $item['jumlah'] }}">0</span> Paket Pekerjaan
                    </p>
                    <div class="stats-percentage mt-1" style="font-size:13px; color:#1a3c34;">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>{{ number_format($item['persentase'], 1) }}%</span>
                    </div>
                    <div class="stats-progress-wrap mt-2" style="height:6px; background:#eee; border-radius:4px;">
                        <div class="stats-progress-bar"
                             style="width: {{ $item['persentase'] }}%; height:100%; background:#1a3c34; border-radius:4px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>

    <!-- Konten Statistik 4 -->
    <div id="statistik4" class="statistik-content" style="display:none;">
        <h6><i class="bi bi-people-fill"></i> Statistik Tahun Pelaksanaan</h6>
    <div class="row justify-content-center">
    @foreach($data_tahun as $item)
    <div class="col-md-6 col-sm-12 mb-4">
        <div class="stats-card h-100">
            <div class="stats-content d-flex align-items-center p-3">
                <div class="stats-icon-box me-3"
                     style="width:70px; height:70px; border-radius:14px; background:#1a3c34; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-briefcase-fill" style="color:white; font-size:28px;"></i>
                </div>
                <div class="stats-info w-100">
                    <p class="stats-title mb-1" style="font-size:16px; font-weight:600; color:#333;">
                        {{ $item['jenis'] }}
                    </p>
                    <p style="font-weight:700; font-size:18px; margin:0; color:#1a3c34;">
                        <span class="stats-count" data-target="{{ $item['jumlah'] }}">0</span> Paket Pekerjaan
                    </p>
                    <div class="stats-percentage mt-1" style="font-size:13px; color:#1a3c34;">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>{{ number_format($item['persentase'], 1) }}%</span>
                    </div>
                    <div class="stats-progress-wrap mt-2" style="height:6px; background:#eee; border-radius:4px;">
                        <div class="stats-progress-bar"
                             style="width: {{ $item['persentase'] }}%; height:100%; background:#1a3c34; border-radius:4px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    </div>

    <!-- Konten Statistik 5 -->
    <div id="statistik5" class="statistik-content" style="display:none;">
        <!-- Tombol Pemicu Modal -->
<div class="text-center mt-3">
    <button type="button" class="btn btn-outline-success"
            data-bs-toggle="modal" data-bs-target="#modalStatistikTahun"
            style="font-family:'Poppins',sans-serif; font-weight:600; font-size:14px;">
        <i class="bi bi-bank2 me-2"></i> Lihat Statistik Data Satuan Kerja
    </button>
</div>

<!-- Modal Statistik Tahun -->
<div class="modal fade" id="modalStatistikTahun" tabindex="-1" aria-labelledby="modalStatistikTahunLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content" style="border-radius:16px; font-family:'Poppins', sans-serif; font-size:16px;">

      <!-- Header -->
      <div class="modal-header" style="background:#1a3c34; color:white; border-top-left-radius:16px; border-top-right-radius:16px;">
        <h5 class="modal-title" id="modalStatistikTahunLabel" style="font-size:16px;">
          <i class="bi bi-bank2 me-2"></i> Statistik Paket Pekerjaan Per Satuan Kerja
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body" style="font-size:16px;">
        <div class="table-responsive">
          <table class="table table-bordered align-middle text-center" style="font-size:16px;">
            <thead style="background:#f3f4f6; color:#1a3c34; font-weight:600;">
              <tr>
                <th style="width: 5%;">No</th>
                <th style="text-align:left;">Dinas/Instansi</th>
                <th>Jumlah Paket</th>
                <th>Persentase</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data_satuankerja->sortByDesc('jumlah')->values() as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td style="text-align: left;">{{ $item['jenis'] }}</td>
                <td style="font-weight:600; color:#1a3c34;">{{ $item['jumlah'] }} Paket</td>
                <td>{{ number_format($item['persentase'], 1) }}%</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-size:16px;">
          <i class="bi bi-x-circle me-1"></i> Tutup
        </button>
      </div>

    </div>
  </div>
</div>

        <h6><i class="bi bi-geo-alt-fill"></i> Statistik Satuan Kerja Dinas/Instansi</h6>
        <div class="row text-center justify-content-center">
    @foreach($data_satuankerja as $item)
    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
        <div class="stats-card h-100 shadow-sm"
             style="border-radius:14px; transition:all 0.3s; background:#fff;">
            <div class="stats-content d-flex flex-column align-items-center justify-content-center p-3">

                <!-- Ikon Instansi Pemerintah -->
                <div class="stats-icon-box mb-2"
                     style="width:70px; height:70px; border-radius:14px; background:#1a3c34; display:flex; align-items:center; justify-content:center;">
                    <i class="bi bi-bank2" style="color:white; font-size:32px;"></i>
                </div>

                <!-- Info Statistik -->
                <div class="stats-info text-center">
                    <p class="stats-title mb-1" style="font-size:14px; font-weight:600; color:#333;">
                        {{ $item['jenis'] }}
                    </p>
                    <p style="font-weight:700; font-size:16px; margin:0; color:#1a3c34;">
                        <span class="stats-count" data-target="{{ $item['jumlah'] }}">0</span> Paket
                    </p>
                    <div class="stats-percentage mt-1" style="font-size:12px; color:#1a3c34;">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>{{ number_format($item['persentase'], 1) }}%</span>
                    </div>
                    <div class="stats-progress-wrap mt-2"
                         style="width:100%; height:6px; background:#eee; border-radius:4px;">
                        <div class="stats-progress-bar"
                             style="width: {{ $item['persentase'] }}%; height:100%; background:#1a3c34; border-radius:4px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>

    <!-- Konten Statistik 6 -->
    <div id="statistik6" class="statistik-content" style="display:none;">
        <h6><i class="bi bi-activity"></i> Statistik Progres</h6>
        <p>Data Progres akan tampil di sini...</p>
    </div>

</div>

<!-- Script Toggle -->
<script>

    document.querySelectorAll('.stats-count').forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const speed = 50;
    const updateCount = () => {
        const count = +counter.innerText || 0;
        const increment = target / 40;
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, speed);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});


document.querySelectorAll('.statistik-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        // Sembunyikan semua konten
        document.querySelectorAll('.statistik-content').forEach(content => {
            content.style.display = 'none';
        });
        // Tampilkan konten yang dipilih
        const target = this.getAttribute('data-target');
        document.getElementById(target).style.display = 'block';

        // Ganti gaya tombol aktif
        document.querySelectorAll('.statistik-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>
                        <br><br>

                        <!-- Modal Konfirmasi Hapus -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                        <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form id="deleteForm" method="POST" action="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!--end::App Main-->
    </div>

    @include('backend.00_administrator.00_baganterpisah.02_footer')

    <script>
        function setDeleteUrl(button) {
            var id = button.getAttribute('data-judul');
            document.getElementById('itemName').innerText = id;
            var deleteUrl = "/bepaketpekerjaan/delete/" + encodeURIComponent(id);
            document.getElementById('deleteForm').action = deleteUrl;
        }
    </script>
</body>
