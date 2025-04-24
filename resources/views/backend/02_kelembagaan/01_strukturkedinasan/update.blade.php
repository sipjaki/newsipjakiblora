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
          @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

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
            <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                <a href="/bestrukturdinas"
                   style="background-color: #9CA3AF; color: white; border: none; margin-right: 10px; padding: 10px 20px;
                          border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                          transition: background-color 0.3s, color 0.3s; text-decoration: none; font-family: 'Poppins', sans-serif;"
                   onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                   onmouseout="this.style.backgroundColor='#9CA3AF'; this.style.color='white';">
                    <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
                    Kembali
                </a>
            </div>
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
                                                @if($data->peraturan)  <!-- Cek jika ada file setelah diupload -->
                                                    <object data="{{ asset('storage/' . $data->peraturan) }}" type="application/pdf" width="300" height="200">
                                                     <p>PDF cannot be displayed.</p>
                                                    </object>
                                                @else
                                                    <p>No file uploaded yet.</p>
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
                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <button type="submit"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                    style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <i class="fa fa-edit" style="margin-right: 8px;"></i> Update
                                </button>
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
