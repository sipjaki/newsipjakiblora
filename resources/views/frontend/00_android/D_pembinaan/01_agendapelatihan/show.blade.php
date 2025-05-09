<style>
    .btn-navy {
        background-color: navy;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }


    /* Styling untuk tabel */
    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .custom-fl-table th, .custom-fl-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .custom-fl-table th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    .custom-fl-table td {
        background-color: #f9f9f9;
    }

    /* Styling untuk baris yang tidak memiliki materi */
    .no-materi-message {
        color: red;
        font-weight: bold;
        text-align: center;
        background-color: #ffcccc;
        display: block;
        margin: 10px 0;
        padding: 5px;
    }

    /* Styling untuk pesan 'MATERI BELUM DI UPLOAD' di luar tabel */
    .no-data-message {
        color: red;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
    }


    .header-surat {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;

}

.header-text {
    margin: 0 auto;
}

.header-text h3, .header-text h4, .header-text p {
    margin: 5px 0; /* Memberikan jarak antar elemen */
}

.table-identitas {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-identitas td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-identitas .label {
    font-weight: bold;
}

.table-identitas .colon {
    text-align: center;
    font-weight: bold;
}

.table-identitas tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-identitas tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-identitas td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

.table-profil {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}

.table-profil td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-profil .label {
    font-weight: bold;
    width: 25%; /* Menjaga label agar tidak terlalu melebar */
}

.table-profil .colon {
    text-align: center;
    font-weight: bold;
    width: 10%;
}

.table-profil tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-profil tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-profil td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}



