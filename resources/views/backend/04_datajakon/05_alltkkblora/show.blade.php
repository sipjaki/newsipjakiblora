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
                    @include('backend.00_administrator.00_baganterpisah.14_judulshow')

                    <div class="card-header">
                        <h2 class="card-title" style="color: black;">
                            Data Details :
                            <button class="btn btn-success"
                                    style="background-color: #1d643b; border-color: #1d643b; font-weight: bold; padding: 10px 20px;
                                           border-radius: 5px; font-size: 16px; margin-right: 10px;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000'; this.style.borderColor='#1d643b';"
                                    onmouseout="this.style.backgroundColor='#1d643b'; this.style.color='#ffffff'; this.style.borderColor='#1d643b';">
                                {{ $data->nama }}
                            </button>
                        </h2>
                        <button id="status-{{ $data->id }}" class="btn btn-sm"></button>

                        <script>
                            function updateStatus() {
                                let now = new Date().getTime();
                                let tanggalHabis = new Date("{{ \Carbon\Carbon::parse($data->tanggalhabis)->format('Y-m-d H:i:s') }}").getTime();
                                let statusButton = document.getElementById("status-{{ $data->id }}");

                                // CSS yang digunakan pada tombol
                                let buttonStyle = "font-weight: bold; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-right: 10px;";

                                if (now > tanggalHabis) {
                                    statusButton.innerText = "TIDAK BERLAKU";
                                    statusButton.setAttribute("style", buttonStyle + " background-color: red; border-color: red; color: white;"); // Set to red for "TIDAK BERLAKU"
                                    statusButton.className = "btn btn-danger btn-sm"; // Update class for 'danger' status

                                    // Hover effect: keep background white on hover
                                    statusButton.onmouseover = function() {
                                        statusButton.style.backgroundColor = '#ffffff';
                                        statusButton.style.color = '#000000'; // Color becomes black when hovered
                                        statusButton.style.borderColor = 'red'; // Keep red border
                                    };
                                    statusButton.onmouseout = function() {
                                        statusButton.style.backgroundColor = 'red';
                                        statusButton.style.color = 'white'; // Keep white text when mouse out
                                        statusButton.style.borderColor = 'red'; // Keep red border
                                    };
                                } else {
                                    statusButton.innerText = "BERLAKU";
                                    statusButton.setAttribute("style", buttonStyle + " background-color: #1d643b; border-color: #1d643b; color: white;");
                                    statusButton.className = "btn btn-success btn-sm"; // Update class for 'success' status

                                    // Hover effect: keep background white on hover
                                    statusButton.onmouseover = function() {
                                        statusButton.style.backgroundColor = '#ffffff';
                                        statusButton.style.color = '#000000'; // Color becomes black when hovered
                                        statusButton.style.borderColor = '#1d643b'; // Keep original border color
                                    };
                                    statusButton.onmouseout = function() {
                                        statusButton.style.backgroundColor = '#1d643b';
                                        statusButton.style.color = 'white'; // Keep white text when mouse out
                                        statusButton.style.borderColor = '#1d643b'; // Keep original border color
                                    };
                                }
                            }

                            // Jalankan pertama kali saat halaman dimuat
                            updateStatus();

                            // Update setiap 1 detik untuk realtime
                            setInterval(updateStatus, 1000);
                        </script>

                    </div>

                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-6">
                            <!--begin::Header-->
                            {{-- <div class="card-header"><div class="card-title">Quick Example</div></div> --}}
                            <!--end::Header-->
                            <!--begin::Form-->

                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Column (6/12) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i>Nama Lengkap
                                                </label>
                                                <input class="form-control" value="{{$data->nama}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-geo-alt-fill" style="margin-right: 8px; color: navy;"></i>Alamat
                                                </label>
                                                <input class="form-control" value="{{$data->alamat}}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-check" style="margin-right: 8px; color: navy;"></i>Tahun Lulus
                                                </label>
                                                <input class="form-control" value="{{$data->tahunlulus}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-mortarboard-fill" style="margin-right: 8px; color: navy;"></i>Universitas/Sekolah/Instansi
                                                </label>
                                                <input class="form-control" value="{{$data->namasekolah->namasekolah}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-award-fill" style="margin-right: 8px; color: navy;"></i>Jenjang Pendidikan
                                                </label>
                                                <input class="form-control" value="{{$data->jenjangpendidikan->jenjangpendidikan}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-briefcase-fill" style="margin-right: 8px; color: navy;"></i>Jabatan Kerja
                                                </label>
                                                <input class="form-control" value="{{$data->jabatankerja->jabatankerja}}" readonly/>
                                            </div>
                                        </div>
                                        <!-- End Left Column -->
                                        <!-- Right Column (6/12) -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-award-fill" style="margin-right: 8px; color: navy;"></i>Jenjang
                                                </label>
                                                <input class="form-control" value="{{$data->jenjang->jenjang}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-building-fill" style="margin-right: 8px; color: navy;"></i>LPS Penerbit
                                                </label>
                                                <input class="form-control" value="{{$data->lpspenerbit->lpspenerbit}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-book-fill" style="margin-right: 8px; color: navy;"></i>Jurusan
                                                </label>
                                                <input class="form-control" value="{{$data->jurusan->jurusan}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-check-fill" style="margin-right: 8px; color: navy;"></i>Tanggal Terbit
                                                </label>
                                                <input class="form-control" value="{{ \Carbon\Carbon::parse($data->tanggalterbit)->translatedFormat('d F Y') }}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-x-fill" style="margin-right: 8px; color: navy;"></i>Tanggal Habis
                                                </label>
                                                <input class="form-control" value="{{ \Carbon\Carbon::parse($data->tanggalhabis)->translatedFormat('d F Y') }}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-shield-check" style="margin-right: 8px; color: navy;"></i>Status Terbit
                                                </label>
                                                <input class="form-control" value="{{$data->statusterbit}}" readonly/>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->
                    <br><br>
                    <div style="display: flex; justify-content: flex-end; margin-bottom: 20px;">
                        <a href="/404">
                            <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#22C55E'; this.style.color='white';"
                            style="background-color: #22C55E; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Kembali -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 384 512" fill="white" style="margin-right: 8px;">
                                <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM384 121.9V128H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/>
                            </svg>

                            Update
                        </button>
                        </a>
                        <a href="/beskkallblora">
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
