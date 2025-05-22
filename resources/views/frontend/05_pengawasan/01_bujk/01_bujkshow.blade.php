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

         <section class="department-details-section" style="margin-top: -200px;">
		<div class="container" style="margin-top: -100px;">
			<div class="row">
                {{-- ------------------------------------------------------------------------------------------ --}}
                <div class="col-lg-12">
                        <div class="document-details">
							<div class="document-details-list">

                                <div class="centered-button" style="display: flex; justify-content: space-between; align-items: center; margin-top: 0px;">
                                    <!-- Tombol di kiri -->
                                    <button class="green-button">
                                        <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 10px;" loading="lazy">
                                        <i class="fas fa-file mr-2" style="margin-right: 5px;"></i>
                                        <span style="color: black;">{{$title}} : {{$data->kodeproyek}}</span>
                                    </button>

                                    <!-- Tombol di kanan -->
                                    <a href="/pengawasanbujk">
                                        <button class="badgekembali">
                                            <i class="fas fa-arrow-circle-left" style="margin-right: 5px; color:red;"></i> KEMBALI
                                        </button>
                                    </a>
                                </div>



                                                        {{-- TABLE DATA  --}}
                                        </head>

                    <body>
                    <div class="table-wrapper" style="margin-top: 15px;">
                    <!-- Add this inside your HTML <head> for FontAwesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<table  id="datakeluar" class="fl-table" style="width: 100%; border-collapse: collapse" class="fl-table">
    <thead>

        <tr>
            <th style="text-align:center; color: white; width:50px; background-color: #2e7d32;">
                <!-- Add your icon here -->
                <i class="fas fa-info-circle"></i>
            </th>
            <th colspan="11" style="text-align:left; color: white; background-color: #2e7d32; padding-left: 10px; width:300px;">
                Informasi
            </th>
            <th colspan="1" style="text-align:center; color: white; background-color: #2e7d32; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: #2e7d32; padding-left: 10px; color: white; width:1000px;">
                Keterangan
            </td>
        </tr>
        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <!-- Add your icon here with consistent size and margin -->
                <i class="fas fa-info-circle" style="font-size:20px; margin-right:8px;"></i>
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Kode Proyek
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->kodeproyek}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-user" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to user -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nama Pemilik Perusahaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->namaperusahaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-map-marker-alt" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to location -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Alamat Perusahaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->alamatperusahaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-cogs" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to settings -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Status Modal
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->statusmodal}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-building" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to building -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Jenis Perusahaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->jenisperusahaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-id-card" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to ID card -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nomor Induk Berusaha (NIB)
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->nib}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-code" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to code -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                KBLI
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->kbli}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-list" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to list for KBLI description -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Uraian KBLI
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->uraiankbli}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-industry" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to industry for sector -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Sektor
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->sektor}}
            </td>
        </tr>

        {{-- <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-map-marked-alt" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to map marker for project address -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Alamat Proyek
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->alamatproyek}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-globe" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to globe for region -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Wilayah
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->wilayah}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-home" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to home for land area -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Luas Tanah
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->luastanah}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-male" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to male for male TKI -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                TKI Laki Laki
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->tki_lakilaki}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-female" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to female for female TKI -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                TKI Perempuan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->tki_perempuan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-mars" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to mars for male TKA -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                TKA Laki Laki
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->tka_lakilaki}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-venus" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to venus for female TKA -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                TKA Perempuan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->tka_perempuan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-exclamation-circle" style="font-size:20px; margin-right:8px;"></i> <!-- Changed icon to exclamation-circle for risk -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Resiko
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->resiko}}
            </td>
        </tr> --}}
        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-database" style="font-size:20px; margin-right:8px;"></i> <!-- Database icon for Sumber Data -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Sumber Data
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->sumberdata}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-database" style="font-size:20px; margin-right:8px;"></i> <!-- Database icon for Sumber Data -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Nilai Investasi
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{ "Rp " . number_format($data->investasi, 0, ',', '.') }}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-building" style="font-size:20px; margin-right:8px;"></i> <!-- Building icon for Skala Usaha Perusahaan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Skala Usaha Perusahaan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->skalausahaperusahaan}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-cogs" style="font-size:20px; margin-right:8px;"></i> <!-- Cogs icon for Skala Usaha Proyek -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Skala Usaha Proyek
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->kewenangankoordinator}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-eye" style="font-size:20px; margin-right:8px;"></i> <!-- Eye icon for Pengawasan -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Pengawasan
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->kewenanganpengawas}}
            </td>
        </tr>

        <tr>
            <th style="text-align:center; color: black; width:50px; background-color: white;">
                <i class="fas fa-bullhorn" style="font-size:20px; margin-right:8px;"></i> <!-- Bullhorn icon for Program Strategis Nasional -->
            </th>
            <th colspan="11" style="text-align:left; color: black; background-color: white; padding-left: 10px; width:300px;">
                Program Strategis Nasional
            </th>
            <th colspan="1" style="text-align:center; color: black; background-color: white; width:25px;">:</th>
            <td colspan="12" style="text-align:left; background-color: white; padding-left: 10px; color: black; width:1000px;">
                {{$data->PSN}}
            </td>
        </tr>


    </thead>
</table>


<div class="container-fluid" style="justify-content: right; margin-top:20px;">

</div>

                    </div>
                                                </div><!-- document-details-list -->

                                            </div><!-- document-details -->
                                        </div><!-- document-details-inner -->


                                    </div><!-- col-lg-8 -->
                                </div><!-- row -->
                            </div><!-- container -->
                        </div><!--page-wrapper-->
                    </div><!--page-wrapper-->
                </div><!--page-wrapper-->
            </div><!--page-wrapper-->
        </div><!--page-wrapper-->
    </section><!-- department-details-section -->



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

          fetch(`/pengawasanbujk?search=${input}`)
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
