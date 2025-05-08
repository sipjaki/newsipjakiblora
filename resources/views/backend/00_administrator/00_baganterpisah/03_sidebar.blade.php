<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .app-sidebar,
    .app-sidebar *:not(.bi):not(.nav-arrow) {
        font-family: 'Poppins', sans-serif !important;
    }

    .app-sidebar {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #0f3d0f, #145214, #1e9128);
        background-size: 400% 400%;
        animation: sidebarGradientMove 15s ease infinite;
        min-height: 100vh;
        z-index: 1;
        box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.05);
    }

    @keyframes sidebarGradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .sidebar-overlay {
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.07) 1px, transparent 1px);
        background-size: 30px 30px;
        pointer-events: none;
        z-index: 0;
    }

    .sidebar-crane {
        position: absolute;
        bottom: 20px;
        right: -100px;
        width: 150px;
        height: 120px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ffffff"><path d="M21 6h-4v2h4V6zm-5 0h-4v2h4V6zm-5 0H7v2h4V6zM6 6H2v2h4V6zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2z"/></svg>');
        background-size: contain;
        background-repeat: no-repeat;
        animation: sidebarCraneMove 20s linear infinite;
        opacity: 0.1;
        filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.15));
        pointer-events: none;
        z-index: 0;
    }

    @keyframes sidebarCraneMove {
        0% { transform: translateX(0); }
        50% { transform: translateX(-100%); }
        100% { transform: translateX(0); }
    }

    .nav-item > .nav-link {
        color: white !important;
        transition: all 0.3s ease-in-out;
    }

    .nav-item > .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.8) !important;
        color: black !important;
    }

    .nav-item > .nav-link.active {
        background-color: #cfff8d !important;
        color: black !important;
    }

    .nav-item > .nav-link i,
    .nav-item > .nav-link p {
        transition: color 0.3s ease;
    }

    .nav-item > .nav-link:hover i,
    .nav-item > .nav-link:hover p,
    .nav-item > .nav-link.active i,
    .nav-item > .nav-link.active p {
        color: black !important;
    }

    .brand-text,
    .nav-header,
    .nav-link p {
        color: white !important;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
    }

    .sidebar-brand,
    .sidebar-wrapper,
    .nav-link,
    .nav-item {
        position: relative;
        z-index: 2;
    }
</style>

{{-- <style>
    /* Import Font Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    /* Terapkan Poppins ke seluruh sidebar */
    .app-sidebar,
    .app-sidebar *:not(.bi):not(.nav-arrow) {
        font-family: 'Poppins', sans-serif !important;
    }

    /* Hover & Active menu */
    .nav-item > .nav-link:hover {
        background-color: #ffd100 !important;
        color: black !important;
        transition: background-color 0.3s ease-in-out;
    }
    .nav-item > .nav-link:hover i,
    .nav-item > .nav-link:hover p {
        color: black !important;
    }
    .nav-item > .nav-link.active {
        background-color: #ffd100 !important;
        color: black !important;
    }
    .nav-item > .nav-link.active i,
    .nav-item > .nav-link.active p {
        color: black !important;
    }

    /* Struktur utama sidebar */
    .app-sidebar {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #1e9128 0%, #4fad52 50%, #4c7a4e 100%);
        min-height: 100vh;
        z-index: 1;
    }

    /* Overlay hanya di dalam sidebar, tidak niban halaman */
    .sidebar-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
        z-index: 0;
        pointer-events: none; /* FIX klik */
    }

    /* Animasi crane dalam sidebar */
    .sidebar-crane {
        position: absolute;
        bottom: 20px;
        right: -100px;
        width: 150px;
        height: 120px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ffffff"><path d="M21 6h-4v2h4V6zm-5 0h-4v2h4V6zm-5 0H7v2h4V6zM6 6H2v2h4V6zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2z"/></svg>');
        background-size: contain;
        background-repeat: no-repeat;
        animation: sidebarCraneMove 25s linear infinite;
        opacity: 0.15;
        filter: drop-shadow(0 0 8px rgba(0,0,0,0.2));
        z-index: 0;
        pointer-events: none; /* FIX klik juga */
    }

    @keyframes sidebarCraneMove {
        0% { transform: translateX(0) translateY(0); }
        25% { transform: translateX(-50%) translateY(-10px); }
        50% { transform: translateX(-100%) translateY(0); }
        75% { transform: translateX(-150%) translateY(-10px); }
        100% { transform: translateX(-200%) translateY(0); }
    }

    /* Pastikan isi sidebar selalu di atas overlay/crane */
    .sidebar-brand,
    .sidebar-wrapper,
    .nav-link,
    .nav-item {
        position: relative;
        z-index: 2;
    }

    /* Perbaikan teks agar tetap terlihat */
    .brand-text,
    .nav-header,
    .nav-link p {
        color: white !important;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .nav-link {
        transition: all 0.2s ease;
    }
</style> --}}

      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="/assets/icon/logokabupatenblora.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
              style="margin-right:5px;"
            />
            <img
              src="/assets/icon/pupr.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Masjaki Blora</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer" style="color: white"></i>
                  <p style="color: white">
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/" target="_blank" class="nav-link">
                          <!-- Ikon untuk Halaman Web (Rumah) -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color: white;">Halaman Web</p>
                        </a>
                      </li>


                </ul>
              </li>




              @can('lsppenerbit')

              <li class="nav-header" style="color: white;">DAFTAR PESERTA </li>
