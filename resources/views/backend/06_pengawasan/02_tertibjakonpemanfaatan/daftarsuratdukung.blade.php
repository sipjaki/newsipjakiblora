@include('backend.00_administrator.00_baganterpisah.01_header')

<style>
/* ═══════════════════════════════════════════════════════
   BACKGROUND PUTIH + TINT HIJAU TRANSPARAN + TITIK
   ═══════════════════════════════════════════════════════ */
.bg-3d-pattern {
    background-color: #ffffff;
    background-image:
        radial-gradient(rgba(19, 168, 71, 0.25) 2px, transparent 2px),
        linear-gradient(180deg, rgba(19, 168, 71, 0.06) 0%, rgba(19, 168, 71, 0.01) 100%);
    background-size: 24px 24px, 100% 100%;
    background-attachment: fixed;
    background-position: center top;
    min-height: 100vh;
    padding: 24px 0 48px;
    position: relative;
    overflow: hidden;
}
.bg-3d-pattern > * { position: relative; z-index: 1; }

/* GLASS CARD */
.glass-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid #cbd5e1;
    border-radius: 20px;
    box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.1), 0 4px 6px -2px rgba(15, 23, 42, 0.05);
    transition: all 0.3s ease;
    overflow: hidden;
}

.glass-card-header {
    background: transparent !important;
    border-bottom: 1px solid #e2e8f0 !important;
    padding: 20px 24px !important;
}

/* BANNER TITLE */
.berkas-title-banner {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 16px 20px;
    margin-bottom: 16px;
    margin-top: 8px;
    background: linear-gradient(135deg, #13A847 0%, #0f8f3a 100%);
    border-radius: 14px;
    box-shadow: 0 8px 20px -4px rgba(19, 168, 71, 0.35);
    position: relative;
    overflow: hidden;
}
.berkas-title-banner::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(255,255,255,0.15), transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}
.berkas-title-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.18);
    border: 1px solid rgba(255, 255, 255, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 22px;
    flex-shrink: 0;
    backdrop-filter: blur(4px);
}
.berkas-title-text { flex: 1; min-width: 0; }
.berkas-title-label {
    font-size: 10px; font-weight: 800;
    color: rgba(255, 255, 255, 0.85);
    text-transform: uppercase; letter-spacing: 1px;
    margin-bottom: 2px;
}
.berkas-title-name {
    font-size: 16px; font-weight: 800;
    color: #ffffff; line-height: 1.3;
    word-wrap: break-word;
}
.berkas-title-count {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 6px 12px;
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 20px;
    color: #ffffff; font-size: 12px; font-weight: 700;
    white-space: nowrap; flex-shrink: 0;
}

