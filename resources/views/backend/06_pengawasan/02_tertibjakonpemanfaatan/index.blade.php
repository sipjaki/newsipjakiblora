@include('backend.00_administrator.00_baganterpisah.01_header')
<style>
/* ==========================================
   RESET BOOTSTRAP TABLE
   ========================================== */
#tabeltertibjakonpemanfaatan,
#tabeltertibjakonpemanfaatan > tbody,
#tabeltertibjakonpemanfaatan > tbody > tr,
#tabeltertibjakonpemanfaatan > tbody > tr > td {
    --bs-table-bg: transparent !important;
    --bs-table-striped-bg: transparent !important;
    --bs-table-accent-bg: transparent !important;
    background-image: none !important;
}
#tabeltertibjakonpemanfaatan {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 14px;
    padding: 0 8px;
}
#tabeltertibjakonpemanfaatan > thead { display: none; }

#tabeltertibjakonpemanfaatan > tbody > tr.item-row > td {
    background: #ffffff !important;
    border-top: 1.5px solid #e2e8f0 !important;
    border-bottom: 1.5px solid #e2e8f0 !important;
    padding: 14px 16px !important;
    vertical-align: top;
    transition: all 0.2s ease;
}
#tabeltertibjakonpemanfaatan > tbody > tr.item-row > td:first-child {
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
#tabeltertibjakonpemanfaatan > tbody > tr.item-row > td:last-child {
    border-right: 1.5px solid #e2e8f0 !important;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}
#tabeltertibjakonpemanfaatan > tbody > tr.item-row:hover > td {
    background: #f0fdf4 !important;
    border-color: #86efac !important;
    box-shadow: 0 4px 16px rgba(19, 168, 71, 0.12);
}
#tabeltertibjakonpemanfaatan > tbody > tr.item-row:hover > td:first-child {
    background: #bbf7d0 !important;
}
#tabeltertibjakonpemanfaatan > tbody > tr.item-row.zebra > td { background: #f8fafc !important; }
#tabeltertibjakonpemanfaatan > tbody > tr.item-row.zebra > td:first-child { background: #ecfdf5 !important; }

/* ==========================================
   LAYOUT UTAMA
   ========================================== */
.card-layout-main {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
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
    padding: 10px 12px;
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
    margin-bottom: 8px;
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
    gap: 8px 12px;
}
.info-item {
    display: flex;
    flex-direction: column;
    gap: 1px;
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
    font-size: 11.5px;
    color: #1a2b4a;
    font-weight: 600;
    line-height: 1.35;
    word-break: break-word;
}
.info-item .info-value.uppercase { text-transform: uppercase; }
.info-item .info-value.strong {
    font-weight: 800;
    font-size: 12px;
    color: #0f172a;
    text-transform: uppercase;
}

/* ==========================================
   BOX 2: AKSI KEGIATAN
   ========================================== */
.kegiatan-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    flex: 1;
}
@media (max-width: 575.98px) {
    .kegiatan-grid { grid-template-columns: 1fr; }
}

.kegiatan-group {
    display: flex;
    flex-direction: column;
    gap: 3px;
}
.kegiatan-group-title {
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    color: #334155;
    letter-spacing: 0.2px;
    margin-bottom: 4px;
    padding: 2px 6px;
    background: #f1f5f9;
    border-left: 3px solid #13A847;
    border-radius: 0 4px 4px 0;
    line-height: 1.35;
    text-transform: none;
}

.kegiatan-buttons {
    display: flex;
    gap: 4px;
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
    padding: 4px 8px;
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

.act-btn.btn-bukti-ada {
    background: #2563eb;
    border-color: #2563eb;
    color: #fff;
}
.act-btn.btn-bukti-ada:hover {
    background: #1d4ed8;
    border-color: #1d4ed8;
    color: #fff;
    transform: translateY(-1px);
}

/* ==========================================
   BARIS BAWAH
   ========================================== */
.card-bottom-actions {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 6px;
    padding-top: 10px;
    border-top: 1px dashed #cbd5e1;
}

/* EMPTY STATE */
#tabeltertibjakonpemanfaatan > tbody > tr.empty-row > td {
    background: #ffffff !important;
    border: 1.5px dashed #cbd5e1 !important;
    border-radius: 12px;
    padding: 60px 20px !important; text-align: center;
}

/* ==========================================
   SEARCH BAR
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
   CHART
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

.chart-box-tahunan, .radar-chart-panel-new {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px;
    display: flex;
    flex-direction: column;
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
    flex-shrink: 0;
}
.chart-box-title i { color: #13A847; font-size: 14px; }

.chart-tahunan-container { position: relative; width: 100%; height: 240px; flex: 1; }
.chart-tahunan-legend { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 12px; padding-top: 12px; border-top: 1px dashed #cbd5e1; }
.chart-tahunan-legend-item { display: inline-flex; align-items: center; gap: 5px; padding: 4px 8px; border-radius: 8px; font-size: 11px; font-weight: 700; background: #f8fafc; border: 1px solid #e2e8f0; }
.chart-tahunan-legend-item .year { color: #1a2b4a; }
.chart-tahunan-legend-item .total { color: #13A847; font-weight: 800; }
.chart-tahunan-legend-item .percent { padding: 2px 6px; border-radius: 6px; font-size: 10px; font-weight: 800; display: inline-flex; align-items: center; gap: 1px; }
.chart-tahunan-legend-item .percent.up { background: #dcfce7; color: #15803d; }
.chart-tahunan-legend-item .percent.down { background: #fee2e2; color: #b91c1c; }
.chart-tahunan-legend-item .percent.same { background: #f1f5f9; color: #475569; }

.radar-chart-canvas-wrap-new { position: relative; width: 100%; height: 200px; flex: 1; margin-bottom: 10px; }
.radar-chart-legend-new { display: flex; flex-wrap: wrap; gap: 6px; padding-top: 10px; border-top: 1px dashed #cbd5e1; margin-bottom: 10px; max-height: 80px; overflow-y: auto; }
.radar-legend-item-new { display: inline-flex; align-items: center; gap: 5px; padding: 3px 8px; border-radius: 6px; background: #f8fafc; border: 1px solid #e2e8f0; font-size: 11px; font-weight: 700; }
.radar-legend-item-new .label { color: #334155; }
.radar-legend-item-new .value { color: #13A847; font-weight: 800; }
.radar-chart-action-new { display: flex; justify-content: flex-end; margin-top: auto; }

/* ==========================================
   MODAL CREATE & EDIT
   ========================================== */
#createTertibPemanfaatanModal .modal-dialog,
#editTertibPemanfaatanModal .modal-dialog { 
    max-width: 75%; width: 75%; margin: 1.75rem auto; 
}
@media (max-width: 991.98px) { 
    #createTertibPemanfaatanModal .modal-dialog,
    #editTertibPemanfaatanModal .modal-dialog { max-width: 95%; width: 95%; } 
}

#radarChartModal .modal-dialog { max-width: 75%; width: 75%; }
#deleteModal .modal-dialog { max-width: 420px; }

