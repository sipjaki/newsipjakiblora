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
        {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}

<section style="background: linear-gradient(to bottom, #a8f0c6, #ffffff); width: 100%; min-height: 100vh;">


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
                <a href="/bedokumentasijakon">
                    <button class="button-newvalidasi">
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
                        <form action="{{ route('create.dokumentasijakon') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                      <div class="col-md-12">
    <!-- Judul -->
    <div class="mb-3">
        <label class="form-label" for="judul">
            <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Kegiatan
        </label>
        <input type="text" id="judul" name="judul"
               class="form-control @error('judul') is-invalid @enderror"
               value="{{ old('judul') }}" />
        @error('judul')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center">
    <hr class="my-4" style="border-top: 2px dashed #000000; width: 60%; margin: auto;">
    <h5 style="color: #0d6efd; font-weight: bold; margin-top: 5px; font-size:16px;">
        <i class="bi bi-upload" style="margin-right: 6px;"></i>
        Upload Dokumentasi Kegiatan Jasa Konstruksi
    </h5>
    <hr class="my-4" style="border-top: 2px dashed #000000; width: 60%; margin: auto;">
</div>

    <!-- Foto Kegiatan 1 - 12 -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan1" class="form-label">Foto Kegiatan 1</label>
            <input type="file" name="fotokegiatan1" id="fotokegiatan1"
                   class="form-control" accept="image/*"
                   onchange="previewImage1(event)">
            <img id="preview1" src="#" alt="Preview Foto 1"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan2" class="form-label">Foto Kegiatan 2</label>
            <input type="file" name="fotokegiatan2" id="fotokegiatan2"
                   class="form-control" accept="image/*"
                   onchange="previewImage2(event)">
            <img id="preview2" src="#" alt="Preview Foto 2"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan3" class="form-label">Foto Kegiatan 3</label>
            <input type="file" name="fotokegiatan3" id="fotokegiatan3"
                   class="form-control" accept="image/*"
                   onchange="previewImage3(event)">
            <img id="preview3" src="#" alt="Preview Foto 3"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan4" class="form-label">Foto Kegiatan 4</label>
            <input type="file" name="fotokegiatan4" id="fotokegiatan4"
                   class="form-control" accept="image/*"
                   onchange="previewImage4(event)">
            <img id="preview4" src="#" alt="Preview Foto 4"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan5" class="form-label">Foto Kegiatan 5</label>
            <input type="file" name="fotokegiatan5" id="fotokegiatan5"
                   class="form-control" accept="image/*"
                   onchange="previewImage5(event)">
            <img id="preview5" src="#" alt="Preview Foto 5"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan6" class="form-label">Foto Kegiatan 6</label>
            <input type="file" name="fotokegiatan6" id="fotokegiatan6"
                   class="form-control" accept="image/*"
                   onchange="previewImage6(event)">
            <img id="preview6" src="#" alt="Preview Foto 6"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan7" class="form-label">Foto Kegiatan 7</label>
            <input type="file" name="fotokegiatan7" id="fotokegiatan7"
                   class="form-control" accept="image/*"
                   onchange="previewImage7(event)">
            <img id="preview7" src="#" alt="Preview Foto 7"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan8" class="form-label">Foto Kegiatan 8</label>
            <input type="file" name="fotokegiatan8" id="fotokegiatan8"
                   class="form-control" accept="image/*"
                   onchange="previewImage8(event)">
            <img id="preview8" src="#" alt="Preview Foto 8"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan9" class="form-label">Foto Kegiatan 9</label>
            <input type="file" name="fotokegiatan9" id="fotokegiatan9"
                   class="form-control" accept="image/*"
                   onchange="previewImage9(event)">
            <img id="preview9" src="#" alt="Preview Foto 9"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan10" class="form-label">Foto Kegiatan 10</label>
            <input type="file" name="fotokegiatan10" id="fotokegiatan10"
                   class="form-control" accept="image/*"
                   onchange="previewImage10(event)">
            <img id="preview10" src="#" alt="Preview Foto 10"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan11" class="form-label">Foto Kegiatan 11</label>
            <input type="file" name="fotokegiatan11" id="fotokegiatan11"
                   class="form-control" accept="image/*"
                   onchange="previewImage11(event)">
            <img id="preview11" src="#" alt="Preview Foto 11"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
        <div class="col-md-6 mb-3">
            <label for="fotokegiatan12" class="form-label">Foto Kegiatan 12</label>
            <input type="file" name="fotokegiatan12" id="fotokegiatan12"
                   class="form-control" accept="image/*"
                   onchange="previewImage12(event)">
            <img id="preview12" src="#" alt="Preview Foto 12"
                 style="display:none; max-height:200px; margin-top:10px;">
        </div>
    </div>
</div>

<!-- Javascript Preview Satu-satu -->
<script>
function previewImage1(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview1');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage2(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview2');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage3(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview3');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage4(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview4');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage5(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview5');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage6(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview6');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage7(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview7');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage8(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview8');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage9(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview9');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage10(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview10');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage11(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview11');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}

function previewImage12(event) {
    let reader = new FileReader();
    reader.onload = function(){
        let output = document.getElementById('preview12');
        output.src = reader.result;
        output.style.display = "block";
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>


                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->
                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()" class="button-hijau">

                                    <!-- Ikon SVG Pensil -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                 <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                 <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                               </svg>
                                    <span style="font-family: 'Poppins', sans-serif;">Buat Dokumentasi </span>
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
