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
            <section style="background: linear-gradient(to bottom, #ffffff); width: 100%; min-height: 100vh;">

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
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                    </div>



                           {{-- ======================================================= --}}
                           <div class="card card-primary card-outline mb-6">
                            <div style="display: flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px;">
                                <!-- Tombol Kiri -->
                                <button class="button-baru">
                                    Nama Kegiatan : {{ $agendapelatihan }}
                                </button>

                                <!-- Tombol Kanan -->
                               <a href="{{ url()->previous() }}">
                                    <button class="button-modern">
                                        <i class="bi bi-arrow-left" style="margin-right: 8px;"></i>
                                        Kembali
                                    </button>
                                </a>

                            </div>
                        </div>

        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('bepelatihanjampelajarantenagakerjacreate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">

                                        <!-- ID BUJK Kontraktor (Hidden atau Select jika mau pilih) -->
                                        <input type="hidden"  name="agendapelatihan_id" value="{{ $agendapelatihan_id }}">
                                        <!-- Nama Pengurus -->


                                        <!-- Materi -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="materi">
        <i class="bi bi-journal-text" style="margin-right:8px; color:navy;"></i> Materi
    </label>
    <input type="text" id="materi" name="materi" class="form-control @error('materi') is-invalid @enderror" value="{{ old('materi') }}">
    @error('materi')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Narasumber -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="narasumber">
        <i class="bi bi-person-lines-fill" style="margin-right:8px; color:navy;"></i> Narasumber
    </label>
    <input type="text" id="narasumber" name="narasumber" class="form-control @error('narasumber') is-invalid @enderror" value="{{ old('narasumber') }}">
    @error('narasumber')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<!-- Jam Pelajaran -->
<div class="form-modern mb-3">
    <label class="form-label-modern" for="jampelajaran">
        <i class="bi bi-clock-history" style="margin-right:8px; color:navy;"></i> Jam Pelajaran
    </label>
    <select id="jampelajaran" name="jampelajaran" class="form-control @error('jampelajaran') is-invalid @enderror">
        <option value="">-- Pilih Jam Pelajaran --</option>
        @for ($i = 1; $i <= 12; $i++)
            <option value="{{ $i }}" {{ old('jampelajaran') == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
    </select>
    @error('jampelajaran')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


                                    </div>
                                    <!-- End Left Column -->

                                    <!-- End Right Column -->
                                </div>

                                <!-- Tombol Submit -->
                                <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                    <div class="flex justify-end">
                                    <button type="button" class="button-baru" onclick="openModal()">
                                                        <i class="bi bi-plus" style="margin-right: 8px;"></i>
                                                        <span style="font-family: 'Poppins', sans-serif;">Tambah Pemateri</span>
                                                    </button>

                                    </div>
                                    <!-- Modal Konfirmasi -->
                                    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                          <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                            Apakah Anda ingin menambahkan <br> materi pelajaran ?
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
