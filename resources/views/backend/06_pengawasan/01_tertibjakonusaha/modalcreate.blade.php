{{-- ============================================================ --}}
{{-- MODAL: Buat Data Baru Tertib Usaha Jasa Konstruksi           --}}
{{-- ============================================================ --}}
<div class="modal fade" id="createTertibJakonModal" tabindex="-1"
     aria-labelledby="createTertibJakonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"
         style="max-width: 75%; width: 75%;">
        <div class="modal-content">

            {{-- HEADER --}}
            <div class="modal-header">
                <h5 class="modal-title" id="createTertibJakonModalLabel">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data Baru Tertib Usaha Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- FORM --}}
            <form action="{{ route('betertibjakonusahacreatenew') }}" method="POST"
                  enctype="multipart/form-data" id="formCreateTertibJakon">
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

                        {{-- KOLOM KIRI --}}
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
                                <label for="nib" class="form-label-modern">
                                    <i class="bi bi-123"></i>
                                    NIB <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="number" id="nib" name="nib"
                                       class="form-control @error('nib') is-invalid @enderror"
                                       value="{{ old('nib') }}"
                                       placeholder="Masukkan Nomor Induk Berusaha">
                                @error('nib')
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

                        </div>

                        {{-- KOLOM KANAN --}}
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="tahunpelaksanaan" class="form-label-modern">
                                    <i class="bi bi-calendar-event-fill"></i>
                                    Tahun Pelaksanaan <span style="color:#dc2626;">*</span>
                                </label>
                                <select id="tahunpelaksanaan" name="tahunpelaksanaan"
                                        class="form-select @error('tahunpelaksanaan') is-invalid @enderror">
                                    <option value="">-- Pilih Tahun --</option>
                                    @php
                                        $tahunSekarang = (int) date('Y');
                                        $tahunMulai    = $tahunSekarang - 3;
                                        $tahunAkhir    = $tahunSekarang + 4;
                                    @endphp
                                    @for ($th = $tahunAkhir; $th >= $tahunMulai; $th--)
                                        <option value="{{ $th }}"
                                            {{ old('tahunpelaksanaan') == $th ? 'selected' : '' }}>
                                            {{ $th }}
                                        </option>
                                    @endfor
                                </select>
                                @error('tahunpelaksanaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namabadanusaha" class="form-label-modern">
                                    <i class="bi bi-building"></i>
                                    Nama Badan Usaha <span style="color:#dc2626;">*</span>
                                </label>
                                <input type="text" id="namabadanusaha" name="namabadanusaha"
                                       class="form-control @error('namabadanusaha') is-invalid @enderror"
                                       value="{{ old('namabadanusaha') }}"
                                       placeholder="Masukkan nama badan usaha">
                                @error('namabadanusaha')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="pjbu" class="form-label-modern">
                                    <i class="bi bi-person-badge-fill"></i>
                                    Penanggung Jawab Badan Usaha (PJBU)
                                </label>
                                <input type="text" id="pjbu" name="pjbu"
                                       class="form-control @error('pjbu') is-invalid @enderror"
                                       value="{{ old('pjbu') }}"
                                       placeholder="Nama PJBU (opsional)">
                                @error('pjbu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>

                {{-- FOOTER --}}
                <div class="modal-footer">
                    <button type="button"
                            class="button-modern button-md"
                            onclick="closeCreateModal()">
                        <i class="bi bi-x-lg" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button"
                            class="button-baru button-md"
                            onclick="openConfirmCreateModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i>
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- MODAL: Konfirmasi Simpan                                     --}}
{{-- ============================================================ --}}
<div id="confirmCreateModal" class="confirm-create-overlay">
    <div class="confirm-create-box">
        <div class="confirm-create-icon">
            <i class="bi bi-question-circle-fill"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Simpan</h5>
        <p class="confirm-create-message">Apakah Anda ingin membuat data baru ini?</p>

        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmCreateModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" onclick="submitCreateForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Simpan
            </button>
        </div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- STYLE KHUSUS MODAL                                           --}}
{{-- ============================================================ --}}
<style>
#createTertibJakonModal .modal-dialog {
    max-width: 75%;
    width: 75%;
    margin: 1.75rem auto;
}
@media (max-width: 991.98px) {
    #createTertibJakonModal .modal-dialog { max-width: 95%; width: 95%; }
}

#createTertibJakonModal .modal-content {
    border-radius: 20px !important;
    border: none !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    overflow: hidden;
}

#createTertibJakonModal .modal-header {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    padding: 20px 28px !important;
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
    border-radius: 20px 20px 0 0 !important;
}
#createTertibJakonModal .modal-header .modal-title {
    margin: 0 !important;
    font-weight: 700 !important;
    font-size: 16px !important;
    color: #1a2b4a !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}
