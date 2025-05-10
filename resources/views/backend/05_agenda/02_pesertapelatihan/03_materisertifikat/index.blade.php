<style>
    .btn-suspend {
        background-color: orange;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-suspend:hover {
        background-color: white;
        color: black;
        border: 1px solid orange;
    }

    .btn-expired {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-expired:hover {
        background-color: white;
        color: black;
        border: 1px solid red;
    }

    .btn-active {
        background-color: green;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-active:hover {
        background-color: white;
        color: black;
        border: 1px solid green;
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
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                        <button
                        onclick="window.history.back();"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">

                        <!-- Ikon Kembali -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    Kembali
                </button>


                     {{-- <a href="/beagendapelatihanmateri/createmateri/{{$data->id}}"> --}}
                        <button
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';"
                         style="background-color: #166534; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                         <!-- Ikon Kembali -->
                         <i class="fa fa-plus" style="margin-right: 8px;"></i>
                         Create
                     </button>
                     </a>
                 {{-- </div> --}}

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
                                        <td style="text-align: left;">{{ $item->materi }}</td>
                                        <td style="text-align: left;">{{ $item->narasumber }}</td>
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
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                             <i class="bi bi-trash"></i>
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
