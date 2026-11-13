@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══ BACKGROUND 3D PATTERN & FLOATING CARD ═══ */
.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}
.card-3d {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 10px 25px -5px rgba(19, 168, 71, 0.15),
                0 20px 40px -10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    margin-bottom: 30px;
}
.card-3d:hover {
    box-shadow: 0 15px 35px -5px rgba(19, 168, 71, 0.25),
                0 25px 50px -12px rgba(0, 0, 0, 0.15);
}
body.modal-open .card-3d,
body.modal-open .card-3d:hover { transform: none !important; }

.card-header-custom {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 30px !important;
    border-radius: 20px 20px 0 0 !important;
}
.card-3d > .card-body:last-child { border-radius: 0 0 20px 20px; }
@media (max-width: 768px) {
    .card-header-custom { padding: 16px 18px !important; }
    .card-3d { border-radius: 16px; margin-bottom: 20px; }
}

body, .app-wrapper, .card-3d {
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    line-height: 1.55;
    color: #1a2b4a;
}

/* ═══ BARIS 1: CHART BAR + LINE ═══ */
.chart-status-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 12px;
}
@media (max-width: 768px) {
    .chart-status-wrapper { grid-template-columns: 1fr; }
}
.chart-box {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px;
}
.chart-box-title {
    font-size: 12px;
    font-weight: 700;
    color: #4a5a72;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.chart-box-title i { color: #13A847; font-size: 14px; }

/* ── Bar Chart ── */
.chart-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    font-size: 12px;
}
.chart-item:last-child { margin-bottom: 0; }
.chart-item-label {
    flex: 0 0 120px;
    font-weight: 600;
    color: #334155;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.chart-item-bar {
    flex: 1;
    background: #f1f5f9;
    border-radius: 6px;
    height: 22px;
    position: relative;
    overflow: hidden;
}
.chart-item-bar-fill {
    height: 100%;
    border-radius: 6px;
    transition: width 0.6s ease;
    min-width: 4px;
}
.chart-item-count {
    flex: 0 0 45px;
    text-align: right;
    font-weight: 800;
    font-size: 13px;
}

/* ── Line Chart Container ── */
.line-chart-container {
    position: relative;
    width: 100%;
    height: 260px;
}
.empty-chart {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 260px;
    color: #94a3b8;
    font-size: 12px;
    font-weight: 600;
    gap: 8px;
}
.empty-chart i {
    font-size: 36px;
    color: #cbd5e1;
}

/* ═══ BARIS 2: SEARCH ═══ */
.toolbar-search { width: 100%; margin-bottom: 12px; }
.search-wrapper { position: relative; width: 100%; }
.search-input {
    width: 100%;
    border: 1.5px solid #e2e8f0;
    padding: 12px 44px 12px 18px;
    font-size: 13px;
    border-radius: 12px;
    background: #f8fafc;
    transition: all 0.25s ease;
}
.search-input:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.search-icon {
    position: absolute;
    right: 16px; top: 50%;
    transform: translateY(-50%);
    font-size: 16px; color: #94a3b8;
    pointer-events: none;
}
.search-clear {
    position: absolute;
    right: 42px; top: 50%;
    transform: translateY(-50%);
    background: #e2e8f0;
    color: #64748b;
    border: none;
    border-radius: 50%;
    width: 22px; height: 22px;
    display: flex; align-items: center; justify-content: center;
    font-size: 12px;
    cursor: pointer;
    text-decoration: none;
}
.search-clear:hover { background: #dc2626; color: #fff; }

/* ═══ BARIS 3: FILTER ═══ */
.toolbar-filter {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 12px;
    padding: 16px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    border-radius: 12px;
    margin-bottom: 12px;
}
.filter-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.filter-label {
    font-size: 12px;
    font-weight: 600;
    color: #4a5a72;
    display: flex;
    align-items: center;
    gap: 4px;
}
.filter-label i { color: #13A847; }
.filter-select {
    border: 1.5px solid #e2e8f0;
    padding: 9px 32px 9px 12px;
    font-size: 13px;
    border-radius: 10px;
    background: #ffffff;
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    width: 100%;
}
.filter-select:focus {
    border-color: #13A847;
    background-color: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.filter-reset {
    font-size: 12px;
    padding: 10px 16px;
    border-radius: 10px;
    background: #fef2f2;
    color: #dc2626;
    border: 1.5px solid #fecaca;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all 0.2s ease;
    white-space: nowrap;
}
.filter-reset:hover {
    background: #dc2626;
    color: #fff;
    border-color: #dc2626;
}

/* ═══ BARIS 4: TOTAL + AKSI ═══ */
.toolbar-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 12px;
}
.badge-total {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 14px;
    background: #ffffff;
    border: 1.5px solid #a7f3d0;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 700;
    color: #065f46;
    white-space: nowrap;
}
.badge-total i { color: #13A847; font-size: 14px; }
.badge-total .badge-total-number {
    background: #13A847;
    color: #fff;
    padding: 2px 8px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 800;
    margin: 0 2px;
}
.action-buttons-group {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-items: center;
}
.btn-download {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px !important;
    font-weight: 600;
    padding: 9px 16px;
    border-radius: 10px;
    border: 1.5px solid #0ea5e9;
    background: #ffffff;
    color: #0369a1;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.2s ease;
}
.btn-download:hover {
    background: #0ea5e9;
    color: #fff;
    border-color: #0ea5e9;
}

/* ═══ ZEBRA TABLE ═══ */
#dataTable,
#dataTable > tbody,
#dataTable > tbody > tr,
#dataTable > tbody > tr > td,
#dataTable > thead,
#dataTable > thead > tr > th {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    --bs-table-hover-bg: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
}
#dataTable {
    width: 100%;
    border-collapse: collapse;
    min-width: 1800px;
    font-size: 13px;
}
#dataTable > thead > tr > th {
    padding: 14px 10px !important;
    font-size: 11.5px !important;
    font-weight: 700 !important;
    color: #166534 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.4px !important;
    background: linear-gradient(180deg, #f0fdf4 0%, #f8fafc 100%) !important;
    border-bottom: 2px solid #13A847 !important;
    white-space: nowrap;
    position: sticky;
    top: 0;
    z-index: 2;
}
#dataTable > thead > tr > th i { color: #13A847; margin-right: 3px; }
#dataTable > tbody > tr > td {
    padding: 10px 12px;
    font-size: 12.5px;
    color: #1a2b4a;
    border-bottom: 1px solid #e5e7eb !important;
    vertical-align: middle;
}
#dataTable > tbody > tr:nth-child(odd) > td { background-color: #ffffff !important; }
#dataTable > tbody > tr:nth-child(even) > td { background-color: #f0fdf4 !important; }
#dataTable > tbody > tr:hover > td {
    background-color: #bbf7d0 !important;
    color: #065f46 !important;
    cursor: pointer;
}
#dataTable > tbody > tr:hover > td:first-child {
    box-shadow: inset 4px 0 0 #13A847;
}
#dataTable > tbody > tr.empty-row > td,
#dataTable > tbody > tr.empty-row:hover > td {
    background-color: #ffffff !important;
    cursor: default;
    box-shadow: none !important;
}
.table-responsive {
    max-width: 100%;
    overflow-x: auto;
    border-radius: 0 0 20px 20px;
}

