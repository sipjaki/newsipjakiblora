

<style>
    .btn-suspend {
         background-color: orange;
         color: white;
         padding: 5px 10px;
         border-radius: 5px;
         font-size: 14px;
     }

     .btn-expired {
         background-color: red;
         color: white;
         padding: 5px 10px;
         border-radius: 5px;
         font-size: 14px;
     }

     .btn-active {
         background-color: green;
         color: white;
         padding: 5px 10px;
         border-radius: 5px;
         font-size: 14px;
     }

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
 {{-- ================================ --}}

 @include('frontend.00_approve.01_cssterpisah.header')

     {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
     @include('frontend.00_approve.01_cssterpisah.header1')

 <!-- Wrapper Background Section -->
 <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">

 <!-- Breadcrumb + Search Bar -->
 <div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins">
     <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

       <!-- KIRI: Gambar + Breadcrumb -->
       <div class="flex items-center gap-4">
         <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" />
         <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
           <span>/</span>
           <a href="/agendapembinaan" class="font-medium text-blue-600" style="font-size: 16px;">
             {{$title}}
           </a>
           <span>/</span>
           <a href="/404" class="font-medium" style="font-size: 16px; color:blue;">
             Informasi Agenda Pelatihan TKK Kabupaten Blora
           </a>
         </div>
       </div>


       <!-- KANAN: Search Bar -->
    <!-- Search Bar Wrapper -->

     </div>
   </div>

     <!-- Konten Data -->
     <div class="full-width-container mx-auto px-4 pb-10">
         <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
             <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                 <div style="width: 100%; max-width: 500px;"> <!-- Optional max-width buat tampilan elegan -->
                     <button type="button" style="
                         display: inline-flex;
                         align-items: center;
                         justify-content: center;
                         gap: 10px;
                         padding: 12px 20px;
                         font-size: 16px;
                         font-family: 'Poppins', sans-serif;
                         border: 1px solid #28a745;
                         background-color: #28a745;
                         color: white;
                         border-radius: 6px;
                         cursor: pointer;
                         transition: all 0.3s ease;
                         width: 100%;
                     "
                     onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                     onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                     >
                         <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                         {{ $title }}
                     </button>
                 </div>
             </div>





             <section class="news-details-section" style="background-image: url(assets/00_dokmasjaki/03_datajakon/bannerbetter.jpg);">
                <div class="container" style="margin-top: -125px;">
                    <div class="row">
                        <!-- Kolom Konten Utama -->
                        <div class="col-lg-8">
                            <div class="news-details-box-image">
                                <div class="news-details-box-image-inner">
                                    <img src="{{ asset('storage/' . $data->foto) }}" class="img-fluid" alt="img-193">
                                    <a href="news-details.html" class="news-details-box-date">
                                        {{ \Carbon\Carbon::parse($data->waktupelaksanaan)->translatedFormat('l, d F Y') }}
                                    </a>
                                </div>
                            </div>

                            <br><br>

                            <div class="news-details-content-box" style="margin-left: 25px;">
                                <h4 style="font-family: Poppins;">{{ $data->namakegiatan }}</h4>
                                <p style="font-family: Poppins;">{{ $data->isiagenda }}</p>
                            </div>
                        </div>

                        <!-- Kolom Sidebar -->
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-form-content">
                                    <div class="sidebar__item sidebar__item--search">
                                        <div style="display: flex; justify-content: center; gap: 20px; padding: 20px;">
                                            <a href="/agendapembinaan">
                                                <button style="padding: 12px 24px; font-size: 16px; border-radius: 8px; background-color: navy; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                                    <i class="fas fa-arrow-left" style="margin-right: 8px;"></i><span style="font-family: Poppins;">Kembali</span>

                                                </button>
                                            </a>
                                            <a href="/404">
                                                <button style="padding: 12px 24px; font-size: 16px; border-radius: 8px; background-color: navy; color: white; border: none; transition: background-color 0.3s, color 0.3s;"
                                                        onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                        onmouseout="this.style.backgroundColor='navy'; this.style.color='white';">
                                                        <i class="fas fa-file-alt" style="margin-right: 8px;"></i><span style="font-family: Poppins;">Daftar</span>

                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="sidebar-widget sidebar-widget-recent-post" style="font-family: Poppins;">
                                    <h4 style="font-family: Poppins;">Penyelenggara</h4>
                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <p style="font-size:18px;" style="font-family: Poppins;"><span style="font-family: Poppins;">{{ $data->penyelenggara }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 style="font-family: Poppins;">Waktu Pelaksanaan</h4>
                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <p style="font-size:18px;" style="font-family: Poppins;"><span style="font-family: Poppins;">{{ \Carbon\Carbon::parse($data->waktupelaksanaan)->translatedFormat('d F Y') }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 style="font-family: Poppins;">Lokasi</h4>
                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <p style="font-size:18px;" style="font-family: Poppins;"><span style="font-family: Poppins;">{{ $data->lokasi }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 style="font-family: Poppins;">Jumlah Peserta</h4>
                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <p style="font-size:18px;" style="font-family: Poppins;"><span style="font-family: Poppins;">{{ $data->jumlahpeserta }} Peserta </span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 style="font-family: Poppins;">Keterangan</h4>
                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <p style="font-size:18px;" style="font-family: Poppins;"><span style="font-family: Poppins;">{{ $data->keterangan }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <h4 style="font-weight: bold;">DOWNLOAD MATERI PELATIHAN</h4>
                                </div>

                                <div style="margin: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                        <table class="zebra-table custom-fl-table" id="sortableTable">
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


                            </div><!-- sidebar -->
                        </div><!-- col-lg-4 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>

         </div>
     </div>
     <br><br><br>

 </section>


 <div class="progress-wrap">
           <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
               <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
           </svg>
       </div>
       <!-- back to top end -->

     </div>


 @include('frontend.00_approve.01_cssterpisah.footer1')
 @include('frontend.00_approve.01_cssterpisah.footer')

