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

                    <a href="/betertibjakonpenyelenggaraan">
                        <button class="button-newvalidasi">
                        <i class="bi bi-arrow-left icon-create"></i>
                            Kembali
                        </button>
                    </a>


       {{-- Tampilkan tombol jika surat kosong --}}
    @if ($datasurat->isEmpty())
        <a href="{{ route('betertibjakonpenyelenggaraan3create', ['id' => $id]) }}">
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
                                                    <i class="bi bi-building-fill"></i> Pengawasan Terhadap Ketersediaan Surat Pernyataan
                                                </th>

                                                <th style="width: 200px; text-align: center;">
                                                    <i class="bi bi-building-fill"></i> Pengawasan Terhadap Ketersediaan Isi Surat Pernyataan
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
    $kesesuaian = $item->kesimpulan1 ?? '-';
    $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
    $buttonClass = $kesesuaian === 'Sesuai' ? 'button-hijau' : 'button-merah';
    $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
@endphp

<td style="text-align: center;">
    <span class="{{ $buttonClass }}">
        <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
        {{ $tertibStatus }}
    </span>
</td>
                                @php
    $kesesuaian = $item->catatan1 ?? '-';
    $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
    $buttonClass = $kesesuaian === 'Sesuai' ? 'button-hijau' : 'button-merah';
    $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
@endphp

<td style="text-align: center;">
    <span class="{{ $buttonClass }}">
        <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
        {{ $tertibStatus }}
    </span>
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
                                             var deleteUrl = "{{ route('betertibjakonpenyelenggaraan3delete', ':id') }}";
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
                Berkas Dukung Pengawasan Terhadap Standar Keselamatan K3 Konstruksi Tidak Di Temukan !!
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
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Penyelenggaraan : Pengawasan Tertib Penyelenggaraan Konstruksi Secara Rutin <br> Penyelenggaraan Konstruksi dengan Sumber Dana dari APBD <br> <strong>Pengawasan Terhadap Standar Keselamatan K3 Konstruksi</strong> </h5>
                                            <br>
                                        <table class="table table-bordered table-sm" style="font-size: 14px;">
