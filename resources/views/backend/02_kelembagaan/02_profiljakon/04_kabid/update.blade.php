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
                    <div class="card-header">
                       @include('backend.00_administrator.00_baganterpisah.12_judulupdate')
                    {{-- ======================================================= --}}
        {{-- ALERT --}}


        @include('backend.00_administrator.00_baganterpisah.06_alert')


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bekabid">
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
                        <form action="{{ route('update.bekabidbaruupdatecreate', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Nama Lengkap -->
                                        <div class="mb-3">
                                            <label class="form-label" for="namalengkap">
                                                <i class="bi bi-person" style="margin-right: 8px; color: navy;"></i> Nama Lengkap
                                            </label>
                                            <input type="text" id="namalengkap" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap', $data->namalengkap) }}" />
                                            @error('namalengkap')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- NIP -->
                                        <div class="mb-3">
                                            <label class="form-label" for="nip">
                                                <i class="bi bi-credit-card" style="margin-right: 8px; color: navy;"></i> NIP
                                            </label>
                                            <input type="text" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip', $data->nip) }}" />
                                            @error('nip')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Tempat Tanggal Lahir -->
                                        <div class="mb-3">
                                            <label class="form-label" for="ttl">
                                                <i class="bi bi-calendar" style="margin-right: 8px; color: navy;"></i> Tempat Tanggal Lahir
                                            </label>
                                            <input type="date" id="ttl" name="ttl" class="form-control @error('ttl') is-invalid @enderror" value="{{ old('ttl', $data->ttl) }}" />
                                            @error('ttl')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Pangkat Golongan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="pangkatgolongan">
                                                <i class="bi bi-person-badge" style="margin-right: 8px; color: navy;"></i> Pangkat Golongan
                                            </label>
                                            <input type="text" id="pangkatgolongan" name="pangkatgolongan" class="form-control @error('pangkatgolongan') is-invalid @enderror" value="{{ old('pangkatgolongan', $data->pangkatgolongan) }}" />
                                            @error('pangkatgolongan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <!-- Jabatan -->
                                        <div class="mb-3">
                                            <label class="form-label" for="jabatan">
                                                <i class="bi bi-briefcase" style="margin-right: 8px; color: navy;"></i> Jabatan
                                            </label>
                                            <input type="text" id="jabatan" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan', $data->jabatan) }}" />
                                            @error('jabatan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Perangkat Daerah -->
                                        <div class="mb-3">
                                            <label class="form-label" for="perangkatdaerah">
                                                <i class="bi bi-building" style="margin-right: 8px; color: navy;"></i> Perangkat Daerah
                                            </label>
                                            <input type="text" id="perangkatdaerah" name="perangkatdaerah" class="form-control @error('perangkatdaerah') is-invalid @enderror" value="{{ old('perangkatdaerah', $data->perangkatdaerah) }}" />
                                            @error('perangkatdaerah')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Pendidikan Terakhir -->
                                        <div class="mb-3">
                                            <label class="form-label" for="pendidikanterakhir">
                                                <i class="bi bi-graduation-cap" style="margin-right: 8px; color: navy;"></i> Pendidikan Terakhir
                                            </label>
                                            <select id="pendidikanterakhir" name="pendidikanterakhir" class="form-control @error('pendidikanterakhir') is-invalid @enderror">
                                                <option value="">Pilih Pendidikan Terakhir</option>
                                                <option value="Strata 1" {{ old('pendidikanterakhir', $data->pendidikanterakhir) == 'Strata 1' ? 'selected' : '' }}>Strata 1 (S1)</option>
                                                <option value="Strata 2" {{ old('pendidikanterakhir', $data->pendidikanterakhir) == 'Strata 2' ? 'selected' : '' }}>Strata 2 (S2)</option>
                                                <option value="Strata 3" {{ old('pendidikanterakhir', $data->pendidikanterakhir) == 'Strata 3' ? 'selected' : '' }}>Strata 3 (S3)</option>
                                                <option value="Magister" {{ old('pendidikanterakhir', $data->pendidikanterakhir) == 'Magister' ? 'selected' : '' }}>Magister (S2)</option>
                                                <option value="Doktor" {{ old('pendidikanterakhir', $data->pendidikanterakhir) == 'Doktor' ? 'selected' : '' }}>Doktor (S3)</option>
                                            </select>
                                            @error('pendidikanterakhir')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
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
      </main>
      <!--end::App Main-->
    </div>
    </div>


      @include('backend.00_administrator.00_baganterpisah.02_footer')
