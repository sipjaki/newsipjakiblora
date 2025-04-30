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
                <a href="/beskkdpupr">
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

                     <form action="{{ route('update.beskkdpuprupdate', $data->nama) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <!-- begin::Body -->
    <div class="card-body">
        <div class="row">
            <!-- Left Column (6/12) -->
            <div class="col-md-6">
                <!-- Nama -->
                <div class="mb-3">
                    <label class="form-label" for="nama">
                        <i class="bi bi-person" style="margin-right: 10px; color: navy;"></i> Nama
                    </label>
                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $data->nama) }}" />
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label class="form-label" for="alamat">
                        <i class="bi bi-house-door" style="margin-right: 10px; color: navy;"></i> Alamat
                    </label>
                    <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $data->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tahun Lulus -->
                <div class="mb-3">
                    <label class="form-label" for="tahunlulus">
                        <i class="bi bi-calendar-check" style="margin-right: 10px; color: navy;"></i> Tahun Lulus
                    </label>
                    <input type="number" id="tahunlulus" name="tahunlulus" class="form-control @error('tahunlulus') is-invalid @enderror" value="{{ old('tahunlulus', $data->tahunlulus) }}" />
                    @error('tahunlulus')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tahun Bimtek -->
                <div class="mb-3">
                    <label class="form-label" for="tahunbimtek">
                        <i class="bi bi-calendar-event" style="margin-right: 10px; color: navy;"></i> Tahun Bimtek
                    </label>
                    <select id="tahunbimtek" name="tahunbimtek" class="form-control @error('tahunbimtek') is-invalid @enderror">
                        @if($data->tahunbimtek)
                            <option value="{{ $data->tahunbimtek }}" selected>{{ $data->tahunbimtek }}</option>
                        @else
                            <option value="" disabled selected>Data Belum Di Update</option>
                        @endif
                        <option value="2024" {{ old('tahunbimtek', $data->tahunbimtek) == '2024' ? 'selected' : '' }}>2024</option>
                        <option value="2025" {{ old('tahunbimtek', $data->tahunbimtek) == '2025' ? 'selected' : '' }}>2025</option>
                        <option value="2026" {{ old('tahunbimtek', $data->tahunbimtek) == '2026' ? 'selected' : '' }}>2026</option>
                    </select>
                    @error('tahunbimtek')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nama Sekolah -->
                <div class="mb-3">
                    <label class="form-label" for="namasekolah_id">
                        <i class="bi bi-building" style="margin-right: 10px; color: navy;"></i> Nama Sekolah
                    </label>
                    <select id="namasekolah_id" name="namasekolah_id" class="form-control @error('namasekolah_id') is-invalid @enderror">
                        <option value="">Pilih Sekolah</option>
                        @foreach($namasekolahList as $sekolah)
                            <option value="{{ $sekolah->id }}" {{ old('namasekolah_id', $data->namasekolah_id) == $sekolah->id ? 'selected' : '' }}>
                                {{ $sekolah->namasekolah }}
                            </option>
                        @endforeach
                    </select>
                    @error('namasekolah_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jenjang Pendidikan -->
                <div class="mb-3">
                    <label class="form-label" for="jenjangpendidikan_id">
                        <i class="bi bi-person-check" style="margin-right: 10px; color: navy;"></i> Jenjang Pendidikan
                    </label>
                    <select id="jenjangpendidikan_id" name="jenjangpendidikan_id" class="form-control @error('jenjangpendidikan_id') is-invalid @enderror">
                        <option value="">Pilih Jenjang Pendidikan</option>
                        @foreach($jenjangpendidikanList as $jenjang)
                            <option value="{{ $jenjang->id }}" {{ old('jenjangpendidikan_id', $data->jenjangpendidikan_id) == $jenjang->id ? 'selected' : '' }}>
                                {{ $jenjang->jenjangpendidikan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jenjangpendidikan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jurusan -->
                <div class="mb-3">
                    <label class="form-label" for="jurusan_id">
                        <i class="bi bi-bookmark" style="margin-right: 10px; color: navy;"></i> Jurusan
                    </label>
                    <select id="jurusan_id" name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                        <option value="">Pilih Jurusan</option>
                        @foreach($jurusanList as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan_id', $data->jurusan_id) == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jurusan_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Right Column (6/12) -->
            <div class="col-md-6">
                <!-- Jabatan Kerja -->
                <div class="mb-3">
                    <label class="form-label" for="jabatankerja_id">
                        <i class="bi bi-person-badge" style="margin-right: 10px; color: navy;"></i> Jabatan Kerja
                    </label>
                    <select id="jabatankerja_id" name="jabatankerja_id" class="form-control @error('jabatankerja_id') is-invalid @enderror">
                        <option value="">Pilih Jabatan Kerja</option>
                        @foreach($jabatankerjaList as $jabatan)
                            <option value="{{ $jabatan->id }}" {{ old('jabatankerja_id', $data->jabatankerja_id) == $jabatan->id ? 'selected' : '' }}>
                                {{ $jabatan->jabatankerja }}
                            </option>
                        @endforeach
                    </select>
                    @error('jabatankerja_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jenjang -->
                <div class="mb-3">
                    <label class="form-label" for="jenjang_id">
                        <i class="bi bi-briefcase" style="margin-right: 10px; color: navy;"></i> Jenjang
                    </label>
                    <select id="jenjang_id" name="jenjang_id" class="form-control @error('jenjang_id') is-invalid @enderror">
                        <option value="">Pilih Jenjang</option>
                        @foreach($jenjangList as $jenjang)
                            <option value="{{ $jenjang->id }}" {{ old('jenjang_id', $data->jenjang_id) == $jenjang->id ? 'selected' : '' }}>
                                {{ $jenjang->jenjang }}
                            </option>
                        @endforeach
                    </select>
                    @error('jenjang_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Asosiasi -->
                <div class="mb-3">
                    <label class="form-label" for="asosiasimasjaki_id">
                        <i class="bi bi-people" style="margin-right: 10px; color: navy;"></i> Penyelengara
                    </label>
                    <select id="asosiasimasjaki_id" name="asosiasimasjaki_id" class="form-control @error('asosiasimasjaki_id') is-invalid @enderror">
                        <option value="">Pilih Asosiasi</option>
                        @foreach($asosiasimasjakiList as $asosiasi)
                            <option value="{{ $asosiasi->id }}" {{ old('asosiasimasjaki_id', $data->asosiasimasjaki_id) == $asosiasi->id ? 'selected' : '' }}>
                                {{ $asosiasi->namaasosiasi }}
                            </option>
                        @endforeach
                    </select>
                    @error('asosiasimasjaki_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Lembaga Penerbit -->
                <div class="mb-3">
                    <label class="form-label" for="lpspenerbit_id">
                        <i class="bi bi-card-text" style="margin-right: 10px; color: navy;"></i> Lembaga Penerbit
                    </label>
                    <select id="lpspenerbit_id" name="lpspenerbit_id" class="form-control @error('lpspenerbit_id') is-invalid @enderror">
                        <option value="">Pilih Lembaga Penerbit</option>
                        @foreach($lpspenerbitList as $penerbit)
                            <option value="{{ $penerbit->id }}" {{ old('lpspenerbit_id', $data->lpspenerbit_id) == $penerbit->id ? 'selected' : '' }}>
                                {{ $penerbit->lpspenerbit }}
                            </option>
                        @endforeach
                    </select>
                    @error('lpspenerbit_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tanggal Terbit -->
                <div class="mb-3">
                    <label class="form-label" for="tanggalterbit">
                        <i class="bi bi-calendar-check" style="margin-right: 10px; color: navy;"></i> Tanggal Terbit
                    </label>
                    <input type="date" id="tanggalterbit" name="tanggalterbit" class="form-control @error('tanggalterbit') is-invalid @enderror" value="{{ old('tanggalterbit', $data->tanggalterbit) }}" />
                    @error('tanggalterbit')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tanggal Habis -->
                <div class="mb-3">
                    <label class="form-label" for="tanggalhabis">
                        <i class="bi bi-calendar-x" style="margin-right: 10px; color: navy;"></i> Tanggal Habis
                    </label>
                    <input type="date" id="tanggalhabis" name="tanggalhabis" class="form-control @error('tanggalhabis') is-invalid @enderror" value="{{ old('tanggalhabis', $data->tanggalhabis) }}" />
                    @error('tanggalhabis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status Terbit -->
             <!-- Status Terbit -->
<div class="mb-3">
    <label class="form-label" for="statusterbit">
        <i class="bi bi-check-circle" style="margin-right: 10px; color: navy;"></i> Status Terbit
    </label>
    <select id="statusterbit" name="statusterbit" class="form-control @error('statusterbit') is-invalid @enderror">
        <option value="" disabled selected>Pilih Status Terbit</option>
        <option value="Terbit" {{ old('statusterbit', $data->statusterbit ?? '') == 'Terbit' ? 'selected' : '' }}>Terbit</option>
        <option value="Belum Terbit" {{ old('statusterbit', $data->statusterbit ?? '') == 'Belum Terbit' ? 'selected' : '' }}>Belum Terbit</option>
    </select>
    @error('statusterbit')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="mb-3">
    <label class="form-label" for="sertifikat">
        <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: navy;"></i> File Berkas Sertifikat (PDF)
    </label>

    <!-- Preview PDF -->
    <div style="margin-top: 10px;">
        @if($data->sertifikat && file_exists(public_path('storage/' . $data->sertifikat)))
        <!-- Display the default iframe when the file exists in the storage -->
        <iframe src="{{ asset('storage/' . $data->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
    @elseif($data->sertifikat)
        <!-- Display the iframe with the updated file -->
        <iframe src="{{ asset($data->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
    @else
        <!-- Optional: Show a placeholder if there's no file available -->
        <p>Data belum diupdate</p>
    @endif

    </div>

    <!-- Input File untuk Mengunggah PDF -->
    <input type="file" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" />
    @error('sertifikat')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

            </div>
        </div>
    </div>
    <!-- end::Body -->

    <!-- Submit Button -->
    <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
        <div class="flex justify-end">
            <button type="button" onclick="openModal()"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
            style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

            <!-- Ikon SVG Pensil -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
              <path d="M15.502 1.94a1.5 1.5 0 0 1 0 2.12L5.207 14.354a1 1 0 0 1-.39.243l-4 1.5a.5.5 0 0 1-.641-.641l1.5-4a1 1 0 0 1 .243-.39L13.44.44a1.5 1.5 0 0 1 2.12 0zm-2.121 1.415L4.854 11.882l-.708 2.122 2.121-.707L15.5 3.354l-2.12-2.121z"/>
            </svg>

            <span style="font-family: 'Poppins', sans-serif;">Update</span>
        </button>
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