#createTertibPemanfaatanModal .modal-content,
#editTertibPemanfaatanModal .modal-content {
    border-radius: 20px !important;
    border: none !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    overflow: hidden;
}
#createTertibPemanfaatanModal .modal-header,
#editTertibPemanfaatanModal .modal-header {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 28px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    border-radius: 20px 20px 0 0 !important;
}
#createTertibPemanfaatanModal .modal-header .modal-title,
#editTertibPemanfaatanModal .modal-header .modal-title {
    margin: 0 !important;
    font-weight: 700 !important;
    font-size: 16px !important;
    color: #1a2b4a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}
#createTertibPemanfaatanModal .modal-header .modal-title i { color: #13A847 !important; font-size: 20px !important; }
#editTertibPemanfaatanModal .modal-header .modal-title i { color: #f59e0b !important; font-size: 20px !important; }

#createTertibPemanfaatanModal .modal-header .btn-close,
#editTertibPemanfaatanModal .modal-header .btn-close { filter: none !important; opacity: 0.6 !important; }
#createTertibPemanfaatanModal .modal-header .btn-close:hover,
#editTertibPemanfaatanModal .modal-header .btn-close:hover { opacity: 1 !important; }

#createTertibPemanfaatanModal .modal-body,
#editTertibPemanfaatanModal .modal-body {
    padding: 24px 28px !important;
    max-height: 70vh;
    overflow-y: auto;
    background: #ffffff !important;
}
#createTertibPemanfaatanModal .modal-body::-webkit-scrollbar,
#editTertibPemanfaatanModal .modal-body::-webkit-scrollbar { width: 8px; }
#createTertibPemanfaatanModal .modal-body::-webkit-scrollbar-track,
#editTertibPemanfaatanModal .modal-body::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
#createTertibPemanfaatanModal .modal-body::-webkit-scrollbar-thumb,
#editTertibPemanfaatanModal .modal-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

#createTertibPemanfaatanModal .form-label-modern,
#editTertibPemanfaatanModal .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
#createTertibPemanfaatanModal .form-label-modern i { color: #13A847; font-size: 14px; }
#editTertibPemanfaatanModal .form-label-modern i { color: #f59e0b; font-size: 14px; }

#createTertibPemanfaatanModal .form-control,
#createTertibPemanfaatanModal .form-select,
#editTertibPemanfaatanModal .form-control,
#editTertibPemanfaatanModal .form-select {
    font-size: 13px;
    line-height: 1.55;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    background: #f8fafc;
    transition: all 0.2s ease;
    color: #1a2b4a;
}
#createTertibPemanfaatanModal .form-control:focus,
#createTertibPemanfaatanModal .form-select:focus { border-color: #13A847; background: #fff; box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15); outline: none; }
#editTertibPemanfaatanModal .form-control:focus,
#editTertibPemanfaatanModal .form-select:focus { border-color: #f59e0b; background: #fff; box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.15); outline: none; }

#createTertibPemanfaatanModal .form-control.is-invalid,
#createTertibPemanfaatanModal .form-select.is-invalid,
#editTertibPemanfaatanModal .form-control.is-invalid,
#editTertibPemanfaatanModal .form-select.is-invalid { border-color: #ef4444; background: #fef2f2; }

#createTertibPemanfaatanModal .invalid-feedback,
#editTertibPemanfaatanModal .invalid-feedback { display: block; color: #dc2626; font-size: 11.5px; margin-top: 4px; font-weight: 600; }
#createTertibPemanfaatanModal .mb-3,
#editTertibPemanfaatanModal .mb-3 { margin-bottom: 14px; }

#createTertibPemanfaatanModal .modal-alert-error,
#editTertibPemanfaatanModal .modal-alert-error {
    background: #fef2f2;
    border: 1.5px solid #fecaca;
    border-radius: 10px;
    padding: 14px 16px;
    margin-bottom: 16px;
    color: #991b1b;
    font-size: 13px;
    font-weight: 600;
}
#createTertibPemanfaatanModal .modal-alert-error i,
#editTertibPemanfaatanModal .modal-alert-error i { color: #dc2626; font-size: 16px; margin-right: 6px; }
#createTertibPemanfaatanModal .modal-alert-error ul,
#editTertibPemanfaatanModal .modal-alert-error ul { margin: 6px 0 0 0; padding-left: 18px; font-weight: 500; }
#createTertibPemanfaatanModal .modal-alert-error ul li,
#editTertibPemanfaatanModal .modal-alert-error ul li { font-size: 12px; line-height: 1.5; }

#createTertibPemanfaatanModal .modal-footer,
#editTertibPemanfaatanModal .modal-footer {
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
   MODAL REKAP K.03
   ========================================== */
#modalRekapK03PU .modal-dialog,
#modalRekapK03NONPU .modal-dialog,
#modalRekapK03SWASTA .modal-dialog {
    max-width: 95%;
    width: 95%;
}
#modalRekapK03PU .modal-content,
#modalRekapK03NONPU .modal-content,
#modalRekapK03SWASTA .modal-content {
    border-radius: 20px !important;
    border: none !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    overflow: hidden;
}
#modalRekapK03PU .modal-header,
#modalRekapK03NONPU .modal-header,
#modalRekapK03SWASTA .modal-header {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 28px !important;
}
#modalRekapK03PU .modal-header .modal-title,
#modalRekapK03NONPU .modal-header .modal-title,
#modalRekapK03SWASTA .modal-header .modal-title {
    font-weight: 800 !important;
    color: #1a2b4a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}
