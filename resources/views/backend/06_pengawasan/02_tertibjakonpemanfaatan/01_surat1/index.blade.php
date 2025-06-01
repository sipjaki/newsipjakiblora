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

                    <a href="/betertibjakonpemanfaatan">
                        <button class="btn-kembali">
                        <i class="bi bi-arrow-left icon-create"></i>
                            Kembali
                        </button>
                    </a>


       {{-- Tampilkan tombol jika surat kosong --}}
    @if ($datasurat->isEmpty())
        <a href="{{ route('betertibjakonpemanfataanjakoncreateberkas', ['id' => $id]) }}">
            <button class="btn-create">
                <i class="bi bi-file-earmark-plus"></i> Buat Berkas
            </button>
        </a>
    @endif
                                    {{-- @endif --}}

                   @if ($datasurat->isNotEmpty())
                    <a href="{{ url('betertibjakonusahapelaksana/show/' . $datasurat_id) }}">
                        <button class="btn-create">
                            <i class="bi bi-file-earmark icon-create"></i> Dokumen
                        </button>
                    </a>
                    @endif

                <button class="btn-create">
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
                                                    <i class="bi bi-building-fill"></i> Peruntukan Fungsi
                                                </th>

                                                <th style="width: 200px; text-align: center;">
                                                    <i class="bi bi-building-fill"></i> Peruntukan Lokasi
                                                </th>

                                                <th style="width: 100px; text-align: center;">
                                                    <i class="bi bi-gear-fill"></i> Aksi
                                                </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($datasurat->isEmpty())
                                        <tr>
                                            <td colspan="100%" class="text-center p-4 bg-yellow-100 text-yellow-800 font-semibold rounded-lg">
                                                Surat Dukung Tertib Pemanfaatan <strong>Belum Dibuat</strong>!
                                            </td>
                                        </tr>
                                    @else

                                @foreach ($datasurat as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->tertibjakonpemanfaatan->namabangunan }}</td> --}}

                                            @php
                                                $kesesuaian = $item->kesimpulanpemeriksaan ?? 'Surat Belum Di Buat';
                                                $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                                                $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
                                                $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                                            @endphp

                                            <td style="text-align: center;">
                                                <button
                                                    style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                    onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                                                >
                                                    <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                                                    {{ $tertibStatus }}
                                                </button>
                                            </td>

                                        @php
                                                $kesesuaian = $item->catatan ?? 'Surat Belum Di Buat';
                                                $tertibStatus = $kesesuaian === 'Tersedia' ? 'TERTIB' : 'BELUM TERTIB';
                                                $color = $kesesuaian === 'Tersedia' ? 'blue' : 'red';
                                                $icon = $kesesuaian === 'Tersedia' ? 'bi-check-circle' : 'bi-x-circle';
                                            @endphp

                                            <td style="text-align: center;">
                                                <button
                                                    style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                    onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                                                >
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
                                             var deleteUrl = "{{ route('betertibjakonmanfaat1deleteberkas', ':id') }}";
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
                                        @endif

                                </tbody>
                            </table>
                            <br><br><br>
                            <hr>
                            <br><br>

                            {{-- ============================================================== --}}
                        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        {{-- <form method="POST" enctype="multipart/form-data"> --}}
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
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Usaha : Pelaksana Pengembangan Usaha Jasa Konstruksi Secara Rutin</h5>
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
                                            {{-- <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Nama Pemilik Bangunan </strong>
                                                </td>
                                           <td>
                                                <div style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;">

                                                        {{ $data->lingkuppengawasan ?? '-' }}

                                                </div>
                                            </td>

                                            </tr>
                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Nama Pengelola Bangunan </strong>
                                                </td>
                                            <td>
                                                    <div style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;">

                                                        {{ $data->indikator ?? '-' }}

                                                    </div>
                                                </td>
                                            </tr> --}}

                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Waktu Pengawasan</strong>
                                                </td>
                                                <td class="d-flex gap-2">
                                                    <input type="date" class="form-control @error('dokumendiperiksa') is-invalid @enderror" name="dokumendiperiksa" value="{{ old('dokumendiperiksa') }}" placeholder="Dimulai Sejak ... ">
                                                    @error('dokumendiperiksa')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                    <span class="mx-1">(Sampai Dengan)</span>

                                                    <input type="date" class="form-control @error('carapemeriksaan') is-invalid @enderror" name="carapemeriksaan" value="{{ old('carapemeriksaan') }}" placeholder="Berakhir Tanggal ... ">
                                                    @error('carapemeriksaan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                        </table>
                    <br>
                    <table class="audit">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>LINGKUP PENGAWASAN</th>
                                <th>Indikator</th>
                                <th>DOKUMEN YANG DIPERIKSA</th>
                                <th>CARA PEMERIKSAAN</th>
                                <th>KESIMPULAN PEMERIKSAAN</th>
                                <th>CATATAN PEMERIKSAAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">1</td>
                                <td rowspan="2">
                                    Pengawasan fungsi peruntukan terhadap tertib pemanfaatan produk Jasa Konstruksi
                                </td>
                                <td>
                                    a. Kesesuaian pemanfaatan bangunan konstruksi dengan fungsi yang direncanakan:<br>
                                    &bull; Bangunan gedung sesuai dengan perizinan<br>
                                    &bull; Bangunan sipil sesuai dengan peraturan perundangan
                                </td>
                                <td>Dokumen perizinan</td>
                                <td>Membandingkan izin pembangunan dengan fakta di lapangan</td>
                                <td style="text-align: center;">
                                    <span id="textKesimpulan" style="font-size: 15px; font-weight: 600; color: #333;"></span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    b. Kesesuaian lokasi bangunan konstruksi dengan peruntukan yang diatur dalam rencana detail tata ruang atau Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)
                                </td>
                                <td>Dokumen resmi dari instansi berwenang</td>
                                <td>Memeriksa ketersediaan Dokumen resmi dari instansi berwenang</td>
                             <td style="text-align: center;">
                                 <span id="textCatatan" style="font-size: 15px; font-weight: 600; color: #333;"></span>
                            </td>

                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <br><br><br><br><br>
                                </div>


                            </div>
                        {{-- </form> --}}


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
