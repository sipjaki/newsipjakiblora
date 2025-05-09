<style>
    .custom-table-container {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile */
    border-radius: 15px; /* Round the corners of the container */
    border: 1px solid #ddd; /* Optional: Adds a border around the container */
}

.custom-fl-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px; /* Prevents the table from shrinking too much */
}

.custom-fl-table th, .custom-fl-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.custom-fl-table th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.custom-fl-table td {
    text-transform: capitalize;
}

/* Optional: Add some styles to make the scrollbar appear nicer */
.custom-table-container::-webkit-scrollbar {
    height: 8px;
}

.custom-table-container::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 10px;
}

.custom-table-container::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}

</style>
@include('frontend.00_android.00_fiturmenu.header')

@include('backend.00_administrator.00_baganterpisah.11_alert')

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
                                    <input type="search" id="searchInput" placeholder="Cari Pelatihan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

                            </div>

                            <div style="overflow-x: auto; margin-top: 15px;">
                                <table class="custom-fl-table" id="sortableTable">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;">
                                                <i class="bi bi-hash"></i> No
                                            </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:200px;">
                                                <i class="bi bi-tags"></i> Kategori
                                            </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-calendar-event"></i> Nama Kegiatan
                                            </th>
                                            <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; width:300px;">
                                                <i class="bi bi-chat-left-text"></i> Keterangan
                                            </th>
                                            <th style="text-align:center; width:200px;">
                                                <i class="bi bi-eye"></i> View Peserta
                                            </th>
                                                      </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                        @foreach ($data as $item )
                                        <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f2f2f2' : 'white' }};">
                                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td>{{$item->kategoripelatihan->kategoripelatihan}}</td>
                                            <td>{{$item->namakegiatan}}</td>
                                            <td>{{$item->keterangan}}</td>
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
                                                    <a href="/respelatihanpeserta/{{$item->namakegiatan}}" style="color: inherit; text-decoration: none;">
                                                        <i class="fas fa-users" style="margin-right: 5px; font-size:14px;"></i> Peserta
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br><br>

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
                   <script>
                        function updateEntries() {
                            let selectedValue = document.getElementById("entries").value;
                            let url = new URL(window.location.href);
                            url.searchParams.set("perPage", selectedValue);
                            window.location.href = url.toString();
                        }


                        function searchTable() {
                        let input = document.getElementById("searchInput").value;

                        fetch(`/respesertapelatihan?search=${input}`)
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

                            @include('frontend.00_android.00_fiturmenu.keterangan')

                            <br><br><br><br><br>

                                    @include('frontend.00_android.00_fiturmenu.android')
                        </section><!-- donate-section -->


            </div>
        </div>
    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
