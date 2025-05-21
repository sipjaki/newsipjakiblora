
@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">

        <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">

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

        <br>
            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')

                           {{-- ======================================================= --}}


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
           <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bepengawasanbujk">
                    <button onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'" onmouseout="this.style.background='linear-gradient(45deg, #6c757d, #dee2e6)'; this.style.color='white'; this.style.transform='scale(1)'" style="background: linear-gradient(45deg, #6c757d, #dee2e6); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: all 0.3s ease; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/></svg>
                        Kembali</button>
            </a>
        </div>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form  action="{{ route('updatepengwasanbujknew', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">

<div class="row">
    <div class="col-md-6">
        <!-- Kode Proyek -->
        <div class="mb-3">
            <label class="form-label" for="kodeproyek">
                <i class="bi bi-hash" style="margin-right: 8px; color: navy;"></i> Kode Proyek
            </label>
            <input type="text" id="kodeproyek" name="kodeproyek" class="form-control" value="{{ $data->kodeproyek }}">
                   @error('kodeproyek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </div>

        <!-- Nama Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="namaperusahaan">
                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Nama Perusahaan
            </label>
            <input type="text" id="namaperusahaan" name="namaperusahaan" class="form-control" value="{{ $data->namaperusahaan }}">
                @error('namaperusahaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </div>

        <!-- Alamat Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="alamatperusahaan">
                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Alamat Perusahaan
            </label>
            <textarea id="alamatperusahaan" name="alamatperusahaan" class="form-control">{{ $data->alamatperusahaan }}</textarea>
        @error('alamatperusahaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </div>

        <!-- Status Modal -->
        <div class="mb-3">
            <label class="form-label" for="statusmodal">
                <i class="bi bi-currency-dollar" style="margin-right: 8px; color: navy;"></i> Status Modal
            </label>
            <input type="text" id="statusmodal" name="statusmodal" class="form-control" value="{{ $data->statusmodal }}">
        @error('statusmodal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </div>

        <!-- Jenis Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="jenisperusahaan">
                <i class="bi bi-diagram-3" style="margin-right: 8px; color: navy;"></i> Jenis Perusahaan
            </label>
            <input type="text" id="jenisperusahaan" name="jenisperusahaan" class="form-control" value="{{ $data->jenisperusahaan }}">
        @error('jenisperusahaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
        </div>

        <!-- NIB -->
        <div class="mb-3">
            <label class="form-label" for="nib">
                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> NIB
            </label>
            <input type="text" id="nib" name="nib" class="form-control" value="{{ $data->nib }}">
        @error('nib')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- KBLI -->
        <div class="mb-3">
            <label class="form-label" for="kbli">
                <i class="bi bi-code" style="margin-right: 8px; color: navy;"></i> KBLI
            </label>
            <input type="text" id="kbli" name="kbli" class="form-control" value="{{ $data->kbli }}">
                @error('kbli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Uraian KBLI -->
        <div class="mb-3">
            <label class="form-label" for="uraiankbli">
                <i class="bi bi-file-text" style="margin-right: 8px; color: navy;"></i> Uraian KBLI
            </label>
            <textarea id="uraiankbli" name="uraiankbli" class="form-control">{{ $data->uraiankbli }}</textarea>
                @error('uraiankbli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Sektor -->
        <div class="mb-3">
            <label class="form-label" for="sektor">
                <i class="bi bi-layers" style="margin-right: 8px; color: navy;"></i> Sektor
            </label>
            <input type="text" id="sektor" name="sektor" class="form-control" value="{{ $data->sektor }}">
                @error('sektor')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Alamat Proyek -->
        <div class="mb-3">
            <label class="form-label" for="alamatproyek">
                <i class="bi bi-geo" style="margin-right: 8px; color: navy;"></i> Alamat Proyek
            </label>
            <input type="text" id="alamatproyek" name="alamatproyek" class="form-control" value="{{ $data->alamatproyek }}">
                @error('alamatproyek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>
    </div>

    <div class="col-md-6">
        <!-- Wilayah -->
        <div class="mb-3">
            <label class="form-label" for="wilayah">
                <i class="bi bi-globe" style="margin-right: 8px; color: navy;"></i> Wilayah
            </label>
            <input type="text" id="wilayah" name="wilayah" class="form-control" value="{{ $data->wilayah }}">
                @error('wilayah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Luas Tanah -->
       <div class="mb-3">
    <label class="form-label" for="luastanah_view">
        <i class="bi bi-bounding-box" style="margin-right: 8px; color: navy;"></i> Luas Tanah (m²)
    </label>
    <input type="text" id="luastanah_view" class="form-control @error('luastanah') is-invalid @enderror"
        value="{{ old('luastanah', number_format($data->luastanah, 0, ',', '.')) }}" />
    <input type="hidden" id="luastanah" name="luastanah" value="{{ old('luastanah', $data->luastanah) }}">
    @error('luastanah')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<script>
    const inputLuasView = document.getElementById('luastanah_view');
    const inputLuasHidden = document.getElementById('luastanah');

    function formatRupiah(angka) {
        let number_string = angka.replace(/[^,\d]/g, '').toString();
        let split = number_string.split(',');
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            let separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        return split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
    }

    inputLuasView.addEventListener('input', function() {
        let raw = this.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        this.value = formatRupiah(raw);
        inputLuasHidden.value = raw;
    });

    window.addEventListener('DOMContentLoaded', () => {
        let oldValue = inputLuasView.value.replace(/\./g, '').replace(/[^0-9]/g, '');
        inputLuasHidden.value = oldValue;
        inputLuasView.value = formatRupiah(oldValue);
    });
</script>


        <!-- Tenaga Kerja -->
        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-people" style="margin-right: 8px; color: navy;"></i> Tenaga Kerja Indonesia (TKI)
            </label>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="tki_lakilaki" placeholder="Laki-laki" value="{{ $data->tki_lakilaki }}">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="tki_perempuan" placeholder="Perempuan" value="{{ $data->tki_perempuan }}">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-people-fill" style="margin-right: 8px; color: navy;"></i> Tenaga Kerja Asing (TKA)
            </label>
            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" name="tka_lakilaki" placeholder="Laki-laki" value="{{ $data->tka_lakilaki }}">
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="tka_perempuan" placeholder="Perempuan" value="{{ $data->tka_perempuan }}">
                </div>
            </div>
        </div>

        <!-- Resiko -->
        <div class="mb-3">
            <label class="form-label" for="resiko">
                <i class="bi bi-exclamation-triangle" style="margin-right: 8px; color: navy;"></i> Resiko
            </label>
            <input type="text" id="resiko" name="resiko" class="form-control" value="{{ $data->resiko }}">
                @error('resiko')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Sumber Data -->
        <div class="mb-3">
            <label class="form-label" for="sumberdata">
                <i class="bi bi-database" style="margin-right: 8px; color: navy;"></i> Sumber Data
            </label>
            <input type="text" id="sumberdata" name="sumberdata" class="form-control" value="{{ $data->sumberdata }}">
                @error('sumberdata')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Investasi -->
        <div class="mb-3">
            <label class="form-label" for="investasi">
                <i class="bi bi-cash" style="margin-right: 8px; color: navy;"></i> Investasi (Rp)
            </label>
            <input type="number" step="0.01" id="investasi" name="investasi" class="form-control" value="{{ $data->investasi }}">
                @error('investasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Skala Usaha -->
        <div class="mb-3">
            <label class="form-label" for="skalausahaperusahaan">
                <i class="bi bi-arrows-angle-expand" style="margin-right: 8px; color: navy;"></i> Skala Usaha Perusahaan
            </label>
            <input type="text" id="skalausahaperusahaan" name="skalausahaperusahaan" class="form-control" value="{{ $data->skalausahaperusahaan }}">
                    @error('skalausahaperusahaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <div class="mb-3">
            <label class="form-label" for="skalausahaproyek">
                <i class="bi bi-aspect-ratio" style="margin-right: 8px; color: navy;"></i> Skala Usaha Proyek
            </label>
            <input type="text" id="skalausahaproyek" name="skalausahaproyek" class="form-control" value="{{ $data->skalausahaproyek }}">
                @error('skalausahaproyek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- Kewenangan -->
        <div class="mb-3">
            <label class="form-label" for="kewenangankoordinator">
                <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> Kewenangan Koordinator
            </label>
            <input type="text" id="kewenangankoordinator" name="kewenangankoordinator" class="form-control" value="{{ $data->kewenangankoordinator }}">
                @error('kewenangankoordinator')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <div class="mb-3">
            <label class="form-label" for="kewenanganpengawas">
                <i class="bi bi-person-check" style="margin-right: 8px; color: navy;"></i> Kewenangan Pengawas
            </label>
            <input type="text" id="kewenanganpengawas" name="kewenanganpengawas" class="form-control" value="{{ $data->kewenanganpengawas }}">
                @error('kewenanganpengawas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>

        <!-- PSN -->
        <div class="mb-3">
            <label class="form-label" for="PSN">
                <i class="bi bi-patch-check" style="margin-right: 8px; color: navy;"></i> PSN
            </label>
            <input type="text" id="PSN" name="PSN" class="form-control" value="{{ $data->PSN }}">
                @error('PSN')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

        </div>
    </div>
</div>

<div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                    style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                    <!-- Ikon SVG Pensil -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                      <path d="M15.502 1.94a1.5 1.5 0 0 1 0 2.12L5.207 14.354a1 1 0 0 1-.39.243l-4 1.5a.5.5 0 0 1-.641-.641l1.5-4a1 1 0 0 1 .243-.39L13.44.44a1.5 1.5 0 0 1 2.12 0zm-2.121 1.415L4.854 11.882l-.708 2.122 2.121-.707L15.5 3.354l-2.12-2.121z"/>
                                    </svg>

                                    <span style="font-family: 'Poppins', sans-serif;">Update</span>
                                </button>
                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin memperbarui data ini?
                                    </p>

                                      <!-- Tombol -->
                                      <div style="display: flex; justify-content: center; gap: 12px;">
                                        <button id="confirmSubmitBtn"
                                        onclick="submitForm()"
                                        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <!-- Telegram SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                        <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                    </svg>
                                    Ya, Update
                                </button>

                                <!-- Tombol Batal dengan ikon X (SVG) -->
                                <button type="button"
                                        onclick="closeModal()"
                                        style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                        onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                        <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                    </svg>
                                    Batal
                                </button>

                                      </div>
                                    </div>
                                </div>

                                <!-- Script -->
                                <script>
                                function openModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "flex";
                                }

                                function closeModal() {
                                    const modal = document.getElementById("confirmModal");
                                    if (modal) modal.style.display = "none";
                                }

                                </script>

                            </div>


                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->
                        </form>


                                                     </div>
                        <!--end::Quick Example-->

                    </div>
                    <br><br>
                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

        </div>
        <!--end::Row-->
        </div>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
        </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
