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
                                    <input type="search" id="searchInput" placeholder="Cari Nama Pekerjaan ...." onkeyup="searchTable()"
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

                                fetch(`/resprofilpaketpekerjaan?search=${input}`)
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
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:1500px;"> Dinas </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:1500px;"> Jenis Pekerjaan </th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:500px;"> Paket Pekerjaan  </th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:1500px;"> Nama Pekerjaan</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:300px;"> Rekap</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> Progress</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> Details</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> Pekerjaan</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> SPPBJ</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> SPK</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> SSKK</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:250px;"> Perjanjian Harga Satuan</th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:200px;"> View </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                        @foreach ($data as $item )
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td style="text-transform: capitalize;">{{$item->user->name}}</td>
                                            <td style="text-align: left;">{{$item->profiljenispekerjaan->jenispekerjaan}}</td>
                                            <td style="text-align: left;">{{$item->paketstatuspekerjaan->paketstatuspekerjaan}}</td>
                                            <td style="text-align: left;">{{$item->namapekerjaan}}</td>
                                            {{-- <td style="text-align: left;">Selesai</td> --}}
                                            <td style="text-align: left;">{{$item->bulan?->bulanrekap}}</td>
                                            <td style="text-align: left;">
                                                @php
                                                    // Mendapatkan progress dalam bentuk persentase
                                                    $progress = $item->progress;
                                                    // Membatasi nilai progress agar tidak lebih dari 100
                                                    $progress = min($progress, 100);

                                                    // Menentukan warna berdasarkan interval
                                                    if ($progress <= 10) {
                                                        $color = '#ff0000'; // Merah untuk 0-10%
                                                    } elseif ($progress <= 20) {
                                                        $color = '#ff1a1a'; // Merah terang untuk 10-20%
                                                    } elseif ($progress <= 30) {
                                                        $color = '#ff3333'; // Merah muda untuk 20-30%
                                                    } elseif ($progress <= 40) {
                                                        $color = '#ff4d4d'; // Merah marun untuk 30-40%
                                                    } elseif ($progress <= 50) {
                                                        $color = '#ff6666'; // Pink muda untuk 40-50%
                                                    } elseif ($progress <= 60) {
                                                        $color = '#ff8080'; // Pink untuk 50-60%
                                                    } elseif ($progress <= 70) {
                                                        $color = '#ff9999'; // Merah muda cerah untuk 60-70%
                                                    } elseif ($progress <= 80) {
                                                        $color = '#ffb3b3'; // Pink pucat untuk 70-80%
                                                    } elseif ($progress <= 90) {
                                                        $color = '#ffcccc'; // Pucat untuk 80-90%
                                                    } else {
                                                        $color = '#117235'; // Hijau untuk 90-100%
                                                    }
                                                @endphp

                                                <!-- Membuat progress bar dengan warna dinamis -->
                                                <div style="position: relative; width: 100%; height: 20px; background-color: #e0e0e0; border-radius: 10px;">
                                                    <!-- Bar progress dengan warna sesuai dengan interval -->
                                                    <div style="height: 100%; width: {{ $progress }}%; background-color: {{ $color }}; border-radius: 10px;">
                                                    </div>

                                                    <!-- Menampilkan angka progress di tengah bar -->
                                                    <span style="position: absolute; width: 100%; text-align: center; line-height: 20px; color: black; font-weight: bold;">
                                                        {{ $progress }}%
                                                    </span>
                                                </div>
                                            </td>
                                                  <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->detailsnamapaketpekerjaan) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->detailsnamapaketpekerjaan) ? route('detailsnamapaketpekerjaan.show', $item->detailsnamapaketpekerjaan->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->detailspaketpekerjaan) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->detailspaketpekerjaan) ? route('detailspaketpekerjaan.show', $item->detailspaketpekerjaan->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->sppbj) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->sppbj) ? route('sppbj.show', $item->sppbj->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->spk) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->spk) ? route('spk.show', $item->spk->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->sskk) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->sskk) ? route('sskk.show', $item->sskk->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $buttonText = !empty($item->suratperjanjianpekerjaan) ? 'LIHAT' : 'TIDAK ADA DATA';
                                                    $style = '';
                                                    $route = !empty($item->suratperjanjianpekerjaan) ? route('suratperjanjianpekerjaan.show', $item->suratperjanjianpekerjaan->id) : '#';
                                                    if ($buttonText == 'LIHAT') {
                                                        $style = 'background-color: #16a34a; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    } else {
                                                        $style = 'background-color: #6b7280; color: white; padding: 4px 8px; font-size: 0.875rem; border-radius: 4px;';
                                                    }
                                                @endphp
                                                <a href="{{ $route }}">
                                                    <button style="{{ $style }}">
                                                        {{ $buttonText }}
                                                    </button>
                                                </a>
                                            </td>

                                            <td style="text-align: center">
                                                <a href="/resprofilpaketpekerjaan/{{$item->id}}">
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
