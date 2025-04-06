@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        {{-- <img src="assets/images/icons/back.svg" alt="icon"> --}}
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">{{$title}}</p>
                    {{-- <p class="font-semibold text-sm text-white">#WeNeedHelp</p> --}}
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    {{-- <img src="assets/images/icons/like.svg" alt="icon"> --}}
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/00_android/iconmenu/menuutama2.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container" style="background-image: url(assets/00_dokmasjaki/03_datajakon/putihbaru.jpg);">
                    {{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}

                    @foreach ($data as $item )
                    <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none; margin-bottom:25px;"></iframe>
                    <div class="portfolio-details-content">
                        <div class="flex flex-col gap-[2px]">
                            <h2 class="font-semibold text-sm">Redaksi : </h2>
                            <p class="desc-less text-sm leading-[26px]" style="text-align: justify;">{!!$item->judul!!}</p>
                        </div>
                        <br>

                        <div class="flex flex-col gap-[2px]">
                            <h2 class="font-semibold text-sm">Keterangan : </h2>
                            <p class="desc-less text-sm leading-[26px]" style="text-align: justify;">{!!$item->keterangan!!}</p>
                        </div>

                    </div><!-- portfolio-details-content -->
                    @endforeach
                </div><!-- container -->

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')























