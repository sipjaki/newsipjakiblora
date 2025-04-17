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



  <section id="details" class="container mx-auto flex flex-col sm:flex-row gap-5" style="margin-top:20px;">
    <div class="flex flex-col gap-5 w-full" style="margin-top: -50px;">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="flex justify-center">
                <img src="/assets/abgblora/logo/iconabgblora.png" alt="" width="15%" style="margin-top: -25px; margin-bottom:-25px;">
            </div>

            <div class="w-full bg-[#030303] flex items-center gap-[10px] p-[10px_14px] rounded-xl" style="margin-top:-40px;">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm">
                    <span class="font-bold">Informasi Bangunan Gedung </span>
                </p>
            </div>

            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Nama Bangunan
                    </label>
                    <input
                        style="margin-top: -15px;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="Gedung Kantor"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Ruler icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4V4zm4 4h8v8H8V8z" />
                            </svg>
                            <span class="text-sm">Luas Tanah (m²)</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="2.350 m²"
                            readonly
                        >
                    </div>

                    <!-- Jumlah Lantai -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Layers (floor) icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l9 5-9 5-9-5 9-5zm0 10l9 5-9 5-9-5 9-5z" />
                            </svg>
                            <span class="text-sm">Jumlah Lantai</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="2 Lantai"
                            readonly
                        >
                    </div>


                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2">
                            <!-- Icon: Office Building -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 21h18M9 8h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm">Fungsi Bangunan</span>
                        </label>
                        <input
                            style="margin-top: -15px;"
                            type="text"
                            class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                            value="Fungsi Sosial Dan Budaya"
                            readonly
                        >
                    </div>

                </div>


            </form>
        </div>
    </div>
</section>


            <div class="table-wrapper">

                <table class="zebra-table fl-table">
                    <thead>
                        <tr>
                            {{-- <th style="text-align:center" >No</th> --}}
                            <th style="text-align:center" style="color: black" >No</th>
                            <th style="text-align:center" style="color: black" >Sub Klasifikasi Layanan</th>
                            <th style="text-align:center" style="color: black" >Kode</th>
                            <th style="text-align:center" style="color: black" >Kualifikasi</th>
                            <th style="text-align:center" style="color: black">Penerbit</th>
                            <th style="text-align:center" style="color: black">Tanggal Terbit</th>
                            <th style="text-align:center" style="color: black">Masa Berlaku</th>
                            </tr>
                    </thead>
                    <tbody>

                    @foreach ($subData as $item)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                        {{-- <td>{{$item->nama_pengurus}}</td> --}}
                        <td>{{$item->sub_klasifikasi_layanan}}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->kualifikasi}}</td>
                        <td>{{$item->penerbit}}</td>
                        <td>{{$item->tanggal_terbit}}</td>
                        <td>{{$item->masa_berlaku}}</td>
                        {{-- <td>{{$item->nama_psjk}}</td> --}}
                        {{-- <td>{{$item->sub_kualifikasi_bu}}</td> --}}
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

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
