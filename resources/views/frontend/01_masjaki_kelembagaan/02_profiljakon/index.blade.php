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


{{-- ==================================================== --}}
<style>
    .container-surat {
        width: 80%;
        margin: auto;
        padding: 20px;
        border: 1px solid black;
    }

    /* Styling untuk kop surat */
    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-bottom: 20px;
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


<div class="container-surat">
    <div class="header-surat">
        <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
        <br>
        <div class="header-text">
            <h3>PEMERINTAH KABUPATEN BLORA</h3>
            <h3>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h3>
            <p>Jl. Nusantara No. 62 Telp. (0296) 531004</p>
            <h3>BLORA 58214</h3>
            <p>_____________________________________________________________</p>
            <h3>PROFIL OPD JASA KONSTRUKSI</h3>
            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BLORA</h4>
        </div>
    </div>
    <br>

    <h4>I. IDENTITAS OPD</h4>
    <table>
        @foreach ($dataidentitasopd as $item)

        <tr>
            <td>1.</td>
            <td>Nama OPD</td>
            <td>:</td>
            <td>{{$item->namaopd}}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Alamat OPD</td>
            <td>:</td>
            <td>{{$item->alamatopd}}</td>
        </tr>
        <tr>
            <td></td>
            <td>RT / RW</td>
            <td>:</td>
            <td>{{$item->rtrw}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Kode Pos</td>
            <td>:</td>
            <td>{{$item->kodepos}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Kelurahan</td>
            <td>:</td>
            <td>{{$item->kelurahan}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Kecamatan</td>
            <td>:</td>
            <td>{{$item->kecamatan}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Kota</td>
            <td>:</td>
            <td>{{$item->kota}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Provinsi</td>
            <td>:</td>
            <td>{{$item->provinsi}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Negara</td>
            <td>:</td>
            <td>{{$item->negara}}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Posisi Geografis</td>
            <td>:</td>
            <td>{{$item->posisigeografis}}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Tipe Dinas</td>
            <td>:</td>
            <td>{{$item->tipedinas}}</td>
        </tr>

        @endforeach
    </table>

    <br>

    <h4>II. PROFIL PIMPINAN OPD</h4>

    <h5>KEPALA DINAS</h5>
    <table>
        @foreach ($datakepaladinas as $item)

        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$item->namalengkap}}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>:</td>
            <td>{{$item->nip}}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$item->ttl}}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>:</td>
            <td>{{$item->pangkatgolongan}}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$item->jabatan}}</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>:</td>
            <td>{{$item->perangkatdaerah}}</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>{{$item->pendidikanterakhir}}</td>
        </tr>

        @endforeach
    </table>

    <br>

    <h5>KEPALA BIDANG BANGUNAN GEDUNG</h5>
    <table>

        @foreach ($datakabid as $item)

        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$item->namalengkap}}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>:</td>
            <td>{{$item->nip}}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$item->ttl}}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat / Golongan</td>
            <td>:</td>
            <td>{{$item->pangkatgolongan}}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$item->pangkatgolongan}}</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Perangkat Daerah</td>
            <td>:</td>
            <td>{{$item->perangkatdaerah}}</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>{{$item->pendidikanterakhir}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <h5>SUBKOORDINATOR BINA JASA KONSTRUKSI</h5>
    <table>
        @foreach ($datasubkoordinator as $item)

        <tr>
            <td>1.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{$item->namalengkap}}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIP</td>
            <td>:</td>
            <td>{{$item->nip}}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$item->ttl}}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Pangkat/Golongan</td>
            <td>:</td>
            <td>{{$item->pangkatgolongan}}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jabatan</td>
            <td>:</td>
            <td>{{$item->jabatan}}</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>{{$item->pendidikanterakhir}}</td>
        </tr>
        @endforeach
    </table>
    <br>

    <h4>III. OPD Jakon</h4>
    <table>
        @foreach ($datainformasi as $item)

        <tr>
            <td></td>
            <td>{!!$item->informasiopd!!}</td>
        </tr>
        @endforeach
    </table>
    <br>

    <h4>IV. Kontak OPD</h4>
    <table>
        @foreach ($datainformasi as $item)

        <tr>
            <td>1</td>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td>{{$item->notelepon}}</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Instagram</td>
            <td>:</td>
            <td>@{{$item->instagram}}</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tiktok</td>
            <td>:</td>
            <td>{{$item->tiktok}}</td>
            {{-- <td>'@bangunan.gedung.dpupr'</td> --}}
        </tr>
        <tr>
            <td>3</td>
            <td>Tiktok</td>
            <td>:</td>
            <td>{{$item->email}}</td>
            {{-- <td>'@bangunan.gedung.dpupr'</td> --}}
        </tr>
        @endforeach
    </table>

    <br>
    <h4>V. SK SIPJAKI</h4>
    <table>
        @foreach ($datasipjaki as $item)
        <tr>
            <td></td>
            <td>Nomor</td>
            <td>:</td>
            <td>{{$item->nomor}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Nama Operator SIPJAKI</td>
            <td>:</td>
            <td>{{$item->operator1}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Nama Operator SIPJAKI</td>
            <td>:</td>
            <td>{{$item->operator2}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Nama Operator SIPJAKI</td>
            <td>:</td>
            <td>{{$item->operator3}}</td>
        </tr>
        <tr>
            <td></td>
            <td>Nama Operator SIPJAKI</td>
            <td>:</td>
            <td>{{$item->operator4}}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <h4>VI. SK PERSONIL JABATAN FUNGSIONAL JASA KONSTRUKSI</h4>
    <table>
        @foreach ($datapersonil as $item)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->jabatan}}</td>
            <td>:</td>
            <td>{{$item->namalengkap}}</td>
        </tr>

        @endforeach
    </table>

</div>


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
@foreach ($data as $item)


<div class="portfolio-details-content">
    <div class="portfolio-details-content-title">
        <h4>{{$item->judul}}</h3>
    </div><!-- portfolio-details-content-title -->
    <div class="portfolio-details-content-text">
        <p style="text-align: justify" >
            {{$item->keterangan}}
        </p>
    </div><!-- portfolio-details-content-text -->
</div><!-- portfolio-details-content -->
@endforeach
		</div><!-- container -->
	</section><!-- portfolio-details -->

</div><!--page-wrapper-->

@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
