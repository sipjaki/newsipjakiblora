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

        {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}
      <section style="background: linear-gradient(to bottom, #a8f0c6, #ffffff); width: 100%; min-height: 100vh;">

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
<!-- Left Column (6/12) -->
<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Nomor
        </label>
        <div style="max-width: 100%; padding: 10px; position: relative;">
            <!-- Icon inside the input -->
            {{-- <i class="fa fa-id-card" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: navy;"></i> --}}
            <input class="form-control ps-5" readonly value="{{$item->nomor}}" />
        </div>
        <div class="form-text"></div>
    </div>
</div>
<!-- End Left Column -->

<!-- Right Column (6/12) -->
<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 1
        </label>
        <input class="form-control" value="{{$item->operator1}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 2
        </label>
        <input class="form-control" value="{{$item->operator2}}" readonly/>
    </div>
</div>
<!-- End Right Column -->

<div class="col-md-6">
    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 3
        </label>
        <input class="form-control" value="{{$item->operator3}}" readonly/>
    </div>

    <div class="mb-3">
        <label class="form-label">
            <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Operator 4
        </label>
        <input class="form-control" value="{{$item->operator4}}" readonly/>
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
                        <a href="/besipjaki/update/{{$item->id}}">
                            <button class="button-berkas" type="button" onclick="openModal()">
    <i class="bi bi-pencil-square"></i>
    Update ?
</button>

                        </a>
                        <a href="/beprofiljakon">
                            <button class="button-newvalidasi">
                            <!-- Ikon Kembali -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16" style="margin-right: 8px;">
                         <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                       </svg>
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
            </section>
        </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
