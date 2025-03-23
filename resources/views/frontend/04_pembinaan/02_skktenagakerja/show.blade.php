<style>
.badgekembali {
                background: linear-gradient(to right, navy, navy);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }

    </style>

@include('frontend.00_approve.01_cssterpisah.header')

<body>

    @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1')

    <div class="page-wrapper">
	<section class="page-banner" style="background-image: url('/assets/approve/image/bg/page-banner.png')">
		<div class="container">
			<div class="page-banner-title" style="border: none;">
				<h3 style="color: black; font-size:30px; ">{{$title}}</h3>
			</div><!-- page-banner-title -->
		</div><!-- container -->
	</section><!--page-banner-->
	<section class="portfolio-details">
		<div class="container">

<style>
    .halaman-pertama {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    .halaman-kedua {
        width: 80%;
        margin: auto;
        padding: 20px;
        /* border: 1px solid black; */
    }

    /* Styling untuk kop surat */
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
        margin-top:-50px;
    }

    .header-surat img {
        width: 100px; /* Perbesar sedikit agar lebih proporsional */
        height: 100px;
        margin-right: 50px; /* Jarak antara logo dan teks */
        margin-bottom: 100px; /* Jarak antara logo dan teks */
    }

    .header-surat-text {
        flex: 1; /* Supaya teks mengisi sisa ruang */
    }

    .header-surat h3, .header-surat h4, .header-surat p {
        margin: 2px 0; /* Supaya tidak ada jarak berlebihan */
        font-size: 20px; /* Sesuaikan ukuran font */
    }

    .header-surat h4 {
        font-size: 14px;
        font-weight: normal;
    }

    /* Tambahkan font Poppins ke seluruh halaman */
    .container-surat {
        font-family: 'times new roman', sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        font-size: 20px; /* Sesuaikan ukuran teks */
    }

    th {
        background-color: #ddd;
        font-weight: 600; /* Lebih tebal agar judul tabel lebih jelas */
    }
</style>


<div class="halaman-pertama">
    <div class="header-surat" style="display: flex; align-items: center; justify-content: center;">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora" style="width: 110px; height: auto; margin-right: 100px; margin-top:50px;">

        <div class="header-text" style="text-align: center;" style="margin-right: 400px;">
            <h3 style="margin: 2px 0;">PEMERINTAH KABUPATEN BLORA</h3>
            <h3 style="margin: 2px 0;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
            <p style="margin: 2px 0;">Jl. Nusantara No. 62 Telp. (0296) 531004</p>
            <h3 style="margin: 2px 0;">KABUPATEN BLORA 58214 PROVINSI JAWA TENGAH</h3>
        </div>
        <p></p>
    </div>

    <div style="margin-top:-80px;">
        <hr style="border: 4px solid black; width: 100%;">
        <h5 style="text-align: center;">DATA PESERTA SKK TENAGA KONSTRUKSI</h5>
        <h5 style="text-align: center;">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h5>
    </div>

    <br>

    <h5>I. IDENTITAS PESERTA</h4>
    <table>

        <tr>
            <td style="width:50px; text-align:center;">1</td>
            <td style="width:200px; text-align:center;">Nama Lengkap</td>
            <td style="width:50px; text-align:center;">:</td>
            <td style="width:200px; text-align:center;">{{ ucwords(strtolower($data->user->name)) }}</td>
            <td style="width:400px; text-align:center;">
                <img src="/assets/00_dokmasjaki/03_datajakon/jabatan.png" alt="" width="200px;">
            </td>
        </tr>

    </table>

    <table>

        <tr>
            <td style="text-align: center;">2</td>
            <td>Jabatan Kerja </td>
            <td style="text-align: center;">:</td>
            <td>{{$data->jabatankerja}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">3</td>
            <td>Tempat Lahir </td>
            <td style="text-align: center;">:</td>
            <td>{{$data->tempatlahir}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">4</td>
            <td>Jenis Kelamin </td>
            <td style="text-align: center;">:</td>
            <td>{{$data->jeniskelamin}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">5</td>
            <td>KTP/KITAS</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->nik}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">6</td>
            <td>Alamat</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->alamat}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">7</td>
            <td>Telepon</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->notelepon}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">8</td>
            <td>Email</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->email}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">9</td>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td>{{$data->jenjangpendidikan->jenjangpendidikan}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">10</td>
            <td>Sekolah/Universitas</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->namasekolah->namasekolah}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">11</td>
            <td>Tahun Lulus</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->tahunlulus}}</td>
        </tr>

        <tr>
            <td style="text-align: center;">12</td>
            <td>Tahun Bimtek</td>
            <td style="text-align: center;">:</td>
            <td>{{$data->tahunpilihan->tahunpilihan}}</td>
        </tr>

    </table>

    <br>

    <h5>II. KELENGKAPAN BERKAS PERSYARATAN PESERTA</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table>
        <tr>
            <td style="text-align: center;">KTP/KITAS*</td>
            <td style="text-align: center;">Foto</td>
            <td style="text-align: center;">Ijazah</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->uploadktp)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadfoto)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadijazah)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>

        </tr>

        <tr>
            <td style="text-align: center;">Pengalaman Kerja</td>
            <td style="text-align: center;">NPWP</td>
            <td style="text-align: center;">Daftar Riwayat Hidup</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->uploadpengalaman)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploadnpwp)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->uploaddaftarriwayathidup)
                    <button class="badge-kembali" style="text-align: center;">LENGKAP</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">BELUM</button>
                @endif
            </td>

        </tr>

    </table>
