@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('backend.00_style.01_cssdashboard.style')

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
                                <div style="display: flex; gap: 10px; margin-right:25px; margin-left:25px;">
                                    <!-- Tombol Nama Pekerjaan -->
                                    <button class="btn-create">
                                        <i class="bi bi-file-earmark" style="margin-right: 8px;"></i>
                                        Nama Pekerjaan: {{ $datatertibjasakonstruksi ?? 'Masih Kosong' }}
                                    </button>

                                    <!-- Tombol Badan Usaha -->
                                 {{-- <a href="/404">
                                        <button class="btn-create">
                                            <i class="bi bi-tools icon-create"></i>
                                            Perbaikan Data
                                        </button>
                                    </a>

                                    <a href="/404">
                                        <button class="btn-create">
                                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Download Berkas
                                        </button>
                                    </a>

                                        <button class="btn-create"
                                            data-bs-toggle="modal" data-bs-target="#modalSurat2{{ $data->id }}">
                                            <i class="bi bi-file-earmark-text icon-create"></i>
                                            Lihat Berkas
                                        </button> --}}

                                <div class="modal fade" id="modalSurat2{{ $data->id }}" tabindex="-1" aria-labelledby="modalSurat2Label{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content" style="font-size: 0.875rem;">
                                            <div class="modal-header d-flex align-items-center">
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <span class="mx-2">:</span>
                                                <p style="margin-left: 10px; font-size: 0.9rem; margin-bottom: 0;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 style="font-size: 1rem;">Pengawasan Tertib Usaha Terhadap Kesesuaian Bentuk dan Kualifikasi Usaha dengan Kegiatan Usaha Jasa Konstruksi dan  <br> Segmentasi Pasar Jasa Konstruksi Secara Rutin </h5>
                                                <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha2->namabadanusaha ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 300px;"><strong>Status Perizinan Berusaha</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha2->statusperizinan ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>No NIB</strong></td>
                                                        <td>{{ $data->surattertibjakonusaha2->nib ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                        <td>
                                                            @if ($data->surattertibjakonusaha2 && $data->surattertibjakonusaha2->waktupengawasan && $data->surattertibjakonusaha2->waktupengawasanselesai)
                                                                {{ \Carbon\Carbon::parse($data->surattertibjakonusaha2->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                –
                                                                {{ \Carbon\Carbon::parse($data->surattertibjakonusaha2->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                            @else
                                                                <span class="text-muted">Belum Di Buat</span>
                                                            @endif
                                                        </td>


                                                    </tr>
                                                </table>

                                                {{-- <h6 class="mt-4" style="font-size: 0.9rem;">Detail Kegiatan:</h6> --}}
                                                <table style="width: 100%; border-collapse: collapse; font-size: 12px; color: #000;">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 50px;">No</th>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nama Paket Pekerjaan</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Bentuk</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kualifikasi</th>
                                                            {{-- <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Subklasifikasi</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Layanan Usaha</th> --}}
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Bentuk</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Kualifikasi</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>
>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #000; text-align: center;">1</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha2->namapaketpekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000;">{{$data->surattertibjakonusaha2->bentuk ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha2->kesesuaiansbu ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha2->syaratkualifikasi ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$data->surattertibjakonusaha2->sbu ?? 'Data Belum Di Buat '}}</td>
                                                            {{-- <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->subklasifikasi}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianklasifikasi}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->layananusaha}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianlayananusaha}}</td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="container" style="margin-top: 10px;">
                                                    <!-- Modal Card -->

                                                            <div class="container" style="margin-top: 10px;">
                                                                <div class="row">
                                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                                        <!-- Modal Card -->
                                                                        <div class="card" style="border: 1px solid white;">
                                                                            <div class="card-body">
                                                                                <!-- Tim Pemeriksa -->
                                                                                <div class="tim-pemeriksa-container">
                                                                                    <div class="tim-pemeriksa">
                                                                                        <h6 style="font-size: 0.9rem;">Tim Pemeriksa:</h6>
                                                                                        <table class="table table-sm">
                                                                                            <thead class="table-secondary">
                                                                                                <tr>
                                                                                                    <th style="width: 60px; font-size: 12px;" >No</th>
                                                                                                    <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                                                                                                    <th style="width: 150px; text-align: center; font-size: 12px;">Tanda Tangan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">1</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>

                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">2</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">3</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                                </div>

                                <!-- Kontainer Kanan -->
                                <div>
                             <a href="{{ url()->previous() }}">
                                    <button class="btn-kembali">
                                        <i class="bi bi-arrow-left icon-create" style="margin-right: 8px;"></i>
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
                        <form action="{{ route('betertibjakonusahasegmentasipasarbuatberkas') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden"  name="tertibjasakonstruksi_id" value="{{ $datatertibjasakonstruksi_id }}">

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
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Kesesuaian Bentuk dan Kualifikasi Usaha dengan Kegiatan Usaha Jasa Konstruksi dan Segmentasi Pasar Jasa Konstruksi Secara Rutin</h5>
                                            <br>
                                        <table class="table table-bordered table-sm" style="font-size: 14px;">
                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;">Nama Badan Usaha</strong>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        class="form-control @error('namabadanusaha') is-invalid @enderror"
                                                        name="namabadanusaha"
                                                        placeholder="Masukan Nama Badan Usaha ..."
                                                        value="{{ old('namabadanusaha', $datatertibjasakonstruksinamabadanusaha ?? '') }}" readonly>

                                                    @error('namabadanusaha')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 300px;">
                                                    <strong style="font-size: 15px;">Status Perizinan Berusaha</strong>
                                                </td>
                                                <td>
                                                    <select class="form-control @error('statusperizinan') is-invalid @enderror" name="statusperizinan">
                                                        <option value="">-- Pilih Status --</option>
                                                        <option value="Terverifikasi" {{ old('statusperizinan') == 'Terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
                                                        <option value="Tidak Terdaftar" {{ old('statusperizinan') == 'Tidak Terdaftar' ? 'selected' : '' }}>Tidak Terdaftar</option>
                                                        {{-- <option value="Tidak Terdaftar" {{ old('statusperizinan') == 'Kadaluarsa' ? 'selected' : '' }}>Tidak Terdaftar</option> --}}
                                                    </select>
                                                    @error('statusperizinan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;">No NIB</strong>
                                                </td>
                                                <td>
                                                    <input
                                                        type="text"
                                                        class="form-control @error('nib') is-invalid @enderror"
                                                        name="nib"
                                                        placeholder="Masukkan NIB ..."
                                                        value="{{ old('nib', $datatertibjasakonstruksinib ?? '') }}" readonly>
                                                    @error('nib')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;">Waktu Pengawasan</strong>
                                                </td>
                                                <td class="d-flex gap-2">
                                                    <input type="date" class="form-control @error('waktupengawasan') is-invalid @enderror" name="waktupengawasan" value="{{ old('waktupengawasan') }}" placeholder="Dimulai Sejak ... ">
                                                    @error('waktupengawasan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                    <span class="mx-1">(Sampai Dengan)</span>

                                                    <input type="date" class="form-control @error('waktupengawasanselesai') is-invalid @enderror" name="waktupengawasanselesai" value="{{ old('waktupengawasanselesai') }}" placeholder="Berakhir Tanggal ... ">
                                                    @error('waktupengawasanselesai')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                        </table>

                                        <table style="width: 100%; border-collapse: collapse; font-size: 12px; margin-bottom: 20px;">
                                            <thead>
                                                <tr>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">No</th>
                                                    <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 400px; font-size:15px;">Nama Paket Pekerjaan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Jenis Usaha Yang Dipersyaratkan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Kesesuaian SBU</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Sifat Usaha<br>Yang Dipersyaratkan</th>
                                                    <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; font-size:15px;">Kesesuaian SBU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border: 1px solid #000; text-align: center;">1</td>

                                                  <td style="border: 1px solid #000; width: 400px;">
                                                    <textarea
                                                        class="form-control @error('namapaketpekerjaan') is-invalid @enderror"
                                                        name="namapaketpekerjaan"
                                                        placeholder="Masukan Nama Pekerjaan ..."
                                                        rows="6"
                                                        style="width: 100%; resize: vertical;" readonly>{{ old('namapaketpekerjaan', $datatertibjasakonstruksi ?? 'Data Masih Kosong') }}</textarea>
                                                    @error('namapaketpekerjaan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>

                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control @error('bentuk') is-invalid @enderror" name="bentuk">
                                                            <option value="">-- Pilih Jenis Bentuk Usaha --</option>
                                                            <option value="Badan Usaha" {{ old('bentuk') == 'Badan Usaha' ? 'selected' : '' }}>Badan Usaha</option>
                                                            <option value="Perorangan" {{ old('bentuk') == 'Perorangan' ? 'selected' : '' }}>Perorangan</option>
                                                        </select>
                                                        @error('bentuk')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>


                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control @error('kesesuaiansbu') is-invalid @enderror" name="kesesuaiansbu">
                                                            <option value="">-- Pilih Kesesuaian Bentuk --</option>
                                                            <option value="Sesuai" {{ old('kesesuaiansbu') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                            <option value="Tidak Sesuai" {{ old('kesesuaiansbu') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                        </select>
                                                        @error('kesesuaiansbu')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>

                                                    <td style="border: 1px solid #000;">
                                                            <select class="form-control @error('syaratkualifikasi') is-invalid @enderror" name="syaratkualifikasi">
                                                                <option value="">-- Pilih Syarat Kualifikasi --</option>
                                                                <option value="Kecil" {{ old('syaratkualifikasi') == 'Kecil' ? 'selected' : '' }}>Kecil</option>
                                                                <option value="Menengah" {{ old('syaratkualifikasi') == 'Menengah' ? 'selected' : '' }}>Menengah</option>
                                                                <option value="Besar" {{ old('syaratkualifikasi') == 'Besar' ? 'selected' : '' }}>Besar</option>
                                                            </select>
                                                            @error('syaratkualifikasi')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>

                                                    <td style="border: 1px solid #000;">
                                                        <select class="form-control @error('sbu') is-invalid @enderror" name="sbu">
                                                            <option value="">-- Pilih Kesesuaian SBU --</option>
                                                            <option value="Sesuai" {{ old('sbu') == 'Sesuai' ? 'selected' : '' }}>Sesuai</option>
                                                            <option value="Tidak Sesuai" {{ old('sbu') == 'Tidak Sesuai' ? 'selected' : '' }}>Tidak Sesuai</option>
                                                        </select>
                                                        @error('sbu')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                </div>

                                <div class="container" style="margin-top: 10px;">
                                    <!-- Modal Card -->

                                            <div class="container" style="margin-top: 10px;">
                                                <div class="row">
                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                        <!-- Modal Card -->
                                                        <div class="card" style="border: 1px solid white;">
                                                            <div class="card-body">
                                                                <!-- Tim Pemeriksa -->
                                                                <div class="tim-pemeriksa-container">
                                                                    <div class="tim-pemeriksa">
                                                                        <h6 style="font-size: 15px;">Tim Pemeriksa:</h6>
                                                                        <table class="table table-sm">
                                                                            <thead class="table-secondary">
                                                                                <tr>
                                                                                    <th style="width: 60px; font-size: 15px; text-align:center;" >No</th>
                                                                                    <th style="text-align: center; font-size: 15px; text-align:center;">Nama Pemeriksa</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">1</td>
                                                                                  <td style="font-size: 12px;">
                                                                                    <select name="tandatangan1_id" class="form-control @error('tandatangan1_id') is-invalid @enderror">
                                                                                        <option value="">-- Pilih Pemeriksa --</option>
                                                                                        @foreach ($datatandatangan as $tandatangan)
                                                                                            <option value="{{ $tandatangan->id }}"
                                                                                                {{ old('tandatangan1_id', optional($data->surattertibjakonusaha1)->tandatangan1_id) == $tandatangan->id ? 'selected' : '' }}>
                                                                                                {{ $tandatangan->namalengkap }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @error('tandatangan1_id')
                                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                                    @enderror
                                                                                </td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">2</td>
                                                                                    <td style="font-size: 12px;">
    <select name="tandatangan2_id" class="form-control @error('tandatangan2_id') is-invalid @enderror">
        <option value="">-- Pilih Pemeriksa --</option>
        @foreach ($datatandatangan as $tandatangan)
            <option value="{{ $tandatangan->id }}"
                {{ old('tandatangan2_id', optional($data->surattertibjakonusaha1)->tandatangan2_id) == $tandatangan->id ? 'selected' : '' }}>
                {{ $tandatangan->namalengkap }}
            </option>
        @endforeach
    </select>
    @error('tandatangan2_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">3</td>
                                                                                    <td style="font-size: 12px;">
    <select name="tandatangan3_id" class="form-control @error('tandatangan3_id') is-invalid @enderror">
        <option value="">-- Pilih Pemeriksa --</option>
        @foreach ($datatandatangan as $tandatangan)
            <option value="{{ $tandatangan->id }}"
                {{ old('tandatangan3_id', optional($data->surattertibjakonusaha1)->tandatangan3_id) == $tandatangan->id ? 'selected' : '' }}>
                {{ $tandatangan->namalengkap }}
            </option>
        @endforeach
    </select>
    @error('tandatangan3_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <br><br>
<!-- Tombol Submit -->
<div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
    <div class="flex justify-end">
        <button class="btn-create" type="button" onclick="openModal()">
        <!-- Ikon SVG Pensil -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
         <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
       </svg>
        <span style="font-family: 'Poppins', sans-serif;">Buat Berkas</span>
    </button>
    </div>

    <!-- Modal Konfirmasi -->
    <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
            <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                Apakah Anda ingin membuat berkas ini?
            </p>

            <!-- Checkbox Konfirmasi -->
            <p style="font-size: 14px; margin-top: 10px; text-align: left; display: flex; align-items: center;">
                <input type="checkbox" id="agreeCheckbox" onchange="toggleSubmitButton()" style="margin-right: 10px;" />
                <label for="agreeCheckbox" style="margin: 0;">
                    Data yang dibuat tidak bisa dirubah kembali, harap periksa kembali data anda!!
                </label>
            </p>

            <!-- Tombol -->
            <div style="display: flex; justify-content: center; gap: 12px;">
                <button id="confirmSubmitBtn"
                    onclick="submitForm()"
                    disabled
                    style="background-color: #DC2626; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px; cursor: not-allowed;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                    onmouseout="this.style.backgroundColor=this.disabled ? '#DC2626' : '#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">

                    <!-- Icon Forbidden Default -->
                    <svg id="submitIcon" xmlns="http://www.w3.org/2000/svg" height="16" fill="white" viewBox="0 0 512 512">
                        <path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zM256 432c-97.2 0-176-78.8-176-176 0-38.6 12.5-74.2 33.5-103L359 398.5C330.2 419.5 294.6 432 256 432zM398.5 359L153 113.5C181.8 92.5 217.4 80 256 80c97.2 0 176 78.8 176 176 0 38.6-12.5 74.2-33.5 103z"/>
                    </svg>
                    Ya
                </button>

                <!-- Tombol Batal dengan ikon X (SVG) -->
                <button type="button"
                        onclick="closeModal()"
                        style="background-color: #666363; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                        onmouseout="this.style.backgroundColor='#666363'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                        <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                    </svg>
                    Batal
                </button>

            </div>
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

function toggleSubmitButton() {
    const checkbox = document.getElementById("agreeCheckbox");
    const btn = document.getElementById("confirmSubmitBtn");
    const icon = document.getElementById("submitIcon");

    if (checkbox.checked) {
        btn.disabled = false;
        btn.style.cursor = 'pointer';
        btn.style.backgroundColor = '#10B981'; // Hijau
        // Ganti ikon ke Telegram
        icon.setAttribute("viewBox", "0 0 448 512");
        icon.innerHTML = '<path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>';
    } else {
        btn.disabled = true;
        btn.style.cursor = 'not-allowed';
        btn.style.backgroundColor = '#DC2626'; // Merah
        // Kembalikan ikon ke Forbidden
        icon.setAttribute("viewBox", "0 0 512 512");
        icon.innerHTML = '<path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zM256 432c-97.2 0-176-78.8-176-176 0-38.6 12.5-74.2 33.5-103L359 398.5C330.2 419.5 294.6 432 256 432zM398.5 359L153 113.5C181.8 92.5 217.4 80 256 80c97.2 0 176 78.8 176 176 0 38.6-12.5 74.2-33.5 103z"/>';
    }
}


function submitForm() {
    // Ambil form element
    const form = document.querySelector('form');
    // Submit form jika ditemukan
    if (form) {
        form.submit();
    }
    // Tutup modal
    closeModal();
}
</script>

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
