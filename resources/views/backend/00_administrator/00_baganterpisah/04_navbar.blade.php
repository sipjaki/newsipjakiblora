<style>
/* ==========================================
   NAVBAR 3D PREMIUM – TEMA HIJAU BLORA
   ========================================== */
.app-header.navbar {
    background: #ffffff !important;
    border-bottom: 1px solid #eaeaea !important;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important;
    padding: 10px 20px !important;
}

/* Tombol Menu (Kiri) */
#toggleSidebar {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #ecfdf5;
    border: 1px solid #a7f3d0;
    border-radius: 10px;
    padding: 8px 14px !important;
    transition: all 0.25s ease;
}

#toggleSidebar:hover {
    background: #13A847;
    border-color: #13A847;
}

#toggleSidebar:hover i,
#toggleSidebar:hover span {
    color: #ffffff !important;
}

#toggleSidebar i {
    font-size: 1.2rem;
    transition: color 0.25s ease;
}

#toggleSidebar span {
    font-weight: 600;
    font-size: 0.9rem;
    transition: color 0.25s ease;
}

/* Ikon Fullscreen */
.navbar-nav .nav-link[data-lte-toggle="fullscreen"] i {
    font-size: 1.2rem;
    transition: transform 0.25s ease;
}

.navbar-nav .nav-link[data-lte-toggle="fullscreen"]:hover i {
    transform: scale(1.15);
}

/* ==========================================
   USER DROPDOWN – 3D PREMIUM
   ========================================== */
.user-toggle {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #f8fafc;
    border: 1px solid #e9edf4;
    border-radius: 50px;
    padding: 5px 15px 5px 5px !important;
    transition: all 0.25s ease;
    text-decoration: none;
}

.user-toggle:hover,
.user-toggle.show {
    background: #ecfdf5;
    border-color: #a7f3d0;
    box-shadow: 0 4px 12px rgba(19, 168, 71, 0.1);
}

.user-name-nav {
    font-weight: 600;
    font-size: 0.85rem;
    color: #1a2b4a;
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Dropdown Menu Modern */
.user-dropdown-new {
    border: none !important;
    border-radius: 20px !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25) !important;
    padding: 0 !important;
    overflow: hidden;
    min-width: 300px;
    margin-top: 15px !important;
}

/* Header User (Hijau Gradient) */
.user-header-green {
    background: linear-gradient(135deg, #13A847, #0e7a33);
    padding: 25px 20px;
    text-align: center;
    color: #ffffff;
    border: none;
}

.user-header-green p {
    margin: 0;
    font-weight: 700;
    font-size: 1rem;
    line-height: 1.4;
}

.user-header-green .role-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 3px 12px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-top: 6px;
    text-transform: capitalize;
}

/* Section Title */
.menu-section-title {
    padding: 15px 20px 8px;
    font-size: 0.7rem;
    font-weight: 700;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Menu Item */
.menu-item-new {
    display: flex !important;
    align-items: center;
    gap: 12px;
    padding: 12px 20px !important;
    transition: background 0.2s ease;
    text-decoration: none;
}

.menu-item-new:hover {
    background: #f8fafc !important;
}

.menu-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    font-size: 1rem;
    flex-shrink: 0;
}

.icon-green  { background: #ecfdf5; color: #13A847; }
.icon-yellow { background: #fefce8; color: #ca8a04; }
.icon-blue   { background: #e0f2fe; color: #0284c7; }

.menu-text {
    display: flex;
    flex-direction: column;
    line-height: 1.3;
}

.menu-label {
    font-weight: 600;
    font-size: 0.85rem;
    color: #1a2b4a;
}

.menu-desc {
    font-size: 0.72rem;
    color: #94a3b8;
}

/* Footer Logout */
.user-footer-new {
    padding: 15px 20px;
    background: #f8fafc;
    border-top: 1px solid #eaeaea;
}

.btn-logout-dropdown {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #fee2e2;
    color: #ef4444;
    border: 1px solid #fecaca;
    border-radius: 10px;
    padding: 10px 15px;
    font-weight: 700;
    font-size: 0.85rem;
    transition: all 0.25s ease;
}

.btn-logout-dropdown:hover {
    background: #ef4444;
    color: #ffffff;
    border-color: #ef4444;
}
</style>

<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">

        <!-- TOMBOL MENU (KIRI) -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="toggleSidebar" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list" style="color:#13A847 !important;"></i>
                    <span style="color:#13A847 !important;">Menu</span>
                </a>
            </li>
        </ul>

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

        <!-- MENU KANAN -->
        <ul class="navbar-nav ms-auto">

            <!-- Fullscreen Toggle -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen" style="color:#13A847 !important;"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="color:#13A847 !important; display:none;"></i>
                </a>
            </li>

            <!-- User Menu Dropdown -->
            <li class="nav-item dropdown user-menu">

                <!-- Toggle -->
                <a href="#" class="nav-link dropdown-toggle user-toggle" data-bs-toggle="dropdown">
                    <img
                        src="/assets/icon/jakonnew.png"
                        alt="User Image"
                        style="
                            width:32px !important; height:32px !important;
                            min-width:32px !important; min-height:32px !important;
                            max-width:32px !important; max-height:32px !important;
                            border-radius:50% !important; object-fit:cover !important;
                            object-position:center !important; display:inline-block !important;
                            visibility:visible !important; opacity:1 !important;
                            background:#FFFFFF !important; border:2px solid #13A847 !important;
                            flex-shrink:0 !important; vertical-align:middle !important;
                        "
                    />
                    <span class="user-name-nav">
                        {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                    </span>
                </a>

                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end user-dropdown-new">

                    <!-- User Header -->
                    <li class="user-header user-header-green">
                        <img
                            src="/assets/icon/jakonnew.png"
                            alt="User Image"
                            style="
                                width:70px !important; height:70px !important;
                                min-width:70px !important; min-height:70px !important;
                                max-width:70px !important; max-height:70px !important;
                                border-radius:50% !important; object-fit:cover !important;
                                object-position:center !important; display:block !important;
                                visibility:visible !important; opacity:1 !important;
                                background:#FFFFFF !important; border:3px solid rgba(255,255,255,0.5) !important;
                                margin:0 auto 10px auto !important; box-shadow:0 6px 18px rgba(0,0,0,0.15) !important;
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
                            <p>- <small class="role-badge">-</small></p>
                        @endif
                    </li>

                    <!-- Menu Body -->
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

                    <!-- Footer Logout -->
                    <li class="user-footer user-footer-new">
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-logout-dropdown">
                                <i class="bi bi-door-open"></i> Logout
                            </button>
                        </form>
                    </li>

                </ul>
            </li>

        </ul>

    </div>
</nav>
