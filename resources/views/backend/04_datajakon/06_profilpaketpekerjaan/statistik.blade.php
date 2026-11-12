@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══ TOKENS — 3 warna: Hijau, Silver, Abu ═══ */
:root {
    --green: #13A847;
    --green-dark: #0e7a33;
    --green-soft: #f0fdf4;
    --green-line: #d1fae5;
    --silver: #94a3b8;
    --silver-soft: #e2e8f0;
    --gray: #64748b;
    --gray-dark: #475569;
    --ink: #1e293b;
    --ink-soft: #64748b;
    --line: #e5e7eb;
    --bg-soft: #f8fafc;
}

/* ═══ BACKGROUND ═══ */
.bg-3d-pattern {
    background-color: #f4f6f8;
    min-height: 100vh;
    padding-top: 16px;
    padding-bottom: 24px;
}

body, .app-wrapper {
    font-family: 'Poppins','Segoe UI',Tahoma,sans-serif;
    font-size: 13px;
    line-height: 1.5;
    color: var(--ink);
}

/* ═══ CARD ═══ */
.card-3d {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0,0,0,.05);
    margin-bottom: 16px;
}
.card-header-custom {
    background: #fff !important;
    border-bottom: 1px solid var(--line) !important;
    padding: 14px 18px !important;
    border-radius: 6px 6px 0 0 !important;
}

/* ═══ TOOLBAR ═══ */
.toolbar-actions {
    display: flex; flex-wrap: wrap;
    justify-content: space-between; align-items: center;
    gap: 8px;
    padding: 10px 12px;
    background: var(--bg-soft);
    border: 1px solid var(--line);
    border-radius: 4px;
    margin-top: 10px;
}
.badge-total {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 6px 10px;
    background: #fff;
    border: 1px solid var(--green-line);
    border-radius: 4px;
    font-size: 12px; font-weight: 700;
    color: var(--green-dark);
}
.badge-total i { color: var(--green); font-size: 13px; }
.badge-total .badge-total-number {
    background: var(--green);
    color: #fff;
    padding: 1px 6px;
    border-radius: 3px;
    font-size: 12px;
    font-weight: 800;
}
.action-buttons-group {
    display: flex; flex-wrap: wrap; gap: 6px; align-items: center;
}

/* ═══ TOGGLE TAB ═══ */
.statistik-toolbar {
    display: flex; flex-wrap: wrap; gap: 0;
    border: 1px solid var(--line);
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 12px;
    background: #fff;
}
.statistik-btn {
    flex: 1 1 auto;
    display: inline-flex; align-items: center; justify-content: center; gap: 6px;
    padding: 9px 14px;
    font-size: 12px !important; font-weight: 600;
    border: none;
    border-right: 1px solid var(--line);
    background: #fff;
    color: var(--ink-soft);
    cursor: pointer;
    transition: background .15s ease, color .15s ease;
    white-space: nowrap;
}
.statistik-btn:last-child { border-right: none; }
.statistik-btn:hover { background: var(--green-soft); color: var(--green-dark); }
.statistik-btn.active {
    background: var(--green);
    color: #fff;
}
.statistik-btn i { font-size: 13px; }

/* ═══ STATISTIK CONTENT ═══ */
.statistik-content {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 4px;
    padding: 12px;
}