#createTertibJakonModal .modal-header .modal-title i {
    color: #13A847 !important;
    font-size: 20px !important;
}
#createTertibJakonModal .modal-header .btn-close {
    filter: none !important;
    opacity: 0.6 !important;
}
#createTertibJakonModal .modal-header .btn-close:hover { opacity: 1 !important; }

#createTertibJakonModal .modal-body {
    padding: 24px 28px !important;
    max-height: 70vh;
    overflow-y: auto;
    background: #ffffff !important;
}
#createTertibJakonModal .modal-body::-webkit-scrollbar { width: 8px; }
#createTertibJakonModal .modal-body::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
#createTertibJakonModal .modal-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

#createTertibJakonModal .form-label-modern {
    font-size: 13px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
#createTertibJakonModal .form-label-modern i {
    color: #13A847;
    font-size: 14px;
}

#createTertibJakonModal .form-control,
#createTertibJakonModal .form-select {
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
#createTertibJakonModal .form-select:focus {
    border-color: #13A847;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(19, 168, 71, 0.15);
    outline: none;
}
#createTertibJakonModal .form-control.is-invalid,
#createTertibJakonModal .form-select.is-invalid {
    border-color: #ef4444;
    background: #fef2f2;
}
#createTertibJakonModal .invalid-feedback {
    display: block;
    color: #dc2626;
    font-size: 11.5px;
    margin-top: 4px;
    font-weight: 600;
}
#createTertibJakonModal .mb-3 { margin-bottom: 14px; }

#createTertibJakonModal .modal-alert-error {
    background: #fef2f2;
    border: 1.5px solid #fecaca;
    border-radius: 10px;
    padding: 14px 16px;
    margin-bottom: 16px;
    color: #991b1b;
    font-size: 13px;
    font-weight: 600;
}
#createTertibJakonModal .modal-alert-error i {
    color: #dc2626;
    font-size: 16px;
    margin-right: 6px;
}
#createTertibJakonModal .modal-alert-error ul {
    margin: 6px 0 0 0;
    padding-left: 18px;
    font-weight: 500;
}
#createTertibJakonModal .modal-alert-error ul li {
    font-size: 12px;
    line-height: 1.5;
}

#createTertibJakonModal .modal-footer {
    background: #f8fafc !important;
    border-top: 1px solid #eaeaea !important;
    border-radius: 0 0 20px 20px !important;
    padding: 16px 28px !important;
    display: flex !important;
    justify-content: flex-end !important;
    gap: 10px !important;
}