#modalRekapK03PU .modal-body,
#modalRekapK03NONPU .modal-body,
#modalRekapK03SWASTA .modal-body {
    padding: 24px 28px !important;
    max-height: 75vh;
    overflow-y: auto;
    background: #f8fafc !important;
}
#modalRekapK03PU .modal-footer,
#modalRekapK03NONPU .modal-footer,
#modalRekapK03SWASTA .modal-footer {
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

                        {{-- CHART ROW --}}
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

                        {{-- SEARCH BAR --}}
                        <form method="GET" action="/betertibjakonpemanfaatan" id="filterForm">
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

                                    <button type="button" class="button-berkas button-md" data-bs-toggle="modal" data-bs-target="#modalRekapK03PU">
                                        <i class="bi bi-file-earmark-bar-graph"></i> Rekap Simak K.03 PU
                                    </button>

                                    <button type="button" class="button-berkas button-md" data-bs-toggle="modal" data-bs-target="#modalRekapK03NONPU">
                                        <i class="bi bi-file-earmark-bar-graph"></i> Rekap Simak K.03 NON-PU
                                    </button>

                                    <button type="button" class="button-berkas button-md" data-bs-toggle="modal" data-bs-target="#modalRekapK03SWASTA">
                                        <i class="bi bi-file-earmark-bar-graph"></i> Rekap Simak K.03 SWASTA
                                    </button>

                                    <button type="button" class="button-berkas button-md" onclick="exportSelectedColumnsToExcel('tabeltertibjakonpemanfaatan', 'Data_TertibJakonPemanfaatan')">
                                        <i class="bi bi-download"></i> Download Excel
                                    </button>
                                    
                                    <button type="button" class="button-baru button-md" data-bs-toggle="modal" data-bs-target="#createTertibPemanfaatanModal">
                                        <i class="fa fa-plus"></i> Pengawasan Baru
                                    </button>
                                </div>
                            </div>

                        </div>
                        </form>

                     </div>

                     {{-- TABLE --}}
                     <div class="card-body p-0">
                        <div style="width: 100%; overflow-x: auto; padding: 0 8px;">
                            <table id="tabeltertibjakonpemanfaatan">
                                <thead>
                                    <tr>
                                        <th>No</th><th>Penyedia</th><th>Nama Pekerjaan</th>
                                        <th>Nama Bangunan</th><th>No Kontrak</th><th>Lokasi</th>
                                        <th>Tgl Pembangunan</th><th>Tgl Pemanfaatan</th>
                                        <th>Umur Bangunan</th><th>Aksi</th>
                                    </tr>
                                </thead>

                              <tbody id="tabeltertibjakonpemanfaatansearc">
                                @forelse ($data as $item)
                                <tr class="item-row {{ $loop->index % 2 == 0 ? '' : 'zebra' }}">

                                    <td>{{ $data->firstItem() + $loop->index }}</td>

                                    <td colspan="9">
                                        {{-- LAYOUT 2 KOLOM --}}
                                        <div class="card-layout-main">

                                            {{-- BOX 1: INFORMASI DATA --}}
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
                                                        <span class="info-label">Nomor Kontrak</span>
                                                        <span class="info-value">{{ $item->nomorkontrak ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="info-label">Tanggal Pembangunan</span>
                                                        <span class="info-value">
                                                            {{ $item->tanggalpembangunan ? \Carbon\Carbon::parse($item->tanggalpembangunan)->translatedFormat('d F Y') : 'Belum Di Update' }}
                                                        </span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="info-label">Tanggal Pemanfaatan</span>
                                                        <span class="info-value">
                                                            {{ $item->tanggalpemanfaatan ? \Carbon\Carbon::parse($item->tanggalpemanfaatan)->translatedFormat('d F Y') : 'Belum Di Update' }}
                                                        </span>
                                                    </div>

                                                    <div class="info-item">
                                                        <span class="info-label">Nama Pekerjaan</span>
                                                        <span class="info-value strong">{{ $item->namapekerjaan ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="info-label">Nama Bangunan</span>
                                                        <span class="info-value">{{ $item->namabangunan ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="info-label">Lokasi</span>
                                                        <span class="info-value">{{ $item->lokasi ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                    <div class="info-item">
                                                        <span class="info-label">Umur Bangunan</span>
                                                        <span class="info-value">{{ $item->umurbangunan ?? 'Belum Di Update' }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- BOX 2: AKSI KEGIATAN --}}
                                            <div class="box-kegiatan">
                                                <div class="box-title">
                                                    <i class="bi bi-clipboard-check-fill"></i>
                                                    Aksi Kegiatan
                                                </div>

                                                <div class="kegiatan-grid">
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Daftar Simak 3 No 1 Pengawasan Pemanfaatan Jasa Konstruksi</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="/betertibjakonpemanfataanjakon/index/{{$item->id}}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Daftar Simak 3 No 2 & 3 Pengawasan Rencana Umur Konstruksi & Kapasitas Beban</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpemanfataansurat2/index/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Daftar Simak 3 No 4 Pengawasan Pemeliharaan Konstruksi & Struktur</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/betertibjakonpemanfataansurat3/index/' . $item->id) }}" class="act-btn btn-solid">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- BUKTI DUKUNG --}}
                                                    <div class="kegiatan-group">
                                                        <span class="kegiatan-group-title">Bukti Dukung</span>
                                                        <div class="kegiatan-buttons">
                                                            <a href="{{ url('/buktidukung/create/' . $item->id) }}" class="act-btn btn-upload">
                                                                <i class="bi bi-cloud-upload"></i> Upload
                                                            </a>

                                                            @php
                                                                $hasBuktiDukung = ($item->lingkuppengawasan && $item->lingkuppengawasan != '')
                                                                               || ($item->indikator && $item->indikator != '')
                                                                               || ($item->dokumendiperiksa && $item->dokumendiperiksa != '');
                                                            @endphp

                                                            <a href="{{ url('/buktidukungindex/index/' . $item->id) }}"
                                                               class="act-btn {{ $hasBuktiDukung ? 'btn-bukti-ada' : 'btn-solid' }}">
                                                                <i class="bi bi-file-earmark-text"></i> Lihat Surat
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- BARIS BAWAH: EDIT & HAPUS --}}
                                        <div class="card-bottom-actions">
                                            <button type="button" class="button-berkas edit-trigger" data-item="{{ json_encode($item) }}">
                                                <i class="bi bi-pencil-square"></i> Edit Data
                                            </button>

                                            <button type="button"
                                                    class="button-merah delete-trigger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"
                                                    data-url="{{ route('betertibjakonusahapemenuhansyaratdeletedata', $item->id) }}"
                                                    data-nama="{{ $item->namapekerjaan ?? 'Data' }}">
                                                <i class="bi bi-trash"></i> Hapus Data
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr class="empty-row">
                                        <td colspan="10">
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
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

{{-- ============================================================ --}}
{{-- MODAL REKAP K.03 PU                                          --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalRekapK03PU" tabindex="-1" aria-labelledby="modalRekapK03PULabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 95%; width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRekapK03PULabel">
                    <i class="bi bi-file-earmark-bar-graph" style="color: #3b82f6; font-size: 20px;"></i>
                    Rekapitulasi Pengawasan Tertib Pemanfaatan Jasa Konstruksi Tahunan — FORMAT K.03 PU
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px; margin-bottom: 20px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterEntriesPU" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-list-ol"></i> Tampilkan:
                        </label>
                        <select id="filterEntriesPU" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="all">Semua Data</option>
                            <option value="10" selected>10 Data</option>
                            <option value="25">25 Data</option>
                            <option value="50">50 Data</option>
                            <option value="100">100 Data</option>
                        </select>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterTahunPU" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan:
                        </label>
                        <select id="filterTahunPU" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="">Semua Tahun</option>
                            @if(isset($listTahun))
                                @foreach ($listTahun as $th)
                                    <option value="{{ $th }}">{{ $th }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div id="printAreaRekapPU" style="background: #ffffff; padding: 30px; border: 1px solid #cbd5e1; border-radius: 8px; overflow-x: auto;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h4 style="font-weight: 900; margin: 0; color: #b45309;">FORMAT K.03 PU</h4>
                        <h5 style="font-weight: 800; margin: 5px 0 0 0; color: #0f172a;">REKAPITULASI PENGAWASAN TERTIB PEMANFAATAN JASA KONSTRUKSI TAHUNAN (PU)</h5>
                    </div>

                    <table style="width: 100%; border-collapse: collapse; font-size: 11px; border: 1px solid #000;" id="tabelRekapPU">
                        <thead>
                            <tr>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">No</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nama Bangunan Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nomor Kontrak (Pembangunan)</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Lokasi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pembangunan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pemanfaatan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Umur Konstruksi</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Fungsi Peruntukannya</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Rencana Umur Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kapasitas dan Beban</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan produk konstruksi</th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian fungsi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian lokasi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan bangunan</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Program pemeliharaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyRekapPU">
                            <tr>
                                <td colspan="13" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">
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
                <button type="button" class="button-berkas button-md" onclick="downloadRekapExcel('tabelRekapPU', 'Rekap_K03_PU')">
                    <i class="bi bi-file-earmark-excel"></i> Download Excel
                </button>
                <button type="button" class="button-baru button-md" onclick="cetakRekapData('printAreaRekapPU', 'Rekap_K03_PU')">
                    <i class="bi bi-printer"></i> Cetak / Print
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL REKAP K.03 NON-PU                                      --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalRekapK03NONPU" tabindex="-1" aria-labelledby="modalRekapK03NONPULabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 95%; width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRekapK03NONPULabel">
                    <i class="bi bi-file-earmark-bar-graph" style="color: #f59e0b; font-size: 20px;"></i>
                    Rekapitulasi Pengawasan Tertib Pemanfaatan Jasa Konstruksi Tahunan — FORMAT K.03 NON-PU
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px; margin-bottom: 20px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterEntriesNONPU" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-list-ol"></i> Tampilkan:
                        </label>
                        <select id="filterEntriesNONPU" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="all">Semua Data</option>
                            <option value="10" selected>10 Data</option>
                            <option value="25">25 Data</option>
                            <option value="50">50 Data</option>
                            <option value="100">100 Data</option>
                        </select>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterTahunNONPU" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan:
                        </label>
                        <select id="filterTahunNONPU" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="">Semua Tahun</option>
                            @if(isset($listTahun))
                                @foreach ($listTahun as $th)
                                    <option value="{{ $th }}">{{ $th }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div id="printAreaRekapNONPU" style="background: #ffffff; padding: 30px; border: 1px solid #cbd5e1; border-radius: 8px; overflow-x: auto;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h4 style="font-weight: 900; margin: 0; color: #b45309;">FORMAT K.03 NON-PU</h4>
                        <h5 style="font-weight: 800; margin: 5px 0 0 0; color: #0f172a;">REKAPITULASI PENGAWASAN TERTIB PEMANFAATAN JASA KONSTRUKSI TAHUNAN (NON-PU)</h5>
                    </div>

                    <table style="width: 100%; border-collapse: collapse; font-size: 11px; border: 1px solid #000;" id="tabelRekapNONPU">
                        <thead>
                            <tr>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">No</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nama Bangunan Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nomor Kontrak (Pembangunan)</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Lokasi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pembangunan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pemanfaatan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Umur Konstruksi</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Fungsi Peruntukannya</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Rencana Umur Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kapasitas dan Beban</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan produk konstruksi</th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian fungsi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian lokasi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan bangunan</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Program pemeliharaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyRekapNONPU">
                            <tr>
                                <td colspan="13" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">
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
                <button type="button" class="button-berkas button-md" onclick="downloadRekapExcel('tabelRekapNONPU', 'Rekap_K03_NONPU')">
                    <i class="bi bi-file-earmark-excel"></i> Download Excel
                </button>
                <button type="button" class="button-baru button-md" onclick="cetakRekapData('printAreaRekapNONPU', 'Rekap_K03_NONPU')">
                    <i class="bi bi-printer"></i> Cetak / Print
                </button>
            </div>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL REKAP K.03 SWASTA                                      --}}
{{-- ============================================================ --}}
<div class="modal fade" id="modalRekapK03SWASTA" tabindex="-1" aria-labelledby="modalRekapK03SWASTALabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 95%; width: 95%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRekapK03SWASTALabel">
                    <i class="bi bi-file-earmark-bar-graph" style="color: #16a34a; font-size: 20px;"></i>
                    Rekapitulasi Pengawasan Tertib Pemanfaatan Jasa Konstruksi Tahunan — FORMAT K.03 SWASTA
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 16px; margin-bottom: 20px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterEntriesSWASTA" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-list-ol"></i> Tampilkan:
                        </label>
                        <select id="filterEntriesSWASTA" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="all">Semua Data</option>
                            <option value="10" selected>10 Data</option>
                            <option value="25">25 Data</option>
                            <option value="50">50 Data</option>
                            <option value="100">100 Data</option>
                        </select>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <label for="filterTahunSWASTA" style="font-weight: 700; color: #334155; margin: 0; font-size: 13px;">
                            <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan:
                        </label>
                        <select id="filterTahunSWASTA" class="form-select" style="width: auto; padding: 8px 12px; border-radius: 8px; border: 1.5px solid #cbd5e1;">
                            <option value="">Semua Tahun</option>
                            @if(isset($listTahun))
                                @foreach ($listTahun as $th)
                                    <option value="{{ $th }}">{{ $th }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div id="printAreaRekapSWASTA" style="background: #ffffff; padding: 30px; border: 1px solid #cbd5e1; border-radius: 8px; overflow-x: auto;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <h4 style="font-weight: 900; margin: 0; color: #b45309;">FORMAT K.03 SWASTA</h4>
                        <h5 style="font-weight: 800; margin: 5px 0 0 0; color: #0f172a;">REKAPITULASI PENGAWASAN TERTIB PEMANFAATAN JASA KONSTRUKSI TAHUNAN (SWASTA)</h5>
                    </div>

                    <table style="width: 100%; border-collapse: collapse; font-size: 11px; border: 1px solid #000;" id="tabelRekapSWASTA">
                        <thead>
                            <tr>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">No</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nama Bangunan Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Nomor Kontrak (Pembangunan)</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Lokasi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pembangunan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Tanggal dan Tahun Pemanfaatan</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Umur Konstruksi</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Fungsi Peruntukannya</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Rencana Umur Konstruksi</th>
                                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kapasitas dan Beban</th>
                                <th colspan="2" style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan produk konstruksi</th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian fungsi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Kesesuaian lokasi</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Pemeliharaan bangunan</th>
                                <th style="border: 1px solid #000; padding: 8px; background: #f8fafc; text-align: center;">Program pemeliharaan</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyRekapSWASTA">
                            <tr>
                                <td colspan="13" style="text-align: center; padding: 30px; color: #94a3b8; border: 1px solid #000;">
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
                <button type="button" class="button-berkas button-md" onclick="downloadRekapExcel('tabelRekapSWASTA', 'Rekap_K03_SWASTA')">
                    <i class="bi bi-file-earmark-excel"></i> Download Excel
                </button>
                <button type="button" class="button-baru button-md" onclick="cetakRekapData('printAreaRekapSWASTA', 'Rekap_K03_SWASTA')">
                    <i class="bi bi-printer"></i> Cetak / Print
                </button>
            </div>
        </div>
    </div>
</div>

{{-- MODAL CREATE PEMANFAATAN --}}
<div class="modal fade" id="createTertibPemanfaatanModal" tabindex="-1"
     aria-labelledby="createTertibPemanfaatanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"
         style="max-width: 75%; width: 75%;">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="createTertibPemanfaatanModalLabel">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data Baru Pemanfaatan Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('betertibjakonpemanfaatanupdatecreatenew') }}" method="POST"
                  enctype="multipart/form-data" id="formCreateTertibPemanfaatan">
                @csrf

                <div class="modal-body">
                    @if ($errors->any())
                        <div class="modal-alert-error">
                            <strong>
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                Terdapat {{ $errors->count() }} kesalahan:
                            </strong>
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
                                <label for="penyediastatustertibjakon_id" class="form-label-modern">
                                    <i class="bi bi-diagram-3-fill"></i>
                                    Sektor <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="penyediastatustertibjakon_id"
                                        name="penyediastatustertibjakon_id"
                                        class="form-select @error('penyediastatustertibjakon_id') is-invalid @enderror">
                                    <option value="">-- Pilih Sektor --</option>
                                    @if(isset($datapenyedia))
                                        @foreach ($datapenyedia as $penyedia)
                                            <option value="{{ $penyedia->id }}"
                                                {{ old('penyediastatustertibjakon_id') == $penyedia->id ? 'selected' : '' }}>
                                                {{ $penyedia->penyedia }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('penyediastatustertibjakon_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namapekerjaan" class="form-label-modern">
                                    <i class="bi bi-briefcase-fill"></i>
                                    Nama Pekerjaan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="namapekerjaan" name="namapekerjaan"
                                       class="form-control @error('namapekerjaan') is-invalid @enderror"
                                       value="{{ old('namapekerjaan') }}"
                                       placeholder="Masukkan nama pekerjaan">
                                @error('namapekerjaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namabangunan" class="form-label-modern">
                                    <i class="bi bi-house-fill"></i>
                                    Nama Bangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="namabangunan" name="namabangunan"
                                       class="form-control @error('namabangunan') is-invalid @enderror"
                                       value="{{ old('namabangunan') }}"
                                       placeholder="Masukkan nama bangunan">
                                @error('namabangunan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nomorkontrak" class="form-label-modern">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                    Nomor Kontrak <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="nomorkontrak" name="nomorkontrak"
                                       class="form-control @error('nomorkontrak') is-invalid @enderror"
                                       value="{{ old('nomorkontrak') }}"
                                       placeholder="Masukkan nomor kontrak">
                                @error('nomorkontrak')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lokasi" class="form-label-modern">
                                    <i class="bi bi-geo-alt-fill"></i>
                                    Lokasi <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="lokasi" name="lokasi"
                                       class="form-control @error('lokasi') is-invalid @enderror"
                                       value="{{ old('lokasi') }}"
                                       placeholder="Masukkan lokasi">
                                @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggalpembangunan" class="form-label-modern">
                                    <i class="bi bi-calendar-check-fill"></i>
                                    Tanggal Pembangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="date" id="tanggalpembangunan" name="tanggalpembangunan"
                                       class="form-control @error('tanggalpembangunan') is-invalid @enderror"
                                       value="{{ old('tanggalpembangunan') }}">
                                @error('tanggalpembangunan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggalpemanfaatan" class="form-label-modern">
                                    <i class="bi bi-calendar-event-fill"></i>
                                    Tanggal Pemanfaatan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="date" id="tanggalpemanfaatan" name="tanggalpemanfaatan"
                                       class="form-control @error('tanggalpemanfaatan') is-invalid @enderror"
                                       value="{{ old('tanggalpemanfaatan') }}">
                                @error('tanggalpemanfaatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="umurbangunan" class="form-label-modern">
                                    <i class="bi bi-hourglass-split"></i>
                                    Umur Bangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="umurbangunan" name="umurbangunan"
                                        class="form-select @error('umurbangunan') is-invalid @enderror">
                                    <option value="">-- Pilih Umur Bangunan --</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }} Tahun"
                                            {{ old('umurbangunan') == "$i Tahun" ? 'selected' : '' }}>
                                            {{ $i }} Tahun
                                        </option>
                                    @endfor
                                    <option value="Lebih dari 10 Tahun"
                                        {{ old('umurbangunan') == 'Lebih dari 10 Tahun' ? 'selected' : '' }}>
                                        Lebih dari 10 Tahun
                                    </option>
                                </select>
                                @error('umurbangunan')
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
                    <button type="button" class="button-baru button-md" onclick="openConfirmCreatePemanfaatanModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL KONFIRMASI SIMPAN --}}
<div id="confirmCreatePemanfaatanModal" class="confirm-create-overlay">
    <div class="confirm-create-box">
        <div class="confirm-create-icon" style="background: #dcfce7;">
            <i class="bi bi-question-circle-fill" style="color: #13A847;"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Simpan</h5>
        <p class="confirm-create-message">Apakah Anda ingin membuat data baru ini?</p>
        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmCreatePemanfaatanModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" style="background: #13A847;" onclick="submitCreatePemanfaatanForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Simpan
            </button>
        </div>
    </div>
</div>

{{-- MODAL EDIT PEMANFAATAN --}}
<div class="modal fade" id="editTertibPemanfaatanModal" tabindex="-1" aria-labelledby="editTertibPemanfaatanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 75%; width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTertibPemanfaatanModalLabel">
                    <i class="bi bi-pencil-square"></i> Perbaikan Data Pemanfaatan Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="" method="POST" enctype="multipart/form-data" id="formEditTertibPemanfaatan">
                @csrf
                @method('POST')

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_penyediastatustertibjakon_id" class="form-label-modern">
                                    <i class="bi bi-diagram-3-fill"></i> Status Penyedia / Sektor <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="edit_penyediastatustertibjakon_id" name="penyediastatustertibjakon_id" class="form-select" required>
                                    <option value="">-- Pilih Sektor --</option>
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
                                <label for="edit_namabangunan" class="form-label-modern">
                                    <i class="bi bi-house-fill"></i> Nama Bangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="edit_namabangunan" name="namabangunan" class="form-control" placeholder="Masukkan nama bangunan" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit_nomorkontrak" class="form-label-modern">
                                    <i class="bi bi-file-earmark-text-fill"></i> Nomor Kontrak <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="edit_nomorkontrak" name="nomorkontrak" class="form-control" placeholder="Masukkan nomor kontrak" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_lokasi" class="form-label-modern">
                                    <i class="bi bi-geo-alt-fill"></i> Lokasi <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="edit_lokasi" name="lokasi" class="form-control" placeholder="Masukkan lokasi" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit_tanggalpembangunan" class="form-label-modern">
                                    <i class="bi bi-calendar-check-fill"></i> Tanggal Pembangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="date" id="edit_tanggalpembangunan" name="tanggalpembangunan" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit_tanggalpemanfaatan" class="form-label-modern">
                                    <i class="bi bi-calendar-event-fill"></i> Tanggal Pemanfaatan <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="date" id="edit_tanggalpemanfaatan" name="tanggalpemanfaatan" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit_umurbangunan" class="form-label-modern">
                                    <i class="bi bi-hourglass-split"></i> Umur Bangunan <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="edit_umurbangunan" name="umurbangunan" class="form-select" required>
                                    <option value="">-- Pilih Umur Bangunan --</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }} Tahun">{{ $i }} Tahun</option>
                                    @endfor
                                    <option value="Lebih dari 10 Tahun">Lebih dari 10 Tahun</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button" class="button-baru button-md" onclick="openConfirmEditPemanfaatanModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL KONFIRMASI EDIT --}}
<div id="confirmEditPemanfaatanModal" class="confirm-create-overlay">
    <div class="confirm-create-box" style="border: 1px solid #f59e0b;">
        <div class="confirm-create-icon" style="background: #fef3c7;">
            <i class="bi bi-question-circle-fill" style="color: #f59e0b;"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Perubahan</h5>
        <p class="confirm-create-message">Apakah Anda yakin ingin memperbarui data ini?</p>
        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmEditPemanfaatanModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" style="background: #f59e0b;" onclick="submitEditPemanfaatanForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Update
            </button>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

{{-- ═══════════════════════════════════════════════════════════════ --}}
{{-- SCRIPT REKAP K.03 (PU / NON-PU / SWASTA)                     --}}
{{-- ═══════════════════════════════════════════════════════════════ --}}
<script id="data-rekap-k03-json" type="application/json">
    {!! json_encode($allDataRekap ?? $data->items()) !!}
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let allDataRekap = [];
    try {
        allDataRekap = JSON.parse(document.getElementById('data-rekap-k03-json').textContent);
    } catch (e) {
        console.error('Gagal parse data rekap:', e);
    }

    function getNamaPenyedia(item) {
        if (!item) return '';
        if (item.penyedia) {
            return item.penyedia.toString().trim().toUpperCase();
        }
        return '';
    }

    function isPU(item) {
        return getNamaPenyedia(item) === 'PU';
    }
    function isNonPU(item) {
        return getNamaPenyedia(item) === 'NON-PU';
    }
    function isSwasta(item) {
        return getNamaPenyedia(item) === 'SWASTA';
    }

    function formatStatus(val) {
        if (val === null || val === undefined || val === '') return '-';

        const raw = String(val).trim();
        const norm = raw.toLowerCase();

        const OK_VALUES = [
            'sesuai', 'sudah', 'tertib', 'meningkat', 'tersedia',
            'ada', 'lengkap', 'ya', 'baik', 'sudah sesuai',
            'sudah tertib', 'sudah tersedia'
        ];

        const NOT_OK_VALUES = [
            'tidak sesuai', 'belum', 'belum sesuai', 'belum tertib',
            'tidak tertib', 'tidak ada', 'tidak tersedia', 'tidak lengkap',
            'tidak', 'belum ada', 'kurang', 'kurang sesuai'
        ];

        if (OK_VALUES.includes(norm)) {
            return '<span style="color:#15803d; font-weight:bold;" title="Nilai: ' + raw + '">(Tertib)</span>';
        }
        if (NOT_OK_VALUES.includes(norm)) {
            return '<span style="color:#b91c1c; font-weight:bold;" title="Nilai: ' + raw + '">(Belum Tertib)</span>';
        }

        return '<span style="color:#b91c1c; font-weight:bold;" title="Nilai tidak dikenal: ' + raw + '">(Belum Tertib)</span>';
    }

    function formatTanggal(dateStr) {
        if (!dateStr) return '-';
        try {
            const d = new Date(dateStr);
            if (isNaN(d.getTime())) return dateStr;
            return d.toLocaleDateString('id-ID', { day: '2-digit', month: 'long', year: 'numeric' });
        } catch (e) { return dateStr; }
    }

    function buildRows(filtered) {
        let html = '';
        filtered.forEach((item, index) => {
            const namaBangunan = item.namabangunan || '-';
            const nomorKontrak  = item.nomorkontrak || '-';
            const lokasi        = item.lokasi || '-';
            const tglBangun     = formatTanggal(item.tanggalpembangunan);
            const tglManfaat    = formatTanggal(item.tanggalpemanfaatan);
            const umur          = item.umurbangunan || '-';

            // ✅ FIX: BACA DARI HASIL GABUNGAN DI CONTROLLER
            const fungsi        = formatStatus(item.peruntukan_fungsi);
            const lokasiStatus  = formatStatus(item.peruntukan_lokasi);
            const rencana       = formatStatus(item.rencanaumur);
            const kapasitas     = formatStatus(item.kapasitasdanbeban);
            const pemeliharaan  = formatStatus(item.pemeliharaan_konstruksi);
            const program       = formatStatus(item.pemeliharaan_struktur);

            html += `
                <tr>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${index + 1}</td>
                    <td style="border:1px solid #000; padding:8px;">${namaBangunan}</td>
                    <td style="border:1px solid #000; padding:8px;">${nomorKontrak}</td>
                    <td style="border:1px solid #000; padding:8px;">${lokasi}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${tglBangun}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${tglManfaat}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${umur}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${fungsi}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${lokasiStatus}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${rencana}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${kapasitas}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${pemeliharaan}</td>
                    <td style="border:1px solid #000; padding:8px; text-align:center;">${program}</td>
                </tr>`;
        });
        return html || `<tr><td colspan="13" style="text-align:center; padding:30px; color:#94a3b8; border:1px solid #000;">Tidak ada data untuk filter ini.</td></tr>`;
    }

    function renderRekap(tbodyId, filterTahunId, filterEntriesId, jenisFilter) {
        const tbody = document.getElementById(tbodyId);
        if (!tbody) return;

        const tahun = document.getElementById(filterTahunId).value;
        const limit = document.getElementById(filterEntriesId).value;

        let filtered = allDataRekap.slice();

        if (jenisFilter === 'PU') {
            filtered = filtered.filter(isPU);
        } else if (jenisFilter === 'NONPU') {
            filtered = filtered.filter(isNonPU);
        } else if (jenisFilter === 'SWASTA') {
            filtered = filtered.filter(isSwasta);
        }

        if (tahun) {
            filtered = filtered.filter(item => {
                const d = item.tanggalpemanfaatan || item.tanggalpembangunan;
                if (!d) return false;
                const dateObj = new Date(d);
                if (isNaN(dateObj.getTime())) return false;
                return dateObj.getFullYear() == tahun;
            });
        }

        if (limit !== 'all') {
            filtered = filtered.slice(0, parseInt(limit));
        }

        tbody.innerHTML = buildRows(filtered);
    }

    const modalPU = document.getElementById('modalRekapK03PU');
    if (modalPU) {
        modalPU.addEventListener('show.bs.modal', () => renderRekap('tbodyRekapPU', 'filterTahunPU', 'filterEntriesPU', 'PU'));
        document.getElementById('filterTahunPU').addEventListener('change', () => renderRekap('tbodyRekapPU', 'filterTahunPU', 'filterEntriesPU', 'PU'));
        document.getElementById('filterEntriesPU').addEventListener('change', () => renderRekap('tbodyRekapPU', 'filterTahunPU', 'filterEntriesPU', 'PU'));
    }

    const modalNONPU = document.getElementById('modalRekapK03NONPU');
    if (modalNONPU) {
        modalNONPU.addEventListener('show.bs.modal', () => renderRekap('tbodyRekapNONPU', 'filterTahunNONPU', 'filterEntriesNONPU', 'NONPU'));
        document.getElementById('filterTahunNONPU').addEventListener('change', () => renderRekap('tbodyRekapNONPU', 'filterTahunNONPU', 'filterEntriesNONPU', 'NONPU'));
        document.getElementById('filterEntriesNONPU').addEventListener('change', () => renderRekap('tbodyRekapNONPU', 'filterTahunNONPU', 'filterEntriesNONPU', 'NONPU'));
    }

    const modalSWASTA = document.getElementById('modalRekapK03SWASTA');
    if (modalSWASTA) {
        modalSWASTA.addEventListener('show.bs.modal', () => renderRekap('tbodyRekapSWASTA', 'filterTahunSWASTA', 'filterEntriesSWASTA', 'SWASTA'));
        document.getElementById('filterTahunSWASTA').addEventListener('change', () => renderRekap('tbodyRekapSWASTA', 'filterTahunSWASTA', 'filterEntriesSWASTA', 'SWASTA'));
        document.getElementById('filterEntriesSWASTA').addEventListener('change', () => renderRekap('tbodyRekapSWASTA', 'filterTahunSWASTA', 'filterEntriesSWASTA', 'SWASTA'));
    }
});

function cetakRekapData(printAreaId, title) {
    const printContent = document.getElementById(printAreaId).innerHTML;
    const printWindow = window.open('', '', 'height=800,width=1200');
    printWindow.document.write('<html><head><title>' + title + '</title>');
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

function downloadRekapExcel(tableId, filename) {
    const table = document.getElementById(tableId);
    const wb = XLSX.utils.table_to_book(table, { sheet: "Rekap K.03" });
    XLSX.writeFile(wb, filename + '.xlsx');
}
</script>

{{-- EXPORT EXCEL UTAMA --}}
<script>
function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
    const originalTable = document.getElementById(originalTableId);
    const rows = originalTable.querySelectorAll('tr.item-row');
    const header = ['No','Penyedia','Nama Pekerjaan','Nama Bangunan','No Kontrak','Lokasi','Tgl Pembangunan','Tgl Pemanfaatan','Umur Bangunan'];
    const aoa = [header];
    rows.forEach((row, i) => {
        const infoValues = row.querySelectorAll('.info-value');
        if (infoValues.length >= 8) {
            aoa.push([
                i + 1,
                infoValues[0].innerText.trim(),
                infoValues[4].innerText.trim(),
                infoValues[5].innerText.trim(),
                infoValues[1].innerText.trim(),
                infoValues[6].innerText.trim(),
                infoValues[2].innerText.trim(),
                infoValues[3].innerText.trim(),
                infoValues[7].innerText.trim()
            ]);
        }
    });
    const ws = XLSX.utils.aoa_to_sheet(aoa);
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Data Pemanfaatan");
    XLSX.writeFile(wb, filename + ".xlsx");
}
</script>

{{-- COMBO CHART --}}
<script>
(function () {
    'use strict';
    let barChartTahunan = null;
    function destroyBarChart() { if (barChartTahunan) { barChartTahunan.destroy(); barChartTahunan = null; } }
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
                { type: 'bar', label: 'Jumlah Data', data: values, backgroundColor: colors, borderColor: colors.map(c => c.replace('0.75', '1').replace('0.6', '1')), borderWidth: 1.5, borderRadius: 8, borderSkipped: false, barThickness: 'flex', maxBarThickness: 60, order: 2 },
                { type: 'line', label: 'Tren', data: values, borderColor: '#0f8f3a', backgroundColor: 'rgba(19, 168, 71, 0.1)', borderWidth: 3, fill: false, tension: 0.35, pointBackgroundColor: '#13A847', pointBorderColor: '#fff', pointBorderWidth: 2, pointRadius: 6, pointHoverRadius: 9, pointHoverBackgroundColor: '#fff', pointHoverBorderColor: '#13A847', pointHoverBorderWidth: 3, order: 1 }
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
                responsive: true, maintainAspectRatio: false, animation: { duration: 700, easing: 'easeOutQuart' }, interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: { display: false },
                    tooltip: { backgroundColor: 'rgba(15, 23, 42, 0.92)', titleFont: { size: 12, family: 'Poppins', weight: '700' }, bodyFont: { size: 11, family: 'Poppins' }, padding: 12, cornerRadius: 8, callbacks: { title: function (items) { return 'Tahun ' + items[0].label; }, label: function (c) { if (c.datasetIndex !== 0) return null; const pct = parseFloat(percents[c.dataIndex] || 0); let pctText = pct > 0 ? ' (+' + pct + '%)' : pct < 0 ? ' (' + pct + '%)' : ' (0%)'; return '  Total: ' + c.parsed.y + ' data' + pctText; } } }
                },
                scales: { x: { grid: { display: false }, ticks: { font: { size: 11, family: 'Poppins', weight: '700' }, color: '#334155' } }, y: { beginAtZero: true, ticks: { stepSize: 1, font: { size: 10, family: 'Poppins' }, color: '#64748b', padding: 8 }, grid: { color: 'rgba(203, 213, 225, 0.5)', drawBorder: false }, border: { display: false } } }
            }
        });
        renderLegendTahunan(labels, values, percents);
    }
    window.renderBarChartTahunan = renderBarChart;
    window.destroyBarChartTahunan = destroyBarChart;
    document.addEventListener('DOMContentLoaded', function () {
        renderBarChart(@json($tahunanLabels ?? []), @json($tahunanValues ?? []), @json($tahunanPercents ?? []));
    });
})();
</script>

