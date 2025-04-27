<style>
    /* Adjust margin between the menu items */
li.has-dropdown {
    margin-bottom: 5px;  /* Decreases the gap between the dropdowns */
}

ul.list-unstyled {
    margin-top: 0;  /* Reduces the space between the dropdown menu and the next item */
}

</style>

<header class="header">
    <div class="topbar" style="background: #2ECC71; padding: 5px 0; border-radius: 15px;">
        <div class="topbar-inner" style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; padding: 0 20px; border-radius: 15px;">

            <!-- Info Berjalan (Pembungkus Border Radius) -->
            <div class="topbar-info" style="flex: 1; background-color: white; border-radius: 15px; padding: 3px; display: flex; align-items: center;">
                <div class="topbar-text" style="
                    background-color: white;
                    color: green;
                    padding: 5px 10px;
                    overflow: hidden;
                    font-size: 16px;
                    white-space: nowrap;
                    font-family: 'Poppins', sans-serif;
                    width: 100%;">
                    <marquee behavior="scroll" direction="left" scrollamount="6">
                        <a href="#" style="color: navy; text-decoration: none;">
                            Selamat Datang di Mas Jaki DPUPR Kab Blora - Sistem Informasi Pembina Jasa Konstruksi
                            Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
                        </a>
                    </marquee>
                </div>
            </div>

        </div>
    </div>


	<div class="main-menu sticky-header" style="background: #1d1d1b">
    <br>
                <div class="header-container" style="margin-bottom:-25px; margin-top:-20px;">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo PUPR" class="header-logo" width="20%" loading="lazy">
                    <img src="/assets/icon/pupr.png" alt="Logo PUPR" class="header-logo" width="20%" loading="lazy">
                    <div class="header-text">
                        <h1 class="header-title">
                            <span class="header-title-white">MASJAKI</span>
                            <span class="header-title-green">BLORA</span>
                        </h1>
                        <p class="header-description">
                            Dinas Pekerjaan Umum & Penataan Ruang Kabupaten Blora
                        </p>
                    </div>
                </div>

                <style>
                    .header-container {
                        display: flex;
                        align-items: center;
                        margin-left: 100px;
                    }

                    .header-logo {
                        width: 80px;
                        height: 80px;
                        object-fit: cover;
                    }

                    .header-text {
                        margin-left: 10px;
                        display: flex;
                        flex-direction: column;
                    }

                    .header-title {
                        display: flex;
                        gap: 5px;
                        margin: 0;
                        padding: 0;
                        font-size: 32px;
                        font-weight: bold;
                        align-items: center;
                    }

                    .header-title-white {
                        color: white;
                        font-style: italic;
                    }

                    .header-title-green {
                        color: green;
                        font-style: italic;
                    }

                    .header-description {
                        margin: 0;
                        font-size: 24px;
                        color: white;
                        font-weight: 600;
                    }

                    /* Responsif untuk Tablet dan Ponsel */
                    @media (max-width: 768px) {
                        .header-container {
                            margin-left: 20px;
                        }
                        .header-logo {
                            width: 48px; /* 40% lebih kecil dari 80px */
                            height: 48px;
                        }
                        .header-title {
                            font-size: 19px; /* 40% lebih kecil dari 32px */
                        }
                        .header-description {
                            font-size: 14px; /* 40% lebih kecil dari 24px */
                        }
                    }

                    @media (max-width: 480px) {
                        .header-container {
                            margin-left: 10px;
                        }
                        .header-logo {
                            width: 48px;
                            height: 48px;
                        }
                        .header-title {
                            font-size: 19px;
                        }
                        .header-description {
                            font-size: 14px;
                        }
                    }
                </style>


		<div class="main-menu-inner" style="margin-bottom:-15px;">
			<div class="main-menu-left">
				<div class="navigation" style="margin-left: 200px;">
					<ul class="main-menu-list list-unstyled">

<li>
    <a href="/web" style="color: white; font-family: 'Poppins', sans-serif; text-decoration: none; font-size: 18px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        BERANDA
    </a>
</li>

<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        KELEMBAGAAN
    </a>
    <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 220px;">
        <li>
            <a href="/profil/struktur" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Struktur DPUPR Blora
            </a>
        </li>
        <li>
            <a href="/profil/rencanastrategis" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Profil Jakon DPUPR Blora
            </a>
        </li>
        <li>
            <a href="/profil/tupoksi" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Tupoksi Jakon DPUPR Blora
            </a>
        </li>
    </ul>
</li>

