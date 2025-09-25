
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

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')

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
                        <form action="{{ route('update.beberitajakoncreateupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="container mt-4">
    <div class="row">
        <!-- Judul -->
        <div class="col-12 mb-4">
            <h4 style="font-weight: bold; color: navy;">
                <i class="bi bi-card-text" style="margin-right: 8px;"></i> {{ $data->judul }}
            </h4>
            <hr>
        </div>

        <!-- Foto Kegiatan 1 & 2 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 1</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan1 && file_exists(public_path($data->fotokegiatan1)))
                    <img src="{{ asset($data->fotokegiatan1) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 1">
                @elseif($data->fotokegiatan1)
                    <img src="{{ asset($data->fotokegiatan1) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 1">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 2</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan2 && file_exists(public_path($data->fotokegiatan2)))
                    <img src="{{ asset($data->fotokegiatan2) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 2">
                @elseif($data->fotokegiatan2)
                    <img src="{{ asset($data->fotokegiatan2) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 2">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>

        <!-- Foto Kegiatan 3 & 4 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 3</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan3 && file_exists(public_path($data->fotokegiatan3)))
                    <img src="{{ asset($data->fotokegiatan3) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 3">
                @elseif($data->fotokegiatan3)
                    <img src="{{ asset($data->fotokegiatan3) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 3">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 4</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan4 && file_exists(public_path($data->fotokegiatan4)))
                    <img src="{{ asset($data->fotokegiatan4) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 4">
                @elseif($data->fotokegiatan4)
                    <img src="{{ asset($data->fotokegiatan4) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 4">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>

        <!-- Foto Kegiatan 5 & 6 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 5</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan5 && file_exists(public_path($data->fotokegiatan5)))
                    <img src="{{ asset($data->fotokegiatan5) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 5">
                @elseif($data->fotokegiatan5)
                    <img src="{{ asset($data->fotokegiatan5) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 5">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 6</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan6 && file_exists(public_path($data->fotokegiatan6)))
                    <img src="{{ asset($data->fotokegiatan6) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 6">
                @elseif($data->fotokegiatan6)
                    <img src="{{ asset($data->fotokegiatan6) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 6">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>

        <!-- Foto Kegiatan 7 & 8 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 7</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan7 && file_exists(public_path($data->fotokegiatan7)))
                    <img src="{{ asset($data->fotokegiatan7) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 7">
                @elseif($data->fotokegiatan7)
                    <img src="{{ asset($data->fotokegiatan7) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 7">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 8</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan8 && file_exists(public_path($data->fotokegiatan8)))
                    <img src="{{ asset($data->fotokegiatan8) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 8">
                @elseif($data->fotokegiatan8)
                    <img src="{{ asset($data->fotokegiatan8) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 8">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>

        <!-- Foto Kegiatan 9 & 10 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 9</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan9 && file_exists(public_path($data->fotokegiatan9)))
                    <img src="{{ asset($data->fotokegiatan9) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 9">
                @elseif($data->fotokegiatan9)
                    <img src="{{ asset($data->fotokegiatan9) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 9">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 10</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan10 && file_exists(public_path($data->fotokegiatan10)))
                    <img src="{{ asset($data->fotokegiatan10) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 10">
                @elseif($data->fotokegiatan10)
                    <img src="{{ asset($data->fotokegiatan10) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 10">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>

        <!-- Foto Kegiatan 11 & 12 -->
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 11</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan11 && file_exists(public_path($data->fotokegiatan11)))
                    <img src="{{ asset($data->fotokegiatan11) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 11">
                @elseif($data->fotokegiatan11)
                    <img src="{{ asset($data->fotokegiatan11) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 11">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Foto Kegiatan 12</label>
            <div class="border p-2 text-center">
                @if($data->fotokegiatan12 && file_exists(public_path($data->fotokegiatan12)))
                    <img src="{{ asset($data->fotokegiatan12) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 12">
                @elseif($data->fotokegiatan12)
                    <img src="{{ asset($data->fotokegiatan12) }}" class="img-fluid" style="max-height:300px; object-fit:contain;" alt="Foto Kegiatan 12">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </div>
    </div>
</div>

                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

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
                </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
                                                                                <!-- Link ke Bootstrap 5 JS dan CSS -->
                                                                                {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                                                                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> --}}