{{-- LIVE SEARCH --}}
<script>
(function () {
    'use strict';
    const searchInput  = document.getElementById('searchInput');
    const tahunSelect  = document.getElementById('tahunSelect');
    const sektorSelect = document.getElementById('sektorSelect');
    const perPageSel   = document.getElementById('entries');
    const tbody        = document.getElementById('tabeltertibjakonpemanfaatansearc');
    const paginationW  = document.getElementById('paginationWrapper');
    if (!tbody) return;
    let debounceTimer = null;
    function buildFilterUrl() {
        const url = new URL(window.location.origin + '/betertibjakonpemanfaatan');
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
        fetch(fetchUrl, { headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' } })
        .then(res => { if (!res.ok) throw new Error('HTTP ' + res.status); return res.json(); })
        .then(data => {
            if (data.rows !== undefined) tbody.innerHTML = data.rows;
            if (data.pagination && paginationW) paginationW.innerHTML = data.pagination;
            if (data.statistik && sektorSelect) { Array.from(sektorSelect.options).forEach(function (opt) { if (opt.value && data.statistik[opt.value]) { opt.textContent = data.statistik[opt.value].penyedia + ' (' + data.statistik[opt.value].total + ')'; } }); }
            if (window.renderRadarCharts && data.chartLabels) window.renderRadarCharts(data.chartLabels, data.chartValues);
            if (data.grandTotal !== undefined) { const gtm = document.getElementById('grandTotalModal'); if (gtm) gtm.textContent = data.grandTotal; }
            if (window.renderBarChartTahunan && data.tahunanLabels) window.renderBarChartTahunan(data.tahunanLabels, data.tahunanValues, data.tahunanPercents);
            tbody.style.opacity = '1';
            window.history.replaceState({}, '', fetchUrl);
        })
        .catch(err => { console.error('Fetch error:', err); tbody.style.opacity = '1'; });
    }
    if (searchInput) { searchInput.addEventListener('input', function () { clearTimeout(debounceTimer); debounceTimer = setTimeout(function () { fetchData(null); }, 400); }); searchInput.addEventListener('keydown', function (e) { if (e.key === 'Enter') { e.preventDefault(); clearTimeout(debounceTimer); fetchData(null); } }); }
    if (tahunSelect)  tahunSelect.addEventListener('change',  function () { clearTimeout(debounceTimer); fetchData(null); });
    if (sektorSelect) sektorSelect.addEventListener('change', function () { clearTimeout(debounceTimer); fetchData(null); });
    if (perPageSel)   perPageSel.addEventListener('change',   function () { clearTimeout(debounceTimer); fetchData(null); });
    document.addEventListener('click', function (e) { const link = e.target.closest('#paginationWrapper .pagination a, .pagination a'); if (!link) return; e.preventDefault(); fetchData(link.href); window.scrollTo({ top: 0, behavior: 'smooth' }); });
    window.addEventListener('popstate', function () { fetchData(window.location.href); });
})();
</script>

{{-- CHART RADAR --}}
<script>
(function() {
    'use strict';
    let chartMini = null, chartFull = null;
    const PALETTE = ['#16A34A', '#4ADE80', '#15803D', '#14532D', '#22C55E', '#86EFAC', '#166534', '#BBF7D0'];
    function destroyCharts() { if (chartMini) { chartMini.destroy(); chartMini = null; } if (chartFull) { chartFull.destroy(); chartFull = null; } }
    function renderLegend(labels, values) {
        const wrap = document.getElementById('radarLegend');
        if (!wrap) return;
        if (!labels || labels.length === 0) { wrap.innerHTML = '<div class="radar-legend-item-new"><span class="label">Tidak ada data</span></div>'; return; }
        let html = '';
        labels.forEach(function (label, i) { const color = PALETTE[i % PALETTE.length]; html += '<div class="radar-legend-item-new" style="border-left:4px solid ' + color + ';"><span class="label">' + label + '</span><span class="value">' + values[i] + '</span></div>'; });
        const total = values.reduce((a, b) => a + (parseInt(b) || 0), 0);
        html += '<div class="radar-legend-item-new" style="border-left:4px solid #13A847; background:#f0fdf4;"><span class="label">Total</span><span class="value" id="grandTotalValue">' + total + '</span></div>';
        wrap.innerHTML = html;
    }
    function buildChartData(labels, values) {
        let safeLabels = labels.slice(), safeValues = values.slice();
        while (safeLabels.length < 3) { safeLabels.push(' '); safeValues.push(0); }
        return { labels: safeLabels, datasets: [{ label: 'Jumlah Penyedia', data: safeValues, backgroundColor: 'rgba(22, 163, 74, 0.20)', borderColor: 'rgba(22, 163, 74, 1)', borderWidth: 2, pointBackgroundColor: 'rgba(22, 163, 74, 1)', pointBorderColor: '#fff', pointBorderWidth: 2, pointRadius: 4, pointHoverRadius: 6 }] };
    }
    function renderCharts(labels, values) {
        if (typeof Chart === 'undefined') return;
        destroyCharts();
        const data = buildChartData(labels, values);
        const maxValue = Math.max(...values, 1);
        const miniCtx = document.getElementById('radarChartMini');
        if (miniCtx) { chartMini = new Chart(miniCtx, { type: 'radar', data: data, options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { r: { beginAtZero: true, grid: { color: 'rgba(22, 163, 74, 0.15)' }, angleLines: { color: 'rgba(22, 163, 74, 0.20)' }, ticks: { display: false }, pointLabels: { color: '#1A2B4A', font: { size: 11, weight: '700' } } } } } }); }
        const fullCtx = document.getElementById('radarChartFull');
        if (fullCtx) { chartFull = new Chart(fullCtx, { type: 'radar', data: data, options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false }, tooltip: { callbacks: { label: c => c.label.trim() + ': ' + c.parsed.r + ' penyedia' } } }, scales: { r: { beginAtZero: true, ticks: { stepSize: Math.ceil(maxValue / 5) || 1, backdropColor: 'transparent', color: '#6B7A93', font: { size: 10 } }, grid: { color: 'rgba(22, 163, 74, 0.15)' }, angleLines: { color: 'rgba(22, 163, 74, 0.20)' }, pointLabels: { color: '#1A2B4A', font: { size: 13, weight: '600' } } } } } }); }
        renderLegend(labels, values);
    }
    window.renderRadarCharts = renderCharts;
    window.destroyRadarCharts = destroyCharts;
    document.addEventListener('DOMContentLoaded', function () { renderCharts(@json($chartLabels ?? []), @json($chartValues ?? [])); });
})();
</script>

