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

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.13_judulcreate')
                    </div>



                           {{-- ======================================================= --}}
                           <div class="card card-primary card-outline mb-6">
                            <div style="display: flex; justify-content: space-between; margin-top: 10px; flex-wrap: wrap; margin-bottom:20px;">
                                <!-- Kontainer Kiri -->
                                <div style="display: flex; gap: 10px; margin-right:25px; margin-left:25px;">
                                    <!-- Tombol Nama Pekerjaan -->
                                    <button class="btn-create">
                                        <i class="bi bi-file-earmark" style="margin-right: 8px;"></i>
                                        Kegiatan Konstruksi: {{ $data->kegiatankonstruksi ?? 'Masih Kosong' }}
                                    </button>

                                    <!-- Tombol Badan Usaha -->
                                    {{-- <a href="/404">
                                        <button class="btn-create">
                                            <i class="bi bi-tools icon-create"></i>
                                            Perbaikan Data
                                        </button>
                                    </a>

                                    <a href="/404">
                                        <button class="btn-create">
                                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Download Berkas
                                        </button>
                                    </a>

                                        <button class="btn-create"
                                            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $data->id }}">
                                            <i class="bi bi-file-earmark-text icon-create"></i>
                                            Lihat Berkas
                                        </button> --}}




                                <div class="modal fade" id="modalKtp{{ $data->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $data->id }}" aria-hidden="true">
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
                                            <div class="modal-body">
                                                <h5 style="font-size: 1rem;">Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin </h5>
                                                <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha1->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 300px;"><strong>Status Perizinan Berusaha</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha1->statusperizinan ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>No NIB</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha1->nib ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                        <td>
                                                            @if ($data->surattertibjakonusaha1 && $data->surattertibjakonusaha1->waktupengawasan && $data->surattertibjakonusaha1->waktupengawasanselesai)
                                                                {{ \Carbon\Carbon::parse($data->surattertibjakonusaha1->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                –
                                                                {{ \Carbon\Carbon::parse($data->surattertibjakonusaha1->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                            @else
                                                                <span class="text-muted">Belum Di Buat</span>
                                                            @endif
                                                        </td>


                                                    </tr>
                                                </table>

                                                {{-- <h6 class="mt-4" style="font-size: 0.9rem;">Detail Kegiatan:</h6> --}}
                                                <table style="width: 100%; border-collapse: collapse; font-size: 12px; color: #000;">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 50px;">No</th>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nama Paket Pekerjaan</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Jenis</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Sifat</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Subklasifikasi</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Layanan Usaha</th>
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Jenis Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Sifat Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Sub Klasifikasi</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Layanan Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #000; text-align: center;">1</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha1->namapaketpekerjaan ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha1->jenisusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha1->kesesuaian ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha1->sifatusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha1->kesesuaiansbu ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha1->subklasifikasi->kode ?? 'Data Belum Di Buat '}} {{$data->surattertibjakonusaha1->subklasifikasi->pekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha1->kesesuaianklasifikasi ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha1->layananusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha1->kesesuaianlayananusaha ?? 'Data Belum Di Buat'}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="container" style="margin-top: 10px;">
                                                    <!-- Modal Card -->


                                                        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                                </div>

                                <!-- Kontainer Kanan -->
                                <div>
                             <a href="{{ url()->previous() }}">
                                    <button class="btn-kembali">
                                        <i class="bi bi-arrow-left icon-create" style="margin-right: 8px;"></i>
                                        Kembali
                                    </button>
                                </a>

                                </div>
                            </div>

                        </div>

        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('betertibjakonpenyelenggaraaninformasi') }}" method="POST" enctype="multipart/form-data">
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
                                        <h5 style="font-size: 15px;">Pemeriksaan Tertib Penyelenggaran Konstruksi Secara Rutin <br> Penyelenggaran Konstruksi dengan Sumber Dana dari APBD</h5>
                                            <br>

                                                                                 <table class="table table-bordered table-sm" style="font-size: 14px;">
<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Nama Proyek Konstruksi</strong>
    </td>
    <td>
        <input type="text" name="namaproyekkonstruksi"
            class="form-control @error('namaproyekkonstruksi') is-invalid @enderror"
            value="{{ old('namaproyekkonstruksi', $data->namaproyekkonstruksi ?? '') }}"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
        @error('namaproyekkonstruksi')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>


<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Nilai Proyek</strong>
    </td>
    <td>
        <div style="display: flex; align-items: center;">
            <span style="margin-right: 6px; font-size: 15px;">Rp.</span>
            <input type="text" id="nilaiproyek_display"
                class="form-control @error('nilaiproyek') is-invalid @enderror"
                value="{{ old('nilaiproyek', number_format($data->nilaiproyek ?? 0, 0, ',', '.')) }}"
                style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem; width: 100%;">
        </div>

        <input type="hidden" name="nilaiproyek" id="nilaiproyek"
            value="{{ old('nilaiproyek', $data->nilaiproyek ?? '') }}">

        @error('nilaiproyek')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>
<script>
    const displayInput = document.getElementById('nilaiproyek_display');
    const hiddenInput = document.getElementById('nilaiproyek');

    function formatRupiah(angka) {
        return angka.replace(/\D/g, '') // Hapus semua non-digit
                    .replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Tambah titik
    }

    displayInput.addEventListener('input', function () {
        const rawValue = this.value.replace(/\./g, ''); // Hapus titik untuk dapat angka mentah
        hiddenInput.value = rawValue; // Simpan ke input hidden

        this.value = formatRupiah(rawValue); // Tampilkan format 1.000
    });
</script>

</tr>

<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Nomor Kontrak</strong>
    </td>
    <td>
        <input type="text" name="nomorkontrak" readonly
            class="form-control @error('nomorkontrak') is-invalid @enderror"
            value="{{ old('nomorkontrak', $data->nomorkontrak ?? '') }}"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
        @error('nomorkontrak')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>
<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Waktu Pelaksanaan</strong>
    </td>
    <td style="display: flex; align-items: center; gap: 8px;">
        <input type="number" name="waktupelaksanaan" id="waktupelaksanaan"
            class="form-control @error('waktupelaksanaan') is-invalid @enderror"
            value="{{ old('waktupelaksanaan', $data->waktupelaksanaan ?? '') }}"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
            <span id="terbilang" style="margin-left: 10px; font-style: italic; color: #555;"></span>
        <span style="white-space: nowrap;">Hari Kalender</span>
        @error('waktupelaksanaan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>

<script>
    function angkaTerbilang(n) {
        const satuan = ["", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas"];
        function terbilang(n) {
            n = parseInt(n);
            if (isNaN(n) || n === 0) return "";
            if (n < 12) return satuan[n];
            if (n < 20) return satuan[n - 10] + " Belas";
            if (n < 100) return terbilang(Math.floor(n / 10)) + " Puluh " + terbilang(n % 10);
            if (n < 200) return "Seratus " + terbilang(n - 100);
            if (n < 1000) return terbilang(Math.floor(n / 100)) + " Ratus " + terbilang(n % 100);
            if (n < 2000) return "Seribu " + terbilang(n - 1000);
            if (n < 1000000) return terbilang(Math.floor(n / 1000)) + " Ribu " + terbilang(n % 1000);
            if (n < 1000000000) return terbilang(Math.floor(n / 1000000)) + " Juta " + terbilang(n % 1000000);
            return "Terlalu Besar";
        }
        return terbilang(n).trim();
    }

    document.addEventListener("DOMContentLoaded", function () {
        const input = document.getElementById('waktupelaksanaan');
        const spanTerbilang = document.getElementById('terbilang');

        function updateTerbilang() {
            const value = input.value;
            spanTerbilang.textContent = value ? '(' + angkaTerbilang(value) + ')' : '';
        }

        input.addEventListener('input', updateTerbilang);
        updateTerbilang(); // initial load
    });
</script>

<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Penyedia Jasa</strong>
    </td>
    <td>
        <input type="text" name="penyediajasa"
            class="form-control @error('penyediajasa') is-invalid @enderror"
            value="{{ old('penyediajasa', $data->bujk ?? '') }}"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
        @error('penyediajasa')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>


<tr>
    <td style="width: 200px; padding:4px 8px;">
        <strong style="font-size: 15px;">Satuan OPD</strong>
    </td>
    <td>
        <input type="text" name="satuanopd"
            class="form-control @error('satuanopd') is-invalid @enderror"
            value="{{ old('satuanopd', $data->satuanopd ?? '') }}"
            style="padding: 6px 12px; border: 1px solid #ced4da; border-radius: 0.25rem;">
        @error('satuanopd')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </td>
</tr>


                                                <tr>
                                                <td style="width: 200px; padding:4px 8px;">
                                                    <strong style="font-size: 15px;">Tanggal Pengawasan</strong>
                                                </td>
                                                    <td class="d-flex gap-2 align-items-center">
                                                        <input type="date" class="form-control @error('waktupengawasan') is-invalid @enderror"
                                                            name="waktupengawasan"
                                                            value="{{ old('waktupengawasan', $data->waktupengawasan ?? '') }}"
                                                            placeholder="Dimulai Sejak ... ">
                                                        {{-- <span style="white-space: nowrap;">Hari Kalender</span> --}}
                                                        @error('waktupengawasan')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                            </tr>



                                        </table>



                    <br>
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
                        <!--end::Quick Example-->
                    </div>


                    <br><br>

                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

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
        const kesimpulanSelect = document.getElementById('kesimpulanSelect');
        const outputKesimpulan = document.getElementById('outputKesimpulan');
        const textKesimpulan = document.getElementById('textKesimpulan');

        const catatanSelect = document.getElementById('catatanSelect');
        const outputCatatan = document.getElementById('outputCatatan');
        const textCatatan = document.getElementById('textCatatan');

        kesimpulanSelect.addEventListener('change', function () {
            const value = this.value;
            if (value) {
                textKesimpulan.textContent = value;
                outputKesimpulan.style.display = 'table-row';
            } else {
                outputKesimpulan.style.display = 'none';
            }
        });

        catatanSelect.addEventListener('change', function () {
            const value = this.value;
            if (value) {
                textCatatan.textContent = value;
                outputCatatan.style.display = 'table-row';
            } else {
                outputCatatan.style.display = 'none';
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('carapemeriksaanInput');
        const preview = document.getElementById('carapemeriksaanPreview');

        // Tampilkan nilai awal jika ada
        preview.textContent = input.value;

        // Update secara real-time saat user mengetik
        input.addEventListener('input', function () {
            preview.textContent = this.value;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('dokumendiperiksaInput');
        const preview = document.getElementById('dokumendiperiksaPreview');

        // Tampilkan isi awal jika ada
        preview.textContent = input.value;

        // Update preview setiap kali user mengetik
        input.addEventListener('input', function () {
            preview.textContent = this.value;
        });
    });
</script>

