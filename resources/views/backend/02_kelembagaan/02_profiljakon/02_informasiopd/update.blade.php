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

    <!-- Menyertakan FontAwesome untuk ikon -->

    <div class="container-fluid">
        <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">

                    @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                           {{-- ======================================================= --}}
        {{-- ALERT --}}



        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">

                <a href="/beinfoopd">
                    <button
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             viewBox="0 0 16 16" style="margin-right: 8px;">
                          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                        </svg>

                        <span style="font-family: 'Poppins', sans-serif; font-size: 16px; line-height: 1.5;">
                            Kembali
                        </span>
                    </button>
                </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('update.beinfoopdupdatecreate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT jika Anda ingin menggunakan metode PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Nama OPD -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namaopd">
                                                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Nama OPD
                                            </label>
                                            <input type="text" id="namaopd" name="namaopd" class="form-control @error('namaopd') is-invalid @enderror" value="{{ old('namaopd', $data->namaopd) }}" />
                                            @error('namaopd')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Alamat OPD -->
                                        <div class="mb-3">
                                            <label class="form-label" for="alamatopd">
                                                <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> Alamat OPD
                                            </label>
                                            <textarea id="alamatopd" name="alamatopd" class="form-control @error('alamatopd') is-invalid @enderror" rows="4">{{ old('alamatopd', $data->alamatopd) }}</textarea>
                                            @error('alamatopd')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- RT/RW -->
                                        <div class="mb-3">
                                            <label class="form-label" for="rtrw">
                                                <i class="bi bi-house-door-door" style="margin-right: 8px; color: navy;"></i> RT/RW
                                            </label>
                                            <input type="text" id="rtrw" name="rtrw" class="form-control @error('rtrw') is-invalid @enderror" value="{{ old('rtrw', $data->rtrw) }}" />
                                            @error('rtrw')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kode Pos -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kodepos">
                                                <i class="bi bi-postage" style="margin-right: 8px; color: navy;"></i> Kode Pos
                                            </label>
                                            <input type="text" id="kodepos" name="kodepos" class="form-control @error('kodepos') is-invalid @enderror" value="{{ old('kodepos', $data->kodepos) }}" />
                                            @error('kodepos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kelurahan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kelurahan">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kelurahan
                                            </label>
                                            <input type="text" id="kelurahan" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ old('kelurahan', $data->kelurahan) }}" />
                                            @error('kelurahan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kecamatan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kecamatan">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kecamatan
                                            </label>
                                            <input type="text" id="kecamatan" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ old('kecamatan', $data->kecamatan) }}" />
                                            @error('kecamatan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Kota -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kota">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kota
                                            </label>
                                            <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota', $data->kota) }}" />
                                            @error('kota')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Provinsi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="provinsi">
                                                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Provinsi
                                            </label>
                                            <input type="text" id="provinsi" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ old('provinsi', $data->provinsi) }}" />
                                            @error('provinsi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Negara -->
                                        <div class="mb-3">
                                            <label class="form-label" for="negara">
                                                <i class="bi bi-globe" style="margin-right: 8px; color: navy;"></i> Negara
                                            </label>
                                            <input type="text" id="negara" name="negara" class="form-control @error('negara') is-invalid @enderror" value="{{ old('negara', $data->negara) }}" />
                                            @error('negara')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Posisi Geografis -->
                                        <div class="mb-3">
                                            <label class="form-label" for="posisigeografis">
                                                <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Posisi Geografis
                                            </label>
                                            <textarea id="posisigeografis" name="posisigeografis" class="form-control @error('posisigeografis') is-invalid @enderror" rows="4">{{ old('posisigeografis', $data->posisigeografis) }}</textarea>
                                            @error('posisigeografis')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tipe Dinas -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tipedinas">
                                                <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Tipe Dinas
                                            </label>
                                            <select id="tipedinas" name="tipedinas" class="form-control @error('tipedinas') is-invalid @enderror">
                                                <option value="" disabled selected>Pilih Tipe Dinas</option>
                                                <option value="A" {{ old('tipedinas', $data->tipedinas) == 'A' ? 'selected' : '' }}>A</option>
                                                <option value="B" {{ old('tipedinas', $data->tipedinas) == 'B' ? 'selected' : '' }}>B</option>
                                                <option value="C" {{ old('tipedinas', $data->tipedinas) == 'C' ? 'selected' : '' }}>C</option>
                                                <option value="D" {{ old('tipedinas', $data->tipedinas) == 'D' ? 'selected' : '' }}>D</option>
                                                <option value="E" {{ old('tipedinas', $data->tipedinas) == 'E' ? 'selected' : '' }}>E</option>
                                            </select>
                                            @error('tipedinas')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                                                        <!-- End Left Column -->
                                </div>
                                <!-- end row -->
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
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
