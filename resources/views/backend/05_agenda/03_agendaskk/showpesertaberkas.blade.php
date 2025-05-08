<style>
    .btn-suspend {
        background-color: orange;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-suspend:hover {
        background-color: white;
        color: black;
        border: 1px solid orange;
    }

    .btn-expired {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-expired:hover {
        background-color: white;
        color: black;
        border: 1px solid red;
    }

    .btn-active {
        background-color: green;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn-active:hover {
        background-color: white;
        color: black;
        border: 1px solid green;
    }
</style>

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
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.14_judulshow')
                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <button
                    onclick="window.history.back();"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                    style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">

                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    Kembali
                </button>

                <button
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#0044b1'; this.style.color='white';"
                style="background-color: #0044b1; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s;">

                <!-- Ikon Arah Kiri -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                viewBox="0 0 16 16" style="margin-right: 8px;">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd"
                    d="M14 14s-1-1.5-6-1.5S2 14 2 14s1-4 6-4 6 4 6 4z"/>
            </svg>
                {{ $data->user->name }}
            </button>

                     {{-- <a href="/beagendapelatihanmateri/createmateri/{{$datapeserta->id}}">
                        <button
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#166534'; this.style.color='white';"
                         style="background-color: #166534; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                         <!-- Ikon Kembali -->
                         <i class="fa fa-plus" style="margin-right: 8px;"></i>
                         Create
                     </button>
                     </a> --}}
                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th style="width: 25px; text-align:center;"><i class="bi bi-hash"></i> No</th> --}}
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Foto KTP </th>
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Pas Foto 3 x 4 </th>
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Ijazah </th>
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Pengalaman  </th>
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Surat Kebenaran Data  </th>
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> NPWP </th>
                                        {{-- <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Surat Kebenaran Data</th> --}}
                                        <th style="width: 400px; text-align:center;"><i class="bi bi-file-earmark-text-fill"></i> Riwayat Hidup </th>
                                        <th style="width: 100px; text-align:center;"><i class="bi bi-gear-fill"></i> Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach ($subdata as $datapeserta ) --}}
                                    <tr class="align-middle">
                                        {{-- <td style="text-align: center;">{{ $loop->iteration }}</td> --}}

                                        <td class="text-center">
                                            <button class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalKTP{{ $datapeserta->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal KTP -->
                                            <div class="modal fade" id="modalKTP{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalKTPLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalKTPLbl{{ $datapeserta->id }}">Dokumen KTP</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            @if($datapeserta->uploadktp && file_exists(public_path('storage/' . $datapeserta->uploadktp)))
                                                                <img src="{{ asset('storage/' . $datapeserta->uploadktp) }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset('storage/' . $datapeserta->uploadktp) }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                            @elseif($datapeserta->uploadktp)
                                                                <img src="{{ asset($datapeserta->uploadktp) }}" alt="KTP" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset($datapeserta->uploadktp) }}" class="btn btn-primary mt-2" download>Download KTP</a>
                                                            @else
                                                                <p>Data belum diupdate</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalFoto{{ $datapeserta->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal Foto -->
                                            <div class="modal fade" id="modalFoto{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalFotoLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalFotoLbl{{ $datapeserta->id }}">Dokumen Foto</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            @if($datapeserta->uploadfoto && file_exists(public_path('storage/' . $datapeserta->uploadfoto)))
                                                                <img src="{{ asset('storage/' . $datapeserta->uploadfoto) }}" alt="Foto" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset('storage/' . $datapeserta->uploadfoto) }}" class="btn btn-primary mt-2" download>Download Foto</a>
                                                            @elseif($datapeserta->uploadfoto)
                                                                <img src="{{ asset($datapeserta->uploadfoto) }}" alt="Foto" style="max-width:100%; max-height:500px;">
                                                                <a href="{{ asset($datapeserta->uploadfoto) }}" class="btn btn-primary mt-2" download>Download Foto</a>
                                                            @else
                                                                <p>Data belum diupdate</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>


                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalIjazah{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Ijazah -->
                                                <div class="modal fade" id="modalIjazah{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalIjazahLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalIjazahLbl{{ $datapeserta->id }}">Dokumen Ijazah</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadijazah && file_exists(public_path('storage/' . $datapeserta->uploadijazah)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadijazah) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadijazah)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadijazah) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>


                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalPengalaman{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Pengalaman Kerja -->
                                                <div class="modal fade" id="modalPengalaman{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalPengalamanLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalPengalamanLbl{{ $datapeserta->id }}">Dokumen Pengalaman Kerja</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadpengalaman && file_exists(public_path('storage/' . $datapeserta->uploadpengalaman)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadpengalaman) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadpengalaman)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadpengalaman) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>


                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalKebenaranData{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Pernyataan Kebenaran Data -->
                                                <div class="modal fade" id="modalKebenaranData{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalKebenaranDataLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalKebenaranDataLbl{{ $datapeserta->id }}">Dokumen Pernyataan Kebenaran Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    @if($datapeserta->uploadkebenarandata && file_exists(public_path('storage/' . $datapeserta->uploadkebenarandata)))
                                                                    <!-- Display the default iframe when the file exists in the storage -->
                                                                    <iframe src="{{ asset('storage/' . $datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($datapeserta->uploadkebenarandata)
                                                                    <!-- Display the iframe with the updated file -->
                                                                    <iframe src="{{ asset($datapeserta->uploadkebenarandata) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <!-- Optional: Show a placeholder if there's no file available -->
                                                                    <p>Data belum diupdate</p>
                                                                @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <div class="modal fade" id="modalUploadNPWP{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalUploadNPWPLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                            <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                            <h5 class="modal-title" id="modalUploadNPWPLbl{{ $datapeserta->id }}">Dokumen NPWP</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <div style="margin-top: 10px;">
                                                                @if($datapeserta->uploadnpwp && file_exists(public_path('storage/' . $datapeserta->uploadnpwp)))
                                                                    <!-- Tampilkan gambar jika file NPWP ada -->
                                                                    <img src="{{ asset('storage/' . $datapeserta->uploadnpwp) }}" alt="NPWP" style="max-width: 100%; max-height: 500px;">
                                                                @elseif($datapeserta->uploadnpwp)
                                                                    <!-- Tampilkan gambar jika file NPWP ada -->
                                                                    <img src="{{ asset($datapeserta->uploadnpwp) }}" alt="NPWP" style="max-width: 100%; max-height: 500px;">
                                                                @else
                                                                    <!-- Jika tidak ada file NPWP -->
                                                                    <p>Data NPWP belum diupdate</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <td class="text-center">
                                                <button class="btn btn-secondary btn-sm"
                                                    style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                    data-bs-toggle="modal" data-bs-target="#modalDaftarRiwayatHidup{{ $datapeserta->id }}">
                                                    <i class="bi bi-eye"></i> Lihat
                                                </button>

                                                <!-- Modal Riwayat Hidup -->
                                                <div class="modal fade" id="modalDaftarRiwayatHidup{{ $datapeserta->id }}" tabindex="-1" aria-labelledby="modalDaftarRiwayatHidupLbl{{ $datapeserta->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <img src="/assets/icon/logokabupatenblora.png" width="25" class="me-2">
                                                                <img src="/assets/icon/pupr.png" width="25" class="me-2">
                                                                <h5 class="modal-title" id="modalDaftarRiwayatHidupLbl{{ $datapeserta->id }}">Dokumen Riwayat Hidup</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <div style="margin-top: 10px;">
                                                                    <!-- Menampilkan uploaddaftarriwayathidup dengan iframe -->
                                                                    @if($datapeserta->uploaddaftarriwayathidup && file_exists(public_path('storage/' . $datapeserta->uploaddaftarriwayathidup)))
                                                                        <iframe src="{{ asset('storage/' . $datapeserta->uploaddaftarriwayathidup) }}" frameborder="0" width="100%" height="500px"></iframe>
                                                                    @elseif($datapeserta->uploaddaftarriwayathidup)
                                                                        <iframe src="{{ asset($datapeserta->uploaddaftarriwayathidup) }}" frameborder="0" width="100%" height="500px"></iframe>
                                                                    @else
                                                                        <p>Data Riwayat Hidup belum diupdate</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>


                                                       <td style="text-align: center;">
                                            <!-- Show Icon -->
                                         {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Update Icon --> --}}
                                            {{-- <a href="/404" class="btn btn-sm btn-warning me-2" title="Update">
                                                <i class="bi bi-pencil-square"></i>
                                            </a> --}}
                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-id="{{ $datapeserta->id }}" onclick="setDeleteUrl(this)">
                                             <i class="bi bi-trash"></i>
                                         </a>

                                         <!-- Modal -->
                                         <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                                         <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                     </div>
                                                     <div class="modal-body">
                                                         <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                         <form id="deleteForm" method="POST" action="">
                                                             @csrf
                                                             @method('DELETE')
                                                             <button type="submit" class="btn btn-danger">Hapus</button>
                                                         </form>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <!-- Script untuk set action form -->
                                         <script>
                                         function setDeleteUrl(button) {
                                             var id = button.getAttribute('data-id');
                                             var deleteUrl = "{{ route('beagendapelatihanmateridelete', ':id') }}";
                                             deleteUrl = deleteUrl.replace(':id', encodeURIComponent(id));

                                             document.getElementById('deleteForm').action = deleteUrl;
                                         }
                                         </script>

                                            <style>
                                                /* Hover effect */
                                                .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
                                                    background-color: #fff !important; /* Keep the background white on hover */
                                                    color: black !important; /* Change text color to black on hover */
                                                }

                                                 .btn-info:hover i, .btn-warning:hover i, .btn-danger:hover i {
                                                    color: black !important; /* Ensure the icon color changes to black */
                                                }
                                            </style>
                                        </td>

                                    </tr>
                                        {{-- @endforeach --}}

                                </tbody>
                            </table>
                            <br><br><br>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
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

      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date(); // Dapatkan tanggal hari ini
            const masaBerlakuElements = document.querySelectorAll('.masa-berlaku'); // Pilih semua td yang memiliki kelas masa-berlaku

            masaBerlakuElements.forEach(function (element) {
                const masaBerlaku = element.getAttribute('data-masaberlaku'); // Ambil data masa berlaku
                const button = element.querySelector('.btn-masa-berlaku'); // Ambil tombol di dalam td

                // Cek jika masa berlaku kosong
                if (!masaBerlaku || masaBerlaku === '') {
                    button.classList.add('btn-suspend'); // Tambahkan class untuk suspend
                    button.textContent = 'SUSPEND';
                } else {
                    const masaBerlakuDate = new Date(masaBerlaku); // Jika ada, ubah menjadi tanggal

                    // Cek jika masa berlaku sudah lewat
                    if (masaBerlakuDate < today) {
                        button.classList.add('btn-expired'); // Warna merah jika tidak berlaku
                        button.textContent = 'TIDAK BERLAKU';
                    } else {
                        button.classList.add('btn-active'); // Warna hijau jika masih berlaku
                        button.textContent = 'BERLAKU';
                    }
                }
            });
        });
    </script>
