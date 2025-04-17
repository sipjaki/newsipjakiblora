

<style>
   .btn-suspend {
        background-color: orange;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-expired {
        background-color: red;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn-active {
        background-color: green;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
    }

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
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px; color:blue;">
            Data Details BUJK Konstruksi
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



  <section id="details" class="container mx-auto flex flex-col sm:flex-row gap-5" style="margin-top:20px;">
    <div class="flex flex-col gap-5 w-full" style="margin-top: -50px;">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] w-full">
            <div class="flex justify-center">
                <img src="/assets/abgblora/logo/iconabgblora.png" alt="" width="15%" style="margin-top: -25px; margin-bottom:-25px;">
            </div>

            <div class="w-full flex items-center gap-[10px] p-[10px_14px] rounded-xl" style="margin-top:-40px; background: #189200;">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="/assets/new/icons/story.svg" alt="icon">
                </div>
                <p class="text-white font-normal text-sm" style="font-family: Poppins;">
                    <span class="font-bold">Informasi Data: {{$data->namalengkap}}</span>
                </p>
            </div>


            <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Badan Usaha
                    </label>
                    <input
                        style="margin-top: -15px; font-family: Poppins;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{$data->namalengkap}}"
                        readonly
                    >
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        No Telepon
                    </label>
                    <input
                        style="margin-top: -15px; font-family: Poppins;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{$data->no_telepon}}"
                        readonly
                    >
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Email
                    </label>
                    <input
                        style="margin-top: -15px; font-family: Poppins;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{$data->email}}"
                        readonly
                    >
                </div>

                <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Nomor Induk Berusaha
                    </label>
                    <input
                        style="margin-top: -15px; font-family: Poppins;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{$data->nomorindukberusaha}}"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->

                </div>

                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -50px;">
                 <!-- Nama Bangunan -->
                 <div class="flex flex-col gap-2 w-full">
                    <label for="namabangunan" class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Building Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M9 8h6M9 12h6M9 16h6M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16" />
                        </svg>
                        Alamat Badan Usaha
                    </label>
                    <input
                        style="margin-top: -15px; font-family: Poppins;"
                        type="text"
                        class="focus:outline-none appearance-none font-medium leading-[30px] placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
                        value="{{$data->alamat}}"
                        readonly
                    >
                </div>

                    <!-- Luas Tanah -->

                </div>


            </form>
        </div>
    </div>
</section>


            <div class="table-wrapper" style="margin-top: -80px;">

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
                            <th style="text-align:center" style="color: black">Status</th>
                            </tr>
                    </thead>
                    <tbody>

                        @foreach ($subData as $item)
                        <tr>
                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                            <td>{{ $item->sub_klasifikasi_layanan ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td>{{ $item->kode ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td>{{ $item->kualifikasi ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td>{{ $item->penerbit ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td>{{ $item->tanggal_terbit ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td>{{ $item->masa_berlaku ?? 'Belum Memenuhi Persyaratan' }}</td>
                            <td class="masa-berlaku" data-masaberlaku="{{ $item->masa_berlaku ?? '' }}">
                                <button class="btn-masa-berlaku">Status</button>
                            </td>
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


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const today = new Date(); // Dapatkan tanggal hari ini
        const masaBerlakuElements = document.querySelectorAll('.masa-berlaku'); // Pilih semua td yang memiliki kelas masa-berlaku

        masaBerlakuElements.forEach(function (element) {
            const masaBerlaku = element.getAttribute('data-masaberlaku'); // Ambil data masa berlaku
            const button = element.querySelector('.btn-masa-berlaku'); // Ambil tombol di dalam td

            // Cek jika masa berlaku kosong
            if (!masaBerlaku || masaBerlaku === '') {
                button.classList.add('btn-suspend'); // Tambahkan class untuk suspend
                button.textContent = 'SUSPEND';
            } else {
                const masaBerlakuDate = new Date(masaBerlaku); // Jika ada, ubah menjadi tanggal

                // Cek jika masa berlaku sudah lewat
                if (masaBerlakuDate < today) {
                    button.classList.add('btn-expired'); // Warna merah jika tidak berlaku
                    button.textContent = 'TIDAK BERLAKU';
                } else {
                    button.classList.add('btn-active'); // Warna hijau jika masih berlaku
                    button.textContent = 'BERLAKU';
                }
            }
        });
    });
</script>
