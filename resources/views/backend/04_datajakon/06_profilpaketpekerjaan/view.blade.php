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

        {{-- ======================================================= --}}
        {{-- ALERT --}}

        @include('backend.00_administrator.00_baganterpisah.06_alert')

        {{-- ======================================================= --}}

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
             <a href="{{ url()->previous() }}" style="text-decoration: none;">
                    <button class="button-modern">
                        <i class="bi bi-arrow-left-circle" style="margin-right: 8px;"></i>
                        Kembali
                    </button>
                </a>

        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->

                     <form action="{{ route('update.paketpekerjaan', $data->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
    @method('POST')

    <!-- begin::Body -->
    <div class="card-body">
        <div class="row">
            <!-- Left Column (6/12) -->
<div class="row">

    {{-- PROFIL JENIS PEKERJAAN --}}
   <div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-briefcase-fill" style="color: navy; margin-right: 8px;"></i> Profil Jenis Pekerjaan
    </label>
    <select name="profiljenispekerjaan_id_display" class="form-control" disabled
        style="background-color: #f8f9fa; color: #495057; cursor: not-allowed;">
        <option value="">-- Pilih Profil Jenis Pekerjaan --</option>
        @foreach ($profiljenispekerjaanList as $item)
            <option value="{{ $item->id }}"
                {{ old('profiljenispekerjaan_id', $data->profiljenispekerjaan_id) == $item->id ? 'selected' : '' }}>
                {{ $item->jenispekerjaan ?? $item->jenispekerjaan }}
            </option>
        @endforeach
    </select>

    <!-- Hidden input agar tetap mengirim data ke server -->
    <input type="hidden"
           name="profiljenispekerjaan_id"
           value="{{ old('profiljenispekerjaan_id', $data->profiljenispekerjaan_id ?? '') }}">
</div>


    {{-- STATUS PEKERJAAN --}}
  <div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-clipboard-check-fill" style="color: navy; margin-right: 8px;"></i> Status Pekerjaan
    </label>

    <!-- Select tampil readonly -->
    <select name="paketstatuspekerjaan_id_display" class="form-control" disabled
        style="background-color: #f8f9fa; color: #495057; cursor: not-allowed; border: 1px solid #ced4da; border-radius: 8px; box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);">
        <option value="">-- Pilih Status Pekerjaan --</option>
        @foreach ($paketstatuspekerjaanList as $item)
            <option value="{{ $item->id }}"
                {{ old('paketstatuspekerjaan_id', $data->paketstatuspekerjaan_id) == $item->id ? 'selected' : '' }}>
                {{ $item->paketstatuspekerjaan }}
            </option>
        @endforeach
    </select>

    <!-- Hidden input agar tetap terkirim ke server -->
    <input type="hidden"
           name="paketstatuspekerjaan_id"
           value="{{ old('paketstatuspekerjaan_id', $data->paketstatuspekerjaan_id ?? '') }}">
</div>


    {{-- SUMBER DANA --}}
<!-- SUMBER DANA -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-cash-stack" style="color: navy; margin-right: 8px;"></i> Sumber Dana
    </label>
    <select name="sumberdana_id_display" class="form-control" disabled
        style="background-color:#f8f9fa; color:#495057; cursor:not-allowed; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05);">
        <option value="">-- Pilih Sumber Dana --</option>
        @foreach ($sumberdanaList as $item)
            <option value="{{ $item->id }}" {{ old('sumberdana_id', $data->sumberdana_id) == $item->id ? 'selected' : '' }}>
                {{ $item->sumberdana }}
            </option>
        @endforeach
    </select>
    <input type="hidden" name="sumberdana_id" value="{{ old('sumberdana_id', $data->sumberdana_id ?? '') }}">
</div>

<!-- TAHUN ANGGARAN -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-calendar-event-fill" style="color: navy; margin-right: 8px;"></i> Tahun Anggaran
    </label>
    <select name="tahunpilihan_id_display" class="form-control" disabled
        style="background-color:#f8f9fa; color:#495057; cursor:not-allowed; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05);">
        <option value="">-- Pilih Tahun --</option>
        @foreach ($tahunpilihanList as $item)
            <option value="{{ $item->id }}" {{ old('tahunpilihan_id', $data->tahunpilihan_id) == $item->id ? 'selected' : '' }}>
                {{ $item->tahunpilihan }}
            </option>
        @endforeach
    </select>
    <input type="hidden" name="tahunpilihan_id" value="{{ old('tahunpilihan_id', $data->tahunpilihan_id ?? '') }}">
</div>

<!-- SATUAN KERJA -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-person-fill" style="color: navy; margin-right: 8px;"></i> Satuan Kerja
    </label>

    <!-- Hidden input kirim ID -->
    <input type="hidden" name="user_id" value="{{ old('user_id', $data->user->id) }}">

    <!-- Tampilkan nama saja -->
    <input type="text" class="form-control"
        value="{{ $data->user->name }}" readonly
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
</div>
    {{-- BULAN REKAP --}}
