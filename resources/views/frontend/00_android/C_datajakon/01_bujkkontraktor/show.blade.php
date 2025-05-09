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
                    <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                    <br>
                    <p class="font-semibold text-xl text-white">{{$title}}</p>
                </div>

                <!-- Ikon bagian kanan -->
                <a href="" class="w-10 h-10 flex shrink-0">
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                </a>
            </nav>
        </div>

        <div class="flex flex-col z-30" style="margin-top: -100px;">
                     <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                    <div class="flex flex-col gap-[10px]">
                        {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">{{$title}}</p> --}}

                        <button class="green-button" style="margin-bottom:10px; text-transform:uppercase">
                            {{-- <img src="/assets/icon/logokabupatenblora.png" class="img-fluid" alt="img-25" width="50" height="50" style="margin-right: 20px;" loading="lazy"> --}}
                            <i class="fas fa-file mr-2" style="margin-right:5px;"></i> <span style="color: black;">INFORMASI BUJK KONSTRUKSI : <br>{{$data->namalengkap}}</span>
                        </button>


                        <div class="flex flex-col gap-[10px]">
                            {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}

                            <!-- Table Section -->

                            <div class="custom-table-container">
                                <table class="custom-fl-table" id="sortableTable">
                                    <tbody id="tableBody">
                                        {{-- @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp --}}
                                        {{-- @foreach ($subData as $item) --}}
                                        <tr>
                                            <td>1</td>
                                            <td>Nama Badan Usaha</td>
                                            <td>{{$data->namalengkap}}</td>
                                        </tr>

                                        {{-- <tr>
                                            <td>2</td>
                                            <td>No Telepon</td>
                                            <td>{{$data->no_telepon}}</td>
                                        </tr> --}}

                                        <tr>
                                            <td>2</td>
                                            <td>Alamat</td>
                                            <td>{{$data->alamat}}</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Email</td>
                                            <td>{{$data->email}}</td>
                                        </tr>

                                        {{-- <tr>
                                            <td>5</td>
                                            <td>Nomor Induk Berusaha</td>
                                            <td>{{$data->nomorindukberusaha}}</td>
                                        </tr> --}}

                                        {{-- @endforeach --}}

                                    </tbody>
                                </table>
                                <br>
                                <p style="font-weight: bold;">Sub Klasifikasi Layanan </p>
                                <br>
                                <table class="fl-table" id="sortableTable">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:300px;"> Sub Klasifikasi Layanan  </th>
                                            <th onclick="sortTable(2)" style="cursor:pointer; text-align:center; width:150px;"> Kode </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:150px;"> Kualifikasi </th>
                                            <th onclick="sortTable(4)" style="cursor:pointer; text-align:center; width:300px;"> Penerbit </th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:150px;"> Tanggal Terbit </th>
                                            <th onclick="sortTable(6)" style="cursor:pointer; text-align:center; width:150px;"> Masa Berlaku </th>
                                            <th onclick="sortTable(6)" style="cursor:pointer; text-align:center; width:150px;"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        {{-- @php $start = ($data->currentPage() - 1) * $data->perPage() + 1; @endphp --}}
                                        @foreach ($subData as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                            <td style="text-align: left">{{$item->sub_klasifikasi_layanan}}</td>
                                            <td style="text-align: center;">{{$item->kode}}</td>
                                            <td style="text-align: center;">{{$item->kualifikasi}}</td>
                                            <td style="text-align: left">{{$item->penerbit}}</td>
                                            <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->tanggal_terbit)->translatedFormat('j F Y') }}</td>
                                            <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->masa_berlaku)->translatedFormat('j F Y') }}</td>
                                            {{-- <td style="text-align: center;">{{ \Carbon\Carbon::parse($item->masa_berlaku)->translatedFormat('j F Y') }}</td> --}}
                                            <td style="text-align: center;">
                                                @php
                                                    $masaBerlaku = \Carbon\Carbon::parse($item->masa_berlaku);
                                                @endphp

                                                @if ($masaBerlaku->isPast())
                                                    <!-- Jika sudah lewat (expired), tombol merah -->
                                                    <button class="btn btn-danger" style="background-color: red; color: white; border: none; padding: 5px 10px; border-radius: 5px;">BERLAKU HABIS</button>
                                                @else
                                                    <!-- Jika belum lewat (valid), tombol hijau -->
                                                    <button class="btn btn-success" style="background-color: green; color: white; border: none; padding: 5px 10px; border-radius: 5px;">BERLAKU</button>
                                                @endif
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                                 <!-- Description Section -->
                        </div>

                    </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
