<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    * {
        font-family: 'Poppins', sans-serif !important;
    }
    /* Sembunyikan button-berkas di layar ≤ 768px */
@media (max-width: 768px) {
    .button-berkas {
        display: none;
    }
}
</style>

<style>

@media (max-width: 768px) {
    #searchInput,
    #searchInput + i { /* sembunyikan ikon juga */
        display: none;
    }
}

/* .zebra-table {
  width: 100%;
  border-collapse: collapse;
  background-color: #ffffff;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  text-align: left;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
}

.zebra-table th {
  background-color: #1a3c34;
  color: #ffffff;
  font-weight: 500;
  text-transform: uppercase;
  padding: 16px 14px;
  border-bottom: 1px solid #2a5247;
  letter-spacing: 0.8px;
  font-size: 14px;
  opacity: 0.95;
}

.zebra-table td {
  padding: 14px 14px;
  border-bottom: 1px solid #f0f5f3;
  color: #444444;
  font-weight: 400;
}

.zebra-table tbody tr:nth-child(even) {
  background-color: #fafdfc;
}

.zebra-table th,
.zebra-table td {
  border-left: none;
  border-right: none;
}

.zebra-table tbody tr:hover {
  background-color: #f1f8f5;
  transition: all 0.3s ease;
}

.zebra-table th:first-child {
  border-top-left-radius: 10px;
}

.zebra-table th:last-child {
  border-top-right-radius: 10px;
} */

/* 🌿 Modern Zebra Table Style */
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
}