.button-modern,
.button-baru,
.button-berkas,
.button-merah,
.button-hijau,
.button-data { font-size: 13px !important; line-height: 1.4; }

/* ═══ MODAL TAMBAH ═══ */
.modal-dialog-75 {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}
@media (max-width: 991.98px) {
    .modal-dialog-75 { max-width: 95%; width: 95%; }
}
.modal-tambah-data .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-tambah-data .modal-header {
    background: #ffffff;
    border-bottom: 1px solid #eaeaea;
    padding: 20px 28px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}
.modal-tambah-data .modal-header .modal-title {
    margin: 0 !important;
    font-weight: 700;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-tambah-data .modal-header .modal-title i { color: #13A847; font-size: 20px; }
.modal-tambah-data .modal-body {
    padding: 24px 28px;
    max-height: 70vh;
    overflow-y: auto;
}
.modal-tambah-data .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    padding: 16px 28px;
    justify-content: flex-end;
    gap: 10px;
}
.modal-tambah-data .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.modal-tambah-data .form-label-modern i { color: #13A847; font-size: 14px; }
.modal-tambah-data .form-control,
.modal-tambah-data .form-select {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
}
.modal-tambah-data .form-control:focus,
.modal-tambah-data .form-select:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
.modal-tambah-data .form-control.is-invalid,
.modal-tambah-data .form-select.is-invalid {
    border-color: #ef4444;
    background: #fef2f2;
}
.modal-tambah-data .invalid-feedback {
    display: block;
    color: #dc2626;
    font-size: 11.5px;
    margin-top: 4px;
    font-weight: 600;
}
.modal-tambah-data .mb-3 { margin-bottom: 14px; }

.modal-alert-error {
    background: #fef2f2;
    border: 1.5px solid #fecaca;
    border-radius: 10px;
    padding: 14px 16px;
    margin-bottom: 16px;
    color: #991b1b;
    font-size: 13px;
    font-weight: 600;
}
.modal-alert-error i { color: #dc2626; font-size: 16px; margin-right: 6px; }
.modal-alert-error ul { margin: 6px 0 0 0; padding-left: 18px; font-weight: 500; }
.modal-alert-error ul li { font-size: 12px; line-height: 1.5; }

/* ═══ MODAL EDIT ═══ */
.modal-edit-data .modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    overflow: hidden;
}
.modal-edit-data .modal-header {
    background: #ffffff;
    border-bottom: 1px solid #eaeaea;
    padding: 20px 28px;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}
.modal-edit-data .modal-header .modal-title {
    margin: 0 !important;
    font-weight: 700;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.modal-edit-data .modal-header .modal-title i { color: #f59e0b; font-size: 20px; }
.modal-edit-data .modal-body {
    padding: 24px 28px;
    max-height: 70vh;
    overflow-y: auto;
}
.modal-edit-data .modal-footer {
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
    padding: 16px 28px;
    justify-content: flex-end;
    gap: 10px;
}
.modal-edit-data .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.modal-edit-data .form-label-modern i { color: #f59e0b; font-size: 14px; }
.modal-edit-data .form-control,
.modal-edit-data .form-select {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
}
.modal-edit-data .form-control:focus,
.modal-edit-data .form-select:focus {
    border-color: #f59e0b;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.15);
    outline: none;
}
.modal-edit-data .mb-3 { margin-bottom: 14px; }

/* ═══ MODAL HAPUS ═══ */
.modal-confirm-delete .modal-content {
    border-radius: 16px; border: none;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
.modal-confirm-delete .modal-header {
    background: #fef2f2; border-bottom: 1px solid #fecaca;
    padding: 18px 24px;
}
.modal-confirm-delete .modal-body { padding: 30px 24px; text-align: center; }
.modal-confirm-delete .modal-footer {
    background: #f8fafc; border-top: 1px solid #eaeaea;
    padding: 16px 24px; justify-content: center; gap: 12px;
}
.confirm-icon {
    width: 80px; height: 80px;
    background: #fee2e2; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
}
.confirm-icon i { font-size: 2.5rem; color: #ef4444; }
.confirm-title { font-size: 16px; font-weight: 700; color: #1a2b4a; margin-bottom: 8px; }
.confirm-text { font-size: 13px; color: #4a5a72; margin: 0; line-height: 1.6; }
.confirm-text strong { color: #dc2626; }

@media (max-width: 768px) {
    .button-modern, .button-baru, .button-berkas, .button-merah,
    .button-hijau, .button-data, .btn-download { font-size: 12px !important; }
    .toolbar-actions { flex-direction: column; align-items: stretch; }
    .action-buttons-group { width: 100%; }
    .action-buttons-group > * { flex: 1 1 auto; justify-content: center; }
}
</style>

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

                            {{-- ═══ BARIS 1: CHART BAR + LINE ═══ --}}
                            <div class="chart-status-wrapper">
                                <div class="chart-box">
                                    <div class="chart-box-title">
                                        <i class="bi bi-bar-chart-line-fill"></i>
                                        Status Paket Pekerjaan
                                    </div>
                                    @php
                                        $barColors = [
                                            1 => '#ef4444',
                                            2 => '#f97316',
                                            3 => '#eab308',
                                            4 => '#13A847',
                                        ];
                                    @endphp
                                    @forelse($chartStatus as $cs)
                                        @php
                                            $percent = $chartMax > 0 ? ($cs['count'] / $chartMax) * 100 : 0;
                                            $color   = $barColors[$cs['id']] ?? '#6c757d';
                                        @endphp
                                        <div class="chart-item">
                                            <div class="chart-item-label" title="{{ $cs['label'] }}">
                                                {{ $cs['label'] ?? 'Status #' . $cs['id'] }}
                                            </div>
                                            <div class="chart-item-bar">
                                                <div class="chart-item-bar-fill"
                                                     style="width: {{ $percent }}%; background: linear-gradient(90deg, {{ $color }}, {{ $color }}cc);"></div>
                                            </div>
                                            <div class="chart-item-count" style="color: {{ $color }};">{{ $cs['count'] }}</div>
                                        </div>
                                    @empty
                                        <div class="empty-chart" style="height: auto; padding: 20px 0;">
                                            <i class="bi bi-bar-chart"></i>
                                            Belum ada data status pekerjaan
                                        </div>
                                    @endforelse
                                </div>

                                <div class="chart-box">
                                    <div class="chart-box-title">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        Tren per Tahun Pelaksanaan (4 Status)
                                    </div>
                                    @if(isset($chartLine['datasets']) && count($chartLine['datasets']) > 0 && count($chartLine['labels']) > 0)
                                        <div class="line-chart-container">
                                            <canvas id="lineChart"></canvas>
                                        </div>
                                    @else
                                        <div class="empty-chart">
                                            <i class="bi bi-graph-down"></i>
                                            Belum ada data tahun pelaksanaan
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <form method="GET" action="{{ url('/bepaketpekerjaan') }}" id="filterForm" autocomplete="off">

                                {{-- ═══ BARIS 2: SEARCH ═══ --}}
                                <div class="toolbar-search">
                                    <div class="search-wrapper">
                                        <input type="search" name="search" id="searchInput"
                                               placeholder="Cari Paket Pekerjaan (nama, CV, NIB, status, dll)..."
                                               value="{{ $search ?? '' }}"
                                               class="search-input">
                                        @if(!empty($search))
                                            <a href="{{ url('/bepaketpekerjaan') . '?' . http_build_query(array_filter([
                                                    'perPage'          => $perPage,
                                                    'status_pekerjaan' => $statusFilter,
                                                    'tahun_input'      => $tahunInput,
                                                    'tahunpilihan_id'  => $tahunpilihanId,
                                                ])) }}"
                                               class="search-clear" title="Hapus pencarian">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        @endif
                                        <i class="bi bi-search search-icon"></i>
                                    </div>
                                </div>

                                {{-- ═══ BARIS 3: FILTER + TAMPILKAN ═══ --}}
                                <div class="toolbar-filter">

                                    {{-- ✅ TAMPILKAN DATA --}}
                                    <div class="filter-group">
                                        <label class="filter-label" for="filterPerPage">
                                            <i class="bi bi-list-ol"></i> Tampilkan
                                        </label>
                                        <select name="perPage" id="filterPerPage"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            @foreach([10, 15, 25, 50, 100, 200, 250, 500, 1000, 2000] as $opt)
                                                <option value="{{ $opt }}" {{ (int)($perPage ?? 10) === $opt ? 'selected' : '' }}>
                                                    {{ $opt }} data
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label class="filter-label" for="filterStatusPekerjaan">
                                            <i class="bi bi-list-task"></i> Status Pekerjaan
                                        </label>
                                        <select name="status_pekerjaan" id="filterStatusPekerjaan"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            <option value="">Semua Status</option>
                                            @foreach($statuspekerjaan as $sp)
                                                <option value="{{ $sp->id }}" {{ (string)$statusFilter === (string)$sp->id ? 'selected' : '' }}>
                                                    {{ $sp->paketstatuspekerjaan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label class="filter-label" for="filterTahunInput">
                                            <i class="bi bi-calendar-plus"></i> Tahun Input Data
                                        </label>
                                        <select name="tahun_input" id="filterTahunInput"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            <option value="">Semua Tahun</option>
                                            @foreach($listTahunInput as $ti)
                                                <option value="{{ $ti->tahun }}" {{ (string)$tahunInput === (string)$ti->tahun ? 'selected' : '' }}>
                                                    {{ $ti->tahun }} ({{ $ti->total }} data)
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label class="filter-label" for="filterTahunPilihan">
                                            <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan
                                        </label>
                                        <select name="tahunpilihan_id" id="filterTahunPilihan"
                                                class="filter-select"
                                                onchange="document.getElementById('filterForm').submit()">
                                            <option value="">Semua Tahun</option>
                                            @foreach($listTahunPilihan as $tp)
                                                <option value="{{ $tp['id'] }}" {{ (string)$tahunpilihanId === (string)$tp['id'] ? 'selected' : '' }}>
                                                    {{ $tp['tahunpilihan'] }} ({{ $tp['count'] }} data)
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @if($statusFilter || $tahunInput || $tahunpilihanId || $search || $perPage != 10)
                                        <div class="filter-group">
                                            <label class="filter-label">&nbsp;</label>
                                            <a href="{{ url('/bepaketpekerjaan') }}" class="filter-reset">
                                                <i class="bi bi-x-circle"></i> Reset Filter
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </form>

                            {{-- ═══ BARIS 4: TOTAL + AKSI ═══ --}}
                            <div class="toolbar-actions">
                                <div class="badge-total">
                                    <i class="bi bi-box-seam"></i>
                                    Total
                                    <span class="badge-total-number">{{ $data->total() ?? 0 }}</span>
                                    Paket Pekerjaan
                                </div>

                                <div class="action-buttons-group">
                                    {{-- <a href="/bepaketpekerjaanrekap" class="button-modern button-md">
                                        <i class="bi bi-clipboard-data" style="margin-right: 4px;"></i> Rekap
                                    </a> --}}
                                    <a href="/statistikprofilpekerjaan" class="button-modern button-md">
                                        <i class="bi bi-bar-chart-line" style="margin-right: 4px;"></i> Statistik
                                    </a>
                                    <a href="/bepaketpekerjaan" class="button-modern button-md">
                                        <i class="bi bi-database" style="margin-right: 4px;"></i> Data Lengkap
                                    </a>
                                    <button type="button" class="button-berkas button-md"
                                            onclick="exportTableToExcel('dataTable', 'data_profilpaketpekerjaan')">
                                        <i class="bi bi-file-earmark-excel"></i>
                                        <span>Download Excel</span>
                                    </button>
                                    <button type="button" class="button-baru button-md"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalTambahData">
                                        <i class="fa fa-plus" style="margin-right: 4px;"></i>
                                        Tambah Data
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table id="dataTable">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px; text-align:center;"><i class="bi bi-hash"></i>No</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-briefcase"></i>Jenis Pekerjaan</th>
                                            <th style="width: 300px; text-align:center;"><i class="bi bi-card-text"></i>Nama Pekerjaan</th>
                                            <th style="width: 200px; text-align:center;"><i class="bi bi-list-check"></i>Status Paket</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-cash-stack"></i>Sumber Dana</th>
                                            <th style="width: 120px; text-align:center;"><i class="bi bi-calendar-week"></i>Tahun</th>
                                            <th style="width: 200px; text-align:center;"><i class="bi bi-building"></i>CV/PT</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-123"></i>NIB</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-currency-dollar"></i>Nilai Kontrak</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-file-earmark-text"></i>Jenis Kontrak</th>
                                            <th style="width: 150px; text-align:center;"><i class="bi bi-bar-chart"></i>Karakteristik</th>
                                            <th style="width: 120px; text-align:center;"><i class="bi bi-calendar-date"></i>Mulai</th>
                                            <th style="width: 120px; text-align:center;"><i class="bi bi-calendar-check"></i>Selesai</th>
                                            <th style="width: 120px; text-align:center;"><i class="bi bi-check-circle"></i>Status</th>
                                            <th style="width: 180px; text-align:center;"><i class="bi bi-graph-up-arrow"></i>Progress</th>
                                            <th style="width: 250px; text-align:center;"><i class="bi bi-diagram-3"></i>Satuan Kerja</th>
                                            <th style="width: 220px; text-align:center;"><i class="bi bi-gear"></i>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center;">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                                            <td style="text-align: left;">
                                                @if($item->profiljenispekerjaan && $item->profiljenispekerjaan->jenispekerjaan)
                                                    {{ $item->profiljenispekerjaan->jenispekerjaan }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: left; max-width: 280px; word-wrap: break-word; white-space: normal;">
                                                @if($item->namapekerjaan)
                                                    {{ ucfirst(strtolower($item->namapekerjaan)) }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->paketstatuspekerjaan && $item->paketstatuspekerjaan->paketstatuspekerjaan)
                                                    {{ $item->paketstatuspekerjaan->paketstatuspekerjaan }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->sumberdana && $item->sumberdana->sumberdana)
                                                    {{ $item->sumberdana->sumberdana }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($item->tahunpilihan && $item->tahunpilihan->tahunpilihan)
                                                    {{ $item->tahunpilihan->tahunpilihan }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">{{ $item->cvptpenyedia ?? '-' }}</td>
                                            <td style="text-align: center;">{{ $item->nib ?? '-' }}</td>
                                            <td style="text-align: right;">
                                                @if($item->nilaikontrak)
                                                    Rp. {{ number_format($item->nilaikontrak, 0, ',', '.') }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">{{ $item->jeniskontrak ?? '-' }}</td>
                                            <td style="text-align: center;">{{ $item->karakteristikkontrak ?? '-' }}</td>

                                            @php
                                                $months = [
                                                    1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                                                    5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                                                    9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                                                ];
                                            @endphp
                                            <td style="text-align: center;">{{ $months[$item->bulanmulai] ?? ($item->bulanmulai ?? '-') }}</td>
                                            <td style="text-align: center;">{{ $months[$item->bulanselesai] ?? ($item->bulanselesai ?? '-') }}</td>

                                            @php
                                                $bulanColors = [
                                                    1 => '#FF6B6B', 2 => '#FFA94D', 3 => '#FFD43B', 4 => '#69DB7C',
                                                    5 => '#38D9A9', 6 => '#4DABF7', 7 => '#5C7CFA', 8 => '#9775FA',
                                                    9 => '#DA77F2', 10 => '#F783AC', 11 => '#FF922B', 12 => '#74C0FC',
                                                    13 => '#20C997',
                                                ];
                                                $idBulan = $item->bulanrekap->id ?? null;
                                                $bgColor = $bulanColors[$idBulan] ?? '#6c757d';
                                            @endphp
                                            <td style="text-align: center;">
                                                @if($item->bulanrekap && $item->bulanrekap->bulanrekap)
                                                    <span class="button-hijau" style="background-color: {{ $bgColor }}; color: white;">
                                                        {{ $item->bulanrekap->bulanrekap }}
                                                    </span>
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: left;">
                                                <div style="width: 100%; background-color: #ddd; border-radius: 10px; height: 20px; position: relative;">
                                                    <div style="width: {{ $item->progress ?? 0 }}%;
                                                        background-color: @if(($item->progress ?? 0) < 25) red @elseif(($item->progress ?? 0) < 50) orange @elseif(($item->progress ?? 0) < 75) lightblue @elseif(($item->progress ?? 0) < 100) lightgreen @else green @endif;
                                                        height: 100%; border-radius: 10px;"></div>
                                                    <div style="position: absolute; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; color: black; font-weight: bold; font-size: 11px;">
                                                        {{ $item->progress ?? 0 }}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td style="text-align: left;">
                                                @if($item->user && $item->user->name)
                                                    {{ ucwords(strtolower($item->user->name)) }}
                                                @else
                                                    <span class="button-berkas">Data Belum Update</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                <div style="display: flex; gap: 6px; justify-content: center;">
                                                    <button type="button" class="button-berkas" title="Update"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalEditData"
                                                            data-item='@json($item)'>
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <a href="javascript:void(0)" class="button-merah" title="Delete"
                                                       data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                       data-judul="{{ $item->namapekerjaan }}"
                                                       data-id="{{ $item->id }}"
                                                       onclick="setDeleteUrl(this)">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                                <tr class="empty-row">
                                                    <td colspan="34">
                                                        <div class="empty-state">
                                                            <div class="empty-icon">
                                                                <i class="bi bi-inbox"></i>
                                                            </div>
                                                            <h5 class="empty-title">Data Tidak Ditemukan !</h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @include('backend.00_administrator.00_baganterpisah.07_paginations')
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

{{-- ═══ MODAL TAMBAH DATA ═══ --}}
<div class="modal fade modal-tambah-data" id="modalTambahData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Profil Paket Pekerjaan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('bepaketpekerjaancreatenew') }}" method="POST" enctype="multipart/form-data" id="formTambahData">
                @csrf
                @method('POST')

                <div class="modal-body">
                    @if ($errors->any())
                        <div class="modal-alert-error">
                            <strong><i class="bi bi-exclamation-triangle-fill"></i> Terdapat {{ $errors->count() }} kesalahan:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="user_id">
                                    <i class="bi bi-person-circle"></i> Satuan Kerja <span style="color:#dc2626;">*</span>
                                </label>
                                <select name="user_id" id="user_id" class="form-select @error('user_id') is-invalid @enderror">
                                    <option value="">-- Pilih Satuan Kerja --</option>
                                    @foreach($user as $u)
                                        <option value="{{ $u->id }}" {{ old('user_id') == $u->id ? 'selected' : '' }}>
                                            {{ Str::title(strtolower($u->name)) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('user_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                @if($user->count() == 0)
                                    <small style="color:#dc2626; font-size:11px; margin-top:4px; display:block;">
                                        <i class="bi bi-exclamation-circle"></i> Belum ada user dinas (statusadmin_id = 9).
                                    </small>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="profiljenispekerjaan_id">
                                    <i class="bi bi-tools"></i> Jenis Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <select name="profiljenispekerjaan_id" id="profiljenispekerjaan_id" class="form-select @error('profiljenispekerjaan_id') is-invalid @enderror">
                                    <option value="">-- Pilih Jenis Pekerjaan --</option>
                                    @foreach($jenispekerjaan as $jp)
                                        <option value="{{ $jp->id }}" {{ old('profiljenispekerjaan_id') == $jp->id ? 'selected' : '' }}>
                                            {{ Str::title(strtolower($jp->jenispekerjaan)) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('profiljenispekerjaan_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="paketstatuspekerjaan_id">
                                    <i class="bi bi-list-task"></i> Status Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <select name="paketstatuspekerjaan_id" id="paketstatuspekerjaan_id" class="form-select @error('paketstatuspekerjaan_id') is-invalid @enderror">
                                    <option value="">-- Pilih Status --</option>
                                    @foreach($statuspekerjaan as $sp)
                                        <option value="{{ $sp->id }}" {{ old('paketstatuspekerjaan_id') == $sp->id ? 'selected' : '' }}>
                                            {{ $sp->paketstatuspekerjaan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('paketstatuspekerjaan_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="sumberdana_id">
                                    <i class="bi bi-currency-exchange"></i> Sumber Dana <span style="color:#dc2626;">*</span>
                                </label>
                                <select name="sumberdana_id" id="sumberdana_id" class="form-select @error('sumberdana_id') is-invalid @enderror">
                                    <option value="">-- Pilih Sumber Dana --</option>
                                    @foreach($sumberdana as $sd)
                                        <option value="{{ $sd->id }}" {{ old('sumberdana_id') == $sd->id ? 'selected' : '' }}>
                                            {{ $sd->sumberdana }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('sumberdana_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="tahunpilihan_id">
                                    <i class="bi bi-calendar3"></i> Tahun Pelaksanaan <span style="color:#dc2626;">*</span>
                                </label>
                                <select name="tahunpilihan_id" id="tahunpilihan_id" class="form-select @error('tahunpilihan_id') is-invalid @enderror">
                                    <option value="">-- Pilih Tahun --</option>
                                    @foreach($tahun as $th)
                                        <option value="{{ $th->id }}" {{ old('tahunpilihan_id') == $th->id ? 'selected' : '' }}>
                                            {{ $th->tahunpilihan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tahunpilihan_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="namapekerjaan">
                                    <i class="bi bi-file-earmark-text"></i> Nama Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" name="namapekerjaan" id="namapekerjaan"
                                       value="{{ old('namapekerjaan') }}"
                                       class="form-control @error('namapekerjaan') is-invalid @enderror"
                                       placeholder="Masukkan nama pekerjaan">
                                @error('namapekerjaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="cvptpenyedia">
                                    <i class="bi bi-building"></i> CV/PT Penyedia
                                </label>
                                <input type="text" name="cvptpenyedia" id="cvptpenyedia"
                                       value="{{ old('cvptpenyedia') }}"
                                       class="form-control"
                                       placeholder="Nama penyedia">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="nib">
                                    <i class="bi bi-credit-card"></i> NIB
                                </label>
                                <input type="text" name="nib" id="nib"
                                       value="{{ old('nib') }}"
                                       class="form-control"
                                       placeholder="Nomor Induk Berusaha">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="nilaikontrak">
                                    <i class="bi bi-cash-coin"></i> Nilai Kontrak (Rp)
                                </label>
                                <input type="text" name="nilaikontrak" id="nilaikontrak"
                                       value="{{ old('nilaikontrak') }}"
                                       class="form-control"
                                       placeholder="Contoh: 100.000.000"
                                       oninput="formatRibuan(this)"
                                       onblur="clearFormat(this)">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="jeniskontrak">
                                    <i class="bi bi-file-earmark-lock2"></i> Jenis Kontrak
                                </label>
                                <select name="jeniskontrak" id="jeniskontrak" class="form-select">
                                    <option value="">-- Pilih Jenis Kontrak --</option>
                                    <option value="Harga Satuan" {{ old('jeniskontrak') == 'Harga Satuan' ? 'selected' : '' }}>Harga Satuan</option>
                                    <option value="Harga Borongan" {{ old('jeniskontrak') == 'Harga Borongan' ? 'selected' : '' }}>Harga Borongan</option>
                                    <option value="Kontrak Kerja" {{ old('jeniskontrak') == 'Kontrak Kerja' ? 'selected' : '' }}>Kontrak Kerja</option>
                                    <option value="Lumpsum" {{ old('jeniskontrak') == 'Lumpsum' ? 'selected' : '' }}>Lumpsum</option>
                                    <option value="Turnkey" {{ old('jeniskontrak') == 'Turnkey' ? 'selected' : '' }}>Turnkey</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="karakteristikkontrak">
                                    <i class="bi bi-bookmark-check"></i> Karakteristik Kontrak
                                </label>
                                <select name="karakteristikkontrak" id="karakteristikkontrak" class="form-select">
                                    <option value="">-- Pilih Karakteristik --</option>
                                    <option value="Tahun Tunggal" {{ old('karakteristikkontrak', 'Tahun Tunggal') == 'Tahun Tunggal' ? 'selected' : '' }}>Tahun Tunggal</option>
                                    <option value="Multi Tahun" {{ old('karakteristikkontrak') == 'Multi Tahun' ? 'selected' : '' }}>Multi Tahun</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="bulanmulai">
                                    <i class="bi bi-calendar2-week"></i> Bulan Mulai
                                </label>
                                @php
                                    $months = [1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'November',12=>'Desember'];
                                @endphp
                                <select name="bulanmulai" id="bulanmulai" class="form-select">
                                    <option value="">-- Pilih Bulan --</option>
                                    @foreach ($months as $num => $name)
                                        <option value="{{ $num }}" {{ old('bulanmulai') == $num ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="bulanselesai">
                                    <i class="bi bi-calendar2-week-fill"></i> Bulan Selesai
                                </label>
                                <select name="bulanselesai" id="bulanselesai" class="form-select">
                                    <option value="">-- Pilih Bulan --</option>
                                    @foreach ($months as $num => $name)
                                        <option value="{{ $num }}" {{ old('bulanselesai') == $num ? 'selected' : '' }}>{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="progress">
                                    <i class="bi bi-bar-chart-fill"></i> Progress (%)
                                </label>
                                <input type="number" name="progress" id="progress"
                                       value="{{ old('progress', 1) }}"
                                       class="form-control" min="1" max="100">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="bulanrekap_id">
                                    <i class="bi bi-calendar3-event"></i> Bulan Rekap
                                </label>
                                <select name="bulanrekap_id" id="bulanrekap_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($bulan as $b)
                                        <option value="{{ $b->id }}" {{ old('bulanrekap_id') == $b->id ? 'selected' : '' }}>
                                            {{ $b->bulanrekap }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="submit" class="button-baru button-md">
                        <i class="bi bi-save" style="margin-right:4px;"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══ MODAL EDIT DATA ═══ --}}
<div class="modal fade modal-edit-data" id="modalEditData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-75 modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-pencil-square"></i>
                    Edit Profil Paket Pekerjaan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="formEditData">
                @csrf
                @method('POST')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_user_id">
                                    <i class="bi bi-person-fill"></i> Satuan Kerja
                                </label>
                                <select name="user_id" id="edit_user_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($user as $u)
                                        <option value="{{ $u->id }}">{{ Str::title(strtolower($u->name)) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_profiljenispekerjaan_id">
                                    <i class="bi bi-briefcase-fill"></i> Profil Jenis Pekerjaan
                                </label>
                                <select name="profiljenispekerjaan_id" id="edit_profiljenispekerjaan_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($jenispekerjaan as $jp)
                                        <option value="{{ $jp->id }}">{{ $jp->jenispekerjaan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_paketstatuspekerjaan_id">
                                    <i class="bi bi-clipboard-check-fill"></i> Status Pekerjaan
                                </label>
                                <select name="paketstatuspekerjaan_id" id="edit_paketstatuspekerjaan_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($statuspekerjaan as $sp)
                                        <option value="{{ $sp->id }}">{{ $sp->paketstatuspekerjaan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_sumberdana_id">
                                    <i class="bi bi-cash-stack"></i> Sumber Dana
                                </label>
                                <select name="sumberdana_id" id="edit_sumberdana_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($sumberdana as $sd)
                                        <option value="{{ $sd->id }}">{{ $sd->sumberdana }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_tahunpilihan_id">
                                    <i class="bi bi-calendar-event-fill"></i> Tahun Anggaran
                                </label>
                                <select name="tahunpilihan_id" id="edit_tahunpilihan_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($tahun as $th)
                                        <option value="{{ $th->id }}">{{ $th->tahunpilihan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_bulanrekap_id">
                                    <i class="bi bi-calendar-month-fill"></i> Bulan Rekap
                                </label>
                                <select name="bulanrekap_id" id="edit_bulanrekap_id" class="form-select">
                                    <option value="">-- Pilih --</option>
                                    @foreach($bulan as $b)
                                        <option value="{{ $b->id }}">{{ $b->bulanrekap }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_namapekerjaan">
                                    <i class="bi bi-building-fill"></i> Nama Pekerjaan
                                </label>
                                <input type="text" name="namapekerjaan" id="edit_namapekerjaan" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_cvptpenyedia">
                                    <i class="bi bi-building-gear"></i> CV/PT Penyedia
                                </label>
                                <input type="text" name="cvptpenyedia" id="edit_cvptpenyedia" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_nib">
                                    <i class="bi bi-upc-scan"></i> NIB
                                </label>
                                <input type="text" name="nib" id="edit_nib" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_nilaikontrak">
                                    <i class="bi bi-currency-dollar"></i> Nilai Kontrak (Rp)
                                </label>
                                <input type="text" name="nilaikontrak" id="edit_nilaikontrak" class="form-control"
                                       oninput="formatRibuan(this)"
                                       onblur="clearFormat(this)">
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_jeniskontrak">
                                    <i class="bi bi-file-earmark-text-fill"></i> Jenis Kontrak
                                </label>
                                <select name="jeniskontrak" id="edit_jeniskontrak" class="form-select">
                                    <option value="">-- Pilih Jenis Kontrak --</option>
                                    <option value="Harga Satuan">Harga Satuan</option>
                                    <option value="Harga Borongan">Harga Borongan</option>
                                    <option value="Kontrak Kerja">Kontrak Kerja</option>
                                    <option value="Lumpsum">Lumpsum</option>
                                    <option value="Turnkey">Turnkey</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_karakteristikkontrak">
                                    <i class="bi bi-file-earmark-diff-fill"></i> Karakteristik Kontrak
                                </label>
                                <select name="karakteristikkontrak" id="edit_karakteristikkontrak" class="form-select">
                                    <option value="">-- Pilih Karakteristik --</option>
                                    <option value="Tahun Tunggal">Tahun Tunggal</option>
                                    <option value="Multi Tahun">Multi Tahun</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_bulanmulai">
                                    <i class="bi bi-calendar2-plus-fill"></i> Bulan Mulai
                                </label>
                                <select name="bulanmulai" id="edit_bulanmulai" class="form-select">
                                    <option value="">-- Pilih Bulan --</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_bulanselesai">
                                    <i class="bi bi-calendar2-check-fill"></i> Bulan Selesai
                                </label>
                                <select name="bulanselesai" id="edit_bulanselesai" class="form-select">
                                    <option value="">-- Pilih Bulan --</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label-modern" for="edit_progress">
                                    <i class="bi bi-bar-chart-fill"></i> Progress (%)
                                </label>
                                <input type="number" name="progress" id="edit_progress" class="form-control" min="1" max="100">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                    </button>
                    <button type="submit" class="button-baru button-md">
                        <i class="bi bi-save" style="margin-right:4px;"></i> Update Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- ═══ MODAL HAPUS ═══ --}}
<div class="modal fade modal-confirm-delete" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-exclamation-triangle" style="margin-right:8px; color:#ef4444;"></i>
                    Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon"><i class="bi bi-trash"></i></div>
                <h5 class="confirm-title">Yakin Ingin Menghapus?</h5>
                <p class="confirm-text">
                    Data <strong id="itemName"></strong> akan dihapus permanen.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg" style="margin-right:4px;"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" style="margin:0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-merah">
                        <i class="bi bi-trash" style="margin-right:4px;"></i> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- ═══ CHART.JS ═══ --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

<script>
// ═══ SEARCH ═══
(function () {
    const input  = document.getElementById('searchInput');
    const form   = document.getElementById('filterForm');
    if (!input || !form) return;
    let timer = null;
    input.addEventListener('input', function () {
        clearTimeout(timer);
        timer = setTimeout(function () { form.submit(); }, 600);
    });
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { clearTimeout(timer); form.submit(); }
    });
})();

// ═══ DELETE ═══
function setDeleteUrl(button) {
    const id    = button.getAttribute('data-id');
    const judul = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = judul;
    document.getElementById('deleteForm').action = "/bepaketpekerjaan/delete/" + encodeURIComponent(id);
}

// ═══ EXPORT EXCEL ═══
function exportTableToExcel(tableID, filename = '') {
    const table = document.getElementById(tableID);
    if (!table) { alert('Tabel tidak ditemukan.'); return; }
    const wb = XLSX.utils.table_to_book(table, { sheet: "Sheet 1" });
    return XLSX.writeFile(wb, filename + '.xlsx');
}

// ═══ FORMAT RIBUAN ═══
function formatRibuan(input) {
    let value = input.value.replace(/\./g, '');
    if (!/^\d*$/.test(value)) value = value.replace(/\D/g, '');
    input.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}
function clearFormat(input) {
    input.value = input.value.replace(/\./g, '');
}

// ═══ LINE CHART — 4 LINE per STATUS × TAHUN ═══
document.addEventListener('DOMContentLoaded', function () {
    const lineCanvas = document.getElementById('lineChart');
    if (!lineCanvas) return;

    const lineLabels   = {!! json_encode($chartLine['labels'] ?? []) !!};
    const lineDatasets = {!! json_encode($chartLine['datasets'] ?? []) !!};

    const datasets = lineDatasets.map(function (ds) {
        return {
            label:                 ds.label,
            data:                  ds.data,
            borderColor:           ds.borderColor,
            backgroundColor:       ds.backgroundColor,
            borderWidth:           3,
            fill:                  false,
            tension:               0.4,
            pointBackgroundColor:  ds.borderColor,
            pointBorderColor:      '#fff',
            pointBorderWidth:      2,
            pointRadius:           5,
            pointHoverRadius:      8,
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: ds.borderColor,
            pointHoverBorderWidth: 3,
        };
    });

    new Chart(lineCanvas, {
        type: 'line',
        data: { labels: lineLabels, datasets: datasets },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: { intersect: false, mode: 'index' },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: { size: 11, family: 'Poppins', weight: '600' },
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 12,
                        boxWidth: 8,
                        boxHeight: 8,
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    titleFont: { size: 12, family: 'Poppins' },
                    bodyFont: { size: 11, family: 'Poppins' },
                    padding: 10,
                    cornerRadius: 8,
                    callbacks: {
                        title: function (context) { return 'Tahun ' + context[0].label; },
                        label: function (context) {
                            return '  ' + context.dataset.label + ': ' + context.raw + ' paket';
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: {
                        font: { size: 11, family: 'Poppins', weight: '600' },
                        color: '#334155',
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                        font: { size: 10, family: 'Poppins' },
                        color: '#64748b',
                        padding: 8,
                    },
                    grid: {
                        color: 'rgba(203, 213, 225, 0.5)',
                        drawBorder: false,
                    },
                    border: { display: false }
                }
            }
        }
    });
});

// ═══ MODAL EDIT — ISI DATA SAAT DIBUKA ═══
document.addEventListener('DOMContentLoaded', function () {
    const modalEdit = document.getElementById('modalEditData');
    if (!modalEdit) return;

    modalEdit.addEventListener('show.bs.modal', function (event) {
        const trigger = event.relatedTarget;
        if (!trigger) return;

        const item = JSON.parse(trigger.getAttribute('data-item') || '{}');

        document.getElementById('formEditData').action =
            "{{ url('/bepaketpekerjaan/update') }}/" + item.id;

        const safe = function (val) {
            if (val === null || val === undefined || val === '') return '';
            return val;
        };

        const setVal = function (id, val) {
            const el = document.getElementById(id);
            if (el) el.value = safe(val);
        };

        const setSelect = function (id, val) {
            const el = document.getElementById(id);
            if (!el) return;
            const stringVal = (val === null || val === undefined || val === '') ? '' : String(val);
            el.value = stringVal;
            if (el.value === '' && stringVal !== '') {
                for (let opt of el.options) {
                    if (opt.value === stringVal || opt.text.trim() === stringVal) {
                        el.value = opt.value;
                        break;
                    }
                }
            }
        };

        setVal('edit_namapekerjaan',       item.namapekerjaan);
        setVal('edit_cvptpenyedia',        item.cvptpenyedia);
        setVal('edit_nib',                 item.nib);
        setVal('edit_progress',            item.progress);

        const nilaikontrak = document.getElementById('edit_nilaikontrak');
        if (nilaikontrak) {
            let val = safe(item.nilaikontrak);
            if (val) {
                val = String(val).replace(/\D/g, '');
                val = val.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }
            nilaikontrak.value = val;
        }

        setSelect('edit_user_id',                 item.user_id);
        setSelect('edit_profiljenispekerjaan_id', item.profiljenispekerjaan_id);
        setSelect('edit_paketstatuspekerjaan_id', item.paketstatuspekerjaan_id);
        setSelect('edit_sumberdana_id',           item.sumberdana_id);
        setSelect('edit_tahunpilihan_id',         item.tahunpilihan_id);
        setSelect('edit_bulanrekap_id',           item.bulanrekap_id);

        setSelect('edit_jeniskontrak',        item.jeniskontrak);
        setSelect('edit_karakteristikkontrak', item.karakteristikkontrak);
        setSelect('edit_bulanmulai',          item.bulanmulai);
        setSelect('edit_bulanselesai',        item.bulanselesai);
    });
});

// ═══ AUTO-BUKA MODAL TAMBAH KALAU ERROR ═══
document.addEventListener('DOMContentLoaded', function () {
    @if ($errors->any())
        var modalTambah = new bootstrap.Modal(document.getElementById('modalTambahData'));
        modalTambah.show();
    @endif
});
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')