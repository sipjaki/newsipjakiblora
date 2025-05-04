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
                            <div style="display: flex; justify-content: space-between; margin-top: 10px; flex-wrap: wrap; margin-bottom:20px;">
                                <!-- Kontainer Kiri -->
                                <div style="display: flex; gap: 10px;">
                                    <!-- Tombol Nama Pekerjaan -->
                                    <button
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#051cec'; this.style.color='white';"
                                        style="background-color: #051cec; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M4 0h5.5L14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM9.5 1v3a1 1 0 0 0 1 1h3l-4-4z"/>
                                        </svg>
                                        Nama Pekerjaan : {{ $datatertibjasakonstruksi }}
                                    </button>

                                    <!-- Tombol Badan Usaha -->
                                    <button
                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                        onmouseout="this.style.backgroundColor='#051cec'; this.style.color='white';"
                                        style="background-color: #051cec; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" style="margin-right: 8px;">
                                            <path d="M4 0h5.5L14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM9.5 1v3a1 1 0 0 0 1 1h3l-4-4z"/>
                                        </svg>
                                        Badan Usaha : {{ $datatertibjasakonstruksinamabadanusaha }}
                                    </button>
                                </div>

                                <!-- Kontainer Kanan -->
                                <div>
                                    <a href="/betertibjakonusaha">
                                        <button
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                            onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                            style="background-color: #374151; color: white; border: none; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                viewBox="0 0 16 16" style="margin-right: 8px;">
                                                <path fill-rule="evenodd"
                                                    d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                                            </svg>
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
                        <form action="{{ route('betertibjakonusahasurat1') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- <input type="text"  name="tertibjasakonstruksi_id" value="{{ $datatertibjasakonstruksi_id }}"> --}}

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
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Usaha : Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha</h5>

                                        <table class="table table-bordered table-sm" style="font-size: 14px;">
                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;"><i class="bi bi-building-fill"></i> Nama Badan Usaha</strong>
                                                </td>
                                                <td><input type="text" class="form-control" name="namabadanusaha" placeholder="Masukan Nama Badan Usaha ... "></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 300px;">
                                                    <strong style="font-size: 15px;"><i class="bi bi-check2-circle"></i> Status Perizinan Berusaha</strong>
                                                </td>
                                                <td>
                                                    <select class="form-control" name="statusperizinan">
                                                        <option value="">-- Pilih Status --</option>
                                                        <option value="Terverifikasi">Terverifikasi</option>
                                                        <option value="Tidak Terdaftar">Tidak Terdaftar</option>
                                                    </select>
                                                </td>
                                                {{-- <td><input type="text" class="form-control" name="statusperizinan"></td> --}}
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;"><i class="bi bi-123"></i> No NIB</strong>
                                                </td>
                                                <td><input type="text" class="form-control" name="nib" placeholder="Masukan NIB ... "></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;"><i class="bi bi-calendar-range-fill"></i> Waktu Pengawasan</strong>
                                                </td>
                                                <td class="d-flex gap-2">
                                                    <input type="date" class="form-control" name="waktupengawasan" placeholder="Dimulai Sejak ... ">
                                                    <span class="mx-1">(Sampai Dengan)</span>
                                                    <input type="date" class="form-control" name="waktupengawasanselesai" placeholder="Berakhir Tanggal ... ">
                                                </td>
                                            </tr>
                                        </table>

                                        <table style="width: 100%; border-collapse: collapse; font-size: 12px; margin-bottom: 20px;">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">No</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Nama Paket Pekerjaan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Jenis Usaha Yang Dipersyaratkan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Kesesuaian SBU</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Sifat Usaha<br>Yang Dipersyaratkan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Kesesuaian SBU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border: 1px solid #000; text-align: center;">1</td>
                                                    <td style="border: 1px solid #000;"><input type="text" class="form-control" name="namapaketpekerjaan" placeholder="Nama Pekerjaan.."></td>
                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control" name="jenisusaha">
                                                            <option value="">-- Pilih Jenis Usaha --</option>
                                                            <option value="Pekerjaan Konstruksi">Pekerjaan Konstruksi</option>
                                                            <option value="Pekerjaan Konsultasi Konstruksi">Pekerjaan Konsultasi Konstruksi</option>
                                                        </select>
                                                    </td>
                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control" name="kesesuaian">
                                                            <option value="">-- Pilih Kesesuaian --</option>
                                                            <option value="Sesuai">Sesuai</option>
                                                            <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                        </select>
                                                    </td>
                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control" name="sifatusaha">
                                                            <option value="">-- Pilih Sifat Usaha --</option>
                                                            <option value="Umum">Umum</option>
                                                            <option value="Spesialis">Spesialis</option>
                                                        </select>
                                                    </td>
                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control" name="kesesuaiansbu">
                                                            <option value="">-- Pilih Kesesuaian SBU --</option>
                                                            <option value="Sesuai">Sesuai</option>
                                                            <option value="Tidak Sesuai">Tidak Sesuai</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table style="width: 100%; border-collapse: collapse; font-size: 12px;">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Sub Klasifikasi<br><small>Yang Dipersyaratkan</small></th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Kesesuaian SBU</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Layanan Usaha<br><small>Yang Dipersyaratkan</small></th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa;">Kesesuaian SBU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control mb-1" name="subklasifikasi_id">
                                                            <option value="">-- Pilih Subklasifikasi --</option>
                                                            @foreach ($datasubklasifikasi as $sub)
                                                                <option value="{{ $sub->id }}">{{ $sub->pekerjaan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td style="border: 1px solid #000;"><input type="text" class="form-control" name="kesesuaianklasifikasi"></td>
                                                    <td style="border: 1px solid #000;"><input type="text" class="form-control" name="layananusaha"></td>
                                                    <td style="border: 1px solid #000;"><input type="text" class="form-control" name="kesesuaianlayananusaha"></td>
                                                </tr>
                                            </tbody>
                                        </table>


                                </div>

                                <!-- Tombol Submit -->
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

                                </div>


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
