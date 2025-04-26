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

            <button>
                <input  name="bujkkontraktor_id" value="{{ $bujkkontraktor_id }}">
            </button>
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bebujkkonstruksi">
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
                        <form action="{{ route('bebujkkonstruksi.createklasifikasicreate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">

                                        <!-- ID BUJK Kontraktor (Hidden atau Select jika mau pilih) -->
                                        <input  name="bujkkontraktor_id" value="{{ $bujkkontraktor_id }}">
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
                                            <label class="form-label" for="kode_sub_klasifikasi">
                                                <i class="bi bi-code" style="margin-right:8px; color:navy;"></i> Kode Sub Klasifikasi
                                            </label>
                                            <input type="text" id="kode_sub_klasifikasi" name="kode_sub_klasifikasi" class="form-control @error('kode_sub_klasifikasi') is-invalid @enderror" value="{{ old('kode_sub_klasifikasi') }}">
                                            @error('kode_sub_klasifikasi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Kualifikasi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="kualifikasi">
                                                <i class="bi bi-award" style="margin-right:8px; color:navy;"></i> Kualifikasi
                                            </label>
                                            <input type="text" id="kualifikasi" name="kualifikasi" class="form-control @error('kualifikasi') is-invalid @enderror" value="{{ old('kualifikasi') }}">
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
                                            <label class="form-label" for="sub_bidang">
                                                <i class="bi bi-diagram-3" style="margin-right:8px; color:navy;"></i> Sub Bidang
                                            </label>
                                            <input type="text" id="sub_bidang" name="sub_bidang" class="form-control @error('sub_bidang') is-invalid @enderror" value="{{ old('sub_bidang') }}">
                                            @error('sub_bidang')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Sertifikat Klasifikasi -->
                                        <div class="mb-3">
                                            <label class="form-label" for="sertifikat_klasifikasi">
                                                <i class="bi bi-file-earmark-text" style="margin-right:8px; color:navy;"></i> Sertifikat Klasifikasi
                                            </label>
                                            <input type="text" id="sertifikat_klasifikasi" name="sertifikat_klasifikasi" class="form-control @error('sertifikat_klasifikasi') is-invalid @enderror" value="{{ old('sertifikat_klasifikasi') }}">
                                            @error('sertifikat_klasifikasi')
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
                                <div style="display: flex; justify-content: flex-end; margin-top: 20px;">
                                    <button type="submit"
                                            style="background-color: #189200; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; font-family: 'Poppins', sans-serif;">
                                        Simpan
                                    </button>
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
