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
          <a href="/datajakon/asosiasimasjaki" class="font-medium" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
          <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px;">
            Data Statistik
          </a>
        </div>
      </div>


      <!-- KANAN: Search Bar -->
   <!-- Search Bar Wrapper -->

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
                <table class="zebra-table w-full">
                    <thead>
                        <tr>
                            <th style="text-align: center; width:75px">No</th>
                            <th style="text-align: center; width:400px">Nama Asoiasi</th>
                            <th style="text-align: center; width:200px">BUJK Konstruksi</th>
                            <th style="text-align: center; width:200px">BUJK Konsultasi Konstruksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($data as $item)
                        <tr>
                            {{-- Nomor Urut --}}
                            <td class="text-center">{{ $loop->iteration }}</td>

                            {{-- Nama Asosiasi --}}
                            <td class="text-center">
                                @if (!empty($item['nama_asosiasi']))
                                    {{ strtoupper($item['nama_asosiasi']) }}
                                @else
                                    <button style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px;">0</button>
                                @endif
                            </td>

{{-- Jumlah Penggunaan 1 --}}
<td class="text-center">
    @if (!empty($item['jumlah_penggunaan1']) && $item['jumlah_penggunaan1'] != 0)
        <a href="/datajakon/asosiasikonstruksi/{{ urlencode($item['nama_asosiasi']) }}"
           style="background-color: navy; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; text-decoration: none;"
           onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
           onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
           {{ $item['jumlah_penggunaan1'] }}
        </a>
    @else
        <button
            style="background-color: red; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; text-decoration: none; cursor: not-allowed;"
            disabled
            title="Data Belum Tersedia">
            0
        </button>
    @endif
</td>

{{-- Jumlah Penggunaan 2 --}}
<td class="text-center">
    @if (!empty($item['jumlah_penggunaan2']) && $item['jumlah_penggunaan2'] != 0)
        <a href="/datajakon/asosiasikonsultan/{{ urlencode($item['nama_asosiasi']) }}"
           style="background-color: navy; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; text-decoration: none;"
           onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
           onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
           {{ $item['jumlah_penggunaan2'] }}
        </a>
    @else
        <button
            style="background-color: red; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block; text-decoration: none; cursor: not-allowed;"
            disabled
            title="Data Belum Tersedia">
            0
        </button>
    @endif
</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            {{-- @include('frontend.00_approve.01_cssterpisah.paginations') --}}
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

          fetch(`/datajakon/asosiasimasjaki?search=${input}`)
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
