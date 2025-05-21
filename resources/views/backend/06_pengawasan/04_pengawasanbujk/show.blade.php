
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
            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')

                           {{-- ======================================================= --}}
        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bepengawasanbujk">
                    <button onmouseover="this.style.background='white'; this.style.color='black'; this.style.transform='scale(1.05)'" onmouseout="this.style.background='linear-gradient(45deg, #6c757d, #dee2e6)'; this.style.color='white'; this.style.transform='scale(1)'" style="background: linear-gradient(45deg, #6c757d, #dee2e6); color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: all 0.3s ease; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/></svg>
                        Kembali</button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form  method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">

<div class="row">
    <div class="col-md-6">
        <!-- Kode Proyek -->
        <div class="mb-3">
            <label class="form-label" for="kodeproyek">
                <i class="bi bi-hash" style="margin-right: 8px; color: navy;"></i> Kode Proyek
            </label>
            <input type="text" id="kodeproyek" class="form-control" value="{{ $data->kodeproyek }}" readonly />
        </div>

        <!-- Nama Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="namaperusahaan">
                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Nama Perusahaan
            </label>
            <input type="text" id="namaperusahaan" class="form-control" value="{{ $data->namaperusahaan }}" readonly />
        </div>

        <!-- Alamat Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="alamatperusahaan">
                <i class="bi bi-geo-alt" style="margin-right: 8px; color: navy;"></i> Alamat Perusahaan
            </label>
            <textarea id="alamatperusahaan" class="form-control" rows="2" readonly>{{ $data->alamatperusahaan }}</textarea>
        </div>

        <!-- Status Modal -->
        <div class="mb-3">
            <label class="form-label" for="statusmodal">
                <i class="bi bi-cash-stack" style="margin-right: 8px; color: navy;"></i> Status Modal
            </label>
            <input type="text" id="statusmodal" class="form-control" value="{{ $data->statusmodal }}" readonly />
        </div>

        <!-- Jenis Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="jenisperusahaan">
                <i class="bi bi-diagram-3" style="margin-right: 8px; color: navy;"></i> Jenis Perusahaan
            </label>
            <input type="text" id="jenisperusahaan" class="form-control" value="{{ $data->jenisperusahaan }}" readonly />
        </div>

        <!-- NIB -->
        <div class="mb-3">
            <label class="form-label" for="nib">
                <i class="bi bi-card-heading" style="margin-right: 8px; color: navy;"></i> NIB
            </label>
            <input type="text" id="nib" class="form-control" value="{{ $data->nib }}" readonly />
        </div>

        <!-- KBLI -->
        <div class="mb-3">
            <label class="form-label" for="kbli">
                <i class="bi bi-list-ol" style="margin-right: 8px; color: navy;"></i> KBLI
            </label>
            <input type="text" id="kbli" class="form-control" value="{{ $data->kbli }}" readonly />
        </div>

        <!-- Uraian KBLI -->
        <div class="mb-3">
            <label class="form-label" for="uraiankbli">
                <i class="bi bi-info-square" style="margin-right: 8px; color: navy;"></i> Uraian KBLI
            </label>
            <textarea id="uraiankbli" class="form-control" rows="2" readonly>{{ $data->uraiankbli }}</textarea>
        </div>

        <!-- Sektor -->
        <div class="mb-3">
            <label class="form-label" for="sektor">
                <i class="bi bi-diagram-2-fill" style="margin-right: 8px; color: navy;"></i> Sektor
            </label>
            <input type="text" id="sektor" class="form-control" value="{{ $data->sektor }}" readonly />
        </div>

        <!-- Alamat Proyek -->
        <div class="mb-3">
            <label class="form-label" for="alamatproyek">
                <i class="bi bi-geo" style="margin-right: 8px; color: navy;"></i> Alamat Proyek
            </label>
            <input type="text" id="alamatproyek" class="form-control" value="{{ $data->alamatproyek }}" readonly />
        </div>

        <!-- Wilayah -->
        <div class="mb-3">
            <label class="form-label" for="wilayah">
                <i class="bi bi-map" style="margin-right: 8px; color: navy;"></i> Wilayah
            </label>
            <input type="text" id="wilayah" class="form-control" value="{{ $data->wilayah }}" readonly />
        </div>
    </div>

    <div class="col-md-6">
        <!-- Luas Tanah -->
        <div class="mb-3">
            <label class="form-label" for="luastanah">
                <i class="bi bi-square" style="margin-right: 8px; color: navy;"></i> Luas Tanah (m²)
            </label>
            <input type="text" id="luastanah" class="form-control" value="{{ $data->luastanah }}" readonly />
        </div>

        <!-- Jumlah TKI dan TKA -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKI Laki-laki
                </label>
                <input type="number" class="form-control" value="{{ $data->tki_lakilaki }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKI Perempuan
                </label>
                <input type="number" class="form-control" value="{{ $data->tki_perempuan }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKA Laki-laki
                </label>
                <input type="number" class="form-control" value="{{ $data->tka_lakilaki }}" readonly />
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    <i class="bi bi-person-fill" style="margin-right: 8px; color: navy;"></i> TKA Perempuan
                </label>
                <input type="number" class="form-control" value="{{ $data->tka_perempuan }}" readonly />
            </div>
        </div>

        <!-- Risiko -->
        <div class="mb-3">
            <label class="form-label" for="resiko">
                <i class="bi bi-exclamation-triangle" style="margin-right: 8px; color: navy;"></i> Risiko
            </label>
            <input type="text" id="resiko" class="form-control" value="{{ $data->resiko }}" readonly />
        </div>

        <!-- Sumber Data -->
        <div class="mb-3">
            <label class="form-label" for="sumberdata">
                <i class="bi bi-database" style="margin-right: 8px; color: navy;"></i> Sumber Data
            </label>
            <input type="text" id="sumberdata" class="form-control" value="{{ $data->sumberdata }}" readonly />
        </div>

        <!-- Investasi -->
        <div class="mb-3">
            <label class="form-label" for="investasi">
                <i class="bi bi-currency-dollar" style="margin-right: 8px; color: navy;"></i> Investasi (Rp)
            </label>
            <input type="text" id="investasi" class="form-control" value="{{ number_format($data->investasi, 2, ',', '.') }}" readonly />
        </div>

        <!-- Skala Usaha Perusahaan -->
        <div class="mb-3">
            <label class="form-label" for="skalausahaperusahaan">
                <i class="bi bi-bar-chart-line" style="margin-right: 8px; color: navy;"></i> Skala Usaha Perusahaan
            </label>
            <input type="text" id="skalausahaperusahaan" class="form-control" value="{{ $data->skalausahaperusahaan }}" readonly />
        </div>

        <!-- Skala Usaha Proyek -->
        <div class="mb-3">
            <label class="form-label" for="skalausahaproyek">
                <i class="bi bi-pie-chart" style="margin-right: 8px; color: navy;"></i> Skala Usaha Proyek
            </label>
            <input type="text" id="skalausahaproyek" class="form-control" value="{{ $data->skalausahaproyek }}" readonly />
        </div>

        <!-- Kewenangan Koordinator -->
        <div class="mb-3">
            <label class="form-label" for="kewenangankoordinator">
                <i class="bi bi-person-gear" style="margin-right: 8px; color: navy;"></i> Kewenangan Koordinator
            </label>
            <input type="text" id="kewenangankoordinator" class="form-control" value="{{ $data->kewenangankoordinator }}" readonly />
        </div>

        <!-- Kewenangan Pengawas -->
        <div class="mb-3">
            <label class="form-label" for="kewenanganpengawas">
                <i class="bi bi-person-check-fill" style="margin-right: 8px; color: navy;"></i> Kewenangan Pengawas
            </label>
            <input type="text" id="kewenanganpengawas" class="form-control" value="{{ $data->kewenanganpengawas }}" readonly />
        </div>

        <!-- PSN -->
        <div class="mb-3">
            <label class="form-label" for="PSN">
                <i class="bi bi-flag" style="margin-right: 8px; color: navy;"></i> PSN (Proyek Strategis Nasional)
            </label>
            <input type="text" id="PSN" class="form-control" value="{{ $data->PSN }}" readonly />
        </div>
    </div>

                                </div>
                                <!-- End row -->
                            </div>
                            <!-- end::Body -->
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
