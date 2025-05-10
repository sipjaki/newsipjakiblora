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
                <div style="display: flex; flex-wrap: wrap; gap: 10px;">


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

<div style="position: relative; display: inline-block; margin-right:10px;">
    <input type="search" id="searchInput" placeholder="Cari Nama Peserta ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
    <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
</div>

<script>
    const agendaId = {{ $agendaId }};

    function searchTable() {
        let input = document.getElementById("searchInput").value;

        fetch(`/bepesertapelatihansertifikat/show/${agendaId}?search=${encodeURIComponent(input)}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error("Fetch failed with status " + response.status);
            return response.json();
        })
        .then(data => {
            document.querySelector("#tableBody").innerHTML = data.html;
        })
        .catch(error => console.error("Error fetching search results:", error));
    }
</script>

                    <a href="{{ url('/bepelatihanjampelajaran/' . $agendaId) }}" style="text-decoration: none;">
                        <button
                            onmouseover="this.style.background='white'; this.style.color='black'; this.style.border='1px solid #ccc';"
                            onmouseout="this.style.background='linear-gradient(135deg, #2e7d32, #d4af37)'; this.style.color='white'; this.style.border='none';"
                            style="background: linear-gradient(135deg, #2e7d32, #d4af37); color: white; border: none; padding: 10px 20px;
                                   border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                                   transition: background 0.3s, color 0.3s, border 0.3s;">
                            <i class="bi bi-printer-fill" style="margin-right: 8px; font-size: 16px;"></i>Isi Jam Pelajaran
                        </button>
                    </a>

                    <button
                        onclick="generatePDF()"
                        onmouseover="this.style.background='white'; this.style.color='black'; this.style.border='1px solid #ccc';"
                        onmouseout="this.style.background='linear-gradient(135deg, #2e7d32, #d4af37)'; this.style.color='white'; this.style.border='none';"
                        style="background: linear-gradient(135deg, #2e7d32, #d4af37); color: white; border: none; padding: 10px 20px;
                               border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                               transition: background 0.3s, color 0.3s, border 0.3s;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-download" viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v3.6a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5V10.4a.5.5 0 0 1 1 0v3.6a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14V10.4a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 1.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V10.5a.5.5 0 0 1-1 0V2.707L5.354 5.354a.5.5 0 1 1-.708-.708l3-3z"/>
                        </svg>
                        Download PDF
                    </button>

                    <button
                        onclick="exportTableToExcel('daftarPeserta', 'Data Peserta {{$data->namakegiatan}}')"
                        onmouseover="this.style.background='white'; this.style.color='black'; this.style.border='1px solid #ccc';"
                        onmouseout="this.style.background='linear-gradient(135deg, #2e7d32, #d4af37)'; this.style.color='white'; this.style.border='none';"
                        style="background: linear-gradient(135deg, #2e7d32, #d4af37); color: white; border: none; padding: 10px 20px;
                               border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
                               transition: background 0.3s, color 0.3s, border 0.3s;">
                        <i class="bi bi-file-earmark-excel-fill" style="margin-right: 8px; font-size: 16px;"></i> Download Excel
                    </button>

                </div>


            {{-- Inject variabel Blade ke JavaScript --}}

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
        doc.text(["Daftar Peserta Pelatihan:", namaKegiatan], 148.5, 22, { align: "center" });

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>

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
<a href="/bepesertapelatihanindex" style="text-decoration: none;">
    <button
        onmouseover="this.style.background='white'; this.style.color='black'; this.style.border='1px solid #ccc';"
        onmouseout="this.style.background='linear-gradient(135deg, #4B5563, #E5E7EB)'; this.style.color='white'; this.style.border='none';"
        style="background: linear-gradient(135deg, #4B5563, #E5E7EB); color: white; border: none; padding: 10px 20px;
               border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center;
               transition: background 0.3s, color 0.3s, border 0.3s; margin-left:10px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             viewBox="0 0 16 16" style="margin-right: 8px;">
            <path fill-rule="evenodd"
                  d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
        </svg>
        Kembali
    </button>
</a>


                 </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                            <table  id="daftarPeserta" class="zebra-table table-striped">
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
                                            <i class="bi bi-file-earmark-pdf-fill" style="margin-right: 5px;"></i>Lihat Sertifikat
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Verifikasi
                                        </th>
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Kehadiran
                                        </th>
                                        {{-- <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-check-circle" style="margin-right: 5px;"></i>Keterangan Isi Sertifikat
                                        </th> --}}
                                        <th style="width: 200px; text-align:center;">
                                            <i class="bi bi-gear" style="margin-right: 5px;"></i>Upload Sertifikat
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @if ($datapeserta->isEmpty())
                                    <div style="background-color: #6c757d; color: white; padding: 15px; width: 100%; margin: 0;">
                                        <marquee behavior="scroll" direction="left" scrollamount="6" style="font-weight: bold; color:red;">
                                            Peserta Belum Tersedia || Peserta Belum Tersedia || Peserta Belum Tersedia || Peserta Belum Tersedia ||
                                        </marquee>
                                    </div>
                                @else
                                @foreach ($datapeserta as $item )
                                    <tr class="align-middle">
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        {{-- <td style="text-align: left;">{{ $data->namakegiatan }}</td> --}}
                                        <td style="text-align: left;">{{ $item->namalengkap }}</td>
                                        {{-- <td style="text-align: left;">{{ $item->jenjangpendidikan->jenjangpendidikan}}</td> --}}
                                        <td style="text-align: center;">{{ $item->nik }}</td>
                                        <td style="text-align: center;">{{ $item->jeniskelamin }}</td>
                                        <td style="text-align: center;">
                                            {{ \Carbon\Carbon::parse($item->tanggallahir)->translatedFormat('d F Y') }}
                                        </td>
                                        <td style="text-align: left;">{{ $item->notelepon }}</td>
                                        <td style="text-align: left;">{{ $item->instansi }}</td>


<td>
    <div style="display: inline-block;">
        @if ($item->verifikasikehadiran)
            <a href="/bepesertapuploadsertifikat/show/{{ $item->id }}"
               style="background-color: #6c757d; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 600;
                      display: inline-flex; align-items: center; gap: 6px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
                      transition: 0.3s; font-size: 14px; text-decoration: none;"
               onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
               onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.querySelector('i').style.color='white';"
               title="Upload Sertifikat">
                <i class="bi bi-file-earmark-arrow-up" style="font-size: 1.2rem; color: white;"></i> SERTIFIKAT
            </a>
        @else
            <span style="background-color: #e0e0e0; color: #555; padding: 8px 16px; border-radius: 8px; font-weight: 600;
                         display: inline-flex; align-items: center; gap: 6px; font-size: 14px;">
                <i class="bi bi-file-earmark-arrow-up" style="font-size: 1.2rem; color: #999;"></i> TIDAK ADA SERTIFIKAT
            </span>
        @endif
    </div>
</td>



<td style="text-align: center;">
    @if($item->verifikasi === null)
    <!-- BELUM DI VERIFIKASI -->
    <button type="button" onclick="openModal({{ $item->id }})"
        style="background-color: #9CA3AF; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 600;
        display: inline-flex; align-items: center; gap: 6px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: 0.3s;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
        onmouseout="this.style.backgroundColor='#9CA3AF'; this.style.color='white'; this.querySelector('i').style.color='white';">
        <i class="bi bi-patch-check" style="color: white;"></i> DI VERIFIKASI
    </button>
    @elseif($item->verifikasi === 'lolos')
    <!-- LOLOS -->
    <button type="button" disabled
        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 600;
        display: inline-flex; align-items: center; gap: 6px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: 0.3s; cursor: not-allowed;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
        onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('i').style.color='white';">
        <i class="bi bi-patch-check-fill" style="font-size: 1.2rem; color: white;"></i> LOLOS
    </button>
    @elseif($item->verifikasi === 'gugur')
    <!-- GUGUR -->
    <button type="button" disabled
        style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 600;
        display: inline-flex; align-items: center; gap: 6px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        transition: 0.3s; cursor: not-allowed;"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
        onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('i').style.color='white';">
        <i class="bi bi-x-circle" style="font-size: 1.2rem; color: white;"></i> GUGUR
    </button>
    @endif
</td>

        <td style="text-align: center;">
            @if($item->verifikasikehadiran == false)
                <button type="button" onclick="openKehadiranModal({{ $item->id }})"
                    class="btn btn-danger">
                    <i class="bi bi-x-circle"></i> TIDAK HADIR
                </button>
            @else
                <button type="button" disabled
                    class="btn"
                    style="
                        background-color: rgba(16, 185, 129, 0.85);
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
                    <i class="bi bi-patch-check-fill" style="font-size: 1.2rem;"></i> HADIR
                </button>
            @endif
        </td>

        <!-- Modal Kehadiran -->
        <div id="kehadiranModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
            <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                    Apakah Peserta Hadir dalam Pelatihan?
                </p>

                <!-- Form Verifikasi Kehadiran -->
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
                form.action = `{{ url('verifikasikehadiran') }}/${itemId}`;
                document.getElementById("kehadiranModal").style.display = "flex";
            }

            function closeKehadiranModal() {
                document.getElementById("kehadiranModal").style.display = "none";
            }
        </script>
<td>
    @if($item->terbitkansertifikat == false)
    @if($item->verifikasikehadiran)
        <button type="button" onclick="openTerbitkanModal({{ $item->id }})"
            style="background-color: #FFD700; color: black; padding: 8px 16px; border-radius: 8px;
                   font-weight: 600; display: inline-flex; align-items: center; gap: 6px; border: none;
                   box-shadow: 0 2px 6px rgba(0,0,0,0.1); transition: 0.3s; cursor: pointer;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
            onmouseout="this.style.backgroundColor='#FFD700'; this.style.color='black'; this.querySelector('i').style.color='black';">
            <i class="bi bi-file-earmark-check" style="font-size: 1.2rem; color: black;"></i> TERBITKAN
        </button>
    @else
        <button type="button" disabled
            style="background-color: #d1d5db; color: #6b7280; padding: 8px 16px; border-radius: 8px;
                   font-weight: 600; display: inline-flex; align-items: center; gap: 6px; border: none;
                   box-shadow: 0 2px 6px rgba(0,0,0,0.1); cursor: not-allowed;">
            <i class="bi bi-x-circle" style="font-size: 1.2rem; color: #6b7280;"></i> BELUM HADIR
        </button>
    @endif
@else
    <button type="button" disabled
        style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; font-weight: 600;
               display: inline-flex; align-items: center; gap: 6px; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
               cursor: not-allowed;">
        <i class="bi bi-check-circle" style="font-size: 1.2rem; color: white;"></i> DITERBITKAN
    </button>
@endif

<!-- Modal Terbitkan Sertifikat -->
<div id="terbitkanModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
        <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
            Apakah Anda yakin ingin menerbitkan <br> sertifikat untuk peserta ini?
        </p>

        <!-- Form Terbitkan Sertifikat -->
        <form id="terbitkanForm" method="POST" class="d-inline">
            @csrf
            @method('PUT')
            <button type="submit"
                style="background-color: #00c400; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s;"
                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
                onmouseout="this.style.backgroundColor='#00c400'; this.style.color='white'; this.querySelector('i').style.color='white';">
                <i class="bi bi-file-earmark-check" style="margin-right: 6px; color: white;"></i> Ya, Terbitkan
            </button>
        </form>

        <!-- Tombol Batal -->
        <button type="button"
            onclick="closeTerbitkanModal()"
            style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; font-weight: 500; display: inline-flex; align-items: center; transition: 0.3s; margin-left: 10px;"
            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black';"
            onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('i').style.color='white';">
            <i class="bi bi-x-circle" style="margin-right: 6px; color: white;"></i> Batal
        </button>
    </div>
</div>

<script>
    function openTerbitkanModal(itemId) {
        const form = document.getElementById("terbitkanForm");
        form.action = `{{ url('terbitkansertifikat') }}/${itemId}`;
        document.getElementById("terbitkanModal").style.display = "flex";
    }

    function closeTerbitkanModal() {
        document.getElementById("terbitkanModal").style.display = "none";
    }
</script>


</td>




                                    </tr>
                                        @endforeach
                                        @endif

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
      <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
