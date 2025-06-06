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
                <a href="/beagendapelatihan">
                    <button
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
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

                        <form action="{{ route('beagendapelatihancreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <!-- Kategori Pelatihan -->
                                     <!-- Kategori Pelatihan -->
<div class="mb-3">
    <label for="kategoripelatihan_id" class="form-label">
        <i class="bi bi-card-text text-primary"></i> Kategori Pelatihan
    </label>
    <select id="kategoripelatihan_id" name="kategoripelatihan_id" class="form-control @error('kategoripelatihan_id') is-invalid @enderror">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($kategoriList as $kategori)
            <option value="{{ $kategori->id }}" {{ (old('kategoripelatihan_id', $data->kategoripelatihan_id ?? '') == $kategori->id) ? 'selected' : '' }}>
                {{ $kategori->kategoripelatihan }}
            </option>
        @endforeach
    </select>
    @error('kategoripelatihan_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- LSP Penerbit -->
<div class="mb-3">
    <label for="user_id" class="form-label">
        <i class="bi bi-person-circle text-primary"></i> LSP Penerbit
    </label>
    <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror">
        <option value="">-- Pilih LSP Penerbit --</option>
        @foreach ($lspList as $lsp)
            <option value="{{ $lsp->id }}"
                {{ (old('user_id', $data->user_id ?? '') == $lsp->id) ? 'selected' : '' }}>
                {{ $lsp->name }}
            </option>
        @endforeach
    </select>
    Ket : Kosongkan Jika Tidak Ada LSP Penerbit
    @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Nama Kegiatan -->
<div class="mb-3">
    <label for="namakegiatan" class="form-label">
        <i class="bi bi-clipboard text-primary"></i> Nama Kegiatan
    </label>
    <input type="text" id="namakegiatan" name="namakegiatan"
        class="form-control @error('namakegiatan') is-invalid @enderror"
        value="{{ old('namakegiatan', $data->namakegiatan ?? '') }}">
    @error('namakegiatan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Penyelenggara / Asosiasi -->
<div class="mb-3">
    <label for="asosiasimasjaki_id" class="form-label">
        <i class="bi bi-people-fill text-primary"></i> Penyelenggara
    </label>
    <select id="asosiasimasjaki_id" name="asosiasimasjaki_id"
    class="form-control @error('asosiasimasjaki_id') is-invalid @enderror">
    <option value="">-- Pilih Penyelengara --</option>
    @if ($dataasosiasi)
        <option value="{{ $dataasosiasi->id }}"
            {{ old('asosiasimasjaki_id', $data->asosiasimasjaki_id ?? '') == $dataasosiasi->id ? 'selected' : '' }}>
            {{ $dataasosiasi->namaasosiasi }}
        </option>
    @endif
</select>
@error('asosiasimasjaki_id')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<!-- Waktu Pelaksanaan -->
<div class="mb-3">
    <label for="waktupelaksanaan" class="form-label">
        <i class="bi bi-calendar-date text-primary"></i> Tanggal Pelaksanaan
    </label>
    <input type="date" id="waktupelaksanaan" name="waktupelaksanaan"
        class="form-control @error('waktupelaksanaan') is-invalid @enderror"
        value="{{ old('waktupelaksanaan', $data->waktupelaksanaan ?? '') }}">
    @error('waktupelaksanaan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Tanggal Penutupan -->
<div class="mb-3">
    <label for="penutupan" class="form-label">
        <i class="bi bi-calendar-check text-primary"></i> Tanggal Penutupan
    </label>
    <input type="date" id="penutupan" name="penutupan"
        class="form-control @error('penutupan') is-invalid @enderror"
        value="{{ old('penutupan', $data->penutupan ?? '') }}">
    @error('penutupan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Jumlah Peserta -->
<div class="mb-3">
    <label for="jumlahpeserta" class="form-label">
        <i class="bi bi-people text-primary"></i> Jumlah Peserta
    </label>
    <input type="number" id="jumlahpeserta" name="jumlahpeserta"
        class="form-control @error('jumlahpeserta') is-invalid @enderror"
        value="{{ old('jumlahpeserta', $data->jumlahpeserta ?? '') }}">
    @error('jumlahpeserta')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Lokasi -->
<div class="mb-3">
    <label for="lokasi" class="form-label">
        <i class="bi bi-geo-alt text-primary"></i> Lokasi
    </label>
    <input type="text" id="lokasi" name="lokasi"
        class="form-control @error('lokasi') is-invalid @enderror"
        value="{{ old('lokasi', $data->lokasi ?? '') }}">
    @error('lokasi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Keterangan -->
<div class="mb-3">
    <label for="keterangan" class="form-label">
        <i class="bi bi-info-circle text-primary"></i> Keterangan
    </label>
    <input type="text" id="keterangan" name="keterangan"
        class="form-control @error('keterangan') is-invalid @enderror"
        value="{{ old('keterangan', $data->keterangan ?? '') }}">
    @error('keterangan')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
</div>

<!-- Kolom Kanan -->
<div class="col-md-6">
    <!-- Isi Agenda -->
    <div class="mb-3">
        <label for="jabatankerja_id" class="form-label">
            <i class="bi bi-journal-text text-primary"></i> Jabatan Kerja
        </label>
        <select id="jabatankerja_id" name="jabatankerja_id"
            class="form-control @error('jabatankerja_id') is-invalid @enderror">
            <option value="">Pilih Jabatan Kerja</option>
            @foreach ($datajabatankerja as $jabatan)
                <option value="{{ $jabatan->id }}"
                    {{ old('jabatankerja_id', $data->jabatankerja_id ?? '') == $jabatan->id ? 'selected' : '' }}>
                    {{ $jabatan->jabatankerja }}
                </option>
            @endforeach
        </select>
        @error('jabatankerja_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="isiagenda" class="form-label">
            <i class="bi bi-journal-text text-primary"></i> Isi Agenda
        </label>
        <textarea id="isiagenda" name="isiagenda"
            class="form-control @error('isiagenda') is-invalid @enderror"
            rows="12">{{ old('isiagenda', $data->isiagenda ?? '') }}</textarea>
        @error('isiagenda')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Foto Kegiatan -->
    <div class="mb-3">
        <label for="foto" class="form-label">
            <i class="bi bi-image text-primary"></i> Foto Kegiatan
        </label>
        <input type="file" id="foto" name="foto"
            class="form-control @error('foto') is-invalid @enderror">
        @error('foto')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <!-- Preview Foto -->
        <div class="mt-2">
            @php
                $fotoPath = $data->foto ?? null;
                $fileInStorage = $fotoPath && file_exists(public_path('storage/' . $fotoPath));
            @endphp

            @if ($fotoPath)
                <img src="{{ $fileInStorage ? asset('storage/' . $fotoPath) : asset($fotoPath) }}"
                    alt="Foto Kegiatan"
                    style="max-width: 100%; max-height: 300px;">
            @else
                <p class="text-muted">Belum ada foto kegiatan.</p>
            @endif
        </div>
    </div>
</div>

                                <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                        <button type="button" onclick="openModal()"
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                        style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                        <!-- Ikon SVG Pensil -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                     <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                   </svg>
                                        <span style="font-family: 'Poppins', sans-serif;">Create</span>
                                    </button>
                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin membuat agenda pelatihan ?
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
