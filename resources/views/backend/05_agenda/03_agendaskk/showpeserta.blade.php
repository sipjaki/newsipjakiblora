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
                    <a href="/beagendapelatihan">
                        <button
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px;
                           border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                           transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    Kembali
                </button>
            </a>

                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">
                                            <i class="bi bi-hash" style="margin-right: 5px;"></i>No
                                        </th>
                                        <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-person-fill" style="margin-right: 5px;"></i>Nama Lengkap
                                        </th>
                                        {{-- <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-bookmark-fill" style="margin-right: 5px;"></i>Jenjang Pendidikan
                                        </th> --}}
                                        <th style="width: 100px; text-align:center;">
                                            <i class="bi bi-person" style="margin-right: 5px;"></i>NIk
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gender-ambiguous" style="margin-right: 5px;"></i>Gender
                                        </th>
                                          <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-calendar-date" style="margin-right: 5px;"></i>Tanggal Lahir
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-telephone-fill" style="margin-right: 5px;"></i>No Telepon
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-mortarboard" style="margin-right: 5px;"></i> Jenjang Pendidikan
                                        </th>
                                        <th style="width: 400px; text-align:center;">
                                            <i class="bi bi-building" style="margin-right: 5px;"></i>Universitas/Sekolah/Intansi
                                        </th>
                                        <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-file-earmark-pdf-fill" style="margin-right: 5px;"></i>Sertifikat
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Verifikasi
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gear" style="margin-right: 5px;"></i>Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($datapeserta as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{{ $item->user->name }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->jenjangpendidikan->jenjangpendidikan}}</td> --}}
                                        <td style="text-align: center;">{{ $item->nik }}</td>
                                        <td style="text-align: center;">{{ $item->jeniskelamin }}</td>
                                        <td style="text-align: center;">
                                            {{ \Carbon\Carbon::parse($item->tanggallahir)->translatedFormat('d F Y') }}
                                        </td>
                                        <td style="text-align: left;">{{ $item->notelepon }}</td>
                                        <td style="text-align: left;">{{ $item->jenjangpendidikan->jenjangpendidikan }}</td>
                                        <td style="text-align: left;">{{ $item->namasekolah->namasekolah }}</td>

                                        <td style="text-align: center; gap:10px;" id="status-sertifikat-{{ $item->id }}">
                                            @if($item->sertifikat)
                                                <p>Terbit</p>
                                            @else
                                                <p>Belum Terbit</p>
                                            @endif
                                        </td>

                                        <!-- Script untuk update status sertifikat -->
                                        <script>
                                            // Fungsi ini dipanggil setelah proses upload atau update sertifikat
                                            function updateStatusSertifikat(id, status) {
                                                var statusElement = document.getElementById('status-sertifikat-' + id);
                                                if (status === 'terbit') {
                                                    statusElement.innerHTML = '<p>Terbit</p>';
                                                } else {
                                                    statusElement.innerHTML = '<p>Belum Terbit</p>';
                                                }
                                            }

                                            // Contoh panggilan JavaScript setelah upload atau update sertifikat berhasil
                                            // updateStatusSertifikat({{ $item->id }}, 'terbit');
                                        </script>

<td style="text-align: center;">
    @if($item->verifikasipu == false)
        <button type="button" onclick="openModal({{ $item->id }})" class="btn btn-danger">
            <i class="bi bi-x-circle"></i> BELUM LOLOS
        </button>
    @else
        <button type="button" disabled class="btn"
            style="background-color: rgba(16, 185, 129, 0.85); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); cursor: not-allowed;">
            <i class="bi bi-patch-check-fill" style="font-size: 1.2rem;"></i> LOLOS
        </button>
    @endif
</td>

<!-- Modal Konfirmasi -->
<div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
        <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
            Apakah Peserta Sudah Lolos Administrasi ?
        </p>

        <!-- Form Verifikasi -->
        <form id="verifikasiForm" method="POST" class="d-inline">
            @csrf
            @method('PUT')
            <button type="submit" style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('i').style.color='white';">
                <i class="bi bi-send" style="margin-right: 6px; color: white;"></i> Ya
            </button>
        </form>

        <!-- Tombol Batal -->
        <button type="button" onclick="closeModal()" style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s; margin-left: 10px;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
            onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('i').style.color='white';">
            <i class="bi bi-x-circle" style="margin-right: 6px; color: white;"></i> Batal
        </button>
    </div>
</div>



<script>
  function openModal(itemId) {
    // Menyesuaikan action form dengan ID item yang diteruskan
    const form = document.getElementById("verifikasiForm");
    form.action = `{{ url('verifikasipesertasertifikasi') }}/${itemId}`;

    // Menampilkan modal
    document.getElementById("confirmModal").style.display = "flex";
}

function closeModal() {
    // Menyembunyikan modal
    document.getElementById("confirmModal").style.display = "none";
}
</script>



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
                                            data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                            <i class="bi bi-trash"></i>
                                        </a>

                                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                                        <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form id="deleteForm" method="POST" action="">
                                                            @csrf
                                                            @method('DELETE') <!-- Menetapkan metode DELETE untuk penghapusan -->
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script>
                                        function setDeleteUrl(button) {
                                            // Ambil data judul dari elemen yang diklik
                                            var id = button.getAttribute('data-judul');

                                            // Perbarui teks di dalam modal dengan nama item
                                            document.getElementById('itemName').innerText = id;

                                            // Atur URL penghapusan
                                            var deleteUrl = "/beagendapelatihanpeserta/delete/" + encodeURIComponent(id);
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
<br><br>
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
