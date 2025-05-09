<style>

        .custom-table-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-radius: 20px;
    }

    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Membuat kolom lebih konsisten */
        min-width: 700px;
    }

    .custom-fl-table th,
    .custom-fl-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #998282;
        text-align: left;
        vertical-align: middle;
        height: 48px; /* Tinggi baris tetap */
        box-sizing: border-box;
    }

    .custom-fl-table th {
        background-color:#4ADE80;
        font-weight: 600;
        color: #2d3436;
        font-size: 14px;
        border-bottom: 2px solid #e0e0e0;
    }

    .custom-fl-table td {
        font-size: 14px;
        color: #000000;
        line-height: 1.5;
    }

    /* Zebra striping untuk baris */
    .custom-fl-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    /* Hover effect */
    .custom-fl-table tbody tr:hover {
        background-color: #f7f7f7;
    }

    /* Scrollbar styling */
    .custom-table-container::-webkit-scrollbar {
        height: 6px;
    }

    .custom-table-container::-webkit-scrollbar-thumb {
        background-color: #c0c0c0;
        border-radius: 4px;
    }

    .custom-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Styling untuk baris yang tidak memiliki materi */
    .no-materi-message {
        color: red;
        font-weight: bold;
        text-align: center;
        background-color: #ffcccc;
        display: block;
        margin: 10px 0;
        padding: 5px;
    }

    /* Styling untuk pesan 'MATERI BELUM DI UPLOAD' di luar tabel */
    .no-data-message {
        color: red;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
    }


    .header-surat {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;

}

.header-text {
    margin: 0 auto;
}

.header-text h3, .header-text h4, .header-text p {
    margin: 5px 0; /* Memberikan jarak antar elemen */
}

.table-identitas {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-identitas td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-identitas .label {
    font-weight: bold;
}

.table-identitas .colon {
    text-align: center;
    font-weight: bold;
}

.table-identitas tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-identitas tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-identitas td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

.table-profil {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}

.table-profil td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-profil .label {
    font-weight: bold;
    width: 25%; /* Menjaga label agar tidak terlalu melebar */
}

.table-profil .colon {
    text-align: center;
    font-weight: bold;
    width: 10%;
}

.table-profil tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-profil tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-profil td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}



