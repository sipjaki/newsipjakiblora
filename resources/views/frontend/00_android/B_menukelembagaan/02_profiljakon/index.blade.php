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
                        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
                        <br>
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
                    <table>
                        @foreach ($dataidentitasopd as $item)

                        <tr>
                            <td>1.</td>
                            <td>Nama OPD</td>
                            <td>:</td>
                            <td>{{$item->namaopd}}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Alamat OPD</td>
                            <td>:</td>
                            <td>{{$item->alamatopd}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>RT / RW</td>
                            <td>:</td>
                            <td>{{$item->rtrw}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kode Pos</td>
                            <td>:</td>
                            <td>{{$item->kodepos}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kelurahan</td>
                            <td>:</td>
                            <td>{{$item->kelurahan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td>{{$item->kecamatan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Kota</td>
                            <td>:</td>
                            <td>{{$item->kota}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>{{$item->provinsi}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Negara</td>
                            <td>:</td>
                            <td>{{$item->negara}}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Posisi Geografis</td>
                            <td>:</td>
                            <td>{{$item->posisigeografis}}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Tipe Dinas</td>
                            <td>:</td>
                            <td>{{$item->tipedinas}}</td>
                        </tr>

                        @endforeach
                    </table>

                    <br>

                    <h4>II. PROFIL PIMPINAN OPD</h4>

                    <h5>KEPALA DINAS</h5>
                    <table>
                        @foreach ($datakepaladinas as $item)

                        <tr>
                            <td>1.</td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$item->namalengkap}}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td>{{$item->nip}}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$item->ttl}}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Pangkat / Golongan</td>
                            <td>:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$item->jabatan}}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Perangkat Daerah</td>
                            <td>:</td>
                            <td>{{$item->perangkatdaerah}}</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{$item->pendidikanterakhir}}</td>
                        </tr>

                        @endforeach
                    </table>

                    <br>

                    <h5>KEPALA BIDANG BANGUNAN GEDUNG</h5>
                    <table>

                        @foreach ($datakabid as $item)

                        <tr>
                            <td>1.</td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$item->namalengkap}}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td>{{$item->nip}}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$item->ttl}}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Pangkat / Golongan</td>
                            <td>:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Perangkat Daerah</td>
                            <td>:</td>
                            <td>{{$item->perangkatdaerah}}</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{$item->pendidikanterakhir}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <br>

                    <h5>SUBKOORDINATOR BINA JASA KONSTRUKSI</h5>
                    <table>
                        @foreach ($datasubkoordinator as $item)

                        <tr>
                            <td>1.</td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$item->namalengkap}}</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td>{{$item->nip}}</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$item->ttl}}</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Pangkat/Golongan</td>
                            <td>:</td>
                            <td>{{$item->pangkatgolongan}}</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$item->jabatan}}</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Pendidikan Terakhir</td>
                            <td>:</td>
                            <td>{{$item->pendidikanterakhir}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>

                    <h4>III. OPD Jakon</h4>
                    <table>
                        @foreach ($datainformasi as $item)

                        <tr>
                            <td></td>
                            <td>{!!$item->informasiopd!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    <br>

                    <h4>IV. Kontak OPD</h4>
                    <table>
                        @foreach ($datainformasi as $item)

                        <tr>
                            <td>1</td>
                            <td>Nomor Telepon</td>
                            <td>:</td>
                            <td>{{$item->notelepon}}</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Instagram</td>
                            <td>:</td>
                            <td>@{{$item->instagram}}</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tiktok</td>
                            <td>:</td>
                            <td>{{$item->tiktok}}</td>
                            {{-- <td>'@bangunan.gedung.dpupr'</td> --}}
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tiktok</td>
                            <td>:</td>
                            <td>{{$item->email}}</td>
                            {{-- <td>'@bangunan.gedung.dpupr'</td> --}}
                        </tr>
                        @endforeach
                    </table>

                    <br>
                    <h4>V. SK SIPJAKI</h4>
                    <table>
                        @foreach ($datasipjaki as $item)
                        <tr>
                            <td></td>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>{{$item->nomor}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Nama Operator SIPJAKI</td>
                            <td>:</td>
                            <td>{{$item->operator1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Nama Operator SIPJAKI</td>
                            <td>:</td>
                            <td>{{$item->operator2}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Nama Operator SIPJAKI</td>
                            <td>:</td>
                            <td>{{$item->operator3}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Nama Operator SIPJAKI</td>
                            <td>:</td>
                            <td>{{$item->operator4}}</td>
                        </tr>
                        @endforeach
                    </table>

                    <br>
                    <h4>VI. SK PERSONIL JABATAN FUNGSIONAL JASA KONSTRUKSI</h4>
                    <table>
                        @foreach ($datapersonil as $item)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->jabatan}}</td>
                            <td>:</td>
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























