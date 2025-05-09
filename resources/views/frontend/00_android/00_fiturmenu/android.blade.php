<div id="Menu-bar" class="fixed bottom-[24px] inset-x-0 z-30" style="margin-bottom: -25px;">
    <div class="bg-white mx-auto p-[14px_0] flex items-center justify-between shadow-[0_8px_30px_0_#0A093212] max-w-[640px]">
        <a href="/404" class="flex-1 text-center">
            <div class="flex flex-col items-center justify-center gap-1">
                <img src="/assets/00_android/menuhape/1.png" width="24" height="24" alt="dashboard" loading="lazy" class="aspect-square">
                <p class="text-[8px] leading-[10px] font-medium text-[#757C98]">Dashboard</p>
            </div>
        </a>

        <a href="/404" class="flex-1 text-center">
            <div class="flex flex-col items-center justify-center gap-1">
                <img src="/assets/00_android/menuhape/3.png" width="24" height="24" alt="informasi" loading="lazy" class="aspect-square">
                <p class="text-[8px] leading-[10px] font-medium text-[#757C98]">Informasi</p>
            </div>
        </a>

        <a href="/" class="flex-1 text-center">
            <img src="/assets/00_android/menuhape/home.png" width="48" height="48" alt="home" loading="eager" class="mx-auto aspect-square">
        </a>

        <a href="/404" class="flex-1 text-center">
            <div class="flex flex-col items-center justify-center gap-1">
                <img src="/assets/00_android/menuhape/2.png" width="24" height="24" alt="sertifikat" loading="lazy" class="aspect-square">
                <p class="text-[8px] leading-[10px] font-medium text-[#757C98]">Sertifikat</p>
            </div>
        </a>

        <!-- Login Icon -->
        <a href="/login" id="login-icon" class="flex-1 text-center" style="display:none;">
            <div class="flex flex-col items-center justify-center gap-1">
                <img src="/assets/00_android/menuhape/6.png" width="24" height="24" alt="login" loading="lazy" class="aspect-square">
                <p class="text-[8px] leading-[10px] font-medium text-[#757C98] px-1">Login</p>
            </div>
        </a>

        <!-- Settings Icon -->
        <a href="/404" id="settings-icon" class="flex-1 text-center" style="display:none;">
            <div class="flex flex-col items-center justify-center gap-1">
                <img src="/assets/00_android/menuhape/5.png" width="24" height="24" alt="pengaturan" loading="lazy" class="aspect-square">
                <p class="text-[8px] leading-[10px] font-medium text-[#757C98]">Pengaturan</p>
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
