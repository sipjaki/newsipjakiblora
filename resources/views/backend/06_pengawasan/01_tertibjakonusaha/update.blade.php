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
                <a href="/betertibjakonusaha">
                    <button
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                    Kembali
                </button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('betertibjakonusahaupdatecreate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Changed from POST to PUT for updating -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->

                                    <div class="col-md-6">
                                        <!-- Nomor Induk Berusaha -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nib">
                                                <i class="bi bi-credit-card" style="margin-right: 10px; color: navy;"></i> Nomor Induk Berusaha
                                            </label>
                                            <input type="number" id="nib" name="nib" class="form-control @error('nib') is-invalid @enderror" value="{{ old('nib', $data->nib ?? '') }}" />
                                            @error('nib')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Nama Pekerjaan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namapekerjaan">
                                                <i class="bi bi-briefcase" style="margin-right: 10px; color: navy;"></i> Nama Pekerjaan
                                            </label>
                                            <input type="text" id="namapekerjaan" name="namapekerjaan" class="form-control @error('namapekerjaan') is-invalid @enderror" value="{{ old('namapekerjaan', $data->namapekerjaan ?? '') }}" />
                                            @error('namapekerjaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>



                                        <!-- Nama Asosiasi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="penyediastatustertibjakon_id">
                                                <i class="bi bi-person-check" style="margin-right: 10px; color: navy;"></i> Status Penyedia
                                            </label>
                                        <select id="penyediastatustertibjakon_id" name="penyediastatustertibjakon_id" class="form-control @error('penyediastatustertibjakon_id') is-invalid @enderror">
                                            <option value="">Pilih Status Penyedia</option>
                                            @foreach($datapenyedia as $penyedia)
                                                <option value="{{ $penyedia->id }}" {{ old('penyediastatustertibjakon_id', $data->penyediastatustertibjakon_id) == $penyedia->id ? 'selected' : '' }}>
                                                    {{ $penyedia->penyedia }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('penyediastatustertibjakon_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                    <!-- Tahun Pelaksanaan -->
                                            <div class="mb-3">
                                                <label class="form-label" for="tahunpelaksanaan">
                                                <i class="bi bi-calendar" style="margin-right: 10px; color: navy;"></i> Tahun Pelaksanaan
                                                </label>
                                                <select id="tahunpelaksanaan" name="tahunpelaksanaan" class="form-select @error('tahunpelaksanaan') is-invalid @enderror">
                                                <option value="">-- Pilih Tahun --</option>
                                                <option value="2024" {{ old('tahunpelaksanaan', $data->tahunpelaksanaan ?? '') == '2024' ? 'selected' : '' }}>2024</option>
                                                <option value="2025" {{ old('tahunpelaksanaan', $data->tahunpelaksanaan ?? '') == '2025' ? 'selected' : '' }}>2025</option>
                                                <option value="2026" {{ old('tahunpelaksanaan', $data->tahunpelaksanaan ?? '') == '2026' ? 'selected' : '' }}>2026</option>
                                                </select>
                                                @error('tahunpelaksanaan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        <!-- Nama Badan Usaha -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namabadanusaha">
                                                <i class="bi bi-building" style="margin-right: 10px; color: navy;"></i> Nama Badan Usaha
                                            </label>
                                            <input type="text" id="namabadanusaha" name="namabadanusaha" class="form-control @error('namabadanusaha') is-invalid @enderror" value="{{ old('namabadanusaha', $data->namabadanusaha ?? '') }}" />
                                            @error('namabadanusaha')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Penanggung Jawab Badan Usaha -->
                                        <div class="mb-3">
                                            <label class="form-label" for="pjbu">
                                                <i class="bi bi-person-lines-fill" style="margin-right: 10px; color: navy;"></i> Penanggung Jawab Badan Usaha
                                            </label>
                                            <input type="text" id="pjbu" name="pjbu" class="form-control @error('pjbu') is-invalid @enderror" value="{{ old('pjbu', $data->pjbu ?? '') }}" />
                                            @error('pjbu')
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