<!-- Menu Paket Pekerjaan -->
<li class="nav-item">
    <a href="/beakseslsppenerbit" class="nav-link">
      <!-- Ikon untuk Paket Pekerjaan -->
      <i class="nav-icon bi bi-briefcase" style="color: white;"></i>
      <p style="color: white">
        Peserta Pelatihan
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

  <li class="nav-item">
    <a href="/404" class="nav-link">
      <!-- Ikon untuk Paket Pekerjaan -->
      <i class="nav-icon bi bi-briefcase" style="color: white;"></i>
      <p style="color: white">
        Peserta SKK
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

  <!-- Menu Profil Anda -->
  <li class="nav-item">
    <a href="#" class="nav-link">
      <!-- Ikon untuk Profil Anda -->
      <i class="nav-icon bi bi-person-circle" style="color: white;"></i>
      <p style="color: white">
        Profil Anda
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

        @endcan

              @can('dinas')

              <li class="nav-header" style="color: white;">PAKET PEKERJAAN </li>
<!-- Menu Paket Pekerjaan -->
<li class="nav-item">
    <a href="/bepaketpekerjaandinas" class="nav-link">
      <!-- Ikon untuk Paket Pekerjaan -->
      <i class="nav-icon bi bi-briefcase" style="color: white;"></i>
      <p style="color: white">
        Paket Pekerjaan
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

  <!-- Menu Profil Anda -->
  <li class="nav-item">
    <a href="#" class="nav-link">
      <!-- Ikon untuk Profil Anda -->
      <i class="nav-icon bi bi-person-circle" style="color: white;"></i>
      <p style="color: white">
        Profil Anda
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

        @endcan


        {{-- DASHBOARD SUPER ADMIN --}}


        @can('super_admin')

                <li class="nav-header" style="color: white;">BERANDA WEB</li>

                <li class="nav-item">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Beranda -->
                    <i class="nav-icon bi bi-house-door" style="color: white"></i>
                    <p style="color: white">
                        Beranda
                        <!-- Ikon panah kanan (Chevron) -->
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>

                <ul class="nav nav-treeview">

              <li class="nav-item">
                  <a href="/header" class="nav-link">
                    <!-- Ikon untuk Header -->
                    <i class="nav-icon bi bi-house-door text-warning"></i>
                    <p style="color: white">Header</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/404" class="nav-link">
                    <!-- Ikon untuk Informasi Kantor -->
                    <i class="nav-icon bi bi-building text-warning"></i>
                    <p style="color: white">Informasi Kantor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/404" class="nav-link">
                    <!-- Ikon untuk Sosial Media -->
                    <i class="nav-icon bi bi-facebook text-warning"></i> <!-- Bisa diganti dengan bi-twitter atau bi-instagram sesuai kebutuhan -->
                    <p style="color: white">Sosial Media</p>
                  </a>
                </li>

          </ul>
        </li>


                <li class="nav-header" style="color: white;">MAIN MENU</li>

              <li class="nav-item">

                    <li class="nav-item">
                    <a href="#" class="nav-link">
                    <!-- Ikon untuk Beranda -->
                    <i class="nav-icon bi bi-house-door" style="color: white;"></i>
                    <p style="color: white">
                      Kelembagaan
                      <!-- Ikon panah kanan (Chevron) -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/bestrukturdinas" class="nav-link">
                          <!-- Ikon untuk Header -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color:white">Struktur Organisasi</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/beprofiljakon" class="nav-link">
                          <!-- Ikon untuk Informasi Kantor -->
                          <i class="nav-icon bi bi-building text-warning"></i>
                          <p style="color: white">Profil Jakon</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/betupoksi" class="nav-link">
                          <!-- Ikon untuk Sosial Media -->
                          <i class="nav-icon bi bi-facebook text-warning"></i> <!-- Bisa diganti dengan bi-twitter atau bi-instagram sesuai kebutuhan -->
                          <p style="color: white">Tupoksi Jakon</p>
                        </a>
                      </li>

                </ul>
            </li>

            {{-- ===================================== MENU BERITA  --}}
              <li class="nav-item">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <!-- Ikon untuk Berita Jakon (Newspaper) -->
                            <i class="nav-icon bi bi-newspaper" style="color: white"></i>
                            <p style="color: white">
                              Berita Jakon
                              <!-- Ikon panah kanan (Chevron) -->
                              <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                          </a>

                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="/beberitajakon" class="nav-link">
                          <!-- Ikon untuk Berita Jakon -->
                          <i class="nav-icon bi bi-newspaper text-warning"></i>
                          <p style="color: white">Berita Jakon</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/beartikeljakon" class="nav-link">
                          <!-- Ikon untuk Artikel Jakon -->
                          <i class="nav-icon bi bi-journal-text text-warning"></i>
                          <p style="color: white">Artikel Jakon</p>
                        </a>
                      </li>

                </ul>
            </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA JAKON   --}}

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Data Jakon -->
                    <i class="nav-icon bi bi-bar-chart" style="color: white"></i>
                    <p style="color: white">
                      Data Jakon
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                  <!-- Badan Usaha Jasa Konstruksi -->
                  <li class="nav-item">
                    <a href="/bebujkjakon" class="nav-link">
                      <i class="nav-icon bi bi-building text-warning"></i> <!-- Ikon untuk Badan Usaha Jasa Konstruksi -->
                      <p style="color: white">BUJK</p>
                    </a>
                  </li>

                  <!-- Tenaga Kerja Konstruksi -->
                  <li class="nav-item">
                    <a href="/beskkdpupr" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">TKK DPUPR</p>
                    </a>
                  </li>

                  <!-- Tenaga Kerja Konstruksi (Duplicate) -->
                  <li class="nav-item">
                    <a href="/beskkallblora" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">Semua TKK</p>
                    </a>
                  </li>

                  <!-- Profil Paket Pekerjaan Konstruksi -->
                  <li class="nav-item">
                    <a href="/bepaketpekerjaan" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Profil Paket Pekerjaan Konstruksi -->
                      <p style="color: white">Profil Paket Pekerjaan</p>
                    </a>
                  </li>

                  <!-- Profil Paket Pekerjaan Konstruksi -->
                  {{-- <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-bar-chart-line text-warning"></i> <!-- Ikon untuk Data Statistik -->
                      <p style="color: white">Data Statistik</p>
                    </a>
                  </li> --}}


                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA PEMBINAAN   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk Pembinaan -->
                  <i class="nav-icon bi bi-person-check" style="color: white"></i>
                  <p style="color: white">
                    Pembinaan
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Agenda Pelatihan -->
                  <li class="nav-item">
                    <a href="/beagendapelatihan" class="nav-link">
                      <i class="nav-icon bi bi-calendar-event text-warning"></i> <!-- Ikon untuk Agenda Pelatihan -->
                      <p style="color: white">Agenda Pelatihan</p>
                    </a>
                  </li>

                  <!-- Peserta Pelatihan -->
                  <li class="nav-item">
                    <a href="/bepesertapelatihanindex" class="nav-link">
                      <i class="nav-icon bi bi-person-lines-fill text-warning"></i> <!-- Ikon untuk Peserta Pelatihan -->
                      <p style="color: white">Peserta Pelatihan</p>
                    </a>
                  </li>

                  <!-- Agenda SKK -->
                  <li class="nav-item">
                    <a href="/beagendaskk" class="nav-link">
                      <i class="nav-icon bi bi-calendar-check text-warning"></i> <!-- Ikon untuk Agenda SKK -->
                      <p style="color: white">Agenda SKK</p>
                    </a>
                  </li>

                  <!-- Peserta SKK -->
                  <li class="nav-item">
                    <a href="/beagendaskkpesertashow" class="nav-link">
                      <i class="nav-icon bi bi-person-badge text-warning"></i> <!-- Ikon untuk Peserta SKK -->
                      <p style="color: white">Peserta SKK</p>
                    </a>
                  </li>
                </ul>
              </li>


            {{-- ========================== --}}

            {{-- ===================================== MENU DATA PENGWASAN   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk Pengawasan -->
                  <i class="nav-icon bi bi-eye" style="color: white"></i> <!-- Ikon untuk pengawasan -->
                  <p style="color: white">
                    Pengawasan
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Tertib Jasa Konstruksi -->
                  <li class="nav-item">
                    <a href="/betertibjakonusaha" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib Usaha</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib Pemanfaatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib Penyelenggaraan </p>
                    </a>
                  </li>

                  <!-- Pengawasan BUJk -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-shield-lock text-warning"></i> <!-- Ikon untuk Pengawasan BUJk -->
                      <p style="color: white">Pengawasan BUJK</p>
                    </a>
                  </li>

                  <!-- Kecelakaan Kerja -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-emoji-dizzy text-warning"></i> <!-- Ikon untuk Kecelakaan Kerja -->
                      <p style="color: white">Kecelakaan Kerja</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk AHSP Keciptakaryaan -->
                  <i class="nav-icon bi bi-clipboard-check" style="color: white"></i> <!-- Ikon untuk AHSP Keciptakaryaan -->
                  <p style="color: white">
                    Satuan Harga Dasar
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Bahan -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-droplet text-warning"></i> <!-- Ikon untuk Satuan Harga Bahan -->
                      <p style="color: white">Satuan Harga Bahan</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Peralatan -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Satuan Harga Peralatan -->
                      <p style="color: white">Satuan Harga Peralatan</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA HSP Konstruksi UMum   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <!-- Ikon untuk HSP Konstruksi Umum -->
                  <i class="nav-icon bi bi-building" style="color: white"></i> <!-- Ikon untuk Konstruksi Umum -->
                  <p style="color: white">
                    HSP Konstruksi
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Divisi I -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi I -->
                      <p style="color: white">Divisi I</p>
                    </a>
                  </li>

                  <!-- Divisi II -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi II -->
                      <p style="color: white">Divisi II</p>
                    </a>
                  </li>

                  <!-- Divisi III -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi III -->
                      <p style="color: white">Divisi III</p>
                    </a>
                  </li>

                  <!-- Divisi IV -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IV -->
                      <p style="color: white">Divisi IV</p>
                    </a>
                  </li>

                  <!-- Divisi V -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi V -->
                      <p style="color: white">Divisi V</p>
                    </a>
                  </li>

                  <!-- Divisi VI -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VI -->
                      <p style="color: white">Divisi VI</p>
                    </a>
                  </li>

                  <!-- Divisi VII -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VII -->
                      <p style="color: white">Divisi VII</p>
                    </a>
                  </li>

                  <!-- Divisi VIII -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VIII -->
                      <p style="color: white">Divisi VIII</p>
                    </a>
                  </li>

                  <!-- Divisi IX -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IX -->
                      <p style="color: white">Divisi IX</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}


            {{-- ===================================== MENU DATA SHST BLORA   --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk SHST Kab Blora -->
                    <i class="nav-icon bi bi-file-earmark-text" style="color: white"></i> <!-- Ikon untuk SHST Kab Blora -->
                    <p style="color: white">
                      SHST Kab Blora
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>


                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP BINA MARGA    --}}
            <li class="nav-item">
                <a href="/404" class="nav-link">
                    <!-- Ikon untuk AHSP Bina Marga -->
                    <i class="nav-icon bi bi-archive" style="color: white;"></i> <!-- Ikon alternatif untuk AHSP Bina Marga -->
                    <p style="color: white">
                      AHSP Bina Marga
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                    </p>
                  </a>


                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA AHSP SUMBER DAYA AIR    --}}
            <li class="nav-item">
                <a href="/404" class="nav-link">
                    <!-- Ikon untuk AHSP Sumber Daya Air -->
                    <i class="nav-icon bi bi-droplet" style="color: white;"></i> <!-- Ikon untuk Sumber Daya Air -->
                    <p style="color: white">
                      AHSP SDA
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      {{-- <i class="nav-arrow bi bi-chevron-right"></i> --}}
                    </p>
                  </a>

                {{-- <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan Harga Material</p>
                    </a>
                  </li>

                </ul> --}}
              </li>

            {{-- ========================== --}}

            {{-- ===================================== MENU DATA RANTAI PASOK    --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <!-- Ikon untuk Rantai Pasok (Sumber Daya Air) -->
                    <i class="nav-icon bi bi-droplet" style="color: white;"></i> <!-- Ikon untuk Sumber Daya Air -->
                    <p style="color: white">
                        Rantai Pasok
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <!-- Asuransi Konstruksi -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-shield-lock text-warning"></i> <!-- Ikon untuk Asuransi Konstruksi -->
                            <p style="color: white">Asuransi Konstruksi</p>
                        </a>
                    </li>

                    <!-- Suplier Material -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-box text-warning"></i> <!-- Ikon untuk Suplier Material -->
                            <p style="color: white">Suplier Material</p>
                        </a>
                    </li>

                    <!-- Suplier Peralatan -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-cogs text-warning"></i> <!-- Ikon untuk Suplier Peralatan -->
                            <p style="color: white">Suplier Peralatan</p>
                        </a>
                    </li>

                    <!-- Toko Bangunan -->
                    <li class="nav-item">
                        <a href="/404" class="nav-link">
                            <i class="nav-icon bi bi-shop text-warning"></i> <!-- Ikon untuk Toko Bangunan -->
                            <p style="color: white">Toko Bangunan</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- ========================== --}}

            <li class="nav-header" style="color: white;">PERATURAN JASA KONSTRUKSI</li>

            <li class="nav-item">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <!-- Ikon untuk Peraturan -->
                      <i class="nav-icon bi bi-file-earmark-text" style="color: white;"></i> <!-- Ikon untuk Peraturan -->
                      <p style="color: white">
                        Peraturan
                        <!-- Ikon panah kanan (Chevron) -->
                        <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                    </a>

                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Undang-undang -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Undang-undang</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Pemerintah -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Pemerintah</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Presiden -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Presiden</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Keputusan Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Keputusan Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Surat Edaran Menteri -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Surat Edaran Menteri</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Referensi -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Referensi</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Daerah -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Daerah</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Gubernur -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Gubernur</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Peraturan Walikota/Bupati -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Peraturan Walikota/Bupati</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/404" class="nav-link">
                          <!-- Ikon untuk Surat Keputusan -->
                          <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
                          <p style="color: white">Surat Keputusan</p>
                        </a>
                      </li>

                    </ul>
                  </li>


        {{-- ========================== --}}

            <li class="nav-header" style="color: white;">Administrator</li>



            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer" style="color: white"></i>
                  <p style="color: white">
                    Daftar Akun
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="/allakun" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-gear text-warning"></i>
                      <p style="color: white;">Semua Akun</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-gear text-warning"></i>
                      <p style="color: white;">Super Admin</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-fill text-warning"></i>
                      <p style="color: white;">Admin</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i>
                      <p style="color: white;">Pekerja</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-truck-front-fill text-warning"></i>
                      <p style="color: white;">Supplier Pabrik</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i>
                      <p style="color: white;">Supplier Peralatan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-shop text-warning"></i>
                      <p style="color: white;">Supplier Toko Bangunan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-journal-text text-warning"></i>
                      <p style="color: white;">LSP Penerbit</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-building text-warning"></i>
                      <p style="color: white;">Dinas</p>
                    </a>
                  </li>
                </ul>
              </li>

              @endcan
{{--
              <li class="nav-header" style="color: white;" >ADMINISTRATOR DATABASE</li>

            <li class="nav-item">

          <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-house-door" style="color: white;"></i>
                  <p style="color: white">
                    Admin
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

              <ul class="nav nav-treeview">

                  <li class="nav-item">
                      <a href="/404" class="nav-link">
                        <i class="nav-icon bi bi-house-door text-warning"></i>
                        <p style="color: white">Admin</p>
                      </a>
                    </li>


              </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-newspaper text-success"></i> <!-- Ikon untuk Berita -->
                    <p style="color: white">
                        Berita
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-newspaper" style="color: white"></i>

                    <p style="color: white">
                        Kelembagaan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-table text-success"></i> <!-- Ikon untuk Data Jakon -->
                    <p style="color: white">
                        Data Jakon
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-people text-success"></i> <!-- Ikon untuk Pembinaan -->
                    <p style="color: white">
                        Pembinaan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-eye text-success"></i> <!-- Ikon untuk Pengawasan -->
                    <p style="color: white">
                        Pengawasan
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-clipboard-check text-success"></i> <!-- Ikon untuk AHSP -->
                    <p style="color: white">
                        AHSP
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-arrow-repeat text-success"></i> <!-- Ikon untuk Rantai Pasok -->
                    <p style="color: white">
                        Rantai Pasok
                    </p>
                </a>
            </li> --}}


            {{-- ---------------------------------------------  --}}

            <li class="nav-header" style="color: white;">LOGOUT</li>

            <li class="nav-item">
                {{-- <li class="nav-item"> --}}
                    <li class="nav-item">
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf  <!-- This is for CSRF protection -->
                            <button type="submit" class="nav-link" style="background: none; border: none; color: red;">
                                <!-- Ikon untuk Logout -->
                                <i class="nav-icon bi bi-box-arrow-right text-danger"></i> <!-- Ikon untuk Logout -->
                                <p style="color: red">Logout</p>
                            </button>
                        </form>
                    </li>

                  {{-- </li> --}}
                  </li>

            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->


<script>
    // Toggle sub-menu saat item Dashboard diklik
    $(".nav-item > a").click(function (e) {
      // Pastikan kita hanya menampilkan sub-menu yang terkait dengan item yang diklik
      var $this = $(this).next(".nav-treeview");

      // Cek apakah sub-menu sudah terbuka
      if ($this.is(":visible")) {
        $this.slideUp(); // Tutup jika terbuka
      } else {
        $(".nav-treeview").slideUp(); // Tutup semua sub-menu lainnya
        $this.slideDown(); // Buka sub-menu yang diklik
      }
    });
</script>
