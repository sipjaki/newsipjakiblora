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
                        {{-- <button
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px;
                           border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                           transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16" style="margin-right: 8px;">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                    </svg>
                    {{ $jumlahpeserta }} Jumlah Peserta
                </button> --}}

                <button
                onclick="generatePDF()"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px;
                    border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                    transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                </svg>
                Download PDF
            </button>

            <script>
                async function generatePDF() {
                    const { jsPDF } = window.jspdf;

                    const doc = new jsPDF({
                        orientation: "landscape",
                        unit: "mm",
                        format: "a4"
                    });

                    doc.setFontSize(12);
                    doc.text("Daftar Peserta", 14, 14); // Judul

                    const table = document.querySelector(".zebra-table");

                    // Ambil Header
                    const headers = [...table.querySelectorAll("thead th")].map(th =>
                        th.textContent.trim()
                    );

                    // Ambil Data
                    const rows = [...table.querySelectorAll("tbody tr")].map(tr => {
                        return [...tr.querySelectorAll("td")].map(td => td.textContent.trim());
                    });

                    doc.autoTable({
                        head: [headers],
                        body: rows,
                        startY: 20,
                        tableWidth: 'auto',
                        styles: {
                            fontSize: 8,
                            cellPadding: { top: 1, bottom: 1, left: 1, right: 1 },
                            lineHeight: 1.1,
                            overflow: 'linebreak'
                        },
                        headStyles: {
                            fillColor: [55, 65, 81], // slate-700
                            textColor: [255, 255, 255],
                            halign: 'center'
                        },
                        columnStyles: {
                            0: { cellWidth: 10 },     // No
                            1: { cellWidth: 40 },     // Nama
                            2: { cellWidth: 25 },     // NIK
                            3: { cellWidth: 20 },     // Gender
                            4: { cellWidth: 30 },     // Tgl Lahir
                            5: { cellWidth: 30 },     // No Telp
                            6: { cellWidth: 35 },     // Instansi
                            7: { cellWidth: 35 },     // Sertifikat
                            8: { cellWidth: 25 },     // Verifikasi
                            9: { cellWidth: 35 },     // Upload Sertifikat
                        }
                    });

                    doc.save("daftar-peserta.pdf");
                }
            </script>


                                    <button
                        onclick="history.back()"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                        onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                        style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px;
                            border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                            transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                        </svg>
                        Kembali
                    </button>


                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">
                                            <i class="bi bi-hash" style="margin-right: 5px;"></i>No
                                        </th>
                                        <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-person-fill" style="margin-right: 5px;"></i>Nama Lengkap
                                        </th>
                                        {{-- <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-bookmark-fill" style="margin-right: 5px;"></i>Jenjang Pendidikan
                                        </th> --}}
                                        <th style="width: 100px; text-align:center;">
                                            <i class="bi bi-person" style="margin-right: 5px;"></i>Nik
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gender-ambiguous" style="margin-right: 5px;"></i>Gender
                                        </th>
                                          <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-calendar-date" style="margin-right: 5px;"></i>Tanggal Lahir
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-telephone-fill" style="margin-right: 5px;"></i>No Telepon
                                        </th>
                                        <th style="width: 100px; text-align:center;">
                                            <i class="bi bi-building" style="margin-right: 5px;"></i>Instansi
                                        </th>
                                        <th style="width: 300px; text-align:center;">
                                            <i class="bi bi-file-earmark-pdf-fill" style="margin-right: 5px;"></i>Sertifikat
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Verifikasi
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gear" style="margin-right: 5px;"></i>Upload Sertifikat
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($datapeserta as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{{ $item->namalengkap }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->jenjangpendidikan->jenjangpendidikan}}</td> --}}
                                        <td style="text-align: center;">{{ $item->nik }}</td>
                                        <td style="text-align: center;">{{ $item->jeniskelamin }}</td>
                                        <td style="text-align: center;">
                                            {{ \Carbon\Carbon::parse($item->tanggallahir)->translatedFormat('d F Y') }}
                                        </td>
                                        <td style="text-align: left;">{{ $item->notelepon }}</td>
                                        <td style="text-align: left;">{{ $item->instansi }}</td>


                                        <td style="text-align: center;">
                                            <button class="btn btn-secondary btn-sm"
                                                style="border-radius: 15px; padding: 8px 16px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                                <i class="bi bi-eye"></i> Lihat
                                            </button>

                                            <!-- Modal KTP -->
                                            <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <a href="#"><img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                            <a href="#"><img src="/assets/icon/pupr.png" alt="Logo" width="25" style="margin-right: 5px;"></a>
                                                            <span>:</span>
                                                            <h5 class="modal-title" id="modalKtpLabel{{ $item->id }}">
                                                                Sertifikat : <i class="bi bi-file-earmark-pdf-fill text-danger"></i> {{ $data->namakegiatan }}
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <div style="margin-top: 10px;">
                                                                @if($item->sertifikat && file_exists(public_path('storage/' . $item->sertifikat)))
                                                                    <iframe src="{{ asset('storage/' . $item->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @elseif($item->sertifikat)
                                                                    <iframe src="{{ asset($item->sertifikat) }}" frameborder="0" width="100%" height="300px"></iframe>
                                                                @else
                                                                    <p>Sertifikat Belum Di Upload !!</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

         <!-- Tombol Verifikasi -->
         <td style="text-align: center;">
            @if($item->verifikasi == false)
                <button type="button" onclick="openModal({{ $item->id }})"
                    class="btn btn-danger">
                    <i class="bi bi-x-circle"></i> BELUM LOLOS
                </button>
            @else
                <button type="button" disabled
                    class="btn"
                    style="
                        background-color: rgba(16, 185, 129, 0.85); /* Warna hijau dengan transparansi */
                        color: white;
                        border: none;
                        padding: 8px 16px;
                        border-radius: 8px;
                        font-weight: 600;
                        display: inline-flex;
                        align-items: center;
                        gap: 6px;
                        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                        cursor: not-allowed;
                    ">
                    <i class="bi bi-patch-check-fill" style="font-size: 1.2rem;"></i> LOLOS
                </button>
            @endif
        </td>
                                        <td style="text-align: center;">
                                            <!-- Show Icon -->
                                         {{-- <a href="/404" class="btn btn-sm btn-info me-2" title="Show">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <!-- Update Icon --> --}}
                                            <a href="/bepesertapuploadsertifikat/show/{{$item->id}}" class="btn btn-sm btn-warning me-2" title="Upload Sertifikat">
                                                <i class="bi bi-file-earmark-arrow-up"></i>
                                            </a>

                                            <!-- Delete Icon -->
                                            <!-- Tombol Delete -->
                                            {{-- <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                            <i class="bi bi-trash"></i>
                                        </a> --}}

                                        </td>

                                    </tr>
                                        @endforeach

                                </tbody>
                            </table>
<br><br>
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


      <!-- jsPDF & autoTable CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