<!-- BULAN REKAP -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-calendar-month-fill" style="color: navy; margin-right: 8px;"></i> Bulan Rekap
    </label>
    <select name="bulanrekap_id_display" class="form-control" disabled
        style="background-color:#f8f9fa; color:#495057; cursor:not-allowed; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05);">
        <option value="">-- Pilih Bulan --</option>
        @foreach ($bulanrekapList as $item)
            <option value="{{ $item->id }}" {{ old('bulanrekap_id', $data->bulanrekap_id) == $item->id ? 'selected' : '' }}>
                {{ $item->bulanrekap }}
            </option>
        @endforeach
    </select>
    <input type="hidden" name="bulanrekap_id" value="{{ old('bulanrekap_id', $data->bulanrekap_id) }}">
</div>

<!-- NAMA PEKERJAAN -->
<div class="form-modern col-md-12 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-building-fill" style="color: navy; margin-right: 8px;"></i> Nama Pekerjaan
    </label>
    <input type="text" name="namapekerjaan_display" class="form-control" readonly
        value="{{ old('namapekerjaan', $data->namapekerjaan) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="namapekerjaan" value="{{ old('namapekerjaan', $data->namapekerjaan) }}">
</div>

<!-- CV/PT PENYEDIA -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-building-gear" style="color: navy; margin-right: 8px;"></i> CV/PT Penyedia
    </label>
    <input type="text" name="cvptpenyedia_display" class="form-control" readonly
        value="{{ old('cvptpenyedia', $data->cvptpenyedia) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="cvptpenyedia" value="{{ old('cvptpenyedia', $data->cvptpenyedia) }}">
</div>

<!-- NIB -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-upc-scan" style="color: navy; margin-right: 8px;"></i> Nomor Induk Berusaha (NIB)
    </label>
    <input type="text" name="nib_display" class="form-control" readonly
        value="{{ old('nib', $data->nib) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="nib" value="{{ old('nib', $data->nib) }}">
</div>

<!-- NILAI KONTRAK -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-currency-dollar" style="color: navy; margin-right: 8px;"></i> Nilai Kontrak (Rp)
    </label>
    <input type="text" name="nilaikontrak_display" class="form-control" readonly
        value="{{ number_format(old('nilaikontrak', $data->nilaikontrak), 0, ',', '.') }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="nilaikontrak" value="{{ old('nilaikontrak', $data->nilaikontrak) }}">
</div>

<!-- JENIS KONTRAK -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-file-earmark-text-fill" style="color: navy; margin-right: 8px;"></i> Jenis Kontrak
    </label>
    <input type="text" name="jeniskontrak_display" class="form-control" readonly
        value="{{ old('jeniskontrak', $data->jeniskontrak) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="jeniskontrak" value="{{ old('jeniskontrak', $data->jeniskontrak) }}">
</div>

<!-- KARAKTERISTIK KONTRAK -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-file-earmark-diff-fill" style="color: navy; margin-right: 8px;"></i> Karakteristik Kontrak
    </label>
    <input type="text" name="karakteristikkontrak_display" class="form-control" readonly
        value="{{ old('karakteristikkontrak', $data->karakteristikkontrak) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="karakteristikkontrak" value="{{ old('karakteristikkontrak', $data->karakteristikkontrak) }}">
</div>

<!-- BULAN MULAI -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-calendar2-plus-fill" style="color: navy; margin-right: 8px;"></i> Bulan Mulai
    </label>
    <input type="text" name="bulanmulai_display" class="form-control" readonly
        value="{{ old('bulanmulai', $data->bulanmulai) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="bulanmulai" value="{{ old('bulanmulai', $data->bulanmulai) }}">
</div>

<!-- BULAN SELESAI -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-calendar2-check-fill" style="color: navy; margin-right: 8px;"></i> Bulan Selesai
    </label>
    <input type="text" name="bulanselesai_display" class="form-control" readonly
        value="{{ old('bulanselesai', $data->bulanselesai) }}"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="bulanselesai" value="{{ old('bulanselesai', $data->bulanselesai) }}">
</div>

<!-- PROGRESS -->
<div class="form-modern col-md-6 mb-3">
    <label class="form-label-modern">
        <i class="bi bi-bar-chart-fill" style="color: navy; margin-right: 8px;"></i> Progress (%)
    </label>
    <input type="text" name="progress_display" class="form-control" readonly
        value="{{ old('progress', $data->progress) }}%"
        style="background-color:#f8f9fa; color:#495057; border:1px solid #ced4da; border-radius:8px; box-shadow:inset 0 1px 2px rgba(0,0,0,0.05); cursor:not-allowed;">
    <input type="hidden" name="progress" value="{{ old('progress', $data->progress) }}">
</div>

</div>

            </div>
        </div>
    </div>
    <!-- end::Body -->

    <!-- Submit Button -->
    <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
        <div class="flex justify-end">
{{-- <button type="button" onclick="openModal()" class="button-berkas">
    <i class="bi bi-pencil-square me-2"></i>
    <span style="font-family: 'Poppins', sans-serif;">Perbaikan Data ?</span>
</button> --}}
        </div>
        <!-- Modal Konfirmasi -->
        <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
              <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                Apakah Anda yakin ingin memperbarui data ini?
            </p>

              <!-- Tombol -->
              <div style="display: flex; justify-content: center; gap: 12px;">
                <button id="confirmSubmitBtn"
                onclick="submitForm()"
                style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
            <!-- Telegram SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
            </svg>
            Ya, Update
        </button>

        <!-- Tombol Batal dengan ikon X (SVG) -->
        <button type="button"
                onclick="closeModal()"
                style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
            </svg>
            Batal
        </button>

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
