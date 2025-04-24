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
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-6">
                            <!--begin::Header-->
                            {{-- <div class="card-header"><div class="card-title">Quick Example</div></div> --}}
                            <!--end::Header-->
                            <!--begin::Form-->

                            @foreach ($data as $item)

                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Left Column (6/12) -->
                                        <div class="col-md-6">
                                            <!-- Nama Lengkap -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Nama Lengkap
                                                </label>
                                                <input class="form-control" value="{{$item->namalengkap}}" readonly/>
                                                <div class="form-text"></div>
                                            </div>

                                            <!-- NIP -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> NIP
                                                </label>
                                                <input class="form-control" value="{{$item->nip}}" readonly />
                                            </div>

                                            <!-- Tempat Tanggal Lahir -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-calendar-date" style="margin-right: 8px; color: navy;"></i> Tempat Tanggal Lahir
                                                </label>
                                                <input class="form-control" value="{{$item->ttl}}" readonly/>
                                            </div>

                                            <!-- Pangkat Golongan -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-trophy" style="margin-right: 8px; color: navy;"></i> Pangkat Golongan
                                                </label>
                                                <input class="form-control" value="{{$item->pangkatgolongan}}" readonly/>
                                            </div>

                                        </div>

                                        <!-- Right Column (6/12) -->
                                        <div class="col-md-6">
                                            <!-- Jabatan -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Jabatan
                                                </label>
                                                <input class="form-control" value="{{$item->jabatan}}" readonly/>
                                            </div>

                                            <!-- Perangkat Daerah -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Perangkat Daerah
                                                </label>
                                                <input class="form-control" value="{{$item->perangkatdaerah}}" readonly/>
                                            </div>

                                            <!-- Pendidikan Terakhir -->
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-book" style="margin-right: 8px; color: navy;"></i> Pendidikan Terakhir
                                                </label>
                                                <input class="form-control" value="{{$item->pendidikanterakhir}}" readonly/>
                                            </div>

                                        </div>
                                              <!-- End Right Column -->

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
                        <a href="/bekepaladinas/update/{{$item->id}}">
                            <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#117235'; this.style.color='white';"
                            style="background-color: #117235; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Kembali -->
                            <i class="fa fa-file" style="margin-right: 8px;"></i>
                            Update
                        </button>
                        </a>
                        <a href="/beprofiljakon">
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

                @endforeach
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