</style>
@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        {{-- <img src="assets/images/icons/back.svg" alt="icon"> --}}
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">{{$title}}</p>
                    {{-- <p class="font-semibold text-sm text-white">#WeNeedHelp</p> --}}
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    {{-- <img src="assets/images/icons/like.svg" alt="icon"> --}}
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/00_android/iconmenu/menuutama3.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container-surat">

                    <body>

                        <div class="table-wrapper" style="position: relative;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 10px; align-items: center;">
                                <div>
                                    <label for="entries" style="margin-right: 5px; font-weight: bold;">Show:</label>
                                    <select id="entries" onchange="updateEntries()" style="padding: 5px; border: 1px solid black; background-color: white;">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                        <option value="150">150</option>
                                        <option value="200">200</option>
                                    </select>
                                </div>

                                <div style="position: relative; display: inline-block; margin-right:10px;">
                                    <input type="search" id="searchInput" placeholder="Cari Peserta Pelatihan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

                            </div>
<br>
<div style="margin-bottom: 20px;">
    <div style="margin-top: 10px; overflow: hidden; border-radius: 15px; border: 1px solid #e5e7eb;">
        @if($data->foto && file_exists(public_path('storage/' . $data->foto)))
            <img src="{{ asset('storage/' . $data->foto) }}" alt="Sosialisasi"
                style="width: 100%; height: auto; display: block;" loading="lazy">
        @elseif($data->foto)
            <img src="{{ asset($data->foto) }}" alt="Gambar Peraturan"
                style="width: 100%; height: auto; display: block;" loading="lazy">
        @else
            <p>Data belum diupdate</p>
        @endif
    </div>

    <br>
    <p style="font-size: 18px; font-weight: bold; color: #2c3e50; margin: 0;">
        Kegiatan Pelatihan :
        <span style="font-size: 18px; color: #2980b9; font-weight: normal;">{{$data->namakegiatan}}</span>
    </p>
</div>

                            <div style="overflow-x: auto; margin-top: 15px;">
                                <table class="custom-fl-table" id="sortableTable">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;">
                                                <i class="bi bi-hash me-1"></i> No
                                            </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:200px;">
                                                <i class="bi bi-person-fill me-1"></i> Nama Lengkap
                                            </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-gender-ambiguous me-1"></i> Gender
                                            </th>
                                            <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; width:400px;">
                                                <i class="bi bi-building me-1"></i> Instansi/Universitas/Lembaga/Perseorangan
                                            </th>
                                            <th onclick="sortTable(4)" style="cursor:pointer; text-align:center; width:200px;">
                                                <i class="bi bi-check2-circle me-1"></i> Status
                                            </th>
                                                         {{-- <th style="text-align:center; width:100px;"> View Peserta </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @php $start = ($datapeserta->currentPage() - 1) * $datapeserta->perPage() + 1; @endphp
                                        @forelse ($datapeserta as $item)
    <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : 'white' }};">
        <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
        <td style="text-transform: capitalize; text-align: left">
            {{$item->namalengkap}}
        </td>
        <td style="text-align: center;">{{$item->jeniskelamin}}</td>
        <td style="text-align: left">{{$item->instansi}}</td>

        <td style="text-align: center;">
            <div>
                <style>
                    .btn-belum-verifikasi-custom {
                        background-color: #e3342f;
                        color: white;
                        border: none;
                        padding: 8px 16px;
                        border-radius: 8px;
                        font-weight: 600;
                        display: inline-flex;
                        align-items: center;
                        gap: 6px;
                        cursor: pointer;
                        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                    }

                    .btn-lolos-verifikasi-custom {
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
                    }
                </style>
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

            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" style="text-align: center; font-weight: bold; padding: 20px;">
            Peserta Belum Mendaftar !!
        </td>
    </tr>
@endforelse

                                    </tbody>
                                </table>
                            </div>
                            <br><br>

                            <p style="color: black; font-weight:bold;">Keterangan : {{$title}} DPUPR Kab Blora Tahun 2025</p>
                            <div class="pagination-info-box" style="margin: 20px 0; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: 100%; text-align: center;">
                                <div class="pagination-info" style="color: black; font-weight: 500; font-size: 14px; display: inline-block;">
                                    Data Ke {{ $datapeserta->firstItem() }} Sampai {{ $datapeserta->lastItem() }} Dari {{ $datapeserta->total() }} Jumlah {{$title}}
                                </div>
                            </div>
                            <!-- Pagination Section -->
                            <div class="pagination-container" style="display: flex; flex-direction: column; align-items: center;">
                                <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
                                    <li class="page-item {{ $datapeserta->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $datapeserta->previousPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                                        </a>
                                    </li>
                                    <li class="page-item {{ $datapeserta->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $datapeserta->nextPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            // Fungsi untuk mengupdate jumlah entri per halaman
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);  // Update parameter perPage
                                window.location.href = url.toString();  // Mengarahkan ke URL yang baru
                            }

                            // Fungsi untuk melakukan pencarian tabel
                            function searchTable() {
                                let input = document.getElementById("searchInput").value;

                                // Pastikan namakegiatan di-encode dengan benar jika diperlukan
                                const namakegiatan = encodeURIComponent("{{$data->namakegiatan}}");

                                // Melakukan fetch dengan search query
                                fetch(`/respelatihanpeserta/${namakegiatan}?search=${encodeURIComponent(input)}`)
                                    .then(response => response.text())
                                    .then(html => {
                                        // Menggunakan DOMParser untuk mengambil isi baru tabel
                                        let parser = new DOMParser();
                                        let doc = parser.parseFromString(html, "text/html");
                                        let newTableBody = doc.querySelector("#tableBody").innerHTML;

                                        // Update bagian tabel dengan data baru
                                        document.querySelector("#tableBody").innerHTML = newTableBody;
                                    })
                                    .catch(error => console.error("Error fetching search results:", error));  // Menangani error jika ada
                            }
                        </script>
                                                            </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->
                                </div><!-- row -->
                            </div><!-- container -->
                            @include('frontend.00_android.00_fiturmenu.keterangan')

                            <br><br><br><br><br>

                                    @include('frontend.00_android.00_fiturmenu.android')

                            {{-- @include('frontend.00_approve.01_cssterpisah.paginator') --}}
                        </section><!-- donate-section -->


                    </div>

                    </div>

            </div>
        </div>


    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
