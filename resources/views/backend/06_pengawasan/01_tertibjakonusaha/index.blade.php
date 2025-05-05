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
                            <i class="bi bi-search" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); font-size: 16px; color: #888;"></i>
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



                            <button onclick="exportSelectedColumnsToExcel('tabeltertibjakonusaha', 'Data_TertibJakonUsaha')"
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#bb5215'; this.style.color='white';"
                                style="background-color: #bb5215; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <i class="bi bi-download" style="margin-right: 5px"></i> Download Excel
                            </button>

                         <a href="/betertibjakonusaha/create">
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

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-gear-fill"></i> Pemenuhan Syarat
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-gear-fill"></i> Pelaksanaan Pengembangan Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-file-earmark-text-fill"></i> Surat Dukung Kesesuaian Kegiatan Konstruksi
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:325px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-file-earmark-text-fill"></i> Surat Dukung Kesesuaian Jasa Konstruksi & Segmentasi Pasar Jasa Konstruksi
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-file-earmark-text-fill"></i> Surat Dukung Pemenuhan Syarat Usaha
                                    </th>

                                    <th rowspan="2" style="text-align: center; width:250px; white-space: normal; word-wrap: break-word;">
                                        <i class="bi bi-file-earmark-text-fill"></i> Surat Dukung Pelaksanaan Pengembangan Usaha
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

                                </tr>
                            </thead>

                          <tbody>
                            @foreach ($data as $item)
                            <tr>
                              <td style="text-align: center;">{{ $loop->iteration }}</td>
                              <td>
                                @if($item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat')
                                  {{ $item->penyediastatustertibjakon->penyedia ?? 'Data Belum Di Buat' }}
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
{{--
                              @php
                              $kesesuaian = $item->surattertibjakonusaha1->kesesuaian ?? 'Surat Belum Di Buat';
                              $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                              $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
                              $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                          @endphp --}}

                          <td style="text-align: center;">
                              {{ $item->surattertibjakonusaha1->kesesuaian ?? 'Data Belum Di Update' }}
                              {{-- <button
                                  style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                                  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                  onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                              >
                                  <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                              </button> --}}
                          </td>

                          @php
                          $kesesuaian = $item->surattertibjakonusaha1->kesesuaiansbu ?? 'Surat Belum Di Buat';
                          $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                          $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
                          $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                      @endphp

                      <td style="text-align: center;">
                          <button
                              style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                              onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                              onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                          >
                              <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                              {{ $tertibStatus }}
                          </button>
                      </td>


                      @php
                      $kesesuaian = $item->surattertibjakonusaha1->kesesuaianklasifikasi ?? 'Surat Belum Di Buat';
                      $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                      $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
                      $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
                  @endphp

                  <td style="text-align: center;">
                      <button
                          style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                          onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                          onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                      >
                          <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                          {{ $tertibStatus }}
                      </button>
                  </td>


                  @php
                  $kesesuaian = $item->surattertibjakonusaha1->kesesuaianlayananusaha ?? 'Surat Belum Di Buat';
                  $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
                  $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
                  $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
              @endphp

              <td style="text-align: center;">
                  <button
                      style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                      onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                      onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
                  >
                      <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                      {{ $tertibStatus }}
                  </button>
              </td>

              @php
              $kesesuaian = $item->surattertibjakonusaha2->kesesuaiansbu ?? 'Surat Belum Di Buat';
              $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
              $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
              $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
          @endphp

          <td style="text-align: center;">
              <button
                  style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
                  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                  onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
              >
                  <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
                  {{ $tertibStatus }}
              </button>
          </td>

          @php
          $kesesuaian = $item->surattertibjakonusaha2->sbu ?? 'Surat Belum Di Buat';
          $tertibStatus = $kesesuaian === 'Sesuai' ? 'TERTIB' : 'BELUM TERTIB';
          $color = $kesesuaian === 'Sesuai' ? 'blue' : 'red';
          $icon = $kesesuaian === 'Sesuai' ? 'bi-check-circle' : 'bi-x-circle';
      @endphp

      <td style="text-align: center;">
          <button
              style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
              onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
              onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
          >
              <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
              {{ $tertibStatus }}
          </button>
      </td>

      @php
    $kesimpulan = $item->surattertibjakonusaha3->kesimpulan ?? 'Surat Belum Di Buat';
    $tertibStatus = $kesimpulan === 'Tertib' ? 'TERTIB' : 'BELUM TERTIB';
    $color = $kesimpulan === 'Tertib' ? 'blue' : 'red';
    $icon = $kesimpulan === 'Tertib' ? 'bi-check-circle' : 'bi-x-circle';
@endphp

<td style="text-align: center;">
    <button
        style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
    >
        <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
        {{ $tertibStatus }}
    </button>
</td>


@php
    $status = $item->surattertibjakonusaha4->status ?? 'Surat Belum Di Buat';
    $tertibStatus = $status === 'Tertib' ? 'TERTIB' : 'BELUM TERTIB';
    $color = $status === 'Tertib' ? 'blue' : 'red';
    $icon = $status === 'Tertib' ? 'bi-check-circle' : 'bi-x-circle';
@endphp

<td style="text-align: center;">
    <button
        style="padding: 8px 12px; border: none; border-radius: 5px; color: white; font-weight: bold; cursor: pointer; background-color: {{ $color }};"
        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='{{ $color }}'; this.style.color='white';"
    >
        <i class="bi {{ $icon }}" style="margin-right: 8px;"></i>
        {{ $tertibStatus }}
    </button>
</td>

                            {{-- ----------------------- SURAT TERTIB JAKON USAHA 1 ------------------------------------ --}}

                            <td style="text-align: center;">
                                <button class="btn btn-secondary btn-sm"
                                    style="border-radius: 15px; padding: 6px 12px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s; font-size: 0.875rem;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                    data-bs-toggle="modal" data-bs-target="#modalKtp{{ $item->id }}">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <a href="/404"
                                class="btn btn-secondary btn-sm"
                                style="border-radius: 15px; padding: 6px 12px; background-color: #0003c9; color: white; border: none; transition: background-color 0.3s, color 0.3s, border 0.3s; font-size: 0.875rem;"
                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                onmouseout="this.style.backgroundColor='#0003c9'; this.style.color='white'; this.style.border='none';">
                                <i class="bi bi-eye"></i> Lihat
                                </a>

                                <a href="/betertibjakonusahasurat1/create/{{$item->id}}" class="btn btn-sm btn-warning" style="font-size: 0.875rem;" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button onclick="printModalContent({{ $item->id }})" class="btn btn-primary">
                                    <i class="bi bi-download"></i>
                                </button>

                                <div class="modal fade" id="modalKtp{{ $item->id }}" tabindex="-1" aria-labelledby="modalKtpLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content" style="font-size: 0.875rem;">
                                            <div class="modal-header d-flex align-items-center">
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <span class="mx-2">:</span>
                                                <p style="margin-left: 10px; font-size: 0.9rem; margin-bottom: 0;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 style="font-size: 1rem;">Pengawasan Tertib Usaha terhadap Kesesuaian Jenis, Sifat, Klasifikasi, dan Layanan Usaha</h5>
                                                <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha1->namabadanusaha ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 300px;"><strong>Status Perizinan Berusaha</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha1->statusperizinan ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>No NIB</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha1->nib ?? 'Data Belum Di Buat' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                        <td>
                                                            @if ($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->waktupengawasan && $item->surattertibjakonusaha1->waktupengawasanselesai)
                                                                {{ \Carbon\Carbon::parse($item->surattertibjakonusaha1->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                –
                                                                {{ \Carbon\Carbon::parse($item->surattertibjakonusaha1->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                            @else
                                                                <span class="text-muted">Belum Di Buat</span>
                                                            @endif
                                                        </td>


                                                    </tr>
                                                </table>

                                                {{-- <h6 class="mt-4" style="font-size: 0.9rem;">Detail Kegiatan:</h6> --}}
                                                <table style="width: 100%; border-collapse: collapse; font-size: 12px; color: #000;">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 50px;">No</th>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nama Paket Pekerjaan</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Jenis</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Sifat</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Subklasifikasi</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Layanan Usaha</th>
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Jenis Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Sifat Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Sub Klasifikasi</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Layanan Usaha</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian SBU</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #000; text-align: center;">1</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->namapaketpekerjaan ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->jenisusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaian ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->sifatusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaiansbu ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->subklasifikasi->kode ?? 'Data Belum Di Buat '}} {{$item->surattertibjakonusaha1->subklasifikasi->pekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianklasifikasi ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->layananusaha ?? 'Data Belum Di Buat'}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianlayananusaha ?? 'Data Belum Di Buat'}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="container" style="margin-top: 10px;">
                                                    <!-- Modal Card -->

                                                            <div class="container" style="margin-top: 10px;">
                                                                <div class="row">
                                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                                        <!-- Modal Card -->
                                                                        <div class="card" style="border: 1px solid white;">
                                                                            <div class="card-body">
                                                                                <!-- Tim Pemeriksa -->
                                                                                <div class="tim-pemeriksa-container">
                                                                                    <div class="tim-pemeriksa">
                                                                                        <h6 style="font-size: 0.9rem;">Tim Pemeriksa:</h6>
                                                                                        <table class="table table-sm">
                                                                                            <thead class="table-secondary">
                                                                                                <tr>
                                                                                                    <th style="width: 60px; font-size: 12px;" >No</th>
                                                                                                    <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                                                                                                    <th style="width: 150px; text-align: center; font-size: 12px;">Tanda Tangan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">1</td>
                                                                                                    <td style="font-size: 12px;">{{$item->surattertibjakonusaha1->tandatangan1->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan1 && $item->surattertibjakonusaha1->tandatangan1->tandatangan && file_exists(public_path('storage/' . $item->surattertibjakonusaha1->tandatangan1->tandatangan)))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha1->tandatangan1->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan1 && $item->surattertibjakonusaha1->tandatangan1->tandatangan)
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha1->tandatangan1->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p style="font-size: 11px;">Tidak Ada Tanda Tangan !</p>

                                                                                                                @endif
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">2</td>
                                                                                                    <td style="font-size: 12px;">{{$item->surattertibjakonusaha1->tandatangan2->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan2 && $item->surattertibjakonusaha1->tandatangan2->tandatangan && file_exists(public_path('storage/' . $item->surattertibjakonusaha1->tandatangan2->tandatangan)))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha1->tandatangan2->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan2 && $item->surattertibjakonusaha1->tandatangan2->tandatangan)
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha1->tandatangan2->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p style="font-size: 11px;">Tidak Ada Tanda Tangan !</p>

                                                                                                                @endif
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">3</td>
                                                                                                    <td style="font-size: 12px;">{{$item->surattertibjakonusaha1->tandatangan3->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan3 && $item->surattertibjakonusaha1->tandatangan3->tandatangan && file_exists(public_path('storage/' . $item->surattertibjakonusaha1->tandatangan3->tandatangan)))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha1->tandatangan3->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha1 && $item->surattertibjakonusaha1->tandatangan3 && $item->surattertibjakonusaha1->tandatangan3->tandatangan)
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha1->tandatangan3->tandatangan) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p style="font-size: 11px;">Tidak Ada Tanda Tangan !</p>

                                                                                                                @endif
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- ----------------------- SURAT TERTIB JAKON USAHA 2 ------------------------------------ --}}

                            <td style="text-align: center;">
                                <button class="btn btn-secondary btn-sm"
                                    style="border-radius: 15px; padding: 6px 12px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s; font-size: 0.875rem;"
                                    onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                    onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                    data-bs-toggle="modal" data-bs-target="#modalSurat2{{ $item->id }}">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <a href="/404"
                                class="btn btn-secondary btn-sm"
                                style="border-radius: 15px; padding: 6px 12px; background-color: #0003c9; color: white; border: none; transition: background-color 0.3s, color 0.3s, border 0.3s; font-size: 0.875rem;"
                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                onmouseout="this.style.backgroundColor='#0003c9'; this.style.color='white'; this.style.border='none';">
                                <i class="bi bi-eye"></i> Lihat
                                </a>

                                <a href="/404" class="btn btn-sm btn-warning" style="font-size: 0.875rem;" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button onclick="printModalContentSurat2({{ $item->id }})" class="btn btn-primary">
                                    <i class="bi bi-download"></i>
                                </button>
                                <div class="modal fade" id="modalSurat2{{ $item->id }}" tabindex="-1" aria-labelledby="modalSurat2Label{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content" style="font-size: 0.875rem;">
                                            <div class="modal-header d-flex align-items-center">
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                    <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                                </a>
                                                <span class="mx-2">:</span>
                                                <p style="margin-left: 10px; font-size: 0.9rem; margin-bottom: 0;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 style="font-size: 1rem;">Pengawasan Tertib Usaha Terhadap Kesesuaian Bentuk dan Kualifikasi Usaha dengan Kegiatan Usaha Jasa Konstruksi dan  <br> Segmentasi Pasar Jasa Konstruksi Secara Rutin </h5>
                                                <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha2->namabadanusaha ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 300px;"><strong>Status Perizinan Berusaha</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha2->statusperizinan ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>No NIB</strong></td>
                                                        <td>{{ $item->surattertibjakonusaha2->nib ?? 'Data Belum Di Buat ' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                        <td>
                                                            @if ($item->surattertibjakonusaha2 && $item->surattertibjakonusaha2->waktupengawasan && $item->surattertibjakonusaha2->waktupengawasanselesai)
                                                                {{ \Carbon\Carbon::parse($item->surattertibjakonusaha2->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                –
                                                                {{ \Carbon\Carbon::parse($item->surattertibjakonusaha2->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                            @else
                                                                <span class="text-muted">Belum Di Buat</span>
                                                            @endif
                                                        </td>


                                                    </tr>
                                                </table>

                                                {{-- <h6 class="mt-4" style="font-size: 0.9rem;">Detail Kegiatan:</h6> --}}
                                                <table style="width: 100%; border-collapse: collapse; font-size: 12px; color: #000;">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 50px;">No</th>
                                                            <th rowspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nama Paket Pekerjaan</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Bentuk</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kualifikasi</th>
                                                            {{-- <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Subklasifikasi</th>
                                                            <th colspan="2" style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Layanan Usaha</th> --}}
                                                        </tr>
                                                        <tr>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Bentuk</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>

                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">
                                                                <div>Kualifikasi</div>
                                                                <div style="font-size: 11px">Yang Dipersyaratkan</div>
                                                            </th>
                                                            <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesesuaian Dengan SBU</th>
>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="border: 1px solid #000; text-align: center;">1</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha2->namapaketpekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha2->bentuk ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha2->kesesuaiansbu ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha2->syaratkualifikasi ?? 'Data Belum Di Buat '}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha2->sbu ?? 'Data Belum Di Buat '}}</td>
                                                            {{-- <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->subklasifikasi}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianklasifikasi}}</td>
                                                            <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha1->layananusaha}}</td>
                                                            <td style="border: 1px solid #000; text-align:center;">{{$item->surattertibjakonusaha1->kesesuaianlayananusaha}}</td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="container" style="margin-top: 10px;">
                                                    <!-- Modal Card -->

                                                            <div class="container" style="margin-top: 10px;">
                                                                <div class="row">
                                                                    <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                                        <!-- Modal Card -->
                                                                        <div class="card" style="border: 1px solid white;">
                                                                            <div class="card-body">
                                                                                <!-- Tim Pemeriksa -->
                                                                                <div class="tim-pemeriksa-container">
                                                                                    <div class="tim-pemeriksa">
                                                                                        <h6 style="font-size: 0.9rem;">Tim Pemeriksa:</h6>
                                                                                        <table class="table table-sm">
                                                                                            <thead class="table-secondary">
                                                                                                <tr>
                                                                                                    <th style="width: 60px; font-size: 12px;" >No</th>
                                                                                                    <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                                                                                                    <th style="width: 150px; text-align: center; font-size: 12px;">Tanda Tangan</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">1</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>

                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">2</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="font-size: 12px;">3</td>
                                                                                                    {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha2->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                    <td style="height: 60px;">
                                                                                                        <div style="margin-top: 10px;">
                                                                                                            @if($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                <!-- Menampilkan gambar dari storage -->
                                                                                                                <img src="{{ asset('storage/' . $item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @elseif($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                <img src="{{ asset($item->surattertibjakonusaha2->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                            @else
                                                                                                                <!-- Placeholder jika tidak ada data -->
                                                                                                                <p>Data belum diupdate</p>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </td> --}}
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- ----------------------- SURAT TERTIB JAKON USAHA 3 ------------------------------------ --}}

                                                        <td style="text-align: center;">
                                                            <button class="btn btn-secondary btn-sm"
                                                                style="border-radius: 15px; padding: 6px 12px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s; font-size: 0.875rem;"
                                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                                data-bs-toggle="modal" data-bs-target="#modalSurat3{{ $item->id }}">
                                                                <i class="bi bi-eye"></i>
                                                            </button>

                                                            <a href="/404"
                                                            class="btn btn-secondary btn-sm"
                                                            style="border-radius: 15px; padding: 6px 12px; background-color: #0003c9; color: white; border: none; transition: background-color 0.3s, color 0.3s, border 0.3s; font-size: 0.875rem;"
                                                            onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                            onmouseout="this.style.backgroundColor='#0003c9'; this.style.color='white'; this.style.border='none';">
                                                            <i class="bi bi-eye"></i> Lihat
                                                            </a>

                                                            <a href="/404" class="btn btn-sm btn-warning" style="font-size: 0.875rem;" title="Edit">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                            <button onclick="printModalContentSurat3({{ $item->id }})" class="btn btn-primary">
                                                                <i class="bi bi-download"></i>
                                                            </button>
                                                            <div class="modal fade" id="modalSurat3{{ $item->id }}" tabindex="-1" aria-labelledby="modalSurat3Label{{ $item->id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                                    <div class="modal-content" style="font-size: 0.875rem;">
                                                                        <div class="modal-header d-flex align-items-center">
                                                                            <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                                                <img src="/assets/icon/logokabupatenblora.png" alt="Logo" width="25" class="me-2">
                                                                            </a>
                                                                            <a href="#" class="d-flex align-items-center" style="margin-right: 2px;">
                                                                                <img src="/assets/icon/pupr.png" alt="Logo" width="25" class="me-2">
                                                                            </a>
                                                                            <span class="mx-2">:</span>
                                                                            <p style="margin-left: 10px; font-size: 0.9rem; margin-bottom: 0;">Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Blora</p>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h5 style="font-size: 1rem;">Pengawasan Terhadap Pemenuhan Persyaratan Usaha Jasa Konstruksi Secara Rutin </h5>
                                                                            <table class="table table-bordered table-sm" style="font-size: 14px;">
                                                                                <tr>
                                                                                    <td style="width: 200px;"><strong>Nama Badan Usaha</strong></td>
                                                                                    <td>{{ $item->surattertibjakonusaha3->namabadanusaha ?? 'Data Belum Di Buat ' }}</td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td style="width: 200px;"><strong>Waktu Pengawasan</strong></td>
                                                                                    <td>
                                                                                        @if ($item->surattertibjakonusaha3 && $item->surattertibjakonusaha3->waktupengawasan && $item->surattertibjakonusaha3->waktupengawasanselesai)
                                                                                            {{ \Carbon\Carbon::parse($item->surattertibjakonusaha3->waktupengawasan)->isoFormat('D MMMM YYYY') }}
                                                                                            –
                                                                                            {{ \Carbon\Carbon::parse($item->surattertibjakonusaha3->waktupengawasanselesai)->isoFormat('D MMMM YYYY') }}
                                                                                        @else
                                                                                            <span class="text-muted">Belum Di Buat</span>
                                                                                        @endif
                                                                                    </td>

                                                                                </tr>
                                                                            </table>

                                                                            {{-- <h6 class="mt-4" style="font-size: 0.9rem;">Detail Kegiatan:</h6> --}}
                                                                            <table style="width: 100%; border-collapse: collapse; font-size: 12px; color: #000;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000; width: 50px;">No</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nama BUJK</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nomor Induk Berusaha (NIB) </th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">PJBU</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Jenis Usaha</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Klasifikasi/Subklasifikasi</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Nomor Sertifikat Standar</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Kesimpulan Pemeriksaaan</th>
                                                                                        <th style="border: 1px solid #000; text-align: center; background-color: #f8f9fa; color: #000;">Catatan Pemeriksa</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td style="border: 1px solid #000; text-align: center;">1</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->namabujk ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->nib ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->pjbu ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->jenisusaha ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->subklasifikasi->kode ?? 'Data Belum Di Buat '}} {{$item->surattertibjakonusaha3->subklasifikasi->pekerjaan ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->nomorsertifikat ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->kesimpulan ?? 'Data Belum Di Buat '}}</td>
                                                                                        <td style="border: 1px solid #000;">{{$item->surattertibjakonusaha3->catatanpemeriksaan ?? 'Data Belum Di Buat '}}</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                            <div class="container" style="margin-top: 10px;">
                                                                                <!-- Modal Card -->

                                                                                        <div class="container" style="margin-top: 10px;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 ms-auto"> <!-- col 6 dan di sebelah kanan -->
                                                                                                    <!-- Modal Card -->
                                                                                                    <div class="card" style="border: 1px solid white;">
                                                                                                        <div class="card-body">
                                                                                                            <!-- Tim Pemeriksa -->
                                                                                                            <div class="tim-pemeriksa-container">
                                                                                                                <div class="tim-pemeriksa">
                                                                                                                    <h6 style="font-size: 0.9rem;">Tim Pemeriksa:</h6>
                                                                                                                    <table class="table table-sm">
                                                                                                                        <thead class="table-secondary">
                                                                                                                            <tr>
                                                                                                                                <th style="width: 60px; font-size: 12px;" >No</th>
                                                                                                                                <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                                                                                                                                <th style="width: 150px; text-align: center; font-size: 12px;">Tanda Tangan</th>
                                                                                                                            </tr>
                                                                                                                        </thead>
                                                                                                                        <tbody>
                                                                                                                            <tr>
                                                                                                                                <td style="font-size: 12px;">1</td>
                                                                                                                                {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha3->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                                                <td style="height: 60px;">
                                                                                                                                    <div style="margin-top: 10px;">
                                                                                                                                        @if($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                                            <!-- Menampilkan gambar dari storage -->
                                                                                                                                            <img src="{{ asset('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @elseif($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                                            <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                                            <img src="{{ asset($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @else
                                                                                                                                            <!-- Placeholder jika tidak ada data -->
                                                                                                                                            <p>Data belum diupdate</p>
                                                                                                                                        @endif
                                                                                                                                    </div>

                                                                                                                                </td> --}}
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td style="font-size: 12px;">2</td>
                                                                                                                                {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha3->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                                                <td style="height: 60px;">
                                                                                                                                    <div style="margin-top: 10px;">
                                                                                                                                        @if($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                                            <!-- Menampilkan gambar dari storage -->
                                                                                                                                            <img src="{{ asset('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @elseif($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                                            <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                                            <img src="{{ asset($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @else
                                                                                                                                            <!-- Placeholder jika tidak ada data -->
                                                                                                                                            <p>Data belum diupdate</p>
                                                                                                                                        @endif
                                                                                                                                    </div>
                                                                                                                                </td> --}}
                                                                                                                            </tr>
                                                                                                                            <tr>
                                                                                                                                <td style="font-size: 12px;">3</td>
                                                                                                                                {{-- <td style="font-size: 12px;">{{$item->surattertibjakonusaha3->tandatangan->namalengkap ?? 'Tidak Ada Tim Pemeriksa'}}</td>
                                                                                                                                <td style="height: 60px;">
                                                                                                                                    <div style="margin-top: 10px;">
                                                                                                                                        @if($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ' && file_exists(public_path('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')))
                                                                                                                                            <!-- Menampilkan gambar dari storage -->
                                                                                                                                            <img src="{{ asset('storage/' . $item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @elseif($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ')
                                                                                                                                            <!-- Menampilkan gambar dari path luar storage -->
                                                                                                                                            <img src="{{ asset($item->surattertibjakonusaha3->tandatangan->tandatangan ?? 'Data Belum Di Buat ') }}" alt="Gambar Peraturan" style="width: 100%; max-height: 100px; object-fit: contain;" loading="lazy">
                                                                                                                                        @else
                                                                                                                                            <!-- Placeholder jika tidak ada data -->
                                                                                                                                            <p>Data belum diupdate</p>
                                                                                                                                        @endif
                                                                                                                                    </div>
                                                                                                                                </td> --}}
                                                                                                                            </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                            {{-- ----------------------- SURAT TERTIB JAKON USAHA 4 ------------------------------------ --}}

                                                        <td style="text-align: center;">
                                                            {{-- <button class="btn btn-secondary btn-sm"
                                                                style="border-radius: 15px; padding: 6px 12px; background-color: #6c757d; color: white; border: none; transition: background-color 0.3s, color 0.3s; font-size: 0.875rem;"
                                                                onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#6c757d'; this.style.border='1px solid #6c757d';"
                                                                onmouseout="this.style.backgroundColor='#6c757d'; this.style.color='white'; this.style.border='none';"
                                                                data-bs-toggle="modal" data-bs-target="#modalSurat3{{ $item->id }}">
                                                                <i class="bi bi-eye"></i>
                                                            </button> --}}
                                                            <a href="/404" class="btn btn-sm btn-warning" style="font-size: 0.875rem;" title="Edit">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                        </td>


                                        </div>
                                    </div>
                                </div>
                            </div>
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
    function exportSelectedColumnsToExcel(originalTableId, filename = 'data-terpilih') {
        const originalTable = document.getElementById(originalTableId);
        const selectedColumns = [
            0,  // No
            1,  // Penyedia
            2,  // NIB
            3,  // Nama Pekerjaan
            4,  // Tahun Pelaksanaan
            5,  // Badan Usaha
            6,  // PJBU
            7,  // Sesuai Jenis
            8,  // Sesuai Sifat
            9,  // Sesuai Klasifikasi
            10, // Sesuai Layanan
            11, // Sesuai Bentuk
            12, // Sesuai Kualifikasi
            13, // Pemenuhan Syarat
            14  // Pelaksanaan Pengembangan Usaha
        ];

        const nibColumnIndexInExport = selectedColumns.indexOf(2); // NIB akan berada di kolom ini dalam tabel hasil export

        const tempTable = document.createElement('table');
        for (const row of originalTable.rows) {
            const newRow = tempTable.insertRow();
            selectedColumns.forEach(i => {
                const cell = row.cells[i];
                if (cell) {
                    const newCell = cell.cloneNode(true);
                    newRow.appendChild(newCell);
                }
            });
        }

        const worksheet = XLSX.utils.table_to_sheet(tempTable);

        const range = XLSX.utils.decode_range(worksheet['!ref']);
        for (let R = range.s.r; R <= range.e.r; ++R) {
            for (let C = range.s.c; C <= range.e.c; ++C) {
                const cell_address = { c: C, r: R };
                const cell_ref = XLSX.utils.encode_cell(cell_address);
                const cell = worksheet[cell_ref];
                if (!cell) continue;
                if (!cell.s) cell.s = {};

                // Set style border
                cell.s.border = {
                    top: { style: "thin", color: { auto: 1 } },
                    right: { style: "thin", color: { auto: 1 } },
                    bottom: { style: "thin", color: { auto: 1 } },
                    left: { style: "thin", color: { auto: 1 } }
                };

                // Set alignment
                cell.s.alignment = {
                    vertical: "center",
                    horizontal: "center",
                    wrapText: true
                };

                // Pastikan kolom NIB disimpan sebagai teks (hindari notasi eksponensial)
                if (C === nibColumnIndexInExport && R > 0) {
                    cell.z = '@'; // Format text
                    cell.t = 's'; // Tipe string
                    cell.v = "'" + cell.v; // Tambah apostrof untuk paksa teks
                }
            }
        }

        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Kolom Terpilih");

        XLSX.writeFile(workbook, filename + ".xlsx");
    }
    </script>


<script>
    function printModalContent(id) {
        const modalContent = document.querySelector(`#modalKtp${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat2(id) {
        const modalContent = document.querySelector(`#modalSurat2${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>

<script>
    function printModalContentSurat3(id) {
        const modalContent = document.querySelector(`#modalSurat3${id} .modal-content`);
        if (!modalContent) {
            alert("Konten tidak ditemukan.");
            return;
        }

        const printWindow = window.open('', '', 'width=1200,height=800');
        printWindow.document.write(`
            <html>
            <head>
                <title>Print Dokumen</title>
                <style>
                    @media print {
                        @page {
                            size: A4 landscape;
                            margin: 0mm;
                        }
                        body {
                            font-family: Arial, sans-serif;
                            font-size: 12px;
                            color: #000;
                        }
                        table {
                            border-collapse: collapse;
                            width: 100%;
                            page-break-inside: auto;
                        }
                        th, td {
                            border: 1px solid #000;
                            padding: 4px;
                            vertical-align: top;
                        }
                        .no-border td {
                            border: none;
                        }
                    }

                    body {
                        margin: 10mm;
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                    }

                    h5 {
                        font-size: 1rem;
                        margin-bottom: 10px;
                    }

                    .table-bordered {
                        border: 1px solid #000;
                        width: 100%;
                        margin-top: 10px;
                    }

                    .table-bordered th, .table-bordered td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: left;
                    }

                    .table-secondary {
                        background-color: #f8f9fa;
                    }

                    /* Penyesuaian khusus untuk bagian tim pemeriksa */
                    .tim-pemeriksa-container {
                        display: flex;
                        justify-content: flex-end;
                    }

                    .tim-pemeriksa {
                        width: 50%;
                    }

                    .tim-pemeriksa table {
                        width: 100%;
                        border: 1px solid #000;
                    }

                    .tim-pemeriksa td, .tim-pemeriksa th {
                        text-align: center;
                        padding: 3px;
                        height: 15px;
                        font-size: 11px;
                    }
                </style>
            </head>
            <body>
                ${modalContent.innerHTML}
                <script>
                    window.onload = function() {
                        window.print();
                        window.onafterprint = window.close;
                    }
                <\/script>
            </body>
            </html>
        `);
        printWindow.document.close();
    }
</script>
