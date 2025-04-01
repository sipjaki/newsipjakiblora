@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] -mb-[181px]" style="background: linear-gradient(to bottom, #28A745, #FFD100);">
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
                        <p class="font-semibold text-xl text-white">{{$title}}</p>
                    </div>

                    <!-- Ikon bagian kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                    </a>
                </nav>
            </div>

                    <div class="flex flex-col gap-4 px-4">
                        <br><br>

                        <a href="/" class="card">
                            <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                                <div class="w-16 h-[60px] flex shrink-0 rounded-2xl overflow-hidden">
                                    <img src="/assets/icon/pupr.png" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                                </div>

                            <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none" style="color: black;">Satuan Harga Material</p>
                        </p>

                            </div>
                            </div>
                            </a>

                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
