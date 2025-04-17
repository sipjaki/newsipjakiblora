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
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins" sty>
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

      <!-- KIRI: Gambar + Breadcrumb -->
      <div class="flex items-center gap-4">
        <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" />
        <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
          <span>/</span>
          <a href="/datajakon/bujkkontraktor" class="font-medium text-blue-600" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
          {{-- <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px;">
            Data Statistik
          </a> --}}
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

            <section class="portfolio-details">
                <div class="container" style="margin-top: -200px;">
                    <div class="portfolio-details-content">
                        {{-- <div class="portfolio-details-content-title">
                            <h3>Tupoksi DPUPR Pemerintah Kabupaten Blora</h3>
                        </div><!-- portfolio-details-content-title --> --}}


        <div style="background-color: #f9f9f9; padding: 30px; border-radius: 10px; max-width: 90%; margin: auto; font-family: 'Poppins', sans-serif;">
            <!-- Header -->
            <div style="background-color: #FFD100; padding: 15px; border-radius: 10px 10px 0 0; text-align: center; font-weight: 600; font-size: 22px;">
               <span style="font-family: 'Poppins', sans-serif;"> DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH</span>
            </div>

            <!-- Konten Tupoksi -->
            <div style="background-color: white; padding: 20px; border-radius: 0 0 10px 10px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                @foreach ($data as $item)
                <h3 style="color: #2E7D32; text-align: center; font-weight: 600; font-size: 24px; margin-bottom: 20px;"><span style="font-family: 'Poppins', sans-serif;">{{$item->judul}}</span></h3>
                @endforeach

                <ul style="padding-left: 20px; list-style-type: none; font-size: 16px;">
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Penyusunan Program:</strong> Rencana kerja dan kegiatan bina jasa konstruksi sebagai pedoman kerja tahunan.
                    </li>
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Kebijakan Teknis:</strong> Menyusun bahan kebijakan sesuai peraturan perundang-undangan sebagai kajian pimpinan.
                    </li>
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Sistem Informasi:</strong> Pelaksanaan sistem informasi jasa konstruksi untuk efisiensi.
                    </li>
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Pengawasan & Pembinaan:</strong> Pengembangan badan usaha, pasar jasa konstruksi, dan evaluasi penyelenggaraan.
                    </li>
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Penyuluhan & Bimtek:</strong> Melakukan pelatihan, penyuluhan, dan bimtek terkait jasa konstruksi.
                    </li>
                    <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                        <strong style="font-family: 'Poppins', sans-serif;">📌 Laporan & Evaluasi:</strong> Monitoring dan evaluasi kegiatan pembinaan sebagai wujud transparansi.
                    </li>
                </ul>
            </div>
        </div>

        <div class="portfolio-details-content-text">

            @foreach ($data as $item)

            <p style="text-align: justify; font-family: 'Poppins', sans-serif;" >
                {!!$item->keterangan!!}
            </p>

            @endforeach
        </div>
                    </div><!-- portfolio-details-content -->
                </div><!-- container -->
            </section><!-- portfolio-details -->


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
