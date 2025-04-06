
{{-- <div id="Menu-bar" class="fixed bottom-[24px] px-[18px] max-w-[640px] w-full z-30" style="margin-bottom: -25px;">

    <div class="bg-white p-[14px_12px] rounded-full flex items-center justify-center gap-8 shadow-[0_8px_30px_0_#0A093212]"> --}}
        <div id="Menu-bar" class="fixed bottom-0 left-0 right-0 z-30">
            <div class="bg-white p-0 flex items-center justify-between shadow-[0_8px_30px_0_#0A093212] w-full">
                        <!-- Isi menu bar di sini -->
              <a href="/404">
        <div class="flex flex-col gap-1 items-center">
          <div class="w-6 h-6 flex shrink-0">
            <img src="/assets/00_android/menuhape/agenda.png" alt="icon" loading="lazy">
          </div>
          {{-- <p class="text-xs leading-[10px] font-medium text-[#757C98]">Agenda</p> --}}
        </div>
      </a>

      <a href="/404">
        <div class="flex flex-col gap-1 items-center">
          <div class="w-6 h-6 flex shrink-0">
            <img src="/assets/00_android/menuhape/dashboard.png" alt="icon" loading="lazy">
          </div>
          {{-- <p class="text-xs leading-[10px] font-medium text-[#757C98]">Menu</p> --}}
        </div>
      </a>
      <a href="/">
        <div class="w-[48px] h-[48px] flex shrink-0">
          <img src="/assets/00_android/menuhape/home.png" alt="icon" loading="lazy">
        </div>
      </a>

      <a href="/404">
        <div class="flex flex-col gap-1 items-center">
          <div class="w-6 h-6 flex shrink-0">
            <img src="/assets/00_android/menuhape/ahsp.png" alt="icon" loading="lazy">
          </div>
          {{-- <p class="text-xs leading-[10px] font-medium text-[#757C98]">AHSP</p> --}}
        </div>
      </a>
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

      <!-- Ikon Login (tampil jika belum login) -->
      <a href="/404" id="login-icon" style="display:none;">
        <div class="flex flex-col gap-1 items-center">
          <div class="w-6 h-6 flex shrink-0">
            <img src="/assets/00_android/menuhape/login.png" alt="icon" loading="lazy">
          </div>
          {{-- <p class="text-xs leading-[10px] font-medium text-[#757C98]">Login</p> --}}
        </div>
      </a>

      <!-- Ikon Pengaturan (tampil jika sudah login) -->
      <a href="/404" id="settings-icon" style="display:none;">
        <div class="flex flex-col gap-1 items-center">
          <div class="w-6 h-6 flex shrink-0">
            <img src="/assets/00_android/menuhape/setting.png" alt="icon" loading="lazy">
          </div>
          {{-- <p class="text-xs leading-[10px] font-medium text-[#757C98]">Pengaturan</p> --}}
        </div>
      </a>


    </div>
  </div>
