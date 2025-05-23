<style>
    /* Gaya untuk tabel */
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
</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama2.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">

            <nav class="pt-5 px-3 flex justify-between items-center">
                <!-- Logo bagian kiri -->
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>

                <!-- Judul bagian tengah -->
                <div class="flex flex-col items-center justify-center text-center">
                    <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                    <br>
                    <p class="font-semibold text-xl text-white">{{$title}}</p>
                </div>

                <!-- Ikon bagian kanan -->
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                </a>
            </nav>
        </div>

        <div class="flex flex-col z-30" style="margin-top: -100px;">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                    <div class="flex flex-col gap-[10px]">
                        <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">{{$title}}</p>

                        <div class="flex flex-col gap-[10px]">
                            {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- Left: Search Input -->
                                <div style="position: relative; display: inline-block; margin-right: 5px;">
                                    <input type="search" id="searchInput" placeholder="Cari TKK Pekerja ...." onkeyup="searchTable()"
                                           style="border: 1px solid #ccc; padding: 10px 40px 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

                                {{-- <a href="javascript:history.back()">f
                                    <button
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                    style="background-color: #374151; color: white; border: none; padding: 8px 15px; border-radius: 15px; font-size: 14px; cursor: pointer; display: transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <!-- Ikon Kembali -->
                                    <i class="fa fa-arrow-left" style="margin-right: 8px;"></i>
                                    Kembali
                                </button>
                                </a> --}}

                                <!-- Right: Show Entries Dropdown -->
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
                            </div>

                            <script>
                                function updateEntries() {
                                    let selectedValue = document.getElementById("entries").value;
                                    let url = new URL(window.location.href);
                                    url.searchParams.set("perPage", selectedValue);
                                    window.location.href = url.toString();
                                }


                                function searchTable() {
                                let input = document.getElementById("searchInput").value;

                                fetch(`/resalltkkblora?search=${input}`)
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



                            <!-- Table Section -->

                            <div class="custom-table-container">
                                <table class="custom-fl-table" id="sortableTable">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;">
                                                <i class="bi bi-list-ol me-1"></i> No
                                            </th>

                                            <!-- Kolom Nama Lengkap -->
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-person-fill me-1"></i> Nama Lengkap
                                            </th>

                                            <!-- Kolom Jabatan Kerja -->
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-briefcase-fill me-1"></i> Jabatan Kerja
                                            </th>

                                            <!-- Kolom Penyelenggara/Asosiasi -->
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-diagram-3-fill me-1"></i> Penyelenggara
                                            </th>

                                            <!-- Kolom Status -->
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:150px;">
                                                <i class="bi bi-check-circle-fill me-1"></i> Status
                                            </th>

                                            <!-- Kolom View -->
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:150px;">
                                                <i class="bi bi-eye-fill me-1"></i> View
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                        @foreach ($data as $item )
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td style="text-transform: capitalize;">{{ ucwords(strtolower($item->nama)) }}</td>
                                            <td style="text-align: left;">{{$item->jabatankerja->jabatankerja}}</td>

                                            <td style="text-align: center;">
                                                @if($item->asosiasimasjaki?->namaasosiasi)
                                                    {{ $item->asosiasimasjaki->namaasosiasi }}
                                                @else
                                                    <button style="font-size: 12px; background-color: navy; color: white; padding: 4px 8px; border: none; border-radius: 4px;">
                                                        DATA ASOSIASI <br> BELUM DI UPDATE
                                                    </button>
                                                @endif
                                            </td>

                                            <td class="text-center" style="text-align: center;">
                                                @php
                                                    $status = strtoupper(trim($item->statusterbit));
                                                    $style = '';

                                                    if ($status == 'TERBIT' || $status == 'TELAH TERBIT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } elseif ($status == 'DALAM PROSES') {
                                                        $style = 'background-color: #dc2626; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp

                                                <button style="{{ $style }}">
                                                    {{ $item->statusterbit ?? 'TIDAK ADA DATA' }}
                                                </button>
                                            </td>


                                            <td style="text-align: center">
                                                <a href="/resalltkkblora/{{$item->id}}">
                                                    <i class="fas fa-eye view-icon" onclick="alert('View clicked!')"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                                 <!-- Description Section -->
                            <br>

                            {{-- <p style="color: black; font-weight:bold;">Keterangan : {{$title}} </p> --}}
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

                    </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