<br>

</div>


<div class="halaman-kedua">

    <h5>III. NAMA ASOSIASI DAN KESEDIAAN MENGIKUTI BIMBINGAN TEKNIS</h4>
    {{-- <h5>KEPALA DINAS</h5> --}}
    <table>
        <tr>
            <td style="text-align: center;">Nama Asosiasi</td>
            <td style="text-align: center;">{{$data->namaasosiasi}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="text-align: center;">MEMPUNYAI SKK ?</td>
            <td style="text-align: center;">MEMPUNYAI AKUN SIKI/ E-SIMPAN ?</td>
            <td style="text-align: center;">BERSEDIA MEMATUHI PERATURAN</td>
        </tr>
        <tr>
            <td style="text-align: center;">
                @if($data->punyaskk)
                    <button class="badge-kembali" style="text-align: center;">PUNYA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK PUNYA</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->punyasiki)
                    <button class="badge-kembali" style="text-align: center;">YA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK</button>
                @endif
            </td>
            <td style="text-align: center;">
                @if($data->siappatuh)
                    <button class="badge-kembali" style="text-align: center;">BERSEDIA</button>
                @else
                    <button class="btn btn-secondary" disabled style="text-align: center;">TIDAK BERSEDIA</button>
                @endif
            </td>

        </tr>

    </table>

    <br>

    <style>

        .borderbaru, .borderbaru tr, .borderbaru td {
    border: none !important;
}

    </style>

<table class="borderbaru" style="border-collapse: collapse; border: none;">

        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;">DI TETAPKAN DI KABUPATEN BLORA</td>
        </tr>

        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;">PADA TANGGAL _____________</td>
        </tr>
        <br>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;">DINAS PEKERJAAN UMUM DAN PENAATAAN RUANG <br> SUB KOORDINATOR BIDANG BANGUNAN GEDUNG </td>
        </tr>

        <br><br>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
        <tr>
            <td style="width: 45%;"></td>
            <td style="width: 55%;"></td>
        </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%; border-bottom: 2px solid black; text-align: center;">
                    ANEX FACHRIAN, S.T., M.T
                </td>
            </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>
            <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>   <tr>
                <td style="width: 45%;"></td>
                <td style="width: 55%;"></td>
            </tr>

    </table>

    </div>

    <div style="display: flex; justify-content: flex-end; padding: 10px;">
        <a href="javascript:history.back()">
            <button class="download-btn" style="margin-right: 10px;">
                <i class="fas fa-arrow-left" style="margin-right:10px;"></i> Kembali
            </button>
        </a>

        <!-- Tombol Download PDF -->
        <button id="downloadPDF" class="download-btn">
            <i class="fas fa-download" style="margin-right:10px;"></i> Download PDF
        </button>
    </div>

    <style>
        .download-btn {
            background-color: #001f3f;
            color: white;
            border: 2px solid #001f3f;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Efek Hover */
        .download-btn:hover {
            background-color: white !important;
            color: #001f3f !important;
            border: 2px solid #001f3f !important;
        }
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script>
    document.getElementById("downloadPDF").addEventListener("click", function () {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF("p", "mm", "a4");

        const margin = 20; // 2 cm margin di semua sisi
        const pdfWidth = 210 - 2 * margin; // Lebar A4 dikurangi margin kiri & kanan
        const pdfHeight = 297 - 1 * margin; // Tinggi A4 dikurangi margin atas & bawah

        const page1 = document.querySelector(".halaman-pertama");
        const page2 = document.querySelector(".halaman-kedua");

        function addPageContent(element, yOffset, addNewPage = false) {
            return new Promise((resolve) => {
                html2canvas(element, { scale: 2, scrollY: -window.scrollY }).then((canvas) => {
                    if (addNewPage) pdf.addPage();
                    const imgData = canvas.toDataURL("image/png");
                    const imgWidth = pdfWidth;
                    const imgHeight = (canvas.height * imgWidth) / canvas.width;
                    pdf.addImage(imgData, "PNG", margin, yOffset, imgWidth, imgHeight);
                    resolve();
                });
            });
        }

        addPageContent(page1, margin).then(() => {
            addPageContent(page2, margin, true).then(() => {
                pdf.save("{{$data->user->name}}");
            });
        });
    });
</script>


{{-- ==================================================== --}}

			{{-- <img src="assets/image/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="img-109"> --}}
            {{-- @foreach ($data as $item )
            <iframe src="{{ asset('storage/' . $item->peraturan) }}" width="100%" height="750" style="border: none;"></iframe>
            @endforeach --}}
			{{-- <div class="portfolio-details-info">
				<div class="portfolio-details-info-item">
					<span>Category:</span>
					<p>Business</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Department:</span>
					<p>Finance and Economy</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Date:</span>
					<p>20 October, 2022</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item">
					<span>Location:</span>
					<p>New York City</p>
				</div><!-- portfolio-details-info-item -->
				<div class="portfolio-details-info-item portfolio-details-info-socials">
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div><!-- portfolio-details-info-socials -->
			</div><!--/.portfolio-details-info--> --}}
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
