<style>
    /* Gaya untuk tabel */
    .fl-table {
        margin-top: 15px;
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
    }

    .fl-table th, .fl-table td {
        text-align: center;
        /* border-radius: 10px; */
        /* padding: 10px; */
    }

    /* Gaya untuk kepala tabel */
    .fl-table thead {
        background-color: #374151; /* Warna latar belakang untuk header tabel */
        color: white;
        padding: 5px;
    }

    /* Gaya belang-belang */
    .fl-table tbody tr:nth-child(odd) {
        background-color: #f1f1f1; /* Abu-abu muda untuk baris ganjil */
    }

    .fl-table tbody tr:nth-child(even) {
        background-color: #e0e0e0; /* Abu-abu lebih gelap untuk baris genap */
    }

    /* Gaya hover pada baris tabel */
    .fl-table tbody tr:hover {
        background-color: #d3d3d3; /* Efek hover dengan warna abu lebih gelap */
    }
</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] -mb-[181px]" style="background: linear-gradient(to bottom, #28A745, #FFD100);">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <!-- Logo bagian kiri -->
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>

                <!-- Judul bagian tengah -->
                <div class="flex flex-col items-center justify-center text-center">
                    <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                    <br>
                    <p class="font-semibold text-xl text-white">{{$title}}</p>
                </div>

                <!-- Ikon bagian kanan -->
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                </a>
            </nav>
        </div>

        <div class="flex flex-col z-30">
            <div id="status" class="w-full h-[92px] bg-[#76AE43] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">

                </div>
                {{-- <p class="font-semibold text-sm text-white">This Fundraising has been finished</p> --}}
            </div>

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                    <div class="flex flex-col gap-[10px]">
                        <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">{{$title}}</p>

                        <div class="flex flex-col gap-[10px]">
                            {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- Left: Search Input -->
                                <div style="position: relative; display: inline-block; margin-right: 5px;">
                                    <input type="search" id="searchInput" placeholder="Cari Pekerjaan ...." onkeyup="searchTable()"
                                           style="border: 1px solid #ccc; padding: 10px 40px 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

                                {{-- <a href="javascript:history.back()">
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

                                fetch(`/resahspdiv1?search=${input}`)
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
                            <div style="overflow-x: auto; margin-top: 15px; border-radius: 15px; border: 1px solid #ccc;">
                                <table class="fl-table" id="sortableTable" style="width: 100%; border-collapse: collapse; border-radius: 15px; overflow: hidden;">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px; padding: 5px;"> No </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:500px; padding: 5px;"> Kode </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:400px; padding: 5px;"> Pekerjaan </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:200px; padding: 5px;"> Satuan </th>
                                            <th onclick="sortTable(4)" style="cursor:pointer; text-align:center; width:100px; padding: 5px;"> Rp </th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:200px; padding: 5px;"> Besaran </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                        @foreach ($data as $item)
                                        <tr>
                                            <td style="text-align: center; padding: 5px;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td style="text-align: center; padding: 5px;">
                                                {{ optional($item->hspdivisi)->id }}.
                                                {{ optional($item->hsppaket8)->id }}.
                                                {{ optional($item->hspkodepekerjaan8)->kodepekerjaan }}.
                                                {{$item->kode}}
                                            </td>
                                            <td style="text-align: left; padding: 5px;">
                                                @if(isset($item->id) && !empty($item->id))
                                                    <a href="javascript:void(0);"
                                                       style="color: blue; text-decoration: none;"
                                                       onclick="redirectToPage('{{ $item->id }}')">
                                                        {{ $item->jenispekerjaan }}
                                                    </a>
                                                @else
                                                    <span style="color: red;">ID Tidak Ditemukan</span>
                                                @endif
                                            </td>
                                            <script>
                                                function redirectToPage(id) {
                                                    if (!id) { // Pastikan ID tidak kosong
                                                        alert("ID tidak valid!");
                                                        return;
                                                    }
                                                    window.location.href = "/satuanhargadivisi1/" + encodeURIComponent(id);
                                                }
                                            </script>
                                            <td style="text-align: center; color:red; padding: 5px;" >{{$item->satuanmaterial}}</td>
                                            <td style="text-align: center; padding: 5px;">Rp</td>
                                            <td style="text-align: right; padding: 5px;">{{ number_format((float) $item->hargasatuan, 0, ',', '.') }},-</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Description Section -->
                            <br>
                            <p style="color: black; font-weight:bold;">Keterangan : {{$title}} Kab Blora Tahun 2025</p>
                            <div class="pagination-info-box" style="margin: 20px 0; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: 100%; text-align: center;">
                                <div class="pagination-info" style="color: black; font-weight: 500; font-size: 14px; display: inline-block;">
                                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                </div>
                            </div>
                            <!-- Pagination Section -->
                            <div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
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

                <div class="flex flex-col gap-2">

                    {{-- <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
