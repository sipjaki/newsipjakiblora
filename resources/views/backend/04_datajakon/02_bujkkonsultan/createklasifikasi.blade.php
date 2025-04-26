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

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.13_judulcreate')
                    </div>



                           {{-- ======================================================= --}}
                           <div class="card card-primary card-outline mb-6">
                            <div style="display: flex; justify-content: space-between; margin-top: 10px;">
                                <!-- Tombol Kiri -->
                                <button
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#7105ec'; this.style.color='white';"
                                    style="background-color: #7105ec; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none; margin-left: 15px; margin-right: 15px; margin-bottom: 15px;">
                                    <!-- Ikon File -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" style="margin-right: 8px;">
                                        <path d="M4 0h5.5L14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM9.5 1v3a1 1 0 0 0 1 1h3l-4-4z"/>
                                    </svg>
                                    Badan Usaha : {{ $bujkkontraktornamalengkap }}
                                </button>

                                <!-- Tombol Kanan -->
                                <a href="/bebujkkonstruksi">
                                    <button
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                        style="background-color: #374151; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none; margin-left: 15px; margin-right: 15px; margin-bottom: 15px;">
                                        <!-- Ikon Kembali -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                        </svg>
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        </div>

        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('bebujkkonsultan.createklasifikasicreate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">

                                        <!-- ID BUJK Kontraktor (Hidden atau Select jika mau pilih) -->
                                        <input type="hidden"  name="bujkkontraktor_id" value="{{ $bujkkontraktor_id }}">
                                        <!-- Nama Pengurus -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nama_pengurus">
                                                <i class="bi bi-person" style="margin-right:8px; color:navy;"></i> Nama Pengurus
                                            </label>
                                            <input type="text" id="nama_pengurus" name="nama_pengurus" class="form-control @error('nama_pengurus') is-invalid @enderror" value="{{ old('nama_pengurus') }}">
                                            @error('nama_pengurus')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Sub Klasifikasi Layanan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nama_pengurus">
                                                <i class="bi bi-person" style="margin-right:8px; color:navy;"></i> Nama PSJK
                                            </label>
                                            <input type="text" id="nama_psjk" name="nama_psjk" class="form-control @error('nama_psjk') is-invalid @enderror" value="{{ old('nama_psjk') }}">
                                            @error('nama_psjk')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Sub Klasifikasi Layanan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="sub_klasifikasi_layanan">
                                                <i class="bi bi-clipboard-data" style="margin-right:8px; color:navy;"></i> Sub Klasifikasi Layanan
                                            </label>
                                            <input type="text" id="sub_klasifikasi_layanan" name="sub_klasifikasi_layanan" class="form-control @error('sub_klasifikasi_layanan') is-invalid @enderror" value="{{ old('sub_klasifikasi_layanan') }}">
                                            @error('sub_klasifikasi_layanan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kode Sub Klasifikasi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kode">
                                                <i class="bi bi-code" style="margin-right:8px; color:navy;"></i> Kode Sub Klasifikasi
                                            </label>
                                            <input type="text" id="kode" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ old('kode') }}">
                                            @error('kode')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kualifikasi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kualifikasi">
                                                <i class="bi bi-award" style="margin-right:8px; color:navy;"></i> Kualifikasi
                                            </label>
                                            <select id="kualifikasi" name="kualifikasi" class="form-control @error('kualifikasi') is-invalid @enderror">
                                                <option value="" disabled selected>Pilih Kualifikasi</option>
                                                <option value="Kecil" {{ old('kualifikasi') == 'Kecil' ? 'selected' : '' }}>Kecil</option>
                                                <option value="Menengah" {{ old('kualifikasi') == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                                                <option value="Besar" {{ old('kualifikasi') == 'Besar' ? 'selected' : '' }}>Besar</option>
                                            </select>
                                            @error('kualifikasi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column -->
                                    <div class="col-md-6">

                                        <!-- Sub Bidang -->
                                        <div class="mb-3">
                                            <label class="form-label" for="sub_kualifikasi_bu">
                                                <i class="bi bi-diagram-3" style="margin-right:8px; color:navy;"></i> Sub Kualifikasi Badan Usaha
                                            </label>
                                            <input type="text" id="sub_kualifikasi_bu" name="sub_kualifikasi_bu" class="form-control @error('sub_kualifikasi_bu') is-invalid @enderror" value="{{ old('sub_kualifikasi_bu') }}">
                                            @error('sub_kualifikasi_bu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Penerbit -->
                                        <div class="mb-3">
                                            <label class="form-label" for="penerbit">
                                                <i class="bi bi-file-earmark-text" style="margin-right:8px; color:navy;"></i> Penerbit
                                            </label>
                                            <input type="text" id="penerbit" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" value="{{ old('penerbit') }}">
                                            @error('penerbit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal Terbit -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal_terbit">
                                                <i class="bi bi-calendar-check" style="margin-right:8px; color:navy;"></i> Tanggal Terbit
                                            </label>
                                            <input type="date" id="tanggal_terbit" name="tanggal_terbit" class="form-control @error('tanggal_terbit') is-invalid @enderror" value="{{ old('tanggal_terbit') }}">
                                            @error('tanggal_terbit')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal Berlaku -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal_berlaku">
                                                <i class="bi bi-calendar-event" style="margin-right:8px; color:navy;"></i> Tanggal Berlaku
                                            </label>
                                            <input type="date" id="tanggal_berlaku" name="tanggal_berlaku" class="form-control @error('tanggal_berlaku') is-invalid @enderror" value="{{ old('tanggal_berlaku') }}">
                                            @error('tanggal_berlaku')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- End Right Column -->
                                </div>

                                <!-- Tombol Submit -->
                                <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                        <button type="button" onclick="openModal()"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                        style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                        <!-- Ikon SVG Pensil -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                     <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                   </svg>
                                        <span style="font-family: 'Poppins', sans-serif;">Create</span>
                                    </button>
                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin menambahkan data?
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
                                        Ya
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
