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

                   {{-- @if ($datasurat->isNotEmpty())
                    <a href="{{ url('betertibjakonmanfaat1showberkassurat/show/' . $datasurat_id) }}">
                        <button class="btn-create">
                            <i class="bi bi-file-earmark icon-create"></i> Dokumen
                        </button>
                    </a>
                    @endif --}}

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
                                             var deleteUrl = "{{ route('betertibjakonusahapelaksanadelete', ':id') }}";
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

                            {{-- ---------------------------------- --}}
<hr>
                            {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form  method="POST" enctype="multipart/form-data">
                            @csrf

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
                                                        {{ $datanamabangunan ?? '-' }}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Lokasi Bangunan </strong>
                                                </td>
                                                <td>
                                                    <div style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;">
                                                        {{ $namalokasi ?? '-' }}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Nama Pemilik Bangunan </strong>
                                                </td>
                                              <td>
                                                    <input
                                                        type="text"
                                                        value="{{ $datasurat->lingkuppengawasan }}"
                                                        class="form-control"
                                                        readonly
                                                        style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #e9ecef;"
                                                    >
                                                </td>

                                            </tr>
                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Nama Pengelola Bangunan </strong>
                                                </td>
                                                <td>
                                                        <input
                                                            type="text"
                                                            name="indikator"
                                                            value="{{ old('indikator') }}"
                                                            class="form-control"
                                                            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; background-color: #fff;"
                                                        >
                                                           @error('indikator')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>

                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Kesimpulan Pemeriksaan</strong>
                                                </td>
<!-- Pilihan Kesimpulan -->
    <td>
        <select name="kesimpulanpemeriksaan"
            class="form-control @error('kesimpulanpemeriksaan') is-invalid @enderror"
            id="kesimpulanSelect"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
            <option value="" disabled {{ old('kesimpulanpemeriksaan') ? '' : 'selected' }}>--- Pilih Kesimpulan ---</option>
            <option value="Sesuai" {{ old('kesimpulanpemeriksaan') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
            <option value="Tidak Sesuai" {{ old('kesimpulanpemeriksaan') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
        </select>
        @error('kesimpulanpemeriksaan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>

                                            </tr>

                                            <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Catatan</strong>
                                                </td>
                                                <td>
                                                    <select name="catatan"
                                                        class="form-control @error('catatan') is-invalid @enderror"
                                                        id="catatanSelect"
                                                        style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
                                                        <option value="" disabled {{ old('catatan') ? '' : 'selected' }}>--- Pilih Catatan ---</option>
                                                        <option value="Tersedia" {{ old('catatan') == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                                        <option value="Tidak Tersedia" {{ old('catatan') == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                    </select>
                                                    @error('catatan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                                </tr>


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

                                </div>


                                <br><br>
<!-- Tombol Submit -->
<div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
    <div class="flex justify-end">
        <button class="btn-create" type="button" onclick="openModal()">
        <!-- Ikon SVG Pensil -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
         <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
       </svg>
        <span style="font-family: 'Poppins', sans-serif;">Buat Berkas</span>
    </button>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
            <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                Apakah Anda ingin membuat berkas ini?
            </p>

            <!-- Checkbox Konfirmasi -->
            <p style="font-size: 14px; margin-top: 10px; text-align: left; display: flex; align-items: center;">
                <input type="checkbox" id="agreeCheckbox" onchange="toggleSubmitButton()" style="margin-right: 10px;" />
                <label for="agreeCheckbox" style="margin: 0;">
                    Data yang dibuat tidak bisa dirubah kembali, harap periksa kembali data anda!!
                </label>
            </p>

            <!-- Tombol -->
            <div style="display: flex; justify-content: center; gap: 12px;">
                <button id="confirmSubmitBtn"
                    onclick="submitForm()"
                    disabled
                    style="background-color: #DC2626; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px; cursor: not-allowed;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                    onmouseout="this.style.backgroundColor=this.disabled ? '#DC2626' : '#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">

                    <!-- Icon Forbidden Default -->
                    <svg id="submitIcon" xmlns="http://www.w3.org/2000/svg" height="16" fill="white" viewBox="0 0 512 512">
                        <path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zM256 432c-97.2 0-176-78.8-176-176 0-38.6 12.5-74.2 33.5-103L359 398.5C330.2 419.5 294.6 432 256 432zM398.5 359L153 113.5C181.8 92.5 217.4 80 256 80c97.2 0 176 78.8 176 176 0 38.6-12.5 74.2-33.5 103z"/>
                    </svg>
                    Ya
                </button>

                <!-- Tombol Batal dengan ikon X (SVG) -->
                <button type="button"
                        onclick="closeModal()"
                        style="background-color: #666363; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                        onmouseout="this.style.backgroundColor='#666363'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                        <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                    </svg>
                    Batal
                </button>

            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script>
function openModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "flex";
}

function closeModal() {
    const modal = document.getElementById("confirmModal");
    if (modal) modal.style.display = "none";
}

function toggleSubmitButton() {
    const checkbox = document.getElementById("agreeCheckbox");
    const btn = document.getElementById("confirmSubmitBtn");
    const icon = document.getElementById("submitIcon");

    if (checkbox.checked) {
        btn.disabled = false;
        btn.style.cursor = 'pointer';
        btn.style.backgroundColor = '#10B981'; // Hijau
        // Ganti ikon ke Telegram
        icon.setAttribute("viewBox", "0 0 448 512");
        icon.innerHTML = '<path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>';
    } else {
        btn.disabled = true;
        btn.style.cursor = 'not-allowed';
        btn.style.backgroundColor = '#DC2626'; // Merah
        // Kembalikan ikon ke Forbidden
        icon.setAttribute("viewBox", "0 0 512 512");
        icon.innerHTML = '<path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zM256 432c-97.2 0-176-78.8-176-176 0-38.6 12.5-74.2 33.5-103L359 398.5C330.2 419.5 294.6 432 256 432zM398.5 359L153 113.5C181.8 92.5 217.4 80 256 80c97.2 0 176 78.8 176 176 0 38.6-12.5 74.2-33.5 103z"/>';
    }
}


function submitForm() {
    // Ambil form element
    const form = document.querySelector('form');
    // Submit form jika ditemukan
    if (form) {
        form.submit();
    }
    // Tutup modal
    closeModal();
}
</script>

                            </div>
                        </form>


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
