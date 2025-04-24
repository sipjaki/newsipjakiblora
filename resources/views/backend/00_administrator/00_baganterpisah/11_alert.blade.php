<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    .modal-verify-alert, .modal-question-alert {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(0,0,0,0.5);
    }

    .modal-box {
        background-color: #fefefe;
        padding: 20px;
        border-radius: 10px;
        width: 500px;
        height: 500px;
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        animation: fadeIn 0.5s ease;
        overflow: hidden;
    }

    .modal-box-question {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        width: 90%;
        position: relative;
        text-align: center;
        animation: fadeIn 0.5s ease;
        overflow: hidden;
    }

    /* Animasi Crane untuk Modal */
    .modal-crane {
        position: absolute;
        width: 80px;
        height: 60px;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23298d0d"><path d="M21 6h-4v2h4V6zm-5 0h-4v2h4V6zm-5 0H7v2h4V6zM6 6H2v2h4V6zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2zm16 4h-4v2h4v-2zm-5 0h-4v2h4v-2zm-5 0H7v2h4v-2zm-5 0H2v2h4v-2z"/></svg>');
        background-size: contain;
        background-repeat: no-repeat;
        opacity: 0.2;
        z-index: 0;
        animation: craneFly 15s linear infinite;
    }

    @keyframes craneFly {
        0% { transform: translateX(-100px) translateY(0); }
        25% { transform: translateX(25%) translateY(-20px); }
        50% { transform: translateX(150%) translateY(0); }
        75% { transform: translateX(25%) translateY(20px); }
        100% { transform: translateX(-100px) translateY(0); }
    }

    .modal-content {
        position: relative;
        z-index: 1;
    }

    .btnalert-view {
        background: none;
        border: none;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        position: absolute;
        top: 15px;
        right: 20px;
        cursor: pointer;
        z-index: 10;
    }

    .btnalert-view:hover {
        color: black;
    }

    .success-text, .success-textupdate {
        font-size: 36px;
        font-weight: bold;
        margin: 20px 0;
    }

    .success-text { color: #4CAF50; }
    .success-textupdate { color: navy; }

    .button-text, .button-textupdate {
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        font-size: 18px;
        color: white;
        cursor: pointer;
        transition: 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .button-text { background: green; }
    .button-text:hover { background: white; color: black; }

    .button-textupdate { background: navy; }
    .button-textupdate:hover { background: white; color: black; }

    .button-delete {
        background: red;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        font-size: 18px;
        color: white;
        transition: 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .button-delete:hover {
        background: white;
        color: black;
    }

    .logo-animate-bounce {
        width: 70px;
        height: 70px;
        object-fit: cover;
        margin: 20px;
        animation: bounceZoom 2.5s ease-in-out infinite;
        position: relative;
        z-index: 1;
    }

    @keyframes bounceZoom {
        0%, 100% {
            transform: scale(1) translateY(0);
        }
        50% {
            transform: scale(1.2) translateY(-8px);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }
</style>

<script>
    // Tutup modal jika klik di luar konten modal
    window.addEventListener('click', function(e) {
        document.querySelectorAll('.modal-verify-alert, .modal-question-alert').forEach(modal => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });

    // Tambahkan crane ke setiap modal saat dimuat
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.modal-box, .modal-box-question').forEach(modal => {
            const crane = document.createElement('div');
            crane.className = 'modal-crane';
            modal.prepend(crane);

            // Posisi crane acak
            const randomTop = Math.random() * 70 + 10; // 10-80%
            const randomSize = Math.random() * 40 + 60; // 60-100px
            const randomSpeed = Math.random() * 10 + 10; // 10-20s

            crane.style.top = `${randomTop}%`;
            crane.style.width = `${randomSize}px`;
            crane.style.height = `${randomSize * 0.75}px`;
            crane.style.animationDuration = `${randomSpeed}s`;
        });
    });
</script>

@if (session('create'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
           <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
        <div class="success-text">Berhasil !</div>
        {{-- <a href="/dashboard"><span>Silahkan Klik Untuk Mengetahui Informasi Berkas Anda</span></a> --}}
        <br>
        <button class="button-text">{{ session('create') }}</button>
    </div>
</div>
@endif

@if (session('info'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
           <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
        <div class="success-text">Berhasil</div>
        <button class="button-text">{{ session('info') }}</button>
    </div>
</div>
@endif

@if (session('pengesahankrk'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
       <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
        <div class="success-text">Berhasil</div>
        <button class="button-text">{{ session('pengesahankrk') }}</button>
    </div>
</div>
@endif

@if (session('update'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
           <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
        <div class="success-textupdate">Update Berhasil !</div>
        <button class="button-textupdate">{{ session('update') }}</button>
    </div>
</div>
@endif

@if (session('delete'))
<div class="modal-verify-alert">
    <div class="modal-box">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-verify-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
           <p style="color:black;">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
        <div style="font-size: 36px; color: red; font-weight: bold; margin: 20px 0;">Delete Berhasil !</div>
        <button class="button-delete">{{ session('delete') }}</button>
    </div>
</div>
@endif

@if (session('pertanyaan'))
<div class="modal-question-alert">
    <div class="modal-box-question">
        <div class="modal-crane"></div>
        <button type="button" class="btnalert-view" onclick="this.closest('.modal-question-alert').style.display='none';">&times;</button>
        <img src="/assets/00_masjaki/images/maskotjakon.png" alt="Logo"
        style="width: 150px !important; height: auto;"
        class="logo-animate-bounce">
           <p style="color: black;">Pemerintah Kabupaten Blora</p>
        <div class="success-text" style="font-size: 18px;">Admin Kami Akan Menghubungi Saudara, Harap Menunggu!</div>
        <button class="button-text">{{ session('pertanyaan') }}</button>
        <p style="margin-top: 25px; font-size: 12px; color: #000;">Silakan muat ulang halaman ini atau tekan tanda X di pojok kanan atas.</p>
    </div>
</div>
@endif
