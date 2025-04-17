
<style>
    /* file: resources/css/custom.css atau langsung di style tag */
.full-width-container {
  max-width: 80% !important;
  width: 80%;
  margin-top: 10px;
}

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.zebra-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.zebra-table th,
.zebra-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.zebra-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }

        body {
          font-family: 'Poppins', sans-serif;
        }


        .btn-navy {
        background-color: #001f3f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        cursor: default;
        transition: all 0.3s ease;
    }

    .btn-navy:hover {
        background-color: white;
        color: black;
        border: 1px solid #001f3f;
    }

</style>

@include('frontend.00_approve.01_cssterpisah.header')

<body>
    {{-- @include('frontend.00_approve.01_cssterpisah.loader')
    @include('frontend.00_approve.01_cssterpisah.header1') --}}

    <div class="page-wrapper">
        {{-- <section class="page-banner">
            <div class="container">
                <div class="page-banner-title">
                    <h3 style="color: black; font-size:30px;">{{$title}}</h3>
                </div>
            </div>
        </section> --}}

        <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
            <div class="container" style="margin-top:-50px;" style="max-width: 95%; margin: 30px auto; padding: 20px; border-radius: 20px; box-shadow: 0px 4px 10px rgba(14, 112, 1, 0.1);">
                <div class="row">

                    <div class="col-lg-12" style="background: #f3f2ed; border-radius:15px;">
                        <div style="display: flex; gap: 20px; margin-top: 20px;">
                            <!-- Tombol Tutup dengan warna hijau -->
                            <button onclick="window.history.back()"
                                    style="padding: 10px 40px; width: 200px; height: 60px; font-size: 16px;
                                           background-color: black; color: white; border: none; border-radius: 10px;
                                           cursor: pointer; transition: 0.3s;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='black'; this.style.color='white';">
                                ❌ Tutup
                            </button>

                            <!-- Tombol Download Berkas -->
                            {{-- <button style="padding: 15px 40px; width: 150px; height: 60px; font-size: 16px;
                                          background-color: navy; color: white; border: none; border-radius: 10px;
                                          cursor: pointer; transition: 0.3s;"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                <i class="fas fa-download" style="margin-right: 10px;"></i> Download
                            </button> --}}
                        </div>
                               <br>
                            <h4>Analisa Harga Satuan Pekerjaan</h4>
                    <hr>
                    <h4 style="font-family: 'Poppins', sans-serif;">
                        Kode AHSP :
                        {{ optional($data->hspdivisi)->id }}.
                        {{ optional($data->hsppaket)->id }}.
                        {{ optional($data->hspkodepekerjaan)->kodepekerjaan }}.
                        {{$data->kode}}
                    </h4>
                    <hr>

                    <h4 style="font-family: 'Poppins', sans-serif;">
                        Jenis Pekerjaan :
                        {{$data->jenispekerjaan}}
                    </h4>
                    <hr>

                        <div class="table-responsive">
                            <table class="zebra-table table-bordered table-striped">
                                <thead style="background-color: #0bb928; color: white;">
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Uraian</th>
                                        <th style="text-align: center;">Kode</th>
                                        <th style="text-align: center;">Satuan</th>
                                        <th style="text-align: center;">Koefisien</th>
                                        <th style="text-align: center;">Harga Satuan (Rp)</th>
                                        <th style="text-align: center;">Jumlah Harga (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td style="text-align: center;">A</td><td style="text-align: center;" >Tenaga Kerja</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    @foreach ($datatenagakerja as $item)

                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td>{{$item->uraian}}</td>
                                        <td style="text-align: center;">{{$item->kode}}</td>
                                        <td style="text-align: center;">{{$item->satuan}}</td>
                                        <td style="text-align: center;">{{$item->koefisien}}</td>
                                        <td class="text-end">{{ number_format($item->hargasatuan, 2, ',', '.') }}</td>
                                        <td class="text-end">{{ number_format($item->jumlah_pagu, 2, ',', '.') }}</td>
                                    </tr>

                                    @endforeach

                                        <tr>
                                            <td colspan="6" class="text-end"><strong>Jumlah Harga Tenaga Kerja</strong></td>
                                            <td class="text-end"><strong>{{ number_format($totaltenagakerja, 2, ',', '.') }}</strong></td>
                                        </tr>


                                    <tr><td style="text-align: center;">B</td><td style="text-align: center;">Bahan</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    <hr>

                                    @foreach ($databahanmaterial as $item)

                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td>{{$item->uraian}}</td>
                                        <td style="text-align: center;">{{$item->kode}}</td>
                                        <td style="text-align: center;">{{$item->satuan}}</td>
                                        <td style="text-align: center;">{{$item->koefisien}}</td>
                                        <td class="text-end">{{ number_format($item->hargasatuan, 2, ',', '.') }}</td>
                                        <td class="text-end">{{ number_format($item->jumlah_pagu, 2, ',', '.') }}</td>
                                    </tr>

                                    @endforeach

                                    <tr>
                                        <td colspan="6" class="text-end"><strong>Jumlah Harga Bahan</strong></td>
                                        <td class="text-end"><strong>{{ number_format($totalbahanmaterial, 2, ',', '.') }}</strong></td>
                                    </tr>

                                    <tr><td style="text-align: center;">C</td><td style="text-align: center;">Peralatan</td><td></td><td></td><td></td><td></td><td></td></tr>

                                    @foreach ($dataperalatan as $item)

                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td>{{$item->uraian}}</td>
                                        <td style="text-align: center;">{{$item->kode}}</td>
                                        <td style="text-align: center;">{{$item->satuan}}</td>
                                        <td style="text-align: center;">{{$item->koefisien}}</td>
                                        <td class="text-end">{{ number_format($item->hargasatuan, 2, ',', '.') }}</td>
                                        <td class="text-end">{{ number_format($item->jumlah_pagu, 2, ',', '.') }}</td>
                                    </tr>

                                    @endforeach

                                    <tr>
                                        <td colspan="6" class="text-end"><strong>Jumlah Harga Peralatan</strong></td>
                                        <td class="text-end"><strong>{{ number_format($totalperalatan, 2, ',', '.') }}</strong></td>
                                    </tr>


                                    <tr>
                                        <td style="text-align: center;">D</td>
                                        <td colspan="5" class="text-end">Jumlah Harga Tenaga Kerja, Bahan dan Peralatan (A+B+C)</td>
                                        <td class="text-end"><strong style="color:blue;">{{ number_format($totalabc, 2, ',', '.') }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">E</td>
                                        <td colspan="5" class="text-end">Biaya Umum dan Keuntungan (10%)</td>
                                        <td class="text-end"><strong style="color:orange;">{{ number_format($totalpersen, 2, ',', '.') }}</strong></td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: center;">F</td>
                                        <td colspan="5" class="text-end"><strong>Harga Satuan Pekerjaan (D+E)</strong></td>
                                        <td class="text-end"><strong style="color:red;">{{ number_format($totalkeuntungan, 2, ',', '.') }}</strong></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- @include('frontend.00_approve.01_cssterpisah.footer1') --}}
    {{-- @include('frontend.00_approve.01_cssterpisah.footer') --}}


@include('frontend.00_approve.01_cssterpisah.footer2')