<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        BERITA
    </a>
    <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 220px;">
        <li style="position: relative;">
            <a href="#" style="color: black; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: block;">
                Peraturan
            </a>
            <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                <li>
                    <a href="/peraturan/undangundang" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Undang Undang</a>
                </li>
                <li>
                    <a href="/peraturan/pemerintah" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Pemerintah</a>
                </li>
                <li>
                    <a href="/peraturan/presiden" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Presiden</a>
                </li>
                <li>
                    <a href="/peraturan/menteri" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Menteri</a>
                </li>
                <li>
                    <a href="/peraturan/keputusanmenteri" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Keputusan Menteri</a>
                </li>
                <li>
                    <a href="/peraturan/suratedaranmenteri" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Surat Edaran Menteri</a>
                </li>
                <li>
                    <a href="/peraturan/referensi" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Referensi</a>
                </li>
                <li>
                    <a href="/peraturan/daerah" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Daerah</a>
                </li>
                <li>
                    <a href="/peraturan/gubernur" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Gubernur</a>
                </li>
                <li>
                    <a href="/peraturan/walikotadanbupati" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peraturan Walikota/ Bupati</a>
                </li>
                <li>
                    <a href="/peraturan/suratkeputusan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Surat Keputusan</a>
                </li>
            </ul>
        </li>
        <li><a href="/beritajakon" style="color: black; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: block;">Berita Jakon</a></li>
        <li><a href="/artikeljakon" style="color: black; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: block;">Artikel Jakon</a></li>
    </ul>
</li>

<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        DATA JAKON
    </a>
    <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 250px;">
        <li>
            <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Badan Usaha Jasa Konstruksi
            </a>
            <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                <li><a href="/datajakon/bujkkontraktor" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">BUJK Konstruksi</a></li>
                <li><a href="/datajakon/bujkkonsultan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">BUJK Konsultasi Konstruksi</a></li>
                <li><a href="/datajakon/asosiasimasjaki" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Asosiasi Konstruksi</a></li>
                <li><a href="/datajakon/statistikabujkblora" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Statistik BUJK</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Tenaga Kerja Konstruksi
            </a>
            <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                <li><a href="/datajakon/skktenagakerjablora" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">TKK Diselenggarakan DPUPR</a></li>
                <li><a href="/datajakon/skktenagakerjabloralist" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">TKK Kabupaten Blora</a></li>
                <li><a href="/datajakon/statistikaskktenagakerjabloralist" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Statistik TKK</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                Profil Paket Pekerjaan Konstruksi & Konsultasi
            </a>
            <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                <li><a href="/datajakon/profilpaketpekerjaan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Profil Paket Pekerjaan</a></li>
                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Statistik</a></li>
            </ul>
        </li>
    </ul>
</li>



<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        PEMBINAAN
    </a>
            <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 250px;">
                                <li><a href="/agendapembinaan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Agenda Pelatihan</a></li>
                                <li><a href="/daftarpesertapelatihan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Daftar Peserta Pelatihan</a></li>
                                <li><a href="/agendaskk" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Agenda Sertifikasi TKK</a></li>
                                <li><a href="/daftarpesertaskk" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Daftar Peserta SKK</a></li>
                            </ul>
                        </li>