{{-- SCRIPT DELETE, CREATE, EDIT --}}
<script>
document.addEventListener('click', function (e) {
    const btn = e.target.closest('.delete-trigger');
    if (!btn) return;
    const deleteUrl = btn.getAttribute('data-url');
    const itemName  = btn.getAttribute('data-nama') || 'Data';
    const form   = document.getElementById('deleteForm');
    const nameEl = document.getElementById('itemName');
    if (form)   form.action = deleteUrl;
    if (nameEl) nameEl.textContent = itemName;
});

document.addEventListener('DOMContentLoaded', function () {
    const deleteForm = document.getElementById('deleteForm');
    if (!deleteForm) return;
    deleteForm.addEventListener('submit', function () {
        const modalEl = document.getElementById('deleteModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const instance = bootstrap.Modal.getInstance(modalEl);
            if (instance) instance.hide();
        }
    });
});

function openConfirmCreatePemanfaatanModal() {
    const modal = document.getElementById('confirmCreatePemanfaatanModal');
    if (modal) modal.style.display = 'flex';
}
function closeConfirmCreatePemanfaatanModal() {
    const modal = document.getElementById('confirmCreatePemanfaatanModal');
    if (modal) modal.style.display = 'none';
}
function submitCreatePemanfaatanForm() {
    closeConfirmCreatePemanfaatanModal();
    const form = document.getElementById('formCreateTertibPemanfaatan');
    if (form) form.submit();
}

