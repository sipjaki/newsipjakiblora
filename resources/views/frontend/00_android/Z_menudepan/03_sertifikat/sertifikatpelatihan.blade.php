<style>
/* Menambahkan font kaligrafi atau aksara sambung */
/* Menambahkan font kaligrafi */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

.nama-sertifikat {
    font-family: 'Great Vibes', cursive;
    font-size: 16px;
    text-align: center;
    color: #bfa144; /* Warna emas klasik */
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    margin: 30px 0;
    letter-spacing: 1px;
}


.cert-container {
    width: 297mm;
    height: 210mm;
    background: linear-gradient(to right, #f1f8e9 0%, #f9f5e8 100%);
    border: 15px double #2e7d32;
    border-image: linear-gradient(45deg, #2e7d32, #d4af37, #2e7d32) 1;
    padding: 30px;
    box-shadow: 0 0 30px rgba(0,0,0,0.3);
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
    margin-left: 200px;
}

/* Ornamen latar belakang */
.cert-container::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path fill="%23d4af3780" d="M30,10 Q50,5 70,10 Q95,15 90,40 Q85,65 70,80 Q50,95 30,80 Q15,65 10,40 Q5,15 30,10 Z"/></svg>');
    opacity: 0.1;
    z-index: 0;
}

/* Pita kiri bawah */
.cert-container .ribbon-left {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #d4af37, #2e7d32);
clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
 z-index: 2;
}

.ribbon-left {
    position: relative;
    background-color: #ffcc00; /* Warna pita */
    color: white;
    padding: 10px 20px;
    display: flex;
    align-items: flex-end; /* Memindahkan teks ke bawah */
    justify-content: flex-start; /* Menempatkan pita di kiri */
}

.ribbon-text {
    margin-left: 20px; /* Memberikan jarak antara pita dan teks */
    text-align: left;
    font-size: 16px;
    font-weight: 800; /* Menambahkan font-weight 800 */
}

/* Pita kanan bawah */
.cert-container .ribbon-right {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100px;
    height: 40px;
    background: linear-gradient(135deg, #b71c1c, #e53935);
    clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
    z-index: 2;
}

        .cert-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cert-logos {
            display: flex;
            justify-content: center; /* Center horizontally */
            gap: 20px;
            filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.2));
            width: 100%; /* Take full width */
            margin-bottom: 20px; /* Add some space below */
        }

        .cert-title {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .cert-content {
            margin: 30px 0;
            line-height: 1.6;
            position: relative;
            z-index: 1;
            padding: 0 50px;
        }

        .cert-signature {
            text-align: right;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }



        .cert-footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #2e7d32;
            position: relative;
            z-index: 1;
        }

        .cert-h1 {
            font-size: 32px;
            margin: 0;
            color: #1b5e20;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
            letter-spacing: 1px;
        }

        .cert-h2 {
            font-size: 20px;
            margin: 10px 0;
            color: #2e7d32;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .cert-h3 {
            font-size: 16pt;
            margin: 5px 0;
            color: #1b5e20;
        }

        .cert-hr {
            border: none;
            height: 2px;
            background: linear-gradient(to right, transparent, #d4af37, #2e7d32, #d4af37, transparent);
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .cert-highlight {
            font-weight: bold;
            color: #1b5e20;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
        }

        .cert-border-decoration {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #d4af37;
            opacity: 0.2;
            z-index: 0;
        }

        .cert-border-decoration:nth-child(1) {
            top: 20px;
            left: 20px;
            border-radius: 50% 50% 0 50%;
        }

        .cert-border-decoration:nth-child(2) {
            top: 20px;
            right: 20px;
            border-radius: 50% 50% 50% 0;
        }

        .cert-border-decoration:nth-child(3) {
            bottom: 20px;
            left: 20px;
            border-radius: 50% 0 50% 50%;
        }

        .cert-border-decoration:nth-child(4) {
            bottom: 20px;
            right: 20px;
            border-radius: 0 50% 50% 50%;
        }

        @page {
            size: A4 landscape;
            margin: 0;
        }
    </style>


<style>

    .nik-input {
    padding: 12px;
    border: 1px solid #d1d5db;
    border-radius: 0 8px 0 8px; /* Kanan atas & kiri bawah */
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
}

.check-button {
    padding: 12px;
    background-color: #4ADE80;
    color: white;
    border: none;
    border-radius: 0 8px 0 8px; /* Kanan atas & kiri bawah */
    font-weight: 600;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.check-button:hover {
    background-color: #22c55e;
}

    /* Gaya untuk tabel */
    .custom-table-container {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden; /* NONAKTIFKAN scroll horizontal */
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    border-radius: 20px;
    padding: 20px;
    box-sizing: border-box;
    margin: 0 auto;
}

.custom-fl-table {
    width: 100%;
    max-width: 275px;
    border-collapse: collapse;
    table-layout: fixed; /* Membuat kolom konsisten */
}

.custom-fl-table th,
.custom-fl-table td {
    padding: 12px 15px;
    border-bottom: 1px solid #998282;
    text-align: center;
    vertical-align: middle;
    height: 48px; /* Tinggi baris tetap */
    box-sizing: border-box;
    word-wrap: break-word;
}

.custom-fl-table th {
    background-color: #4ADE80;
    font-weight: 600;
    color: #2d3436;
    font-size: 14px;
    border-bottom: 2px solid #e0e0e0;
}

.custom-fl-table td {
    font-size: 14px;
    color: #000000;
    line-height: 1.5;
}

/* Zebra striping */
.custom-fl-table tbody tr:nth-child(even) {
    background-color: #f7f7f7;
}

/* Hover effect */
.custom-fl-table tbody tr:hover {
    background-color: #e6ffe6;
}

/* NONAKTIFKAN scrollbar */
.custom-table-container::-webkit-scrollbar {
    display: none;
}

/* Responsif untuk layar kecil - opsional */
@media (max-width: 768px) {
    .custom-table-container {
        padding: 10px;
    }

    .custom-fl-table th,
    .custom-fl-table td {
        font-size: 12px;
        padding: 10px;
    }
}

</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama1.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">
                <nav class="pt-5 px-3 flex justify-between items-center">
                    <!-- Logo bagian kiri -->
                    <div class="flex items-center gap-[10px]">
                        <a href="index.html" class="w-10 h-10 flex shrink-0">
                            <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                        </a>
                    </div>

                    <!-- Judul bagian tengah -->
                    <div class="flex flex-col items-center justify-center text-center">
                        <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                        <br>
                        {{-- <p class="font-semibold text-xl text-white">{{$title}}</p> --}}
                      <div class="z-10" style="margin-top:25px; background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
            <h1 class="font-bold leading-[36px] text-center" style="color: black; font-size:20px;">
                {{$title}}
            </h1>
        </div>
                    </div>

                    <!-- Ikon bagian kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                    </a>
                </nav>
            </div>

                    <div class="flex flex-col gap-4 px-4" style="margin-top:-100px;">

                            <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                                <div class="flex justify-center px-4 mt-[-150px]">
                                    <!DOCTYPE html>
    <style>

.certificate-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Card Styles */
        .certificate-card {
            width: 100%;
            max-width: 320px;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid #28a745;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .certificate-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        /* Header */
        .card-header {
            background-color: #28a745;
            color: white;
            padding: 22px;
            text-align: center;
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Body Content */
        .card-body {
            padding: 28px;
        }

        .instruction-text {
            color: #6c757d;
            text-align: center;
            font-size: 0.95rem;
            margin-bottom: 22px;
        }

        /* Example Box */
        .example-box {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 14px 16px;
            margin-bottom: 26px;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .example-box svg {
            margin-right: 12px;
            color: #2e7d32;
            min-width: 18px;
            flex-shrink: 0;
        }

        .example-text {
            color: #2e7d32;
            font-size: 0.88rem;
        }

        /* Input Group */
        .input-group {
            display: flex;
            width: 100%;
            max-width: 250;
            height: 52px;
        }

        .nik-input {
            flex: 1;
            padding: 0 16px;
            border: 1px solid #ced4da;
            border-radius: 8px 0 0 8px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .nik-input:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.2);
        }

        /* Button */
        .check-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 0 28px;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .check-button:hover {
            background-color: #218838;
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            .card-header {
                padding: 18px;
            }

            .card-header h1 {
                font-size: 1.3rem;
            }

            .card-body {
                padding: 22px;
            }

            .input-group {
                height: 48px;
            }
        }
    </style>


{{-- ----------------------------------------------------------------------------------------------------- --}}
<div class="certificate-card">
    <div class="card-header">
        <h4>Masukkan NIK & Download Sertifikat</h4>
    </div>
    <div class="card-body">
        <div class="example-box">
            <span class="example-text">Contoh: 3201XXXXXXXXXXXX</span>
        </div>

        <div class="form-group" style="display: flex; flex-direction: column; gap: 12px; max-width: 400px;">
            <input type="text" id="nikInput" class="nik-input" placeholder="Masukkan NIK Anda"
                   style="padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 14px; width: 100%;">
            <button id="cekButton" class="check-button"
                    style="padding: 12px; background-color: #4ADE80; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Cek Sertifikat
            </button>
        </div>
    </div>

    <!-- Hasil Pencarian -->
    <div id="resultSection" style="margin-top: 20px;"></div>
</div>

<!-- Template untuk hasil pencarian -->
<div id="certificateTemplate" style="display: none;">
    <div class="result-container" style="overflow-x: auto; margin-top: 20px;">
    <table class="result-table" style="min-width: 700px; border-collapse: collapse;">

    {{-- <div class="result-container">
        <table class="result-table" style="width: 100%; border-collapse: collapse; margin-top: 20px;"> --}}
            <thead>
                <tr style="background-color: #f3f4f6;">
                    <th style="padding: 12px; border: 1px solid #d1d5db;">No</th>
                    <th style="padding: 12px; border: 1px solid #d1d5db;">Nama Peserta</th>
                    <th style="padding: 12px; border: 1px solid #d1d5db;">NIK</th>
                    <th style="padding: 12px; border: 1px solid #d1d5db;">Download</th>
                </tr>
            </thead>
            <tbody id="certificateRows">
                <!-- Diisi oleh JavaScript -->
            </tbody>
        </table>
    </div>
</div>

<script>
document.getElementById("cekButton").addEventListener("click", function () {
    const nik = document.getElementById("nikInput").value.trim();
    const resultSection = document.getElementById("resultSection");

    if (!nik) {
        resultSection.innerHTML = `
            <div class="alert alert-danger" style="padding: 12px; background-color: #fee2e2; color: #b91c1c; border-radius: 8px;">
                Mohon masukkan NIK terlebih dahulu!
            </div>
        `;
        return;
    }

    resultSection.innerHTML = `
        <div style="text-align: center; padding: 20px;">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p>Sedang mencari sertifikat...</p>
        </div>
    `;

    fetch("{{ route('cari.sertifikat') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({ nik: nik })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const template = document.getElementById("certificateTemplate").cloneNode(true);
            template.style.display = "block";
            const tbody = template.querySelector("#certificateRows");
            tbody.innerHTML = "";

            data.data.forEach((item, index) => {
                const row = document.createElement("tr");

                const startDate = new Date(item.agendapelatihan.tanggal_pelatihan_start);
                const endDate = new Date(item.agendapelatihan.tanggal_pelatihan_end);
                const formattedDate = `
                    ${startDate.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })} s/d
                    ${endDate.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })}
                `;

                const maskedNik = item.nik.substring(0, 4) + "XXXXXXXXXXXX";

                row.innerHTML = `
                    <td style="padding: 12px; border: 1px solid #d1d5db;">${index + 1}</td>
                    <td style="padding: 12px; border: 1px solid #d1d5db;">${item.namalengkap}</td>
                    <td style="padding: 12px; border: 1px solid #d1d5db;">${item.nik}</td>
                    <td style="padding: 12px; border: 1px solid #d1d5db;">
                        <a href="/bepesertapuploadsertifikat/show/${item.id}" class="btn-download"
                           style="padding: 8px 12px; background-color: #4ADE80; color: white; text-decoration: none; border-radius: 4px;">
                            Download Sertifikat
                        </a>
                    </td>
                `;
                tbody.appendChild(row);
            });

            resultSection.innerHTML = "";
            resultSection.appendChild(template);
        } else {
            resultSection.innerHTML = `
                <div class="alert alert-info" style="padding: 12px; background-color: #dbeafe; color: #1e40af; border-radius: 8px; text-align: center;">
                    Tidak ditemukan sertifikat untuk NIK: ${nik}
                </div>
            `;
        }
    })
    .catch(error => {
        console.error("Error:", error);
        resultSection.innerHTML = `
            <div class="alert alert-danger" style="padding: 12px; background-color: #fee2e2; color: #b91c1c; border-radius: 8px; text-align: center;">
                Terjadi kesalahan saat memproses permintaan. Silakan coba lagi.
            </div>
        `;
    });
});
</script>


                            </div>
                            </div>
                            </a>



                            </div>
                            </div>
                            </a>


                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
