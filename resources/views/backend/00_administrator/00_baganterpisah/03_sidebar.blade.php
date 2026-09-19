<style>
/* ============================================================
   OVERRIDE STYLE SIDEBAR – PUTIH + HIJAU KHAS BLORA
   ============================================================ */
:root {
    --blora-green:        #16A34A;
    --blora-green-dark:   #15803D;
    --blora-green-deep:   #14532D;
    --blora-green-light:  #4ADE80;
    --blora-green-bright: #22C55E;
    --blora-green-soft:   #F0FDF4;
    --blora-green-mid:    #DCFCE7;
    --blora-green-glow:   rgba(22, 163, 74, 0.15);
    --blora-green-glow2:  rgba(22, 163, 74, 0.08);

    --white:      #FFFFFF;
    --bg-soft:    #F8FAFC;
    --border:     #E9EDF4;
    --border-hover: #D0D8E3;
    --text-dark:  #1A2B4A;
    --text-medium:#4A5A72;
    --text-muted: #6B7A93;
    --danger:     #DC3545;
    --danger-soft:#FEF2F2;
    --danger-mid: #FECACA;
}

/* ============================================================
   SIDEBAR UTAMA – PUTIH + AKSEN HIJAU
   ============================================================ */
.app-sidebar {
    background: var(--white) !important;
    background-image: none !important;
    animation: none !important;
    color: var(--text-dark) !important;
    box-shadow: 2px 0 16px rgba(22, 163, 74, 0.04) !important;
    border-right: 1px solid var(--border) !important;

    position: relative;
    overflow: visible !important;
    display: flex !important;
    flex-direction: column !important;
    height: 100vh !important;
    min-height: 100vh !important;
    max-height: 100vh !important;
    padding: 0 !important;
}

.app-sidebar::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 4px; height: 100%;
    background: linear-gradient(180deg,
        var(--blora-green-deep)   0%,
        var(--blora-green)        25%,
        var(--blora-green-bright) 50%,
        var(--blora-green)        75%,
        var(--blora-green-deep)   100%);
    background-size: 100% 200%;
    animation: sidebarAccent 6s ease-in-out infinite;
    z-index: 2;
    pointer-events: none;
}

@keyframes sidebarAccent {
    0%, 100% { background-position: 0% 0%; }
    50%      { background-position: 0% 100%; }
}

/* ============================================================
   BRAND
   ============================================================ */
.app-sidebar .sidebar-brand {
    padding: 20px 20px 16px 20px !important;
    border-bottom: 1px solid var(--border) !important;
    flex-shrink: 0 !important;
    background: var(--white) !important;
}

.app-sidebar .brand-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 14px !important;
    background: linear-gradient(135deg, var(--blora-green-soft) 0%, var(--blora-green-mid) 100%) !important;
    border: 1px solid rgba(22, 163, 74, 0.15) !important;
    text-decoration: none !important;
    transition: 0.3s ease !important;
}

.app-sidebar .brand-link:hover {
    border-color: rgba(22, 163, 74, 0.3) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px var(--blora-green-glow) !important;
}

.app-sidebar .brand-image {
    width: 32px !important;
    height: 32px !important;
    object-fit: contain !important;
    border-radius: 8px !important;
    background: #FFFFFF !important;
    padding: 2px !important;
    opacity: 1 !important;
    box-shadow: 0 1px 4px rgba(22, 163, 74, 0.15) !important;
    transition: transform 0.3s ease !important;
}

.app-sidebar .brand-link:hover .brand-image {
    transform: scale(1.08);
}

