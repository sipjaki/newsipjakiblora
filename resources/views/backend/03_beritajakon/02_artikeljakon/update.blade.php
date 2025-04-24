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
                    <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
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
                                            @if ($data->foto1)
                                            <div class="mt-2">
                                                <!-- Menyamaakan ukuran gambar: width dan height -->
                                                <img src="{{ asset('storage/' . $data->foto1) }}" alt="Foto 1" style="width: 100px; height: 100px; object-fit: cover;" />
                                            </div>
                                            @endif
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
                                            @if ($data->foto2)
                                            <div class="mt-2">
                                                <!-- Menyamaakan ukuran gambar: width dan height -->
                                                <img src="{{ asset('storage/' . $data->foto2) }}" alt="Foto 2" style="width: 100px; height: 100px; object-fit: cover;" />
                                            </div>
                                            @endif
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
                                            @if ($data->foto3)
                                            <div class="mt-2">
                                                <!-- Menyamaakan ukuran gambar: width dan height -->
                                                <img src="{{ asset('storage/' . $data->foto3) }}" alt="Foto 3" style="width: 100px; height: 100px; object-fit: cover;" />
                                            </div>
                                            @endif
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

                                            @if ($data->berkas)
                                            <div class="mt-2">
                                                <!-- Menampilkan PDF jika berkas ada -->
                                                <iframe src="{{ asset('storage/' . $data->berkas) }}" width="100%" height="400px"></iframe>
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" style="background-color: #117235; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
                                    <i class="fa fa-file" style="margin-right: 8px;"></i> Update
                                </button>
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
