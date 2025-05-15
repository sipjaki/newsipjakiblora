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
{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

<!-- Wrapper Background Section -->
<section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">

<!-- Breadcrumb + Search Bar -->
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins" sty>
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

      <!-- KIRI: Gambar + Breadcrumb -->
      <div class="flex items-center gap-4">
        <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" loading="lazy" />
        <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
          <span>/</span>
          <a href="#" class="font-medium text-blue-600" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
          {{-- <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px;">
            Data Statistik
          </a> --}}
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
                        <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;" loading="lazy">
                        {{ $title }}
                    </button>
                </div>
            </div>


            <section class="news-details-section" style="margin-top:-120px; margin-bottom:-100px;">
                    <div class="row">
                        <div class="col-lg-8">

                            {{-- @foreach ($data->skip(0)->take(1) as $item) --}}

                            <div class="news-details-box-image">
                                <div class="news-details-box-image-inner">
                                    <div style="margin-top: 10px;">
                                        @if($data->foto1 && file_exists(public_path('storage/' . $data->foto1)))
                                            <!-- Menampilkan gambar dari storage -->
                                            <img src="{{ asset('storage/' . $data->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 600px; object-fit: contain;" loading="lazy">
                                        @elseif($data->foto1)
                                            <!-- Menampilkan gambar dari path luar storage -->
                                            <img src="{{ asset($data->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 600px; object-fit: contain;" loading="lazy">
                                        @else
                                            <!-- Placeholder jika tidak ada data -->
                                            <p>Data belum diupdate</p>
                                        @endif
                                    </div>
                                    <a href="#" class="news-details-box-date" style="font-family: 'Poppins', sans-serif;">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</a>
                                </div><!-- news-details-box-image-inner -->
                            </div><!-- news-details-box-image -->

                            <br><br>
                            <div class="news-details-content-box" style="margin-left: 25px;">
                                <h4 style="font-family: 'Poppins', sans-serif;">{{$data->judul}}</h4>
                                <br>

                                <div style="display: flex; gap: 10px; margin-top: 10px;">
                                    <div style="width: 50%;">
                                        @if($data->foto1 && file_exists(public_path('storage/' . $data->foto1)))
                                            <img src="{{ asset('storage/' . $data->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @elseif($data->foto1)
                                            <img src="{{ asset($data->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @else
                                            <p>Data belum diupdate</p>
                                        @endif
                                    </div>

                                    <div style="width: 50%;">
                                        @if($data->foto2 && file_exists(public_path('storage/' . $data->foto2)))
                                            <img src="{{ asset('storage/' . $data->foto2) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @elseif($data->foto2)
                                            <img src="{{ asset($data->foto2) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                        @else
                                            <p>Data belum diupdate</p>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <p style="text-align: justify; font-family: 'Poppins', sans-serif;">{{$data->keterangan}}
<br><br>

                                    <div class="flex flex-col gap-[2px] mt-2">
                                        @if($data->berkas && file_exists(public_path('storage/' . $data->berkas)))
                                            <!-- Tombol aktif dengan file dari storage -->
                                            <div class="ml-auto">
                                                <button id="sertifikat-btn" class="badge"
                                                    style="background-color: navy; color: white; border: none; transition: 0.3s; padding:20px 20px; font-size: 13px; border-radius:5px;"
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='1px solid black';"
                                                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white'; this.style.border='none';">
                                                    <i class="fas fa-download" style="margin-right:5px;"></i><span style="font-family: 'Poppins', sans-serif;">Download .pdf</span>
                                                </button>
                                            </div>

                                            <script>
                                                document.getElementById('sertifikat-btn').addEventListener('click', function () {
                                                    const fileUrl = "{{ asset('storage/' . $data->berkas) }}";
                                                    const a = document.createElement('a');
                                                    a.href = fileUrl;
                                                    a.download = '';
                                                    document.body.appendChild(a);
                                                    a.click();
                                                    document.body.removeChild(a);
                                                });
                                            </script>

                                        @elseif($data->berkas)
                                            <!-- Tombol aktif dengan file dari path publik -->
                                            <div class="ml-auto">
                                                <button id="sertifikat-btn" class="badge"
                                                    style="background-color: navy; color: white; border: none; transition: 0.3s; padding:10px 20px; font-size: 13px; border-radius:5px;"
                                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='1px solid black';"
                                                    onmouseout="this.style.backgroundColor='navy'; this.style.color='white'; this.style.border='none';">
                                                    <i class="fas fa-download" style="margin-right:5px;"></i> Download .pdf
                                                </button>
                                            </div>

                                            <script>
                                                document.getElementById('sertifikat-btn').addEventListener('click', function () {
                                                    const fileUrl = "{{ asset($data->berkas) }}";
                                                    const a = document.createElement('a');
                                                    a.href = fileUrl;
                                                    a.download = '';
                                                    document.body.appendChild(a);
                                                    a.click();
                                                    document.body.removeChild(a);
                                                });
                                            </script>

                                        @else
                                            <!-- Tombol disable jika tidak ada file -->
                                            <div class="ml-auto">
                                                <button class="badge" disabled
                                                    style="background-color: gray; color: white; border: none; padding:10px 20px; font-size: 13px; border-radius:5px; cursor: not-allowed;">
                                                    <i class="fas fa-download" style="margin-right:5px;"></i> File belum tersedia
                                                </button>
                                            </div>
                                        @endif
                                    </div>

                                </p>

                            </div><!-- /.news-details-content-box -->

                            {{-- @endforeach --}}

                        </div><!-- col-lg-8 -->

                        <div class="col-lg-4">
                            <div class="sidebar">
                            <div class="sidebar-widget sidebar-widget-recent-post">
                                    <h4 style="font-family: 'Poppins', sans-serif;">Daftar Artikel Jakon</h4>

                                    @foreach ($dataartikel->skip(1)->take(7) as $item)

                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-img">
                                            <div style="margin-top: 10px;">
                                                @if($item->foto1 && file_exists(public_path('storage/' . $item->foto1)))
                                                    <!-- Menampilkan gambar dari storage -->
                                                    <img src="{{ asset('storage/' . $item->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @elseif($item->foto1)
                                                    <!-- Menampilkan gambar dari path luar storage -->
                                                    <img src="{{ asset($item->foto1) }}" alt="Gambar berkas" style="width: 100%; max-height: 300px; object-fit: contain;" loading="lazy">
                                                @else
                                                    <!-- Placeholder jika tidak ada data -->
                                                    <p>Data belum diupdate</p>
                                                @endif
                                            </div>
                                        </div><!-- sidebar-recent-post-img -->
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <span class="author" style="font-family: 'Poppins', sans-serif;">
                                                            Penulis : <a href="news-details.html">{{$data->user->name}}</a>
                                                        </span><!-- author -->
                                                    </div><!-- sidebar-meta-icon -->
                                                </div><!-- sidebar-meta-item -->
                                                <div class="sidebar-post-title">
                                                    <h5 style="font-family: 'Poppins', sans-serif;"><a href="/artikeljakon/{{$item->judul}}">{{$item->judul}}</a></h5>
                                                </div><!-- sidebar-post-title -->
                                            </div><!-- sidebar-meta -->
                                        </div><!-- sidebar-recent-post-content -->
                                    </div><!-- sidebar-recent-post -->


                                    @endforeach


                                </div><!-- sidebar-widget sidebar-widget-recent-post -->


                                {{-- <div class="sidebar-widget sidebar-widget-recent-category">
                                    <div class="sidebar-widget-recent-category-box">
                                        <h4 class="section-title text-left">Categories</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="news-details.html">City News<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Community<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Culture <i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Devlopement<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Government<i class="fa-solid fa-chevron-right"></i></a></li>
                                        </ul><!-- list-unstyled -->
                                    </div><!-- sidebar-widget-recent-category-box -->
                                </div><!-- sidebar-widget-one sidebar-widget-recent-category --> --}}
                                {{-- <div class="sidebar-widget sidebar-widget-tag">
                                    <h4>Tags</h4>
                                    <div class="sidebar-widget-tag-inner">
                                        <a href="news-details.html">Culture</a>
                                        <a href="news-details.html">Government</a>
                                        <a href="news-details.html">City</a>
                                        <a href="news-details.html">Development</a>
                                        <a href="news-details.html">Life</a>
                                    </div><!-- sidebar-widget-tag-inner -->
                                </div><!-- sidebar-widget sidebar-widget-tag --> --}}
                            </div><!-- sidebar -->
                        </div><!-- col-lg-4 -->
                    </div><!-- row -->
            </section><!--causes-one-section-->


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
