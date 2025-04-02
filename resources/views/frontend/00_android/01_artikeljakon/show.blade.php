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
                <img src="{{asset('storage/' . $data->foto1)}}" class="w-full h-full object-cover" alt="cover">
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
                <div class="flex flex-col gap-[10px]">
                    {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}
                    <h1 class="font-extrabold leading-[39px]" style="font-size: 16px;">{{$data->judul}}</h1>
                    <div class="flex items-center gap-2">
                        <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                            {{-- <img src="assets/images/photos/photo.png" class="w-full h-full object-cover" alt="photo"> --}}
                            <img src="{{asset('storage/' . $data->user->avatar)}}" class="w-full h-full object-cover" alt="photo">

                        </div>
                        <div class="flex gap-1 items-center">
                            <p class="font-semibold text-sm">{{$data->user->name}}</p>

                        </div>
                        <div style="display: inline-block; float: right;">
                            <button id="sertifikat-btn" class="badge"
                               style="background-color: navy; color: white; border: none; transition: 0.3s; padding:10px 20px; font-size: 13px; border-radius:5px;"
                               onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='1px solid black';"
                               onmouseout="this.style.backgroundColor='navy'; this.style.color='white'; this.style.border='none';">
                                <i class="fas fa-download" style="margin-right:5px;"></i> Download .pdf
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">

                    {{-- <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                </div>
                <div class="flex flex-col gap-[10px] p-5 rounded-[20px] bg-[#F6ECE2]">
                    {{-- <h2 class="font-semibold text-sm">Mereka Senang dan Bahagia</h2> --}}
                    <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                        <img src="{{asset('storage/' . $data->foto2)}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    <div class="aspect-[61/30] rounded-2xl bg-[#D9D9D9] overflow-hidden">
                        <img src="{{asset('storage/' . $data->foto3)}}" class="w-full h-full object-cover" alt="thumbnail">
                    </div>
                    {{-- <p class="text-sm leading-[26px]">{!!$data->keterangan!!}</p> --}}
                </div>
                <div class="flex flex-col gap-[2px]">
                    <h2 class="font-semibold text-sm">Keterangan : </h2>
                    <p class="desc-less text-sm leading-[26px]" style="text-align: justify;">{!!$data->keterangan!!}</p>

                </div>


        <script>
            document.getElementById('sertifikat-btn').addEventListener('click', function() {
                const fileUrl = "{{ asset('storage/' . $data->berkas) }}"; // URL file yang ingin diunduh
                const a = document.createElement('a');
                a.href = fileUrl;
                a.download = ''; // Nama file tidak perlu diisi, karena browser akan menggunakan nama dari URL
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
            </script>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
