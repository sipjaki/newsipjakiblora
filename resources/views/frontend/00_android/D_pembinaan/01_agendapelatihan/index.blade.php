<style>
    /* Gaya untuk tabel */
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

        <div class="flex flex-col z-30" style="margin-top:-100px;">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                    <div class="flex flex-col gap-[10px]">
                        <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">{{$title}}</p>

                        <div class="flex flex-col gap-[10px]">
                            {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}

                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- Left: Search Input -->
                                <div style="position: relative; display: inline-block; margin-right: 5px;">
                                    <input type="search" id="searchInput" placeholder="Cari Agenda Pelatihan ...." onkeyup="searchTable()"
                                           style="border: 1px solid #ccc; padding: 10px 40px 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                    <i class="fas fa-search" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                </div>

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

                                fetch(`/resagendapelatihan?search=${input}`)
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
                            <div class="flex flex-col gap-4 px-4" style="margin-top: -25px;">
                                <br><br>

                    @foreach ($data as $item)
                    <class="card" id="tableBody">
                        <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                            <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">

               <div style="margin-top: 10px;">
                @if($item->foto && file_exists(public_path('storage/' . $item->foto)))
                    <!-- Menampilkan gambar dari storage -->
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Sosialisasi" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                @elseif($item->foto)
                    <!-- Menampilkan gambar dari path luar storage -->
                    <img src="{{ asset($item->foto) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                @else
                    <!-- Placeholder jika tidak ada data -->
                    <p>Data belum diupdate</p>
                @endif
            </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="font-bold line-clamp-1 hover:line-clamp-none" style="color: #28A745;">{{$item->namakegiatan}}</p>
                                {{-- <p class="text-xs leading-[18px]">Target --}}
                                    <span class="text-[#ffffff]">
                                        @php
                                            $text = $item->keterangan;
                                            $limit = 100;
                                            $truncatedText = strlen($text) > $limit ? substr($text, 0, $limit) . '...' : $text;
                                            @endphp
                                        {{ $truncatedText }}
                                    </span>
                                </p>
                                <p class="text-xs text-blue-500 cursor-pointer line-clamp-1 hover:line-clamp-none" id="moreText" style="display: none;">
                                    <span class="text-[#ffffff] line-clamp-1 hover:line-clamp-none">{{ $item->keterangan }}</span>
                                </p>
                                <button class="text-xs mt-2" onclick="toggleText()" style="color: navy;">Selengkapnya</button>

                                <script>
                                    function toggleText() {
                                        var moreText = document.getElementById("moreText");
                                        var button = document.querySelector("button");

                                        if (moreText.style.display === "none") {
                                            moreText.style.display = "inline";
                                            button.innerHTML = "Tutup";
                                        } else {
                                            moreText.style.display = "none";
                                            button.innerHTML = "Selengkapnya";
                                        }
                                    }
                                    </script>



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
                                        <a href="/resagendapelatihan/{{$item->namakegiatan}}" style="text-decoration: none;">
                                            <button style="
                                            background-color: #006b1b;
                                            color: white;
                                            border: 2px solid #006b1b;
                                            padding: 8px 12px;
                                            font-size: 14px;
                                            font-weight: bold;
                                            border-radius: 6px;
                                            opacity: 0.6;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            gap: 6px;
                                            width:100%;
                                            " onmouseover="this.style.backgroundColor='white'; this.style.color='#001f3f';"
                                               onmouseout="this.style.backgroundColor='#001f3f'; this.style.color='white';">
                                               <i class="fas fa-user-check"></i> Daftar
                                            </button>
                                        </a>
                                        @endif

                                    </div>

                                </div>

                                    @endforeach

                                </div>

                                <br>

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

                    </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
