{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* ============================================================
   GLOBAL – FONT & RESET
   ============================================================ */
* {
    font-family: 'Poppins', sans-serif !important;
}

/* ============================================================
   VARIABEL – SATU SAJA
   ============================================================ */
:root {
    --blora-green:       #16A34A;
    --blora-green-dark:  #15803D;
    --blora-green-deep:  #14532D;
    --blora-green-soft:  #F0FDF4;
    --blora-green-mid:   #DCFCE7;
    --white:             #FFFFFF;
    --bg-soft:           #F8FAFC;
    --border:            #E9EDF4;
    --border-hover:      #D0D8E3;
    --text-dark:         #1A2B4A;
    --text-medium:       #4A5A72;
    --text-muted:        #6B7A93;
    --danger:            #DC3545;
    --danger-soft:       #FEF2F2;
    --danger-mid:        #FECACA;
    --font-base:         14px;
}

/* ============================================================
   BODY
   ============================================================ */
body {
    font-family: 'Poppins', sans-serif;
}

/* ============================================================
   RESPONSIVE HIDE
   ============================================================ */
@media (max-width: 768px) {
    .button-berkas {
        display: none;
    }
    #searchInput,
    #searchInput + i {
        display: none;
    }
}

/* ============================================================
   ZEBRA TABLE – PUTIH BERSIH + HEADER HITAM
   ============================================================ */
.zebra-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    color: #333;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    animation: fadeIn 0.5s ease-in-out;
}

.zebra-table thead {
    background: #ffffff;
}

.zebra-table th {
    color: #000000 !important;
    font-weight: 700;
    text-transform: uppercase;
    padding: 14px 12px;
    letter-spacing: 0.7px;
    text-align: left;
    border-bottom: 2px solid var(--border);
    background: #ffffff;
    font-size: 14px;
    transition: background 0.3s ease, color 0.3s ease;
}

.zebra-table th:first-child {
    border-top-left-radius: 12px;
}
.zebra-table th:last-child {
    border-top-right-radius: 12px;
}

.zebra-table td {
    padding: 12px 12px;
    border-bottom: 1px solid #F0F2F5;
    color: #333;
    font-weight: 400;
    background-color: #ffffff;
    transition: background 0.3s ease, color 0.3s ease;
    font-size: 14px;
    vertical-align: middle;
}

/* Zebra – abu-abu sangat soft */
.zebra-table tbody tr:nth-child(even) {
    background-color: #FAFBFC;
}
.zebra-table tbody tr:nth-child(even) td {
    background-color: #FAFBFC;
}

/* Hover – abu-abu medium */
.zebra-table tbody tr:hover {
    background-color: #F1F5F9;
    transition: all 0.3s ease;
    cursor: pointer;
}
.zebra-table tbody tr:hover td {
    background-color: #F1F5F9;
}

