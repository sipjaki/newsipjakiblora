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
        <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama3.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">

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
        <div class="flex flex-col z-30" style="margin-top: -100px; ">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container-surat">
                    <div class="header-surat">
                        <div class="header-text">
                            <h3>PEMERINTAH KABUPATEN BLORA</h3>
                            <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
                            <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
                            <h3>BLORA 58214</h3>
                            <p>_____________________________________________________________</p>
                            <h3>PROFIL DATA SKK TENAGA KERJA</h3>
                            {{-- <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH</h4> --}}
                        </div>
                    </div>

                    <br>
                    <h4 style="font-weight:bold;">IDENTITAS TENAGA KERJA KONSTRUKSI </h4>
                    <table class="table-identitas">
                        {{-- @foreach ($dataidentitasopd as $item) --}}
                        <tr>
                            <td class="label">1</td>
                            <td class="label">Nama Lengkap</td>
                            <td class="colon">:</td>
                            <td>{{$data->nama}}</td>
                        </tr>
                        <tr>
                            <td class="label">2</td>
                            <td class="label">Alamat </td>
                            <td class="colon">:</td>
                            <td>{{$data->alamat}}</td>
                        </tr>
                        <tr>
                            <td class="label">3</td>
                            <td class="label">Tahun Lulus</td>
                            <td class="colon">:</td>
                            <td>{{$data->tahunlulus}}</td>
                        </tr>
                        <tr>
                        <tr>
                            <td class="label">4</td>
                            <td class="label">Tahun Bimtek</td>
                            <td class="colon">:</td>
                            <td>{{$data->tahunbimtek}}</td>
                        </tr>
                        <tr>
                            <td class="label">5</td>
                            <td class="label">Sekolah/Universitas</td>
                            <td class="colon">:</td>
                            <td>{{$data->namasekolah->namasekolah}}</td>
                        </tr>
                        <tr>
                            <td class="label">6</td>
                            <td class="label">Pendidikan</td>
                            <td class="colon">:</td>
                            <td>{{$data->jenjangpendidikan->jenjangpendidikan}}</td>
                        </tr>
                        <tr>
                            <td class="label">7</td>
                            <td class="label">Jurusan</td>
                            <td class="colon">:</td>
                            <td>{{$data->jurusan->jurusan}}</td>
                        </tr>
                        <tr>
                            <td class="label">8</td>
                            <td class="label">Jabatan Kerja</td>
                            <td class="colon">:</td>
                            <td>{{$data->jabatankerja->jabatankerja}}</td>
                        </tr>
                        <tr>
                            <td class="label">9</td>
                            <td class="label">Jenjang</td>
                            <td class="colon">:</td>
                            <td>{{$data->jenjang->jenjang}}</td>
                        </tr>
                        <tr>
                            <td class="label">10</td>
                            <td class="label">Asosiasi</td>
                            <td class="colon">:</td>
                            <td>{{$data->asosiasimasjaki?->namaasosiasi}}</td>
                        </tr>
                        <tr>
                            <td class="label">11</td>
                            <td class="label">LSP Penerbit</td>
                            <td class="colon">:</td>
                            <td>{{$data->lpspenerbit->lpspenerbit}}</td>
                        </tr>
                        <tr>
                            <td class="label">12</td>
                            <td class="label">Tanggal Terbit</td>
                            <td class="colon">:</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggalterbit)->translatedFormat('j F Y') }}</td>
                        </tr>
                        <tr>
                            <td class="label">13</td>
                            <td class="label">Tanggal Habis</td>
                            <td class="colon">:</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggalhabis)->translatedFormat('j F Y') }}</td>
                        </tr>
                        <tr>
                            <td class="label">14</td>
                            <td class="label">Masa Berlaku</td>
                            <td class="colon">:</td>
                            <td>
                                @php
                                    use Carbon\Carbon;
                                    $tanggalHabis = Carbon::parse($data->tanggalhabis);
                                @endphp

                                {{-- {{ $tanggalHabis->translatedFormat('j F Y') }} --}}

                                @if($tanggalHabis->isFuture())
                                    <button style="margin-left: 10px; background-color: #16a34a; color: white; padding: 2px 8px; font-size: 0.875rem; border-radius: 5px;">
                                        BERLAKU
                                    </button>
                                @else
                                    <button style="margin-left: 10px; background-color: #dc2626; color: white; padding: 2px 8px; font-size: 0.875rem; border-radius: 5px;">
                                        TIDAK BERLAKU
                                    </button>
                                @endif
                            </td>
                        </tr>


                    </table>

                </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
