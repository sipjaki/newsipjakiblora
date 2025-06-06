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


                                     @if($datasurat2->id)
                                          {{-- <a href="/betertibjakonusahasurat1/update/{{$datasurat2->id}}">
                                                <button class="btn-create">
                                                    <i class="bi bi-tools icon-create"></i>
                                                    Perbaikan Data
                                                </button>
                                            </a> --}}
                                        <button onclick="printModalContent({{ $datasurat2->id }})" class="btn-create">
                                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Print
                                        </button>

                                        <button class="btn-create" onclick="downloadModalPDF({{ $datasurat2->id }})">
                                            <i class="bi bi-file-earmark-arrow-down icon-create"></i>
                                            Download
                                        </button>

                                        <button class="btn-create"
                                            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $datasurat2->id }}">
                                            <i class="bi bi-file-earmark-text icon-create"></i>
                                            Lihat Berkas
                                        </button>
                                    @endif

                                <div class="modal fade" id="modalKtp{{ $datasurat2->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $datasurat2->id }}" aria-hidden="true">
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
                                                <h5 style="font-size: 1rem;">Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Kesesuaian Bentuk dan Kualifikasi Usaha dengan Kegiatan Usaha Jasa Konstruksi dan Segmentasi Pasar Jasa Konstruksi Secara Rutin</h5>
                                                <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $datasurat2->namabadanusaha ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 300px;"><strong>Status Perizinan Berusaha</strong></td>
                                                        <td>{{ $datasurat2->statusperizinan ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>No NIB</strong></td>
                                                        <td>{{ $datasurat2->nib ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                        <td>
                                                            @if ($datasurat2 && $datasurat2->waktupengawasan && $datasurat2->waktupengawasanselesai)
                                                                {{ \Carbon\Carbon::parse($datasurat2->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                –
                                                                {{ \Carbon\Carbon::parse($datasurat2->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                            @else
                                                                <span class="text-muted">Belum Di Buat</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </table>

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
                                                            <td style="border: 1px solid #000; text-align: center; height:100px;">1</td>
                                                            <td style="border: 1px solid #000; padding: 0 8px;">{{$datasurat2->namapaketpekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->bentuk ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->kesesuaiansbu ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->syaratkualifikasi ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->sbu ?? 'Data Belum Di Buat '}}</td>
                                                            {{-- <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->subklasifikasi}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianklasifikasi}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->layananusaha}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianlayananusaha}}</td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="container" style="margin-top: -30px;">
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
        <td style="font-size: 12px; text-align: center;">1</td>
        <td style="font-size: 12px;">
            {{ $datasurat2->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}
        </td>
        <td style="font-size: 12px;">
            <div style="margin-top: 10px;">
                @if(!empty($datasurat2->tandatangan1->tandatangan) && file_exists(public_path('storage/' . $datasurat2->tandatangan1->tandatangan)))
                    <img src="{{ asset('storage/' . $datasurat2->tandatangan1->tandatangan) }}"
                        alt="Tanda Tangan 1"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @elseif(!empty($datasurat2->tandatangan1->tandatangan))
                    <img src="{{ asset($datasurat2->tandatangan1->tandatangan) }}"
                        alt="Tanda Tangan 1"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </td>
    </tr>

    <tr>
        <td style="font-size: 12px; text-align: center;">2</td>
        <td style="font-size: 12px;">
            {{ $datasurat2->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}
        </td>
        <td style="font-size: 12px;">
            <div style="margin-top: 10px;">
                @if(!empty($datasurat2->tandatangan2->tandatangan) && file_exists(public_path('storage/' . $datasurat2->tandatangan2->tandatangan)))
                    <img src="{{ asset('storage/' . $datasurat2->tandatangan2->tandatangan) }}"
                        alt="Tanda Tangan 2"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @elseif(!empty($datasurat2->tandatangan2->tandatangan))
                    <img src="{{ asset($datasurat2->tandatangan2->tandatangan) }}"
                        alt="Tanda Tangan 2"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
        </td>
    </tr>

    <tr>
        <td style="font-size: 12px; text-align: center;">3</td>
        <td style="font-size: 12px;">
            {{ $datasurat2->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa' }}
        </td>
        <td style="font-size: 12px;">
            <div style="margin-top: 10px;">
                @if(!empty($datasurat2->tandatangan3->tandatangan) && file_exists(public_path('storage/' . $datasurat2->tandatangan3->tandatangan)))
                    <img src="{{ asset('storage/' . $datasurat2->tandatangan3->tandatangan) }}"
                        alt="Tanda Tangan 3"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @elseif(!empty($datasurat2->tandatangan3->tandatangan))
                    <img src="{{ asset($datasurat2->tandatangan3->tandatangan) }}"
                        alt="Tanda Tangan 3"
                        style="width: 120px; height: 60px; object-fit: contain; border: 1px solid #ddd; border-radius: 4px;"
                        loading="lazy">
                @else
                    <p>Data belum diupdate</p>
                @endif
            </div>
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                                </div>


                                <!-- Kontainer Kanan -->
                                <div>
                                    <a href="javascript:history.back()" class="btn-kembali" style="text-decoration: none;">
                                            <i class="bi bi-arrow-left icon-create" style="margin-right: 8px;"></i>
                                            Kembali
                                        </a>
                                </div>
                            </div>

                        </div>

        <hr>
     <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 50%; margin: auto; font-family: Arial, sans-serif;">
  <thead>
    <tr>
      <th colspan="8" style="text-align: center; border-bottom: 4px solid black; font-weight: bold;">
        Kesesuaian Jasa Konstruksi & Segmentasi Pasar
      </th>
    </tr>
  </thead>
<tbody>
    <tr>
        <td colspan="2" style="text-align: center; color: navy;">
            <i class="bi bi-check2-square"></i> Kesesuaian Bentuk SBU
        </td>
        <td colspan="2" style="text-align: center; color: navy;">
            <i class="bi bi-diagram-3"></i> Kesesuaian Layanan SBU
        </td>
</tr>

<tr>
    @php
        $kesesuaian = $datasurat2->kesesuaiansbu ?? 'Surat Belum Di Buat';
        $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
        $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
        $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
    @endphp

    <td colspan="2" style="text-align: center;">
        <button
            style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
        >
            <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
            {{ $tertibStatus }}
        </button>
    </td>

@php
        $kesesuaian = $datasurat2->sbu ?? 'Surat Belum Di Buat';
        $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
        $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
        $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
    @endphp

    <td colspan="2" style="text-align: center;">
        <button
            style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
        >
            <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
            {{ $tertibStatus }}
        </button>
    </td>


</tr>

</tbody>
</table>
<br>
<hr>

        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->

                        {{-- <form action="{{ route('betertibjakonusahasurat1create') }}" method="POST" enctype="multipart/form-data">
                            @csrf --}}

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
                                        <h5 style="font-size: 15px;">Surat Dukung Tertib Jakon Usaha : Pengawasan Terhadap Kesesuaian Bentuk dan Kualifikasi Usaha dengan Kegiatan Usaha Jasa Konstruksi dan Segmentasi Pasar Jasa Konstruksi Secara Rutin </h5>
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
                                                        value="{{ old('namabadanusaha', $datasurat2->namabadanusaha ?? '') }}" readonly>

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
                                                @php
                                                    $status = $datasurat2->statusperizinan ?? null;
                                                @endphp

                                                @if ($status === 'Terverifikasi')
                                                    <span class="badge bg-success" style="font-size:16px;">Terverifikasi</span>
                                                @elseif ($status === 'Tidak Terdaftar')
                                                    <span class="badge bg-danger" style="font-size:16px;">Tidak Terdaftar</span>
                                                @elseif ($status === 'Belum Terdaftar')
                                                    <span class="badge bg-warning text-dark" style="font-size:16px;">Belum Terdaftar</span>
                                                @else
                                                    <span class="badge bg-secondary" style="font-size:16px;">-</span>
                                                @endif
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
                                                        value="{{ old('nib', $datasurat2->nib ?? '') }}" readonly>
                                                    @error('nib')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 200px;">
                                                    <strong style="font-size: 15px;">Waktu Pengawasan</strong>
                                                </td>
                                              <td class="d-flex align-items-center gap-2" style="font-size: 16px; white-space: nowrap;">
                                                @php
                                                    $mulai = ($datasurat2 && $datasurat2->waktupengawasan)
                                                        ? \Carbon\Carbon::parse($datasurat2->waktupengawasan)->translatedFormat('d F Y')
                                                        : '-';

                                                    $selesai = ($datasurat2 && $datasurat2->waktupengawasanselesai)
                                                        ? \Carbon\Carbon::parse($datasurat2->waktupengawasanselesai)->translatedFormat('d F Y')
                                                        : '-';
                                                @endphp

                                                    <span class="badge bg-primary py-1 px-2" title="Tanggal Mulai Pengawasan" style="font-weight: 500; font-size: 16px;">
                                                        {{ $mulai }}
                                                    </span>

                                                    <span style="font-weight: 600; color: #555; font-size: 16px;">&rarr;</span>

                                                    <span class="badge bg-secondary py-1 px-2" title="Tanggal Selesai Pengawasan" style="font-weight: 500; font-size: 16px;">
                                                        {{ $selesai }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>

                                        <table style="width: 100%; border-collapse: collapse; font-size: 16px; color: #000;">
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
                                                                <div style="font-size: 16px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Kualifikasi</div>
                                                                <div style="font-size: 16px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>
>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #000; text-align: center; height:100px;">1</td>
                                                            <td style="border: 1px solid #000; padding: 0 8px;">{{$datasurat2->namapaketpekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->bentuk ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->kesesuaiansbu ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->syaratkualifikasi ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$datasurat2->sbu ?? 'Data Belum Di Buat '}}</td>
                                                            {{-- <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->subklasifikasi}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianklasifikasi}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->layananusaha}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianlayananusaha}}</td> --}}
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
                                                                                    <td style="font-size: 16px;">
                                                                                        {{ optional($datasurat2->tandatangan1)->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">2</td>
                                                                                      <td style="font-size: 16px;">
                                                                                        {{ optional($datasurat2->tandatangan2)->namalengkap ?? 'Belum Di Tanda Tangan' }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="font-size: 12px; text-align:center;">3</td>
                                                                                    <td style="font-size: 16px;">
                                                                                        {{ optional($datasurat2->tandatangan3)->namalengkap ?? 'Belum Di Tanda Tangan' }}
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


<!-- CDN html2pdf -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function downloadModalPDF(id) {
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);

        if (!modalContent) {
            alert('Konten modal tidak ditemukan.');
            return;
        }

        // Kloning isi modal
        const clone = modalContent.cloneNode(true);

        // Bungkus dalam div agar lebih fleksibel stylingnya
        const wrapper = document.createElement('div');
        wrapper.style.padding = '20px';
        wrapper.style.fontSize = '14px';
        wrapper.style.display = 'block';
        wrapper.style.margin = '0'; // reset margin
        wrapper.style.textAlign = 'left';
        wrapper.style.alignItems = 'flex-start'; // kalau pakai flex di dalam
        wrapper.appendChild(clone);

        const fileName = `Tertibjakonusaha_segmentasipasar_${id}.pdf`;

        html2pdf()
            .from(wrapper)
            .set({
                margin: 0.5,
                filename: fileName,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
            })
            .save();
    }
</script>


                                        <script>
                                            function printModalContent(id) {
                                                const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
                                                if (!modalContent) {
                                                    alert("Konten tidak ditemukan.");
                                                    return;
                                                }

                                                const printWindow = window.open('', '', 'width=1200,height=800');
                                                printWindow.document.write(`
                                                    <html>
                                                    <head>
                                                        <title>Print Dokumen</title>
                                                        <style>
                                                            @media print {
                                                                @page {
                                                                    size: A4 landscape;
                                                                    margin: 0mm;
                                                                }
                                                                body {
                                                                    font-family: Arial, sans-serif;
                                                                    font-size: 12px;
                                                                    color: #000;
                                                                }
                                                                table {
                                                                    border-collapse: collapse;
                                                                    width: 100%;
                                                                    page-break-inside: auto;
                                                                }
                                                                th, td {
                                                                    border: 1px solid #000;
                                                                    padding: 4px;
                                                                    vertical-align: top;
                                                                }
                                                                .no-border td {
                                                                    border: none;
                                                                }
                                                            }

                                                            body {
                                                                margin: 10mm;
                                                                font-family: Arial, sans-serif;
                                                                font-size: 12px;
                                                            }

                                                            h5 {
                                                                font-size: 1rem;
                                                                margin-bottom: 10px;
                                                            }

                                                            .table-bordered {
                                                                border: 1px solid #000;
                                                                width: 100%;
                                                                margin-top: 10px;
                                                            }

                                                            .table-bordered th, .table-bordered td {
                                                                border: 1px solid #000;
                                                                padding: 6px;
                                                                text-align: left;
                                                            }

                                                            .table-secondary {
                                                                background-color: #f8f9fa;
                                                            }

                                                            /* Penyesuaian khusus untuk bagian tim pemeriksa */
                                                            .tim-pemeriksa-container {
                                                                display: flex;
                                                                justify-content: flex-end;
                                                            }

                                                            .tim-pemeriksa {
                                                                width: 50%;
                                                            }

                                                            .tim-pemeriksa table {
                                                                width: 100%;
                                                                border: 1px solid #000;
                                                            }

                                                            .tim-pemeriksa td, .tim-pemeriksa th {
                                                                text-align: center;
                                                                padding: 3px;
                                                                height: 15px;
                                                                font-size: 11px;
                                                            }
                                                        </style>
                                                    </head>
                                                    <body>
                                                        ${modalContent.innerHTML}
                                                        <script>
                                                            window.onload = function() {
                                                                window.print();
                                                                window.onafterprint = window.close;
                                                            }
                                                        <\/script>
                                                    </body>
                                                    </html>
                                                `);
                                                printWindow.document.close();
                                            }
                                        </script>
