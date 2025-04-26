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
                        @include('backend.00_administrator.00_baganterpisah.13_judulcreate')

                    </div>

                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beartikeljakon">
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
                        <form action="{{ route('create.beartikeljakoncreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- User ID (Penulis Berita) -->
                                        <div class="mb-3">
                                            <label class="form-label" for="user_id">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Penulis Berita
                                            </label>
                                            <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" disabled>
                                                <option value="" disabled selected>Pilih Penulis</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ Auth::check() && Auth::user()->statusadmin->id == 1 && Auth::user()->id == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('user_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Judul Berita -->
                                        <div class="mb-3">
                                            <label class="form-label" for="judul">
                                                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Artikel Jakon
                                            </label>
                                            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" />
                                            @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
                                            </label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" />
                                            @error('tanggal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Keterangan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="keterangan">
                                                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> Keterangan
                                            </label>
                                            <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" style="height: 150px;">{{ old('keterangan') }}</textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="berkas">
                                                <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: red;"></i> Berkas PDF
                                            </label>
                                            <!-- Input untuk memilih file PDF -->
                                            <input type="file" id="berkas" name="berkas" class="form-control @error('berkas') is-invalid @enderror" onchange="previewPDF('berkas', 'previewBerkas')" accept="application/pdf" />

                                            <div>
                                                <!-- Menampilkan preview PDF jika ada -->
                                                <iframe id="previewBerkas" src="{{ old('berkas') ? asset('storage/' . old('berkas')) : '' }}" style="max-width: 100%; max-height: 400px; margin-top: 10px;" frameborder="0"></iframe>
                                            </div>

                                            @error('berkas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Javascript untuk Preview PDF -->
                                        <script>
                                            function previewPDF(inputId, previewId) {
                                                var file = document.getElementById(inputId).files[0];
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    var previewElement = document.getElementById(previewId);
                                                    previewElement.src = e.target.result; // Set preview to uploaded PDF
                                                }

                                                if (file) {
                                                    reader.readAsDataURL(file); // Read the file as data URL for preview
                                                }
                                            }
                                        </script>

                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Foto -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto1">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Brosur 1
                                            </label>
                                            <input type="file" id="foto1" name="foto1" class="form-control @error('foto1') is-invalid @enderror" onchange="previewImage('foto1', 'previewFoto1')" />
                                            <div>
                                                <!-- Preview Image 1 -->
                                                <img id="previewFoto1" src="{{ old('foto1') ? asset('storage/' . old('foto1')) : '' }}" style="max-width: 100%; max-height: 200px; margin-top: 10px;" />
                                            </div>
                                            @error('foto1')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Foto 1 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto2">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Brosur 2
                                            </label>
                                            <input type="file" id="foto2" name="foto2" class="form-control @error('foto2') is-invalid @enderror" onchange="previewImage('foto2', 'previewFoto2')" />
                                            <div>
                                                <!-- Preview Image 1 -->
                                                <img id="previewFoto2" src="{{ old('foto2') ? asset('storage/' . old('foto2')) : '' }}" style="max-width: 100%; max-height: 200px; margin-top: 10px;" />
                                            </div>
                                            @error('foto2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Foto 2 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto3">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Brosur 3
                                            </label>
                                            <input type="file" id="foto3" name="foto3" class="form-control @error('foto3') is-invalid @enderror" onchange="previewImage('foto3', 'previewFoto3')" />
                                            <div>
                                                <!-- Preview Image 2 -->
                                                <img id="previewFoto3" src="{{ old('foto3') ? asset('storage/' . old('foto3')) : '' }}" style="max-width: 100%; max-height: 200px; margin-top: 10px;" />
                                            </div>
                                            @error('foto3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" style="background-color: #007bff; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
                                    <i class="fa fa-pencil" style="margin-right: 8px;"></i> Create
                                </button>
                            </div>
                        </form>

                        <script>
                            function previewImage(inputId, previewId) {
                                var file = document.getElementById(inputId).files[0];
                                var reader = new FileReader();

                                reader.onloadend = function () {
                                    document.getElementById(previewId).src = reader.result;
                                }

                                if (file) {
                                    reader.readAsDataURL(file); // Membaca file dan menampilkan pratinjau gambar
                                }
                            }
                        </script>

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
        </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
