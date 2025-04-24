
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
          @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

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
                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bestrukturdinas">
                    <button
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                        <!-- Ikon SVG Kembali -->
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
                        <form action="{{ route('update.strukturcreatebaru', $data->judul) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan PUT untuk update data -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="judul">
                                                <i class="bi bi-calendar-event" style="margin-right: 8px; color: navy;"></i> Judul
                                            </label>
                                            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $data->judul) }}" />
                                            @error('judul')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="keterangan">
                                                <i class="bi bi-tags-fill" style="margin-right: 8px; color: navy;"></i> Keterangan
                                            </label>
                                            <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="6">{{ old('keterangan', $data->keterangan) }}</textarea>
                                            @error('keterangan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="peraturan">
                                                <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: navy;"></i> File Struktur Organisasi (PDF)
                                            </label>

                                            <!-- Preview PDF -->
                                            <div style="margin-top: 10px;">
                                                @if($data->peraturan && file_exists(public_path('storage/' . $data->peraturan)))
                                                <!-- Display the default iframe when the file exists in the storage -->
                                                <iframe src="{{ asset('storage/' . $data->peraturan) }}" frameborder="0" width="100%" height="300px"></iframe>
                                            @elseif($data->peraturan)
                                                <!-- Display the iframe with the updated file -->
                                                <iframe src="{{ asset($data->peraturan) }}" frameborder="0" width="100%" height="300px"></iframe>
                                            @else
                                                <!-- Optional: Show a placeholder if there's no file available -->
                                                <p>Data belum diupdate</p>
                                            @endif

                                            </div>

                                            <!-- Input File untuk Mengunggah PDF -->
                                            <input type="file" name="peraturan" class="form-control @error('peraturan') is-invalid @enderror" id="peraturan" />
                                            @error('peraturan')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div> <!-- end row -->
                            </div>
                            <!-- end::Body -->
                            <br><br>
<!-- Tombol Update dengan Konfirmasi -->
<div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
    <button type="button"
        onclick="openModal()"
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
        Apakah Anda yakin ingin melakukan update data ini?
      </p>

      <div style="display: flex; justify-content: center; gap: 12px;">
        <button type="button" onclick="submitForm()"
                style="background-color: #f97316; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer;">
          Ya, Update
        </button>
        <button type="button" onclick="closeModal()"
                style="background-color: #9CA3AF; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer;">
          Batal
        </button>
      </div>
    </div>
  </div>

  <script>
    function openModal() {
        const modal = document.getElementById("confirmModal");
        if (modal) modal.style.display = "flex";
    }

    function closeModal() {
        const modal = document.getElementById("confirmModal");
        if (modal) modal.style.display = "none";
    }

    function submitForm() {
        const form = document.getElementById("formKRK");
        if (form) {
            form.submit();
        } else {
            alert("Form tidak ditemukan. Pastikan ID-nya benar!");
        }
    }
    </script>


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
