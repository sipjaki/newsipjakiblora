<style>
    /* Gaya untuk tabel */
    .fl-table {
        margin-top: 15px;
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
    }

    .fl-table th, .fl-table td {
        text-align: center;
        /* border-radius: 10px; */
        /* padding: 10px; */
    }

    /* Gaya untuk kepala tabel */
    .fl-table thead {
        background-color: #374151; /* Warna latar belakang untuk header tabel */
        color: white;
        padding: 5px;
    }

    /* Gaya belang-belang */
    .fl-table tbody tr:nth-child(odd) {
        background-color: #f1f1f1; /* Abu-abu muda untuk baris ganjil */
    }

    .fl-table tbody tr:nth-child(even) {
        background-color: #e0e0e0; /* Abu-abu lebih gelap untuk baris genap */
    }

    /* Gaya hover pada baris tabel */
    .fl-table tbody tr:hover {
        background-color: #d3d3d3; /* Efek hover dengan warna abu lebih gelap */
    }
</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] rounded-b-[50px] overflow-hidden h-[320px] -mb-[181px]" style="background: linear-gradient(to bottom, #28A745, #FFD100);">
            <nav class="pt-5 px-3 flex justify-between items-center">
                <!-- Logo bagian kiri -->
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
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

        <div class="flex flex-col z-30">
            <div id="status" class="w-full h-[92px] bg-[#76AE43] rounded-t-[40px] pt-3 pb-[50px] flex gap-2 justify-center items-center -mb-[38px]">
                <div class="w-[30px] h-[30px] flex shrink-0">

                </div>
                {{-- <p class="font-semibold text-sm text-white">This Fundraising has been finished</p> --}}
            </div>

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                    <div class="flex flex-col gap-[10px]">
                        <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">{{$title}}</p>

                        <div class="flex flex-col gap-[10px]">
                            {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}



                            <!-- Table Section -->

                        <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                            <table class="fl-table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; width:100px;" rowspan="2"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="40" height="40" style="margin-right: 5px; margin-left:5px;" loading="lazy"></th>
                                        <th style="text-align:center" colspan="2" style="font-size: 13px;"> Harga Satuan Pembangunan Gedung Negara Per M2 (Meter Persegi)</th>
                                        {{-- <th style="text-align:center" >View</th> --}}
                                    </tr>
                                    <tr>
                                        <th style="text-align: center" style="font-size: 13px;">Bangunan Tidak Sederhana</th>
                                        <th style="text-align: center" style="font-size: 13px;">Bangunan Sederhana</th>
                                    </tr>
                                </thead>
                                <tbody style="background: white">

                                    @foreach ($data as $item )
                                    <tr>
                                        <td style="width:100px;"></td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->bangunankantortidaksederhana, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->bangunankantorsederhana, 0, ',', '.') }},00</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            </div>

                            {{-- <section class="document-section" style="margin-top: -215px; margin-bottom:35px;" >

                            <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                <!-- Tombol di kiri -->
                                <a href="#" style="background: white;">
                                    <button class="badgepupr" style="border: none; font-size: 12px; cursor: pointer;">
                                        <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                        <i style="color: black" class="fas fa-building mr-2" style="margin-right: 10px;"></i> <span style="text-transform: uppercase; font-weight:800; color:black">Bangunan Gedung Rumah Negara Per M2 (Meter Persegi)</span>
                                    </button>
                                </a>
                                <body>

                                </section> --}}

                            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                            <table class="fl-table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center: width:100px;" rowspan="3" ><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="40" height="40" style="margin-right: 5px; margin-left:5px;" loading="lazy"></th>
                                        <th style="text-align:center" colspan="3" style="font-size: 13px;">Harga Satuan Pembangunan Rumah Negara Per M2 (Meter Persegi)</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;" style="font-size: 13px;">Rumah Negara Tipe A</th>
                                        <th style="text-align: center;" style="font-size: 13px;">Rumah Negara Tipe B</th>
                                        <th style="text-align: center;" style="font-size: 13px;">Rumah Negara Tipe C, D, E</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item )
                                    <tr>
                                        <td style="width:100px;"></td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->rumahnegaratipea, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->rumahnegaratipeb, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->rumahnegaratipecde, 0, ',', '.') }},00</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            </div>

                            {{-- <section class="document-section" style="margin-top: -215px; margin-bottom:35px;" >

                            <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                <!-- Tombol di kiri -->
                                <a href="#" style="background: white;">
                                    <button class="badgepupr" style="border: none; font-size: 12px; cursor: pointer;">
                                        <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                        <i style="color: black;" class="fas fa-building mr-2" style="margin-right: 10px;"></i> <span style="text-transform: uppercase; font-weight:800; color:black">Pagar Bangunan Gedung Kantor dan Bangunan Lainnya Per M1 (Meter Lari)</span>
                                    </button>
                                </a>
                                <body>

                                </section> --}}

                            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                            <table class="fl-table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; width:100px;" rowspan="3"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="40" height="40" style="margin-right: 5px; margin-left:5px;" loading="lazy"></th>
                                        <th style="text-align:center" colspan="3" style="font-size: 13px;">Harga Satuan Pembangunan Pagar Gedung Negara Per M1 (Meter Lari)</th>
                                    </tr>
                                    <tr>
                                        <th style="font-size: 13px;">Pagar Depan M1 (Meter Lari) Rupiah</th>
                                        <th style="font-size: 13px;">Pagar Belakang M1 (Meter Lari) Rupiah</th>
                                        <th style="font-size: 13px;">Pagar Samping M1 (Meter Lari) Rupiah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item )
                                    <tr>
                                        <td style="width:100px;"></td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahdepan, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahbelakang, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahsamping, 0, ',', '.') }},00</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            </div>


                            {{-- <section class="document-section" style="margin-top: -215px; margin-bottom:35px;" >

                            <div style="display: flex; justify-content: space-between; width: 100%; align-items: center; margin-top: 20px;">
                                <!-- Tombol di kiri -->
                                <a href="#" style="background: white;">
                                    <button class="badgepupr" style="border: none; font-size: 12px; cursor: pointer;">
                                        <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy">
                                        <i style="color: black;" class="fas fa-building mr-2" style="margin-right: 10px;"></i> <span style="text-transform: uppercase; font-weight:800; color:black">Pagar Rumah Negera Per M1 (Meter Lari)</span>
                                    </button>
                                </a>
                                <body>

                                </section> --}}

                            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                            <table class="fl-table">
                                <thead>
                                    <tr>
                                        <th style="text-align:center; width:100px;" rowspan="3"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="40" height="40" style="margin-right: 5px; margin-left:5px;" loading="lazy"></th>
                                        <th style="text-align:center" colspan="3" style="font-size: 13px;">Harga Satuan Pembangunan Pagar Rumah Negara Per M1 (Meter Lari) </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center" style="font-size: 13px;">Pagar Depan Rumah Negara M1 (Meter Lari) Rupiah</th>
                                        <th style="text-align: center" style="font-size: 13px;">Pagar Samping Rumah Negara M1 (Meter Lari) Rupiah</th>
                                        <th style="text-align: center" style="font-size: 13px;">Pagar Belakang Rumah Negara M1 (Meter Lari) Rupiah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item )
                                    <tr>
                                        <td style="width:100px;"></td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahnegaradepan, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahnegarabelakang, 0, ',', '.') }},00</td>
                                        <td style="text-align: center; font-weight:bold;" style="font-size: 13px;">{{ 'Rp ' . number_format($item->pagarrumahnegarasamping, 0, ',', '.') }},00</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>

                <div class="flex flex-col gap-2">

                    {{-- <progress id="fund" value="66" max="100" class="w-full h-[6px] rounded-full overflow-hidden"></progress> --}}
                </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
