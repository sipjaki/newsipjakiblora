<style>
/* ============================================================
   TOMBOL EDIT – HOVER PUTIH + TEKS HITAM
   ============================================================ */
.btn-warning:hover {
    background-color: #ffffff !important;
    color: #000000 !important;
    border-color: #ffc107 !important;
}

.btn-warning:hover i {
    color: #000000 !important;
}

/* ============================================================
   TABEL ZEBRA – STYLE SIPD HIJAU KHAS BLORA
   ============================================================ */
.table-wrapper {
    overflow-x: auto;
    border-radius: 14px;
    border: 1px solid #E9EDF4;
    background: #FFFFFF;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
}

.zebra-table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    border-radius: 14px;
    overflow: hidden;
    background: #FFFFFF;
    margin: 0;
}

/* --- Header Tabel (Hijau Khas Blora) --- */
.zebra-table thead {
    background: #16A34A;
    color: #FFFFFF;
}

.zebra-table thead th {
    padding: 12px 16px;
    text-align: left;
    font-weight: 600;
    font-size: 0.72rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-bottom: 2px solid #15803D;
    color: #FFFFFF;
    white-space: nowrap;
}

/* --- Body Tabel --- */
.zebra-table tbody td {
    padding: 11px 16px;
    text-align: left;
    font-size: 0.82rem;
    font-weight: 400;
    color: #1A2B4A;
    border-bottom: 1px solid #F0F0F0;
    vertical-align: middle;
}

/* Zebra striping – baris ganjil putih, genap hijau soft */
.zebra-table tbody tr:nth-child(odd) {
    background-color: #FFFFFF;
}
.zebra-table tbody tr:nth-child(even) {
    background-color: #F0FDF4;
}

/* Hover baris – hijau soft lebih pekat */
.zebra-table tbody tr:hover {
    background-color: #DCFCE7 !important;
    transition: background 0.15s ease;
}

.zebra-table tbody tr:last-child td {
    border-bottom: none;
}

/* --- Ikon view --- */
.view-icon {
    color: #4A5A72;
    cursor: pointer;
    transition: color 0.2s ease;
}
.view-icon:hover {
    color: #16A34A;
}

/* ============================================================
   RUNNING TEXT / MARQUEE – HIJAU KHAS BLORA
   ============================================================ */
.marquee-container {
    overflow: hidden;
    white-space: nowrap;
    position: relative;
    background: #F0FDF4;
    border: 1px solid #DCFCE7;
    border-radius: 10px;
    padding: 10px 16px;
    margin-bottom: 16px;
}

.marquee-content {
    display: inline-block;
    animation: marquee 20s linear infinite;
    color: #15803D;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.2px;
}

/* Teks nama & status user di dalam marquee */
.marquee-content span {
    color: #14532D !important;
    font-weight: 700 !important;
}

@keyframes marquee {
    0%   { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 768px) {
    .zebra-table {
        font-size: 12.5px;
    }
    .zebra-table thead th {
        padding: 10px 12px;
        font-size: 0.65rem;
    }
    .zebra-table tbody td {
        padding: 9px 12px;
        font-size: 0.75rem;
    }
    .marquee-content {
        font-size: 13px;
    }
    .marquee-container {
        padding: 8px 12px;
    }
}

@media (max-width: 480px) {
    .zebra-table {
        font-size: 11.5px;
    }
    .zebra-table thead th {
        padding: 8px 10px;
        font-size: 0.6rem;
    }
    .zebra-table tbody td {
        padding: 8px 10px;
        font-size: 0.7rem;
    }
    .marquee-content {
        font-size: 12px;
    }
}
</style>


<!-- ============================================================
     MARQUEE / RUNNING TEXT HEADER
     ============================================================ -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="mb-3 marquee-container">
                <span class="marquee-content">
                    Selamat datang!
                    <span>{{ Auth::user()?->name ?? '-' }}</span>
                    di Dashboard
                    <span>{{ Auth::user()?->statusadmin?->statusadmin ?? '-' }}</span>
                    Sistem Informasi Pembina Jasa Konstruksi Kab Blora
                </span>
            </h3>
        </div>
    </div>
</div>
