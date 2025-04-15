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


<body>

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

    <section id="breadcrumb" class="container max-w-[1130px] mx-auto" style="margin-top: 160px;" >
        <div class="flex items-center gap-[20px]">
            <!-- Gambar di kiri -->
            <img src="/assets/abgblora/logo/iconabgblora.png" alt="Logo" class="w-[60px] -my-[15px]" width="10%" style="margin-right: 20px; margin-bottom:10px;" >

            <!-- Breadcrumb di kanan -->
            <div class="flex gap-[30px] items-center flex-wrap">
                <span>/</span>
                <a href="/" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: blue;">
                    {{$title}}
                </a>
                <span>/</span>
                <a href="/statistikbg" class="last-of-type:font-bold transition-all duration-300 text-blue-600" style="color: black;">
                    Data Statistik
                </a>
            </div>
        </div>

        <!-- Search Bar Section -->
        <div class="flex justify-end w-full sm:w-auto mb-2">
            <div class="flex items-center gap-1.5 px-3 py-1 bg-white rounded-xl border border-gray-300 w-full sm:w-[260px] focus-within:ring-2 focus-within:ring-[#6635F1] transition-all duration-300">
                <input
                    type="text"
                    id="searchInput"
                    placeholder="Cari data..."
                    oninput="searchTable()"
                    class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent"
                />
                <button onclick="searchTable()" class="flex items-center justify-center w-7 h-7 shrink-0 ml-2">
                    <img src="/assets/new/icons/search.svg" alt="icon" class="w-4 h-4" />
                </button>
            </div>
        </div>
    </section>

    <section id="details" class="container full-width-container mx-auto flex flex-col sm:flex-row sm:flex-nowrap gap-5">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
            <div class="table-wrapper">
                <table class="zebra-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Badan Usaha</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($data as $item)
                        <tr>
                            <td style="text-align: center;">{{ $data->firstItem() + $loop->iteration - 1 }}</td>
                            <td>{{ $item->namalengkap ?? 'Data Tidak Ditemukan' }}</td>
                            <td>
                                @if(!empty($item->no_telepon))
                                    {{ $item->no_telepon }}
                                @else
                                    <button class="btn-navy">Data Belum Diupdate</button>
                                @endif
                            </td>
                            <td>
                                @if(!empty($item->email))
                                    {{ $item->email }}
                                @else
                                    <button class="btn-navy">Data Belum Diupdate</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            @include('frontend.00_approve.01_cssterpisah.paginations')
        </div>
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

          fetch(`/datajakon/bujkkontraktor?search=${input}`)
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


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
