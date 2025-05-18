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


        <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
            </select>
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>


                        <button
                        onclick="exportTableToExcel('daftarpesertaskk', 'Data Peserta {{$data->namakegiatan}}')"
                        onmouseover="this.style.background='white'; this.style.color='black'; this.style.border='1px solid #ccc';"
                        onmouseout="this.style.background='linear-gradient(135deg, #2e7d32, #d4af37)'; this.style.color='white'; this.style.border='none';"
                        style="background: linear-gradient(135deg, #2e7d32, #d4af37); color: white; border: none; padding: 10px 20px;
                               border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                               transition: background 0.3s, color 0.3s, border 0.3s; margin-right:10px;">
                        <i class="bi bi-file-earmark-excel-fill" style="margin-right: 8px; font-size: 16px;"></i> Download Excel
                    </button>

                    <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);

        // Mengambil semua baris data
        var rows = table.querySelectorAll('tr');

        // Mengubah tabel menjadi array dan menangani angka panjang
        var data = [];
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td, th');
            var rowData = [];

            cells.forEach(function(cell) {
                let cellValue = cell.innerText;

                // Cek apakah nilai cell berupa angka panjang (NIK, nomor telepon)
                // dan formatnya agar Excel tidak merubah menjadi format ilmiah
                if (/^\d{12,}$/.test(cellValue)) {
                    // Tambahkan tanda petik satu agar Excel mengenali sebagai string
                    cellValue = "'" + cellValue;
                }

                rowData.push(cellValue);
            });

            // Push data baris ke array data
            data.push(rowData);
        });

        // Buat worksheet dari data
        var ws = XLSX.utils.aoa_to_sheet(data);
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, "Sheet 1");

        // Ekspor file Excel
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
</script>

<button
    onclick="generatePDF()"
    onmouseover="this.style.background = 'white'; this.style.color = 'black'; this.style.border = '1px solid #ccc';"
    onmouseout="this.style.background = 'linear-gradient(135deg, #2e7d32, #d4af37)'; this.style.color = 'white'; this.style.border = 'none';"
    style="background: linear-gradient(135deg, #2e7d32, #d4af37); color: white; border: none; margin-right: 10px; padding: 10px 20px;
           border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
           transition: background 0.3s, color 0.3s, border 0.3s; text-decoration: none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        viewBox="0 0 16 16" style="margin-right: 8px;">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5V14a1 1 0 0 0 1 1h12a1
                 1 0 0 0 1-1V10.4a.5.5 0 0 1 1 0V14a2 2 0 0 1-2
                 2H2a2 2 0 0 1-2-2v-3.6a.5.5 0 0 1 .5-.5z"/>
        <path d="M7.646 10.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0
                 0-.708-.708L8.5 9.293V1.5a.5.5 0 0 0-1
                 0v7.793L5.354 7.146a.5.5 0 1 0-.708.708l3
                 3z"/>
    </svg>
    Download PDF
</button>



            {{-- Inject variabel Blade ke JavaScript --}}
<script>
    const namaKegiatan = @json($data->namakegiatan);
</script>

<script>
    async function generatePDF() {
        const { jsPDF } = window.jspdf;

        const doc = new jsPDF({
            orientation: "landscape",
            unit: "mm",
            format: "a4"
        });

        // Tambah logo
        const logo1 = await loadImage("/assets/icon/logokabupatenblora.png");
        const logo2 = await loadImage("/assets/icon/pupr.png");

        doc.addImage(logo1, "PNG", 10, 5, 20, 20);    // Kiri
        doc.addImage(logo2, "PNG", 270, 5, 20, 20);   // Kanan

        // Subjudul di tengah
        doc.setFontSize(12);
        doc.setFont("helvetica", "normal");
        doc.text("Daftar Peserta Pelatihan : " + namaKegiatan, 148.5, 22, { align: "center" });

        // Ambil data tabel dari DOM
        const table = document.querySelector(".zebra-table");

        const headers = [...table.querySelectorAll("thead th")].map(th =>
            th.textContent.trim().replace(/\s+/g, " ")
        );

        const rows = [...table.querySelectorAll("tbody tr")].map(tr =>
            [...tr.querySelectorAll("td")].map(td =>
                td.textContent.trim().replace(/\s+/g, " ")
            )
        );

        doc.autoTable({
            head: [headers],
            body: rows,
            startY: 30,
            styles: {
                fontSize: 8,
                cellPadding: 1,
                overflow: 'linebreak',
                valign: 'middle'
            },
            headStyles: {
                fillColor: [55, 65, 81],
                textColor: [255, 255, 255],
                fontSize: 8,
                halign: 'center'
            },
            columnStyles: {
                0: { cellWidth: 10 },   // No
                1: { cellWidth: 35 },   // Nama
                2: { cellWidth: 30 },   // NIK
                3: { cellWidth: 20 },   // Gender
                4: { cellWidth: 28 },   // Tgl Lahir
                5: { cellWidth: 28 },   // No Telp
                6: { cellWidth: 30 },   // Instansi
                7: { cellWidth: 30 },   // Sertifikat
                8: { cellWidth: 25 },   // Verifikasi
                // 9: { cellWidth: 30 }    // Upload
            },
            theme: 'grid'
        });

        doc.save("Daftar_Peserta_Pelatihan.pdf");
    }

    // Fungsi bantu load image
    function loadImage(url) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.crossOrigin = "Anonymous";
            img.onload = () => {
                const canvas = document.createElement("canvas");
                canvas.width = img.width;
                canvas.height = img.height;
                canvas.getContext("2d").drawImage(img, 0, 0);
                resolve(canvas.toDataURL("image/png"));
            };
            img.onerror = reject;
            img.src = url;
        });
    }
