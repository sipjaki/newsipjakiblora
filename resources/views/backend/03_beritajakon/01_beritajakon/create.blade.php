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
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">

              <div class="col-sm-12"><h3 class="mb-0">Selamat datang ! <span style="color: black; font-weight:800;" > {{ Auth::user()->name }}</span> di Dashboard <span style="color: black; font-weight:800;"> {{ Auth::user()->statusadmin->statusadmin }} </span>  Sistem Informasi Pembina Jasa Konstruksi Kab Blora</h3></div>

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
                        <div style="
                        margin-bottom:10px;
                        font-weight: 900;
                        font-size: 16px;
                        text-align: center;
                        background: linear-gradient(135deg, #1f50f1, #1f50f1);
                        color: white;
                        padding: 10px 25px;
                        border-radius: 10px;
                        display: inline-block;
                        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                        width: 100%;
                    ">
                        📌 Halaman Update : {{$title}}

                    </div>

                           {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/beberitajakon">
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
                        <form action="{{ route('create.beberitajakoncreatenew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- User ID -->
                                        <div class="mb-3">
                                            <label class="form-label" for="user_id">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> User ID
                                            </label>
                                            <select id="user_id" name="user_id" class="form-control @error('user_id') is-invalid @enderror" disabled>
                                                <option value="" disabled selected>Pilih Penulis</option>
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ (old('user_id') == $user->id || (Auth::check() && Auth::user()->statusadmin->id == 1 && Auth::user()->id == $user->id)) ? 'selected' : '' }}>
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
                                            <label class="form-label" for="judulberita">
                                                <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Berita
                                            </label>
                                            <input type="text" id="judulberita" name="judulberita" class="form-control @error('judulberita') is-invalid @enderror" value="{{ old('judulberita') }}" />
                                            @error('judulberita')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="mb-3">
                                            <label class="form-label" for="tanggal">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tanggal
                                            </label>
                                            <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" />
                                            @error('tanggal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="keterangan">
                                                <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> Keterangan
                                            </label>
                                            <textarea id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" style="height: 150px;">{{ old('keterangan') }}</textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- End Left Column -->

                                    <!-- Right Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Foto -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto
                                            </label>
                                            <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror" />
                                            @error('foto')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Foto 1 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto1">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto 1
                                            </label>
                                            <input type="file" id="foto1" name="foto1" class="form-control @error('foto1') is-invalid @enderror" />
                                            @error('foto1')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Foto 2 -->
                                        <div class="mb-3">
                                            <label class="form-label" for="foto2">
                                                <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto 2
                                            </label>
                                            <input type="file" id="foto2" name="foto2" class="form-control @error('foto2') is-invalid @enderror" />
                                            @error('foto2')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- End Right Column -->
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                                <button type="submit" style="background-color: #117235; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">
                                    <i class="fa fa-file" style="margin-right: 8px;"></i> Create
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
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
