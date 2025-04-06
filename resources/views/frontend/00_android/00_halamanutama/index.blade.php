@include('frontend.00_android.00_fiturmenu.header')

<section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden pb-[134px]">
    {{-- <div class="header flex flex-col bg-gradient-to-b from-[#blue] to-[#FFD100] rounded-b-[50px] overflow-hidden"> --}}
        {{-- <div class="header flex flex-col bg-gradient-to-b from-[#28A745] to-[#FFDC00] rounded-b-[50px] overflow-hidden"> --}}
            <!-- Konten lainnya di sini -->
        {{-- </div> --}}
        <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;">

        <nav class="pt-5 px-3 flex justify-between items-center">
            <div class="flex items-center gap-[10px]">
                <div class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy">
                </div>
                <div class="flex flex-col text-white">
                    <p class="text-xs leading-[18px]">Dinas Pekerjaan Umum dan Penataan Ruang </p>
                    <p class="font-semibold text-sm">Kabupaten Blora, Provinsi Jawa Tengah</p>
                </div>
            </div>
            {{-- <a href="" class="w-10 h-10 flex shrink-0">
                <img src="/assets/00_android//images/icons/menu.svg" alt="icon" loading="lazy">
            </a> --}}
        </nav>
        <div class="mt-[30px] z-10">
            <h1 class="font-bold text-2xl leading-[36px] text-white text-center">Mas Jaki Blora <br>Sistem Informasi Pembina Jasa Konstruksi</h1>
        </div>
        {{-- <div class="w-full h-fit overflow-hidden -mt-[33px] flex justify-center items-center" style="margin-top: 15px; margin-bottom:100px;">
            <img src="/assets/icon/bangunangedung.png" class="object-contain" alt="background" width="350px" loading="lazy">
        </div> --}}

    </div>

    @include('frontend.00_android.00_fiturmenu.menunavigasi')

    {{-- <div id="popular-fundrising" class="mt-8">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-lg">Popular <br>Fundraisings</h2>
                <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
            </div>
            <div class="main-carousel mt-[14px]">
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon natural disasters.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Natural Disasters</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon animals rescue.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Animals Rescue</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon medical treatment.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Medical Treatment</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon small business.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Small Business</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon natural disasters.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Protecting Nature</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon medical treatment-1.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Education Funding</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon building project.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Building Project</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon animals rescue.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Humanity</span>
                    </a>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4">
                    <a href="category.html" class="fundrising-card rounded-[30px] w-[135px] min-h-[160px] flex flex-col items-center gap-3 p-5 border border-[#E8E9EE]">
                        <div class="w-[60px] h-[60px] flex shrink-0 overflow-hidden">
                            <img src="/assets/00_android/images/icons/icon animals rescue.png" alt="icon">
                        </div>
                        <span class="font-semibold text-center my-auto">Orphans</span>
                    </a>
                </div>
            </div>
        </div> --}}

        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-xl">Mas Jaki Blora <br>AHSP Konstruksi Umum</h2>
                <img src="/assets/icon/pupr.png" alt="" width="8%" loading="lazy">
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a> --}}
            </div>
            <div class="main-carousel mt-[14px]">

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="/ressatuanhargadasar">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/00_android/iconmenu/satuanhargadasar.png" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="/404" class="font-bold line-clamp-2 hover:line-clamp-none text-sm" style="color: #28A745;">Satuan Harga Dasar</a>
                            {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p> --}}
                        </div>
                        {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    </div>
                </div>

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="/resahspkonstruksi">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/00_android/iconmenu/ahspkonstruksiumum.png" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="/404" class="font-bold line-clamp-2 hover:line-clamp-none text-sm" style="color: #28A745;">AHSP Konstruksi Umum</a>
                            {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 25.000.000</span></p> --}}
                        </div>
                        {{-- <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    </div>
                </div>
                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="/resshstblora">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/00_android/iconmenu/shstblora.png" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none text-sm" style="color: #28A745;">SHST Kab Blora 2025</a>
                            {{-- <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 12.000.000</span></p> --}}
                        </div>
                        {{-- <progress id="fund" value="10" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    </div>
                </div>

            </div>
        </div>

        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-xl">Mas Jaki Blora <br>Agenda Pelatihan dan SKK</h2>
                <img src="/assets/icon/pupr.png" alt="" width="8%" loading="lazy">
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a> --}}
            </div>
            <div class="main-carousel mt-[14px]">

                @foreach ($dataagendapelatihan as $item)

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="{{asset('storage/' . $item->foto)}}" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <p class="text-xs leading-[18px]">Kegiatan : <span class="font-bold line-clamp-1 hover:line-clamp-none" style="color: #28A745;">{{$item->namakegiatan}}</span></p>
                            @php
                            $eventDate = \Carbon\Carbon::parse($item->penutupan)->subDays(0);
                            $today = \Carbon\Carbon::now();
                            $isClosed = $today->greaterThanOrEqualTo($eventDate);
                            @endphp
                            @if ($isClosed)
                                <button style="
                                    background-color: #FF0000;
                                    color: white;
                                    border: 2px solid #FF0000;
                                    padding: 8px 12px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    border-radius: 6px;
                                    cursor: not-allowed;
                                    opacity: 0.6;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 6px;
                                " disabled>
                                    <i class="fas fa-times-circle"></i> Ditutup
                                </button>
                            @else
                                <a href="/agendapembinaan/{{$item->namakegiatan}}" style="text-decoration: none;">
                                    <button style="
                                    background-color: #006b1b;
                                    color: white;
                                    border: 2px solid #006b1b;
                                    padding: 8px 12px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    border-radius: 6px;
                                    opacity: 0.6;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 6px;
                                    width:100%;
                                    " onmouseover="this.style.backgroundColor='white'; this.style.color='#001f3f';"
                                       onmouseout="this.style.backgroundColor='#001f3f'; this.style.color='white';">
                                        <i class="fas fa-user-check"></i> Daftar
                                    </button>
                                </a>
                            @endif
                        </div>
                        {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    </div>
                </div>

                @endforeach

                @foreach ($agendaskk as $menu)

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="{{asset('storage/' . $menu->foto)}}" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <p class="text-xs leading-[18px]">Kegiatan : <span class="font-bold line-clamp-1 hover:line-clamp-none" style="color: #28A745;">{{$menu->namakegiatan}}</span></p>
                            @php
                            $eventDate = \Carbon\Carbon::parse($menu->penutupan)->subDays(0);
                            $today = \Carbon\Carbon::now();
                            $isClosed = $today->greaterThanOrEqualTo($eventDate);
                            @endphp
                            @if ($isClosed)
                                <button style="
                                    background-color: #FF0000;
                                    color: white;
                                    border: 2px solid #FF0000;
                                    padding: 8px 12px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    border-radius: 6px;
                                    cursor: not-allowed;
                                    opacity: 0.6;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 6px;
                                " disabled>
                                    <i class="fas fa-times-circle"></i> Ditutup
                                </button>
                            @else
                                <a href="/agendaskk/{{$menu->namakegiatan}}" style="text-decoration: none;">
                                    <button style="
                                    background-color: #00098d;
                                    color: white;
                                    border: 2px solid #00098d;
                                    padding: 8px 12px;
                                    font-size: 14px;
                                    font-weight: bold;
                                    border-radius: 6px;
                                    opacity: 0.6;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    gap: 6px;
                                    width:100%;
                                    " onmouseover="this.style.backgroundColor='white'; this.style.color='#001f3f';"
                                       onmouseout="this.style.backgroundColor='#001f3f'; this.style.color='white';">
                                        <i class="fas fa-user-check"></i> Daftar
                                    </button>
                                </a>
                            @endif
                        </div>
                        {{-- <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                    </div>
                </div>

                @endforeach

            </div>
        </div>


        <div id="latest-fundrising" class="mt-8">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-xl">Mas Jaki Blora  <br>Berita Jasa Konstruksi </h2>
                <img src="/assets/icon/pupr.png" alt="" width="8%" loading="lazy">
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a> --}}
            </div>
            <div class="flex flex-col gap-4 mt-[14px] px-4">
                @foreach ($data->take(4) as $item)
                <a href="/resberita" class="card">
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
                            <p class="text-xs text-blue-500 cursor-pointer" id="moreText" style="display: none;">
                                <span class="text-[#ffffff]">{{ $item->keterangan }}</span>
                            </p>
                            <button class="text-xs text-blue-500 mt-2" onclick="toggleText()">Selengkapnya</button>

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
        </div>
{{--
        <div id="best-choices" class="mt-8 -mb-6">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-xl">Mas Jaki Blora <br>Dokumentasi </h2>
                <img src="/assets/00_android/iconmenu/bg.png" alt="" width="8%" loading="lazy">
                <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a>
            </div>
            <div class="main-carousel mt-[14px]">

                <div class="px-2 first-of-type:pl-4 last-of-type:pr-4 mb-6">
                    <div class="flex flex-col gap-[14px] rounded-2xl border border-[#E8E9EE] p-[14px] w-[208px]">
                        <a href="details.html">
                            <div class="rounded-2xl w-full h-[120px] flex shrink-0 overflow-hidden">
                                <img src="/assets/00_android/images/thumbnails/th1.png" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                            </div>
                        </a>
                        <div class="flex flex-col gap-[6px]">
                            <a href="details.html" class="font-bold line-clamp-2 hover:line-clamp-none">Makanan Bergizi Warga Terdampar</a>
                            <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                        </div>
                        <progress id="fund" value="32" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress>
                    </div>
                </div>

            </div>
        </div> --}}


        <div id="latest-fundrising" class="mt-8">
            <div class="px-4 flex justify-between items-center">
                <h2 class="font-bold text-xl">Mas Jaki Blora  <br>Artikel Jasa Konstruksi </h2>
                <img src="/assets/icon/pupr.png" alt="" width="8%" loading="lazy">
                {{-- <a href="" class="p-[6px_12px] rounded-full bg-[#E8E9EE] font-semibold text-sm">Explore All</a> --}}
            </div>
            <div class="flex flex-col gap-4 mt-[14px] px-4">
                @foreach ($dataartikel->take(2) as $item)
                <a href="/resartikeljakon" class="card">
                    <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                        <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                            <img src="{{asset('storage/' . $item->foto1 )}}" class="w-full h-full object-cover" alt="thumbnail" loading="lazy">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-bold line-clamp-1 hover:line-clamp-none" style="color: #28A745;">{{$item->judul}}</p>
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
                            <p class="text-xs text-blue-500 cursor-pointer" id="moreText" style="display: none;">
                                <span class="text-[#ffffff]">{{ $item->keterangan }}</span>
                            </p>
                            <button class="text-xs text-blue-500 mt-2" onclick="toggleText()">Selengkapnya</button>

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
                                <p class="font-bold line-clamp-1 hover:line-clamp-none" style="color: black;">{{$item->title}}</p>

                    </div>
                    </div>
                    </a>
                    @endforeach

</div>
        </div>




        @include('frontend.00_android.00_fiturmenu.keterangan')
        @include('frontend.00_android.00_fiturmenu.android')

    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
