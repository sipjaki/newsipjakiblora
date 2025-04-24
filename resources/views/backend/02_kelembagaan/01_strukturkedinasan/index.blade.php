<style>

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.menu-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.menu-table th,
.menu-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.menu-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.menu-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .menu-table thead {
            background-color: #28a745;
            color: white;
        }

        .menu-table th,
        .menu-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .menu-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .menu-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .menu-table tbody tr:hover {
            background-color: #ffd100;
        }
</style>

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

          <!--end::Container-->
        </div>

        <br>
        <!-- Menampilkan pesan sukses -->

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->

                @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="menu-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">No</th>
                                        <th style="width: 300px; text-align:center;">Judul</th>
                                        <th style="width: 500px; text-align:center;">Berkas</th>
                                        <th style="width: 600px; text-align: center;">Keterangan</th>
                                        <th style="width: 100px; text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{!! $item->judul !!}</td>

                                        {{-- Berkas dengan iframe yang tidak bisa diklik --}}
                                        <td style="text-align: center; position: relative;">
                                            <iframe
                                                src="{{ asset('storage/' . $item->peraturan) }}"
                                                frameborder="0"
                                                width="100%"
                                                height="300px"
                                                style="pointer-events: none; position: relative; z-index: 0;">
                                            </iframe>
                                        </td>

                                        <td style="text-align: justify;">{!! $item->keterangan !!}</td>
                                        <td style="text-align: center;">
                                            <a href="/struktur/update/{{$item->judul}}"
                                               class="btn btn-sm btn-warning me-2"
                                               title="Update"
                                               style="position: relative; z-index: 10;">
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
