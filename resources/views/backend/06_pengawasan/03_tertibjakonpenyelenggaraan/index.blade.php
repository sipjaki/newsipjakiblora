@include('backend.00_administrator.00_baganterpisah.01_header')
<style>
/* ==========================================
   RESET BOOTSTRAP TABLE
   ========================================== */
#tabeltertibjakonpenyelenggaraan,
#tabeltertibjakonpenyelenggaraan > tbody,
#tabeltertibjakonpenyelenggaraan > tbody > tr,
#tabeltertibjakonpenyelenggaraan > tbody > tr > td {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    background-image: none !important;
}
#tabeltertibjakonpenyelenggaraan {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 14px;
    padding: 0 8px;
}
#tabeltertibjakonpenyelenggaraan > thead { display: none; }

#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row > td {
    background: #ffffff !important;
    border-top: 1.5px solid #e2e8f0 !important;
    border-bottom: 1.5px solid #e2e8f0 !important;
    padding: 14px 16px !important;
    vertical-align: top;
    transition: all 0.2s ease;
}
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row > td:first-child {
    border-left: 5px solid #13A847 !important;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
    width: 50px;
    text-align: center;
    font-weight: 800;
    font-size: 15px;
    color: #13A847;
    vertical-align: middle !important;
    background: #f0fdf4 !important;
}
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row > td:last-child {
    border-right: 1.5px solid #e2e8f0 !important;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row:hover > td {
    background: #f0fdf4 !important;
    border-color: #86efac !important;
    box-shadow: 0 4px 16px rgba(19, 168, 71, 0.12);
}
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row:hover > td:first-child {
    background: #bbf7d0 !important;
}
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row.zebra > td { background: #f8fafc !important; }
#tabeltertibjakonpenyelenggaraan > tbody > tr.item-row.zebra > td:first-child { background: #ecfdf5 !important; }

/* ==========================================
   LAYOUT UTAMA
   ========================================== */
.card-layout-main {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 10px;
    margin-bottom: 10px;
}
@media (max-width: 991.98px) {
    .card-layout-main { grid-template-columns: 1fr; gap: 12px; }
}

/* ==========================================
   BOX UMUM
   ========================================== */
.box-info,
.box-kegiatan {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px 14px;
    font-size: 12px;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.box-kegiatan { background: #f8fafc; border-color: #cbd5e1; }

.box-title {
    font-size: 10px;
    font-weight: 800;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin-bottom: 10px;
    padding-bottom: 6px;
    border-bottom: 1px dashed #cbd5e1;
    display: flex;
    align-items: center;
    gap: 5px;
}
.box-title i { color: #13A847; font-size: 11px; }

/* ==========================================
   BOX 1: INFORMASI DATA
   ========================================== */
.info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 14px;
}
.info-item {
    display: flex;
    flex-direction: column;
    gap: 2px;
}
.info-item .info-label {
    font-size: 9px;
    font-weight: 800;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    margin-bottom: 1px;
}
.info-item .info-value {
    font-size: 12px;
    color: #1a2b4a;
    font-weight: 600;
    line-height: 1.35;
    word-break: break-word;
}
.info-item .info-value.uppercase { text-transform: uppercase; }
.info-item .info-value.strong {
    font-weight: 800;
    font-size: 13px;
    color: #0f172a;
    text-transform: uppercase;
}

/* ==========================================
   BOX 2: AKSI KEGIATAN
   ========================================== */
.kegiatan-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    flex: 1;
}
@media (max-width: 575.98px) {
    .kegiatan-grid { grid-template-columns: 1fr; }
}

.kegiatan-group {
    display: flex;
    flex-direction: column;
    gap: 4px;
    background: #ffffff;
    padding: 8px;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}
.kegiatan-group-title {
    display: inline-block;
    font-size: 10px;
    font-weight: 700;
    color: #334155;
    letter-spacing: 0.2px;
    margin-bottom: 4px;
    line-height: 1.35;
    text-transform: none;
}

.kegiatan-buttons {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
}

/* ==========================================
   TOMBOL AKSI
   ========================================== */
.act-btn {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    font-size: 11px;
    font-weight: 700;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    border: 1.5px solid transparent;
    transition: all 0.15s ease;
    white-space: nowrap;
    cursor: pointer;
    line-height: 1.2;
}
.act-btn.btn-solid { background: #13A847; border-color: #13A847; color: #fff; }
.act-btn.btn-solid:hover { background: #0f8f3a; color: #fff; transform: translateY(-1px); }
.act-btn.btn-outline { background: #fff; border-color: #86efac; color: #15803d; }
.act-btn.btn-outline:hover { background: #dcfce7; color: #14532d; transform: translateY(-1px); }
.act-btn.btn-upload { background: #fffbeb; border-color: #fcd34d; color: #92400e; }
.act-btn.btn-upload:hover { background: #fef3c7; color: #78350f; }

/* ==========================================
   BARIS BAWAH: TOMBOL EDIT & HAPUS
   ========================================== */
.card-bottom-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 8px;
    padding-top: 12px;
    border-top: 1px dashed #cbd5e1;
    margin-top: 12px;
}

/* EMPTY STATE */
#tabeltertibjakonpenyelenggaraan > tbody > tr.empty-row > td {
    background: #ffffff !important;
    border: 1.5px dashed #cbd5e1 !important;
    border-radius: 12px;
    padding: 60px 20px !important; text-align: center;
}

/* ==========================================
   SEARCH BAR TENGAH
   ========================================== */
.search-bar-top {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    padding: 14px 18px;
    margin-bottom: 16px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    align-items: flex-end;
}
.search-bar-top .form-group {
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.search-bar-top label {
    font-size: 11px;
    font-weight: 700;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin: 0;
}
.search-bar-top select,
.search-bar-top input {
    padding: 7px 12px;
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    background-color: #fff;
    font-size: 12px;
    color: #1a2b4a;
    transition: all 0.2s ease;
    outline: none;
}
.search-bar-top select {
    appearance: none;
    -webkit-appearance: none;
    padding-right: 28px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 16 16'%3E%3Cpath fill='%2364748b' d='M8 11L2 5h12z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 8px center;
    cursor: pointer;
}
.search-bar-top select:focus,
.search-bar-top input:focus {
    border-color: #13A847;
    box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.12);
}
.search-bar-top .search-input-wrap {
    position: relative;
    flex: 1;
    min-width: 220px;
}
.search-bar-top .search-input-wrap input {
    width: 100%;
    padding-right: 32px;
}
.search-bar-top .search-input-wrap i {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #64748b;
    font-size: 13px;
}

/* ==========================================
   CHART 2 KOLOM
   ========================================== */
.chart-row-wrapper {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 16px;
    margin-bottom: 16px;
}
@media (max-width: 991.98px) {
    .chart-row-wrapper { grid-template-columns: 1fr; }
}

.chart-box-tahunan {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px;
    display: flex;
    flex-direction: column;
}
.chart-box-tahunan .chart-box-title,
.radar-chart-panel-new .chart-box-title {
    font-size: 12px;
    font-weight: 700;
    color: #4a5a72;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 6px;
    flex-shrink: 0;
}
.chart-box-tahunan .chart-box-title i,
.radar-chart-panel-new .chart-box-title i {
    color: #13A847;
    font-size: 14px;
}
.chart-tahunan-container {
    position: relative;
    width: 100%;
    height: 240px;
    flex: 1;
}
.chart-tahunan-legend {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px dashed #cbd5e1;
}
.chart-tahunan-legend-item {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 8px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 700;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
}
.chart-tahunan-legend-item .year { color: #1a2b4a; }
.chart-tahunan-legend-item .total { color: #13A847; font-weight: 800; }
.chart-tahunan-legend-item .percent {
    padding: 2px 6px;
    border-radius: 6px;
    font-size: 10px;
    font-weight: 800;
    display: inline-flex;
    align-items: center;
    gap: 1px;
}
.chart-tahunan-legend-item .percent.up { background: #dcfce7; color: #15803d; }
.chart-tahunan-legend-item .percent.down { background: #fee2e2; color: #b91c1c; }
.chart-tahunan-legend-item .percent.same { background: #f1f5f9; color: #475569; }

.radar-chart-panel-new {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px;
    display: flex;
    flex-direction: column;
}
.radar-chart-canvas-wrap-new {
    position: relative;
    width: 100%;
    height: 200px;
    flex: 1;
    margin-bottom: 10px;
}
.radar-chart-legend-new {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    padding-top: 10px;
    border-top: 1px dashed #cbd5e1;
    margin-bottom: 10px;
    max-height: 80px;
    overflow-y: auto;
}
.radar-legend-item-new {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 3px 8px;
    border-radius: 6px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    font-size: 11px;
    font-weight: 700;
}
.radar-legend-item-new .label { color: #334155; }
.radar-legend-item-new .value { color: #13A847; font-weight: 800; }
.radar-chart-action-new {
    display: flex;
    justify-content: flex-end;
    margin-top: auto;
}

/* ==========================================
   MODAL CREATE & EDIT
   ========================================== */
#createTertibJakonModal .modal-dialog,
#editTertibJakonModal .modal-dialog {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}
@media (max-width: 991.98px) {
    #createTertibJakonModal .modal-dialog,
    #editTertibJakonModal .modal-dialog { max-width: 95%; width: 95%; }
}
#radarChartModal .modal-dialog { max-width: 75%; width: 75%; }
#deleteModal .modal-dialog { max-width: 420px; }

#createTertibJakonModal .modal-content,
#editTertibJakonModal .modal-content {
    border-radius: 20px !important;
    border: none !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    overflow: hidden;
}
#createTertibJakonModal .modal-header,
#editTertibJakonModal .modal-header {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 28px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    border-radius: 20px 20px 0 0 !important;
}
#createTertibJakonModal .modal-header .modal-title,
#editTertibJakonModal .modal-header .modal-title {
    margin: 0 !important;
    font-weight: 700 !important;
    font-size: 16px !important;
    color: #1a2b4a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}
#createTertibJakonModal .modal-header .modal-title i { color: #13A847 !important; font-size: 20px !important; }
#editTertibJakonModal .modal-header .modal-title i { color: #f59e0b !important; font-size: 20px !important; }

#createTertibJakonModal .modal-header .btn-close,
#editTertibJakonModal .modal-header .btn-close { filter: none !important; opacity: 0.6 !important; }
#createTertibJakonModal .modal-header .btn-close:hover,
#editTertibJakonModal .modal-header .btn-close:hover { opacity: 1 !important; }

#createTertibJakonModal .modal-body,
#editTertibJakonModal .modal-body {
    padding: 24px 28px !important;
    max-height: 70vh;
    overflow-y: auto;
    background: #ffffff !important;
}
#createTertibJakonModal .modal-body::-webkit-scrollbar,
#editTertibJakonModal .modal-body::-webkit-scrollbar { width: 8px; }
#createTertibJakonModal .modal-body::-webkit-scrollbar-track,
#editTertibJakonModal .modal-body::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
#createTertibJakonModal .modal-body::-webkit-scrollbar-thumb,
#editTertibJakonModal .modal-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

#createTertibJakonModal .form-label-modern,
#editTertibJakonModal .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
#createTertibJakonModal .form-label-modern i { color: #13A847; font-size: 14px; }
#editTertibJakonModal .form-label-modern i { color: #f59e0b; font-size: 14px; }

#createTertibJakonModal .form-control,
#createTertibJakonModal .form-select,
#editTertibJakonModal .form-control,
#editTertibJakonModal .form-select {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
    color: #1a2b4a;
}
#createTertibJakonModal .form-control:focus,
#createTertibJakonModal .form-select:focus { border-color: #13A847; background: #fff; box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15); outline: none; }
#editTertibJakonModal .form-control:focus,
#editTertibJakonModal .form-select:focus { border-color: #f59e0b; background: #fff; box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.15); outline: none; }

#createTertibJakonModal .form-control.is-invalid,
#createTertibJakonModal .form-select.is-invalid,
#editTertibJakonModal .form-control.is-invalid,
#editTertibJakonModal .form-select.is-invalid { border-color: #ef4444; background: #fef2f2; }

#createTertibJakonModal .invalid-feedback,
#editTertibJakonModal .invalid-feedback { display: block; color: #dc2626; font-size: 11.5px; margin-top: 4px; font-weight: 600; }
#createTertibJakonModal .mb-3,
#editTertibJakonModal .mb-3 { margin-bottom: 14px; }

#createTertibJakonModal .modal-footer,
#editTertibJakonModal .modal-footer {
    background: #f8fafc !important;
    border-top: 1px solid #eaeaea !important;
    border-radius: 0 0 20px 20px !important;
    padding: 16px 28px !important;
    display: flex !important;
    justify-content: flex-end !important;
    gap: 10px !important;
}

/* CONFIRM OVERLAY */
.confirm-create-overlay { display: none; position: fixed; inset: 0; z-index: 9999; background: rgba(15, 23, 42, 0.6); align-items: center; justify-content: center; padding: 20px; }
.confirm-create-box { background: #ffffff; border-radius: 20px; padding: 30px; max-width: 420px; width: 90%; text-align: center; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35); }
.confirm-create-icon { width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
.confirm-create-icon i { font-size: 2.5rem; }
.confirm-create-title { font-weight: 800; color: #1a2b4a; margin-bottom: 10px; font-size: 16px; }
.confirm-create-message { font-size: 0.95rem; color: #4a5a72; margin-bottom: 24px; }
.confirm-create-actions { display: flex; gap: 10px; justify-content: center; }
.confirm-btn { padding: 10px 20px; font-size: 13px; font-weight: 700; border-radius: 10px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 6px; transition: all 0.15s ease; }
.confirm-btn-yes { color: #ffffff; }
.confirm-btn-yes:hover { opacity: 0.9; transform: translateY(-1px); }
.confirm-btn-no { background: #f1f5f9; color: #475569; border: 1.5px solid #cbd5e1; }
.confirm-btn-no:hover { background: #e2e8f0; }

/* ==========================================
   MODAL REKAP K.01 (PENYELENGGARAAN)
   ========================================== */
#modalRekapData .modal-dialog { max-width: 95%; width: 95%; }
#modalRekapData .modal-content {
    border-radius: 20px !important;
    border: none !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    overflow: hidden;
}
#modalRekapData .modal-header {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 28px !important;
}
#modalRekapData .modal-header .modal-title {
    font-weight: 800 !important;
    color: #1a2b4a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}
#modalRekapData .modal-body {
    padding: 24px 28px !important;
    max-height: 75vh;
    overflow-y: auto;
    background: #f8fafc !important;
}
#modalRekapData .modal-footer {
    background: #ffffff !important;
    border-top: 1px solid #eaeaea !important;
    padding: 16px 28px !important;
}
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <main class="app-main">
<section style="background: var(--bg-soft); width: 100%; min-height: 100vh; padding-bottom: 30px;">

     <div class="app-content-header">
       <div class="container-fluid">
         <div class="row">
            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')
         </div>
       </div>
     </div>

     <div class="container-fluid">
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <div class="col-md-12">
                 <div class="card mb-4">
                     <div class="card-header pb-0">

                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                        {{-- ═══ CHART ROW (DI ATAS) ═══ --}}
                        <div class="chart-row-wrapper">
                            <div class="chart-box-tahunan">
                                <div class="chart-box-title">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    Tren Data per Tahun Pelaksanaan
                                </div>
                                <div class="chart-tahunan-container">
                                    <canvas id="barChartTahunan"></canvas>
                                </div>
                                <div id="chartTahunanLegend" class="chart-tahunan-legend"></div>
                            </div>

                            <div class="radar-chart-panel-new">
                                <div class="chart-box-title">
                                    <i class="bi bi-bar-chart-line-fill"></i>
                                    Distribusi Sektor Penyedia
                                </div>
                                <div class="radar-chart-canvas-wrap-new">
                                    <canvas id="radarChartMini"></canvas>
                                </div>
                                <div class="radar-chart-legend-new" id="radarLegend"></div>
                                <div class="radar-chart-action-new">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#radarChartModal" class="button-modern button-md">
                                        <i class="bi bi-arrows-fullscreen"></i> Perbesar Chart
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- ═══ SEARCH BAR (DI TENGAH, BAWAH CHART) ═══ --}}
                        <form method="GET" action="/betertibjakonpenyelenggaraan" id="filterForm">
                        <div class="search-bar-top">

                            <div class="form-group" style="min-width:120px;">
                                <label for="entries">Tampilkan</label>
                                <select id="entries" name="perPage" onchange="document.getElementById('filterForm').submit()">
                                    @foreach([10,25,50,75,100,150,200,500,1000,2000] as $n)
                                        <option value="{{ $n }}" {{ ($perPage ?? 10) == $n ? 'selected' : '' }}>{{ $n }} data</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" style="min-width:180px;">
                                <label for="sektorSelect">Sektor</label>
                                <select id="sektorSelect" name="sektor" style="min-width:180px;">
                                    <option value="">Semua Sektor</option>
                                    @if(isset($datapenyedia))
                                        @foreach ($datapenyedia as $p)
                                            <option value="{{ $p->id }}" {{ ($sektor ?? '') == $p->id ? 'selected' : '' }}>
                                                {{ $p->penyedia }}
                                                @if(isset($statistik[$p->id]))
                                                    ({{ $statistik[$p->id]['total'] }})
                                                @endif
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group" style="min-width:140px;">
                                <label for="tahunSelect">Tahun</label>
                                <select id="tahunSelect" name="tahun">
                                    <option value="">Semua Tahun</option>
                                    @foreach ($listTahun as $th)
                                        <option value="{{ $th }}" {{ ($tahun ?? '') == $th ? 'selected' : '' }}>{{ $th }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group search-input-wrap" style="flex:1;">
                                <label for="searchInput">Cari</label>
                                <div style="position:relative;">
                                    <input type="search" id="searchInput" name="search" value="{{ $search ?? '' }}"
                                           placeholder="Cari Badan Usaha, NIB, nama pekerjaan..."
                                           autocomplete="off">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>

                            <div class="form-group" style="justify-content:flex-end;">
                                <label>&nbsp;</label>
                                <div style="display:flex; gap:6px; flex-wrap:wrap;">
                                    <button type="submit" class="button-baru button-md">
                                        <i class="bi bi-search"></i> Cari
                                    </button>

                                    <button type="button" class="button-berkas button-md" data-bs-toggle="modal" data-bs-target="#modalRekapData">
                                        <i class="bi bi-file-earmark-bar-graph"></i> Rekap K.01
                                    </button>

                                    <button type="button" class="button-berkas button-md" onclick="exportSelectedColumnsToExcel('tabeltertibjakonpenyelenggaraan', 'Data_TertibJakonPenyelenggaraan')">
                                        <i class="bi bi-download"></i> Download Excel
                                    </button>
                                    
                                    <button type="button" class="button-baru button-md" data-bs-toggle="modal" data-bs-target="#createTertibJakonModal">
                                        <i class="fa fa-plus"></i> Pengawasan Baru
                                    </button>
                                </div>
                            </div>

                        </div>
                        </form>

                     </div>

                     {{-- ═══ TABLE (DI BAWAH SEARCH BAR) ═══ --}}
                     <div class="card-body p-0">
                        <div style="width: 100%; overflow-x: auto; padding: 0 8px;">
                            <table id="tabeltertibjakonpenyelenggaraan">
                                <thead>
                                    <tr>
                                        <th>No</th><th>Penyedia</th><th>Nama Pekerjaan</th>
                                        <th>No Kontrak</th><th>Pengawasan Pemilihan</th><th>Pengawasan Kontrak</th>
                                        <th>Pengawasan K3</th><th>Pengawasan Mutu</th><th>Pengawasan Material</th>
                                        <th>Pengawasan Sumber Material</th><th>Aksi</th>
                                    </tr>
                                </thead>

                              <tbody id="tabeltertibjakonpenyelenggaraansearc">
                                @forelse ($data as $item)
                                <tr class="item-row {{ $loop->index % 2 == 0 ? '' : 'zebra' }}">

                                    {{-- Hidden export data --}}
                                    <td style="display:none;">
                                        <span class="export-data"
                                              data-sektor="{{ $item->penyediastatustertibjakon->penyedia ?? '-' }}"
                                              data-pekerjaan="{{ $item->namapekerjaan ?? '-' }}"
                                              data-kontrak="{{ $item->nomorkontrak ?? '-' }}"
                                              data-pemilihan="{{ !empty($item->surattertibjakonpenyelenggaraan1) ? 'Berkas Ada' : 'Belum Upload' }}"
                                              data-kontrak_kerja="{{ !empty($item->surattertibjakonpenyelenggaraan2) ? 'Berkas Ada' : 'Belum Upload' }}"
                                              data-k3="{{ !empty($item->surattertibjakonpenyelenggaraan3) ? 'Berkas Ada' : 'Belum Upload' }}"
                                              data-mutu="{{ !empty($item->surattertibjakonpenyelenggaraan4) ? 'Berkas Ada' : 'Belum Upload' }}"
                                              data-material="{{ !empty($item->surattertibjakonpenyelenggaraan5) ? 'Berkas Ada' : 'Belum Upload' }}"
                                              data-sumber="{{ !empty($item->surattertibjakonpenyelenggaraan6) ? 'Berkas Ada' : 'Belum Upload' }}"></span>
                                    </td>

                                    <td>{{ $data->firstItem() + $loop->index }}</td>

                                    <td colspan="10">
                                        {{-- LAYOUT 2 KOLOM UTAMA --}}
                                        <div class="card-layout-main">

                                            {{-- ═══ BOX 1: INFORMASI DATA (GRID 2 KOLOM) ═══ --}}
                                            <div class="box-info">
                                                <div class="box-title">
                                                    <i class="bi bi-info-circle-fill"></i>
                                                    Informasi Data
                                                </div>

                                                <div class="info-grid">
                                                    <div class="info-item">
                                                        <span class="info-label">Penyedia / Sektor</span>
                                                        <span class="info-value uppercase">{{ $item->penyediastatustertibjakon->penyedia ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                    
                                                    <div class="info-item">
                                                        <span class="info-label">Nama Pekerjaan</span>
                                                        <span class="info-value strong">{{ $item->namapekerjaan ?? 'Belum Di Update' }}</span>
                                                    </div>

                                                    <div class="info-item">
                                                        <span class="info-label">Nomor Kontrak</span>
                                                        <span class="info-value">{{ $item->nomorkontrak ?? 'Belum Di Update' }}</span>
                                                    </div>

                                                    <div class="info-item">
                                                        <span class="info-label">Kegiatan Konstruksi</span>
                                                        <span class="info-value">{{ $item->kegiatankonstruksi ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- ═══ BOX 2: AKSI KEGIATAN (6 TAHAPAN) ═══ --}}
                                            <div class="box-kegiatan">
                                                <div class="box-title">
                                                    <i class="bi bi-clipboard-check-fill"></i>
                                                    Aksi Kegiatan Pengawasan
                                                </div>

                                                <div class="kegiatan-grid">
                                                    {{-- 1. Pemilihan Penyedia --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Pemilihan Penyedia Jasa</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="/betertibjakonpenyelenggaraan1/{{$item->id}}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan1/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan1) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan1) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan1) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- 2. Pelaksanaan Kontrak --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Penyusunan Pelaksanaan Kontrak Kerja</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpenyelenggaraan2/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan2/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan2) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan2) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan2) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- 3. K3 Konstruksi --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Terhadap Standar K3 Konstruksi</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpenyelenggaraan3/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan3/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan3) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan3) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan3) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- 4. Manajemen Mutu --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Terhadap Manajemen Mutu Konstruksi</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpenyelenggaraan4/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan4/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan4) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan4) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan4) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- 5. Material & Peralatan --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Terhadap Penggunaan Material & Peralatan</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpenyelenggaraan5/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan5/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan5) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan5) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan5) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- 6. Sumber Material --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Pengawasan Terhadap Pengelolaan Sumber Material</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpenyelenggaraan6/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                            <a href="/beuploadberkaspenyelenggaraan6/{{$item->id}}" class="act-btn {{ !empty($item->surattertibjakonpenyelenggaraan6) ? 'btn-outline' : 'btn-upload' }}">
                                                                <i class="bi {{ !empty($item->surattertibjakonpenyelenggaraan6) ? 'bi-check-circle-fill' : 'bi-cloud-upload' }}"></i>
                                                                {{ !empty($item->surattertibjakonpenyelenggaraan6) ? 'Berkas Ada' : 'Upload' }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- ═══ BARIS BAWAH: EDIT & HAPUS ═══ --}}
                                        <div class="card-bottom-actions">
                                            <button type="button" class="button-berkas edit-trigger"
                                                    data-item="{{ json_encode($item) }}">
                                                <i class="bi bi-pencil-square"></i> Edit Data
                                            </button>
                                            <a href="javascript:void(0)" class="button-merah delete-trigger"
                                               data-judul="{{ $item->id }}"
                                               data-nama="{{ $item->namapekerjaan ?? 'Data' }}">
                                                <i class="bi bi-trash"></i> Hapus Data
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr class="empty-row">
                                        <td colspan="12">
                                            <div style="text-align:center; padding:40px 20px;">
                                                <i class="bi bi-inbox" style="font-size:3rem; color:#cbd5e1;"></i>
                                                <h6 style="color:#64748b; margin-top:12px; font-weight:700;">Data Tidak Di Temukan !</h6>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                              </tbody>
                            </table>
                          </div>

                     {{-- PAGINATION (CUKUP 1 SAJA) --}}
                     <div id="paginationWrapper">
                        @include('backend.00_administrator.00_baganterpisah.07_paginations')
                     </div>

                     <br><br>

                    <!-- MODAL HAPUS -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
                                <div class="modal-header" style="background: #fef2f2; border-bottom: 1px solid #fecaca; border-radius: 20px 20px 0 0; padding: 20px 25px;">
                                    <h5 class="modal-title" id="deleteModalLabel" style="font-weight: 700; color: #991b1b;">
                                        <i class="bi bi-exclamation-triangle-fill" style="margin-right:8px;"></i> Konfirmasi Hapus !
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body" style="padding: 30px; text-align: center;">
                                    <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                                        <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                                    </div>
                                    <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                                    <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data <strong id="itemName">-</strong> akan dihapus dan tidak dapat dikembalikan.</p>
                                </div>
                                <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px; justify-content: center; gap: 12px;">
                                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Batal</button>
                                    <form id="deleteForm" method="POST" action="" class="m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="button-merah button-md"><i class="bi bi-trash"></i> Hapus Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                 </div>
             </div>
         </div>
     </div>
        </section>
    </main>
 </div>
 </div>

{{-- MODAL Radar Chart --}}
<div class="modal fade" id="radarChartModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-bar-chart-line-fill"></i>
                    Distribusi Sektor Penyedia
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" style="padding: 20px;">
                <div style="width: 100%; height: 400px; position: relative;">
                    <canvas id="radarChartFull"></canvas>
                </div>
                <div style="margin-top: 15px; text-align: center; font-size: 13px; color: #64748b;">
                    Total: <strong id="grandTotalModal">{{ $grandTotal ?? 0 }}</strong> penyedia
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x"></i> Tutup
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- MODAL REKAP DATA (FORMAT K.01) --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<div class="modal fade" id="modalRekapData" tabindex="-1" aria-labelledby="modalRekapDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 95%; width: 95%;">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalRekapDataLabel">
                    <i class="bi bi-file-earmark-bar-graph" style="color: #3b82f6; font-size: 20px;"></i>
                    Rekapitulasi Pengawasan Tertib Penyelenggaraan Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                {{-- FILTER TAMPILAN DATA & TAHUN --}}
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px; margin-bottom: 20px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">

                    {{-- Filter Tampilkan --}}
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterEntriesRekap" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-list-ol"></i> Tampilkan:
                        </label>
                        <select id="filterEntriesRekap" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="all">Semua Data</option>
                            <option value="10" selected>10 Data</option>
                            <option value="25">25 Data</option>
                            <option value="50">50 Data</option>
                            <option value="100">100 Data</option>
                        </select>
                    </div>

                    {{-- Filter Tahun --}}
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterTahunRekap" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan:
                        </label>
                        <select id="filterTahunRekap" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="">Semua Tahun</option>
                            @if(isset($listTahun))
                                @foreach ($listTahun as $th)
                                    <option value="{{ $th }}">{{ $th }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                </div>

                {{-- KERTAS DOKUMEN REKAP FORMAT K.01 --}}
                <div id="printAreaRekap" style="background: #ffffff; padding: 30px; border: 1px solid #cbd5e1; border-radius: 8px; overflow-x: auto;">

                    <div style="text-align: center; margin-bottom: 20px;">
                        <h4 style="font-weight: 900; margin: 0; color: #b45309;">FORMAT K.01</h4>
                        <h5 style="font-weight: 800; margin: 5px 0 0 0; color: #0f172a;">REKAPITULASI PENGAWASAN TERTIB PENYELENGGARAAN JASA KONSTRUKSI TAHUNAN</h5>
                    </div>

                    <table style="width: 100%; border-collapse: collapse; font-size: 11px; border: 1px solid #000;" id="tabelRekapData">
                        <thead>
                            <tr>
                                <th rowspan="3" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center; vertical-align: middle;">No</th>
                                <th rowspan="3" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center; vertical-align: middle;">Nama Pekerjaan</th>
                                <th rowspan="3" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center; vertical-align: middle;">Nomor Kontrak</th>
                                <th rowspan="3" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center; vertical-align: middle;">Penyedia Jasa</th>

                                <th colspan="6" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Aspek Pengawasan Penyelenggaraan</th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemilihan Penyedia</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kontrak Kerja</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Standar K3</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Manajemen Mutu</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Material & Peralatan</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Sumber Material</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyRekapData">
                            <tr>
                                <td colspan="10" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">
                                    Sedang memuat data...
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="margin-top: 40px; display: flex; justify-content: flex-end;">
                        <div style="width: 250px; text-align: center;">
                            <p style="margin-bottom: 80px; color: #334155;">Blora, .............................. <?= date('Y') ?><br>Kepala Bidang Bangunan Gedung</p>
                            <p style="font-weight: 800; text-decoration: underline; color: #0f172a;">Anex Fachrian, S.T., M.T.</p>
                            <p style="color: #334155; font-size: 12px;">NIP. 19810728 201001 1 014</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x"></i> Tutup
                </button>
                <button type="button" class="button-berkas button-md" onclick="downloadRekapExcel()">
                    <i class="bi bi-file-earmark-excel"></i> Download Excel
                </button>
                <button type="button" class="button-baru button-md" onclick="cetakRekapData()">
                    <i class="bi bi-printer"></i> Cetak / Print
                </button>
            </div>

        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL CREATE PENYELENGGARAAN --}}
{{-- ============================================================ --}}
<div class="modal fade" id="createTertibJakonModal" tabindex="-1" aria-labelledby="createTertibJakonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 75%; width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTertibJakonModalLabel">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data Baru Pengawasan Penyelenggaraan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('betertibjakonpenyelenggaraancreatenewupdate') }}" method="POST" enctype="multipart/form-data" id="formCreateTertibJakon">
                @csrf

                <div class="modal-body">
                    @if ($errors->any())
                        <div class="modal-alert-error" style="background: #fef2f2; border: 1.5px solid #fecaca; border-radius: 10px; padding: 14px 16px; margin-bottom: 16px; color: #991b1b; font-size: 13px; font-weight: 600;">
                            <strong style="display: block; margin-bottom: 4px;">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                Terdapat {{ $errors->count() }} kesalahan:
                            </strong>
                            <ul style="margin: 6px 0 0 0; padding-left: 18px; font-weight: 500;">
                                @foreach ($errors->all() as $error)
                                    <li style="font-size: 12px; line-height: 1.5;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="penyediastatustertibjakon_id" class="form-label-modern">
                                    <i class="bi bi-diagram-3-fill"></i>
                                    Status Penyedia <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="penyediastatustertibjakon_id" name="penyediastatustertibjakon_id" class="form-select @error('penyediastatustertibjakon_id') is-invalid @enderror">
                                    <option value="">-- Pilih Status Penyedia --</option>
                                    @foreach ($datapenyedia as $penyedia)
                                        <option value="{{ $penyedia->id }}" {{ old('penyediastatustertibjakon_id') == $penyedia->id ? 'selected' : '' }}>
                                            {{ $penyedia->penyedia }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('penyediastatustertibjakon_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kegiatankonstruksi" class="form-label-modern">
                                    <i class="bi bi-tools"></i> Kegiatan Konstruksi
                                </label>
                                <input type="text" id="kegiatankonstruksi" name="kegiatankonstruksi" class="form-control @error('kegiatankonstruksi') is-invalid @enderror" value="{{ old('kegiatankonstruksi') }}" placeholder="Masukkan kegiatan konstruksi">
                                @error('kegiatankonstruksi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namapekerjaan" class="form-label-modern">
                                    <i class="bi bi-briefcase-fill"></i> Nama Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="namapekerjaan" name="namapekerjaan" class="form-control @error('namapekerjaan') is-invalid @enderror" value="{{ old('namapekerjaan') }}" placeholder="Masukkan nama pekerjaan">
                                @error('namapekerjaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nomorkontrak" class="form-label-modern">
                                    <i class="bi bi-file-earmark-text-fill"></i> Nomor Kontrak <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="nomorkontrak" name="nomorkontrak" class="form-control @error('nomorkontrak') is-invalid @enderror" value="{{ old('nomorkontrak') }}" placeholder="Masukkan nomor kontrak">
                                @error('nomorkontrak')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="bujk" class="form-label-modern">
                                    <i class="bi bi-building"></i> BUJK
                                </label>
                                <input type="text" id="bujk" name="bujk" class="form-control @error('bujk') is-invalid @enderror" value="{{ old('bujk') }}" placeholder="Masukkan nama BUJK">
                                @error('bujk')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="openConfirmCreateModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL KONFIRMASI SIMPAN --}}
<div id="confirmCreateModal" class="confirm-create-overlay">
    <div class="confirm-create-box">
        <div class="confirm-create-icon" style="background: #dcfce7;">
            <i class="bi bi-question-circle-fill" style="color: #13A847;"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Simpan</h5>
        <p class="confirm-create-message">Apakah Anda ingin menambahkan data baru ini?</p>
        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmCreateModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" style="background: #13A847;" onclick="submitCreateForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Simpan
            </button>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL EDIT --}}
{{-- ============================================================ --}}
<div class="modal fade" id="editTertibJakonModal" tabindex="-1" aria-labelledby="editTertibJakonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 75%; width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTertibJakonModalLabel">
                    <i class="bi bi-pencil-square"></i>
                    Perbaikan Data Pengawasan Penyelenggaraan Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" id="formEditTertibJakon">
                @csrf
                @method('POST')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_penyediastatustertibjakon_id" class="form-label-modern">
                                    <i class="bi bi-diagram-3-fill"></i> Status Penyedia <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="edit_penyediastatustertibjakon_id" name="penyediastatustertibjakon_id" class="form-select" required>
                                    <option value="">-- Pilih Status Penyedia --</option>
                                    @foreach($datapenyedia as $penyedia)
                                        <option value="{{ $penyedia->id }}">{{ $penyedia->penyedia }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="edit_namapekerjaan" class="form-label-modern">
                                    <i class="bi bi-briefcase-fill"></i> Nama Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="edit_namapekerjaan" name="namapekerjaan" class="form-control" placeholder="Masukkan nama pekerjaan" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="edit_kegiatankonstruksi" class="form-label-modern">
                                    <i class="bi bi-tools"></i> Kegiatan Konstruksi
                                </label>
                                <input type="text" id="edit_kegiatankonstruksi" name="kegiatankonstruksi" class="form-control" placeholder="Masukkan kegiatan konstruksi">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_nomorkontrak" class="form-label-modern">
                                    <i class="bi bi-file-earmark-text-fill"></i> Nomor Kontrak <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="edit_nomorkontrak" name="nomorkontrak" class="form-control" placeholder="Masukkan nomor kontrak" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit_bujk" class="form-label-modern">
                                    <i class="bi bi-building"></i> BUJK
                                </label>
                                <input type="text" id="edit_bujk" name="bujk" class="form-control" placeholder="Masukkan nama BUJK">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="openConfirmEditModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL KONFIRMASI EDIT --}}
<div id="confirmEditModal" class="confirm-create-overlay">
    <div class="confirm-create-box" style="border: 1px solid #f59e0b;">
        <div class="confirm-create-icon" style="background: #fef3c7;">
            <i class="bi bi-question-circle-fill" style="color: #f59e0b;"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Perubahan</h5>
        <p class="confirm-create-message">Apakah Anda yakin ingin memperbarui data ini?</p>
        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmEditModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" style="background: #f59e0b;" onclick="submitEditForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Update
            </button>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- SCRIPT REKAP DATA --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<script id="data-rekap-json" type="application/json">
    {!! json_encode($allDataRekap ?? $data->items()) !!}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalRekap = document.getElementById('modalRekapData');
    const filterTahun = document.getElementById('filterTahunRekap');
    const filterEntries = document.getElementById('filterEntriesRekap');
    const tbodyRekap = document.getElementById('tbodyRekapData');

    let allDataRekap = [];
    try {
        const jsonText = document.getElementById('data-rekap-json').textContent;
        allDataRekap = JSON.parse(jsonText);
    } catch (e) {
        console.error("Gagal parse data rekap:", e);
    }

    function renderRekap() {
        if (!allDataRekap || allDataRekap.length === 0) {
            tbodyRekap.innerHTML = `<tr><td colspan="10" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">Tidak ada data.</td></tr>`;
            return;
        }

        const tahun = filterTahun.value;
        const limit = filterEntries.value;

        let filtered = allDataRekap;

        // Filter tahun (pakai created_at karena tidak ada kolom tahun)
        if (tahun) {
            filtered = filtered.filter(item => {
                if (!item.created_at) return false;
                return new Date(item.created_at).getFullYear() == tahun;
            });
        }

        if (filtered.length === 0) {
            tbodyRekap.innerHTML = `<tr><td colspan="10" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">Tidak ada data untuk filter ini.</td></tr>`;
            return;
        }

        if (limit !== 'all') {
            filtered = filtered.slice(0, parseInt(limit));
        }

        let html = '';
        filtered.forEach((item, index) => {
            // Mengambil status dari kolom langsung di database (jika ada isinya)
            const getStatus = (val) => {
                if (!val) return '-';
                const norm = String(val).toLowerCase().trim();
                const isOk = ['sesuai', 'sudah', 'tertib', 'meningkat', 'ada'].includes(norm);
                return isOk ? '<span style="color: #15803d; font-weight: bold;">(Tertib)</span>' : '<span style="color: #b91c1c; font-weight: bold;">(Belum Tertib)</span>';
            };

            const pemilihan = getStatus(item.prosespemilihan);
            const kontrak = getStatus(item.pengawasan_standarkontrak);
            const k3 = getStatus(item.pengawasan_tenagakerja) || getStatus(item.pengawasan_kecelakaankerja);
            const mutu = getStatus(item.pengawasan_smkk);
            const material = getStatus(item.pengawasan_penunjang);
            const sumber = getStatus(item.pengawasan_dokumenk4);

            html += `
                <tr>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${index + 1}</td>
                    <td style="border: 1px solid #000; padding: 8px;">${item.namapekerjaan || '-'}</td>
                    <td style="border: 1px solid #000; padding: 8px;">${item.nomorkontrak || '-'}</td>
                    <td style="border: 1px solid #000; padding: 8px;">${item.penyediastatustertibjakon ? item.penyediastatustertibjakon.penyedia : '-'}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${pemilihan}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${kontrak}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${k3}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${mutu}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${material}</td>
                    <td style="border: 1px solid #000; padding: 8px; text-align: center;">${sumber}</td>
                </tr>
            `;
        });
        tbodyRekap.innerHTML = html;
    }

    if (modalRekap) {
        modalRekap.addEventListener('show.bs.modal', renderRekap);
    }
    if (filterTahun) filterTahun.addEventListener('change', renderRekap);
    if (filterEntries) filterEntries.addEventListener('change', renderRekap);
});

function cetakRekapData() {
    const printContent = document.getElementById('printAreaRekap').innerHTML;
    const printWindow = window.open('', '', 'height=800,width=1200');
    printWindow.document.write('<html><head><title>Cetak Rekap K.01</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('@page { size: A4 landscape; margin: 10mm; }');
    printWindow.document.write('body { font-family: Arial, sans-serif; }');
    printWindow.document.write('table { width: 100%; border-collapse: collapse; font-size: 11px; }');
    printWindow.document.write('th, td { border: 1px solid #000; padding: 6px; }');
    printWindow.document.write('th { background-color: #f8fafc; text-align: center; vertical-align: middle; }');
    printWindow.document.write('h5, h4 { text-align: center; font-weight: bold; margin-bottom: 10px; }');
    printWindow.document.write('</style></head><body>');
    printWindow.document.write(printContent);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
    setTimeout(() => { printWindow.print(); printWindow.close(); }, 500);
}

function downloadRekapExcel() {
    const table = document.getElementById('tabelRekapData');
    const wb = XLSX.utils.table_to_book(table, {sheet: "Rekap K.01"});
    XLSX.writeFile(wb, 'Rekap_Pengawasan_Tertib_Penyelenggaraan_Jasa_Konstruksi.xlsx');
}
</script>

{{-- EXPORT EXCEL UTAMA --}}
<script>
function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
    const originalTable = document.getElementById(originalTableId);
    const rows = originalTable.querySelectorAll('tr.item-row');
    const header = ['No','Sektor','Nama Pekerjaan','No Kontrak','Pemilihan Penyedia','Kontrak Kerja','Standar K3','Manajemen Mutu','Material & Peralatan','Sumber Material'];
    const aoa = [header];
    rows.forEach((row, i) => {
        const span = row.querySelector('.export-data');
        if (!span) return;
        const d = span.dataset;
        aoa.push([i + 1, d.sektor||'-', d.pekerjaan||'-', d.kontrak||'-', d.pemilihan||'-', d.kontrak_kerja||'-', d.k3||'-', d.mutu||'-', d.material||'-', d.sumber||'-']);
    });
    const ws = XLSX.utils.aoa_to_sheet(aoa);
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Data");
    XLSX.writeFile(wb, filename + ".xlsx");
}
</script>

{{-- COMBO CHART: BAR + LINE TAHUNAN --}}
<script>
(function () {
    'use strict';
    let barChartTahunan = null;

    function destroyBarChart() {
        if (barChartTahunan) { barChartTahunan.destroy(); barChartTahunan = null; }
    }

    function renderLegendTahunan(labels, values, percents) {
        const wrap = document.getElementById('chartTahunanLegend');
        if (!wrap) return;
        if (!labels || labels.length === 0) {
            wrap.innerHTML = '<div style="color:#94a3b8;font-size:12px;font-weight:600;">Belum ada data tahunan</div>';
            return;
        }
        let html = '';
        labels.forEach(function (label, i) {
            const pct = parseFloat(percents[i] || 0);
            let cls = 'same', text = '0%', icon = 'bi-dash';
            if (pct > 0) { cls = 'up'; text = '+' + pct + '%'; icon = 'bi-arrow-up-short'; }
            else if (pct < 0) { cls = 'down'; text = pct + '%'; icon = 'bi-arrow-down-short'; }
            html += '<div class="chart-tahunan-legend-item">'
                 + '<span class="year">' + label + '</span>'
                 + '<span class="total">' + values[i] + '</span>'
                 + '<span class="percent ' + cls + '"><i class="bi ' + icon + '"></i> ' + text + '</span>'
                 + '</div>';
        });
        wrap.innerHTML = html;
    }

    function buildComboData(labels, values, percents) {
        const colors = values.map(function (v, i) {
            const pct = parseFloat(percents[i] || 0);
            if (pct < 0) return 'rgba(239, 68, 68, 0.75)';
            if (pct > 0) return 'rgba(19, 168, 71, 0.75)';
            return 'rgba(100, 116, 139, 0.6)';
        });
        return {
            labels: labels,
            datasets: [
                {
                    type: 'bar', label: 'Jumlah Data', data: values,
                    backgroundColor: colors,
                    borderColor: colors.map(c => c.replace('0.75', '1').replace('0.6', '1')),
                    borderWidth: 1.5, borderRadius: 8, borderSkipped: false,
                    barThickness: 'flex', maxBarThickness: 60, order: 2,
                },
                {
                    type: 'line', label: 'Tren', data: values,
                    borderColor: '#0f8f3a', backgroundColor: 'rgba(19, 168, 71, 0.1)',
                    borderWidth: 3, fill: false, tension: 0.35,
                    pointBackgroundColor: '#13A847', pointBorderColor: '#fff',
                    pointBorderWidth: 2, pointRadius: 6, pointHoverRadius: 9,
                    pointHoverBackgroundColor: '#fff', pointHoverBorderColor: '#13A847',
                    pointHoverBorderWidth: 3, order: 1,
                }
            ]
        };
    }

    function renderBarChart(labels, values, percents) {
        if (typeof Chart === 'undefined') return;
        destroyBarChart();
        const ctx = document.getElementById('barChartTahunan');
        if (!ctx) return;
        const data = buildComboData(labels, values, percents);

        barChartTahunan = new Chart(ctx, {
            type: 'bar', data: data,
            options: {
                responsive: true, maintainAspectRatio: false,
                animation: { duration: 700, easing: 'easeOutQuart' },
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: 'rgba(15, 23, 42, 0.92)',
                        titleFont: { size: 12, family: 'Poppins', weight: '700' },
                        bodyFont: { size: 11, family: 'Poppins' },
                        padding: 12, cornerRadius: 8,
                        callbacks: {
                            title: function (items) { return 'Tahun ' + items[0].label; },
                            label: function (c) {
                                if (c.datasetIndex !== 0) return null;
                                const pct = parseFloat(percents[c.dataIndex] || 0);
                                let pctText = '';
                                if (pct > 0) pctText = ' (+' + pct + '%)';
                                else if (pct < 0) pctText = ' (' + pct + '%)';
                                else pctText = ' (0%)';
                                return '  Total: ' + c.parsed.y + ' data' + pctText;
                            }
                        }
                    }
                },
                scales: {
                    x: { grid: { display: false }, ticks: { font: { size: 11, family: 'Poppins', weight: '700' }, color: '#334155' } },
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 1, font: { size: 10, family: 'Poppins' }, color: '#64748b', padding: 8 },
                        grid: { color: 'rgba(203, 213, 225, 0.5)', drawBorder: false },
                        border: { display: false }
                    }
                }
            }
        });
        renderLegendTahunan(labels, values, percents);
    }

    window.renderBarChartTahunan = renderBarChart;
    window.destroyBarChartTahunan = destroyBarChart;

    document.addEventListener('DOMContentLoaded', function () {
        renderBarChart(
            @json($tahunanLabels ?? []),
            @json($tahunanValues ?? []),
            @json($tahunanPercents ?? [])
        );
    });
})();
</script>

{{-- LIVE SEARCH + FILTER + PAGINATION --}}
<script>
(function () {
    'use strict';

    const searchInput  = document.getElementById('searchInput');
    const tahunSelect  = document.getElementById('tahunSelect');
    const sektorSelect = document.getElementById('sektorSelect');
    const perPageSel   = document.getElementById('entries');
    const tbody        = document.getElementById('tabeltertibjakonpenyelenggaraansearc');
    const paginationW  = document.getElementById('paginationWrapper');

    if (!tbody) return;
    let debounceTimer = null;

    function buildFilterUrl() {
        const url = new URL(window.location.origin + '/betertibjakonpenyelenggaraan');
        const search  = searchInput  ? searchInput.value.trim() : '';
        const tahun   = tahunSelect  ? tahunSelect.value        : '';
        const sektor  = sektorSelect ? sektorSelect.value       : '';
        const perPage = perPageSel   ? perPageSel.value         : 10;

        if (search)   url.searchParams.set('search', search);
        if (tahun)    url.searchParams.set('tahun', tahun);
        if (sektor)   url.searchParams.set('sektor', sektor);
        if (perPage)  url.searchParams.set('perPage', perPage);
        url.searchParams.delete('page');
        return url.toString();
    }

    function fetchData(url) {
        const fetchUrl = url || buildFilterUrl();
        tbody.style.opacity = '0.5';
        tbody.style.transition = 'opacity 0.15s ease';

        fetch(fetchUrl, {
            headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
        })
        .then(res => { if (!res.ok) throw new Error('HTTP ' + res.status); return res.json(); })
        .then(data => {
            if (data.rows !== undefined) tbody.innerHTML = data.rows;
            if (data.pagination && paginationW) paginationW.innerHTML = data.pagination;

            if (data.statistik && sektorSelect) {
                Array.from(sektorSelect.options).forEach(function (opt) {
                    if (opt.value && data.statistik[opt.value]) {
                        opt.textContent = data.statistik[opt.value].penyedia + ' (' + data.statistik[opt.value].total + ')';
                    }
                });
            }

            if (window.renderRadarCharts && data.chartLabels) {
                window.renderRadarCharts(data.chartLabels, data.chartValues);
            }

            if (data.grandTotal !== undefined) {
                const gtm = document.getElementById('grandTotalModal');
                if (gtm) gtm.textContent = data.grandTotal;
            }

            if (window.renderBarChartTahunan && data.tahunanLabels) {
                window.renderBarChartTahunan(data.tahunanLabels, data.tahunanValues, data.tahunanPercents);
            }

            tbody.style.opacity = '1';
            window.history.replaceState({}, '', fetchUrl);
        })
        .catch(err => {
            console.error('Fetch error:', err);
            tbody.style.opacity = '1';
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function () { fetchData(null); }, 400);
        });
        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') { e.preventDefault(); clearTimeout(debounceTimer); fetchData(null); }
        });
    }

    if (tahunSelect)  tahunSelect.addEventListener('change',  function () { clearTimeout(debounceTimer); fetchData(null); });
    if (sektorSelect) sektorSelect.addEventListener('change', function () { clearTimeout(debounceTimer); fetchData(null); });
    if (perPageSel)   perPageSel.addEventListener('change',   function () { clearTimeout(debounceTimer); fetchData(null); });

    document.addEventListener('click', function (e) {
        const link = e.target.closest('#paginationWrapper .pagination a, .pagination a');
        if (!link) return;
        e.preventDefault();
        fetchData(link.href);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('popstate', function () {
        fetchData(window.location.href);
    });
})();
</script>

{{-- CHART MANAGER (RADAR) --}}
<script>
(function() {
    'use strict';
    let chartMini = null;
    let chartFull = null;
    const PALETTE = ['#16A34A', '#4ADE80', '#15803D', '#14532D', '#22C55E', '#86EFAC', '#166534', '#BBF7D0'];

    function destroyCharts() {
        if (chartMini) { chartMini.destroy(); chartMini = null; }
        if (chartFull) { chartFull.destroy(); chartFull = null; }
    }

    function renderLegend(labels, values) {
        const wrap = document.getElementById('radarLegend');
        if (!wrap) return;
        if (!labels || labels.length === 0) {
            wrap.innerHTML = '<div class="radar-legend-item-new"><span class="label">Tidak ada data</span></div>';
            return;
        }
        let html = '';
        labels.forEach(function (label, i) {
            const color = PALETTE[i % PALETTE.length];
            html += '<div class="radar-legend-item-new" style="border-left:4px solid ' + color + ';">'
                 + '<span class="label">' + label + '</span>'
                 + '<span class="value">' + values[i] + '</span></div>';
        });
        const total = values.reduce((a, b) => a + (parseInt(b) || 0), 0);
        html += '<div class="radar-legend-item-new" style="border-left:4px solid #13A847; background:#f0fdf4;">'
             + '<span class="label">Total</span>'
             + '<span class="value" id="grandTotalValue">' + total + '</span></div>';
        wrap.innerHTML = html;
    }

    function buildChartData(labels, values) {
        let safeLabels = labels.slice();
        let safeValues = values.slice();
        while (safeLabels.length < 3) { safeLabels.push(' '); safeValues.push(0); }
        return {
            labels: safeLabels,
            datasets: [{
                label: 'Jumlah Penyedia',
                data: safeValues,
                backgroundColor: 'rgba(22, 163, 74, 0.20)',
                borderColor: 'rgba(22, 163, 74, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(22, 163, 74, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
            }]
        };
    }

    function renderCharts(labels, values) {
        if (typeof Chart === 'undefined') return;
        destroyCharts();
        const data = buildChartData(labels, values);
        const maxValue = Math.max(...values, 1);

        const miniCtx = document.getElementById('radarChartMini');
        if (miniCtx) {
            chartMini = new Chart(miniCtx, {
                type: 'radar', data: data,
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: { r: {
                        beginAtZero: true,
                        grid: { color: 'rgba(22, 163, 74, 0.15)' },
                        angleLines: { color: 'rgba(22, 163, 74, 0.20)' },
                        ticks: { display: false },
                        pointLabels: { color: '#1A2B4A', font: { size: 11, weight: '700' } }
                    }}
                }
            });
        }

        const fullCtx = document.getElementById('radarChartFull');
        if (fullCtx) {
            chartFull = new Chart(fullCtx, {
                type: 'radar', data: data,
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        tooltip: { callbacks: { label: c => c.label.trim() + ': ' + c.parsed.r + ' penyedia' } }
                    },
                    scales: { r: {
                        beginAtZero: true,
                        ticks: { stepSize: Math.ceil(maxValue / 5) || 1, backdropColor: 'transparent', color: '#6B7A93', font: { size: 10 } },
                        grid: { color: 'rgba(22, 163, 74, 0.15)' },
                        angleLines: { color: 'rgba(22, 163, 74, 0.20)' },
                        pointLabels: { color: '#1A2B4A', font: { size: 13, weight: '600' } }
                    }}
                }
            });
        }
        renderLegend(labels, values);
    }

    window.renderRadarCharts = renderCharts;
    window.destroyRadarCharts = destroyCharts;

    document.addEventListener('DOMContentLoaded', function () {
        renderCharts(@json($chartLabels ?? []), @json($chartValues ?? []));
    });
})();
</script>

{{-- SCRIPT MODAL CREATE & EDIT --}}
<script>
// --- CREATE ---
function openConfirmCreateModal() {
    document.getElementById('confirmCreateModal').style.display = 'flex';
}
function closeConfirmCreateModal() {
    document.getElementById('confirmCreateModal').style.display = 'none';
}
function submitCreateForm() {
    closeConfirmCreateModal();
    document.getElementById('formCreateTertibJakon').submit();
}

// --- EDIT ---
function openConfirmEditModal() {
    document.getElementById('confirmEditModal').style.display = 'flex';
}
function closeConfirmEditModal() {
    document.getElementById('confirmEditModal').style.display = 'none';
}
function submitEditForm() {
    closeConfirmEditModal();
    document.getElementById('formEditTertibJakon').submit();
}

document.addEventListener('DOMContentLoaded', function () {
    // 1. Event listener untuk tombol edit
    document.addEventListener('click', function(e) {
        const btn = e.target.closest('.edit-trigger');
        if (!btn) return;

        e.preventDefault();

        // 2. Ambil data JSON dari tombol
        const itemData = btn.getAttribute('data-item');
        if (!itemData) return;

        const item = JSON.parse(itemData);

        // 3. Isi form modal dengan data
        document.getElementById('edit_penyediastatustertibjakon_id').value = item.penyediastatustertibjakon_id || '';
        document.getElementById('edit_namapekerjaan').value = item.namapekerjaan || '';
        document.getElementById('edit_kegiatankonstruksi').value = item.kegiatankonstruksi || '';
        document.getElementById('edit_nomorkontrak').value = item.nomorkontrak || '';
        document.getElementById('edit_bujk').value = item.bujk || '';

        // 4. Set action URL untuk form update
        document.getElementById('formEditTertibJakon').action = "/betertibjakonpenyelenggaraan/updatecreate/" + item.id;

        // 5. Tampilkan modal
        const modalEl = document.getElementById('editTertibJakonModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    });

    // 6. Handle hapus
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('.delete-trigger');
        if (!btn) return;
        e.preventDefault();
        const id   = btn.getAttribute('data-judul');
        const nama = btn.getAttribute('data-nama');
        const itemName    = document.getElementById('itemName');
        const deleteForm  = document.getElementById('deleteForm');
        const deleteModal = document.getElementById('deleteModal');
        if (itemName)    itemName.innerText = nama;
        if (deleteForm)  deleteForm.action = "/betertibjakonpenyelenggaraan/delete/" + encodeURIComponent(id);
        if (deleteModal) new bootstrap.Modal(deleteModal).show();
    });

    // 7. Handle Error di Create (jika validasi gagal)
    const hasError = {{ $errors->any() ? 'true' : 'false' }};
    if (hasError) {
        const modalEl = document.getElementById('createTertibJakonModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            new bootstrap.Modal(modalEl).show();
        }
    }
});
</script>

</body>
</html>