.app-sidebar .brand-text {
    font-weight: 700 !important;
    font-size: 0.95rem !important;
    background: linear-gradient(135deg, var(--blora-green-deep) 0%, var(--blora-green) 100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    background-clip: text !important;
    letter-spacing: 0.3px;
    opacity: 1 !important;
}

/* ============================================================
   SIDEBAR WRAPPER – SCROLL
   ============================================================ */
.app-sidebar .sidebar-wrapper {
    flex: 1 1 auto !important;
    overflow-y: auto !important;
    overflow-x: hidden !important;
    -webkit-overflow-scrolling: touch !important;
    padding: 12px 12px 20px 12px !important;
    background: var(--white) !important;
    min-height: 0 !important;
    position: relative !important;

    scrollbar-width: thin !important;
    scrollbar-color: #16A34A #F0FDF4 !important;
}

.app-sidebar .sidebar-wrapper::-webkit-scrollbar {
    width: 8px !important;
    height: 8px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-track {
    background: #F0FDF4 !important;
    border-radius: 10px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-thumb {
    background: linear-gradient(180deg,
        #4ADE80 0%,
        #22C55E 50%,
        #16A34A 100%) !important;
    border-radius: 10px !important;
    border: 2px solid #F0FDF4 !important;
    min-height: 40px !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(180deg,
        #22C55E 0%,
        #16A34A 50%,
        #15803D 100%) !important;
}
.app-sidebar .sidebar-wrapper::-webkit-scrollbar-corner {
    background: transparent !important;
}

/* ============================================================
   MENU LINK
   ============================================================ */
.app-sidebar .sidebar-menu .nav-item > .nav-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 10px !important;
    color: var(--text-dark) !important;
    text-decoration: none !important;
    font-weight: 500 !important;
    font-size: 0.85rem !important;
    transition: all 0.25s ease !important;
    position: relative !important;
    cursor: pointer;
    background: transparent !important;
    border: none !important;
    width: 100% !important;
    text-align: left !important;
}

.app-sidebar .sidebar-menu .nav-item > .nav-link::before {
    content: '';
    position: absolute;
    left: 0; top: 50%;
    transform: translateY(-50%) scaleY(0);
    width: 3px; height: 60%;
    border-radius: 0 3px 3px 0;
    background: linear-gradient(180deg, var(--blora-green-light) 0%, var(--blora-green) 100%);
    transition: transform 0.3s ease;
}

.app-sidebar .sidebar-menu .nav-item > .nav-link:hover {
    background: linear-gradient(90deg, var(--blora-green-soft) 0%, transparent 100%) !important;
    color: var(--blora-green-deep) !important;
    padding-left: 18px !important;
}
.app-sidebar .sidebar-menu .nav-item > .nav-link:hover::before {
    transform: translateY(-50%) scaleY(1);
}

.app-sidebar .sidebar-menu .nav-link,
.app-sidebar .sidebar-menu .nav-link p,
.app-sidebar .sidebar-menu .nav-link span {
    color: var(--text-dark) !important;
}

.app-sidebar .sidebar-menu .nav-link p {
    margin: 0 !important;
    font-size: 0.85rem !important;
    font-weight: 500 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    line-height: 1.3 !important;
}

.app-sidebar .sidebar-menu .nav-link .nav-icon {
    font-size: 1.05rem !important;
    width: 22px !important;
    text-align: center !important;
    color: var(--text-muted) !important;
    transition: all 0.25s ease !important;
    flex-shrink: 0 !important;
}
.app-sidebar .sidebar-menu .nav-link:hover .nav-icon {
    color: var(--blora-green) !important;
    transform: scale(1.12);
}

.app-sidebar .sidebar-menu .nav-link .nav-arrow {
    font-size: 0.75rem !important;
    color: var(--text-muted) !important;
    transition: transform 0.3s ease !important;
    margin-left: auto !important;
}

.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link {
    background: linear-gradient(90deg, var(--blora-green-soft) 0%, transparent 100%) !important;
    color: var(--blora-green-deep) !important;
}
.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link::before {
    transform: translateY(-50%) scaleY(1);
}
.app-sidebar .sidebar-menu .nav-item.menu-open > .nav-link .nav-icon {
    color: var(--blora-green) !important;
}

/* ============================================================
   SUB-MENU
   ============================================================ */
.app-sidebar .sidebar-menu .nav-treeview {
    list-style: none !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link {
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 8px 12px 8px 30px !important;
    border-radius: 8px !important;
    color: var(--text-medium) !important;
    text-decoration: none !important;
    font-size: 0.8rem !important;
    font-weight: 400 !important;
    transition: all 0.25s ease !important;
    position: relative !important;
    background: transparent !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover {
    background: var(--blora-green-soft) !important;
    color: var(--blora-green-deep) !important;
    padding-left: 34px !important;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover .nav-icon {
    color: var(--blora-green) !important;
    transform: scale(1.12);
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link .nav-icon {
    font-size: 0.85rem !important;
    width: 18px !important;
    text-align: center !important;
    color: var(--text-muted) !important;
    transition: all 0.25s ease !important;
    flex-shrink: 0 !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link p {
    color: var(--text-medium) !important;
    margin: 0 !important;
    font-size: 0.8rem !important;
    line-height: 1.35 !important;
}

.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link::before {
    content: '';
    position: absolute;
    left: 18px; top: 50%;
    transform: translateY(-50%);
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--blora-green-mid);
    transition: all 0.25s ease;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-item .nav-link:hover::before {
    background: var(--blora-green);
    box-shadow: 0 0 0 4px var(--blora-green-glow2);
    transform: translateY(-50%) scale(1.2);
}

.app-sidebar .sidebar-menu .nav-treeview .nav-link .nav-icon.text-warning {
    color: var(--blora-green) !important;
    opacity: 0.9;
}
.app-sidebar .sidebar-menu .nav-treeview .nav-link:hover .nav-icon.text-warning {
    color: var(--blora-green-deep) !important;
    opacity: 1;
}

/* ============================================================
   NAV HEADER
   ============================================================ */
.app-sidebar .sidebar-menu .nav-header {
    font-size: 0.68rem !important;
    font-weight: 700 !important;
    color: var(--blora-green-deep) !important;
    text-transform: uppercase !important;
    letter-spacing: 1.2px !important;
    padding: 14px 14px 6px 14px !important;
    background: transparent !important;
}

.app-sidebar .sidebar-menu .nav-header > div[style*="background:#ffa500"] {
    background: linear-gradient(90deg, var(--blora-green) 0%, transparent 100%) !important;
    opacity: 0.35 !important;
}

.app-sidebar .sidebar-menu .nav-treeview > div > p {
    background: linear-gradient(135deg, var(--blora-green-soft) 0%, var(--blora-green-mid) 100%) !important;
    color: var(--blora-green-deep) !important;
    border: 1px solid rgba(22, 163, 74, 0.15) !important;
    box-shadow: none !important;
}
.app-sidebar .sidebar-menu .nav-treeview > div > p i {
    color: var(--blora-green) !important;
}

.app-sidebar .sidebar-menu .nav-header[style*="color: red"],
.app-sidebar .sidebar-menu .nav-header[style*="color:red"] {
    color: var(--danger) !important;
}

/* ============================================================
   LOGOUT BUTTON (sidebar)
   ============================================================ */
.app-sidebar .sidebar-menu .nav-item form button.nav-link {
    background: transparent !important;
    color: var(--danger) !important;
    border: none !important;
    display: flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 10px 14px !important;
    border-radius: 10px !important;
    font-size: 0.85rem !important;
    font-weight: 600 !important;
    width: 100% !important;
    cursor: pointer !important;
    transition: all 0.25s ease !important;
    text-align: left !important;
    font-family: inherit !important;
}
.app-sidebar .sidebar-menu .nav-item form button.nav-link:hover {
    background: linear-gradient(90deg, var(--danger-soft) 0%, transparent 100%) !important;
    padding-left: 18px !important;
}
.app-sidebar .sidebar-menu .nav-item form button.nav-link i,
.app-sidebar .sidebar-menu .nav-item form button.nav-link p {
    color: var(--danger) !important;
}

/* ============================================================
   RESPONSIVE – MOBILE
   ============================================================ */
@media (max-width: 768px) {
    .app-sidebar {
        position: fixed !important;
        top: 0 !important;
        left: -280px !important;
        width: 280px !important;
        height: 100vh !important;
        max-height: 100vh !important;
        z-index: 1050 !important;
        overflow: visible !important;
        transition: left 0.3s ease !important;
    }
    .app-sidebar.active { left: 0 !important; }
    .app-sidebar .sidebar-wrapper {
        max-height: calc(100vh - 100px) !important;
    }
}

/* ============================================================
   MODAL LOGOUT – MODERN ELEGAN (MERAH, TANPA EFEK)
   ============================================================ */
.logout-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(15, 23, 42, 0.5);
}

.logout-modal-overlay.active {
    display: flex;
}

.logout-modal {
    background: #FFFFFF;
    border: 1px solid #E9EDF4;
    border-radius: 14px;
    width: 100%;
    max-width: 360px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.10);
}

/* --- Header --- */
.logout-modal-header {
    padding: 24px 24px 16px 24px;
    text-align: center;
    border-bottom: 1px solid #F0F0F0;
}

.logout-modal-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 12px auto;
    border-radius: 12px;
    background: #FEF2F2;
    border: 1px solid #FECACA;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #DC3545;
    font-size: 22px;
}

.logout-modal-title {
    font-size: 1rem;
    font-weight: 700;
    color: #1A2B4A;
    margin: 0 0 4px 0;
    letter-spacing: -0.2px;
}

.logout-modal-subtitle {
    font-size: 0.7rem;
    font-weight: 500;
    color: #6B7A93;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* --- Body --- */
.logout-modal-body {
    padding: 20px 24px 8px 24px;
    text-align: center;
}

.logout-modal-message {
    font-size: 0.82rem;
    color: #4A5A72;
    line-height: 1.6;
    margin: 0 0 16px 0;
}

.logout-modal-message strong {
    color: #DC3545;
    font-weight: 600;
}

.logout-user-info {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    background: #F8FAFC;
    border: 1px solid #E9EDF4;
    border-radius: 10px;
    margin-bottom: 4px;
    text-align: left;
}

.logout-user-avatar {
    width: 34px;
    height: 34px;
    border-radius: 8px;
    background: #DC3545;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    font-size: 13px;
    font-weight: 700;
    flex-shrink: 0;
}

.logout-user-detail { flex: 1; min-width: 0; }

.logout-user-name {
    font-size: 0.78rem;
    font-weight: 600;
    color: #1A2B4A;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.logout-user-role {
    font-size: 0.65rem;
    font-weight: 500;
    color: #6B7A93;
    margin: 1px 0 0 0;
}

/* --- Footer --- */
.logout-modal-footer {
    display: flex;
    gap: 8px;
    padding: 16px 24px 20px 24px;
}

.logout-btn {
    flex: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 9px 14px;
    border-radius: 8px;
    font-size: 0.78rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.15s ease, border-color 0.15s ease;
    border: none;
    text-decoration: none;
    font-family: inherit;
}

.logout-btn i {
    font-size: 0.85rem;
}

.logout-btn-cancel {
    background: #FFFFFF;
    color: #4A5A72;
    border: 1px solid #E9EDF4;
}

.logout-btn-cancel:hover {
    background: #F8FAFC;
    border-color: #D0D8E3;
    color: #1A2B4A;
}

.logout-btn-confirm {
    background: #DC3545;
    color: #FFFFFF;
}

.logout-btn-confirm:hover {
    background: #B02A37;
    color: #FFFFFF;
}


.logout-modal-footer { display: flex; justify-content: center; align-items: center; gap: 12px; }
/* --- Responsive --- */
@media (max-width: 480px) {
    .logout-modal {
        max-width: 92%;
        border-radius: 12px;
    }
    .logout-modal-header { padding: 20px 18px 14px 18px; }
    .logout-modal-icon { width: 42px; height: 42px; font-size: 18px; }
    .logout-modal-title { font-size: 0.92rem; }
    .logout-modal-body { padding: 16px 18px 6px 18px; }
    .logout-modal-footer {
        padding: 12px 18px 16px 18px;
        flex-direction: column;
    }
    .logout-btn { width: 100%; }
}
</style>


      <!--begin::Sidebar-->
      {{-- <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> --}}
        <aside class="app-sidebar shadow" id="appSidebar">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
            <!--begin::Brand Image-->
            <img
              src="/assets/icon/logokabupatenblora.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
              style="margin-right:5px;"
            />
            {{-- <img
              src="/assets/icon/pupr.png"
              alt="Logo Kabupaten Blora"
              class="brand-image opacity-75 shadow"
            /> --}}
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Mas Jaki Blora</span>
            <!--end::Brand Text-->
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
  <li class="nav-header" style="color: green; padding-bottom: 6px;">
            Dashboard Mas Jaki
        </li>
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
                        <a href="/web" target="_blank" class="nav-link">
                          <!-- Ikon untuk Halaman Web (Rumah) -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color: white;">Halaman Web</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="/dashboard" target="_blank" class="nav-link">
                          <!-- Ikon untuk Halaman Web (Rumah) -->
                          <i class="nav-icon bi bi-house-door text-warning"></i>
                          <p style="color: white;">Halaman Dashboard</p>
                        </a>
                      </li>


                </ul>
              </li>


              @can('pekerja')


                 <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon bi bi-android2" style="color: white"></i>
                    <p style="color: white">
                    Menu Android
                    <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                </a>
                </li>

              <li class="nav-item">
                <a href="/hakaksespekerjaskkdaftar" class="nav-link">
                    <i class="nav-icon bi bi-file-earmark-text" style="color: white"></i>
                  {{-- <i class="nav-icon bi bi-folder2-open" style="color: white"></i> <!-- Berkas Anda --> --}}
                  <p style="color: white">
                    Daftar SKK
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/hakaksespekerjaskk" class="nav-link">
                  <i class="nav-icon bi bi-folder2-open" style="color: white"></i> <!-- Berkas Anda -->
                  <p style="color: white">
                    Kegiatan Anda
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/hakaksespekerjaberkas" class="nav-link">
                  <i class="nav-icon bi bi-graph-up" style="color: white"></i> <!-- Status -->
                  <p style="color: white">
                    Status <br> Pendaftaran
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              </li>

<li class="nav-item">
  <a href="/downsertifikatskk" class="nav-link">
    <i class="nav-icon bi bi-file-earmark-arrow-down" style="color: white"></i>
    <p style="color: white">
      Download <br> Sertifikat
      <i class="nav-arrow bi bi-chevron-right"></i>
    </p>
  </a>
</li>

              {{-- <li class="nav-item">
                <a href="/beprofile" class="nav-link">
                  <i class="nav-icon bi bi-person-circle" style="color: white"></i> <!-- Profil Anda -->
                  <p style="color: white">
                    Profil Anda
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              </li> --}}

                @endcan




              @can('lsppenerbit')

              <li class="nav-header" style="color: white;">DAFTAR PESERTA </li>
<!-- Menu Paket Pekerjaan -->
{{-- <li class="nav-item">
    <a href="/beakseslsppenerbit" class="nav-link">
      <!-- Ikon untuk Paket Pekerjaan -->
      <i class="nav-icon bi bi-briefcase" style="color: white;"></i>
      <p style="color: white">
        Peserta Pelatihan
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li> --}}

  <li class="nav-item">
    <a href="/beakseslsppenerbitskk" class="nav-link">
      <!-- Ikon untuk Paket Pekerjaan -->
      <i class="nav-icon bi bi-briefcase" style="color: white;"></i>
      <p style="color: white">
        Peserta SKK
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li>

  <!-- Menu Profil Anda -->
  {{-- <li class="nav-item">
    <a href="/beprofile" class="nav-link">
      <!-- Ikon untuk Profil Anda -->
      <i class="nav-icon bi bi-person-circle" style="color: white;"></i>
      <p style="color: white">
        Profil Anda
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li> --}}

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
  {{-- <li class="nav-item">
    <a href="/beprofile" class="nav-link">
      <!-- Ikon untuk Profil Anda -->
      <i class="nav-icon bi bi-person-circle" style="color: white;"></i>
      <p style="color: white">
        Profil Anda
        <i class="nav-arrow bi bi-chevron-right"></i>
      </p>
    </a>
  </li> --}}

        @endcan

@can('admin')
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
                    <a href="/beagendaskkdatapeserta" class="nav-link">
                      <i class="nav-icon bi bi-person-badge text-warning"></i> <!-- Ikon untuk Peserta SKK -->
                      <p style="color: white">Peserta SKK</p>
                    </a>
                  </li>
                </ul>
              </li>



@endcan

@can('operator')
<li class="nav-header" style="color: white;">DASHBOARD KONSULTAN</li>


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
                  {{-- <li class="nav-item">
                    <a href="/bebujkjakon" class="nav-link">
                      <i class="nav-icon bi bi-building text-warning"></i> <!-- Ikon untuk Badan Usaha Jasa Konstruksi -->
                      <p style="color: white">BUJK</p>
                    </a>
                  </li> --}}

                  <!-- Tenaga Kerja Konstruksi -->
                  {{-- <li class="nav-item">
                    <a href="/beskkdpupr" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">TKK DPUPR</p>
                    </a>
                  </li> --}}

                  <!-- Tenaga Kerja Konstruksi (Duplicate) -->
                  {{-- <li class="nav-item">
                    <a href="/beskkallblora" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">Semua TKK</p>
                    </a>
                  </li> --}}

                  <!-- Profil Paket Pekerjaan Konstruksi -->
                  <li class="nav-item">
                    <a href="/bepaketpekerjaan" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Profil Paket Pekerjaan Konstruksi -->
                      <p style="color: white">Profil <br> Paket Pekerjaan</p>
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
                      <p style="color: white">Tertib <br> Usaha</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/betertibjakonpemanfaatan" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib <br> Pemanfaatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/betertibjakonpenyelenggaraan" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib <br> Penyelenggaraan </p>
                    </a>
                  </li>



                </ul>
              </li>

                 {{-- <li class="nav-item">
                <a href="/beprofile" class="nav-link">
                  <i class="nav-icon bi bi-person-circle" style="color: white"></i> <!-- Profil Anda -->
                  <p style="color: white">
                    Profil Anda
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
              </li> --}}

@endcan

        {{-- DASHBOARD SUPER ADMIN --}}

        @can('super_admin')

        <li class="nav-header" style="color: green; padding-bottom: 6px;">
            Informasi Umum
        </li>

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

          </ul>
        </li>

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

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

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

                <li class="nav-header" style="color: green;">Master Data
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

                        <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

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
                      <li class="nav-item">
  <a href="/bedokumentasijakon" class="nav-link">
    <!-- Ikon untuk Dokumentasi Jakon -->
    <i class="nav-icon bi bi-file-earmark-text text-warning"></i>
    <p style="color: white">Dokumentasi Jakon</p>
  </a>
</li>


                                              {{-- <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan
    </p>
</div> --}}

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

                        <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>
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
                      <p style="color: white">TKK DPUPR (2024) </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/beagendaskktkk" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i> <!-- Ikon untuk Tenaga Kerja Konstruksi -->
                      <p style="color: white">TKK DPUPR ( > 2025) </p>
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
                      <p style="color: white">Profil <br> Paket Pekerjaan</p>
                    </a>
                  </li>

                                          <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan <br> SKK Tenaga Kerja
    </p>
</div>
<li class="nav-item">
    <a href="/settingssekolah" class="nav-link">
        <i class="nav-icon bi bi-building text-warning"></i> <!-- Ikon Universitas/Sekolah -->
        <p style="color: white">Universitas/Sekolah</p>
    </a>
</li>

<li class="nav-item">
    <a href="/settingsjenjangpendidikan" class="nav-link">
        <i class="nav-icon bi bi-mortarboard-fill text-warning"></i> <!-- Ikon Jenjang Pendidikan -->
        <p style="color: white">Jenjang Pendidikan</p>
    </a>
</li>

<li class="nav-item">
    <a href="/settingsjabatankerja" class="nav-link">
        <i class="nav-icon bi bi-person-badge-fill text-warning"></i> <!-- Ikon Jabatan Kerja -->
        <p style="color: white">Jabatan Kerja</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="/404" class="nav-link">
        <i class="nav-icon bi bi-journal-bookmark-fill text-warning"></i> <!-- Ikon Jurusan -->
        <p style="color: white">Jurusan</p>
    </a>
</li> --}}



<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan <br> Profil Paket Pekerjaan
    </p>
</div>

   <li class="nav-item">
                    <a href="/beasosiasi" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Profil Paket Pekerjaan Konstruksi -->
                      <p style="color: white">Daftar Asosiasi</p>
                    </a>
                  </li>

                  <!-- Profil Paket Pekerjaan Konstruksi -->
<li class="nav-item">
  <a href="/settingsjenispekerjaan" class="nav-link">
    <i class="nav-icon bi bi-briefcase text-warning"></i> <!-- Ikon untuk Jenis Pekerjaan -->
    <p style="color: white">Jenis Pekerjaan</p>
  </a>
</li>

<li class="nav-item">
  <a href="/settingsstatuspekerjaan" class="nav-link">
    <i class="nav-icon bi bi-clipboard-check text-warning"></i> <!-- Ikon untuk Status Pekerjaan -->
    <p style="color: white">Status Pekerjaan</p>
  </a>
</li>

<li class="nav-item">
  <a href="/settingssumberdana" class="nav-link">
    <i class="nav-icon bi bi-cash-stack text-warning"></i> <!-- Ikon untuk Sumber Dana -->
    <p style="color: white">Sumber Dana</p>
  </a>
</li>

<li class="nav-item">
  <a href="/settingstahunpilihan" class="nav-link">
    <i class="nav-icon bi bi-calendar-event text-warning"></i> <!-- Ikon untuk Tahun Pelaksanaan -->
    <p style="color: white">Tahun Pelaksanaan</p>
  </a>
</li>


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

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

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
                    <a href="/beagendaskkdatapeserta" class="nav-link">
                      <i class="nav-icon bi bi-person-badge text-warning"></i> <!-- Ikon untuk Peserta SKK -->
                      <p style="color: white">Peserta SKK</p>
                    </a>
                  </li>

                                    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan
    </p>
</div>

   <!-- Peserta SKK -->
<li class="nav-item">
  <a href="/settingssekolah" class="nav-link">
    <i class="nav-icon bi bi-building text-warning"></i> <!-- Ikon Universitas/Sekolah -->
    <p style="color: white">Universitas/Sekolah</p>
  </a>
</li>

<li class="nav-item">
  <a href="/alllsppenerbit" class="nav-link">
    <i class="nav-icon bi bi-person-badge text-warning"></i> <!-- Ikon Akun LSP SKK -->
    <p style="color: white">Akun LSP SKK</p>
  </a>
</li>

<li class="nav-item">
  <a href="/settingskatepelatihan" class="nav-link">
    <i class="nav-icon bi bi-card-list text-warning"></i> <!-- Ikon Kategori Pelatihan -->
    <p style="color: white">Kategori Pelatihan</p>
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

    <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

                  <!-- Tertib Jasa Konstruksi -->
                  <li class="nav-item">
                    <a href="/betertibjakonusaha" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib <br> Usaha</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/betertibjakonpemanfaatan" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib <br> Pemanfaatan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/betertibjakonpenyelenggaraan" class="nav-link">
                      <i class="nav-icon bi bi-check-circle text-warning"></i> <!-- Ikon untuk Tertib Jasa Konstruksi -->
                      <p style="color: white">Tertib <br> Penyelenggaraan </p>
                    </a>
                  </li>

                  <!-- Pengawasan BUJk -->
                  <li class="nav-item">
                    <a href="/bepengawasanbujk" class="nav-link">
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

<div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Pengaturan
    </p>
</div>

<li class="nav-item">
  <a href="/settingssubklasifikasi" target="_blank" class="nav-link">
    <i class="nav-icon bi bi-diagram-3 text-warning"></i>
    <p style="color: white;">Sub Klasifikasi</p>
  </a>
</li>

<li class="nav-item">
  <a href="/settingstandatangan" target="_blank" class="nav-link">
    <i class="nav-icon bi bi-pen text-warning"></i>
    <p style="color: white;">Tanda Tangan</p>
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
                    Satuan <br> Harga Dasar
                    <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                      <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

                  <li class="nav-item">
                    <a href="/besatuanhargamaterial" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Satuan <br> Harga Material</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Bahan -->
                  <li class="nav-item">
                    <a href="/besatuanhargaupahpekerjaan" class="nav-link">
                      <i class="nav-icon bi bi-droplet text-warning"></i> <!-- Ikon untuk Satuan Harga Bahan -->
                      <p style="color: white">Satuan <br> Harga Upah</p>
                    </a>
                  </li>

                  <!-- Satuan Harga Peralatan -->
                  <li class="nav-item">
                    <a href="/besatuanhargaperalatan" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i> <!-- Ikon untuk Satuan Harga Peralatan -->
                      <p style="color: white">Satuan <br> Harga Peralatan</p>
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
                      <div style="margin-bottom: 10px; margin-top: 10px;">
    <p style="
        font-size: 13px;
        margin-left: 12px;
        margin-bottom: -5px;
        font-weight: bold;
        color: #000000;
        background-color: #ffd100;
        display: inline-block;
        padding: 4px 12px;
        border-radius: 8px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    ">
        <i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i> Main Menu
    </p>
</div>

                  <li class="nav-item">
                    <a href="/besatuandiv1" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi I -->
                      <p style="color: white">Divisi I <br> Persiapan Pekerjaan</p>
                    </a>
                  </li>

                  <!-- Divisi II -->
                  <li class="nav-item">
                    <a href="/besatuandiv2" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi II -->
                      <p style="color: white">Divisi II <br> Pekerjaan Struktur</p>
                    </a>
                  </li>

                  <!-- Divisi III -->
                  <li class="nav-item">
                    <a href="/besatuandiv3" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi III -->
                      <p style="color: white">Divisi III <br> Pekerjaan Arsitektur</p>
                    </a>
                  </li>

                  <!-- Divisi IV -->
                  <li class="nav-item">
                    <a href="/besatuandiv4" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IV -->
                      <p style="color: white">Divisi IV <br> Pekerjaan Lansekap</p>
                    </a>
                  </li>

                  <!-- Divisi V -->
                  <li class="nav-item">
                    <a href="/besatuandiv5" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi V -->
                      <p style="color: white">Divisi V <br> Mekanikal & Elektrikal </p>
                    </a>
                  </li>

                  <!-- Divisi VI -->
                  <li class="nav-item">
                    <a href="/besatuandiv6" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VI -->
                      <p style="color: white">Divisi VI <br> Pekerjaan Plumbing </p>
                    </a>
                  </li>

                  <!-- Divisi VII -->
                  <li class="nav-item">
                    <a href="/besatuandiv7" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VII -->
                      <p style="color: white">Divisi VII <br> Jalan Permukiman</p>
                    </a>
                  </li>

                  <!-- Divisi VIII -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi VIII -->
                      <p style="color: white">Divisi VIII <br> Drainase Jalan</p>
                    </a>
                  </li>

                  <!-- Divisi IX -->
                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-gear text-warning"></i> <!-- Ikon untuk Divisi IX -->
                      <p style="color: white">Divisi IX <br> Jaringan Pipa</p>
                    </a>
                  </li>
                </ul>
              </li>

            {{-- ========================== --}}


            {{-- ===================================== MENU DATA SHST BLORA   --}}
            <li class="nav-item">
                <a href="/beshstkabblora" class="nav-link">
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
                {{-- <a href="/404" class="nav-link">
                    <i class="nav-icon bi bi-archive" style="color: white;"></i> <!-- Ikon alternatif untuk AHSP Bina Marga -->
                    <p style="color: white">
                      AHSP Bina Marga
                    </p>
                  </a> --}}


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
                {{-- <a href="/404" class="nav-link">
                    <!-- Ikon untuk AHSP Sumber Daya Air -->
                    <i class="nav-icon bi bi-droplet" style="color: white;"></i> <!-- Ikon untuk Sumber Daya Air -->
                    <p style="color: white">
                      AHSP SDA
                    </p>
                  </a> --}}

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
                    <!-- Ikon untuk SHST Kab Blora -->
                    <i class="nav-icon bi bi-file-earmark-text" style="color: white"></i> <!-- Ikon untuk SHST Kab Blora -->
                    <p style="color: white">
                      Rantai Pasok
                      <!-- Ikon panah kanan (Chevron) diganti dengan ikon panah -->
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                  </a>


                <ul class="nav nav-treeview">
                  <!-- Satuan Harga Material -->

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Asuransi Konstruksi</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Supplier Material</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Supplier Peratalan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/404" class="nav-link">
                      <i class="nav-icon bi bi-archive text-warning"></i> <!-- Ikon untuk Satuan Harga Material -->
                      <p style="color: white">Toko Bangunan</p>
                    </a>
                  </li>

                </ul>
              </li>

            {{-- ========================== --}}

            <li class="nav-header" style="color: orange;">Peraturan
                            <div style="height:1px; background:#ffa500; opacity:0.5; margin-top:6px;"></div>
            </li>

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

            <li class="nav-header" style="color: orange;">Administrator
                            <div style="height:1px; background:#ffa500; opacity:0.5; margin-top:6px;"></div>
            </li>



            <li class="nav-item">
                {{-- <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer" style="color: white"></i>
                  <p style="color: white">
                    Pengaturan Data
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a> --}}


                <ul class="nav nav-treeview">


                </ul>
            </li>

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
                    <a href="/allsuperadmin" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-gear text-warning"></i>
                      <p style="color: white;">Super Admin</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/alladmin" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-fill text-warning"></i>
                      <p style="color: white;">Admin</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/allpekerja" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-person-workspace text-warning"></i>
                      <p style="color: white;">Pekerja</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/allsupppabrik" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-truck-front-fill text-warning"></i>
                      <p style="color: white;">Supplier Pabrik</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/allsuppperalatan" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-tools text-warning"></i>
                      <p style="color: white;">Supplier Peralatan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/allsupptokobangunan" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-shop text-warning"></i>
                      <p style="color: white;">Supplier Toko Bangunan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/alllsppenerbit" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-journal-text text-warning"></i>
                      <p style="color: white;">LSP Penerbit</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/alldinas" target="_blank" class="nav-link">
                      <i class="nav-icon bi bi-building text-warning"></i>
                      <p style="color: white;">Dinas</p>
                    </a>
                  </li>
                </ul>
              </li>

              @endcan
              {{-- GEMBOK --}}

{{-- super admin endcan --}}
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

            <li class="nav-header" style="color: red;">Logout
                                            <div style="height:1px; background:#ffa500; opacity:0.5; margin-top:6px;"></div>

            </li>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf

                    <button type="submit" class="button-merah logout-trigger">
                        <i class="bi bi-door-open"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->

      {{-- ============================================================
     MODAL LOGOUT – PUTIH + HIJAU KHAS BLORA
     ============================================================ --}}
<div class="logout-modal-overlay" id="logoutModal">
    <div class="logout-modal">

        <div class="logout-modal-header">

            <img
                src="/assets/icon/jakonnew.png"
                alt="Logo"
                class="logout-modal-logo"
                width="100px;"
            >

            <h3 class="logout-modal-title">
                Logout ?
            </h3>
        </div>

        <div class="logout-modal-body">

            <p class="logout-modal-message">
                Yakin ingin keluar dari sistem?
            </p>

        </div>

        <div class="logout-modal-footer">

            <button
                type="button"
                class="button-modern"
                id="cancelLogout"
            >
                <i class="bi bi-x-lg"></i>
                <span>
                    Batal
                </span>
            </button>

            <button
                type="button"
                class="button-merah"
                id="confirmLogout"
            >
                <i class="bi bi-box-arrow-right"></i>
                <span>
                    Logout
                </span>
            </button>

        </div>

    </div>
</div>

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

<script>
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        var logoutModal = document.getElementById('logoutModal');
        var cancelBtn   = document.getElementById('cancelLogout');
        var confirmBtn  = document.getElementById('confirmLogout');
        var logoutForm  = document.getElementById('logoutForm');

        // Intercept klik tombol Logout → tampilkan modal
        var trigger = document.querySelector('.logout-trigger');
        if (trigger && logoutForm) {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                if (logoutModal) {
                    logoutModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        }

        // Tombol Batal → tutup modal
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function() {
                logoutModal.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        // Tombol Konfirmasi → submit form logout
        if (confirmBtn && logoutForm) {
            confirmBtn.addEventListener('click', function() {
                logoutForm.submit();
            });
        }

        // Klik overlay → tutup
        if (logoutModal) {
            logoutModal.addEventListener('click', function(e) {
                if (e.target === logoutModal) {
                    logoutModal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }

        // ESC → tutup
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && logoutModal && logoutModal.classList.contains('active')) {
                logoutModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

    });
})();
</script>
