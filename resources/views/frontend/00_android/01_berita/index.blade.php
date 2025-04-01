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
                <p class="font-semibold text-sm text-white">{{$title}}</p>
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" width="80%">
                </a>
            </nav>
            {{-- <div class="mt-5">
                <h1 class="font-bold text-[26px] leading-[39px] text-white text-center">Natural Disasters</h1>
            </div> --}}
        </div>
        <div class="flex flex-col gap-4 px-4">
            @foreach ($data as $item)

            <a href="/404" class="card">
                <div class="w-full flex items-center p-[14px] gap-3 rounded-2xl bg-white">
                    <div class="w-20 h-[90px] flex shrink-0 rounded-2xl overflow-hidden">
                        <img src="{{asset('storage/' . $item->foto)}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="font-bold line-clamp-1 hover:line-clamp-none">{{$item->judul}}</p>
                        <p class="text-xs leading-[18px]">Target <span class="font-bold text-[#FF7815]">Rp 800.000.000</span></p>
                        <div class="flex items-center gap-1 sm:flex-row-reverse sm:justify-end">
                            <p class="font-semibold sm:font-medium text-xs leading-[18px]">Putra Bangsa</p>
                            <div class="flex shrink-0">
                                <img src="assets/images/icons/tick-circle.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>


        @include('frontend.00_android.00_fiturmenu.keterangan')
        @include('frontend.00_android.00_fiturmenu.android')


    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
