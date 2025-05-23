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
            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')


                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beartikeljakon">
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
                        <form action="{{ route('update.beartikeljakoncreateupdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- User ID -->
                                        <div class="mb-3">
                                            <label class="form-label" for="user_id">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Penulis Artikel Jasa Konstruksi
                                            </label>
                                            <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                                <option value="" disabled selected>Pilih Penulis</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}" {{ old('user_id', $data->user_id) == $user->id ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('user_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Judul Berita -->
                                        <div class="mb-3">
                                            <label class="form-label" for="judul">
                                                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Artikel
                                            </label>
                                            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $data->judul) }}" />
                                            @error('judul')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
                                            </label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $data->tanggal) }}" />
                                            @error('tanggal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="keterangan">
                                                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> Keterangan
                                            </label>
                                            <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" style="height: 150px;">{{ old('keterangan', $data->keterangan) }}</textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label" for="foto1">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Gambar/Brosur 1
                                            </label>
                                            <input type="file" id="foto1" name="foto1" class="form-control @error('foto1') is-invalid @enderror" />
                                            @error('foto1')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div style="margin-top: 10px;">
                                                @if($data->foto1 && file_exists(public_path('storage/' . $data->foto1)))
                                                    <!-- Menampilkan gambar dari storage -->
                                                    <img src="{{ asset('storage/' . $data->foto1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @elseif($data->foto1)
                                                    <!-- Menampilkan gambar dari path luar storage -->
                                                    <img src="{{ asset($data->foto1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @else
                                                    <!-- Placeholder jika tidak ada data -->
                                                    <p>Data belum diupdate</p>
                                                @endif
                                            </div>

                                        </div>

                                        <!-- Foto 2 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto2">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Gambar/Brosur 2
                                            </label>
                                            <input type="file" id="foto2" name="foto2" class="form-control @error('foto2') is-invalid @enderror" />
                                            @error('foto2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div style="margin-top: 10px;">
                                                @if($data->foto2 && file_exists(public_path('storage/' . $data->foto2)))
                                                    <!-- Menampilkan gambar dari storage -->
                                                    <img src="{{ asset('storage/' . $data->foto2) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @elseif($data->foto2)
                                                    <!-- Menampilkan gambar dari path luar storage -->
                                                    <img src="{{ asset($data->foto2) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @else
                                                    <!-- Placeholder jika tidak ada data -->
                                                    <p>Data belum diupdate</p>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Foto 3 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto3">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto/Gambar/Brosur 3
                                            </label>
                                            <input type="file" id="foto3" name="foto3" class="form-control @error('foto3') is-invalid @enderror" />
                                            @error('foto3')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div style="margin-top: 10px;">
                                                @if($data->foto3 && file_exists(public_path('storage/' . $data->foto3)))
                                                    <!-- Menampilkan gambar dari storage -->
                                                    <img src="{{ asset('storage/' . $data->foto3) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @elseif($data->foto3)
                                                    <!-- Menampilkan gambar dari path luar storage -->
                                                    <img src="{{ asset($data->foto3) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @else
                                                    <!-- Placeholder jika tidak ada data -->
                                                    <p>Data belum diupdate</p>
                                                @endif
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Keterangan -->

                                        <!-- Foto -->
                                        <div class="mb-3">
                                            <label class="form-label" for="berkas">
                                                <i class="bi bi-file-earmark-pdf" style="margin-right: 8px; color: red;"></i> Berkas (PDF)
                                            </label>
                                            <!-- Mengubah input untuk menerima file PDF -->
                                            <input type="file" id="berkas" name="berkas" class="form-control @error('berkas') is-invalid @enderror" accept="application/pdf" />

                                            @error('berkas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            <div style="margin-top: 10px;">
                                                @if($data->berkas && file_exists(public_path('storage/' . $data->berkas)))
                                                <!-- Display the default iframe when the file exists in the storage -->
                                                <iframe src="{{ asset('storage/' . $data->berkas) }}" frameborder="0" width="100%" height="300px"></iframe>
                                            @elseif($data->berkas)
                                                <!-- Display the iframe with the updated file -->
                                                <iframe src="{{ asset($data->berkas) }}" frameborder="0" width="100%" height="300px"></iframe>
                                            @else
                                                <!-- Optional: Show a placeholder if there's no file available -->
                                                <p>Data belum diupdate</p>
                                            @endif

                                            </div>

                                        </div>

                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

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
