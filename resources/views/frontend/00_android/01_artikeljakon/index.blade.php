@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] -mb-[181px]" style="background: linear-gradient(to bottom, #097c24, #FFD100);">
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
            <a href="/resartikeljakon/{{$item->judul}}" class="card">
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

                            <div class="pagination-info-box" style="margin: 20px 0; padding: 10px; border: 1px solid black; background-color: #f9f9f9; border-radius: 5px; width: 100%; text-align: center;">
                                <div class="pagination-info" style="color: black; font-weight: 500; font-size: 14px; display: inline-block;">
                                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                                </div>
                            </div>
                            <!-- Pagination Section -->
                            <div class="pagination-container" style="display: flex; flex-direction: column; align-items: center;">
                                <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
                                    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data->previousPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                                        </a>
                                    </li>
                                    <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                                        <a class="page-link" href="{{ $data->nextPageUrl() }}" style="padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; text-decoration: none; color: black; font-size: 14px;">
                                            Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
