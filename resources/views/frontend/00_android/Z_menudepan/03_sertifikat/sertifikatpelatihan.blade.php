@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama1.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">
                <nav class="pt-5 px-3 flex justify-between items-center">
                    <!-- Logo bagian kiri -->
                    <div class="flex items-center gap-[10px]">
                        <a href="index.html" class="w-10 h-10 flex shrink-0">
                            <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                        </a>
                    </div>

                    <!-- Judul bagian tengah -->
                    <div class="flex flex-col items-center justify-center text-center">
                        <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                        <br>
                        {{-- <p class="font-semibold text-xl text-white">{{$title}}</p> --}}
                      <div class="z-10" style="margin-top:25px; background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
            <h1 class="font-bold leading-[36px] text-center" style="color: black; font-size:20px;">
                {{$title}}
            </h1>
        </div>
                    </div>

                    <!-- Ikon bagian kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                    </a>
                </nav>
            </div>

                    <div class="flex flex-col gap-4 px-4" style="margin-top:-100px;">

                            <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                                <div class="flex justify-center px-4 mt-[-150px]">

<div class="flex items-center justify-center min-h-screen bg-gray-50 p-4">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md overflow-hidden border-2 border-green-500"> <!-- Border hijau ditambahkan -->
    <div class="bg-green-600 py-4 px-6"> <!-- Warna diubah jadi hijau -->
      <h1 class="text-xl font-bold text-white text-center">Masukkan NIK dan Cek Sertifikat</h1> <!-- Redaksi diubah -->
    </div>

    <div class="p-6 space-y-4">
      <p class="text-gray-600 text-center text-sm">
        Gunakan Nomor Induk Kependudukan untuk mengecek sertifikat Anda
      </p>

      <div class="bg-green-50 border-l-4 border-green-400 p-3 mb-4"> <!-- Warna diubah jadi hijau -->
        <p class="text-green-700 text-sm flex items-center">
          <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"></path>
          </svg>
          Contoh: 3201234567890123
        </p>
      </div>

      <div class="flex">
        <input
          type="text"
          placeholder="Masukkan NIK Anda"
          class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none"
        />
        <button
          class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-r-lg font-medium transition duration-200"
        >
          Cek
        </button>
      </div>
    </div>
  </div>
</div>


                            <div class="flex flex-col gap-1">

                            </div>
                            </div>
                            </a>



                            </div>
                            </div>
                            </a>


                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
