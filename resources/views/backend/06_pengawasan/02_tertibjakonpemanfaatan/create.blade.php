{{-- ============================================================ --}}
{{-- MODAL: Buat Data Baru Tertib Pemanfaatan                      --}}
{{-- ============================================================ --}}
<div class="modal fade" id="createTertibPemanfaatanModal" tabindex="-1"
     aria-labelledby="createTertibPemanfaatanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"
         style="max-width: 75%; width: 75%;">
        <div class="modal-content">

            {{-- HEADER --}}
            <div class="modal-header">
                <h5 class="modal-title" id="createTertibPemanfaatanModalLabel">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Data Baru Pemanfaatan Jasa Konstruksi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            {{-- FORM --}}
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

                        {{-- KOLOM KANAN --}}
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

                {{-- FOOTER --}}
                <div class="modal-footer">
                    <button type="button"
                            class="button-modern button-md"
                            onclick="closeCreatePemanfaatanModal()">
                        <i class="bi bi-x-lg" style="margin-right: 4px;"></i> Batal
                    </button>
                    <button type="button"
                            class="button-baru button-md"
                            onclick="openConfirmCreatePemanfaatanModal()">
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
<div id="confirmCreatePemanfaatanModal" class="confirm-create-overlay">
    <div class="confirm-create-box">
        <div class="confirm-create-icon">
            <i class="bi bi-question-circle-fill"></i>
        </div>
        <h5 class="confirm-create-title">Konfirmasi Simpan</h5>
        <p class="confirm-create-message">Apakah Anda ingin membuat data baru ini?</p>

        <div class="confirm-create-actions">
            <button type="button" class="confirm-btn confirm-btn-no" onclick="closeConfirmCreatePemanfaatanModal()">
                <i class="bi bi-x-circle-fill"></i> Batal
            </button>
            <button type="button" class="confirm-btn confirm-btn-yes" onclick="submitCreatePemanfaatanForm()">
                <i class="bi bi-check-circle-fill"></i> Ya, Simpan
            </button>
        </div>
    </div>
</div>
