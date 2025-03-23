<style>
    /* Import font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

/* Wrapper untuk tabel */
.table-wrapper {
overflow-x: auto;
max-width: 100%;
padding: 10px;
}

/* Style dasar tabel */
.fl-table {
width: 100%;
border-collapse: collapse;
font-family: 'Poppins', sans-serif; /* Font modern pemerintah */
font-size: 14px;
background: #fff; /* Tetap netral */
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
border-radius: 8px;
overflow: hidden;
}

/* Header styling */
.fl-table thead {
background: #ffd100;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 0.5px;
color: black;
}

.fl-table th,
.fl-table td {
padding: 12px 15px;
text-align: left;
border-bottom: 1px solid #ddd;
font-size: 18px;
}

/* Hover effect */
.fl-table tbody tr:hover {
background: rgba(0, 0, 0, 0.05);
}

/* Responsive styling */
@media (max-width: 768px) {
.fl-table thead {
display: none; /* Sembunyikan header di tampilan kecil */
}

.fl-table tr {
display: block;
margin-bottom: 10px;
border: 1px solid #ddd;
border-radius: 5px;
overflow: hidden;
}

.fl-table td {
display: block;
text-align: right;
font-size: 14px;
border-bottom: 1px solid #eee;
position: relative;
padding-left: 50%;
}

.fl-table td::before {
content: attr(data-label);
position: absolute;
left: 10px;
width: 45%;
font-weight: 600;
text-align: left;
}
}

/* Style untuk ikon view */
.register-icon {
color: #4CAF50;
cursor: pointer;
font-size: 18px;
}

.register-icon:hover {
color: #adb6ad;
}


            .badgekembali {
                background: linear-gradient(to right, white, green);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }
</style>

{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')


<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">

	<section class="page-banner">
		<div class="container">
			<div class="page-banner-title">
				<h3 style="color: black; font-size:30px;">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->

    {{-- <section class="service-two-section" > --}}
        {{-- <section class="service-two-section" style="background-image: url('/assets/00_dokmasjaki/03_datajakon/banner1.jpg');">
        <div class="container"
                style="
                background: #FFD100;
                max-width: 95%;
                margin: 30px auto;
                padding: 20px;
                height: auto;
                border-radius: 20px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                position: relative;
                z-index: 10;">
            <div class="row row-gutter-y-40">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="service-two-card">
                        <div class="service-two-imgbox">
                             --}}
                             <section class="donate-section" style="background-image: url(/assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
                                <div class="container" style="
                                background: white;
                                max-width: 95%;
                                margin: 30px auto;
                                padding: 20px;
                                height: auto;
                                border-radius: 20px;
                                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                                position: relative;
                                z-index: 10;">
                                    <div class="row row-gutter-30">

                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="donate-box-inner">


                                                {{-- TABLE DATA  --}}

                        </head>

                        <section class="document-section" style="margin-top: -100px;">
                            <div class="container" style="max-width: 95%">
                              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                  {{-- <img src="/assets/icon/logopupr.png" class="img-fluid" alt="img-25" width="50" style="margin-right: 20px;" loading="lazy"> --}}

                                  {{-- <br><p style="font-size: 16px; color:black;">Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora</p> --}}
                                  <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                      <!-- Tombol di kiri -->
                                      <a href="#" style="background: white;">
                                          <button class="badgekembali" style="border: none; font-size: 12px; cursor: pointer;">
                                            <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                            <i class="fas fa-edit mr-2" style="margin-right: 10px; color:#ffd100;"></i> <span style="text-transform: uppercase; color:black; font-size:20px;">{{$title}}</span>
                                        </button>
                                    </a>

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
                                    <div class="pagination-info-box" style="margin-right:300px; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px;">
                                        <div class="pagination-info" style="color: black; font-weight: 500; font-size:20px;">
                                            Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                        </div>
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


                                    <div style="position: relative; display: inline-block; margin-right:10px;">
                                        {{-- <label for="">Cari Kegiatan</label> --}}
                                        <input type="search" id="searchInput" placeholder="Cari Kegiatan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                                        <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                                    </div>

                                </div>

                                <table class="fl-table" id="sortableTable" style="margin-top: 15px; width: 100%; border-collapse: collapse;">
                                    <thead>
                                            <tr>
                                                <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:500px;"> Nama Kegiatan <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; width:500px;"> Keterangan <span class="sort-icon">⇅</span></th>
                                                <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:500px;"> Penyelenggara <span class="sort-icon">⇅</span></th>
                                                <th style="text-align:center; width:100px;"> View Peserta </th>
                                            </tr>

                                    </thead>

                                    <tbody id="tableBody">
                                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                                        @foreach ($data as $item )
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td>{{$item->namakegiatan}}</td>
                                            <td>{{$item->keterangan}}</td>
                                            <td>{{$item->penyelenggara}}</td>
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
                                                    <a href="/daftarpesertaskks/{{$item->namakegiatan}}" style="color: inherit; text-decoration: none;">
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

                                <div class="pagination-container" style="margin-top: 50px; display: flex; flex-direction: column; align-items: center;">
                                    <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
                                        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}">
                                                <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                                            </a>
                                        </li>
                                        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}">
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
//                             function filterByYear() {
//     let selectedYear = document.getElementById("yearFilter").value;

//     fetch(`/datajakon/bujkkontraktor?year=${selectedYear}`)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error(`HTTP error! Status: ${response.status}`);
//             }
//             return response.text();
//         })
//         .then(html => {
//             let parser = new DOMParser();
//             let doc = parser.parseFromString(html, "text/html");
//             let newTableBody = doc.querySelector("#tableBody");
//             let currentTableBody = document.querySelector("#tableBody");

//             if (newTableBody && currentTableBody) {
//                 currentTableBody.innerHTML = newTableBody.innerHTML;
//             } else {
//                 console.error("Element #tableBody not found in response or current document.");
//             }
//         })
//         .catch(error => console.error("Error fetching filtered results:", error));
// }


                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/daftarpesertaskk?search=${input}`)
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



                        {{-- </div><!-- service-two-imgbox -->
                    </div><!--service-two-card-->
                </div><!--col-12 col-lg-4 col-xl-4-->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- service-two-section --> --}}





</div><!--page-wrapper-->
@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
