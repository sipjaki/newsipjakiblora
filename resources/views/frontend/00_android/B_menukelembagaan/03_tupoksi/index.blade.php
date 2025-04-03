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
                <img src="/assets/00_android/iconmenu/menuutama.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">
            <div id="status" class="w-full h-[92px] bg-[#76AE43] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">
                    {{-- <img src="assets/images/icons/lovely.svg" alt="icon"> --}}
                </div>
                {{-- <p class="font-semibold text-sm text-white">This Fundraising has been finished</p> --}}
            </div>

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container" style="background-image: url(assets/00_dokmasjaki/03_datajakon/putihbaru.jpg);">
                    {{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}
                    <div style="background-color: white; padding: 20px; border-radius: 0 0 10px 10px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                        @foreach ($data as $item)
                        <h3 style="color: #2E7D32; text-align: center; font-weight: 600; font-size: 16px; margin-bottom: 20px;">{{$item->judul}}</h3>
                        @endforeach

                        <ul style="padding-left: 20px; list-style-type: none; font-size: 16px;">
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Penyusunan Program:</strong> Rencana kerja dan kegiatan bina jasa konstruksi sebagai pedoman kerja tahunan.
                            </li>
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Kebijakan Teknis:</strong> Menyusun bahan kebijakan sesuai peraturan perundang-undangan sebagai kajian pimpinan.
                            </li>
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Sistem Informasi:</strong> Pelaksanaan sistem informasi jasa konstruksi untuk efisiensi.
                            </li>
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Pengawasan & Pembinaan:</strong> Pengembangan badan usaha, pasar jasa konstruksi, dan evaluasi penyelenggaraan.
                            </li>
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Penyuluhan & Bimtek:</strong> Melakukan pelatihan, penyuluhan, dan bimtek terkait jasa konstruksi.
                            </li>
                            <li style="background-color: #E8F5E9; margin: 10px 0; padding: 12px; border-radius: 5px;">
                                <strong>📌 Laporan & Evaluasi:</strong> Monitoring dan evaluasi kegiatan pembinaan sebagai wujud transparansi.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="portfolio-details-content-text">
                        <p style="font-weight: bold;">Keterangan : </p>
                        <br>
                    @foreach ($data as $item)

                    <p style="text-align: justify;">
                        {!!$item->keterangan!!}
                    </p>

                    @endforeach
                </div>
                            </div><!-- portfolio-details-content -->
                        </div><!-- container -->


                </div><!-- container -->

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