/* Tanpa garis vertikal */
.zebra-table th,
.zebra-table td {
    border-left: none;
    border-right: none;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ============================================================
   TABEL BARU
   ============================================================ */
.tabel-baru {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
}

.tabel-baru thead th {
    background-color: #f1f5f9;
    color: #000000 !important;
    text-align: center;
    padding: 10px;
    font-weight: 700;
    border: 1px solid var(--border);
    white-space: nowrap;
}

.tabel-baru tbody td {
    padding: 8px;
    border: 1px solid var(--border);
    white-space: nowrap;
    background-color: white !important;
}

.tabel-baru tr:hover {
    background-color: #f8fafc;
}

.tabel-baru thead tr th:first-child {
    border-top-left-radius: 20px;
}
.tabel-baru thead tr th:last-child {
    border-top-right-radius: 20px;
}
.tabel-baru tbody tr:last-child td:first-child {
    border-bottom-left-radius: 20px;
}
.tabel-baru tbody tr:last-child td:last-child {
    border-bottom-right-radius: 20px;
}

/* ============================================================
   BUTTONS – UKURAN XS (DEFAULT)
   ============================================================ */
.button-abgblora,
.button-permohonan,
.button-fungsi,
.button-belakang,
.button-kembali,
.button-validasinew,
.button-kembalinew,
.button-lolos,
.button-simpan,
.button-baru,
.button-berkas,
.button-newvalidasi,
.button-hijau,
.button-merah,
.button-hitam,
.button-create,
.button-modern,
.button-dikembalikan,
.button-pilih,
.button-sudah,
.button-belum,
.button-download,
.button-statistika,
.button-delete,
.button-data,
.putih,
.hijau {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    padding: 4px 10px !important;
    font-size: 11px !important;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    border-radius: 8px !important;
    cursor: pointer;
    text-decoration: none;
    line-height: 1.4;
    white-space: nowrap;
    transition: all 0.25s ease;
    min-width: max-content;
    vertical-align: middle;
}

/* Icon di dalam button XS */
.button-abgblora i,
.button-permohonan i,
.button-fungsi i,
.button-belakang i,
.button-kembali i,
.button-validasinew i,
.button-kembalinew i,
.button-lolos i,
.button-simpan i,
.button-baru i,
.button-berkas i,
.button-newvalidasi i,
.button-hijau i,
.button-merah i,
.button-hitam i,
.button-create i,
.button-modern i,
.button-dikembalikan i,
.button-pilih i,
.button-sudah i,
.button-belum i,
.button-download i,
.button-statistika i,
.button-delete i,
.button-data i,
.putih i,
.hijau i {
    font-size: 12px !important;
    line-height: 1;
}

/* ============================================================
   BUTTON – UKURAN MD (2x LEBIH BESAR DARI XS)
   ============================================================ */
.button-abgblora.button-md,
.button-permohonan.button-md,
.button-fungsi.button-md,
.button-belakang.button-md,
.button-kembali.button-md,
.button-validasinew.button-md,
.button-kembalinew.button-md,
.button-lolos.button-md,
.button-simpan.button-md,
.button-baru.button-md,
.button-berkas.button-md,
.button-newvalidasi.button-md,
.button-hijau.button-md,
.button-merah.button-md,
.button-hitam.button-md,
.button-create.button-md,
.button-modern.button-md,
.button-dikembalikan.button-md,
.button-pilih.button-md,
.button-sudah.button-md,
.button-belum.button-md,
.button-download.button-md,
.button-statistika.button-md,
.button-delete.button-md,
.button-data.button-md,
.putih.button-md,
.hijau.button-md {
    padding: 8px 20px !important;
    font-size: 12px !important;
    border-radius: 12px !important;
    gap: 8px;
    font-weight: 600;
    line-height: 1.5;
}

.button-abgblora.button-md i,
.button-permohonan.button-md i,
.button-fungsi.button-md i,
.button-belakang.button-md i,
.button-kembali.button-md i,
.button-validasinew.button-md i,
.button-kembalinew.button-md i,
.button-lolos.button-md i,
.button-simpan.button-md i,
.button-baru.button-md i,
.button-berkas.button-md i,
.button-newvalidasi.button-md i,
.button-hijau.button-md i,
.button-merah.button-md i,
.button-hitam.button-md i,
.button-create.button-md i,
.button-modern.button-md i,
.button-dikembalikan.button-md i,
.button-pilih.button-md i,
.button-sudah.button-md i,
.button-belum.button-md i,
.button-download.button-md i,
.button-statistika.button-md i,
.button-delete.button-md i,
.button-data.button-md i,
.putih.button-md i,
.hijau.button-md i {
    font-size: 18px !important;
    line-height: 1;
}

/* ============================================================
   BUTTON VARIANTS
   ============================================================ */
.button-abgblora {
    border: none;
    color: white;
    background: linear-gradient(120deg, navy, white, navy);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-abgblora:hover {
    color: black;
    background: white;
    animation: none;
}

.button-permohonan {
    border: none;
    color: white;
    background: linear-gradient(120deg, skyblue, white, skyblue);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-permohonan:hover {
    color: black;
    background: white;
    animation: none;
}

.button-fungsi {
    border: none;
    color: white;
    background: linear-gradient(120deg, #0606e7, #c5b1b1, #0606e7);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}
.button-fungsi:hover {
    color: black;
    background: white;
    animation: none;
    border: 1px solid #0606e7;
}

.button-belakang {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #86bae7, white, #86bae7);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-belakang:hover {
    color: black;
    background: white;
    animation: none;
}

.button-kembali {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #6c757d, white, #6c757d);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-kembali:hover {
    color: black;
    background: white;
    animation: none;
}

.button-validasinew {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-validasinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}

.button-kembalinew {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-kembalinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}

.button-lolos {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #28a745, #d4edda, #28a745);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-lolos:hover {
    color: black;
    background: white;
    animation: none;
}

.button-simpan {
    border: 1px solid #c8dfff;
    color: #003366;
    font-weight: bold;
    background: linear-gradient(145deg, skyblue, skyblue);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-simpan:hover {
    background: white;
    color: black;
}

.button-baru {
    background: linear-gradient(145deg, #e6f1ff, #d4e6ff);
    color: #003366;
    border: 1px solid #bfdcff;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-baru:hover {
    background: #ffffff !important;
    color: #000000 !important;
    border: 1px solid #0d6efd !important;
    box-shadow: 0 3px 8px rgba(13, 110, 253, 0.15);
    transform: translateY(-1px);
}

.button-berkas {
    background: linear-gradient(145deg, #ffe566, #ffd100);
    color: #333333;
    border: 1px solid #ffcc00;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-berkas:hover {
    background: #fffacd !important;
    color: #000000 !important;
    border: 1px solid #e6b800 !important;
    box-shadow: 0 3px 8px rgba(255, 209, 0, 0.25);
    transform: translateY(-1px);
}

.button-newvalidasi {
    background: linear-gradient(145deg, #dacccc, #dacccc);
    color: #333333;
    border: 1px solid #cccccc;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-newvalidasi:hover {
    background: #ffffff !important;
    color: #000000 !important;
    border: 1px solid #999999 !important;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-1px);
}

.button-hijau {
    background: linear-gradient(145deg, #6fdc8c, #43c768);
    color: #ffffff;
    border: 1px solid #3cbf5a;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-hijau:hover {
    background: #d0f3dd !important;
    color: #14532d !important;
    border: 1px solid #3cbf5a !important;
    box-shadow: 0 3px 8px rgba(67, 199, 104, 0.25);
    transform: translateY(-1px);
}

.button-merah {
    background: linear-gradient(145deg, #b33c3c, #8b1c1c);
    color: #ffffff;
    border: 1px solid #7a1414;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-merah:hover {
    background: #f5cccc !important;
    color: #7a1414 !important;
    border: 1px solid #7a1414 !important;
    box-shadow: 0 3px 8px rgba(179, 60, 60, 0.25);
    transform: translateY(-1px);
}

.button-hitam {
    border: 1px solid #cacaca;
    color: white;
    background: linear-gradient(145deg, #889baf, #889baf);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-hitam:hover {
    background: white;
    color: black;
}

.button-create {
    border: none;
    color: white;
    background: linear-gradient(120deg, #28a745, #d4edda, #28a745);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-create:hover {
    color: black;
    background: white;
    animation: none;
}

.button-modern {
    background: linear-gradient(145deg, #f9fafc, #eef3fb);
    color: #1e293b;
    border: 1px solid #d0d7e2;
    font-weight: 600;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
}
.button-modern:hover {
    background: #ffffff;
    color: #0d47a1;
    border: 1px solid #93c5fd;
    box-shadow: 0 3px 8px rgba(13, 110, 253, 0.15);
    transform: translateY(-1px);
}

.button-dikembalikan {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, red, white, red);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-dikembalikan:hover {
    color: black;
    background: white;
    animation: none;
}

.button-pilih {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, rgb(2, 88, 248), silver, whitesmoke);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
}
.button-pilih:hover {
    color: midnightblue;
    background: white;
    border: 1px solid midnightblue;
    animation: none;
}

.button-sudah {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #006400, #32CD32, #90EE90);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
}
.button-sudah:hover {
    color: #006400;
    background: white;
    border: 1px solid #006400;
    animation: none;
}

.button-belum {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #8B0000, #FF6347, #FFA07A);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
}
.button-belum:hover {
    color: #8B0000;
    background: white;
    border: 1px solid #8B0000;
    animation: none;
}

.button-download {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #001f4d, #004080, #001f4d);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-download:hover {
    color: black;
    background: white;
    animation: none;
}

.button-statistika {
    border: none;
    color: white;
    font-weight: bold;
    background: linear-gradient(120deg, #dbba00, #ffffff, #dbba00);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}
.button-statistika:hover {
    color: black;
    background: white;
    animation: none;
}

.button-delete {
    border: 1px solid #c8dfff;
    color: #003366;
    font-weight: bold;
    background: linear-gradient(145deg, #d85757, #d85757);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-delete:hover {
    background: white;
    color: black;
}

.button-data {
    background: linear-gradient(145deg, #7dcbff, #7dcbff);
    color: #140082;
    border: 1px solid #c9a6ff;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}
.button-data:hover {
    background: #ffffff !important;
    color: #4b0082 !important;
    border: 1px solid #a065ff !important;
    box-shadow: 0 3px 8px rgba(160, 101, 255, 0.15);
    transform: translateY(-1px);
}

.putih {
    border: none;
    color: black;
    font-weight: bold;
    background-color: white;
}
.putih:hover {
    background-color: #f1f1f1;
}

.hijau {
    border: none;
    color: black;
    font-weight: bold;
    background: linear-gradient(to right, #a8e6cf, #ffffff);
}
.hijau:hover {
    background: linear-gradient(to right, #98dbc6, #ffffff);
    box-shadow: 0 0 5px rgba(0, 128, 0, 0.2);
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}

/* ============================================================
   CARD – PUTIH BERSIH
   ============================================================ */
.card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
    overflow: hidden;
}
.card-header {
    background: var(--white);
    border-bottom: 1px solid var(--border);
    padding: 14px 18px;
}
.card-body {
    background: var(--white);
}

/* ============================================================
   DASHBOARD CARD
   ============================================================ */
.dashboard-card {
    background-color: white;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: none;
    height: 100%;
    position: relative;
}

.dashboard-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background-color: #42b549;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.card-content {
    padding: 25px 20px;
    display: flex;
    align-items: center;
}

.number-container {
    background-color: #42b549;
    border-radius: 14px;
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    flex-shrink: 0;
    box-shadow: 0 4px 10px rgba(66, 181, 73, 0.3);
}

.animated-number {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

.info-content { flex-grow: 1; }

.info-icon {
    font-size: 28px;
    margin-bottom: 8px;
    color: #42b549;
}

.info-text {
    font-size: 16px;
    font-weight: 600;
    margin: 0;
    color: #333;
    letter-spacing: 0.5px;
}

.card-1 .number-container { background-color: #42b549; }
.card-2 .number-container { background-color: #3fa845; }
.card-3 .number-container { background-color: #3b9a40; }
.card-4 .number-container { background-color: #378d3c; }
.card-5 .number-container { background-color: #338037; }

.card-1 .info-icon { color: #42b549; }
.card-2 .info-icon { color: #3fa845; }
.card-3 .info-icon { color: #3b9a40; }
.card-4 .info-icon { color: #378d3c; }
.card-5 .info-icon { color: #338037; }

/* ============================================================
   STATS CARD
   ============================================================ */
.stats-card {
    background-color: white;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: none;
    height: 100%;
    position: relative;
}

.stats-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background-color: #42b549;
}

.stats-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.stats-content {
    padding: 25px 20px;
    display: flex;
    align-items: center;
}

.stats-icon-box {
    background-color: #42b549;
    border-radius: 14px;
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    flex-shrink: 0;
    box-shadow: 0 4px 10px rgba(66, 181, 73, 0.3);
    position: relative;
    overflow: hidden;
}

.stats-icon-box::after {
    content: '';
    position: absolute;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at center, rgba(255,255,255,0.25), transparent 70%);
    animation: pulse 2.5s infinite ease-in-out;
    opacity: 0;
}

.stats-number {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

.stats-info { flex-grow: 1; }

.stats-title {
    font-size: 16px;
    font-weight: 600;
    margin: 0;
    color: #333;
    letter-spacing: 0.5px;
}

.stats-progress-wrap {
    margin-top: 8px;
    height: 8px;
    background-color: #f0f0f0;
    border-radius: 4px;
    overflow: hidden;
}

.stats-progress-bar {
    height: 8px;
    background-color: #42b549;
    width: 0;
    transition: width 1.5s ease-in-out;
}

.stats-percentage {
    font-weight: 600;
    color: #42b549;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    margin-top: 5px;
}

.stats-percentage i {
    font-size: 18px;
    color: #42b549;
    animation: bounce 1.8s infinite;
}

/* ============================================================
   MODAL – PUTIH BERSIH
   ============================================================ */
.modal-content {
    border: 1px solid var(--border);
    border-radius: 12px;
    background: var(--white);
}
.modal-header {
    background: var(--white);
    border-bottom: 1px solid var(--border);
    padding: 14px 18px;
}
.modal-title {
    font-size: var(--font-base);
    font-weight: 700;
    color: var(--text-dark) !important;
}
.modal-body {
    padding: 18px;
    font-size: var(--font-base);
    color: var(--text-medium);
}
.modal-footer {
    border-top: 1px solid var(--border);
    padding: 12px 18px;
    gap: 6px;
}

/* ============================================================
   FORM MODERN
   ============================================================ */
.form-modern {
    background: #ffffff;
    border-left: 6px solid #2a7f4f;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
    font-family: 'Poppins', sans-serif;
    transition: all 0.3s ease;
}

.form-modern:hover {
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}

.form-label-modern {
    font-weight: 500;
    color: #000000;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    font-size: 15px;
}

.form-modern input,
.form-modern textarea,
.form-modern select {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #c4d9c8;
    border-radius: 8px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    transition: all 0.3s ease;
}

.form-modern input:focus,
.form-modern textarea:focus,
.form-modern select:focus {
    outline: none;
    border-color: #2a7f4f;
    box-shadow: 0 0 6px rgba(42, 127, 79, 0.4);
}

.form-select-modern:focus {
    border-color: #1a3c34;
    box-shadow: 0 0 0 3px rgba(26, 60, 52, 0.2);
    outline: none;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 13px;
    margin-top: 6px;
}

.form-label-modern i {
    color: navy;
    font-size: 18px;
}

/* ============================================================
   FORM INPUT GLOBAL
   ============================================================ */
input[type="search"],
select,
input[type="text"] {
    font-size: var(--font-base);
    font-family: inherit;
    color: var(--text-dark) !important;
}

/* ============================================================
   PAGINATION – PUTIH + HIJAU AKTIF
   ============================================================ */
.pagination {
    display: flex;
    gap: 4px;
    padding: 10px 0;
    justify-content: center;
    flex-wrap: wrap;
}
.pagination a,
.pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    height: 32px;
    padding: 0 10px;
    background: var(--white);
    color: var(--text-dark) !important;
    border: 1px solid var(--border);
    border-radius: 8px;
    font-size: var(--font-base);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
}
.pagination a:hover {
    background: var(--blora-green-soft);
    border-color: var(--blora-green);
    color: var(--blora-green-deep) !important;
}
.pagination .active span,
.pagination .active a {
    background: var(--blora-green);
    border-color: var(--blora-green);
    color: #FFFFFF !important;
}

/* ============================================================
   EMPTY STATE – TAMPILAN KETIKA DATA KOSONG
   ============================================================ */
.zebra-table tbody tr.empty-row {
    background: #FFFFFF !important;
    cursor: default !important;
}
.zebra-table tbody tr.empty-row:hover {
    background: #FFFFFF !important;
    cursor: default !important;
}
.zebra-table tbody tr.empty-row td {
    background: #FFFFFF !important;
    padding: 0 !important;
    border: none !important;
    border-bottom: 1px solid #E9EDF4 !important;
}

.empty-state {
    padding: 50px 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 6px;
    animation: fadeIn 0.5s ease-in-out;
}

.empty-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: #F0FDF4;
    border: 2px dashed #ff0000;
    color: #ff0000;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    margin-bottom: 8px;
    animation: bounceEmpty 2.5s infinite ease-in-out;
}

@keyframes bounceEmpty {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
}

.empty-title {
    font-size: 16px;
    font-weight: 700;
    color: #1A2B4A;
    margin: 8px 0 0 0;
    letter-spacing: -0.2px;
}

.empty-desc {
    font-size: 13px;
    color: #6B7A93;
    margin: 0 0 14px 0;
    max-width: 380px;
    line-height: 1.5;
}

.empty-state .button-baru {
    margin-top: 4px;
}

/* ============================================================
   ANIMATIONS
   ============================================================ */
@keyframes pulse {
    0% { transform: scale(0.8); opacity: 0.5; }
    50% { transform: scale(1.2); opacity: 0; }
    100% { transform: scale(0.8); opacity: 0.5; }
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-3px); }
}

/* ============================================================
   RESPONSIVE – GABUNGAN
   ============================================================ */
@media (max-width: 768px) {
    /* Card */
    .card-header { padding: 12px 14px; }

    /* Zebra table */
    .zebra-table th,
    .zebra-table td {
        padding: 10px;
        font-size: 13px;
    }
    table.zebra-table thead th { padding: 8px 6px !important; font-size: 13px !important; }
    table.zebra-table tbody td { padding: 7px 8px !important; font-size: 13px !important; }

    /* Button */
    .button-modern button-md,
    .button-berkas,
    .button-modern,
    .button-newvalidasi,
    .button-merah {
        font-size: 13px;
        padding: 5px 8px;
    }

    /* Empty state */
    .empty-state { padding: 40px 16px; }
    .empty-icon { width: 64px; height: 64px; font-size: 1.6rem; }
    .empty-title { font-size: 15px; }
    .empty-desc { font-size: 12px; }
}

@media (max-width: 576px) {
    .number-container { width: 60px; height: 60px; }
    .animated-number { font-size: 1.5rem; }
    .info-icon { font-size: 22px; }
    .info-text { font-size: 14px; }
    .card-content { padding: 20px 15px; }
}
</style>

<script>
// ============================================================
// SCROLL LOCK – cegah halaman naik ke atas
// ============================================================
let scrollPosition = {
  top: window.scrollY,
  left: window.scrollX
};

window.addEventListener('scroll', () => {
  scrollPosition.top = window.scrollY;
  scrollPosition.left = window.scrollX;
});

function lockScroll() {
  window.scrollTo(scrollPosition.left, scrollPosition.top);
}

// Cegah <a href="#"> bikin naik ke atas
document.querySelectorAll('a[href="#"]').forEach(link => {
  link.addEventListener('click', e => e.preventDefault());
});

// Cegah form submit default
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    if (!form.hasAttribute('data-allow-submit')) {
      e.preventDefault();
    }
  });
});

// Select berubah, jangan naik scroll
document.querySelectorAll('select').forEach(select => {
  select.addEventListener('change', () => {
    setTimeout(lockScroll, 50);
  });
});

// Input/textarea berubah
document.querySelectorAll('input, textarea').forEach(input => {
  input.addEventListener('input', () => {
    setTimeout(lockScroll, 50);
  });
});
</script> --}}