/* ═══ STACK: atas tren, bawah data ═══ */
.chart-stack {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* ═══ KOTAK CHART ═══ */
.chart-box {
    background: #fff;
    border: 1px solid var(--line);
    border-radius: 4px;
    padding: 12px;
}
.chart-box-title {
    font-size: 11px;
    font-weight: 700;
    color: var(--ink);
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 10px;
    padding-bottom: 8px;
    border-bottom: 1px solid var(--line);
    display: flex; align-items: center; gap: 6px;
}
.chart-box-title i { color: var(--green); font-size: 13px; }

/* ═══ LINE CHART ═══ */
.line-chart-container {
    position: relative;
    width: 100%;
    height: 230px;
}
.empty-chart {
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    height: 230px;
    color: var(--ink-soft);
    font-size: 12px; font-weight: 600; gap: 6px;
}
.empty-chart i { font-size: 28px; color: #cbd5e1; }

/* ═══ BAR CHART — 2 KOLOM LABEL WRAP (FIX TERPOTONG) ═══ */
.bar-chart-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.bar-chart-item {
    display: grid;
    grid-template-columns: minmax(160px, 220px) 1fr 64px;
    align-items: center;
    gap: 10px;
    font-size: 12px;
}
.bar-chart-label {
    font-weight: 600;
    color: var(--ink);
    font-size: 12px;
    line-height: 1.35;
    word-break: break-word;
    overflow-wrap: anywhere;
    white-space: normal;
}
.bar-chart-bar {
    background: var(--silver-soft);
    border-radius: 3px;
    height: 20px;
    position: relative;
    overflow: hidden;
}
.bar-chart-bar-fill {
    height: 100%;
    border-radius: 3px;
    background: var(--green);
    transition: width .6s ease;
    min-width: 2px;
}
.bar-chart-count {
    text-align: right;
    display: flex; flex-direction: column; align-items: flex-end;
    gap: 1px;
    line-height: 1.1;
}
.bar-chart-count .number {
    font-size: 12px; font-weight: 800;
    color: var(--green-dark);
}
.bar-chart-count .percent {
    font-size: 10px;
    color: var(--gray);
    font-weight: 600;
}

/* ═══ BUTTON BASE ═══ */
.button-modern, .button-baru, .button-berkas,
.button-merah, .button-hijau, .button-data {
    font-size: 12px !important;
    line-height: 1.3;
    font-weight: 600;
    border-radius: 4px;
}

/* ═══ MODAL DELETE ═══ */
.modal-confirm-delete .modal-content {
    border-radius: 6px;
    border: 1px solid var(--line);
}
.modal-confirm-delete .modal-header {
    background: #fef2f2;
    border-bottom: 1px solid #fecaca;
    padding: 12px 16px;
}
.modal-confirm-delete .modal-body {
    padding: 24px 16px;
    text-align: center;
}
.modal-confirm-delete .modal-footer {
    background: var(--bg-soft);
    border-top: 1px solid var(--line);
    padding: 12px 16px;
    justify-content: center; gap: 8px;
}
.confirm-icon {
    width: 64px; height: 64px;
    background: #fee2e2;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 14px;
}
.confirm-icon i { font-size: 1.8rem; color: #ef4444; }
.confirm-title {
    font-size: 15px; font-weight: 700;
    color: var(--ink); margin-bottom: 6px;
}
.confirm-text { font-size: 12px; color: var(--ink-soft); margin: 0; }
.confirm-text strong { color: #dc2626; }

/* ═══ RESPONSIVE ═══ */
@media (max-width: 768px) {
    .toolbar-actions { flex-direction: column; align-items: stretch; }
    .action-buttons-group { width: 100%; }
    .action-buttons-group > * { flex: 1 1 auto; justify-content: center; }
    .statistik-btn { flex: 1 1 50%; border-bottom: 1px solid var(--line); }

    /* di mobile, label turun jadi 2 baris */
    .bar-chart-item {
        grid-template-columns: minmax(110px, 140px) 1fr 56px;
        gap: 8px;
    }
    .bar-chart-label { font-size: 11px; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

    @include('backend.00_administrator.00_baganterpisah.04_navbar')
    @include('backend.00_administrator.00_baganterpisah.03_sidebar')
    @include('button')

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
                <div class="row" style="margin-right:8px; margin-left:8px;">
                    <div class="card card-3d">
                        <div class="card-header card-header-custom">
                            @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                            <div class="toolbar-actions">
                                <div class="badge-total">
                                    <i class="bi bi-box-seam"></i>
                                    Total
                                    <span class="badge-total-number">{{ $data_totalpekerjaan ?? 0 }}</span>
                                    Paket
                                </div>
                                <div class="action-buttons-group">
                                    {{-- <a href="/bepaketpekerjaanrekap" class="button-modern button-md">
                                        <i class="bi bi-clipboard-data" style="margin-right:4px;"></i> Rekap
                                    </a> --}}
                                    <a href="/statistikprofilpekerjaan" class="button-modern button-md">
                                        <i class="bi bi-bar-chart-line" style="margin-right:4px;"></i> Statistik
                                    </a>
                                    <a href="/bepaketpekerjaan" class="button-modern button-md">
                                        <i class="bi bi-database" style="margin-right:4px;"></i> Data Lengkap
                                    </a>
                                    {{-- <a href="/bepaketpekerjaancreate" class="button-baru button-md">
                                        <i class="fa fa-plus" style="margin-right:4px;"></i> Tambah
                                    </a> --}}
                                </div>
                            </div>
                        </div>

                        <div class="card-body" style="padding:14px;">

                            {{-- Toggle Tab --}}
                            <div class="statistik-toolbar">
                                <button class="statistik-btn active" data-target="statistik1">
                                    <i class="bi bi-briefcase"></i> Jenis Pekerjaan
                                </button>
                                <button class="statistik-btn" data-target="statistik2">
                                    <i class="bi bi-card-checklist"></i> Status
                                </button>
                                <button class="statistik-btn" data-target="statistik3">
                                    <i class="bi bi-cash-stack"></i> Sumber Dana
                                </button>
                                <button class="statistik-btn" data-target="statistik4">
                                    <i class="bi bi-calendar2-week"></i> Tahun
                                </button>
                                <button class="statistik-btn" data-target="statistik5">
                                    <i class="bi bi-geo-alt"></i> Satuan Kerja
                                </button>
                            </div>

                            {{-- STATISTIK 1 --}}
                            <div id="statistik1" class="statistik-content" style="display:block;">
                                <div class="chart-stack">
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-graph-up-arrow"></i> Tren per Tahun
                                        </div>
                                        <div class="line-chart-container">
                                            <canvas id="chartJenisPerTahun"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-bar-chart-line"></i> Distribusi Jenis Pekerjaan
                                        </div>
                                        @if($data_statistik->count())
                                        <div class="bar-chart-list">
                                            @foreach($data_statistik->sortByDesc('jumlah')->values() as $item)
                                            <div class="bar-chart-item">
                                                <div class="bar-chart-label">{{ $item['jenis'] }}</div>
                                                <div class="bar-chart-bar">
                                                    <div class="bar-chart-bar-fill" style="width: {{ $item['persentase'] }}%;"></div>
                                                </div>
                                                <div class="bar-chart-count">
                                                    <span class="number">{{ $item['jumlah'] }}</span>
                                                    <span class="percent">{{ number_format($item['persentase'],1) }}%</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="empty-chart"><i class="bi bi-bar-chart"></i> Belum ada data</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- STATISTIK 2 --}}
                            <div id="statistik2" class="statistik-content" style="display:none;">
                                <div class="chart-stack">
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-graph-up-arrow"></i> Tren per Tahun
                                        </div>
                                        <div class="line-chart-container">
                                            <canvas id="chartStatusPerTahun"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-bar-chart-line"></i> Distribusi Status
                                        </div>
                                        @if($data_totalstatuspekerjaan->count())
                                        <div class="bar-chart-list">
                                            @foreach($data_totalstatuspekerjaan->sortByDesc('jumlah')->values() as $item)
                                            <div class="bar-chart-item">
                                                <div class="bar-chart-label">{{ $item['jenis'] }}</div>
                                                <div class="bar-chart-bar">
                                                    <div class="bar-chart-bar-fill" style="width: {{ $item['persentase'] }}%;"></div>
                                                </div>
                                                <div class="bar-chart-count">
                                                    <span class="number">{{ $item['jumlah'] }}</span>
                                                    <span class="percent">{{ number_format($item['persentase'],1) }}%</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="empty-chart"><i class="bi bi-bar-chart"></i> Belum ada data</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- STATISTIK 3 --}}
                            <div id="statistik3" class="statistik-content" style="display:none;">
                                <div class="chart-stack">
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-graph-up-arrow"></i> Tren per Tahun
                                        </div>
                                        <div class="line-chart-container">
                                            <canvas id="chartSumberdanaPerTahun"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-bar-chart-line"></i> Distribusi Sumber Dana
                                        </div>
                                        @if($data_sumberdana->count())
                                        <div class="bar-chart-list">
                                            @foreach($data_sumberdana->sortByDesc('jumlah')->values() as $item)
                                            <div class="bar-chart-item">
                                                <div class="bar-chart-label">{{ $item['jenis'] }}</div>
                                                <div class="bar-chart-bar">
                                                    <div class="bar-chart-bar-fill" style="width: {{ $item['persentase'] }}%;"></div>
                                                </div>
                                                <div class="bar-chart-count">
                                                    <span class="number">{{ $item['jumlah'] }}</span>
                                                    <span class="percent">{{ number_format($item['persentase'],1) }}%</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="empty-chart"><i class="bi bi-bar-chart"></i> Belum ada data</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- STATISTIK 4 --}}
                            <div id="statistik4" class="statistik-content" style="display:none;">
                                <div class="chart-stack">
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-graph-up-arrow"></i> Tren per Tahun
                                        </div>
                                        <div class="line-chart-container">
                                            <canvas id="chartTahunPerTahun"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-bar-chart-line"></i> Distribusi Tahun Pelaksanaan
                                        </div>
                                        @if($data_tahun->count())
                                        <div class="bar-chart-list">
                                            @foreach($data_tahun->sortByDesc('jumlah')->values() as $item)
                                            <div class="bar-chart-item">
                                                <div class="bar-chart-label">{{ $item['jenis'] }}</div>
                                                <div class="bar-chart-bar">
                                                    <div class="bar-chart-bar-fill" style="width: {{ $item['persentase'] }}%;"></div>
                                                </div>
                                                <div class="bar-chart-count">
                                                    <span class="number">{{ $item['jumlah'] }}</span>
                                                    <span class="percent">{{ number_format($item['persentase'],1) }}%</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="empty-chart"><i class="bi bi-bar-chart"></i> Belum ada data</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- STATISTIK 5 --}}
                            <div id="statistik5" class="statistik-content" style="display:none;">
                                <div class="chart-stack">
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-graph-up-arrow"></i> Tren per Tahun
                                        </div>
                                        <div class="line-chart-container">
                                            <canvas id="chartSatuankerjaPerTahun"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-box">
                                        <div class="chart-box-title">
                                            <i class="bi bi-bar-chart-line"></i> Distribusi Satuan Kerja
                                        </div>
                                        @if($data_satuankerja->count())
                                        <div class="bar-chart-list">
                                            @foreach($data_satuankerja->sortByDesc('jumlah')->values() as $item)
                                            <div class="bar-chart-item">
                                                <div class="bar-chart-label">{{ $item['jenis'] }}</div>
                                                <div class="bar-chart-bar">
                                                    <div class="bar-chart-bar-fill" style="width: {{ $item['persentase'] }}%;"></div>
                                                </div>
                                                <div class="bar-chart-count">
                                                    <span class="number">{{ $item['jumlah'] }}</span>
                                                    <span class="percent">{{ number_format($item['persentase'],1) }}%</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                        <div class="empty-chart"><i class="bi bi-bar-chart"></i> Belum ada data</div>
                                        @endif
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

