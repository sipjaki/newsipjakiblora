<style>
    table {
     table-layout: fixed;
     width: 100%;
 }

 td {
     padding: 10px;
     vertical-align: top;
     word-wrap: break-word;
 }

 .isi-berita {
     max-width: 600px;
     word-wrap: break-word;
     white-space: normal;
     overflow-wrap: break-word;
 }

 .btn-hover-white:hover {
  background-color: white !important;
  color: black !important;
  border: 1px solid black;
}

</style>

@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <!--begin::App Main-->
   <main class="app-main">
    <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">

    <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">

            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')
         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <div class="card-header">
                    <div style="
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #00378a, #00378a);
                    color: white;
                    padding: 8px 16px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    transition: all 0.3s ease;
                    cursor: pointer;
                "
                onmouseover="this.style.background='white'; this.style.color='black';"
                onmouseout="this.style.background='linear-gradient(135deg, #00378a, #00378a)'; this.style.color='white';">
                    ⚙️ Setting Database
                </div>

                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                            onmouseout="this.style.backgroundColor='#00378a'; this.style.color='white'; this.querySelector('svg').style.fill='white';"
                            style="background-color: #00378a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                            <!-- Ikon Database SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 24 24" style="margin-right: 8px;">
                                <path d="M12 2C6.48 2 2 3.79 2 6v12c0 2.21 4.48 4 10 4s10-1.79 10-4V6c0-2.21-4.48-4-10-4zm0 2c5.05 0 8 .97 8 2s-2.95 2-8 2-8-.97-8-2 2.95-2 8-2zm0 16c-5.05 0-8-.97-8-2v-1.09c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V18c0 1.03-2.95 2-8 2zm0-4c-5.05 0-8-.97-8-2v-1.09c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V14c0 1.03-2.95 2-8 2zm0-4c-5.05 0-8-.97-8-2V8.91c1.87 1.01 5.03 1.59 8 1.59s6.13-.58 8-1.59V10c0 1.03-2.95 2-8 2z"/>
                            </svg>
                            Status Penyedia
                        </button>
                    </a>
                </div>

                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')


                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
                            <label for="entries" style="font-weight: 600; font-size: 14px;">Tampilkan data : </label>
                            <select id="entries" onchange="updateEntries()" style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; font-size: 14px; cursor: pointer;">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                            </select>
                        </div>

                        <div style="position: relative; display: inline-block; margin-right:10px;">
                            <input type="search" id="searchInput" placeholder="Cari Paket Pekerjaan ...." onkeyup="searchTable()" style="border: 1px solid #ccc; padding: 10px 20px; font-size: 14px; border-radius: 10px; width: 300px;">
                            <i class="fas fa-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
                        </div>
                        <script>
                            function updateEntries() {
                                let selectedValue = document.getElementById("entries").value;
                                let url = new URL(window.location.href);
                                url.searchParams.set("perPage", selectedValue);
                                window.location.href = url.toString();
                            }

                            function searchTable() {
                            let input = document.getElementById("searchInput").value;

                            fetch(`/betertibjakonusaha?search=${encodeURIComponent(input)}`, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                document.querySelector("#tableBody").innerHTML = data.html;
                            })
                            .catch(error => console.error("Error fetching search results:", error));
                        }

                                </script>



                         <button onclick="exportTableToExcel('tabeltertibjakonusaha', 'Data_TertibJakonUsaha')"
                         onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                         onmouseout="this.style.backgroundColor='#bb5215'; this.style.color='white';"
                         style="background-color: #bb5215; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;"
                         >
                         <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                         </button>

                         <a href="/bebujkkonsultan/create">
                             <button
                             onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                             onmouseout="this.style.backgroundColor='#007bff'; this.style.color='white';"
                             style="background-color: #007bff; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                             <!-- Ikon Kembali -->
                             <i class="fa fa-plus" style="margin-right: 8px;"></i>
                             Create
                         </button>
                         </a>
                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">

                    <div class="table-responsive" style="width: 100%; overflow-x: auto;">
                        <table id="tabeltertibjakonusaha" class="zebra-table table-bordered table-striped" style="white-space: nowrap;">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="text-align: center; width:75px;">
                                        <i class="bi bi-list-ol"></i> No
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:200px;">
                                        <i class="bi bi-people-fill"></i> Penyedia
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:200px;">
                                        <i class="bi bi-building"></i> NIB
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:500px;">
                                        <i class="bi bi-geo-alt-fill"></i> Nama Pekerjaan
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:200px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-calendar-event"></i> Tahun Pelaksanaan
                                    </th>
                                    <th rowspan="2" style="text-align: center; width:400px;">
                                        <i class="bi bi-building-fill"></i> Badan Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:400px;">
                                        <i class="bi bi-building-fill"></i> PJBU
                                    </th>

                                    <th colspan="4" style="text-align: center; width:800px;">
                                        <i class="bi bi-person-lines-fill"></i> Kesesuaian Kegiatan Konstruksi
                                    </th>
                                    <th colspan="2" style="text-align: center; width:450px;">
                                        <i class="bi bi-pie-chart-fill"></i> Segmentasi Pasar
                                    </th>

                                    <th colspan="2" style="text-align: center; width:400px;">
                                        <i class="bi bi-graph-up-arrow"></i> Pemenuhan Syarat
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-gear-fill"></i> Pelaksanaan Pengembangan Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:200px;">
                                        <i class="bi bi-tools"></i> Aksi
                                    </th>


                                </tr>
                                <tr>
                                    <!-- PJBU Subkolom -->
                                    <th style="text-align: center;">
                                        <i class="bi bi-check-circle"></i> Sesuai Jenis
                                    </th>
                                    <th style="text-align: center;">
                                        <i class="bi bi-check-circle"></i> Sesuai Sifat
                                    </th>
                                    <th style="text-align: center;">
                                        <i class="bi bi-check-circle"></i> Sesuai Klasifikasi
                                    </th>
                                    <th style="text-align: center;">
                                        <i class="bi bi-check-circle"></i> Sesuai Layanan
                                    </th>

                                    <!-- Segmentasi Pasar -->
                                    <th style="text-align: center;">
                                        <i class="bi bi-diagram-3-fill"></i> Sesuai Bentuk
                                    </th>
                                    <th style="text-align: center;">
                                        <i class="bi bi-bar-chart-line-fill"></i> Sesuai Kualifikasi
                                    </th>

                                    <!-- Pengembangan Usaha -->
                                    <th style="text-align: center;">
                                        <i class="bi bi-file-earmark-check-fill"></i> Syarat SBU
                                    </th>
                                    <th style="text-align: center;">
                                        <i class="bi bi-file-earmark-check-fill"></i> Syarat NIB
                                    </th>
                                </tr>
                            </thead>

                          <tbody>
                            @foreach ($data as $item)
                            <tr>
                              <td style="text-align: center;">{{ $loop->iteration }}</td>
                              <td>
                                @if($item->penyediastatustertibjakon->penyedia)
                                  {{ $item->penyediastatustertibjakon->penyedia }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: left;">
                                @if($item->nib)
                                  {{ $item->nib }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: left;">
                                @if($item->namapekerjaan)
                                  {{ $item->namapekerjaan }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: center;">
                                @if($item->tahunpelaksanaan)
                                  {{ $item->tahunpelaksanaan }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: left;">
                                @if($item->namabadanusaha)
                                  {{ $item->namabadanusaha }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: left; text-transform: uppercase;">
                                @if($item->pjbu)
                                  {{ $item->pjbu }}
                                @else
                                  <button style="background-color: #000080; color: white; font-size: 14px; padding: 6px 10px; border-radius: 4px; border: 1px solid #000080; cursor: pointer; text-transform: uppercase;"
                                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                          onmouseout="this.style.backgroundColor='#000080'; this.style.color='white';">
                                    Data Belum Di Update
                                  </button>
                                @endif
                              </td>

                              <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->sesuai_jenis == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->sesuai_jenis == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->sesuai_jenis == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->sesuai_jenis }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->sesuai_sifat == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->sesuai_sifat == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->sesuai_sifat == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->sesuai_sifat }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->sesuai_klasifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->sesuai_klasifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->sesuai_klasifikasi == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->sesuai_klasifikasi }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->sesuai_layanan == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->sesuai_layanan == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->sesuai_layanan == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->sesuai_layanan }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->segmentasipasar_bentuk == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->segmentasipasar_bentuk == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->segmentasipasar_bentuk == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->segmentasipasar_bentuk }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->segmentasipasar_kualifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->segmentasipasar_kualifikasi == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->segmentasipasar_kualifikasi == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->segmentasipasar_kualifikasi }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->syarat_SBU == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->syarat_SBU == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->syarat_SBU == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->syarat_SBU }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->syarat_NIB == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->syarat_NIB == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->syarat_NIB == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->syarat_NIB }}
                                </button>
                            </td>

                            <td style="text-align: center;">
                                <button style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $item->pelaksanaanpengembangan == 'BELUM TERTIB' ? 'red' : 'blue' }};" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='{{ $item->pelaksanaanpengembangan == 'BELUM TERTIB' ? 'red' : 'blue' }}'; this.style.color='white';">
                                    <i class="bi {{ $item->pelaksanaanpengembangan == 'BELUM TERTIB' ? 'bi-x-circle' : 'bi-check-circle' }}" style="margin-right: 8px;"></i>
                                    {{ $item->pelaksanaanpengembangan }}
                                </button>
                            </td>

                              <td style="text-align: center;">
                                <!-- Tombol Aksi -->
                                {{-- <a href="/bebujkkonsultan/show/{{$item->namalengkap}}" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a> --}}
                                <a href="/betertibjakonusaha/update/{{$item->id}}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-judul="{{ $item->id }}" onclick="setDeleteUrl(this)">
                                  <i class="bi bi-trash"></i>
                                </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                 @include('backend.00_administrator.00_baganterpisah.07_paginations')

                 <br><br>

                <!-- Modal Konfirmasi Hapus -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda Ingin Menghapus Data ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form id="deleteForm" method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                function setDeleteUrl(button) {
                    var id = button.getAttribute('data-judul');
                    var deleteUrl = "/betertibjakonusaha/delete/" + encodeURIComponent(id);
                    document.getElementById('deleteForm').action = deleteUrl;
                }
                </script>
                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

             </div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
     </div>
     <!--end::Row-->
     </div>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
        </section>
    </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        const table = document.getElementById(tableID);
        const worksheet = XLSX.utils.table_to_sheet(table);

        // Tentukan kolom yang berisi NIB (misalnya kolom ketiga)
        const nibColumnIndex = 2; // Indeks dimulai dari 0

        // Iterasi melalui setiap baris dan kolom untuk mengatur format teks
        const range = XLSX.utils.decode_range(worksheet['!ref']);
        for (let R = range.s.r; R <= range.e.r; ++R) {
            const cell_address = { c: nibColumnIndex, r: R };
            const cell_ref = XLSX.utils.encode_cell(cell_address);
            if (!worksheet[cell_ref]) continue;
            if (!worksheet[cell_ref].s) worksheet[cell_ref].s = {};

            // Set format teks
            worksheet[cell_ref].s.numFmt = '@';
        }

        // Tambahkan border ke setiap cell
        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_address = { c: C, r: R };
                const cell_ref = XLSX.utils.encode_cell(cell_address);
                if (!worksheet[cell_ref]) continue;
                if (!worksheet[cell_ref].s) worksheet[cell_ref].s = {};

                // Tambah style border
                worksheet[cell_ref].s.border = {
                    top: { style: "thin", color: { auto: 1 } },
                    right: { style: "thin", color: { auto: 1 } },
                    bottom: { style: "thin", color: { auto: 1 } },
                    left: { style: "thin", color: { auto: 1 } }
                };

                // Tambah alignment
                worksheet[cell_ref].s.alignment = {
                    vertical: "center",
                    horizontal: "center",
                    wrapText: true
                };
            }
        }

        // Workbook dan export
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Data");

        // Gunakan xlsx-style untuk menyimpan dengan style
        XLSX.writeFile(workbook, filename + ".xlsx", { bookType: "xlsx", type: "binary" });
    }
</script>