</script>



                    <a href="/beagendaskkdatapeserta">
    <button
        onclick="history.back()"
        onmouseover="this.style.background = 'white'; this.style.color = 'black'; this.style.border = '1px solid #ccc';"
        onmouseout="this.style.background = 'linear-gradient(to right, black, white)'; this.style.color = 'black'; this.style.border = 'none';"
        style="background: linear-gradient(to right, black, white); color: black; border: none; margin-right: 10px; padding: 10px 20px;
               border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
               transition: background 0.3s, color 0.3s, border 0.3s; text-decoration: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             viewBox="0 0 16 16" style="margin-right: 8px;">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
        </svg>
        Kembali
    </button>
</a>

                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table id="daftarpesertaskk" class="zebra-table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px; text-align:center;">
                                            <i class="bi bi-hash" style="margin-right: 5px;"></i>No
                                        </th>
                                        <th style="width: 250px; text-align:center;">
                                            <i class="bi bi-person-fill" style="margin-right: 5px;"></i>Nama Lengkap
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-journal-bookmark-fill" style="margin-right: 5px;"></i>Pendidikan
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-briefcase-fill" style="margin-right: 5px;"></i>Jabatan Kerja
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-building" style="margin-right: 5px;"></i>Universitas/Sekolah/Instansi
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-calendar3" style="margin-right: 5px;"></i>Tahun Bimtek
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-credit-card-2-front" style="margin-right: 5px;"></i>NIK
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-geo-alt-fill" style="margin-right: 5px;"></i>Tempat Lahir
                                        </th>
                                        <th style="width: 250px; text-align:center;">
                                            <i class="bi bi-calendar-date" style="margin-right: 5px;"></i>Tanggal Lahir
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gender-ambiguous" style="margin-right: 5px;"></i>Jenis Kelamin
                                        </th>
                                        <th style="width: 250px; text-align:center;">
                                            <i class="bi bi-house-door-fill" style="margin-right: 5px;"></i>Alamat
                                        </th>
                                        <th style="width: 250px; text-align:center;">
                                            <i class="bi bi-telephone-fill" style="margin-right: 5px;"></i>No Telepon
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-envelope-at-fill" style="margin-right: 5px;"></i>Email
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-calendar-check-fill" style="margin-right: 5px;"></i>Tahun Lulus
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-people-fill" style="margin-right: 5px;"></i>Utusan
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i>Punya SKK
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-patch-check" style="margin-right: 5px;"></i>Punya SIKI
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-globe2" style="margin-right: 5px;"></i>Portal PUPR
                                        </th>
                                        <th style="width: 150px; text-align:center;">
                                            <i class="bi bi-shield-lock-fill" style="margin-right: 5px;"></i>Siap Patuh
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-folder-check" style="margin-right: 5px;"></i> Berkas Pekerja
                                        </th>

                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Sertifikat
                                        </th>

                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Verifikasi DPUPR
                                        </th>

                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Verifikasi LSP
                                        </th>

                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Hadir
                                        </th>

                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-patch-check-fill" style="margin-right: 5px;"></i> Terbitkan Sertifikat
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($datapeserta as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: left;">{{ $item->user->name ?? '-' }}</td>
<td style="text-align: center;">{{ $item->jenjangpendidikan->jenjangpendidikan ?? '-' }}</td>
<td style="text-align: center;">{{ $item->jabatankerja->jabatankerja ?? '-' }}</td>
<td style="text-align: center;">{{ $item->namasekolah->namasekolah ?? '-' }}</td>
<td style="text-align: center;">{{ $item->tahunpilihan->tahunpilihan ?? '-' }}</td>
<td style="text-align: center;">{{ $item->nik ?? '-' }}</td>
<td style="text-align: center;">{{ $item->tempatlahir ?? '-' }}</td>
<td style="text-align: center;">{{ $item->ttl ? \Carbon\Carbon::parse($item->ttl)->format('d-m-Y') : '-' }}</td>
<td style="text-align: center;">{{ $item->jeniskelamin ?? '-' }}</td>
<td style="text-align: center;">{{ $item->alamat ?? '-' }}</td>
<td style="text-align: center;">{{ $item->notelepon ?? '-' }}</td>
<td style="text-align: center;">{{ $item->email ?? '-' }}</td>
<td style="text-align: center;">{{ $item->tahunlulus ?? '-' }}</td>
<td style="text-align: center;">{{ $item->namaasosiasi ?? '-' }}</td>
<td style="text-align: center;">{{ $item->punyaskk ?? '-' }}</td>
<td style="text-align: center;">{{ $item->punyasiki ?? '-' }}</td>
<td style="text-align: center;">{{ $item->portalpupr ?? '-' }}</td>
<td style="text-align: center;">{{ $item->siappatuh ?? '-' }}</td>


<td style="text-align: center; vertical-align: middle; width: 100%; display: flex; justify-content: center; align-items: center;">
    <a href="{{ url('/bepesertaskkshowberkas/show/' . $item->id) }}" style="text-decoration: none;">
        <button
            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
            onmouseout="this.style.backgroundColor='#6B7280'; this.style.color='white';"
            style="background-color:#6B7280; color: white; border: none; padding: 10px 25px;
                   border-radius: 15px; font-size: 14px; cursor: pointer;
                   display: flex; align-items: center; justify-content: center;
                   transition: background-color 0.3s, color 0.3s;">
            <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
        </button>
    </a>
</td>


                                        <td style="text-align: center;">
                                            <button
                                            style="background-color:#6B7280; color: white; border: none; padding: 10px 25px;
                                                   border-radius: 15px; font-size: 14px; cursor: pointer;
                                                   display: flex; align-items: center; justify-content: center;
                                                   transition: background-color 0.3s, color 0.3s;"
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                            onmouseout="this.style.backgroundColor='#6B7280'; this.style.color='white';"
                                            data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                            <i class="bi bi-eye-fill" style="margin-right: 5px;"></i> Lihat
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
            @if($item->verifikasipu == false)
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
            @if($item->verifikasilps == false)
                <button type="button" onclick="openKehadiranModal({{ $item->id }})" class="btn btn-danger">
                    <i class="bi bi-x-circle"></i> Belum Di Verifikasi
                </button>
            @else
                <button type="button" disabled class="btn"
                    style="background-color: rgba(16, 185, 129, 0.85); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); cursor: not-allowed;">
                    <i class="bi bi-patch-check-fill" style="font-size: 1.2rem;"></i> LOLOS
                </button>
            @endif
        </td>

        <!-- Modal -->
        <div id="kehadiranModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                    Apakah Peserta Sudah Bisa Dinyatakan Lolos oleh LSP?
                </p>

                <!-- Form Verifikasi -->
                <form id="kehadiranForm" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit"
                        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('i').style.color='white';">
                        <i class="bi bi-check-circle" style="margin-right: 6px; color: white;"></i> Ya, Hadir
                    </button>
                </form>

                <!-- Tombol Batal -->
                <button type="button"
                    onclick="closeKehadiranModal()"
                    style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s; margin-left: 10px;"
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                    onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('i').style.color='white';">
                    <i class="bi bi-x-circle" style="margin-right: 6px; color: white;"></i> Batal
                </button>
            </div>
        </div>

        <script>
            function openKehadiranModal(itemId) {
                const form = document.getElementById("kehadiranForm");
                form.action = `/verifikasikehadiranlsp/${itemId}`;
                document.getElementById("kehadiranModal").style.display = "flex";
            }

            function closeKehadiranModal() {
                document.getElementById("kehadiranModal").style.display = "none";
            }
        </script>


<td style="text-align: center;">
    @if($item->verifikasihadirsertifikasi == false)
        <button type="button" onclick="openModalVerifikasiHadirLSP({{ $item->id }})" class="btn btn-danger">
            <i class="bi bi-x-circle"></i> Belum Diverifikasi
        </button>
    @else
        <button type="button" disabled class="btn"
            style="background-color: rgba(16, 185, 129, 0.85); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); cursor: not-allowed;">
            <i class="bi bi-patch-check-fill" style="font-size: 1.2rem;"></i> LOLOS
        </button>
    @endif
</td>

<!-- Modal Unik untuk Verifikasi Hadir Sertifikasi -->
<div id="modalVerifikasiHadirLSP" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
        <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
            Apakah Peserta Sudah Bisa Dinyatakan Lolos oleh LSP?
        </p>

        <!-- Form Verifikasi -->
        <form id="formVerifikasiHadirLSP" method="POST" class="d-inline">
            @csrf
            @method('PUT')
            <button type="submit"
                style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('i').style.color='white';">
                <i class="bi bi-check-circle" style="margin-right: 6px; color: white;"></i> Ya, Hadir
            </button>
        </form>

        <!-- Tombol Batal -->
        <button type="button"
            onclick="closeModalVerifikasiHadirLSP()"
            style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s; margin-left: 10px;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
            onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('i').style.color='white';">
            <i class="bi bi-x-circle" style="margin-right: 6px; color: white;"></i> Batal
        </button>
    </div>
</div>

<script>
    function openModalVerifikasiHadirLSP(itemId) {
        const form = document.getElementById("formVerifikasiHadirLSP");
        form.action = `/verifikasikehadiranlsphadir/${itemId}`;
        document.getElementById("modalVerifikasiHadirLSP").style.display = "flex";
    }

    function closeModalVerifikasiHadirLSP() {
        document.getElementById("modalVerifikasiHadirLSP").style.display = "none";
    }
</script>

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
<script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
