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
            <section style="background: linear-gradient(to bottom, #ffffff); width: 100%; min-height: 100vh;">

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
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <div style="display: flex; flex-wrap: wrap; margin-bottom:10px;">

                        <a href="/bepelatihanjampelajaran/createjam/{{ $agendapelatihan_id }}" style="text-decoration: none;">
                            <button class="button-baru">
                            <i class="fa fa-plus" style="margin-right: 8px;"></i>
                            Tambah Pemateri
                        </button>
                    </a>

                    <a href="{{ url()->previous() }}" class="button-modern">
    <i class="bi bi-arrow-left" style="margin-right: 8px;"></i>
    Kembali
</a>
             {{-- </div> --}}

                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 25px; text-align:center;">
                                            <i class="bi bi-list-ol"></i> No
                                        </th>
                                        <th style="width: 400px; text-align:center;">
                                            <i class="bi bi-journal-text"></i> Materi
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-person-badge-fill"></i> Narasumber
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-clock-fill"></i> Jam Pelajaran
                                        </th>
                                        <th style="width: 100px; text-align:center;">
                                            <i class="bi bi-tools"></i> Aksi
                                        </th>
                                                 </tr>
                                </thead>
                                <tbody>
                                @foreach ($subdata as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
<td style="text-align: left; white-space: pre-line;">
    {!! nl2br(e($item->materi)) !!}
</td>
<td style="text-align: left; white-space: pre-line;">
    {!! nl2br(e($item->narasumber)) !!}
</td>
                                        <td style="text-align: center;">{{ $item->jampelajaran }} Jam</td>

                                                   <td style="text-align: center;">
                                            <!-- Show Icon -->
                                         {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Update Icon --> --}}
                                            {{-- <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> --}}
                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            <a href="javascript:void(0)" class="button-merah" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                             <i class="bi bi-trash"></i>Hapus
                                         </a>

                                         <!-- Modal -->
                                         <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                                         <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                         <form id="deleteForm" method="POST" action="">
                                                             @csrf
                                                             @method('DELETE')
                                                             <button type="submit" class="btn btn-danger">Hapus</button>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <!-- Script untuk set action form -->
                                         <script>
                                         function setDeleteUrl(button) {
                                             var id = button.getAttribute('data-id');
                                             var deleteUrl = "{{ route('bepelatihanjampelajarandelete', ':id') }}";
                                             deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));

                                             document.getElementById('deleteForm').action = deleteUrl;
                                         }
                                         </script>

                                            <style>
                                                /* Hover effect */
                                                .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                                                    background-color: #fff !important; /* Keep the background white on hover */
                                                    color: black !important; /* Change text color to black on hover */
                                                }

                                                 .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                                                    color: black !important; /* Ensure the icon color changes to black */
                                                }
                                            </style>
                                        </td>

                                    </tr>
                                        @endforeach

                                </tbody>
                            </table>
                            <br><br><br>
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
        </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')

      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date(); // Dapatkan tanggal hari ini
            const masaBerlakuElements = document.querySelectorAll('.masa-berlaku'); // Pilih semua td yang memiliki kelas masa-berlaku

            masaBerlakuElements.forEach(function (element) {
                const masaBerlaku = element.getAttribute('data-masaberlaku'); // Ambil data masa berlaku
                const button = element.querySelector('.btn-masa-berlaku'); // Ambil tombol di dalam td

                // Cek jika masa berlaku kosong
                if (!masaBerlaku || masaBerlaku === '') {
                    button.classList.add('btn-suspend'); // Tambahkan class untuk suspend
                    button.textContent = 'SUSPEND';
                } else {
                    const masaBerlakuDate = new Date(masaBerlaku); // Jika ada, ubah menjadi tanggal

                    // Cek jika masa berlaku sudah lewat
                    if (masaBerlakuDate < today) {
                        button.classList.add('btn-expired'); // Warna merah jika tidak berlaku
                        button.textContent = 'TIDAK BERLAKU';
                    } else {
                        button.classList.add('btn-active'); // Warna hijau jika masih berlaku
                        button.textContent = 'BERLAKU';
                    }
                }
            });
        });
    </script>