</style>
@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        {{-- <img src="assets/images/icons/back.svg" alt="icon"> --}}
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">{{$title}}</p>
                    {{-- <p class="font-semibold text-sm text-white">#WeNeedHelp</p> --}}
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    {{-- <img src="assets/images/icons/like.svg" alt="icon"> --}}
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/00_android/iconmenu/menuutama2.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container-surat">
                    <div>
                        <a href="/resdaftarpelatihanpeserta/create/{{$data->id}}">
                            <button
                            class="btn-navy"
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('i').style.color='black'; this.style.border='1px solid navy';"
                            onmouseout="this.style.backgroundColor='navy'; this.style.color='white'; this.querySelector('i').style.color='white'; this.style.border='none';"
                            onclick="window.location.href='your-link-here.html'"
                            >
                            <i class="bi bi-person-fill" style="color: white;"></i>
                            Daftar Pelatihan
                        </button>
                    </a>
                    </div>
                    <div class="header-surat">
                        <div class="header-text">
                            <h3>AGENDA PELATIHAN TKK</h3>
                            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH</h4>
                            <p>--------------------------------------------</p>
                        </div>
                    </div>

             <!-- Container agar elemen di tengah secara horizontal tanpa jarak atas-bawah -->
             <div class="flex justify-center">
                <div class="rounded-lg shadow-lg overflow-hidden w-fit">
                    <div style="margin-top: 10px;">
                        @if($data->foto && file_exists(public_path('storage/' . $data->foto)))
                            <img src="{{ asset('storage/' . $data->foto) }}" alt="Gambar Peraturan"
                                 style="width: 100%; max-height: 500px; object-fit: contain; border-radius: 20px;" loading="lazy">
                        @elseif($data->foto)
                            <img src="{{ asset($data->foto) }}" alt="Gambar Peraturan"
                                 style="width: 100%; max-height: 500px; object-fit: contain; border-radius: 20px;" loading="lazy">
                        @else
                            <p>Data belum diupdate</p>
                        @endif
                    </div>
                </div>
            </div>

                    <br>
                    <h4 style="font-weight:bold;">I. INFORMASI AGENDA PELATIHAN </h4>
                    <table class="table-identitas">
                        {{-- @foreach ($data as $item) --}}
                        <tr>
                            <td class="label">1</td>
                            <td class="label">Nama Kegiatan</td>
                            <td class="colon">:</td>
                            <td>{{$data->namakegiatan}}</td>
                        </tr>
                        <tr>
                            <td class="label">2</td>
                            <td class="label">Kategori</td>
                            <td class="colon">:</td>
                            <td>{{$data->kategoripelatihan->kategoripelatihan}}</td>
                        </tr>
                        <tr>
                            <td class="label">3</td>
                            <td class="label">Waktu Pelaksanaan</td>
                            <td class="colon">:</td>
                            <td>{{ \Carbon\Carbon::parse($data->waktupelaksanaan)->translatedFormat('l, d F Y') }}</td>
                        </tr>
                        <tr>
                            <td class="label">4</td>
                            <td class="label">Penyelenggara</td>
                            <td class="colon">:</td>
                            <td>{{$data->asosiasimasjaki->namaasosiasi ?? '-'}}</td>
                        </tr>
                        <tr>
                            <td class="label">5</td>
                            <td class="label">Lokasi</td>
                            <td class="colon">:</td>
                            <td>{{$data->lokasi}}</td>
                        </tr>
                        <tr>
                            <td class="label">6</td>
                            <td class="label">Jumlah Peserta</td>
                            <td class="colon">:</td>
                            <td>{{$data->jumlahpeserta}}</td>
                        </tr>
                    </table>
                            <br>
                    <div class="portfolio-details-content">
                        <div class="flex flex-col gap-[2px]">
                            <h2 class="font-semibold" style="font-size: 16px;">Isi Agenda: </h2>
                            <p class="desc-less text-sm leading-[26px]" style="text-align: justify; font-size:16px;">{!!$data->isiagenda!!}</p>
                        </div>
                        <br>

                        <div class="flex flex-col gap-[2px]">
                            <h2 class="font-semibold text-sm" style="font-size: 16px;">Keterangan : </h2>
                            <p class="desc-less text-sm leading-[26px]" style="text-align: justify; font-size:16px;">{!!$data->keterangan!!}</p>
                        </div>

                    </div><!-- portfolio-details-content -->

                    {{-- @endforeach --}}

                    <br>

                    <h4 style="font-weight:bold;">II. DOWNLOAD MATERI PELATIHAN</h4>
                    <div style="margin: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                        <table class="custom-fl-table" id="sortableTable">
                            <thead>
                                <tr>
                                    <th onclick="sortTable(0)" style="cursor:pointer; width:100px;"> No </th>
                                    <th onclick="sortTable(1)" style="cursor:pointer; width:500px;"> Judul </th>
                                    <th onclick="sortTable(2)" style="cursor:pointer; width:800px;"> Materi </th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @php
                                    $start = ($datamateripelatihan->currentPage() - 1) * $datamateripelatihan->perPage() + 1;
                                    $materiFound = false; // Variabel untuk mengecek apakah ada materi
                                    $dataAvailable = false; // Variabel untuk mengecek apakah ada data
                                @endphp

                                @foreach ($datamateripelatihan as $item)
                                <tr>
                                    <td style="text-align: center;">{{ $loop->iteration + $start - 1 }}</td>
                                    <td style="text-transform: capitalize;">{{ ucwords(strtolower($item->judulmateripelatihan)) }}</td>
                                    <td>
                                        <!-- Menambahkan pengecekan apakah data materi pelatihan kosong -->
                                        <script>
                                            // Cek apakah file materi pelatihan ada
                                            const fileUrl = "{{ asset('storage/' . $item->materipelatihan) }}";
                                            const isFileAvailable = fileUrl && fileUrl !== '{{ asset('storage/') }}'; // Cek jika URL file valid atau kosong

                                            if (!isFileAvailable) {
                                                // Jika file tidak ada, tampilkan tombol merah dengan tulisan "Materi Belum Di Upload"
                                                document.write(`
                                                    <button class="badge"
                                                            style="background-color: red; color: white; border: none; padding:10px 20px; font-size: 13px; border-radius:5px;">
                                                        Materi Belum Di Upload
                                                    </button>
                                                `);
                                            } else {
                                                // Jika file ada, tampilkan tombol download
                                                document.write(`
                                                    <button id="sertifikat-btn" class="badge"
                                                            style="background-color: navy; color: white; border: none; transition: 0.3s; padding:10px 20px; font-size: 13px; border-radius:5px;"
                                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='1px solid black';"
                                                            onmouseout="this.style.backgroundColor='navy'; this.style.color='white'; this.style.border='none';">
                                                        <i class="fas fa-download" style="margin-right:5px;"></i> Download .pdf
                                                    </button>
                                                `);
                                                document.getElementById('sertifikat-btn').addEventListener('click', function() {
                                                    const a = document.createElement('a');
                                                    a.href = fileUrl;
                                                    a.download = ''; // Nama file tidak perlu diisi, karena browser akan menggunakan nama dari URL
                                                    document.body.appendChild(a);
                                                    a.click();
                                                    document.body.removeChild(a);
                                                });
                                            }
                                        </script>
                                    </td>

                                </tr>
                                @php $dataAvailable = true; @endphp <!-- Set variabel jadi true jika ada data -->
                                @endforeach

                            </tbody>
                        </table>

                        <!-- Jika tidak ada data sama sekali, tampilkan pesan di luar tabel -->
                        @if(!$dataAvailable)
                            <p class="no-data-message">MATERI BELUM DI UPLOAD</p>
                        @endif
                    </div>

                    <br>
                    </div>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
