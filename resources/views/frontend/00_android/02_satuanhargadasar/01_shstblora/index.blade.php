<style>
                                                                                                        <style>
    /* Gaya untuk tabel */
    .custom-table-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-radius: 20px;
    }

    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Membuat kolom lebih konsisten */
        min-width: 700px;
    }

    .custom-fl-table th,
    .custom-fl-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #998282;
        text-align: left;
        vertical-align: middle;
        height: 48px; /* Tinggi baris tetap */
        box-sizing: border-box;
    }

    .custom-fl-table th {
        background-color:#4ADE80;
        font-weight: 600;
        color: #2d3436;
        font-size: 14px;
        border-bottom: 2px solid #e0e0e0;
    }

    .custom-fl-table td {
        font-size: 14px;
        color: #000000;
        line-height: 1.5;
    }

    /* Zebra striping untuk baris */
    .custom-fl-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    /* Hover effect */
    .custom-fl-table tbody tr:hover {
        background-color: #f7f7f7;
    }

    /* Scrollbar styling */
    .custom-table-container::-webkit-scrollbar {
        height: 6px;
    }

    .custom-table-container::-webkit-scrollbar-thumb {
        background-color: #c0c0c0;
        border-radius: 4px;
    }

    .custom-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama3.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">
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
                                <div class="table-scroll">

                                    <table class="fl-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center; width:35px;" rowspan="2"><img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="30" height="30" style="margin-right: 5px; margin-left:5px;" loading="lazy"></th>
                                                <th style="text-align:center" colspan="2" style="font-size: 11px;"> Harga Satuan Pembangunan Gedung Negara Per M2 (Meter Persegi)</th>
                                                {{-- <th style="text-align:center" >View</th> --}}
                                            </tr>
                                            <tr>
                                                <th style="text-align: center" style="font-size: 11px;">Bangunan Tidak Sederhana</th>
                                                <th style="text-align: center" style="font-size: 11px;">Bangunan Sederhana</th>
                                            </tr>
                                        </thead>
                                        <tbody style="background: white">
                                            @foreach ($data as $item )
                                            <tr>
                                                <td style="width:100px;"></td>
                                                <td style="text-align: center; " style="font-size: 11px;">{{ 'Rp ' . number_format($item->bangunankantortidaksederhana, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; " style="font-size: 11px;">{{ 'Rp ' . number_format($item->bangunankantorsederhana, 0, ',', '.') }},00</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                                <div class="table-scroll">
                                    <table class="fl-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center; width:35;" rowspan="3">
                                                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="30" height="30" style="margin-right: 5px; margin-left:5px;" loading="lazy">
                                                </th>
                                                <th colspan="3" style="text-align:center; font-size: 11px;">Harga Satuan Pembangunan Rumah Negara Per M2 (Meter Persegi)</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; font-size: 11px;">Rumah Negara Tipe A</th>
                                                <th style="text-align: center; font-size: 11px;">Rumah Negara Tipe B</th>
                                                <th style="text-align: center; font-size: 11px;">Rumah Negara Tipe C, D, E</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td style="width:100px;"></td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->rumahnegaratipea, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->rumahnegaratipeb, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->rumahnegaratipecde, 0, ',', '.') }},00</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrapper" style="margin-top:-130px; margin-bottom:150px;">
                                <div class="table-scroll">
                                    <table class="fl-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center; width:35px;" rowspan="3">
                                                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="30" height="30" style="margin-right: 5px; margin-left:5px;" loading="lazy">
                                                </th>
                                                <th colspan="3" style="text-align:center; font-size: 11px;">Harga Satuan Pembangunan Pagar Gedung Negara Per M1 (Meter Lari)</th>
                                            </tr>
                                            <tr>
                                                <th style="font-size: 11px; text-align: center;">Pagar Depan M1 (Meter Lari) Rupiah</th>
                                                <th style="font-size: 11px; text-align: center;">Pagar Belakang M1 (Meter Lari) Rupiah</th>
                                                <th style="font-size: 11px; text-align: center;">Pagar Samping M1 (Meter Lari) Rupiah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td style="width:100px;"></td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahdepan, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahbelakang, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahsamping, 0, ',', '.') }},00</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrapper" style="margin-top:-130px;">
                                <div class="table-scroll">
                                    <table class="fl-table">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center; width:35px;" rowspan="3">
                                                    <img src="/assets/icon/pupr.png" class="img-fluid" alt="img-25" width="30" height="30" style="margin-right: 5px; margin-left:5px;" loading="lazy">
                                                </th>
                                                <th colspan="3" style="text-align:center; font-size: 11px;">Harga Satuan Pembangunan Pagar Rumah Negara Per M1 (Meter Lari)</th>
                                            </tr>
                                            <tr>
                                                <th style="text-align: center; font-size: 11px;">Pagar Depan Rumah Negara M1 (Meter Lari) Rupiah</th>
                                                <th style="text-align: center; font-size: 11px;">Pagar Samping Rumah Negara M1 (Meter Lari) Rupiah</th>
                                                <th style="text-align: center; font-size: 11px;">Pagar Belakang Rumah Negara M1 (Meter Lari) Rupiah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td style="width:100px;"></td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahnegaradepan, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahnegarabelakang, 0, ',', '.') }},00</td>
                                                <td style="text-align: center; font-size: 10px;">{{ 'Rp ' . number_format($item->pagarrumahnegarasamping, 0, ',', '.') }},00</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                    </div>


            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
