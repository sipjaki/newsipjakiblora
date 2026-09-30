@include('button')

<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">

    <!--begin::Container-->
    <div class="container-fluid">

        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="toggleSidebar" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list" style="color:#16A34A !important;"></i>
                    <span style="color:#16A34A !important;">Menu</span>
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
        <!--end::Start Navbar Links-->


        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen" style="color:#16A34A !important;"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="color:#16A34A !important; display:none;"></i>
                </a>
            </li>
            <!--end::Fullscreen Toggle-->

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">

                <!--begin::Toggle-->
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
                            border:2px solid #16A34A !important;
                            flex-shrink:0 !important;
                            vertical-align:middle !important;
                        "
                    />

                    <span class="user-name-nav">
                        {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                    </span>
                </a>
                <!--end::Toggle-->

                <!--begin::Dropdown Menu-->
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
                <!--end::Dropdown Menu-->
            </li>
            <!--end::User Menu Dropdown-->

        </ul>
        <!--end::End Navbar Links-->

    </div>
    <!--end::Container-->
</nav>
<!--end::Header-->