{{-- MODAL HAPUS --}}
<div class="modal fade modal-confirm-delete" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-exclamation-triangle" style="color:#ef4444;margin-right:6px;"></i> Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="confirm-icon"><i class="bi bi-trash"></i></div>
                <h5 class="confirm-title">Yakin Ingin Menghapus?</h5>
                <p class="confirm-text">Data <strong id="itemName"></strong> akan dihapus permanen.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-modern" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" action="" style="margin:0;">
                    @csrf @method('DELETE')
                    <button type="submit" class="button-merah">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<script>
// ═══ TOGGLE TAB ═══
document.addEventListener('DOMContentLoaded', function () {
    const btns = document.querySelectorAll('.statistik-btn');
    const contents = document.querySelectorAll('.statistik-content');

    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            contents.forEach(c => c.style.display = 'none');
            const target = this.getAttribute('data-target');
            const targetEl = document.getElementById(target);
            if (targetEl) targetEl.style.display = 'block';
            btns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            setTimeout(function () {
                if (target === 'statistik1' && !window._chart1Rendered) renderChart1();
                if (target === 'statistik2' && !window._chart2Rendered) renderChart2();
                if (target === 'statistik3' && !window._chart3Rendered) renderChart3();
                if (target === 'statistik4' && !window._chart4Rendered) renderChart4();
                if (target === 'statistik5' && !window._chart5Rendered) renderChart5();
            }, 100);
        });
    });
});