<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        PENGAWASAN
    </a>
                            <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 250px;">
                                <!-- <li><a href="/tertibjasakonstruksi" style="color: white; padding: 10px 20px; display: block; font-size: 18px; font-family: 'Poppins', sans-serif;">Tertib Jasa Konstruksi</a></li> -->
                                <li style="position: relative;">
                                    <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                        Tertib Jasa Konstruksi
                                    </a>
                                    <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                                        <li><a href="/tertibjasakonstruksilist" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Tertib Usaha Jakon</a></li>
                                        <li><a href="/tertibjasakonstruksipemanfaatan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Tertib Pemanfaatan Jakon</a></li>
                                        <li><a href="/tertibjasakonstruksipenyelenggaraan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Tertib Penyelenggaraan Jakon</a></li>
                                        <li><a href="/statistiktertibjakonblora" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Statistik Tertib Jakon</a></li>
                                    </ul>
                                </li>
                                <li><a href="/pengawasanbujk" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Pengawasan BUJK</a></li>
                                <li style="position: relative;">
                                    <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                        Kecelakaan Kerja
                                    </a>
                                    <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
                                        <li><a href="/kecelakaankerjalist" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Kecelakaan</a></li>
                                        <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Data Statistik Kecelakaan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        AHSP
    </a>
                            <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: block; width: 250px;">
                                <li style="position: relative;">
                                    <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                        AHSP Keciptakaryaan, Bangunan Gedung dan Perumahan
                                    </a>
                                    <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0; position: absolute; right: 100%; top: 0;">
                                        <li style="position: relative;">
                                            <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                                Satuan Harga Dasar
                                            </a>
                                            <ul class="list-unstyled" style="background-color: #555; padding: 0; margin: 0; position: absolute; right: 100%; top: 0;">
                                                <li><a href="/satuanhargamaterial" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Harga Satuan Material</a></li>
                                                <li><a href="/satuanhargaupahtenaga" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Harga Satuan Upah Tenaga Kerja</a></li>
                                                <li><a href="/satuanhargaperalatan" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Harga Satuan Peralatan</a></li>
                                            </ul>
                                        </li>
                                        <li style="position: relative;">
                                            <a href="#" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                                HSP Konstruksi Umum
                                            </a>
                                            <ul class="list-unstyled" style="background-color: #555; padding: 0; margin: 0; position: absolute; right: 100%; top: 0;">
                                                <li><a href="/hspdivisi1" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi I Persiapan Pekerjaan</a></li>
                                                <li><a href="/hspdivisi2" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi II Pekerjaan Struktur</a></li>
                                                <li><a href="/hspdivisi3" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi III Pekerjaan Arsitektur</a></li>
                                                <li><a href="/hspdivisi4" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi IV Pekerjaan Lansekap</a></li>
                                                <li><a href="/hspdivisi5" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi V Pekerjaan Mekanikal & Elektrikal</a></li>
                                                <li><a href="/hspdivisi6" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi VI Pekerjaan Plambing</a></li>
                                                <li><a href="/hspdivisi7" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi VII Jalan Pada Permukiman</a></li>
                                                <li><a href="/hspdivisi8" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi VIII Drainase Jalan</a></li>
                                                <li><a href="/hspdivisi9" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Divisi IX Pekerjaan Jaringan Pipa Di Luar Gedung</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/shstblora" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">SHST 2025</a></li>
                                    </ul>
                                </li>
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">AHSP Bina Marga</a></li>
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">AHSP Sumber Daya Air</a></li>
                            </ul>
                        </li>



<li class="has-dropdown" style="position: relative; margin: 0; padding: 0;">
    <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
        RANTAI PASOK
    </a>
                            <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; display: none; width: 250px;">
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Asuransi Konstruksi</a></li>
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Material Bangunan/ Distributor/ Supplier Bangunan</a></li>
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Peralatan Konstruksi</a></li>
                                <li><a href="/404" style="color: black; padding: 10px 20px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif;">Toko Bangunan Kab Blora</a></li>
                            </ul>
                        </li>

					</ul><!-- main-menu-list -->
				</div><!--navigation-->
			</div><!--main-menu-left-->

			<div class="main-menu-right">
				<div class="mobile-menu-button mobile-nav-toggler">
					<span></span>
					<span></span>
					<span></span>
				</div><!-- mobile-menu-button -->
				{{-- <div class="search-box">
					<a href="#" class="search-toggler">
						<i class="flaticon-search-interface-symbol"></i>
					</a><!-- search-toggler -->
				</div><!-- search-box --> --}}


                <style>
                    .masuk-admin {
                        display: flex;
                        justify-content: space-between;
                        width: 100%;
                        max-width: 400px;
                        margin-top: 20px;
                        margin-bottom: 25px;
                        margin-right: 20px;
                        margin-left: 10px;
                        gap: 10px;
                    }
                    .masuk-admin a {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 8px;
                        text-decoration: none;
                        background-color: #28a745;
                        color: white;
                        padding: 8px 12px;
                        border-radius: 8px;
                        font-size: 14px;
                        font-weight: bold;
                        transition: all 0.3s ease-in-out;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                    }
                    .masuk-admin a:hover {
                        background-color: white;
                        color: black;
                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
                    }
                    @media (max-width: 768px) {
                        .masuk-admin {
                            width: 90%;
                            margin-bottom: 10px;
                            margin-left: 2px;

                        }
                    }
                </style>

                <div class="masuk-admin">
                    <a href="/404" class="btn-primary">
                        <i class="fas fa-user-plus"></i> Daftar
                    </a>
                    <a href="/login" class="btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Masuk
                    </a>
                </div>


            </div><!--main-menu-right-->
		</div><!--main-menu-inner-->
	</div><!--main-menu-->
</header><!--header-->

<script>
    // Pilih semua elemen yang memiliki class 'has-dropdown'
    const dropdowns = document.querySelectorAll('.has-dropdown');

    dropdowns.forEach(dropdown => {
        // Tangani klik pada elemen <a> yang membuka dropdown
        dropdown.querySelector('.dropdown-toggle').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah link melakukan navigasi

            // Cari menu <ul> terkait
            const menu = dropdown.querySelector('ul');

            // Toggle visibilitas dropdown menu
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        });
    });
</script>
