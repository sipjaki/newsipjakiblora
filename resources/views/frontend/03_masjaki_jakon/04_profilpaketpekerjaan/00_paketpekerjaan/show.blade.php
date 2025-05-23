

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
           <a href="/datajakon/profilpaketpekerjaan/" class="font-medium text-blue-600" style="font-size: 16px;">
             {{$title}}
           </a>
           <span>/</span>
           <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px; color:blue;">
             Data Details TKK
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
                     <span class="font-bold">Informasi Data: {{$data->namapekerjaan}}</span>
                 </p>
             </div>




             <form action="" class="flex flex-col gap-5 w-full" style="margin-top:-35px;">
                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full">

                    <!-- Badan Usaha -->
                    <div class="flex flex-col gap-2 w-full">
                        <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                            <!-- Icon Clipboard List -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5h6m-6 0a2 2 0 00-2 2v1h10V7a2 2 0 00-2-2m-6 0a2 2 0 012-2h2a2 2 0 012 2m4 4H5v10a2 2 0 002 2h10a2 2 0 002-2V9zM9 13h2m-2 4h2" />
                            </svg>
                            Nama Pekerjaan
                        </label>
                        <input type="text" class="focus:outline-none appearance-none font-medium leading-[30px]
                            placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
                            style="margin-top: -15px; font-family: Poppins;"
                            value="{{ $data->namapekerjaan }}" readonly>
                    </div>


                </div>

                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -50px;">

                    <!-- Badan Usaha -->
               <!-- Jenis Pekerjaan -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- Icon Briefcase -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 7V5a2 2 0 012-2h8a2 2 0 012 2v2m-2 0h4a2 2 0 012 2v2H2V9a2 2 0 012-2h4m0 0V5a2 2 0 012-2h4a2 2 0 012 2v2" />
        </svg>
        Jenis Pekerjaan
    </label>
    <input type="text" class="focus:outline-none appearance-none font-medium leading-[30px]
        placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        style="margin-top: -15px; font-family: Poppins;" value="{{$data->profiljenispekerjaan->jenispekerjaan}}" readonly>
</div>

<!-- Tahun Pelaksanaan -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- Icon Calendar -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Tahun Pelaksanaan
    </label>
    <input type="text" class="focus:outline-none appearance-none font-medium leading-[30px]
        placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        style="margin-top: -15px; font-family: Poppins;" value="{{$data->tahunpilihan->tahunpilihan}}" readonly>
</div>

<!-- Penyedia -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- Icon Office Building -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 21h18M9 10h.01M15 10h.01M9 14h.01M15 14h.01M4 17V5a1 1 0 011-1h14a1 1 0 011 1v12" />
        </svg>
        Penyedia
    </label>
    <input type="text" class="focus:outline-none appearance-none font-medium leading-[30px]
        placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        style="margin-top: -15px; font-family: Poppins;" value="{{$data->cvptpenyedia}}" readonly>
</div>

<!-- Nomor Induk Berusaha -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- Icon Document Text -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12h6m-6 4h6M7 8h10M4 6a2 2 0 012-2h12a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
        </svg>
        Nomor Induk Berusaha
    </label>
    <input type="text" class="focus:outline-none appearance-none font-medium leading-[30px]
        placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-md"
        style="margin-top: -15px; font-family: Poppins;" value="{{$data->nib}}" readonly>
</div>

                </div>



                <div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -50px;">

                    <!-- Badan Usaha -->
                <!-- Nilai Kontrak -->
                <div class="flex flex-col gap-2 w-full">
                    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 9c-3.866 0-7-1.79-7-4V9l7-4 7 4v4c0 2.21-3.134 4-7 4z" />
                    </svg>
                    Nilai Kontrak
                </label>
                <input type="text" readonly class="focus:outline-none appearance-none font-medium leading-[30px]
                placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
        style="margin-top: -15px; font-family: Poppins;"
        value="Rp. {{ number_format($data->nilaikontrak, 0, ',', '.') }}">
    </div>

<!-- Karakteristik Kontrak -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10" />
        </svg>
        Karakteristik Kontrak
    </label>
    <input type="text" readonly class="focus:outline-none appearance-none font-medium leading-[30px]
    placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
    style="margin-top: -15px; font-family: Poppins;"
    value="{{ $data->karakteristikkontrak }}">
</div>
<!-- Bulan Mulai -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- SVG Kalender -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Mulai
    </label>
    <input type="text" id="bulanMulai" data-bulan="{{ $data->bulanmulai }}" readonly
    class="focus:outline-none appearance-none font-medium leading-[30px]
    placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
    style="margin-top: -15px; font-family: Poppins;">
</div>

<!-- Bulan Selesai -->
<div class="flex flex-col gap-2 w-full">
    <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
        <!-- SVG Kalender -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
    </svg>
    Selesai
</label>
<input type="text" id="bulanSelesai" data-bulan="{{ $data->bulanselesai }}" readonly
class="focus:outline-none appearance-none font-medium leading-[30px]
placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
style="margin-top: -15px; font-family: Poppins;">
</div>




</div>

<div class="flex p-[14px_20px] border border-[#030303] rounded-[20px] gap-[10px] w-full" style="margin-top: -50px;">

               <!-- Dinas -->
               <div class="flex flex-col gap-2 w-full">
                <label class="font-semibold text-[#030303] flex items-center gap-2" style="font-family: Poppins;">
                    <!-- SVG Gedung / Dinas -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 21h18M9 21V9a1 1 0 011-1h4a1 1 0 011 1v12M9 6h6M10 11h4m-4 4h4" />
                    </svg>
                    Dinas
                </label>
                <input type="text" readonly class="focus:outline-none appearance-none font-medium leading-[30px]
                    placeholder:font-normal placeholder:text-[#545768] w-full resize-none p-3 border border-[#ccc] rounded-[15px]"
                    style="margin-top: -15px; font-family: Poppins;"
                    value="{{ $data->user->name }}">
            </div>

</div>





            </form>


            <div style="position: relative;">
                <button onclick="window.history.back();" class="px-3 py-2 text-white rounded-[15px] border border-slate-700 flex items-center gap-2"
                        style="background-color: #64748b; width: auto; position: absolute; right: 10px; font-family: 'Poppins', sans-serif; transition: all 0.3s ease;">
                    <!-- SVG Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m7 7l-7-7 7-7"/>
                    </svg>
                    Kembali
                </button>
            </div>

            <style>
                button {
                    border-radius: 15px; /* Ensure border radius */
                    background-color: #64748b; /* Initial background */
                    color: white; /* Initial text color */
                    border: 2px solid #64748b; /* Initial border color */
                    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease; /* Smooth transition */
                }

                button:hover {
                    background-color: white; /* Change background on hover */
                    color: black; /* Change text color on hover */
                    border-color: black; /* Change border color on hover */
                }
            </style>

         </div>
     </div>
 </section>



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
    document.addEventListener("DOMContentLoaded", function () {
        const bulanIndo = [
            '', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        function convertBulan(id) {
            const el = document.getElementById(id);
            const bulan = parseInt(el.dataset.bulan);
            el.value = bulanIndo[bulan] || 'Tidak Diketahui';
        }

        convertBulan('bulanMulai');
        convertBulan('bulanSelesai');
    });
</script>