// ═══ WARNA: HIJAU + SILVER + ABU ═══
const GREEN = '#13A847';
const SILVER = '#94a3b8';
const GRAY = '#64748b';
const GREEN_BG = 'rgba(19,168,71,0.12)';

// palet dataset line: hijau → silver → abu (rotasi 3 warna)
const datasetColors = [
    { border: GREEN,  bg: GREEN_BG },
    { border: SILVER, bg: 'rgba(148,163,184,0.15)' },
    { border: GRAY,   bg: 'rgba(100,116,139,0.15)' },
];

function buildLineChart(canvasId, labels, datasets) {
    const canvas = document.getElementById(canvasId);
    if (!canvas) return;

    const chartDatasets = datasets.map(function (ds, idx) {
        const c = datasetColors[idx % datasetColors.length];
        return {
            label: ds.label,
            data: ds.data,
            borderColor: c.border,
            backgroundColor: c.bg,
            borderWidth: 2,
            fill: idx === 0,        // hanya dataset pertama yang fill
            tension: 0.35,
            pointBackgroundColor: c.border,
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 4,
            pointHoverRadius: 6,
            pointHoverBorderWidth: 2,
        };
    });

    new Chart(canvas, {
        type: 'line',
        data: { labels: labels, datasets: chartDatasets },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: { intersect: false, mode: 'index' },
            plugins: {
                legend: {
                    display: chartDatasets.length > 1,
                    position: 'bottom',
                    labels: {
                        font: { size: 11, family: 'Poppins', weight: '600' },
                        usePointStyle: true, pointStyle: 'circle',
                        padding: 8, boxWidth: 8, boxHeight: 8,
                        color: '#475569'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(15,23,42,0.9)',
                    titleFont: { size: 12, family: 'Poppins', weight: '700' },
                    bodyFont: { size: 11, family: 'Poppins' },
                    padding: 8, cornerRadius: 4,
                    callbacks: {
                        title: ctx => 'Tahun ' + ctx[0].label,
                        label: ctx => '  ' + ctx.dataset.label + ': ' + ctx.raw + ' paket'
                    }
                }
            },
            scales: {
                x: {
                    grid: { display: false },
                    ticks: { font: { size: 11, family: 'Poppins', weight: '600' }, color: '#334155' }
                },
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1, font: { size: 10, family: 'Poppins' }, color: '#64748b', padding: 6 },
                    grid: { color: 'rgba(203,213,225,0.4)' },
                    border: { display: false }
                }
            }
        }
    });
}

