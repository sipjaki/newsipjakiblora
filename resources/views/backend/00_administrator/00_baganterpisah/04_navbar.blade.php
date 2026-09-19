@include('button')
<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">

  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" id="toggleSidebar" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list" style="color:#FFFFFF !important;"></i>
          <span style="color:#FFFFFF !important;">Menu</span>
        </a>
      </li>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const toggleBtn = document.getElementById("toggleSidebar");
          const sidebar = document.querySelector(".app-sidebar");
          if (toggleBtn && sidebar) {
            toggleBtn.addEventListener("click", function (e) {
              e.preventDefault();
              sidebar.classList.toggle("active");
            });
          }
        });
      </script>
    </ul>
    <!--end::Start Navbar Links-->

    <!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">

      <!--begin::Fullscreen Toggle-->
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen" style="color:#FFFFFF !important;"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="color:#FFFFFF !important; display:none;"></i>
        </a>
      </li>
         <!--begin::User Menu Dropdown-->
      <li class="nav-item dropdown user-menu">

        <!-- Toggle -->
        <a href="#" class="nav-link dropdown-toggle user-toggle" data-bs-toggle="dropdown">

          <!-- ✅ AVATAR NAVBAR – INLINE STYLE FORCE -->
          <img
            src="/assets/icon/jakonnew.png"
            alt="User Image"
            style="
              width:32px !important;
              height:32px !important;
              min-width:32px !important;
              min-height:32px !important;
              max-width:32px !important;
              max-height:32px !important;
              border-radius:50% !important;
              object-fit:cover !important;
              object-position:center !important;
              display:inline-block !important;
              visibility:visible !important;
              opacity:1 !important;
              background:#FFFFFF !important;
              border:2px solid rgba(255,255,255,0.6) !important;
              flex-shrink:0 !important;
              vertical-align:middle !important;
            "
          />

          <span class="user-name-nav">
            {{ Auth::check() ? Auth::user()->name : 'Guest' }}
          </span>
        </a>

        <!-- Dropdown Menu -->
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end user-dropdown-new">

          <!--begin::User Image-->
          <li class="user-header user-header-green">

            <!-- ✅ AVATAR DROPDOWN – INLINE STYLE FORCE -->
            <img
              src="/assets/icon/jakonnew.png"
              alt="User Image"
              style="
                width:70px !important;
                height:70px !important;
                min-width:70px !important;
                min-height:70px !important;
                max-width:70px !important;
                max-height:70px !important;
                border-radius:50% !important;
                object-fit:cover !important;
                object-position:center !important;
                display:block !important;
                visibility:visible !important;
                opacity:1 !important;
                background:#FFFFFF !important;
                border:3px solid rgba(255,255,255,0.5) !important;
                margin:0 auto 10px auto !important;
                box-shadow:0 6px 18px rgba(0,0,0,0.15) !important;
              "
            />

            @if(Auth::check())
              <p>
                {{ Auth::user()->name }}
                <small class="role-badge">
                  {{ Auth::user()->statusadmin->statusadmin ?? '-' }}
                </small>
              </p>
            @else
              <p>
                -
                <small class="role-badge">-</small>
              </p>
            @endif
          </li>
          <!--end::User Image-->

          <!--begin::Menu Body-->
          <li class="menu-section-title">Pengaturan Akun</li>

          <li>
            <a href="{{ url('/profile/edit') }}" class="dropdown-item menu-item-new">
              <span class="menu-icon icon-green"><i class="bi bi-person-fill"></i></span>
              <div class="menu-text">
                <span class="menu-label">Edit Profil</span>
                <span class="menu-desc">Ubah nama, foto, & data diri</span>
              </div>
            </a>
          </li>

          <li>
            <a href="{{ url('/profile/password') }}" class="dropdown-item menu-item-new">
              <span class="menu-icon icon-yellow"><i class="bi bi-shield-lock-fill"></i></span>
              <div class="menu-text">
                <span class="menu-label">Ubah Password</span>
                <span class="menu-desc">Ganti kata sandi akun</span>
              </div>
            </a>
          </li>

          <li>
            <a href="{{ url('/profile/settings') }}" class="dropdown-item menu-item-new">
              <span class="menu-icon icon-blue"><i class="bi bi-gear-fill"></i></span>
              <div class="menu-text">
                <span class="menu-label">Pengaturan Akun</span>
                <span class="menu-desc">Preferensi & keamanan</span>
              </div>
            </a>
          </li>
          <!--end::Menu Body-->

          <!--begin::Menu Footer-->
          <li class="user-footer user-footer-new">
            <form action="{{ url('/logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn-logout-dropdown">
                <i class="bi bi-door-open"></i> Logout
              </button>
            </form>
          </li>
          <!--end::Menu Footer-->

        </ul>
      </li>
      <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
  </div>
  <!--end::Container-->
