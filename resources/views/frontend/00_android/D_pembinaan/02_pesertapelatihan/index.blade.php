<style>

    /* Styling untuk tabel */
    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .custom-fl-table th, .custom-fl-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .custom-fl-table th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    .custom-fl-table td {
        background-color: #f9f9f9;
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
                <img src="/assets/00_android/iconmenu/menuutama2.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container-surat">
                    <section class="document-section" style="margin-top: -100px;">
                        <div class="container" style="max-width: 95%">
                          <ul class="nav nav-pills" id="pills-tab" role="tablist">
                              {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}

                              {{-- <br><p style="font-size: 16px; color:black;">Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora</p> --}}
                              <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">

                                <!-- Tombol dan kolom pencarian di kanan -->
                                <div style="display: flex; align-items: center;">
{{--
                                    <div style="position: relative; display: inline-block; margin-right:10px;">
                                        <input type="search" placeholder="Pencarian...." style="border: 1px solid #ccc; padding: 5px 10px; font-size: 14px; border-radius: 5px; width: 200px;">
                                        <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                    </div> --}}

                                    {{-- <a href="/datajakon/bujk" style="background: white;">
                                        <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer; margin-right: 10px;">
                                            <i class="fas fa-arrow-circle-left mr-2" style="margin-right: 20px; color:red;"></i><span style="color: black; font-size:20px;">KEMBALI</span>
                                        </button>
                                    </a> --}}

                                </div>
                            </div>

                            </ul>
                        </div>
                    </section>


                    <body>

                        <div class="table-wrapper" style="margin-top:-130px; position: relative;">
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
                                    <label for="">Cari Kegiatan</label>
                                    <input type="search" id="searchInput" placeholder="Cari Kegiatan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

                            </div>

                            <table class="fl-table" id="sortableTable" style="margin-top: 15px; width: 100%; border-collapse: collapse;">
                                <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No <span class="sort-icon">⇅</span></th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:200px;"> Kategori Pelatihan <span class="sort-icon">⇅</span></th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:300px;"> Nama Kegiatan <span class="sort-icon">⇅</span></th>
                                            <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; width:300px;"> Keterangan <span class="sort-icon">⇅</span></th>
                                            <th style="text-align:center; width:100px;"> View Peserta </th>
                                        </tr>

                                </thead>

                                <tbody id="tableBody">
                                    @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                    @foreach ($data as $item )
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                        <td>{{$item->kategoripelatihan->kategoripelatihan}}</td>
                                        <td>{{$item->namakegiatan}}</td>
                                        <td>{{$item->keterangan}}</td>
                                        {{-- <td>{{$item->keterangan}}</td> --}}
                                        <td style="text-align: center">
                                            <div style="
                                                display: inline-block;
                                                font-size:14px;
                                                padding: 8px 16px;
                                                background-color: navy;
                                                color: white;
                                                text-decoration: none;
                                                border-radius: 5px;
                                                font-weight: bold;
                                                transition: all 0.3s ease-in-out;
                                                border: 1px solid navy;
                                            "
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                            onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                                <a href="/daftarpesertapelatihans/{{$item->namakegiatan}}" style="color: inherit; text-decoration: none;">
                                                    <i class="fas fa-users" style="margin-right: 5px; font-size:14px;"></i> Peserta
                                                </a>
                                            </div>
                                        </td>

                                        {{-- <td style="display: flex; justify-content: center; align-items: center; text-align: center; padding: 10px;">
                                            @php
                                            $eventDate = \Carbon\Carbon::parse($item->penutupan)->subDays(0);
                                            $today = \Carbon\Carbon::now();
                                            $isClosed = $today->greaterThanOrEqualTo($eventDate);
                                            @endphp
                                            @if ($isClosed)
                                                <button style="
                                                    background-color: #FF0000;
                                                    color: white;
                                                    border: 2px solid #FF0000;
                                                    padding: 8px 12px;
                                                    font-size: 14px;
                                                    font-weight: bold;
                                                    border-radius: 6px;
                                                    cursor: not-allowed;
                                                    opacity: 0.6;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    gap: 6px;
                                                " disabled>
                                                    <i class="fas fa-times-circle"></i> Ditutup
                                                </button>
                                            @else
                                                <a href="/agendapembinaan/{{$item->namakegiatan}}" style="text-decoration: none;">
                                                    <button style="
                                                        background-color: #001f3f;
                                                        color: white;
                                                        border: 2px solid #001f3f;
                                                        padding: 8px 12px;
                                                        font-size: 14px;
                                                        font-weight: bold;
                                                        border-radius: 6px;
                                                        cursor: pointer;
                                                        transition: all 0.3s ease;
                                                        display: flex;
                                                        align-items: center;
                                                        justify-content: center;
                                                        gap: 6px;
                                                    " onmouseover="this.style.backgroundColor='white'; this.style.color='#001f3f';"
                                                       onmouseout="this.style.backgroundColor='#001f3f'; this.style.color='white';">
                                                        <i class="fas fa-user-check"></i> Daftar
                                                    </button>
                                                </a>
                                            @endif
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="pagination-info-box" style="margin-right:0px; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px;">
                                <div class="pagination-info" style="color: black; font-weight: 500; font-size:20px;">
                                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                </div>
                            </div>
                            <p style="color: black; font-weight:bold;">Keterangan : {{$title}} DPUPR Kab Blora Tahun 2025</p>
                            <div class="pagination-info-box" style="margin: 20px 0; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: 100%; text-align: center;">
                                <div class="pagination-info" style="color: black; font-weight: 500; font-size: 14px; display: inline-block;">
                                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                </div>
                            </div>
                            <!-- Pagination Section -->
                            <div class="pagination-container" style="display: flex; flex-direction: column; align-items: center;">
                                <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
                                    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data->previousPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                                        </a>
                                    </li>
                                    <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data->nextPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <style>
                            .sort-icon {
                                font-size: 16px;
                                color: gray;
                                margin-left: 5px;
                            }
                            th {
                                padding: 10px;
                                border-bottom: 2px solid black;
                            }
                            th:hover {
                                background-color: #f2f2f2;
                            }
                        </style>

                        <script>
                        function updateEntries() {
                            let selectedValue = document.getElementById("entries").value;
                            let url = new URL(window.location.href);
                            url.searchParams.set("perPage", selectedValue);
                            window.location.href = url.toString();
                        }


                        function searchTable() {
                        let input = document.getElementById("searchInput").value;

                        fetch(`/daftarpesertapelatihan?search=${input}`)
                            .then(response => response.text())
                            .then(html => {
                                let parser = new DOMParser();
                                let doc = parser.parseFromString(html, "text/html");
                                let newTableBody = doc.querySelector("#tableBody").innerHTML;
                                document.querySelector("#tableBody").innerHTML = newTableBody;
                            })
                            .catch(error => console.error("Error fetching search results:", error));
                    }

                            </script>



                    </div><!-- donate-box-inner -->
                                    </div><!-- col-xl-8 col-lg-12 -->
                                </div><!-- row -->
                            </div><!-- container -->
                            {{-- @include('frontend.00_approve.01_cssterpisah.paginator') --}}
                        </section><!-- donate-section -->


                    </div>

                    <br>
                    </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
