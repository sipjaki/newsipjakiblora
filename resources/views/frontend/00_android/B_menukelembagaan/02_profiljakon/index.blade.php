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

                <div class="container-surat">
                    <div class="header-surat">
                        <div class="header-text">
                            <h3>PEMERINTAH KABUPATEN BLORA</h3>
                            <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
                            <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
                            <h3>BLORA 58214</h3>
                            <p>_____________________________________________________________</p>
                            <h3>PROFIL OPD JASA KONSTRUKSI</h3>
                            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h4>
                        </div>
                    </div>

                    <br>
                    <h4>I. IDENTITAS OPD</h4>
                    <table class="table-identitas">
                        @foreach ($dataidentitasopd as $item)
                        <tr>
                            <td class="label">1.</td>
                            <td class="label">Nama OPD</td>
                            <td class="colon">:</td>
                            <td>{{$item->namaopd}}</td>
                        </tr>
                        <tr>
                            <td class="label">2.</td>
                            <td class="label">Alamat OPD</td>
                            <td class="colon">:</td>
                            <td>{{$item->alamatopd}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">RT / RW</td>
                            <td class="colon">:</td>
                            <td>{{$item->rtrw}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Kode Pos</td>
                            <td class="colon">:</td>
                            <td>{{$item->kodepos}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Kelurahan</td>
                            <td class="colon">:</td>
                            <td>{{$item->kelurahan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Kecamatan</td>
                            <td class="colon">:</td>
                            <td>{{$item->kecamatan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Kota</td>
                            <td class="colon">:</td>
                            <td>{{$item->kota}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Provinsi</td>
                            <td class="colon">:</td>
                            <td>{{$item->provinsi}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="label">Negara</td>
                            <td class="colon">:</td>
                            <td>{{$item->negara}}</td>
                        </tr>
                        <tr>
                            <td class="label">3.</td>
                            <td class="label">Posisi Geografis</td>
                            <td class="colon">:</td>
                            <td>{{$item->posisigeografis}}</td>
                        </tr>
                        <tr>
                            <td class="label">4.</td>
                            <td class="label">Tipe Dinas</td>
                            <td class="colon">:</td>
                            <td>{{$item->tipedinas}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <br>

                    <h4>II. PROFIL PIMPINAN OPD</h4>

                    <h5>KEPALA DINAS</h5>
                    <table class="table-profil">
                        @foreach ($datakepaladinas as $item)
                        <tr>
                            <td class="label">1.</td>
                            <td class="label">Nama Lengkap</td>
                            <td class="colon">:</td>
                            <td>{{$item->namalengkap}}</td>
                        </tr>
                        <tr>
                            <td class="label">2.</td>
                            <td class="label">NIP</td>
                            <td class="colon">:</td>
                            <td>{{$item->nip}}</td>
                        </tr>
                        <tr>
                            <td class="label">3.</td>
                            <td class="label">Tempat, Tanggal Lahir</td>
                            <td class="colon">:</td>
                            <td>{{$item->ttl}}</td>
                        </tr>
                        <tr>
                            <td class="label">4.</td>
                            <td class="label">Pangkat / Golongan</td>
                            <td class="colon">:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td class="label">5.</td>
                            <td class="label">Jabatan</td>
                            <td class="colon">:</td>
                            <td>{{$item->jabatan}}</td>
                        </tr>
                        <tr>
                            <td class="label">6.</td>
                            <td class="label">Perangkat Daerah</td>
                            <td class="colon">:</td>
                            <td>{{$item->perangkatdaerah}}</td>
                        </tr>
                        <tr>
                            <td class="label">7.</td>
                            <td class="label">Pendidikan Terakhir</td>
                            <td class="colon">:</td>
                            <td>{{$item->pendidikanterakhir}}</td>
                        </tr>
                        @endforeach
                    </table>
                                        <br>

                                        <h5>KEPALA BIDANG BANGUNAN GEDUNG</h5>
                                        <table class="table-profil">
                                            @foreach ($datakabid as $item)
                                            <tr>
                                                <td class="label">1.</td>
                                                <td class="label">Nama Lengkap</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->namalengkap}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">2.</td>
                                                <td class="label">NIP</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->nip}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">3.</td>
                                                <td class="label">Tempat, Tanggal Lahir</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->ttl}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">4.</td>
                                                <td class="label">Pangkat / Golongan</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->pangkatgolongan}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">5.</td>
                                                <td class="label">Jabatan</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->pangkatgolongan}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">6.</td>
                                                <td class="label">Perangkat Daerah</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->perangkatdaerah}}</td>
                                            </tr>
                                            <tr>
                                                <td class="label">7.</td>
                                                <td class="label">Pendidikan Terakhir</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->pendidikanterakhir}}</td>
                                            </tr>
                                            @endforeach
                                        </table>

                    <br>
                    <h5>SUBKOORDINATOR BINA JASA KONSTRUKSI</h5>
                    <table class="table-profil">
                        @foreach ($datasubkoordinator as $item)
                        <tr>
                            <td class="label">1.</td>
                            <td class="label">Nama Lengkap</td>
                            <td class="colon">:</td>
                            <td>{{$item->namalengkap}}</td>
                        </tr>
                        <tr>
                            <td class="label">2.</td>
                            <td class="label">NIP</td>
                            <td class="colon">:</td>
                            <td>{{$item->nip}}</td>
                        </tr>
                        <tr>
                            <td class="label">3.</td>
                            <td class="label">Tempat, Tanggal Lahir</td>
                            <td class="colon">:</td>
                            <td>{{$item->ttl}}</td>
                        </tr>
                        <tr>
                            <td class="label">4.</td>
                            <td class="label">Pangkat/Golongan</td>
                            <td class="colon">:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td class="label">5.</td>
                            <td class="label">Jabatan</td>
                            <td class="colon">:</td>
                            <td>{{$item->jabatan}}</td>
                        </tr>
                        <tr>
                            <td class="label">6.</td>
                            <td class="label">Pendidikan Terakhir</td>
                            <td class="colon">:</td>
                            <td>{{$item->pendidikanterakhir}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>


                    <h4>III. OPD Jakon</h4>
                    <table class="table-profil">
                        @foreach ($datainformasi as $item)
                        <tr>
                            <td class="label"></td>
                            <td>{!!$item->informasiopd!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>

                    <h4>IV. Kontak OPD</h4>
                    <table class="table-profil">
                        @foreach ($datainformasi as $item)
                        <tr>
                            <td class="label">1</td>
                            <td class="label">Nomor Telepon</td>
                            <td class="colon">:</td>
                            <td>{{$item->notelepon}}</td>
                        </tr>
                        <tr>
                            <td class="label">2</td>
                            <td class="label">Instagram</td>
                            <td class="colon">:</td>
                            <td>@{{$item->instagram}}</td>
                        </tr>
                        <tr>
                            <td class="label">3</td>
                            <td class="label">Tiktok</td>
                            <td class="colon">:</td>
                            <td>{{$item->tiktok}}</td>
                        </tr>
                        <tr>
                            <td class="label">4</td>
                            <td class="label">Email</td>
                            <td class="colon">:</td>
                            <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>

                    <h4>V. SK SIPJAKI</h4>
                    <table class="table-profil">
                        @foreach ($datasipjaki as $item)
                        <tr>
                            <td class="label"></td>
                            <td class="label">Nomor</td>
                            <td class="colon">:</td>
                            <td>{{$item->nomor}}</td>
                        </tr>
                        <tr>
                            <td class="label"></td>
                            <td class="label">Nama Operator SIPJAKI</td>
                            <td class="colon">:</td>
                            <td>{{$item->operator1}}</td>
                        </tr>
                        <tr>
                            <td class="label"></td>
                            <td class="label">Nama Operator SIPJAKI</td>
                            <td class="colon">:</td>
                            <td>{{$item->operator2}}</td>
                        </tr>
                        <tr>
                            <td class="label"></td>
                            <td class="label">Nama Operator SIPJAKI</td>
                            <td class="colon">:</td>
                            <td>{{$item->operator3}}</td>
                        </tr>
                        <tr>
                            <td class="label"></td>
                            <td class="label">Nama Operator SIPJAKI</td>
                            <td class="colon">:</td>
                            <td>{{$item->operator4}}</td>
                        </tr>
                        @endforeach
                    </table>
                                        <br>

                                        <h4>VI. SK PERSONIL JABATAN FUNGSIONAL JASA KONSTRUKSI</h4>
                                        <table class="table-profil">
                                            @foreach ($datapersonil as $item)
                                            <tr>
                                                <td class="label">{{$loop->iteration}}</td>
                                                <td class="label">{{$item->jabatan}}</td>
                                                <td class="colon">:</td>
                                                <td>{{$item->namalengkap}}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                                        </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')























