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
                        <form action="{{ route('akuncreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Asosiasi Masjaki -->
                                     <!-- User ID (Hidden) -->
                             <!-- Tampilkan Status Admin -->
                             <div class="mb-3">
                                <label class="form-label" for="status_admin_select">
                                    <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> Status Admin
                                </label>
                                <select id="status_admin_select" name="statusadmin_id" class="form-control">
                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->statusadmin }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


<!-- Nama Lengkap -->
<div class="mb-3">
    <label class="form-label" for="name">
        <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Nama Lengkap
    </label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Username -->
<div class="mb-3">
    <label class="form-label" for="username">
        <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> Username
    </label>
    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" />
    @error('username')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Nomor HP -->
<div class="mb-3">
    <label class="form-label" for="phone_number">
        <i class="bi bi-telephone" style="margin-right: 8px; color: navy;"></i> Nomor HP
    </label>
    <input type="text" id="phone_number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" />
    @error('phone_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Email -->
<div class="mb-3">
    <label class="form-label" for="email">
        <i class="bi bi-envelope" style="margin-right: 8px; color: navy;"></i> Email
    </label>
    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Avatar -->
<div class="mb-3">
    <label class="form-label" for="avatar">
        <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Avatar (Foto)
    </label>
    <input type="file" id="avatar" name="avatar" class="form-control @error('avatar') is-invalid @enderror" accept="image/*" />
    @error('avatar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

</div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="avatar">
                                                <i class="bi bi-person-circle" style="margin-right: 8px; color: navy;"></i> Upload Foto Profil
                                            </label>
                                            <input type="file" id="avatar" name="avatar"
                                                class="form-control @error('avatar') is-invalid @enderror"
                                                accept="image/*" onchange="previewImage('avatar', 'previewFoto')" />

                                            <div class="mt-2" id="previewContainer">
                                                <img id="previewFoto"
                                                    src="{{ old('avatar') ? asset('storage/' . old('avatar')) : '' }}"
                                                    style="max-width: 100%; max-height: 200px; margin-top: 10px; display: {{ old('avatar') ? 'block' : 'none' }};" />
                                            </div>

                                            @error('avatar')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>

                                        <script>
                                            function previewFile(inputId, previewId) {
                                                var file = document.getElementById(inputId).files[0];
                                                var previewContainer = document.getElementById('previewContainer');
                                                var imgPreview = document.getElementById(previewId);
                                                var pdfPreview = document.getElementById('pdfPreview');

                                                // Reset previous previews
                                                imgPreview.style.display = 'none';
                                                pdfPreview.style.display = 'none';

                                                if (file) {
                                                    var reader = new FileReader();

                                                    // Check if the file is a PDF
                                                    if (file.type === 'application/pdf') {
                                                        // Display PDF preview
                                                        reader.onload = function(e) {
                                                            var pdfData = e.target.result;
                                                            pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {
                                                                pdf.getPage(1).then(function(page) {
                                                                    var canvas = document.getElementById('pdfPreview');
                                                                    var context = canvas.getContext('2d');

                                                                    // Ukuran A4 dalam mm
                                                                    var a4Width = 210;  // A4 width in mm
                                                                    var a4Height = 297; // A4 height in mm

                                                                    // Convert A4 size to pixels (1mm = 3.7795275591 pixels)
                                                                    var a4WidthPx = a4Width * 3.7795275591;
                                                                    var a4HeightPx = a4Height * 3.7795275591;

                                                                    // Calculate scale to fit PDF to A4 size in pixels
                                                                    var scale = Math.min(a4WidthPx / page.getViewport({scale: 1}).width, a4HeightPx / page.getViewport({scale: 1}).height);

                                                                    var viewport = page.getViewport({scale: scale});
                                                                    canvas.height = viewport.height;
                                                                    canvas.width = viewport.width;

                                                                    // Render the page into the canvas context
                                                                    page.render({canvasContext: context, viewport: viewport}).promise.then(function() {
                                                                        pdfPreview.style.display = 'block';
                                                                    });
                                                                });
                                                            });
                                                        };
                                                        reader.readAsArrayBuffer(file); // Read the PDF file
                                                    } else {
                                                        // Display image preview (if it's not a PDF)
                                                        reader.onloadend = function() {
                                                            imgPreview.src = reader.result;
                                                            imgPreview.style.display = 'block';
                                                        };
                                                        reader.readAsDataURL(file); // Read the image file
                                                    }
                                                }
                                            }
                                        </script>

                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
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


