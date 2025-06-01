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
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/betertibjakonpenyelenggaraan">
                    <button class="btn-kembali">
                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                    Kembali
                </button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->

                        <form action="{{ route('betertibjakonpenyelenggaraancreatenewupdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <div class="mb-3">

    <label for="penyediastatustertibjakon_id" class="form-label">
        <i class="bi bi-card-text text-primary"></i> Status Penyedia
    </label>
    <select id="penyediastatustertibjakon_id" name="penyediastatustertibjakon_id" class="form-control @error('penyediastatustertibjakon_id') is-invalid @enderror">
        <option value="">-- Pilih Status Penyedia --</option>
        @foreach ($datapenyedia as $penyedia)
        <option value="{{ $penyedia->id }}" {{ (old('penyediastatustertibjakon_id', $data->penyediastatustertibjakon_id ?? '') == $penyedia->id) ? 'selected' : '' }}>
            {{ $penyedia->penyedia }}
        </option>
        @endforeach
    </select>
    @error('penyediastatustertibjakon_id')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="kegiatankonstruksi" class="form-label">
        <i class="bi bi-tools text-primary"></i> Kegiatan Konstruksi
    </label>
    <input type="text" id="kegiatankonstruksi" name="kegiatankonstruksi"
        class="form-control @error('kegiatankonstruksi') is-invalid @enderror"
        value="{{ old('kegiatankonstruksi', $data->kegiatankonstruksi ?? '') }}">
    @error('kegiatankonstruksi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="namapekerjaan" class="form-label">
        <i class="bi bi-clipboard-check-fill text-primary"></i> Nama Pekerjaan
    </label>
    <input type="text" id="namapekerjaan" name="namapekerjaan"
        class="form-control @error('namapekerjaan') is-invalid @enderror"
        value="{{ old('namapekerjaan', $data->namapekerjaan ?? '') }}">
    @error('namapekerjaan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


</div>

<div class="col-md-6">
<div class="mb-3">
    <label for="nomorkontrak" class="form-label">
        <i class="bi bi-file-earmark-text-fill text-primary"></i> Nomor Kontrak
    </label>
    <input type="text" id="nomorkontrak" name="nomorkontrak"
        class="form-control @error('nomorkontrak') is-invalid @enderror"
        value="{{ old('nomorkontrak', $data->nomorkontrak ?? '') }}">
    @error('nomorkontrak')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="bujk" class="form-label">
        <i class="bi bi-building text-primary"></i> BUJK
    </label>
    <input type="text" id="bujk" name="bujk"
        class="form-control @error('bujk') is-invalid @enderror"
        value="{{ old('bujk', $data->bujk ?? '') }}">
    @error('bujk')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="mb-3">
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
</div>

<div class="mb-3">
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
</div>


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




</div>

                    <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                        <button class="btn-create" type="button" onclick="openModal()">
                                            <i class="bi bi-plus-circle-fill"></i>Create
                                        </button>
                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin menambahkan data?
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
                                        Ya
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

                        </form>

                        <script>
                            function openModal() {
                                document.getElementById("confirmModal").style.display = "flex";
                            }

                            function closeModal() {
                                document.getElementById("confirmModal").style.display = "none";
                            }

                            function submitForm() {
                                document.querySelector('form').submit();
                            }
                        </script>


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