/* CONFIRM CREATE */
.confirm-create-overlay {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(15, 23, 42, 0.6);
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.confirm-create-box {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    max-width: 420px;
    width: 90%;
    text-align: center;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
}
.confirm-create-icon {
    width: 80px;
    height: 80px;
    background: #dcfce7;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}
.confirm-create-icon i {
    font-size: 2.5rem;
    color: #13A847;
}
.confirm-create-title {
    font-weight: 800;
    color: #1a2b4a;
    margin-bottom: 10px;
    font-size: 16px;
}
.confirm-create-message {
    font-size: 0.95rem;
    color: #4a5a72;
    margin-bottom: 24px;
}
.confirm-create-actions {
    display: flex;
    gap: 10px;
    justify-content: center;
}
.confirm-btn {
    padding: 10px 20px;
    font-size: 13px;
    font-weight: 700;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.15s ease;
}
.confirm-btn-yes {
    background: #13A847;
    color: #ffffff;
}
.confirm-btn-yes:hover {
    background: #0f8f3a;
    transform: translateY(-1px);
}
.confirm-btn-no {
    background: #f1f5f9;
    color: #475569;
    border: 1.5px solid #cbd5e1;
}
.confirm-btn-no:hover {
    background: #e2e8f0;
}
</style>

{{-- ============================================================ --}}
{{-- SCRIPT — FIXED MODAL BUG                                     --}}
{{-- ============================================================ --}}
<script>
(function () {
    'use strict';

    /* ══════════════════════════════════════════════════════════
       CLEANUP: hapus semua sisa backdrop & reset body
       ══════════════════════════════════════════════════════════ */
    function cleanupModals() {
        // Hapus semua backdrop
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());

        // Reset body
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('overflow');
        document.body.style.removeProperty('padding-right');

        // Pastikan semua modal yang gak aktif ke-hide
        document.querySelectorAll('.modal').forEach(function (modalEl) {
            if (!modalEl.classList.contains('show')) {
                modalEl.style.display = 'none';
                modalEl.setAttribute('aria-hidden', 'true');
            }
        });
    }

    /* ══════════════════════════════════════════════════════════
       BUKA/TUTUP modal konfirmasi simpan (custom, bukan bootstrap)
       ══════════════════════════════════════════════════════════ */
    window.openConfirmCreateModal = function () {
        const modal = document.getElementById('confirmCreateModal');
        if (modal) modal.style.display = 'flex';
    };

    window.closeConfirmCreateModal = function () {
        const modal = document.getElementById('confirmCreateModal');
        if (modal) modal.style.display = 'none';
    };

    window.submitCreateForm = function () {
        const form = document.getElementById('formCreateTertibJakon');
        if (form) form.submit();
    };

    /* ══════════════════════════════════════════════════════════
       TUTUP modal create — versi PALING AMAN
       ══════════════════════════════════════════════════════════ */
    window.closeCreateModal = function () {
        const modalEl = document.getElementById('createTertibJakonModal');
        if (!modalEl) return;

        // 1) Kalau Bootstrap ada, pakai instance (atau buat baru lalu hide)
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            try {
                let instance = bootstrap.Modal.getInstance(modalEl);
                if (!instance) {
                    instance = new bootstrap.Modal(modalEl);
                }
                instance.hide();
            } catch (err) {
                console.warn('Bootstrap hide gagal, fallback manual:', err);
                forceHide(modalEl);
            }
        } else {
            forceHide(modalEl);
        }

        // 2) Selalu cleanup setelah delay kecil (biar animasi selesai)
        setTimeout(cleanupModals, 350);
    };

    /* ══════════════════════════════════════════════════════════
       FORCE HIDE — fallback manual kalau bootstrap bermasalah
       ══════════════════════════════════════════════════════════ */
    function forceHide(modalEl) {
        modalEl.classList.remove('show');
        modalEl.style.display = 'none';
        modalEl.setAttribute('aria-hidden', 'true');
        modalEl.removeAttribute('aria-modal');
    }

    /* ══════════════════════════════════════════════════════════
       AUTO-OPEN kalau ada error validasi dari server
       — pakai instance baru, TIDAK pakai new Bootstrap tiap kali
       ══════════════════════════════════════════════════════════ */
    document.addEventListener('DOMContentLoaded', function () {
        const hasError = {{ $errors->any() ? 'true' : 'false' }};
        if (!hasError) return;

        const modalEl = document.getElementById('createTertibJakonModal');
        if (!modalEl) return;

        // cleanup dulu untuk pastikan tidak ada backdrop sisa
        cleanupModals();

        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            try {
                let instance = bootstrap.Modal.getInstance(modalEl);
                if (!instance) {
                    instance = new bootstrap.Modal(modalEl);
                }
                instance.show();
            } catch (err) {
                console.warn('Auto-open gagal:', err);
                modalEl.classList.add('show');
                modalEl.style.display = 'block';
                modalEl.setAttribute('aria-hidden', 'false');
                document.body.classList.add('modal-open');
            }
        } else {
            modalEl.classList.add('show');
            modalEl.style.display = 'block';
            document.body.classList.add('modal-open');
        }
    });

    /* ══════════════════════════════════════════════════════════
       EVENT: setiap modal hidden → cleanup backdrop
       ══════════════════════════════════════════════════════════ */
    document.addEventListener('hidden.bs.modal', function () {
        // delay sedikit supaya animasi hide bootstrap selesai
        setTimeout(cleanupModals, 50);
    });

    /* ══════════════════════════════════════════════════════════
       FALLBACK: tombol dengan [data-bs-dismiss="modal"]
       — kalau Bootstrap gagal, kita handle manual
       ══════════════════════════════════════════════════════════ */
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('[data-bs-dismiss="modal"]');
        if (!btn) return;

        const modalEl = btn.closest('.modal');
        if (!modalEl) return;

        // Coba pakai bootstrap dulu
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            try {
                const instance = bootstrap.Modal.getInstance(modalEl);
                if (instance) {
                    // Biarkan bootstrap yang handle, tapi tetap cleanup nanti
                    setTimeout(cleanupModals, 400);
                    return;
                }
            } catch (err) {
                // lanjut ke fallback
            }
        }

        // Fallback
        e.preventDefault();
        forceHide(modalEl);
        setTimeout(cleanupModals, 50);
    }, true);

    /* ══════════════════════════════════════════════════════════
       ESC: tutup modal aktif + cleanup
       ══════════════════════════════════════════════════════════ */
    document.addEventListener('keydown', function (e) {
        if (e.key !== 'Escape') return;
        const activeModal = document.querySelector('.modal.show');
        if (!activeModal) return;

        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            try {
                const instance = bootstrap.Modal.getInstance(activeModal);
                if (instance) {
                    instance.hide();
                    setTimeout(cleanupModals, 400);
                    return;
                }
            } catch (err) {}
        }

        forceHide(activeModal);
        setTimeout(cleanupModals, 50);
    });

    /* ══════════════════════════════════════════════════════════
       INITIAL CLEANUP saat halaman load
       — kadang ada backdrop sisa dari render sebelumnya
       ══════════════════════════════════════════════════════════ */
    document.addEventListener('DOMContentLoaded', function () {
        // Kalau TIDAK ada modal aktif, pastikan backdrop bersih
        if (!document.querySelector('.modal.show')) {
            setTimeout(cleanupModals, 50);
        }
    });
})();
</script>