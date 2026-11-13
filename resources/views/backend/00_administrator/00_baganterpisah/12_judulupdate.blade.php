<style>
/* ============================================================
   WELCOME BANNER – PUTIH + BORDER HIJAU
   ============================================================ */
.welcome-banner {
    background: #FFFFFF;
    border: 2px solid var(--blora-green, #16A34A);
    border-radius: 12px;
    padding: 16px 22px;
    margin-bottom: 14px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 14px rgba(22, 163, 74, 0.10);
}
.welcome-banner::before {
    content: '';
    position: absolute;
    top: -60%; right: -5%;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(22, 163, 74, 0.05);
}
.welcome-banner::after {
    content: '';
    position: absolute;
    bottom: -70%; right: 20%;
    width: 140px; height: 140px;
    border-radius: 50%;
    background: rgba(22, 163, 74, 0.03);
}
.welcome-banner-content {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}
.welcome-text h2 {
    color: #14532D;              /* Hijau gelap biar tegas */
    font-size: 16px;
    font-weight: 700;
    margin: 0 0 3px 0;
    letter-spacing: -0.2px;
}
.welcome-text h2 i {
    color: #16A34A;              /* Icon hijau */
}
.welcome-text p {
    color: #4A5A72;              /* Abu gelap */
    font-size: 14px;
    margin: 0;
    line-height: 1.3;
}
.welcome-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 12px;
    background: #F0FDF4;         /* Hijau sangat soft */
    border: 1px solid #16A34A;   /* Border hijau */
    border-radius: 50px;
    color: #14532D;              /* Teks hijau gelap */
    font-size: 14px;
    font-weight: 600;
}
.welcome-badge i {
    color: #16A34A;              /* Icon hijau */
}
</style>

<div class="welcome-banner">
    <div class="welcome-banner-content">
        <div class="welcome-text">
            <h2><i class="bi bi-grid-1x2-fill" style="margin-right: 6px;"></i>Halaman {{$title}}</h2>
            {{-- <p>Master Data Mas Jaki DPUPR Kabupaten Blora</p> --}}
        </div>
        <div class="welcome-badge">
            <i class="bi bi-calendar-check-fill"></i>
            <span>{{ date('d F Y') }}</span>
        </div>
    </div>
</div>