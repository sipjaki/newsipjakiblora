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
@include('backend.00_style.01_cssdashboard.style')
@include('button')

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
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <a href="/betertibjakonpemanfaatan">
                        <button class="button-newvalidasi">
                        <i class="bi bi-arrow-left icon-create"></i>
                            Kembali
                        </button>
                    </a>


       {{-- Tampilkan tombol jika surat kosong --}}
    @if ($datasurat->isEmpty())
        <a href="{{ route('betertibjakonpemanfataansurat2createberkas', ['id' => $id]) }}">
            <button class="button-berkas">
                <i class="bi bi-file-earmark-plus"></i> Buat Berkas
            </button>
        </a>
    @endif
                                    {{-- @endif --}}

                   @if ($datasurat->isNotEmpty())

                   <button onclick="printModalContent({{ $datasurat_id }})" class="button-berkas">
                                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Print
                    </button>

                    <button class="button-berkas" onclick="downloadModalPDF({{ $datasurat_id }})">
                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Download
                    </button>

                   <button class="button-berkas"
                                            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $datasurat_id }}">
                                            <i class="bi bi-file-earmark-text icon-create"></i>
                                            Lihat Berkas
                    </button>


                    @endif

                <button class="button-baru">
                    <i class="bi bi-file-earmark icon-create"></i> {{ $title }}
                </button>


                    </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                     <th style="width: 25px; text-align: center;">
                                                    <i class="bi bi-hash"></i> No
                                                </th>
                                                {{-- <th style="width: 400px; text-align: center;">
                                                    <i class="bi bi-file-earmark-text-fill"></i> Nama Pekerjaan
                                                </th> --}}

                                                <th style="width: 200px; text-align: center;">
                                                    <i class="bi bi-building-fill"></i> Rencana Umur
                                                </th>

                                                <th style="width: 200px; text-align: center;">
                                                    <i class="bi bi-building-fill"></i> Kapasitas & Beban
                                                </th>

                                                <th style="width: 100px; text-align: center;">
                                                    <i class="bi bi-gear-fill"></i> Aksi
                                                </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @forelse($datasurat as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->tertibjakonpemanfaatan->namabangunan }}</td> --}}

@php
    $kesesuaian = $item->kesimpulanpemeriksaan ?? 'Surat Belum Di Buat';
    $tertibStatus = $kesesuaian === 'Tersedia' ? 'TERTIB' : 'BELUM TERTIB';
    $buttonClass = $kesesuaian === 'Tersedia' ? 'button-hijau' : 'button-merah';
    $icon = $kesesuaian === 'Tersedia' ? 'bi-check-circle' : 'bi-x-circle';
@endphp

<td style="text-align: center;">
    <button class="{{ $buttonClass }}">
        <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
        {{ $tertibStatus }}
    </button>
</td>

                                      @php
                                        $kesesuaian = $item->catatan ?? 'Surat Belum Di Buat';
                                        $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                                        $buttonClass = $kesesuaian === 'Sesuai' ? 'button-hijau' : 'button-merah';
                                        $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                                    @endphp

                                    <td style="text-align: center;">
                                        <button class="{{ $buttonClass }}">
                                            <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                                            {{ $tertibStatus }}
                                        </button>
                                    </td>


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
                                             var deleteUrl = "{{ route('betertibjakonmanfaat2deleteberkas', ':id') }}";
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


        @empty
    <tr>
        <td colspan="100%"> {{-- Memenuhi semua kolom --}}
            <div style="
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 30px;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                color: #6c757d;
                background-color: #f8f9fa;
                border: 2px dashed #ced4da;
                border-radius: 12px;
                font-size: 16px;
                animation: fadeIn 0.5s ease-in-out;
            ">
                <i class="bi bi-folder-x" style="margin-right: 8px; font-size: 20px; color: #dc3545;"></i>
                Berkas Dukung Pengawasan Terhadap Rencana Umur Konstruksi & Kapasitas Beban Tidak Ditemukan !!
            </div>
        </td>
    </tr>
