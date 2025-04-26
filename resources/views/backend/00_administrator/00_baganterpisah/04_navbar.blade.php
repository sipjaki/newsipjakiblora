<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body">

    <!--begin::Container-->
    <div class="container-fluid">

      <!--begin::Start Navbar Links-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
      </ul>
      <!--end::Start Navbar Links-->

      <!--begin::End Navbar Links-->
      <ul class="navbar-nav ms-auto">

        <!--begin::Fullscreen Toggle-->
        <li class="nav-item">
          <a class="nav-link" href="#" data-lte-toggle="fullscreen">
            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
          </a>
        </li>
        <!--end::Fullscreen Toggle-->

        <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img
              src="{{ asset('storage/' . Auth::user()->avatar) }}"
              class="user-image rounded-circle shadow"
              alt="User Image"
            />
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

            <!--begin::User Image-->
            <li class="user-header text-bg-success">
              <img
                src="{{ asset('storage/' . Auth::user()->avatar) }}"
                class="rounded-circle shadow"
                alt="User Image"
              />
              <p class="mt-2 mb-0">
                {{ Auth::user()->name }}
                <small class="d-block" style="color: navy;">{{ Auth::user()->statusadmin->statusadmin }}</small>
              </p>
            </li>
            <!--end::User Image-->

            <!--begin::Menu Footer-->
            <li class="user-footer d-flex justify-content-end">
              <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-default btn-flat">
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
