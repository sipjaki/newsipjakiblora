@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
.bg-3d-pattern {
    background-color: #f4f7f6;
    background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
    background-size: 20px 20px;
    min-height: 100vh;
    padding-top: 20px;
    padding-bottom: 40px;
}

/* ==========================================
   WRAPPER BG HIJAU 3D DI BELAKANG STAT CARD
   ========================================== */
.stat-card-wrap {
    position: relative;
    border-radius: 18px;
    padding: 6px;
    background: linear-gradient(135deg, #065f46 0%, #10b981 50%, #34d399 100%);
    box-shadow:
        0 10px 30px -8px rgba(6, 95, 70, 0.5),
        0 6px 14px -4px rgba(0, 0, 0, 0.25),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
    margin-bottom: 18px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.stat-card-wrap:hover {
    transform: translateY(-3px);
    box-shadow:
        0 16px 40px -8px rgba(6, 95, 70, 0.6),
        0 10px 20px -6px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.stat-card-wrap::before {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: 22px;
    background: radial-gradient(circle at 30% 30%, rgba(52, 211, 153, 0.35), transparent 70%);
    z-index: 0;
    pointer-events: none;
}

/* stat card di dalam wrapper */
.stat-card {
    position: relative;
    z-index: 1;
    border-radius: 14px;
    padding: 20px;
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.15);
}
.stat-card-icon { font-size: 1.8rem; margin-bottom: 6px; opacity: .9; }
.stat-card-label {
    font-size: .75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: .6px;
    opacity: .9;
    margin-bottom: 4px;
}
.stat-card-value { font-size: 2rem; font-weight: 800; line-height: 1; margin: 0; }

/* varian warna gradient card DALAM */
.stat-card-kontraktor { background: linear-gradient(135deg, #059669 0%, #10b981 100%); }
.stat-card-konsultan  { background: linear-gradient(135deg, #0369a1 0%, #0ea5e9 100%); }
.stat-card-asosiasi   { background: linear-gradient(135deg, #b45309 0%, #f59e0b 100%); }

/* chart box */
.chart-box {
    background: #fff;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 6px 18px -6px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
}
.chart-box-title {
    font-size: .95rem;
    font-weight: 700;
    color: #1a2b4a;
    margin-bottom: 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f1f5f9;
}
.chart-box-title i { color: #13A847; margin-right: 6px; }

/* ── CHART SCROLL ── */
.chart-scroll {
    width: 100%;
    max-height: 380px;
    overflow-y: auto;
    overflow-x: hidden;
    padding-right: 6px;
    border-radius: 10px;
}
.chart-scroll::-webkit-scrollbar { width: 6px; }
.chart-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 6px; }
.chart-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 6px; }
.chart-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

.chart-inner {
    position: relative;
    width: 100%;
    min-height: 200px;
}

/* ── SELECT ASOSIASI ── */
.select-asosiasi {
    width: 100%;
    padding: 11px 14px;
    border: 2px solid #d8dde5;
    border-radius: 10px;
    font-size: 0.9rem;
    background: #fbfcfd;
    font-weight: 600;
    color: #1a2b4a;
    cursor: pointer;
    transition: all 0.25s ease;
}
.select-asosiasi:focus {
    border-color: #13A847;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(19, 168, 71, 0.15);
    outline: none;
}

/* ── TABLE DETAIL ── */
.table-responsive-custom {
    overflow-x: auto;
    width: 100%;
    border-radius: 10px;
}
.table-custom-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.82rem;
    min-width: 700px;
    white-space: nowrap;
}
.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 12px 10px !important;
    text-align: left;
    border-bottom: 2px solid #e2e8f0 !important;
}
.table-custom-modern tbody td {
    padding: 10px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: middle;
}
.table-custom-modern tbody tr:nth-child(odd) td { background-color: #ffffff !important; }
.table-custom-modern tbody tr:nth-child(even) td { background-color: #f1f5f9 !important; }
.table-custom-modern tbody tr:hover td {
    background-color: #bbf7d0 !important;
    border-bottom-color: #86efac !important;
}

/* fallback */
.chart-fallback {
    text-align: center;
    padding: 40px;
    color: #94a3b8;
}

@media (max-width: 768px) {
    .stat-card-value { font-size: 1.6rem; }
    .stat-card-icon { font-size: 1.4rem; }
    .chart-scroll { max-height: 280px; }
}
</style>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('backend.00_administrator.00_baganterpisah.04_navbar')
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
                    <div class="row" style="margin-right: 10px; margin-left: 10px;">

                        <!-- ========================================== -->
                        <!-- 3 STAT CARD (dengan BG hijau 3D)             -->
                        <!-- ========================================== -->
                        <div class="col-md-4">
                            <div class="stat-card-wrap">
                                <div class="stat-card stat-card-kontraktor">
                                    <div class="stat-card-icon"><i class="bi bi-building"></i></div>
                                    <div class="stat-card-label">BUJK Kontraktor</div>
                                    <p class="stat-card-value">{{ number_format($totalKontraktor ?? 0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card-wrap">
                                <div class="stat-card stat-card-konsultan">
                                    <div class="stat-card-icon"><i class="bi bi-person-workspace"></i></div>
                                    <div class="stat-card-label">BUJK Konsultan</div>
                                    <p class="stat-card-value">{{ number_format($totalKonsultan ?? 0) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card-wrap">
                                <div class="stat-card stat-card-asosiasi">
                                    <div class="stat-card-icon"><i class="bi bi-people-fill"></i></div>
                                    <div class="stat-card-label">Asosiasi</div>
                                    <p class="stat-card-value">{{ number_format($totalAsosiasi ?? 0) }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- ========================================== -->
                        <!-- HORIZONTAL BAR CHART + ANGKA DI UJUNG BAR    -->
                        <!-- ========================================== -->
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div class="chart-box-title">
                                    <i class="bi bi-bar-chart-fill"></i> Jumlah BUJK per Asosiasi
                                </div>
                                <div class="chart-scroll">
                                    <div class="chart-inner" id="chartInner">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ========================================== -->
                        <!-- DROPDOWN ASOSIASI + DETAIL BUJK             -->
                        <!-- ========================================== -->
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div class="chart-box-title">
                                    <i class="bi bi-list-ul"></i> Detail BUJK berdasarkan Asosiasi
                                </div>

                                <form method="GET" action="{{ url()->current() }}" style="margin-bottom: 18px;">
                                    <label for="asosiasi_id" style="font-weight: 600; font-size: 0.85rem; margin-bottom: 6px; display: block; color: #1a2b4a;">
                                        Pilih Asosiasi:
                                    </label>
                                    <select name="asosiasi_id" id="asosiasi_id" class="select-asosiasi" onchange="this.form.submit()">
                                        <option value="">-- Semua Asosiasi --</option>
                                        @foreach($statistikAsosiasi as $as)
                                            <option value="{{ $as['id'] }}" {{ $asosiasiTerpilihId == $as['id'] ? 'selected' : '' }}>
                                                {{ $as['namaasosiasi'] }} ({{ $as['total'] }} BUJK)
                                            </option>
                                        @endforeach
                                    </select>
                                </form>

                                @if($asosiasiTerpilihId)
                                    <!-- BUJK KONTRAKTOR -->
                                    <h6 style="font-weight: 700; margin-top: 20px; margin-bottom: 10px; color: #059669; font-size: 0.9rem;">
                                        <i class="bi bi-building"></i> BUJK Kontraktor ({{ $detailKontraktor->count() }})
                                    </h6>
                                    <div class="table-responsive-custom">
                                        <table class="table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Badan Usaha</th>
                                                    <th>Alamat</th>
                                                    <th>No Telepon</th>
                                                    <th>Email</th>
                                                    <th>NIB</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($detailKontraktor as $k)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $k->namalengkap ?? '-' }}</td>
                                                        <td>{{ $k->alamat ?? '-' }}</td>
                                                        <td>{{ $k->no_telepon ?? '-' }}</td>
                                                        <td>{{ $k->email ?? '-' }}</td>
                                                        <td>{{ $k->nomorindukberusaha ?? '-' }}</td>
                                                    </tr>
                                                @empty
                                                    <tr><td colspan="6" style="text-align:center; color:#94a3b8;">Tidak ada BUJK Kontraktor.</td></tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- BUJK KONSULTAN -->
                                    <h6 style="font-weight: 700; margin-top: 20px; margin-bottom: 10px; color: #0369a1; font-size: 0.9rem;">
                                        <i class="bi bi-person-workspace"></i> BUJK Konsultan ({{ $detailKonsultan->count() }})
                                    </h6>
                                    <div class="table-responsive-custom">
                                        <table class="table-custom-modern">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Badan Usaha</th>
                                                    <th>Alamat</th>
                                                    <th>No Telepon</th>
                                                    <th>Email</th>
                                                    <th>NIB</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($detailKonsultan as $k)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $k->namalengkap ?? '-' }}</td>
                                                        <td>{{ $k->alamat ?? '-' }}</td>
                                                        <td>{{ $k->no_telepon ?? '-' }}</td>
                                                        <td>{{ $k->email ?? '-' }}</td>
                                                        <td>{{ $k->nomorindukberusaha ?? '-' }}</td>
                                                    </tr>
                                                @empty
                                                    <tr><td colspan="6" style="text-align:center; color:#94a3b8;">Tidak ada BUJK Konsultan.</td></tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div style="text-align: center; padding: 24px; color: #94a3b8; font-size: 0.9rem;">
                                        <i class="bi bi-info-circle" style="font-size: 1.8rem; display: block; margin-bottom: 6px;"></i>
                                        Pilih asosiasi di atas untuk melihat daftar BUJK-nya
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {

        // ==========================================
        // 1. AMBIL DATA (aman dari error)
        // ==========================================
        var labels = [];
        var dataKontraktor = [];
        var dataKonsultan = [];

        try {
            labels         = {!! json_encode(collect($statistikAsosiasi ?? [])->pluck('namaasosiasi')->values()) !!};
            dataKontraktor = {!! json_encode(collect($statistikAsosiasi ?? [])->pluck('kontraktor')->values()) !!};
            dataKonsultan  = {!! json_encode(collect($statistikAsosiasi ?? [])->pluck('konsultan')->values()) !!};
        } catch (e) {
            console.error('Gagal ambil data:', e);
        }

        // ==========================================
        // 2. CEK CHART.JS
        // ==========================================
        if (typeof Chart === 'undefined') {
            document.getElementById('chartInner').innerHTML =
                '<div class="chart-fallback">' +
                '<i class="bi bi-exclamation-triangle" style="font-size:2rem;display:block;margin-bottom:8px;"></i>' +
                'Chart.js gagal dimuat. Cek koneksi internet.</div>';
            return;
        }

        // ==========================================
        // 3. CEK DATA KOSONG
        // ==========================================
        if (!labels || labels.length === 0) {
            document.getElementById('chartInner').innerHTML =
                '<div class="chart-fallback">' +
                '<i class="bi bi-inbox" style="font-size:2rem;display:block;margin-bottom:8px;"></i>' +
                'Belum ada data asosiasi</div>';
            return;
        }

        // ==========================================
        // 4. TINGGI DINAMIS
        // ==========================================
        var barHeight = 42; // per asosiasi
        var minHeight = 180;
        var dynamicH  = Math.max(minHeight, labels.length * barHeight);

        document.getElementById('chartInner').style.height = dynamicH + 'px';

        // ==========================================
        // 5. PLUGIN ANGKA DI UJUNG BAR
        // ==========================================
        const dataLabelsPlugin = {
            id: 'dataLabelsPlugin',
            afterDatasetsDraw(chart) {
                const { ctx } = chart;
                ctx.save();
                ctx.font = 'bold 10px Poppins, sans-serif';
                ctx.textAlign = 'left';
                ctx.textBaseline = 'middle';

                chart.data.datasets.forEach((dataset, i) => {
                    const meta = chart.getDatasetMeta(i);
                    meta.data.forEach((bar, index) => {
                        const value = dataset.data[index];
                        if (value === null || value === undefined || value === 0) return;

                        const x = bar.x;
                        const y = bar.y;
                        ctx.fillStyle = '#1a2b4a';
                        ctx.fillText(value, x + 6, y);
                    });
                });
                ctx.restore();
            }
        };

        // ==========================================
        // 6. RENDER CHART
        // ==========================================
        try {
            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                plugins: [dataLabelsPlugin],
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'BUJK Kontraktor',
                            data: dataKontraktor,
                            backgroundColor: '#10b981',
                            borderRadius: 5,
                            barThickness: 14,
                        },
                        {
                            label: 'BUJK Konsultan',
                            data: dataKonsultan,
                            backgroundColor: '#0ea5e9',
                            borderRadius: 5,
                            barThickness: 14,
                        }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: { duration: 400 },
                    layout: {
                        padding: { right: 36 }   // ruang untuk angka
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            ticks: { color: '#64748b', precision: 0, font: { size: 10 } },
                            grid: { color: '#f1f5f9' }
                        },
                        y: {
                            ticks: { color: '#1a2b4a', font: { size: 10.5 } },
                            grid: { display: false }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { boxWidth: 12, padding: 12, font: { size: 11 } }
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            padding: 10,
                            titleFont: { size: 12 },
                            bodyFont: { size: 11 }
                        }
                    }
                }
            });
        } catch (e) {
            console.error('Chart render error:', e);
            document.getElementById('chartInner').innerHTML =
                '<div class="chart-fallback">' +
                '<i class="bi bi-exclamation-triangle" style="font-size:2rem;display:block;margin-bottom:8px;"></i>' +
                'Gagal render chart: ' + e.message + '</div>';
        }
    });
    </script>

    @include('backend.00_administrator.00_baganterpisah.02_footer')