function renderChart1() { window._chart1Rendered = true; buildLineChart('chartJenisPerTahun', {!! json_encode($chartJenisPerTahun['labels'] ?? []) !!}, {!! json_encode($chartJenisPerTahun['datasets'] ?? []) !!}); }
function renderChart2() { window._chart2Rendered = true; buildLineChart('chartStatusPerTahun', {!! json_encode($chartStatusPerTahun['labels'] ?? []) !!}, {!! json_encode($chartStatusPerTahun['datasets'] ?? []) !!}); }
function renderChart3() { window._chart3Rendered = true; buildLineChart('chartSumberdanaPerTahun', {!! json_encode($chartSumberdanaPerTahun['labels'] ?? []) !!}, {!! json_encode($chartSumberdanaPerTahun['datasets'] ?? []) !!}); }
function renderChart4() { window._chart4Rendered = true; buildLineChart('chartTahunPerTahun', {!! json_encode($chartTahunPerTahun['labels'] ?? []) !!}, {!! json_encode($chartTahunPerTahun['datasets'] ?? []) !!}); }
function renderChart5() { window._chart5Rendered = true; buildLineChart('chartSatuankerjaPerTahun', {!! json_encode($chartSatuankerjaPerTahun['labels'] ?? []) !!}, {!! json_encode($chartSatuankerjaPerTahun['datasets'] ?? []) !!}); }

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(renderChart1, 150);
});

function setDeleteUrl(button) {
    const id = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = id;
    document.getElementById('deleteForm').action = "/bepaketpekerjaan/delete/" + encodeURIComponent(id);
}
</script>

@include('backend.00_administrator.00_baganterpisah.02_footer')