@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] bg-gradient-to-b from-[#3CBBDB] to-[#EAD380] -mb-[181px]">

            <nav class="pt-5 px-3 flex justify-between items-center">
                <div class="flex items-center gap-[10px]">
                    <a href="index.html" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy">
                    </a>
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                    <br>
                    <p class="font-semibold text-xl text-white">{{$title}}</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" width="40" height="40" class="object-contain">
                </a>

            </nav>
            {{-- <div class="mt-5">
                <h1 class="font-bold text-[26px] leading-[39px] text-white text-center">Natural Disasters</h1>
            </div> --}}
        </div>
        <div class="flex flex-col gap-4 px-4">
            @foreach ($data as $item)
            <a href="/" class="card">
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
                            <span class="text-[#ffffff]">{{ $item->keterangan }}</span>
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

            @include('frontend.00_android.00_fiturmenu.keterangan')
        </div>


<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
