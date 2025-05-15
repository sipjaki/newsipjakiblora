<style>
    .readonly {
    background-color: #f0f0f0 !important;
    color: #6c757d;
}
</style>

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
        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <button
    onclick="history.back()"
    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
    <!-- Ikon Kembali -->
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
    </svg>
    Kembali
</button>

        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('bepesertauploadsertifikatupload', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Changed from POST to PUT for updating -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <!-- Nama Lengkap -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namalengkap">
                                                <i class="bi bi-person" style="margin-right: 10px; color: navy;"></i> Nama Lengkap
                                            </label>
                                            <input type="text" id="namalengkap" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap', $data->namalengkap) }}" readonly style="background-color: #f0f0f0;"/>
                                            @error('namalengkap')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- NIK -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nik">
                                                <i class="bi bi-credit-card-2-front" style="margin-right: 10px; color: navy;"></i> NIK
                                            </label>
                                            <input type="text" id="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik', $data->nik) }}" readonly style="background-color: #f0f0f0;"/>
                                            @error('nik')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Jenis Kelamin -->
                                        <div class="mb-3">
                                            <label class="form-label" for="jeniskelamin">
                                                <i class="bi bi-gender-ambiguous" style="margin-right: 10px; color: navy;"></i> Jenis Kelamin
                                            </label>
                                            <select id="jeniskelamin" name="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror" readonly style="background-color: #f0f0f0;">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki-laki" {{ old('jeniskelamin', $data->jeniskelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="Perempuan" {{ old('jeniskelamin', $data->jeniskelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                            @error('jeniskelamin')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal Lahir -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggallahir">
                                                <i class="bi bi-calendar" style="margin-right: 10px; color: navy;"></i> Tanggal Lahir
                                            </label>
                                            <input type="date" id="tanggallahir" name="tanggallahir" class="form-control @error('tanggallahir') is-invalid @enderror" value="{{ old('tanggallahir', $data->tanggallahir) }}" readonly style="background-color: #f0f0f0;"/>

                                            @error('tanggallahir')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <!-- No Telepon -->
                                        <div class="mb-3">
                                            <label class="form-label" for="notelepon">
                                                <i class="bi bi-telephone" style="margin-right: 10px; color: navy;"></i> No Telepon
                                            </label>
                                            <input type="text" id="notelepon" name="notelepon" class="form-control readonly @error('notelepon') is-invalid @enderror" value="{{ old('notelepon', $data->notelepon) }}" readonly />
                                            @error('notelepon')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Instansi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="instansi">
                                                <i class="bi bi-building" style="margin-right: 10px; color: navy;"></i> Instansi
                                            </label>
                                            <input type="text" id="instansi" name="instansi" class="form-control readonly @error('instansi') is-invalid @enderror" value="{{ old('instansi', $data->instansi) }}" readonly />
                                            @error('instansi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Jenjang Pendidikan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="jenjangpendidikan_id">
                                                <i class="bi bi-mortarboard" style="margin-right: 10px; color: navy;"></i> Jenjang Pendidikan
                                            </label>
                                            <select id="jenjangpendidikan_id" name="jenjangpendidikan_id" class="form-control readonly @error('jenjangpendidikan_id') is-invalid @enderror" readonly>
                                                <option value="">-- Pilih Jenjang --</option>
                                                @foreach($jenjangpendidikan as $jp)
                                                    <option value="{{ $jp->id }}" {{ old('jenjangpendidikan_id', $data->jenjangpendidikan_id) == $jp->id ? 'selected' : '' }}>{{ $jp->jenjangpendidikan }}</option>
                                                @endforeach
                                            </select>
                                            @error('jenjangpendidikan_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- File Sertifikat -->
                                        <div class="mb-3">
                                            <label class="form-label" for="sertifikat">
                                                <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: navy;"></i> File Sertifikat (PDF)
                                            </label>
                                            <div style="margin-top: 10px;">
                                                @if($data->sertifikat && file_exists(public_path('storage/' . $data->sertifikat)))
                                                    <iframe src="{{ asset('storage/' . $data->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                @elseif($data->sertifikat)
                                                    <iframe src="{{ asset($data->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                @else
                                                    <button class="btn btn-sm btn-secondary" disabled>Data Belum Diupdate</button>
                                                @endif
                                            </div>
                                            <input type="file" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" />
                                            @error('sertifikat')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#920000'; this.style.color='white';"
                                    style="background-color: #920000; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                    <!-- Ikon SVG Pensil -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                 <path d="M4 0h8a2 2 0 0 1 2 2v12l-2-1-2 1-2-1-2 1-2-1V2a2 2 0 0 1 2-2z"/>
                                 <path d="M4.5 4a.5.5 0 0 0 0 1H7v1H5a.5.5 0 0 0 0 1h2v1H4.5a.5.5 0 0 0 0 1H7v1H4.5a.5.5 0 0 0 0 1H7v1h1v-7H4.5z"/>
                               </svg>
                               <span style="font-family: 'Poppins', sans-serif;">Terbitkan Sertifikat</span>

                                </button>
                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin menerbitkan sertifikat ini ?
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