function openConfirmEditPemanfaatanModal() {
    const modal = document.getElementById('confirmEditPemanfaatanModal');
    if (modal) modal.style.display = 'flex';
}
function closeConfirmEditPemanfaatanModal() {
    const modal = document.getElementById('confirmEditPemanfaatanModal');
    if (modal) modal.style.display = 'none';
}
function submitEditPemanfaatanForm() {
    closeConfirmEditPemanfaatanModal();
    const form = document.getElementById('formEditTertibPemanfaatan');
    if (form) form.submit();
}

document.addEventListener('click', function (e) {
    const btn = e.target.closest('.edit-trigger');
    if (!btn) return;
    e.preventDefault();

    let item;
    try {
        item = JSON.parse(btn.getAttribute('data-item') || '{}');
    } catch (err) {
        console.error('Gagal parse data-item:', err);
        return;
    }
    if (!item.id) return;

    const setVal = (id, val) => {
        const el = document.getElementById(id);
        if (el) el.value = val ?? '';
    };

    setVal('edit_penyediastatustertibjakon_id', item.penyediastatustertibjakon_id);
    setVal('edit_namapekerjaan', item.namapekerjaan);
    setVal('edit_namabangunan', item.namabangunan);
    setVal('edit_nomorkontrak', item.nomorkontrak);
    setVal('edit_lokasi', item.lokasi);
    setVal('edit_tanggalpembangunan', item.tanggalpembangunan);
    setVal('edit_tanggalpemanfaatan', item.tanggalpemanfaatan);
    setVal('edit_umurbangunan', item.umurbangunan);

    const formEdit = document.getElementById('formEditTertibPemanfaatan');
    if (formEdit) {
        formEdit.action = "{{ route('betertibjakonpemanfaatanupdatecreate', ':id') }}".replace(':id', item.id);
    }

    const modalEl = document.getElementById('editTertibPemanfaatanModal');
    if (modalEl && typeof bootstrap !== 'undefined') {
        bootstrap.Modal.getOrCreateInstance(modalEl).show();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const hasError = {{ $errors->any() ? 'true' : 'false' }};
    if (hasError) {
        const modalEl = document.getElementById('createTertibPemanfaatanModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            bootstrap.Modal.getOrCreateInstance(modalEl).show();
        }
    }
});
</script>

</body>
</html>