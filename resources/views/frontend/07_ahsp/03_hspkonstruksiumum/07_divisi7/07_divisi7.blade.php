<style>
    /* file: resources/css/custom.css atau langsung di style tag */
.full-width-container {
  max-width: 80% !important;
  width: 80%;
  margin-top: 10px;
}

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.zebra-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.zebra-table th,
.zebra-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.zebra-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }

        body {
          font-family: 'Poppins', sans-serif;
        }


        .btn-navy {
        background-color: #001f3f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        cursor: default;
        transition: all 0.3s ease;
    }

    .btn-navy:hover {
        background-color: white;
        color: black;
        border: 1px solid #001f3f;
    }

</style>

{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

<!-- Wrapper Background Section -->
<section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">

<!-- Breadcrumb + Search Bar -->
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

      <!-- KIRI: Gambar + Breadcrumb -->
      <div class="flex items-center gap-4">
        <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" />
        <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
          <span>/</span>
          <a href="/datajakon/bujkkontraktor" class="font-medium text-blue-600" style="font-size: 16px;">
            {{$title}}
          </a>
          <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium text-black" style="font-size: 16px;">
            Data Statistik
          </a>
        </div>
      </div>


      <!-- KANAN: Search Bar -->
   <!-- Search Bar Wrapper -->
<div class="w-full sm:w-auto">
    <div class="flex items-center gap-2 px-3 py-2 bg-white rounded-xl border border-gray-300 w-full sm:w-[260px] focus-within:ring-2 focus-within:ring-[#6635F1] transition-all duration-300">

      <!-- Input -->
      <input
        type="text"
        id="searchInput"
        placeholder="Cari Data ..."
        oninput="searchTable()"
        class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent font-[Poppins]"
      />

      <!-- Button with SVG Icon -->
      <button onclick="searchTable()" class="flex items-center justify-center w-6 h-6 shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#545768" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>

    </div>
  </div>


    </div>
  </div>

    <!-- Konten Data -->
    <div class="full-width-container mx-auto px-4 pb-10">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
            <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                <div style="width: 100%; max-width: 500px;"> <!-- Optional max-width buat tampilan elegan -->
                    <button type="button" style="
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        gap: 10px;
                        padding: 12px 20px;
                        font-size: 16px;
                        font-family: 'Poppins', sans-serif;
                        border: 1px solid #28a745;
                        background-color: #28a745;
                        color: white;
                        border-radius: 6px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        width: 100%;
                    "
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                    >
                        <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                        {{ $title }}
                    </button>
                </div>
            </div>

            <div class="table-wrapper">


                <table class="zebra-table fl-table" id="sortableTable" style="margin-top: 15px; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:80px;"> No </th>
                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; "> Kode AHSP </th>
                            <th onclick="sortTable(7)" style="cursor:pointer; text-align:center; "> Jenis Pekerjaan </th>
                            <th onclick="sortTable(7)" style="cursor:pointer; text-align:center; "> Satuan </th>
                            <th onclick="sortTable(6)" style="cursor:pointer; text-align:center; "> Rp </th>
                            <th onclick="sortTable(8)" style="cursor:pointer; text-align:center; "> Harga Satuan </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp
                        @if($data->isEmpty())
                            <tr>
                                <td colspan="6" style="text-align: center; color: red;">Data Tidak Ditemukan !</td>
                            </tr>
                        @else
                            @foreach ($data as $item)
                            <tr>
                                <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                <td style="text-align: center;">
                                    @if(optional($item->hspdivisi)->id || optional($item->hsppaket)->id || optional($item->hspkodepekerjaan)->kodepekerjaan || $item->kode)
                                        {{ optional($item->hspdivisi)->id }}.
                                        {{ optional($item->hsppaket)->id }}.
                                        {{ optional($item->hspkodepekerjaan)->kodepekerjaan }}.
                                        {{ $item->kode }}
                                    @else
                                        <button class="btn-navy">Data Belum Diupdate</button>
                                    @endif
                                </td>
                                <td style="text-align: left;">
                                    @if(!empty($item->id))
                                        <a href="javascript:void(0);" style="color: blue; text-decoration: none;" onclick="redirectToPage('{{ $item->id }}')">
                                            {{ $item->jenispekerjaan ?? '-' }}
                                        </a>
                                    @else
                                        <button class="btn-navy">Data Belum Diupdate</button>
                                    @endif
                                </td>
                                <td style="text-align: center;">
                                    @if(!empty($item->satuanmaterial))
                                        {{ $item->satuanmaterial }}
                                    @else
                                        <button class="btn-navy">Data Belum Diupdate</button>
                                    @endif
                                </td>
                                <td style="text-align: center;">Rp</td>
                                <td style="text-align: right;">
                                    @if(!empty($item->hargasatuan))
                                        {{ number_format((float) $item->hargasatuan, 0, ',', '.') }},-
                                    @else
                                        <button class="btn-navy">Data Belum Diupdate</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>

            </div>

            @include('frontend.00_approve.01_cssterpisah.paginations')
        </div>
    </div>
    <br><br><br>

</section>


<div class="progress-wrap">
          <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
          </svg>
      </div>
      <!-- back to top end -->

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

          fetch(`/hspdivisi7?search=${input}`)
            .then(response => response.text())
            .then(html => {
              let parser = new DOMParser();
              let doc = parser.parseFromString(html, "text/html");
              let newTableBody = doc.querySelector("#tableBody").innerHTML;
              document.querySelector("#tableBody").innerHTML = newTableBody;
            })
            .catch(error => console.error("Error fetching search results:", error));
        }

        function redirectToPage(id) {
            if (!id) { // Pastikan ID tidak kosong
                alert("ID tidak valid!");
                return;
            }
            window.location.href = "/satuanhargadivisi7/" + encodeURIComponent(id);
        }
    </script>



@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')

