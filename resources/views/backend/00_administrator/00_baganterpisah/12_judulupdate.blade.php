<div class="card mb-4" style="border: none; box-shadow: 0 4px 14px rgba(0,0,0,0.08); border-radius: 14px;">
    <div class="card-header p-4" style="
        background: linear-gradient(135deg, #e8f5e9, #d0f0c0); /* gradient hijau lembut */
        border-left: 6px solid #2a7f4f; /* hijau khas Blora */
        border-radius: 14px;
        display: flex;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        ">

        <div class="d-flex align-items-center gap-3 w-100">
          <div>
                <img src="/assets/icon/masjakibaru.png" alt="icon" style="
                    width:50px; /* sesuaikan ukuran */
                    height:50px; /* sesuaikan ukuran */
                    object-fit:contain;
                ">
            </div>


            <div>
                <div style="font-size:18px;font-weight:700; color:#2a7f4f;">
                    {{ $title }}
                </div>
                <div style="font-size:13px;color:#4b6f57;">
                    Sistem Informasi Pembina Jasa Konstruksi
                </div>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.halaman-title {
    margin-bottom: 10px;
    font-weight: 900;
    font-size: 16px;
    text-align: center;
    color: white;
    padding: 10px 25px;
    border-radius: 10px;
    display: inline-block;
    width: 100%;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #2a7f4f, #8fc49d, #2a7f4f); /* gradient hijau animasi */
    background-size: 300% 300%;
    animation: gradientShift 6s ease infinite;
    font-family: 'Poppins', sans-serif;
}
</style>
