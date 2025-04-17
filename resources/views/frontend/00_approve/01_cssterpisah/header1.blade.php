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
	<div class="topbar" style="background: #2ECC71;>
		<div class="topbar-inner" style="background: #2ECC71 " >
			<div class="topbar-left" style="background: #2ECC71 ">
				<div class="topbar-socials">
                    <a href="#"><i class="fa-brands fa-tiktok" style="font-size: 24px;"></i></a>
                    {{-- <a href="#"><i class="fa-solid fa-envelope" style="font-size: 25px;"></i></a> --}}
                    <a href="#"><i class="fa-brands fa-instagram" style="font-size: 24px; "></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp" style="font-size: 24px; "></i></a>
                    <a href="#"><i class="fa-brands fa-facebook" style="font-size: 24px; "></i></a>
				</div><!--topbar-socials-->
				<div class="topbar-info">
					<ul>
						<li>
							{{-- <div class="topbar-a">
								<i class="fa-solid fa-database"></i>
							</div><!-- topbar-icon --> --}}
							<div class="topbar-text" style="margin-right: 20px;
                            border-radius: 20px;
                            background-color: white;
                            color: green;
                            padding: 8px;
                            overflow: hidden;
                            font-size:25px;
                            white-space: nowrap;
                            display: inline-block;
                            animation: scrolling-text 3s linear infinite;
                            width: 100%;">

                            <marquee behavior="scroll" direction="left" style="width: 950px; margin-top:-10px;">
                                <a href="#" style="color: navy; text-decoration: none;">
                                Selamat Datang di Mas Jaki DPUPR Kab Blora Sistem Informasi Pembina Jasa Konstruksi Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Blora Provinsi Jawa Tengah
                                </a>
                            </marquee>

                            </div>

                            {{-- <div class="btn d-flex align-items-center" style="background: white; border: none; padding: 5px; border-radius:20px;">
                                <div class="topbar-icon" style="background: white; padding: 5px; border-radius: 5px;">
                                    <i class="fa-solid fa-envelope" style="color: black;"></i>
                                </div>
                                <div class="topbar-text" style="background: white; padding: 5px; border-radius: 5px;">
                                    <a href="#" style="color: black; text-decoration: none;">konstruksi@masjakidpuprblora.co.id</a>
                                </div>
                            </div> --}}

                            </li><!-- li -->
						<li>
							{{-- <div class="btn d-flex align-items-center" style="background: white; border: none; padding: 5px; border-radius:20px;">
                                <div class="topbar-icon" style="background: white; padding: 5px; border-radius: 5px;">
                                    <i class="fa-solid fa-clock" style="color: black;"></i>
                                </div>
                                <div class="topbar-text" style="background: white; padding: 5px; border-radius: 5px;">
                                    <a href="#" style="color: black; text-decoration: none;">Senin - Jum`at 09.00 - 15.00 </a>
                                </div>
                            </div> --}}

						</li><!-- li -->
						<li>

                            {{-- <div class="container" style="margin-top:20px;">
                                <div id="clock-container" style="
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 6vh;
                                font-family: Arial, sans-serif;">
                                <p id="jam" style="
                                    font-size: 14px;
                                    background: black;
                                    color: #fff;
                                    padding: 10px 10px;
                                    border-radius: 15px;
                                    text-align: center;"></p>

                                        </div>

                            <script>
                                function updateClock() {
                                    const now = new Date();
                                    const hours = now.getHours().toString().padStart(2, '0');
                                    const minutes = now.getMinutes().toString().padStart(2, '0');
                                    const seconds = now.getSeconds().toString().padStart(2, '0');
                                    const day = now.getDate().toString().padStart(2, '0');
                                    const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based
                                    const year = now.getFullYear();

                                    const timeString = `${hours}:${minutes}:${seconds}`;
                                    const dateString = `${day}/${month}/${year}`;
                                    document.getElementById('jam').textContent = `${dateString} ${timeString}`;
                                }

                                setInterval(updateClock, 1000); // Update every second
                                updateClock(); // Initial call to set the time immediately
                            </script>
 --}}

                                                </li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
			</div><!-- topbar-left -->
		</div><!-- topbar-inner -->
	</div><!--topbar-->

	<div class="main-menu sticky-header" style="background: #1d1d1b">
    <br>
                <div class="header-container">
                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo PUPR" class="header-logo">
                    <img src="/assets/icon/pupr.png" alt="Logo PUPR" class="header-logo">
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


		<div class="main-menu-inner">
			<div class="main-menu-left">
				<div class="navigation" style="margin-left: 100px;">
					<ul class="main-menu-list list-unstyled">

<li>
    <a href="/" style="color: white; font-family: 'Poppins', sans-serif; text-decoration: none; font-size: 18px; padding: 10px 20px; display: inline-block; transition: background-color 0.3s ease;">
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
            <ul class="list-unstyled" style="background-color: #000; padding: 0; margin: 0;">
                <!-- Nested items go here -->
            </ul>
        </li>
        <li><a href="/beritajakon" style="color: black; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: block;">Berita Jakon</a></li>
        <li><a href="/artikeljakon" style="color: black; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 20px; display: block;">Artikel Jakon</a></li>
    </ul>
</li>
<ul style="list-style: none; padding: 0; margin: 0; display: flex; gap: 10px;">
    <!-- DATA JAKON -->
    <li class="has-dropdown" style="position: relative;">
      <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 12px; display: inline-block;">
        DATA JAKON
      </a>
      <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; width: 250px;">
        <li>
          <a href="#" style="color: black; padding: 10px 20px; display: block;">Badan Usaha Jasa Konstruksi</a>
          <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
            <li><a href="/datajakon/bujkkontraktor" style="color: black; padding: 10px 20px; display: block;">BUJK Konstruksi</a></li>
            <li><a href="/datajakon/bujkkonsultan" style="color: black; padding: 10px 20px; display: block;">BUJK Konsultan</a></li>
            <li><a href="/404" style="color: black; padding: 10px 20px; display: block;">Asosiasi Konstruksi</a></li>
            <li><a href="/datajakon/statistikabujkblora" style="color: black; padding: 10px 20px; display: block;">Data Statistik BUJK</a></li>
          </ul>
        </li>
        <li>
          <a href="#" style="color: black; padding: 10px 20px; display: block;">Tenaga Kerja Konstruksi</a>
          <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
            <li><a href="/datajakon/skktenagakerjablora" style="color: black; padding: 10px 20px; display: block;">TKK Diselenggarakan DPUPR</a></li>
            <li><a href="/datajakon/skktenagakerjabloralist" style="color: black; padding: 10px 20px; display: block;">TKK Kabupaten Blora</a></li>
            <li><a href="/datajakon/statistikaskktenagakerjabloralist" style="color: black; padding: 10px 20px; display: block;">Data Statistik TKK</a></li>
          </ul>
        </li>
        <li>
          <a href="#" style="color: black; padding: 10px 20px; display: block;">Profil Paket Pekerjaan Konstruksi & Konsultasi</a>
          <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
            <li><a href="/datajakon/profilpaketpekerjaan" style="color: black; padding: 10px 20px; display: block;">Profil Paket Pekerjaan</a></li>
            <li><a href="/404" style="color: black; padding: 10px 20px; display: block;">Data Statistik</a></li>
          </ul>
        </li>
      </ul>
    </li>

    <!-- PEMBINAAN -->
    <li class="has-dropdown" style="position: relative;">
      <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 12px; display: inline-block;">
        PEMBINAAN
      </a>
      <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; width: 250px;">
        <li><a href="/agendapembinaan" style="color: black; padding: 10px 20px; display: block;">Agenda Pelatihan</a></li>
        <li><a href="/daftarpesertapelatihan" style="color: black; padding: 10px 20px; display: block;">Daftar Peserta Pelatihan</a></li>
        <li><a href="/agendaskk" style="color: black; padding: 10px 20px; display: block;">Agenda Sertifikasi TKK</a></li>
        <li><a href="/daftarpesertaskk" style="color: black; padding: 10px 20px; display: block;">Daftar Peserta SKK</a></li>
      </ul>
    </li>

    <!-- PENGAWASAN -->
    <li class="has-dropdown" style="position: relative;">
      <a href="#" class="dropdown-toggle" style="color: white; font-family: 'Poppins', sans-serif; font-size: 16px; padding: 10px 12px; display: inline-block;">
        PENGAWASAN
      </a>
      <ul class="list-unstyled" style="position: absolute; left: 0; top: 100%; background-color: #333; padding: 10px 0; border-radius: 5px; width: 250px;">
        <li>
          <a href="#" style="color: black; padding: 10px 20px; display: block;">Tertib Jasa Konstruksi</a>
          <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
            <li><a href="/tertibjasakonstruksilist" style="color: black; padding: 10px 20px; display: block;">Tertib Usaha Jakon</a></li>
            <li><a href="/tertibjasakonstruksipemanfaatan" style="color: black; padding: 10px 20px; display: block;">Tertib Pemanfaatan Jakon</a></li>
            <li><a href="/tertibjasakonstruksipenyelenggaraan" style="color: black; padding: 10px 20px; display: block;">Tertib Penyelenggaraan Jakon</a></li>
            <li><a href="/statistiktertibjakonblora" style="color: black; padding: 10px 20px; display: block;">Data Statistik Tertib Jakon</a></li>
          </ul>
        </li>
        <li><a href="/pengawasanbujk" style="color: black; padding: 10px 20px; display: block;">Pengawasan BUJK</a></li>
        <li>
          <a href="#" style="color: black; padding: 10px 20px; display: block;">Kecelakaan Kerja</a>
          <ul class="list-unstyled" style="background-color: #444; padding: 0; margin: 0;">
            <li><a href="/kecelakaankerjalist" style="color: black; padding: 10px 20px; display: block;">Data Kecelakaan</a></li>
            <li><a href="/404" style="color: black; padding: 10px 20px; display: block;">Data Statistik Kecelakaan</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>


                        <li class="has-dropdown" style="position: relative;">
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


                        <li class="has-dropdown" style="position: relative;">
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
