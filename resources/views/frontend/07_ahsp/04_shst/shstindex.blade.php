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

    </div>
  </div>


    </div>
  </div>

    <!-- Konten Data -->
    <div class="full-width-container mx-auto px-4 pb-10">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">

    {{-- --------------------------------------------------------------------------------------------------------------------------- --}}
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
    <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px; margin-top:10px;">
        <table class="zebra-table fl-table">
            <thead>
                <tr>
                    <th style="text-align:center; width:100px;" rowspan="2"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"></th>
                    <th style="text-align:center" colspan="2"> Harga Satuan Pembangunan Gedung Negara Per M2 (Meter Persegi)</th>
                    {{-- <th style="text-align:center" >View</th> --}}
                </tr>
                <tr>
                    <th style="text-align: center">Bangunan Tidak Sederhana</th>
                    <th style="text-align: center">Bangunan Sederhana</th>
                </tr>
            </thead>
            <tbody style="background: white">

                @foreach ($data as $item )
                <tr>
                    <td style="width:100px;"></td>
                    <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->bangunankantortidaksederhana, 0, ',', '.') }},00</td>
                    <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->bangunankantorsederhana, 0, ',', '.') }},00</td>
                </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
{{-- --------------------------------------------------------------------------------------------------------------------------- --}}


{{-- ------------------------------------------------------------------------------------------- --}}
<div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
    <table class="zebra-table fl-table">
        <thead>
            <tr>
                <th style="text-align:center: width:100px;" rowspan="3" ><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"></th>
                <th style="text-align:center" colspan="3">Harga Satuan Pembangunan Rumah Negara Per M2 (Meter Persegi)</th>
            </tr>
            <tr>
                <th style="text-align: center;">Rumah Negara Tipe A</th>
                <th style="text-align: center;">Rumah Negara Tipe B</th>
                <th style="text-align: center;">Rumah Negara Tipe C, D, E</th>
            </tr>
        </thead>
                        <tbody>
                            @foreach ($data as $item )
                            <tr>
                                <td style="width:100px;"></td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->rumahnegaratipea, 0, ',', '.') }},00</td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->rumahnegaratipeb, 0, ',', '.') }},00</td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->rumahnegaratipecde, 0, ',', '.') }},00</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
{{-- ------------------------------------------------------------------------------------------- --}}

                {{-- ========================================================================================= --}}
                <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                    <table class="zebra-table fl-table">
                        <thead>
                            <tr>
                                <th style="text-align:center; width:100px;" rowspan="3"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"></th>
                                <th style="text-align:center" colspan="3">Harga Satuan Pembangunan Pagar Gedung Negara Per M1 (Meter Lari)</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Pagar Depan M1 (Meter Lari) Rupiah</th>
                                <th style="text-align: center;">Pagar Belakang M1 (Meter Lari) Rupiah</th>
                                <th style="text-align: center;">Pagar Samping M1 (Meter Lari) Rupiah</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item )
                            <tr>
                                <td style="width:100px;"></td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahdepan, 0, ',', '.') }},00</td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahbelakang, 0, ',', '.') }},00</td>
                                <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahsamping, 0, ',', '.') }},00</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- ========================================================================================= --}}


            {{-- ========================================================================== --}}
            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:50px;">
                <table class="zebra-table fl-table">
                    <thead>
                        <tr>
                            <th style="text-align:center; width:100px;" rowspan="3"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"></th>
                            <th style="text-align:center" colspan="3">Harga Satuan Pembangunan Pagar Rumah Negara Per M1 (Meter Lari) </th>
                        </tr>
                        <tr>
                            <th style="text-align: center">Pagar Depan Rumah Negara M1 (Meter Lari) Rupiah</th>
                            <th style="text-align: center">Pagar Samping Rumah Negara M1 (Meter Lari) Rupiah</th>
                            <th style="text-align: center">Pagar Belakang Rumah Negara M1 (Meter Lari) Rupiah</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item )
                        <tr>
                            <td style="width:100px;"></td>
                            <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahnegaradepan, 0, ',', '.') }},00</td>
                            <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahnegarabelakang, 0, ',', '.') }},00</td>
                            <td style="text-align: center; font-weight:bold; font-size:18px;">{{ 'Rp ' . number_format($item->pagarrumahnegarasamping, 0, ',', '.') }},00</td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- ========================================================================== --}}
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


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
