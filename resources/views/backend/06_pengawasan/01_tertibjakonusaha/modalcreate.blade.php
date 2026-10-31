{{-- ============================================================ --}}
{{-- MODAL: Buat Data Baru Tertib Usaha Jasa Konstruksi           --}}
{{-- ============================================================ --}}
<div class="modal fade" id="createTertibJakonModal" tabindex="-1"
     aria-labelledby="createTertibJakonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         style="max-width: 65%; width: 65%;">
        <div class="modal-content">

            {{-- Header — style seragam --}}
            <div class="modal-header modal-header-create">
                <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                <h5 class="modal-title" id="createTertibJakonModalLabel"
                    style="font-weight: 800; color: #004d40;">
                    <i class="bi bi-plus-circle" style="margin-right: 8px;"></i>
                    Tambah Data Baru Tertib Usaha Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- Form --}}
            <form action="{{ route('betertibjakonusahacreatenew') }}" method="POST"
                  enctype="multipart/form-data" id="formCreateTertibJakon">
                @csrf

                <div class="modal-body" style="padding: 24px 28px;">

                    <div class="row">

                        {{-- Kolom Kiri --}}
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="penyediastatustertibjakon_id" class="form-label">
                                    <i class="bi bi-card-text" style="color: #800000;"></i> Sektor
                                </label>
                                <select id="penyediastatustertibjakon_id"
                                        name="penyediastatustertibjakon_id"
                                        class="form-control @error('penyediastatustertibjakon_id') is-invalid @enderror">
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
                                <label for="nib" class="form-label">
                                    <i class="bi bi-123" style="color: #800000;"></i> NIB
                                </label>
                                <input type="number" id="nib" name="nib"
                                       class="form-control @error('nib') is-invalid @enderror"
                                       value="{{ old('nib') }}">
                                @error('nib')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="namapekerjaan" class="form-label">
                                    <i class="bi bi-briefcase" style="color: #800000;"></i> Nama Pekerjaan
                                </label>
                                <input type="text" id="namapekerjaan" name="namapekerjaan"
                                       class="form-control @error('namapekerjaan') is-invalid @enderror"
                                       value="{{ old('namapekerjaan') }}">
                                @error('namapekerjaan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        {{-- Kolom Kanan --}}
                        <div class="col-md-6">



                            <div class="mb-3">
                                <label for="tahunpelaksanaan" class="form-label">
                                    <i class="bi bi-calendar-event" style="color: #800000;"></i> Tahun Pelaksanaan
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
                                <label for="namabadanusaha" class="form-label">
                                    <i class="bi bi-building" style="color: #800000;"></i> Nama Badan Usaha
                                </label>
                                <input type="text" id="namabadanusaha" name="namabadanusaha"
                                       class="form-control @error('namabadanusaha') is-invalid @enderror"
                                       value="{{ old('namabadanusaha') }}">
                                @error('namabadanusaha')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="pjbu" class="form-label">
                                    <i class="bi bi-person-badge" style="color: #800000;"></i> Penanggung Jawab Badan Usaha (PJBU)
                                </label>
                                <input type="text" id="pjbu" name="pjbu"
                                       class="form-control @error('pjbu') is-invalid @enderror"
                                       value="{{ old('pjbu') }}">
                                @error('pjbu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>

                {{-- Footer — style seragam --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button" class="button-hijau" onclick="openConfirmCreateModal()">
                        <i class="bi bi-save" style="margin-right: 5px;"></i>
                        <span style="font-family: 'Poppins', sans-serif;">Simpan</span>
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
        <p class="confirm-create-message">Apakah Anda ingin membuat data baru ?</p>

        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-yes" onclick="submitCreateForm()">
                <i class="bi bi-check-circle-fill"></i> Ya
            </button>
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmCreateModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
        </div>
    </div>
</div>


<script>
function openConfirmCreateModal() {
    const modal = document.getElementById('confirmCreateModal');
    if (modal) modal.style.display = 'flex';
}

function closeConfirmCreateModal() {
    const modal = document.getElementById('confirmCreateModal');
    if (modal) modal.style.display = 'none';
}

function submitCreateForm() {
    const form = document.getElementById('formCreateTertibJakon');
    if (form) form.submit();
}

// Auto-open modal kalau ada error validasi dari server
document.addEventListener('DOMContentLoaded', function () {
    const hasError = {{ $errors->any() ? 'true' : 'false' }};
    if (hasError) {
        const modalEl = document.getElementById('createTertibJakonModal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const modal = new bootstrap.Modal(modalEl);
            modal.show();
        }
    }
});
</script>