/* TABLE MODERN */
.table-responsive-custom {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    width: 100%;
    border-radius: 0 0 20px 20px;
}
.table-custom-modern {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.85rem;
    min-width: 1100px;
}
.table-custom-modern thead th {
    background: #f8fafc !important;
    color: #4a5a72 !important;
    font-weight: 700;
    padding: 15px 12px !important;
    text-align: center;
    border-bottom: 2px solid #e2e8f0 !important;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}
.table-custom-modern tbody td {
    padding: 14px 12px !important;
    color: #1a2b4a;
    border-bottom: 1px solid #f1f5f9 !important;
    vertical-align: top;
}
.table-custom-modern tbody tr:nth-child(odd) td { background-color: #ffffff !important; }
.table-custom-modern tbody tr:nth-child(even) td { background-color: #f8fafc !important; }
.table-custom-modern tbody tr:hover td {
    background-color: #f0fdf4 !important;
    border-bottom-color: #86efac !important;
}
.table-custom-modern tbody tr.empty-row:hover td {
    background-color: #ffffff !important;
    cursor: default;
}

/* PDF VIEWER */
.pdf-viewer-wrap {
    background: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    min-height: 320px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px;
}
.pdf-viewer-wrap iframe {
    width: 100%;
    height: 300px;
    border: none;
    border-radius: 6px;
    background: #fff;
}

.pdf-empty {
    padding: 30px 20px;
    text-align: center;
    color: #94a3b8;
    font-size: 13px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
}
.pdf-empty i {
    font-size: 2rem;
    color: #cbd5e1;
}

/* EMPTY STATE */
.empty-state {
    padding: 60px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}
.empty-icon {
    width: 80px; height: 80px; border-radius: 50%;
    background: #FEF2F2; border: 2px dashed #ef4444;
    color: #ef4444; display: flex;
    align-items: center; justify-content: center;
    font-size: 2rem; margin-bottom: 8px;
}
.empty-title { font-size: 16px; font-weight: 700; color: #1A2B4A; margin: 8px 0 0 0; }
.empty-desc  { font-size: 13px; color: #6B7A93; margin: 0; }

/* ACTION BUTTON */
.action-group {
    display: flex;
    justify-content: center;
    gap: 6px;
    flex-wrap: wrap;
}

/* MODAL KTP */
.modal-content.ktp-modern {
    border-radius: 20px !important;
    border: none !important;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
.modal-content.ktp-modern .modal-header {
    background: #f0fdf4 !important;
    border-bottom: 1px solid #bbf7d0 !important;
    padding: 16px 22px !important;
}
.modal-content.ktp-modern .modal-header p {
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 0 8px;
    font-size: 13px;
}

@media (max-width: 768px) {
    .glass-card-header { padding: 16px 18px !important; }
    .glass-card { border-radius: 16px; }
    .berkas-title-count { display: none; }
}
</style>

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')
@include('button')
@include('backend.00_administrator.00_baganterpisah.03_sidebar')

<main class="app-main">
<section class="bg-3d-pattern">

    {{-- HEADER --}}
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
                @include('backend.00_administrator.00_baganterpisah.11_alert')
            </div>
        </div>
    </div>

    {{-- MAIN CONTENT --}}
    <div class="container-fluid">
        <div class="row" style="margin-right: 10px; margin-left:10px;">
            <div class="col-md-12">
                <div class="card mb-4 glass-card">

                    <div class="card-header glass-card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                        {{-- TOOLBAR --}}
                        <div style="display: flex; justify-content: flex-end; margin-bottom: 14px; gap: 8px;">
                            <a href="/betertibjakonpemanfaatan">
                                <button class="button-modern button-md">
                                    <i class="bi bi-arrow-left" style="margin-right: 6px;"></i>
                                    Kembali
                                </button>
                            </a>
                        </div>

                        {{-- BANNER TITLE --}}
                        <div class="berkas-title-banner">
                            <div class="berkas-title-icon">
                                <i class="bi bi-folder2-open"></i>
                            </div>
                            <div class="berkas-title-text">
                                <div class="berkas-title-label">Berkas Dukung</div>
                                <div class="berkas-title-name">Pengawasan Pemanfaatan Jasa Konstruksi</div>
                            </div>
                            <div class="berkas-title-count">
                                <i class="bi bi-files"></i>
                                {{ $data->count() }} Berkas
                            </div>
                        </div>
                    </div>

                    {{-- TABLE --}}
                    <div class="card-body p-0">
                        <div class="table-responsive-custom">
                            <table id="tabelBujkkonstruksi" class="table-custom-modern">
                                <thead>
                                    <tr>
                                        <th style="width: 60px; text-align:center;">
                                            <i class="bi bi-list-ol"></i> No
                                        </th>
                                        <th style="width: 350px; text-align:center;">
                                            <i class="bi bi-file-earmark-pdf"></i> Pengawasan Pemanfaatan
                                        </th>
                                        <th style="width: 350px; text-align:center;">
                                            <i class="bi bi-file-earmark-pdf"></i> Pengawasan Rencana Umur Konstruksi & Kapasitas Beban
                                        </th>
                                        <th style="width: 350px; text-align:center;">
                                            <i class="bi bi-file-earmark-pdf"></i> Pengawasan Pemeliharaan Konstruksi & Struktur
                                        </th>
                                        <th style="width: 120px; text-align:center;">
                                            <i class="bi bi-gear-fill"></i> Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @forelse ($data as $item)
                                        <tr class="align-middle">
                                            <td style="text-align: center; font-weight: 700;">{{ $loop->iteration }}</td>

                                            {{-- 1. Pengawasan Pemanfaatan --}}
                                            <td>
                                                <div class="pdf-viewer-wrap">
                                                    @if($item->lingkuppengawasan && file_exists(public_path('storage/' . $item->lingkuppengawasan)))
                                                        <iframe src="{{ asset('storage/' . $item->lingkuppengawasan) }}"></iframe>
                                                    @elseif($item->lingkuppengawasan)
                                                        <iframe src="{{ asset($item->lingkuppengawasan) }}"></iframe>
                                                    @else
                                                        <div class="pdf-empty">
                                                            <i class="bi bi-file-earmark-x"></i>
                                                            <span>Data belum diupdate</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>

                                            {{-- 2. Pengawasan Rencana Umur --}}
                                            <td>
                                                <div class="pdf-viewer-wrap">
                                                    @if($item->indikator && file_exists(public_path('storage/' . $item->indikator)))
                                                        <iframe src="{{ asset('storage/' . $item->indikator) }}"></iframe>
                                                    @elseif($item->indikator)
                                                        <iframe src="{{ asset($item->indikator) }}"></iframe>
                                                    @else
                                                        <div class="pdf-empty">
                                                            <i class="bi bi-file-earmark-x"></i>
                                                            <span>Data belum diupdate</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>

                                            {{-- 3. Pengawasan Pemeliharaan --}}
                                            <td>
                                                <div class="pdf-viewer-wrap">
                                                    @if($item->dokumendiperiksa && file_exists(public_path('storage/' . $item->dokumendiperiksa)))
                                                        <iframe src="{{ asset('storage/' . $item->dokumendiperiksa) }}"></iframe>
                                                    @elseif($item->dokumendiperiksa)
                                                        <iframe src="{{ asset($item->dokumendiperiksa) }}"></iframe>
                                                    @else
                                                        <div class="pdf-empty">
                                                            <i class="bi bi-file-earmark-x"></i>
                                                            <span>Data belum diupdate</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>

                                            {{-- 4. Aksi --}}
                                            <td style="text-align: center; vertical-align: middle;">
                                                <div class="action-group">
                                                    <a href="javascript:void(0)"
                                                       class="button-merah button-md"
                                                       title="Delete"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#deleteModal"
                                                       data-judul="{{ $item->id }}"
                                                       onclick="setDeleteUrl(this)">
                                                        <i class="bi bi-trash"></i> Hapus
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="empty-row">
                                            <td colspan="5">
                                                <div class="empty-state">
                                                    <div class="empty-icon">
                                                        <i class="bi bi-folder-x"></i>
                                                    </div>
                                                    <h5 class="empty-title">Data Tidak Ditemukan</h5>
                                                    <p class="empty-desc">Berkas dukung pengawasan belum diupload.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br><br>

        {{-- PAGINATION --}}
        @include('backend.00_administrator.00_baganterpisah.07_paginations')

    </div>

</section>
</main>
</div>
</div>

{{-- ═══════════════════════════════════════════════════ --}}
{{-- MODAL HAPUS                                       --}}
{{-- ═══════════════════════════════════════════════════ --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 20px; border: none; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
            <div class="modal-header" style="background: #fef2f2; border-bottom: 1px solid #fecaca; border-radius: 20px 20px 0 0; padding: 20px 25px;">
                <h5 class="modal-title" id="deleteModalLabel" style="font-weight: 700; color: #991b1b;">
                    <i class="bi bi-exclamation-triangle-fill" style="margin-right:8px;"></i> Konfirmasi Hapus !
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 30px; text-align: center;">
                <div style="width: 80px; height: 80px; background: #fee2e2; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; color: #ef4444;"></i>
                </div>
                <h5 style="font-weight: 700; color: #1a2b4a; margin-bottom: 10px;">Apakah Anda Yakin?</h5>
                <p style="font-size: 0.95rem; color: #4a5a72; margin: 0;">Data <strong id="itemName"></strong> akan dihapus dan tidak dapat dikembalikan.</p>
            </div>
            <div class="modal-footer" style="background: #f8fafc; border-top: 1px solid #eaeaea; border-radius: 0 0 20px 20px; padding: 15px 25px; justify-content: center; gap: 12px;">
                <button type="button" class="button-modern button-md" data-bs-dismiss="modal">
                    <i class="bi bi-x"></i> Batal
                </button>
                <form id="deleteForm" method="POST" action="" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-merah button-md">
                        <i class="bi bi-trash"></i> Hapus Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('backend.00_administrator.00_baganterpisah.02_footer')

<script>
function setDeleteUrl(button) {
    var id = button.getAttribute('data-judul');
    document.getElementById('itemName').innerText = id;
    var deleteUrl = "/buktidukungindex/delete/" + encodeURIComponent(id);
    document.getElementById('deleteForm').action = deleteUrl;
}

/* EXPORT EXCEL */
function exportTableToExcel(tableID, filename = '') {
    var table = document.getElementById(tableID);
    var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
    return XLSX.writeFile(wb, filename + '.xlsx');
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

</body>
</html>