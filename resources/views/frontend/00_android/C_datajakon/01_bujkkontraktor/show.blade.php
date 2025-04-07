<style>
    /* Gaya untuk tabel */
    .custom-table-container {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling */
    -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile */
    border-radius: 15px; /* Round the corners of the container */
    border: 1px solid #ddd; /* Optional: Adds a border around the container */
}

.custom-fl-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 700px; /* Prevents the table from shrinking too much */
}

.custom-fl-table th, .custom-fl-table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.custom-fl-table th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.custom-fl-table td {
    text-transform: capitalize;
}

/* Optional: Add some styles to make the scrollbar appear nicer */
.custom-table-container::-webkit-scrollbar {
    height: 8px;
}

.custom-table-container::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 10px;
}

.custom-table-container::-webkit-scrollbar-thumb:hover {
    background-color: #555;
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
                            <i class="fas fa-file mr-2" style="margin-right:5px;"></i> <span style="color: black;">INFORMASI BUJK KONSTRUKSI : <br> </BR> {{$data->namalengkap}}</span>
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

                                        <tr>
                                            <td>2</td>
                                            <td>No Telepon</td>
                                            <td>{{$data->no_telepon}}</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Alamat</td>
                                            <td>{{$data->alamat}}</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Email</td>
                                            <td>{{$data->email}}</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Nomor Induk Berusaha</td>
                                            <td>{{$data->nomorindukberusaha}}</td>
                                        </tr>

                                        {{-- @endforeach --}}

                                    </tbody>
                                </table>
                                <br>
                                <p style="font-weight: bold;">Sub Klasifikasi Layanan </p>
                                <br>
                                <table class="custom-fl-table" id="sortableTable">
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No </th>
                                            <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:500px;"> Sub Klasifikasi Layanan  </th>
                                            <th onclick="sortTable(2)" style="cursor:pointer; text-align:center; width:150px;"> Kode </th>
                                            <th onclick="sortTable(3)" style="cursor:pointer; text-align:center; width:150px;"> Kualifikasi </th>
                                            <th onclick="sortTable(4)" style="cursor:pointer; text-align:center; width:400px;"> Penerbit </th>
                                            <th onclick="sortTable(5)" style="cursor:pointer; text-align:center; width:350px;"> Tanggal Terbit </th>
                                            <th onclick="sortTable(6)" style="cursor:pointer; text-align:center; width:350px;"> Masa Berlaku </th>
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