/* Header – modern green with soft shadow */
.zebra-table thead {
  background: linear-gradient(135deg, #1a3c34, #2f5d4f);
}

.zebra-table th {
  color: #fff;
  font-weight: 500;
  text-transform: uppercase;
  padding: 16px 14px;
  letter-spacing: 0.7px;
  text-align: left;
  border-bottom: 1px solid #2a5247;
  font-size: 14px;
}

/* Isi tabel */
.zebra-table td {
  padding: 14px 14px;
  border-bottom: 1px solid #f0f5f3;
  color: #444;
  font-weight: 400;
  background-color: #fff;
}

/* Zebra effect lembut */
.zebra-table tbody tr:nth-child(even) {
  background-color: #f8fbfa;
}

/* Hover lembut dengan efek transisi */
.zebra-table tbody tr:hover {
  background-color: #eaf5f1;
  transition: all 0.3s ease;
}

/* Tanpa garis vertikal */
.zebra-table th,
.zebra-table td {
  border-left: none;
  border-right: none;
}

/* Corner radius header */
.zebra-table th:first-child {
  border-top-left-radius: 12px;
}
.zebra-table th:last-child {
  border-top-right-radius: 12px;
}

/* Responsive look */
@media (max-width: 768px) {
  .zebra-table th,
  .zebra-table td {
    padding: 12px;
    font-size: 14px;
  }
}

/* Tambahan animasi saat muncul */
.zebra-table {
  animation: fadeIn 0.5s ease-in-out;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

.button-abgblora {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif; /* Tambah font Poppins */
    font-weight: 600; /* Tebal, bisa diganti 700 jika lebih tebal lagi */
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s;
    background: linear-gradient(120deg, navy, white, navy);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

    .button-abgblora:hover {
        color: black;
        background: white;
    }

    .button-permohonan {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif; /* Tambah font Poppins */
    font-weight: 600; /* Tebal, bisa diganti 700 jika lebih tebal lagi */
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s;
    background: linear-gradient(120deg, skyblue, white, skyblue);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

    .button-permohonan:hover {
        color: black;
        background: white;
    }

   .button-fungsi {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease-in-out;
    background: linear-gradient(120deg, #0606e7, #c5b1b1, #0606e7);
    background-size: 200% auto;
    animation: gradientMove 6s linear infinite;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.button-fungsi:hover {
    color: black;
    background: white;
    background-size: initial;
    animation: none;
    border: 1px solid #0606e7;
    transform: translateY(-2px);
}

/* Gradient animation */
@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}


</style>


<style>
    .button-belakang {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #86bae7, white, #86bae7);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-belakang:hover {
        color: black;
        background: white;
    }

    .button-kembali {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #6c757d, white, #6c757d);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-kembali:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
 .button-validasinew {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
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
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #4b5563, #9ca3af, #4b5563);
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-kembalinew:hover {
    background-color: white !important;
    color: #00ccff !important;
    background-image: none !important;
}


@keyframes gradientMove {
    0% {
        background-position: 0% center;
    }
    100% {
        background-position: 200% center;
    }
}


   .button-lolos {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight: bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-lolos:hover {
    color: black;
    background: white;
    animation: none; /* supaya animasi background berhenti saat hover */
}
/*
.button-baru {

    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, #e1f0ff, #d6e9ff);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-baru:hover {
    background: white;
    color: black;
} */


.button-simpan {
    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, skyblue);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
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
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-baru:hover {
    background: #ffffff !important;     /* Latar belakang putih */
    color: #000000 !important;          /* Teks jadi hitam */
    border: 1px solid #0d6efd !important; /* Border biru tua */
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.15);
    transform: translateY(-1px);
}

.button-berkas {
    background: linear-gradient(145deg, #ffe566, #ffd100);
    color: #333333;
    border: 1px solid #ffcc00;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-berkas:hover {
    background: #fffacd !important;             /* Hover jadi lebih soft kuning muda */
    color: #000000 !important;
    border: 1px solid #e6b800 !important;
    box-shadow: 0 4px 12px rgba(255, 209, 0, 0.25);
    transform: translateY(-1px);
}

.button-newvalidasi {
    background: linear-gradient(145deg, #dacccc); /* Abu-abu gradasi */
    color: #333333;                                         /* Teks abu gelap */
    border: 1px solid #cccccc;                              /* Border abu */
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-newvalidasi:hover {
    background: #ffffff !important;     /* Hover: putih */
    color: #000000 !important;          /* Hover: teks hitam */
    border: 1px solid #999999 !important;/* Hover: border abu-abu */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transform: translateY(-1px);
}


.button-hijau {
    background: linear-gradient(145deg, #6fdc8c, #43c768);
    color: #ffffff;
    border: 1px solid #3cbf5a;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-hijau:hover {
    background: #d0f3dd !important; /* Hijau muda saat hover */
    color: #14532d !important;
    border: 1px solid #3cbf5a !important;
    box-shadow: 0 4px 12px rgba(67, 199, 104, 0.25);
    transform: translateY(-1px);
}

.button-merah {
    background: linear-gradient(145deg, #b33c3c, #8b1c1c);
    color: #ffffff;
    border: 1px solid #7a1414;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-merah:hover {
    background: #f5cccc !important; /* Merah muda saat hover */
    color: #7a1414 !important;
    border: 1px solid #7a1414 !important;
    box-shadow: 0 4px 12px rgba(179, 60, 60, 0.25);
    transform: translateY(-1px);
}


.button-hitam {
    border: 1px solid #cacaca;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    margin-right: 10px;
    background: linear-gradient(145deg, #889baf, #889baf);
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    color: white;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-hitam:hover {
    background: white;
    color: black;
}


    .button-create {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, #28a745, #d4edda, #28a745); /* hijau modern */
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-create:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }

.button-modern {
    background: linear-gradient(145deg, #f9fafc, #eef3fb);
    color: #1e293b;
    border: 1px solid #d0d7e2;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.25s ease;
    box-shadow:
        0 2px 4px rgba(0, 0, 0, 0.04),
        inset 0 1px 0 rgba(255, 255, 255, 0.6);
}

.button-modern:hover {
    background: #ffffff;
    color: #0d47a1;
    border: 1px solid #93c5fd;
    box-shadow:
        0 4px 10px rgba(13, 110, 253, 0.15),
        inset 0 1px 0 rgba(255, 255, 255, 0.9);
    transform: translateY(-1px);
}

.button-modern svg {
    width: 18px;
    height: 18px;
    stroke-width: 2;
}

</style>


<style>
    .button-dikembalikan {
        border: none;
        padding: 8px 20px;
        border-radius: 15px;
        font-size: 14px;
        color: white;
        font-weight:bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s;
        background: linear-gradient(120deg, red, white, red);
        background-size: 200% auto;
        animation: gradientMove 7s linear infinite;
    }

    .button-dikembalikan:hover {
        color: black;
        background: white;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>

<style>
    .button-pilih {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        font-weight:bold;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: color 0.3s, background-color 0.3s, border 0.3s;
        background: linear-gradient(120deg, rgb(2, 88, 248), silver, whitesmoke);
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
    }

    .button-pilih:hover {
        color: midnightblue;
        background: white;
        border: 1px solid midnightblue;
    }

    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }
</style>


<style>
    /* BUTTON PILIH (navy-silver) */
    /* BUTTON SUDAH (green elegant) */
    .button-sudah {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #006400, #32CD32, #90EE90); /* darkgreen to limegreen */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-sudah:hover {
        color: #006400;
        background: white;
        border: 1px solid #006400;
    }

    /* BUTTON BELUM (red elegant) */
    .button-belum {
        border: none;
        padding: 10px 20px;
        border-radius: 15px;
        font-size: 16px;
        color: white;
        font-weight:bold;
        background: linear-gradient(120deg, #8B0000, #FF6347, #FFA07A); /* darkred to light salmon */
        background-size: 200% auto;
        animation: gradientMove 6s linear infinite;
        text-decoration: none;
        transition: background 0.3s, color 0.3s, border 0.3s;
        display: flex;
        align-items: center;
    }

    .button-belum:hover {
        color: #8B0000;
        background: white;
        border: 1px solid #8B0000;
    }

    /* Animasi gradasi */
    @keyframes gradientMove {
        0% {
            background-position: 200% center;
        }
        100% {
            background-position: -200% center;
        }
    }


    .button-download {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #001f4d, #004080, #001f4d); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-download:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}

.button-statistika {
    border: none;
    padding: 8px 20px;
    border-radius: 15px;
    font-size: 14px;
    color: white;
    cursor: pointer;
    display: flex;
    font-weight:bold;
    align-items: center;
    text-decoration: none;
    transition: color 0.3s, background 0.3s;
    background: linear-gradient(120deg, #dbba00, #ffffff, #dbba00); /* navy modern */
    background-size: 200% auto;
    animation: gradientMove 7s linear infinite;
}

.button-statistika:hover {
    color: black;          /* tulisan jadi hitam */
    background: white;     /* background jadi putih */
}

button-delete {
    border: 1px solid #c8dfff;
    padding: 8px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
    color: #003366;
    background: linear-gradient(145deg, #d85757, #d85757);
    display: inline-flex;
    align-items: center;
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
    min-width: max-content;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-delete:hover {
    background: white;
    color: black;
}

.button-data {
    background: linear-gradient(145deg, #f3e8ff, #e0caff); /* Ungu lembut */
    color: #4b0082; /* Teks ungu tua */
    border: 1px solid #c9a6ff; /* Border ungu */
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 14px;
    margin: 0 5px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    min-width: max-content;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.button-data:hover {
    background: #ffffff !important;        /* Latar belakang putih */
    color: #4b0082 !important;            /* Teks tetap ungu tua */
    border: 1px solid #a065ff !important; /* Border ungu sedikit lebih terang */
    box-shadow: 0 4px 12px rgba(160, 101, 255, 0.15);
    transform: translateY(-1px);
}


.putih {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 16px;
    color: black;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    background-color: white;
    transition: background-color 0.3s;
}

.putih:hover {
    background-color: #f1f1f1; /* opsional: efek hover ringan */
}

.hijau {
    border: none;
    padding: 10px 20px;
    border-radius: 15px;
    font-size: 16px;
    color: black;
    cursor: pointer;
    font-weight: bold;
    display: flex;
    align-items: center;
    text-decoration: none;
    background: linear-gradient(to right, #a8e6cf, #ffffff); /* gradasi hijau muda ke putih */
    transition: background 0.3s, box-shadow 0.3s;
}

.hijau:hover {
    background: linear-gradient(to right, #98dbc6, #ffffff); /* gradasi hover */
    box-shadow: 0 0 5px rgba(0, 128, 0, 0.2);
}


/* Jika animasi gradientMove belum ada, tambahkan contoh animasinya: */
@keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 200% 50%;
    }
}

  .tabel-baru {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
  }

  .tabel-baru thead th {
    background-color: #a8e6a1; /* Hijau muda modern */
    color: black;
    text-align: center;
    padding: 10px;
    font-weight: 600;
    border: 1px solid #ddd;
    white-space: nowrap;
    font-family: 'Poppins', sans-serif;
  }

  .tabel-baru tbody td {
    padding: 8px;
    border: 1px solid #ddd;
    white-space: nowrap;
    background-color: white !important;
    font-family: 'Poppins', sans-serif;
  }

  .tabel-baru tr:hover {
    background-color: #f1f1f1;
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

</style>


<style>
    .zebra-table tbody tr:hover {
        background-color: #f5b041 !important; /* warna oranye PUPR */
        color: white;
        transition: background-color 0.3s ease;
    }
</style>

<script>
// Simpan posisi scroll terakhir
let scrollPosition = {
  top: window.scrollY,
  left: window.scrollX
};

// Update saat user scroll manual
window.addEventListener('scroll', () => {
  scrollPosition.top = window.scrollY;
  scrollPosition.left = window.scrollX;
});

// Fungsi untuk kunci scroll
function lockScroll() {
  window.scrollTo(scrollPosition.left, scrollPosition.top);
}

// Cegah <a href="#"> bikin naik ke atas
document.querySelectorAll('a[href="#"]').forEach(link => {
  link.addEventListener('click', e => e.preventDefault());
});

// Cegah form submit default (kalau gak sengaja ke-submit)
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    if (!form.hasAttribute('data-allow-submit')) {
      e.preventDefault();
    }
  });
});

// Saat select berubah, jangan naik scroll
document.querySelectorAll('select').forEach(select => {
  select.addEventListener('change', () => {
    setTimeout(lockScroll, 50); // kasih delay biar aman
  });
});

// Tambahan: jika input/textarea berubah
document.querySelectorAll('input, textarea').forEach(input => {
  input.addEventListener('input', () => {
    setTimeout(lockScroll, 50);
  });
});
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
        :root {
            --primary-green: #42b549; /* Hijau Tokopedia */
            --dark-green: #2c9e32;
            --light-green: #e8f5e9;
            --accent-green: #c8e6c9;
        }


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
            background-color: var(--primary-green);
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
            background-color: var(--primary-green);
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

        .info-content {
            flex-grow: 1;
        }

        .info-icon {
            font-size: 28px;
            margin-bottom: 8px;
            color: var(--primary-green);
        }

        .info-text {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
            color: #333;
            letter-spacing: 0.5px;
        }

        /* Warna khusus untuk setiap kartu */
        .card-1 .number-container {
            background-color: #42b549;
        }

        .card-2 .number-container {
            background-color: #3fa845;
        }

        .card-3 .number-container {
            background-color: #3b9a40;
        }

        .card-4 .number-container {
            background-color: #378d3c;
        }

        .card-5 .number-container {
            background-color: #338037;
        }

        .card-1 .info-icon {
            color: #42b549;
        }

        .card-2 .info-icon {
            color: #3fa845;
        }

        .card-3 .info-icon {
            color: #3b9a40;
        }

        .card-4 .info-icon {
            color: #378d3c;
        }

        .card-5 .info-icon {
            color: #338037;
        }

        @media (max-width: 576px) {
            .number-container {
                width: 60px;
                height: 60px;
            }

            .animated-number {
                font-size: 1.5rem;
            }

            .info-icon {
                font-size: 22px;
            }

            .info-text {
                font-size: 14px;
            }

            .card-content {
                padding: 20px 15px;
            }
        }
    </style>
    <style>
    :root {
        --primary-green: #42b549;
    }

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
        background-color: var(--primary-green);
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
        background-color: var(--primary-green);
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

    @keyframes pulse {
        0% { transform: scale(0.8); opacity: 0.5; }
        50% { transform: scale(1.2); opacity: 0; }
        100% { transform: scale(0.8); opacity: 0.5; }
    }

    .stats-number {
        font-size: 2rem;
        font-weight: 700;
        margin: 0;
        color: white;
    }

    .stats-info {
        flex-grow: 1;
    }

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
        background-color: var(--primary-green);
        width: 0;
        transition: width 1.5s ease-in-out;
    }

    .stats-percentage {
        font-weight: 600;
        color: var(--primary-green);
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 14px;
        margin-top: 5px;
    }

    .stats-percentage i {
        font-size: 18px;
        color: var(--primary-green);
        animation: bounce 1.8s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-3px); }
    }
</style>

<style>
    /* Font dan warna dasar */
body {
    font-family: 'Poppins', sans-serif;
}

/* Card-style form wrapper */
.form-modern {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 16px 20px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.form-modern:hover {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

/* Label modern */
.form-label-modern {
    font-weight: 600;
    color: #1a3c34;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    font-size: 15px;
}

/* Select modern style */
.form-select-modern {
    border-radius: 8px;
    border: 1px solid #d1d5db;
    padding: 10px 14px;
    font-size: 15px;
    color: #1f2937;
    transition: all 0.3s ease;
}

.form-select-modern:focus {
    border-color: #1a3c34;
    box-shadow: 0 0 0 3px rgba(26, 60, 52, 0.2);
    outline: none;
}

/* Invalid feedback */
.invalid-feedback {
    color: #dc3545;
    font-size: 13px;
    margin-top: 6px;
}

/* Icon spacing */
.form-label-modern i {
    color: navy;
    font-size: 18px;
}

</style>
