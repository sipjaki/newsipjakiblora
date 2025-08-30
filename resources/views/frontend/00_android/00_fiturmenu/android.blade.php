{{-- <div id="Menu-bar" class="fixed bottom-[24px] px-[18px] max-w-[640px] w-full z-30" style="margin-bottom: -25px;">

    <div class="bg-white p-[14px_12px] rounded-full flex items-center justify-between gap-4 shadow-[0_8px_30px_0_#0A093212] w-full">
        <a href="/dashboard">
            <div class="flex flex-col gap-1 items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="/assets/00_android/menuhape/1.png" alt="icon" loading="lazy">
                </div>
                <p class="leading-[10px] font-medium text-[#757C98] text-center" style="font-size:8px;">Dashboard</p>
            </div>
        </a>

        <a href="/404">
            <div class="flex flex-col gap-1 items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="/assets/00_android/menuhape/3.png" alt="icon" loading="lazy">
                </div>
                <p class="leading-[10px] font-medium text-[#757C98] text-center" style="font-size:8px;">Informasi</p>
            </div>
        </a>

        <a href="/">
            <div class="w-[48px] h-[48px] flex shrink-0">
                <img src="/assets/00_android/menuhape/home.png" alt="icon" loading="lazy">
            </div>
        </a>

        <a href="/sertifikat">
            <div class="flex flex-col gap-1 items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="/assets/00_android/menuhape/2.png" alt="icon" loading="lazy">
                </div>
                <p class="leading-[10px] font-medium text-[#757C98] text-center" style="font-size:8px;">Sertifikat</p>
            </div>
        </a>

        <!-- Ikon Login (tampil jika belum login) -->
        <a href="/login" id="login-icon" style="display:none;">
            <div class="flex flex-col gap-1 items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="/assets/00_android/menuhape/6.png" alt="icon" loading="lazy">
                </div>
                <p class="leading-[10px] font-medium text-[#757C98] text-center" style="margin-right: 5px; margin-left:5px; font-size:8px;" >Login</p>
            </div>
        </a>

        <!-- Ikon Pengaturan (tampil jika sudah login) -->
        <a href="/404" id="settings-icon" style="display:none;">
            <div class="flex flex-col gap-1 items-center">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="/assets/00_android/menuhape/5.png" alt="icon" loading="lazy">
                </div>
                <p class="text-xs leading-[10px] font-medium text-[#757C98] text-center">Pengaturan</p>
            </div>
        </a>
    </div>
</div>

<script>
    // Variabel yang menyimpan status login pengguna
    var isLoggedIn = false;  // Ganti dengan kondisi login yang sesuai, seperti pengecekan token atau session

    // Fungsi untuk menampilkan elemen berdasarkan status login
    window.onload = function() {
        if (isLoggedIn) {
            // Jika sudah login, tampilkan ikon Pengaturan
            document.getElementById('login-icon').style.display = 'none';
            document.getElementById('settings-icon').style.display = 'block';
        } else {
            // Jika belum login, tampilkan ikon Login
            document.getElementById('login-icon').style.display = 'block';
            document.getElementById('settings-icon').style.display = 'none';
        }
    }
</script>

 --}}

 <div id="Menu-bar" style="position: fixed; bottom: 24px; left: 0; right: 0; z-index: 30; margin-bottom: -25px; max-width: 640px; width: 100%; margin-left: auto; margin-right: auto; padding: 0 16px; background-color: white; display: flex; justify-content: space-between; align-items: center; border-radius: 24px; box-shadow: 0 -4px 12px rgba(0,0,0,0.1); font-family: 'Poppins', sans-serif; height: 72px;">

  <!-- Dashboard -->
  <a href="/dashboard" class="nav-icon" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 56px; color: #757C98; text-decoration: none;">
    <div style="width: 24px; height: 24px; display: flex; justify-content: center; align-items: center;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="3" width="7" height="7"></rect>
        <rect x="14" y="3" width="7" height="7"></rect>
        <rect x="14" y="14" width="7" height="7"></rect>
        <rect x="3" y="14" width="7" height="7"></rect>
      </svg>
    </div>
    <small style="font-size: 11px;">Dashboard</small>
  </a>
<!-- Informasi -->
<a href="/dashboard" class="nav-icon" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 56px; color: #757C98; text-decoration: none;">
    <div style="width: 24px; height: 24px; display: flex; justify-content: center; align-items: center;">
        <!-- SVG Info Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="16" x2="12" y2="12"></line>
            <line x1="12" y1="8" x2="12" y2="8"></line>
        </svg>
    </div>
    <small style="font-size: 11px;">Informasi</small>
</a>


  <!-- Home (Center Button) -->
  <a href="/" class="nav-icon" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 56px; transform: translateY(-24px); text-decoration: none;">
    <div style="width: 56px; height: 56px; display: flex; justify-content: center; align-items: center; background-color: #046904; border-radius: 50%; box-shadow: 0 4px 12px rgba(27,51,88,0.3); color: white;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
        <polyline points="9 22 9 12 15 12 15 22"></polyline>
      </svg>
    </div>
    {{-- <small style="font-size: 11px; margin-top: 4px; color: #1B3358;">Beranda</small> --}}
  </a>

  <!-- Informasi -->
  <a href="/sertifikat" class="nav-icon" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 56px; color: #757C98; text-decoration: none;">
    <div style="width: 24px; height: 24px; display: flex; justify-content: center; align-items: center;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="12" y1="16" x2="12" y2="12"></line>
        <line x1="12" y1="8" x2="12.01" y2="8"></line>
      </svg>
    </div>
    <small style="font-size: 11px;">Sertifikat</small>
  </a>

  <!-- Settings -->
  <a href="/sertifikat" id="settings-icon" class="nav-icon" style="display: none; flex-direction: column; align-items: center; justify-content: center; width: 56px; color: #757C98; text-decoration: none;">
    <div style="width: 24px; height: 24px; display: flex; justify-content: center; align-items: center;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="3"></circle>
        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
      </svg>
    </div>
    <small style="font-size: 11px;">Sertifikat</small>
  </a>

  <!-- Login -->
  <a href="/login" id="login-icon" class="nav-icon" style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 56px; color: #757C98; text-decoration: none;">
    <div style="width: 24px; height: 24px; display: flex; justify-content: center; align-items: center;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
        <polyline points="10 17 15 12 10 7"></polyline>
        <line x1="15" y1="12" x2="3" y2="12"></line>
      </svg>
    </div>
    <small style="font-size: 11px;">Login</small>
  </a>

</div>

<script>
  const poppinsFont = document.createElement('link');
  poppinsFont.href = 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap';
  poppinsFont.rel = 'stylesheet';
  document.head.appendChild(poppinsFont);

  window.onload = function () {
    const isLoggedIn = false; // ubah sesuai status login
    document.getElementById('settings-icon').style.display = isLoggedIn ? 'flex' : 'none';
    document.getElementById('login-icon').style.display = isLoggedIn ? 'none' : 'flex';
  };
</script>
