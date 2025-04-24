
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

              @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
              @include('backend.00_administrator.00_baganterpisah.11_alert')

          <!--end::Container-->
        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->

                @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">No</th>
                                        <th style="width: 300px; text-align:center;">Judul</th>
                                        <th style="width: 500px; text-align:center;">Berkas</th>
                                        <th style="width: 600px; text-align: center;">Keterangan</th>
                                        <th style="width: 100px; text-align: center;">Perbarui Data</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{!! $item->judul !!}</td>
                                        <td style="text-align: center;">
                                                        @if($item->peraturan && file_exists(public_path('storage/' . $item->peraturan)))
                                                        <!-- Display the default iframe when the file exists in the storage -->
                                                        <iframe src="{{ asset('storage/' . $item->peraturan) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                    @elseif($item->peraturan)
                                                        <!-- Display the iframe with the updated file -->
                                                        <iframe src="{{ asset($item->peraturan) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                    @else
                                                        <!-- Optional: Show a placeholder if there's no file available -->
                                                        <p>Data belum diupdate</p>
                                                    @endif

                                        </td>
                                        <td style="text-align: justify;">{!! $item->keterangan !!}</td>
                                        <td style="text-align: center;">

                                            <a href="/struktur/update/{{$item->judul}}" class="btn btn-sm btn-warning me-2" title="Update">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

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
                  <!--end::Container-->
        <!--end::App Content Header-->
        <!--begin::App Content-->
          <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