<tr>
    <td style="width: 200px;">
        <strong style="font-size: 15px;">Nama Proyek Konstruksi</strong>
    </td>

    <td>
        <input
            type="text"
            name="kegiatankonstruksi"
            class="form-control @error('kegiatankonstruksi') is-invalid @enderror"
            placeholder="Masukan Nama Proyek Konstruksi ..."
            value="{{ old('kegiatankonstruksi', $datainduk->kegiatankonstruksi ?? 'Data Masih Kosong') }}"
            readonly>

        @error('kegiatankonstruksi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

{{-- <tr>
    <td style="width: 300px;">
        <strong style="font-size: 15px;">Nilai Proyek Pekerjaan</strong>
    </td>
    <td>
        <input type="text"
               class="form-control @error('lingkuppengawasan') is-invalid @enderror"
               name="lingkuppengawasan"
               id="lingkuppengawasan"
               value="{{ old('lingkuppengawasan', $firstsurat->lingkuppengawasan ?? '') }}"
               placeholder="Masukkan Nilai Proyek...">
        @error('lingkuppengawasan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Nomor Kontrak</strong>
    </td>
    <td>
        <textarea class="form-control @error('indikator') is-invalid @enderror"
                  name="indikator"
                  rows="1"
                  placeholder="Masukkan Nomor Kontrak Pekerjaan...">{{ old('indikator', $firstsurat->indikator ?? '') }}</textarea>
        @error('indikator')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Waktu Pelaksanaan</strong>
    </td>
    <td>
        <div class="input-group">
            <input type="number"
                   class="form-control @error('dokumenperiksa') is-invalid @enderror"
                   name="dokumenperiksa"
                   value="{{ old('dokumenperiksa', $firstsurat->dokumenperiksa ?? '') }}"
                   placeholder="Masukkan Waktu Pelaksanaan...">
            <span class="input-group-text">Hari</span>
            @error('dokumenperiksa')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Penyedia Jasa CV/PT</strong>
    </td>
    <td>
        <textarea class="form-control @error('carapemerksaan1') is-invalid @enderror"
                  name="carapemerksaan1"
                  rows="3"
                  placeholder="Masukkan Nama Badan Usaha Jasa Konstruksi ...">{{ old('carapemerksaan1', $firstsurat->carapemerksaan1 ?? '') }}</textarea>
        @error('carapemerksaan1')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Nama Satuan Organisasi Perangkat Daerah</strong>
    </td>
    <td>
        <textarea class="form-control @error('carapemerksaan2') is-invalid @enderror"
                  name="carapemerksaan2"
                  rows="3"
                  placeholder="Masukkan OPD Contoh : Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora ...">{{ old('carapemerksaan2', $firstsurat->carapemerksaan2 ?? '') }}</textarea>
        @error('carapemerksaan2')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td colspan="2">
        <div class="row">
            <!-- Tanggal Mulai -->
            <div class="col-md-6">
                <label class="form-label" style="font-size: 15px; font-weight: bold;">Tanggal Mulai Pengawasan</label>
                <input type="date"
                       class="form-control @error('kesimpulan1') is-invalid @enderror"
                       name="kesimpulan1"
                       value="{{ old('kesimpulan1', $firstsurat->kesimpulan1 ?? '') }}">
                @error('kesimpulan1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Akhir -->
            <div class="col-md-6">
                <label class="form-label" style="font-size: 15px; font-weight: bold;">Tanggal Akhir Pengawasan</label>
                <input type="date"
                       class="form-control @error('kesimpulan2') is-invalid @enderror"
                       name="kesimpulan2"
                       value="{{ old('kesimpulan2', $firstsurat->kesimpulan2 ?? '') }}">
                @error('kesimpulan2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </td>
</tr> --}}


                                        </table>
                    <br>
                    <table style="width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">No</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Lingkup Pengawasan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Indikator</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Dokumen yang diperiksa</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Cara Pemeriksaan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; width:100px;">Kesimpulan <br> Pemeriksaan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; width:125px;">Catatan <br> Pemeriksaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">3</td>
            <td style="border: 1px solid #000; padding: 5px;" rowspan="2">Pengawasan terhadap penerapan Standar Keamanan, Keselamatan, Kesehatan, dan Keberlanjutan Konstruksi</td>
            <td style="border: 1px solid #000; padding: 5px;">a. Ketersediaan dokumen penerapan standar K4</td>
            <td style="border: 1px solid #000; padding: 5px;">Surat pernyataan dari Kuasa Penguna Anggaran atau pejabat pembuat komitmen bahwa sudah mennenuhi ketentuan dalam Standar K4</td>
            <td style="border: 1px solid #000; padding: 5px;">Memeriksa ketersediaan surat pernyataan</td>

<td style="border: 1px solid #000; text-align: center;">
    @php
        $nilai = $firstsurat->kesimpulan1 ?? ''; // ambil data sebelumnya
        $btnColor = $nilai === 'Sesuai' ? 'button-hijau' : 'button-merah';
    @endphp

    <button type="button" class="btn {{ $btnColor }}">
        {{ $nilai ?: '-- Belum Diisi --' }}
    </button>
</td>
<td style="border: 1px solid #000;">
    <textarea
        class="form-control @error('kesimpulan2') is-invalid @enderror"
        name="kesimpulan2"
        rows="3"
        placeholder="Masukkan Catatan Pemeriksaan...">{{ old('kesimpulan2', $firstsurat->kesimpulan2 ?? '') }}</textarea>
    @error('kesimpulan2')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</td>

        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;">b. Ketersediaan penerapan SMKK <br><hr> c. Ketersediaan Dokumen Bukti antisipasi kecelekaan konstruksi </td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;">Memeriksa isi surat pernyataan</td>

<td style="border: 1px solid #000; text-align: center;">
    @php
        $nilai = $firstsurat->catatan1 ?? ''; // ambil data sebelumnya
        $btnColor = $nilai === 'Sesuai' ? 'button-hijau' : 'button-merah';
    @endphp

    <button type="button" class="btn {{ $btnColor }}">
        {{ $nilai ?: '-- Belum Diisi --' }}
    </button>
</td>
<td style="border: 1px solid #000;">
    <textarea
        class="form-control @error('catatan2') is-invalid @enderror"
        name="catatan2"
        rows="3"
        placeholder="Masukkan Catatan Pemeriksaan...">{{ old('catatan2', $firstsurat->catatan2 ?? '') }}</textarea>
    @error('catatan2')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
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
                                                                        <h6 style="font-size: 15px;">Tim Pemeriksa:</h6>
                                                                        <table class="table table-sm">
                                                                            <thead class="table-secondary">
                                                                                <tr>
                                                                                    <th style="width: 60px; font-size: 15px; text-align:center;" >No</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Nama Pemeriksa</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Tanda Tangan</th>
                                                                                </tr>
                                                                            </thead>

                                                                            @foreach ($datasurat as $item)

                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">1</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{ optional($item->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                       <td>
    <div style="margin-top: 10px; text-align: center;">
        @if((optional($item->tandatangan1)->tandatangan ?? null) && file_exists(storage_path('app/public/' . (optional($item->tandatangan1)->tandatangan ?? ''))))
            <!-- Jika tanda tangan ada di storage -->
            <img src="{{ asset('storage/' . (optional($item->tandatangan1)->tandatangan ?? '')) }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @elseif(optional($item->tandatangan1)->tandatangan ?? null)
            <!-- Jika tanda tangan ada tapi path langsung -->
            <img src="{{ asset(optional($item->tandatangan1)->tandatangan ?? '') }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @else
            <!-- Kalau belum ada -->
            <p><i>Tanda tangan belum diupload</i></p>
        @endif
    </div>
</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">2</td>
                                                                                      <td style="font-size: 16px;">
                                                                                        {{ optional($item->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
<td>
    <div style="margin-top: 10px; text-align: center;">
        @if((optional($item->tandatangan2)->tandatangan ?? null) && file_exists(storage_path('app/public/' . (optional($item->tandatangan2)->tandatangan ?? ''))))
            <!-- Jika tanda tangan ada di storage -->
            <img src="{{ asset('storage/' . (optional($item->tandatangan2)->tandatangan ?? '')) }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @elseif(optional($item->tandatangan2)->tandatangan ?? null)
            <!-- Jika tanda tangan ada tapi path langsung -->
            <img src="{{ asset(optional($item->tandatangan2)->tandatangan ?? '') }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @else
            <!-- Kalau belum ada -->
            <p><i>Tanda tangan belum diupload</i></p>
        @endif
    </div>
</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">3</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{ optional($item->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
<td>
    <div style="margin-top: 10px; text-align: center;">
        @if((optional($item->tandatangan3)->tandatangan ?? null) && file_exists(storage_path('app/public/' . (optional($item->tandatangan3)->tandatangan ?? ''))))
            <!-- Jika tanda tangan ada di storage -->
            <img src="{{ asset('storage/' . (optional($item->tandatangan3)->tandatangan ?? '')) }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @elseif(optional($item->tandatangan3)->tandatangan ?? null)
            <!-- Jika tanda tangan ada tapi path langsung -->
            <img src="{{ asset(optional($item->tandatangan3)->tandatangan ?? '') }}"
                 alt="Tanda Tangan"
                 style="max-width: 70px; height: auto; display: inline-block;">
        @else
            <!-- Kalau belum ada -->
            <p><i>Tanda tangan belum diupload</i></p>
        @endif
    </div>
</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            @endforeach
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
                                        <div class="modal-content" style="font-size: 0.875rem; margin-top:-10px;" >
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
                                            <div class="modal-body">
                                                <h5 style="font-size: 1rem;">Surat Dukung Tertib Jakon Penyelenggaraan : <br> Pengawasan Tertib Penyelenggaraan Konstruksi Secara Rutin <br> Penyelenggaraan Konstruksi dengan Sumber Dana dari APBD <br> <strong>Pengawasan Terhadap Standar Keselamatan K3 Konstruksi</strong> </h5>
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

                                                {{-- ini bro igit --}}

                                                                                   <table class="table table-bordered table-sm" style="font-size: 14px;">
<tr>
    <td style="width: 200px;">
        <strong style="font-size: 15px;">Nama Proyek Konstruksi</strong>
    </td>

    <td>
        <input
            type="text"
            name="kegiatankonstruksi"
            class="form-control @error('kegiatankonstruksi') is-invalid @enderror"
            placeholder="Masukan Nama Proyek Konstruksi ..."
            value="{{ old('kegiatankonstruksi', $datainduk->kegiatankonstruksi ?? 'Data Masih Kosong') }}"
            readonly>

        @error('kegiatankonstruksi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

{{-- <tr>
    <td style="width: 300px;">
        <strong style="font-size: 15px;">Nilai Proyek Pekerjaan</strong>
    </td>
    <td>
        <input type="text"
               class="form-control @error('lingkuppengawasan') is-invalid @enderror"
               name="lingkuppengawasan"
               id="lingkuppengawasan"
               value="{{ old('lingkuppengawasan', $firstsurat->lingkuppengawasan ?? '') }}"
               placeholder="Masukkan Nilai Proyek...">
        @error('lingkuppengawasan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Nomor Kontrak</strong>
    </td>
    <td>
        <textarea class="form-control @error('indikator') is-invalid @enderror"
                  name="indikator"
                  rows="1"
                  placeholder="Masukkan Nomor Kontrak Pekerjaan...">{{ old('indikator', $firstsurat->indikator ?? '') }}</textarea>
        @error('indikator')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Waktu Pelaksanaan</strong>
    </td>
    <td>
        <div class="input-group">
            <input type="number"
                   class="form-control @error('dokumenperiksa') is-invalid @enderror"
                   name="dokumenperiksa"
                   value="{{ old('dokumenperiksa', $firstsurat->dokumenperiksa ?? '') }}"
                   placeholder="Masukkan Waktu Pelaksanaan...">
            <span class="input-group-text">Hari</span>
            @error('dokumenperiksa')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Penyedia Jasa CV/PT</strong>
    </td>
    <td>
        <textarea class="form-control @error('carapemerksaan1') is-invalid @enderror"
                  name="carapemerksaan1"
                  rows="3"
                  placeholder="Masukkan Nama Badan Usaha Jasa Konstruksi ...">{{ old('carapemerksaan1', $firstsurat->carapemerksaan1 ?? '') }}</textarea>
        @error('carapemerksaan1')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td>
        <strong style="font-size: 15px;">Nama Satuan Organisasi Perangkat Daerah</strong>
    </td>
    <td>
        <textarea class="form-control @error('carapemerksaan2') is-invalid @enderror"
                  name="carapemerksaan2"
                  rows="3"
                  placeholder="Masukkan OPD Contoh : Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora ...">{{ old('carapemerksaan2', $firstsurat->carapemerksaan2 ?? '') }}</textarea>
        @error('carapemerksaan2')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<tr>
    <td colspan="2">
        <div class="row">
            <!-- Tanggal Mulai -->
            <div class="col-md-6">
                <label class="form-label" style="font-size: 15px; font-weight: bold;">Tanggal Mulai Pengawasan</label>
                <input type="date"
                       class="form-control @error('kesimpulan1') is-invalid @enderror"
                       name="kesimpulan1"
                       value="{{ old('kesimpulan1', $firstsurat->kesimpulan1 ?? '') }}">
                @error('kesimpulan1')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tanggal Akhir -->
            <div class="col-md-6">
                <label class="form-label" style="font-size: 15px; font-weight: bold;">Tanggal Akhir Pengawasan</label>
                <input type="date"
                       class="form-control @error('kesimpulan2') is-invalid @enderror"
                       name="kesimpulan2"
                       value="{{ old('kesimpulan2', $firstsurat->kesimpulan2 ?? '') }}">
                @error('kesimpulan2')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </td>
</tr> --}}


                                        </table>
                    <br>

<table style="width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">No</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Lingkup Pengawasan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Indikator</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Dokumen yang diperiksa</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Cara Pemeriksaan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; width:100px;">Kesimpulan <br> Pemeriksaan</th>
            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; width:120px;">Catatan <br> Pemeriksaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #000; text-align: center; padding: 5px;">3</td>
            <td style="border: 1px solid #000; padding: 5px;" rowspan="2">Pengawasan terhadap penerapan Standar Keamanan, Keselamatan, Kesehatan, dan Keberlanjutan Konstruksi</td>
            <td style="border: 1px solid #000; padding: 5px;">a. Ketersediaan dokumen penerapan standar K4</td>
            <td style="border: 1px solid #000; padding: 5px;">Surat pernyataan dari Kuasa Penguna Anggaran atau pejabat pembuat komitmen bahwa sudah mennenuhi ketentuan dalam Standar K4</td>
            <td style="border: 1px solid #000; padding: 5px;">Memeriksa ketersediaan surat pernyataan</td>

<td style="border: 1px solid #000; text-align: center;">
    @php
        $nilai = $firstsurat->kesimpulan1 ?? ''; // ambil data sebelumnya
        $btnColor = $nilai === 'Sesuai' ? 'button-hijau' : 'button-merah';
    @endphp

    <button type="button" class="btn {{ $btnColor }}">
        {{ $nilai ?: '-- Belum Diisi --' }}
    </button>
</td>
<td style="border: 1px solid #000;">
    <textarea
        class="form-control @error('kesimpulan2') is-invalid @enderror"
        name="kesimpulan2"
        rows="3"
        placeholder="Masukkan Catatan Pemeriksaan...">{{ old('kesimpulan2', $firstsurat->kesimpulan2 ?? '') }}</textarea>
    @error('kesimpulan2')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</td>

        </tr>
        <tr>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;">b. Ketersediaan penerapan SMKK <br><hr> c. Ketersediaan Dokumen Bukti antisipasi kecelekaan konstruksi </td>
            <td style="border: 1px solid #000; padding: 5px;"></td>
            <td style="border: 1px solid #000; padding: 5px;">Memeriksa isi surat pernyataan</td>

<td style="border: 1px solid #000; text-align: center;">
    @php
        $nilai = $firstsurat->catatan1 ?? ''; // ambil data sebelumnya
        $btnColor = $nilai === 'Sesuai' ? 'button-hijau' : 'button-merah';
    @endphp

    <button type="button" class="btn {{ $btnColor }}">
        {{ $nilai ?: '-- Belum Diisi --' }}
    </button>
</td>
<td style="border: 1px solid #000;">
    <textarea
        class="form-control @error('catatan2') is-invalid @enderror"
        name="catatan2"
        rows="3"
        placeholder="Masukkan Catatan Pemeriksaan...">{{ old('catatan2', $firstsurat->catatan2 ?? '') }}</textarea>
    @error('catatan2')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
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
    <div class="tim-pemeriksa" style="margin-top:10px; font-size: 0.75rem;">
        <h6 style="font-size: 0.8rem; margin-bottom: 5px;">Tim Pemeriksa:</h6>
        <table class="table table-bordered table-sm" style="margin-top:-5px; font-size: 0.75rem;">
            <thead class="table-secondary">
                <tr>
                    <th style="width: 30px; text-align:center;">No</th>
                    <th style="text-align:center;">Nama Lengkap</th>
                    <th style="width: 100px; text-align:center;">Tanda Tangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;">1</td>
                    <td>
                        {{ $firstsurat->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}

<td style="text-align:center;">
    <div>
        @php
            $tanda = optional($firstsurat)->tandatangan1->tandatangan ?? null;
            $tandaPath = $tanda ? storage_path('app/public/' . $tanda) : null;
        @endphp

        @if($tanda && file_exists($tandaPath))
            <img src="{{ asset('storage/' . $tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @elseif($tanda)
            <img src="{{ asset($tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @else
            <small><i>Belum upload</i></small>
        @endif
    </div>
</td>

                </tr>

                <tr>
                    <td style="text-align:center;">2</td>
                    <td>
                        {{ $firstsurat->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}
                    </td>
<td style="text-align:center;">
    <div>
        @php
            $tanda = optional($firstsurat)->tandatangan2->tandatangan ?? null;
            $tandaPath = $tanda ? storage_path('app/public/' . $tanda) : null;
        @endphp

        @if($tanda && file_exists($tandaPath))
            <img src="{{ asset('storage/' . $tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @elseif($tanda)
            <img src="{{ asset($tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @else
            <small><i>Belum upload</i></small>
        @endif
    </div>
</td>
                </tr>

                <tr>
                    <td style="text-align:center;">3</td>
                    <td>
                        {{ $firstsurat->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}
                    </td>

<td style="text-align:center;">
    <div>
        @php
            $tanda = optional($firstsurat)->tandatangan3->tandatangan ?? null;
            $tandaPath = $tanda ? storage_path('app/public/' . $tanda) : null;
        @endphp

        @if($tanda && file_exists($tandaPath))
            <img src="{{ asset('storage/' . $tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @elseif($tanda)
            <img src="{{ asset($tanda) }}" alt="Tanda Tangan" style="max-height:40px;">
        @else
            <small><i>Belum upload</i></small>
        @endif
    </div>
</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                    {{--
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
                                                                                        <h6 style="font-size: 0.9rem;">Tim Pemeriksa:</h6>
                                                                                        <table class="table table-sm">
                                                                                            <thead class="table-secondary">
                                                                                                <tr>
                                                                                                    <th style="width: 60px; font-size: 12px;" >No</th>
                                                                                                    <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                                                                                                    <th style="width: 150px; text-align: center; font-size: 12px;">Tanda Tangan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                 <tr>
                                                                                                    <td style="font-size: 12px; text-align: center;">1</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan1->tandatangan ?? 'Belum Di Tanda Tangan'}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px; text-align: center;">2</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan2->tandatangan ?? 'Belum Di Tanda Tangan'}}</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px; text-align: center;">3</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="font-size: 12px;">{{$datasurat4->tandatangan3->tandatangan ?? 'Belum Di Tanda Tangan'}}</td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <br><br><br><br>
                                            </div>


                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function downloadModalPDF(id) {
        // Ambil elemen modal berdasarkan ID
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);

        if (!modalContent) {
            alert('Konten modal tidak ditemukan.');
            return;
        }

        // Kloning isi modal agar tidak mengganggu tampilan asli
        const clone = modalContent.cloneNode(true);

        // Styling agar rapat ke atas
        clone.style.fontSize = '12px';
        clone.style.padding = '3px';
        clone.style.margin = '0';
        clone.style.position = 'relative';
        clone.style.top = '0'; // pepetin atas

        // Format nama file
        const fileName = `Tertibjakonpenyelenggaraan_surat3_${id}.pdf`;

        // Konversi ke PDF
        html2pdf()
            .from(clone)
            .set({
                margin: [5, 5, 5, 5], // tipis, biar aman dari crop printer
                filename: fileName,
                image: { type: 'jpeg', quality: 1 },
                html2canvas: { scale: 1.2, scrollY: 0 }, // scrollY:0 biar tidak ikut offset
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' },
                pagebreak: { mode: 'avoid' }
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
                                                                width: 50%;
                                                            }

                                                            .tim-pemeriksa table {
                                                                width: 100%;
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
