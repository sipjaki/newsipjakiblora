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

<section style="background: linear-gradient(to bottom, #ffffff); width: 100%; min-height: 100vh;">

  {{-- <section style="background-image: url('/assets/00_android/iconmenu/gambarbaru.png'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">        <!--begin::App Content Header--> --}}

        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            {{-- <div class="row">

              <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

            </div> --}}
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>

        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')

  {{-- ======================================================= --}}

<br>
  <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px; height:75vh;">

                <!-- /.card -->
                <div class="card mb-4">
                    <br>
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="zebra-table table-striped">
                                <thead>
 <tr>
        <th style="width: 100px; text-align:center;">
            <i class="bi bi-hash"></i> No
        </th>
        <th style="width: 400px; text-align:center;">
            <i class="bi bi-card-text"></i> Judul
        </th>
        <th style="width: 500px; text-align:center;">
            <i class="bi bi-image"></i> Gambar/Foto
        </th>
        <th style="width: 250px; text-align:center;">
            <i class="bi bi-gear"></i> Aksi
        </th>
    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{!! $item->judul !!}</td>
                                        <td style="text-align: center;">
    @if($item->header && file_exists(public_path('storage/' . $item->header)))
        <!-- Tampilkan gambar dari storage -->
        <img src="{{ asset('storage/' . $item->header) }}" alt="Image" width="300">
    @elseif($item->header)
        <!-- Tampilkan gambar dari path langsung -->
        <img src="{{ asset($item->header) }}" alt="Image" width="300">
    @else
        <!-- Placeholder jika tidak ada gambar -->
        <p>Data belum diupdate</p>
    @endif
</td>

                                        <td style="text-align: center;">
                                            <!-- Show Icon -->
                                            {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a> --}}
                                            <!-- Update Icon -->
                                            <a href="/header/update/{{ $item->id }}" class="button-berkas" title="Update">
                                                <i class="bi bi-pencil-square"></i>Update
                                            </a>
                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            {{-- <a href="javascript:void(0)" class="button-merah" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-judul="{{ $item->judul }}" onclick="setDeleteUrl(this)">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a> --}}


                                        @include('backend.00_administrator.00_baganterpisah.05_modalcarddelete')

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
        </div>
</section>
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
