<style>
    .header-surat {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;

}

.header-text {
    margin: 0 auto;
}

.header-text h3, .header-text h4, .header-text p {
    margin: 5px 0; /* Memberikan jarak antar elemen */
}

.table-identitas {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-identitas td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-identitas .label {
    font-weight: bold;
}

.table-identitas .colon {
    text-align: center;
    font-weight: bold;
}

.table-identitas tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-identitas tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-identitas td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

.table-profil {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}

.table-profil td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-profil .label {
    font-weight: bold;
    width: 25%; /* Menjaga label agar tidak terlalu melebar */
}

.table-profil .colon {
    text-align: center;
    font-weight: bold;
    width: 10%;
}

.table-profil tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-profil tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-profil td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}



</style>
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

                <div class="container-surat">
                    <div class="header-surat">
                        <div class="header-text">
                            <h3>AGENDA PELATIHAN TKK KABUPATEN BLORA </h3>
                            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH</h4>
                        </div>
                    </div>

                    <br>
                    <h4 style="font-weight:bold;">I. IDENTITAS OPD</h4>
                    <table class="table-identitas">
                        @foreach ($data as $item)
                        <tr>
                            <td class="label">1</td>
                            <td class="label">Nama Kegiatan</td>
                            <td class="colon">:</td>
                            <td>{{$item->namakegiatan}}</td>
                        </tr>
                        <tr>
                            <td class="label">2</td>
                            <td class="label">Waktu Pelaksanaan</td>
                            <td class="colon">:</td>
                            <td>{{$item->waktupelaksanaan}}</td>
                        </tr>
                        <tr>
                            <td class="label">3</td>
                            <td class="label">Penyelenggara</td>
                            <td class="colon">:</td>
                            <td>{{$item->penyelenggara}}</td>
                        </tr>
                        <tr>
                            <td class="label">4</td>
                            <td class="label">Lokasi</td>
                            <td class="colon">:</td>
                            <td>{{$item->lokasi}}</td>
                        </tr>
                        <tr>
                            <td class="label">5</td>
                            <td class="label">Jumlah Peserta</td>
                            <td class="colon">:</td>
                            <td>{{$item->jumlahpeserta}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <br>

                    <h4 style="font-weight:bold;">II. DAFTAR MATERI PELATIHAN </h4>

                    {{-- <h5 style="font-weight:bold;">A. KEPALA DINAS</h5> --}}
                    <div class="custom-table-container">
                        <table class="custom-fl-table" id="sortableTable">
                            <thead>
                                <tr>
                                    <th onclick="sortTable(0)" style="cursor:pointer; text-align:center; width:100px;"> No </th>
                                    <th onclick="sortTable(1)" style="cursor:pointer; text-align:center; width:500px;"> Judul </th>
                                    <th onclick="sortTable(2)" style="cursor:pointer; text-align:center; width:800px;"> Materi </th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @php
                                    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                                @endphp
                                @foreach ($data as $item)
                                <tr>
                                    <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                    <td style="text-transform: capitalize;">{{ ucwords(strtolower($item->judulmateripelatihan)) }}</td>
                                    <td>
                                        @if($item->materipelatihan)
                                            <!-- Jika ada file materi, tampilkan tombol untuk download -->
                                            <button id="sertifikat-btn" class="btn btn-primary">Download Materi</button>
                                            <script>
                                                document.getElementById('sertifikat-btn').addEventListener('click', function() {
                                                    const fileUrl = "{{ asset('storage/' . $item->materipelatihan) }}"; // URL file yang ingin diunduh
                                                    const a = document.createElement('a');
                                                    a.href = fileUrl;
                                                    a.download = ''; // Nama file tidak perlu diisi, karena browser akan menggunakan nama dari URL
                                                    document.body.appendChild(a);
                                                    a.click();
                                                    document.body.removeChild(a);
                                                });
                                            </script>
                                        @else
                                            <!-- Jika tidak ada file materi, tampilkan teks -->
                                            MATERI BELUM DI UPLOAD
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                                <div class="portfolio-details-content">
                                    <div class="flex flex-col gap-[2px]">
                                        <h2 class="font-semibold text-sm">Isi Agenda: </h2>
                                        <p class="desc-less text-sm leading-[26px]" style="text-align: justify;">{!!$item->isiagenda!!}</p>
                                    </div>
                                    <br>

                                    <div class="flex flex-col gap-[2px]">
                                        <h2 class="font-semibold text-sm">Keterangan : </h2>
                                        <p class="desc-less text-sm leading-[26px]" style="text-align: justify;">{!!$item->keterangan!!}</p>
                                    </div>

                                </div><!-- portfolio-details-content -->
                        @endforeach
                    </div>

                    <br>
                                                        </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
