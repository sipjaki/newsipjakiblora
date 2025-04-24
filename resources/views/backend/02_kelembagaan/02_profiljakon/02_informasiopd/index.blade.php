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
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> Nama Organisasi Perangkat Daerah (OPD)
                                                </label>
                                                <input class="form-control" value="{{$item->namaopd}}" readonly/>
                                                <div class="form-text"></div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> Alamat Organisasi Perangkat Daerah (OPD)
                                                </label>
                                                <input class="form-control" value="{{$item->alamatopd}}" readonly />
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-house-door" style="margin-right: 8px; color: navy;"></i> RT/RW
                                                </label>
                                                <input class="form-control" value="{{$item->rtrw}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-mailbox" style="margin-right: 8px; color: navy;"></i> Kode Pos
                                                </label>
                                                <input class="form-control" value="{{$item->kodepos}}" readonly/>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Kelurahan
                                                </label>
                                                <input class="form-control" value="{{$item->kelurahan}}" readonly/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Kecamatan
                                                </label>
                                                <input class="form-control" value="{{$item->kecamatan}}" readonly/>
                                            </div>


                                        </div>

<!-- Right Column (6/12) -->
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Kota
        </label>
        <input class="form-control" value="{{$item->kota}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Provinsi
        </label>
        <input class="form-control" value="{{$item->provinsi}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-globe" style="margin-right: 8px; color: navy;"></i> Negara
        </label>
        <input class="form-control" value="{{$item->negara}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Titik Geografis
        </label>
        <input class="form-control" value="{{$item->posisigeografis}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Tipe Dinas
        </label>
        <input class="form-control" value="{{$item->tipedinas}}" readonly/>
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
                        <a href="/beinfoopd/update/{{$item->id}}">
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

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 viewBox="0 0 16 16" style="margin-right: 8px;">
                              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                            </svg>

                            <span style="font-family: 'Poppins', sans-serif; font-size: 16px; line-height: 1.5;">
                                Kembali
                            </span>
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