</nav>
<!--end::Header-->


<!-- ============================================================
     STYLE HEADER – HIJAU SOLID BLORA
     ============================================================ -->
<style>
  /* ===== VARIABEL ===== */
  :root {
    --blora-green:      #16A34A;
    --blora-green-dark: #15803D;
    --blora-green-deep: #14532D;
    --blora-green-soft: #F0FDF4;
    --blora-green-mid:  #DCFCE7;
    --border:           #E9EDF4;
    --text-dark:        #1A2B4A;
    --text-muted:       #6B7A93;
    --danger:           #DC3545;
    --danger-soft:      #FEF2F2;
    --danger-mid:       #FECACA;
  }

  /* ===== NAVBAR – HIJAU SOLID ===== */
  .app-header.navbar {
    background: var(--blora-green) !important;
    border-bottom: none !important;
    box-shadow: 0 4px 20px rgba(22, 163, 74, 0.20) !important;
    padding: 8px 16px !important;
    min-height: 56px;
    overflow: visible !important;
  }

  /* ===== NAV LINK ===== */
  .app-header .navbar-nav .nav-link {
    color: #FFFFFF !important;
    font-weight: 500 !important;
    font-size: 0.88rem !important;
    display: flex !important;
    align-items: center !important;
    gap: 6px !important;
    padding: 8px 14px !important;
    border-radius: 8px !important;
    transition: all 0.25s ease !important;
    overflow: visible !important;
  }

  .app-header .navbar-nav .nav-link:hover {
    background: rgba(255, 255, 255, 0.15) !important;
  }

  .app-header .navbar-nav .nav-link i {
    color: #FFFFFF !important;
  }

  /* ===== TOGGLE SIDEBAR ===== */
  #toggleSidebar {
    background: rgba(255, 255, 255, 0.12) !important;
    border: 1px solid rgba(255, 255, 255, 0.20) !important;
    font-weight: 600 !important;
  }

  #toggleSidebar:hover {
    background: rgba(255, 255, 255, 0.22) !important;
  }

  /* ===== TOGGLE USER ===== */
  .app-header .user-toggle {
    background: rgba(255, 255, 255, 0.12) !important;
    border: 1px solid rgba(255, 255, 255, 0.20) !important;
    padding: 4px 12px 4px 6px !important;
    border-radius: 50px !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    overflow: visible !important;
    min-height: 40px !important;
    height: auto !important;
  }

  .app-header .user-toggle:hover {
    background: rgba(255, 255, 255, 0.22) !important;
  }

  .app-header .user-name-nav {
    color: #FFFFFF !important;
    font-weight: 600 !important;
    font-size: 0.82rem !important;
  }

  .app-header .user-toggle::after {
    color: #FFFFFF !important;
    margin-left: 0 !important;
  }

  /* ===== DROPDOWN MENU ===== */
  .app-header .user-dropdown-new {
    border: 1px solid var(--border) !important;
    border-radius: 16px !important;
    box-shadow: 0 16px 48px rgba(22, 163, 74, 0.18) !important;
    padding: 0 !important;
    overflow: hidden;
    margin-top: 12px !important;
    min-width: 300px !important;
  }

  /* Header profil – HIJAU SOLID */
  .app-header .user-dropdown-new .user-header-green {
    background: var(--blora-green) !important;
    padding: 22px 20px 18px 20px !important;
    text-align: center;
    color: #FFFFFF !important;
    border: none !important;
  }

  .app-header .user-dropdown-new .user-header-green p {
    color: #FFFFFF !important;
    font-weight: 700 !important;
    font-size: 0.95rem !important;
    margin: 8px 0 0 0 !important;
  }

  .app-header .user-dropdown-new .role-badge {
    display: inline-block;
    margin-top: 6px;
    padding: 3px 10px;
    background: rgba(255, 255, 255, 0.20);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 20px;
    color: #FFFFFF !important;
    font-size: 0.68rem !important;
    font-weight: 500 !important;
  }

  /* Section Title */
  .app-header .user-dropdown-new .menu-section-title {
    padding: 14px 18px 6px 18px;
    font-size: 0.65rem;
    font-weight: 700;
    color: var(--blora-green-deep);
    text-transform: uppercase;
    letter-spacing: 1.2px;
  }

  /* Menu Item */
  .app-header .user-dropdown-new .menu-item-new {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 10px 14px !important;
    margin: 2px 8px !important;
    border-radius: 10px !important;
    transition: all 0.2s ease !important;
    text-decoration: none !important;
    color: var(--text-dark) !important;
  }

  .app-header .user-dropdown-new .menu-item-new:hover {
    background: var(--blora-green-soft) !important;
    transform: translateX(2px);
  }

  .app-header .user-dropdown-new .menu-item-new:hover .menu-label {
    color: var(--blora-green-deep) !important;
  }

  /* Icon bulat */
  .app-header .user-dropdown-new .menu-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
  }

  .app-header .user-dropdown-new .menu-icon.icon-green {
    background: var(--blora-green-soft);
    color: var(--blora-green);
    border: 1px solid rgba(22, 163, 74, 0.15);
  }

  .app-header .user-dropdown-new .menu-icon.icon-yellow {
    background: #FEF9E7;
    color: #D97706;
    border: 1px solid rgba(217, 119, 6, 0.15);
  }

  .app-header .user-dropdown-new .menu-icon.icon-blue {
    background: #EFF6FF;
    color: #2563EB;
    border: 1px solid rgba(37, 99, 235, 0.15);
  }

  .app-header .user-dropdown-new .menu-text {
    display: flex;
    flex-direction: column;
    min-width: 0;
    flex: 1;
  }

  .app-header .user-dropdown-new .menu-label {
    font-size: 0.84rem;
    font-weight: 600;
    color: var(--text-dark);
    line-height: 1.2;
  }

  .app-header .user-dropdown-new .menu-desc {
    font-size: 0.68rem;
    color: var(--text-muted);
    margin-top: 2px;
  }

  /* Footer dropdown */
  .app-header .user-dropdown-new .user-footer-new {
    padding: 10px 14px 14px 14px;
    background: var(--blora-green-soft);
    border-top: 1px solid var(--border);
  }

  .app-header .user-dropdown-new .btn-logout-dropdown {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 16px;
    background: var(--danger-soft);
    color: var(--danger);
    border: 1px solid var(--danger-mid);
    border-radius: 10px;
    font-size: 0.82rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    font-family: inherit;
  }

  .app-header .user-dropdown-new .btn-logout-dropdown:hover {
    background: var(--danger);
    color: #FFFFFF;
    border-color: var(--danger);
  }

  /* Tombol Logout di navbar (merah) */
  .app-header .button-merah {
    background: rgba(220, 53, 69, 0.95) !important;
    color: #FFFFFF !important;
    border: 1px solid rgba(255, 255, 255, 0.20) !important;
    border-radius: 8px !important;
    padding: 7px 14px !important;
    font-size: 0.82rem !important;
    font-weight: 600 !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    cursor: pointer !important;
    transition: all 0.25s ease !important;
    margin-right: 8px;
    font-family: inherit !important;
  }

  .app-header .button-merah:hover {
    background: #B02A37 !important;
    transform: translateY(-1px);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 576px) {
    .app-header .user-name-nav { display: none !important; }
    .app-header .user-dropdown-new { min-width: 260px !important; }
  }
</style>
