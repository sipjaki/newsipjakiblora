@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama1.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 500px;">

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
            @foreach ($data as $item)
            <a href="/resberita/{{$item->judulberita}}" class="card">
                <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{asset('storage/' . $item->foto )}}" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none" style="color: #28A745;">{{$item->judulberita}}</p>
                        {{-- <p class="text-xs leading-[18px]">Target --}}
                            <span class="text-[#ffffff]">
                                @php
                                    $text = $item->keterangan;
                                    $limit = 100;
                                    $truncatedText = strlen($text) > $limit ? substr($text, 0, $limit) . '...' : $text;
                                    @endphp
                                {{ $truncatedText }}
                            </span>
                        </p>
                        <p class="text-xs text-blue-500 cursor-pointer line-clamp-1 hover:line-clamp-none" id="moreText" style="display: none;">
                            <span class="text-[#ffffff] line-clamp-1 hover:line-clamp-none">{{ $item->keterangan }}</span>
                        </p>
                        <button class="text-xs mt-2" onclick="toggleText()" style="color: navy;">Selengkapnya</button>

                        <script>
                            function toggleText() {
                                var moreText = document.getElementById("moreText");
                                var button = document.querySelector("button");

                                if (moreText.style.display === "none") {
                                    moreText.style.display = "inline";
                                    button.innerHTML = "Tutup";
                                } else {
                                    moreText.style.display = "none";
                                    button.innerHTML = "Selengkapnya";
                                }
                            }
                            </script>

                            </div>
                            </div>
                            </a>
                            @endforeach

                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