@endforelse

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

                                </tbody>
                            </table>
                            <br>
                            <hr>
                            <br><br>

                            {{-- ============================================================== --}}
                        {{-- ======================================================= --}}
                    @if($datasurat && $datasurat->count() > 0)
                        <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form method="POST" enctype="multipart/form-data">
                            {{-- @csrf --}}

                            {{-- <input type="hidden"  name="tertibjakonpemanfaatan_id" value="{{ $datatertibjasakonstruksi_id }}"> --}}

                                <div class="modal-content" style="font-size: 0.875rem;">
                                    <div class="modal-header d-flex align-items-center">
                                        <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                        </a>
                                        <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                            <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                        </a>
                                        <span class="mx-2">:</span>
                                        <p style="margin-left: 10px; margin-bottom: 0; font-size:15px;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                    </div>
                                    <br>
                                    <div class="modal-body">
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Pemanfaatan : Pengawasan Tertib Pemanfaatan Produk Konstruksi Secara Rutin Terhadap Bangunan Konstruksi yang di Biayai dengan dana dari APBD</h5>
                                            <br>
                                        <table class="table table-bordered table-sm" style="font-size: 14px;">
                                         <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Nama Bangunan </strong>
                                                </td>
                                                <td>
                                                    <div style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;">
                                                    {{-- @foreach ($datainduk as $item) --}}
                                                    {{ $datainduk->namabangunan ?? '-' }}
                                                    {{-- @endforeach --}}

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Lokasi Bangunan </strong>
                                                </td>
                                                <td>
                                                    <div style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;">
                                                    {{-- @foreach ($datainduk as $item) --}}
                                                    {{ $datainduk->lokasi ?? '-' }}
                                                    {{-- @endforeach --}}

                                                    </div>
                                                </td>
                                            </tr>

                                    </table>
                    <br>
                            </table>
                    <br>
                    <table class="audit">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>LINGKUP PENGAWASAN</th>
                                <th>INDIKATOR</th>
                                <th>DOKUMEN YANG DIPERIKSA</th>
                                <th>CARA PEMERIKSAAN</th>
                                <th>KESIMPULAN PEMERIKSAAN</th>
                                <th>CATATAN PEMERIKSAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Pengawasan terhadap rencana umur konstruksi
                                </td>
                                <td>
                                    Terjaminnya bangunan konstruksi tetap laik fungsi sepanjang umur konstruksi yang di buktikan dengan tersedianya dokumen laik fungsi atau dokumen sejenis lainnya  <br>
                                </td>
                                <td>Dokumen laik fungsi atau dokumen sejenis yang di terbitkan oleh instansi berwenang </td>
                                <td>Memerika ketersediaan dokumen laik fungsi atau dokumen sejenis yang diterbitkan oleh instansi berwenang </td>
                                <td style="text-align: center;">
                                    @foreach ($datasurat as $item)
                                    {{$item->kesimpulanpemeriksaan}}
                                    @endforeach
                                </td>
                                 <td>
                                    @foreach ($datasurat as $item)
                                    {{$item->carapemeriksaan}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Pengawasan terhadap kapasitas dan beban
                                </td>
                                <td>
                                    Terjaminnya bangunan konstruksi dari kelebihan kapasitas dan beban yang di buktikan dengan tersedianya surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan<br>
                                </td>
                                <td>Surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan </td>
                                <td>Memerika ketersediaan surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau melakukan konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan</td>
                                <td style="text-align: center;">
                                    @foreach ($datasurat as $item)
                                    {{$item->catatan}}
                                    @endforeach
                                </td>
                                 <td>
                                    @foreach ($datasurat as $item)
                                    {{$item->dokumendiperiksa}}
                                    @endforeach
                                    </td>
                            </tr>

                        </tbody>
                    </table>
                                </div>



                                <div class="container" style="margin-top: 10px;">
                                    <!-- Modal Card -->

                                            <div class="container" style="margin-top: 10px;">
                                                <div class="row">
                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                        <!-- Modal Card -->
                                                        <div class="card" style="border: 1px solid white;">
                                                            <div class="card-body">
                                                                <!-- Tim Pemeriksa -->
                                                                <div class="tim-pemeriksa-container">
                                                                    <div class="tim-pemeriksa">
                                                                        <h6 style="font-size: 15px;">Tim Pemeriksa : Tertib Jakon Pengawasan Pemanfaatan <br> Terhadap Rencana Umur Konstruksi & Kapasitas Beban </h6>
                                                                        {{-- <p></p> --}}
                                                                        <table class="table table-sm">
                                                                            <thead class="table-secondary">
                                                                                <tr>
                                                                                    <th style="width: 60px; font-size: 15px; text-align:center;" >No</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Nama Pemeriksa</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Tanda Tangan</th>
                                                                                </tr>
                                                                            </thead>

                                                                            {{-- @foreach ($datasurat as $item) --}}

                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">1</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan1->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                        <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan1 && $tandatangan1->tandatangan && file_exists(public_path('storage/' . $tandatangan1->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan1->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan1 && $tandatangan1->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan1->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">2</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan2->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                     <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan2 && $tandatangan2->tandatangan && file_exists(public_path('storage/' . $tandatangan2->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan2->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan2 && $tandatangan2->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan2->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>


                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">3</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan3->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                    <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan3 && $tandatangan3->tandatangan && file_exists(public_path('storage/' . $tandatangan3->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan3->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan3 && $tandatangan3->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan3->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>

                                                                                </tr>
                                                                            </tbody>
                                                                            {{-- @endforeach --}}
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <br><br><br><br>
<!-- Tombol Submit -->

                            </div>
                        </form>

                        @endif


                                                     </div>


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

   <div class="modal fade" id="modalKtp{{ $datasurat_id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $datasurat_id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content" style="font-size: 0.875rem;">
                                            <div class="modal-header d-flex align-items-center">
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <span class="mx-2">:</span>
                                                <p style="margin-left: 10px; font-size: 0.9rem; margin-bottom: 0;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <p style="margin-left: 200px;">Surat Tertib Pemanfaatan Pengawasan Terhadap Rencana Umur Konstruksi & Kapasitas Beban </p>
                                            <div class="modal-body">
                                                {{-- <h5 style="font-size: 1rem;">Surat Dukung Tertib Jakon Pemanfaatan : <br> Pengawasan Tertib Pemanfaatan Produk Konstruksi Secara Rutin Terhadap Bangunan Konstruksi yang di Biayai dengan dana dari APBD </h5> --}}
                                                {{-- <table class="table table-bordered table-sm" style="font-size: 14px;"> --}}
                                                   {{-- <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $datasurat4->tertibjasakonstruksi->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                                    </tr> --}}
                                                    {{-- <tr>
                                                        <td style="width: 300px;"><strong>Nama Pekerjaan</strong></td>
                                                        <td>{{ $datasurat4->tertibjasakonstruksi->namapekerjaan ?? 'Data Belum Di Buat' }}</td>
                                                    </tr> --}}

                                                {{-- </table> --}}


                    <br>

                                              <table class="audit">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>LINGKUP PENGAWASAN</th>
                                <th>INDIKATOR</th>
                                <th>DOKUMEN YANG DIPERIKSA</th>
                                <th>CARA PEMERIKSAAN</th>
                                <th>KESIMPULAN PEMERIKSAAN</th>
                                <th>CATATAN PEMERIKSAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>
                                    Pengawasan terhadap rencana umur konstruksi
                                </td>
                                <td>
                                    Terjaminnya bangunan konstruksi tetap laik fungsi sepanjang umur konstruksi yang di buktikan dengan tersedianya dokumen laik fungsi atau dokumen sejenis lainnya  <br>
                                </td>
                                <td>Dokumen laik fungsi atau dokumen sejenis yang di terbitkan oleh instansi berwenang </td>
                                <td>Memerika ketersediaan dokumen laik fungsi atau dokumen sejenis yang diterbitkan oleh instansi berwenang </td>
                                <td style="text-align: center;">
                                    @foreach ($datasurat as $item)
                                    {{$item->kesimpulanpemeriksaan}}
                                    @endforeach
                                </td>
                                 <td>
                                    @foreach ($datasurat as $item)
                                    {{$item->carapemeriksaan}}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    Pengawasan terhadap kapasitas dan beban
                                </td>
                                <td>
                                    Terjaminnya bangunan konstruksi dari kelebihan kapasitas dan beban yang di buktikan dengan tersedianya surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan<br>
                                </td>
                                <td>Surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan </td>
                                <td>Memerika ketersediaan surat keterangan dari instansi yang memiliki kewenangan atau laporan dari pemilik/pengelola bangunan atau melakukan konfirmasi instansi yang memiliki kewenangan atau pemilik/pengelola bangunan</td>
                                <td style="text-align: center;">
                                    @foreach ($datasurat as $item)
                                    {{$item->catatan}}
                                    @endforeach
                                </td>
                                 <td>
                                    @foreach ($datasurat as $item)
                                    {{$item->dokumendiperiksa}}
                                    @endforeach
                                    </td>
                            </tr>

                        </tbody>
                    </table>



                                <div class="container" style="margin-top: 10px;">
                                    <!-- Modal Card -->

                                            <div class="container" style="margin-top: 10px;">
                                                <div class="row">
                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                        <!-- Modal Card -->
                                                        <div class="card" style="border: 1px solid white;">
                                                            <div class="card-body">
                                                                <!-- Tim Pemeriksa -->
                                                                <div class="tim-pemeriksa-container">
                                                                    <div class="tim-pemeriksa">
                                                                        <h6 style="font-size: 15px;">Tim Pemeriksa : Tertib Jakon Pengawasan Pemanfaatan <br> Terhadap Rencana Umur & Kapasitas Beban </h6>
                                                                        {{-- <p></p> --}}
                                                                        <table class="table table-sm">
                                                                            <thead class="table-secondary">
                                                                                <tr>
                                                                                    <th style="width: 60px; font-size: 15px; text-align:center;" >No</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Nama Pemeriksa</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Tanda Tangan</th>
                                                                                </tr>
                                                                            </thead>

                                                                            {{-- @foreach ($datasurat as $item) --}}

                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">1</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan1->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                        <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan1 && $tandatangan1->tandatangan && file_exists(public_path('storage/' . $tandatangan1->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan1->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan1 && $tandatangan1->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan1->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">2</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan2->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                     <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan2 && $tandatangan2->tandatangan && file_exists(public_path('storage/' . $tandatangan2->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan2->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan2 && $tandatangan2->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan2->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>


                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">3</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{-- {{ optional($item->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }} --}}
                                                                                        {{ $tandatangan3->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                    <td>
                                                                                            <div style="text-align: center;">
                                                                                                @if($tandatangan3 && $tandatangan3->tandatangan && file_exists(public_path('storage/' . $tandatangan3->tandatangan)))
                                                                                                    <!-- Kalau file tanda tangan ada di storage -->
                                                                                                    <img src="{{ asset('storage/' . $tandatangan3->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @elseif($tandatangan3 && $tandatangan3->tandatangan)
                                                                                                    <!-- Kalau file tanda tangan ada tapi path langsung -->
                                                                                                    <img src="{{ asset($tandatangan3->tandatangan) }}" alt="Tanda Tangan" style="max-height: 60px; width: auto;">
                                                                                                @else
                                                                                                    <!-- Kalau belum ada tanda tangan -->
                                                                                                    <p>-</p>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>

                                                                                </tr>
                                                                            </tbody>
                                                                            {{-- @endforeach --}}
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                                        <br><br><br><br>
                                            </div>


                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function downloadModalPDF(id) {
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);

        if (!modalContent) {
            alert('Konten modal tidak ditemukan.');
            return;
        }

        // Kloning isi modal
        const clone = modalContent.cloneNode(true);

        // Styling supaya rapih
        clone.style.fontSize = '12px';
        clone.style.padding = '10px';
        clone.style.margin = '0';

        // Paksa geser ke atas
        clone.style.transform = "translateY(-20px)"; // geser konten 20px lebih atas
        clone.style.position = "relative";

        const wrapper = document.createElement("div");
        wrapper.style.display = "flex";
        wrapper.style.justifyContent = "flex-start";
        wrapper.style.alignItems = "flex-start";
        wrapper.appendChild(clone);

        const fileName = `Tertibjakonpemanfaatan_surat1_${id}.pdf`;

        html2pdf()
            .from(wrapper)
            .set({
                margin: [0, 0.2, 0.2, 0.2], // margin atas = 0
                filename: fileName,
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 1.5 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
            })
            .save();
    }
</script>

                                        <script>
                                            function printModalContent(id) {
                                                const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
                                                if (!modalContent) {
                                                    alert("Konten tidak ditemukan.");
                                                    return;
                                                }

                                                const printWindow = window.open('', '', 'width=1200,height=800');
                                                printWindow.document.write(`
                                                    <html>
                                                    <head>
                                                        <title>Print Dokumen</title>
                                                        <style>
                                                            @media print {
                                                                @page {
                                                                    size: A4 landscape;
                                                                    margin: 0mm;
                                                                }
                                                                body {
                                                                    font-family: Arial, sans-serif;
                                                                    font-size: 12px;
                                                                    color: #000;
                                                                }
                                                                table {
                                                                    border-collapse: collapse;
                                                                    width: 100%;
                                                                    page-break-inside: auto;
                                                                }
                                                                th, td {
                                                                    border: 1px solid #000;
                                                                    padding: 4px;
                                                                    vertical-align: top;
                                                                }
                                                                .no-border td {
                                                                    border: none;
                                                                }
                                                            }

                                                            body {
                                                                margin: 10mm;
                                                                font-family: Arial, sans-serif;
                                                                font-size: 12px;
                                                            }

                                                            h5 {
                                                                font-size: 1rem;
                                                                margin-bottom: 10px;
                                                            }

                                                            .table-bordered {
                                                                border: 1px solid #000;
                                                                width: 100%;
                                                                margin-top: 10px;
                                                            }

                                                            .table-bordered th, .table-bordered td {
                                                                border: 1px solid #000;
                                                                padding: 6px;
                                                                text-align: left;
                                                            }

                                                            .table-secondary {
                                                                background-color: #f8f9fa;
                                                            }

                                                            /* Penyesuaian khusus untuk bagian tim pemeriksa */
                                                            .tim-pemeriksa-container {
                                                                display: flex;
                                                                justify-content: flex-end;
                                                            }

                                                            .tim-pemeriksa {
                                                                margin-top:-40px;
                                                                width: 50%;
                                                            }

                                                            .tim-pemeriksa table {
                                                                width: 100%;
                                                                margin-top:-30px;
                                                                border: 1px solid #000;
                                                            }

                                                            .tim-pemeriksa td, .tim-pemeriksa th {
                                                                text-align: center;
                                                                padding: 3px;
                                                                height: 15px;
                                                                font-size: 11px;
                                                            }
                                                        </style>
                                                    </head>
                                                    <body>
                                                        ${modalContent.innerHTML}
                                                        <script>
                                                            window.onload = function() {
                                                                window.print();
                                                                window.onafterprint = window.close;
                                                            }
                                                        <\/script>
                                                    </body>
                                                    </html>
                                                `);
                                                printWindow.document.close();
                                            }
                                        </script>
